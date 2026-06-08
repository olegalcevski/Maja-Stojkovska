# Адвокатска канцеларија Маја Стојковска — Website

A premium, production-ready law office website built in PHP + vanilla CSS/JS.

---

## 📁 File Structure

```
/
├── index.php       — Main HTML page (full Macedonian content)
├── style.css       — Complete CSS stylesheet (design system)
├── script.js       — Vanilla JavaScript (interactions, form, animations)
├── contact.php     — PHP mail handler (validation + send)
└── README.md       — This file
```

---

## 🚀 Quick Setup (Local PHP Server)

### Requirements
- PHP 7.4 or higher
- A web server (Apache/Nginx) OR PHP's built-in server

### Option A — PHP built-in server (for local testing)

```bash
cd /path/to/website-folder
php -S localhost:8080
```
Then open: http://localhost:8080

### Option B — XAMPP / WAMP / MAMP

Copy the folder into your `htdocs` or `www` directory and visit:
`http://localhost/your-folder-name`

---

## ✉️ Contact Form Setup

### Important — Read Before Going Live

The form sends email via `contact.php`. Out of the box it uses PHP's native `mail()` function, which **may not work** on all shared hosting environments and may land in spam.

### For Production (Recommended): Use SMTP via PHPMailer

1. Install PHPMailer:
   ```bash
   composer require phpmailer/phpmailer
   ```
   Or download from: https://github.com/PHPMailer/PHPMailer

2. Open `contact.php` and:
   - Find the SMTP configuration block (around line 55–80)
   - Uncomment and fill in:
     ```php
     define('USE_SMTP',       true);
     define('SMTP_HOST',      'smtp.gmail.com');
     define('SMTP_PORT',      587);
     define('SMTP_USERNAME',  'your@gmail.com');
     define('SMTP_PASSWORD',  'your_app_password');
     define('SMTP_SECURE',    'tls');
     ```
   - Uncomment the PHPMailer block (Option A) and comment out Option B

3. **For Gmail**, create an App Password at:
   https://myaccount.google.com/apppasswords
   (2-Step Verification must be enabled)

### Update From Email Address

In `contact.php`, change this line to match your actual domain:
```php
define('FROM_EMAIL', 'no-reply@majastojkovska.mk');
```

The `From:` should always be a domain-owned address, NOT the visitor's email.
The visitor's email is set as `Reply-To:` so replies go directly to them.

---

## 🌐 Deployment to Shared Hosting (cPanel/DirectAdmin)

1. Upload all files to your `public_html` folder (or subdirectory)
2. Ensure PHP version is 7.4+ (check in cPanel → PHP Version)
3. Update `contact.php`:
   - Set `FROM_EMAIL` to match your domain's email
   - Configure SMTP for reliable delivery
4. If using a subdirectory, update `<link rel="canonical">` in `index.php`

---

## 🔒 Security Features Built-In

- **Honeypot field** — catches most bots (hidden field that real users don't fill)
- **Session rate limiting** — prevents spam floods (1 submission per 60 seconds)
- **Input sanitization** — `htmlspecialchars` + `strip_tags` on all inputs
- **Email validation** — `filter_var(FILTER_VALIDATE_EMAIL)` server-side
- **Header injection prevention** — newlines stripped from all mail headers
- **POST-only endpoint** — GET requests to `contact.php` are rejected
- **No reply-spoofing** — `From:` is always server address; visitor email is `Reply-To:`

---

## 🎨 Design System

| Token | Value |
|-------|-------|
| Primary font | Cormorant Garamond (serif headings) |
| Secondary font | Montserrat (sans-serif body) |
| Navy | `#0f1923` |
| Gold | `#b89a5a` |
| Gold Light | `#d4b678` |
| Ivory | `#f5f0e8` |
| Beige | `#f8f4ee` |

---

## 🗺 Google Maps

The map section embeds Google Maps using a standard public embed URL.
No API key is required for the basic embed. If you want advanced features,
replace the iframe `src` with a Maps Embed API URL using your API key.

Direct link used:
```
https://maps.google.com/maps?q=Naroden+Front+19A,+Skopje,+North+Macedonia&z=16&output=embed
```

---

## 📱 Mobile Optimizations

- Sticky bottom bar with Call + Message CTA on mobile
- Hamburger side-drawer navigation
- Click-to-call button in header on mobile
- No horizontal scroll
- Touch targets ≥ 44px throughout
- Content readable at 375px (iPhone SE) and 320px

---

## ♿ Accessibility

- Skip-to-content link
- ARIA roles and labels throughout
- Focus states on all interactive elements
- Keyboard navigation for menu, FAQ, service cards
- Screen reader announcements for live regions (form status, case selector)
- Color contrast ≥ 4.5:1 for all text
- No information conveyed by color alone

---

## 📦 Dependencies

**None.** The website uses:
- Google Fonts (loaded via CDN) — Cormorant Garamond + Montserrat
- Vanilla JavaScript (no jQuery, no React, no Vue)
- PHP built-in functions only (no Composer required for basic mail)

Optional: PHPMailer for SMTP — only needed for reliable production email.

---

## 🖨 Production Checklist

Before going live:

- [ ] Update `FROM_EMAIL` in `contact.php` to your domain email
- [ ] Configure SMTP in `contact.php` (PHPMailer recommended)
- [ ] Update `<link rel="canonical">` URL in `index.php`
- [ ] Update Open Graph `og:url` in `index.php`
- [ ] Update JSON-LD schema `url` field in `index.php`
- [ ] Test contact form sends to `advokatmajastojkovska@gmail.com`
- [ ] Verify mobile layout on iPhone/Android
- [ ] Test all FAQ, service cards, and case selector interactions
- [ ] Confirm Google Maps shows correct location
- [ ] Run a Lighthouse audit (aim for 90+ Performance, 100 Accessibility)

---

## 📄 License

Custom work for Адвокатска канцеларија Маја Стојковска.
All rights reserved.
