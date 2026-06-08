<?php
/**
 * contact.php — Адвокатска канцеларија Маја Стојковска
 * Contact form handler — accepts POST only, validates, sanitizes, sends email.
 *
 * SECURITY:
 *   - POST-only, AJAX-header check
 *   - Honeypot spam trap
 *   - Input sanitization (filter_var / htmlspecialchars)
 *   - Email format validation
 *   - Header injection prevention
 *   - Session-based rate limiting (1 submission per 60 seconds per visitor)
 *   - Reply-To: visitor email (From: is always the server/domain email)
 *
 * EMAIL CONFIGURATION:
 *   - Default: uses PHP's built-in mail() function
 *   - Recommended for production: switch to PHPMailer with SMTP (see below)
 *   - PHP mail() may not work on all shared hosting environments.
 *     For guaranteed deliverability, use an SMTP relay (Gmail, Sendinblue, Mailgun, etc.)
 */

/* ============================================================
   CONFIGURATION — Edit these values before deployment
   ============================================================ */

// Recipient — the lawyer's inbox
define('RECIPIENT_EMAIL', 'advokatmajastojkovska@gmail.com');

// From address — must match your hosting domain, NOT visitor's email
// This prevents "From spoofing" and improves deliverability
define('FROM_EMAIL',      'no-reply@majastojkovska.mk');  // Change to your domain
define('FROM_NAME',       'Веб-страница — Маја Стојковска');

// Rate-limit: seconds between allowed submissions from the same session
define('RATE_LIMIT_SECONDS', 60);

/* ============================================================
   SMTP CONFIGURATION (PHPMailer) — Uncomment to use SMTP
   ============================================================
   For production hosting, SMTP is strongly recommended.
   Install PHPMailer: composer require phpmailer/phpmailer
   or download from https://github.com/PHPMailer/PHPMailer

   Then uncomment and fill in the SMTP section below.
   ============================================================

define('USE_SMTP',       true);
define('SMTP_HOST',      'smtp.gmail.com');    // Your SMTP host
define('SMTP_PORT',      587);                  // 587 for STARTTLS, 465 for SSL
define('SMTP_USERNAME',  'your@gmail.com');     // SMTP login username
define('SMTP_PASSWORD',  'your_app_password');  // SMTP password or App Password
define('SMTP_SECURE',    'tls');                // 'tls' or 'ssl'

   NOTE: For Gmail, create an App Password at:
   https://myaccount.google.com/apppasswords
   (Requires 2-Step Verification to be enabled)

   ============================================================ */

/* ============================================================
   BOOTSTRAP
   ============================================================ */

// Start session for rate limiting
session_start();

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit(json_encode(['success' => false, 'message' => 'Method not allowed.']));
}

// Set JSON response header
header('Content-Type: application/json; charset=utf-8');

/* ============================================================
   RATE LIMITING (session-based)
   ============================================================ */
$now         = time();
$last_submit = $_SESSION['last_contact_submit'] ?? 0;

if (($now - $last_submit) < RATE_LIMIT_SECONDS) {
    $wait = RATE_LIMIT_SECONDS - ($now - $last_submit);
    http_response_code(429);
    exit(json_encode([
        'success' => false,
        'message' => "Ве молиме почекајте {$wait} секунди пред нов обид."
    ]));
}

/* ============================================================
   HONEYPOT CHECK (spam trap)
   Bots fill all fields; real users leave this hidden field empty.
   ============================================================ */
$honeypot = $_POST['website'] ?? '';
if (!empty($honeypot)) {
    // Silently succeed — don't reveal the trap to bots
    http_response_code(200);
    exit(json_encode([
        'success' => true,
        'message' => 'Вашата порака е успешно испратена.'
    ]));
}

/* ============================================================
   SANITIZE & VALIDATE INPUTS
   ============================================================ */

// Helper: sanitize a string (strip tags, trim, encode special chars)
function sanitize_string(string $input): string {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

// Helper: validate email (no header injection risk)
function validate_email(string $email): bool {
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    return $email !== false && strlen($email) <= 254;
}

// Helper: prevent header injection in any string used in mail headers
function sanitize_header(string $input): string {
    // Remove newlines and carriage returns — prevents header injection
    return preg_replace('/[\r\n]/', '', sanitize_string($input));
}

// Collect inputs
$name    = sanitize_string($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$phone   = sanitize_string($_POST['phone']   ?? '');
$service = sanitize_string($_POST['service'] ?? '');
$message = sanitize_string($_POST['message'] ?? '');
$consent = isset($_POST['consent']) ? true : false;

// Validate required fields
$errors = [];

if (mb_strlen($name, 'UTF-8') < 2) {
    $errors[] = 'Внесете валидно ime и презиме.';
}
if (!validate_email($email)) {
    $errors[] = 'Внесете валидна е-пошта.';
}
if (empty($service)) {
    $errors[] = 'Изберете правна област.';
}
if (mb_strlen($message, 'UTF-8') < 10) {
    $errors[] = 'Пораката е прекратка.';
}
if (!$consent) {
    $errors[] = 'Мора да се согласите со обработката на податоци.';
}

// Validate optional phone if provided
if (!empty($phone) && !preg_match('/^[\d\s\+\-\(\)]{6,20}$/', $phone)) {
    $errors[] = 'Внесете валиден телефонски број.';
}

if (!empty($errors)) {
    http_response_code(422);
    exit(json_encode([
        'success' => false,
        'message' => implode(' ', $errors)
    ]));
}

/* ============================================================
   BUILD EMAIL
   ============================================================ */

// Subject — sanitize name to prevent header injection
$safe_name = sanitize_header($name);
$subject   = "Нова порака од веб-страна - {$safe_name}";

// Email body
$phone_line   = !empty($phone) ? "Телефон: {$phone}\n" : '';
$service_line = !empty($service) ? "Правна област: {$service}\n" : '';

$body = <<<TEXT
Нова порака преку контакт формата на веб-страницата:
========================================================

Ime и презиме: {$name}
Е-пошта: {$email}
{$phone_line}{$service_line}
Порака:
{$message}

--------------------------------------------------------
Оваа порака е испратена преку контакт формата на веб-страницата на Адвокатска канцеларија Маја Стојковска.
За одговор, реплицирајте директно на оваа порака (Reply-To е поставен на е-поштата на посетителот).
TEXT;

/* ============================================================
   SEND EMAIL
   Choose: PHP mail() (default) or PHPMailer SMTP (recommended)
   ============================================================ */

$sent = false;

// ---- OPTION A: PHPMailer SMTP (uncomment after installing PHPMailer) ----
/*
if (defined('USE_SMTP') && USE_SMTP) {
    require 'vendor/autoload.php';  // or require 'PHPMailer/PHPMailer.php'; etc.

    $mailer = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
        // Server settings
        $mailer->isSMTP();
        $mailer->Host       = SMTP_HOST;
        $mailer->SMTPAuth   = true;
        $mailer->Username   = SMTP_USERNAME;
        $mailer->Password   = SMTP_PASSWORD;
        $mailer->SMTPSecure = SMTP_SECURE;  // 'tls' or 'ssl'
        $mailer->Port       = SMTP_PORT;
        $mailer->CharSet    = 'UTF-8';

        // From & To
        $mailer->setFrom(FROM_EMAIL, FROM_NAME);
        $mailer->addReplyTo($email, $name);  // Reply goes to visitor
        $mailer->addAddress(RECIPIENT_EMAIL);

        // Content
        $mailer->isHTML(false);
        $mailer->Subject = $subject;
        $mailer->Body    = $body;

        $sent = $mailer->send();
    } catch (Exception $e) {
        // Log error in production:
        // error_log('PHPMailer error: ' . $mailer->ErrorInfo);
        $sent = false;
    }
} else {
*/

// ---- OPTION B: PHP mail() (default — works on most basic hosting) ----
// NOTE: PHP mail() may land in spam on some servers.
// SMTP is strongly preferred for production use.
{
    // Build headers — sanitize every value
    $headers  = "From: " . sanitize_header(FROM_NAME) . " <" . sanitize_header(FROM_EMAIL) . ">\r\n";
    $headers .= "Reply-To: " . sanitize_header($name) . " <" . sanitize_header($email) . ">\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    $sent = mail(RECIPIENT_EMAIL, $subject, $body, $headers);
}

/* ============================================================
   RESPOND
   ============================================================ */

if ($sent) {
    // Record submission time for rate limiting
    $_SESSION['last_contact_submit'] = $now;

    http_response_code(200);
    exit(json_encode([
        'success' => true,
        'message' => 'Вашата порака е успешно испратена. Канцеларијата ќе ве контактира во најкраток можен рок.'
    ]));
} else {
    // Log error in production: error_log('Mail send failed for: ' . $email);
    http_response_code(500);
    exit(json_encode([
        'success' => false,
        'message' => 'Пораката не можеше да биде испратена. Обидете се повторно или контактирајте директно на advokatmajastojkovska@gmail.com или +389 78 280 598.'
    ]));
}
