<?php
// index.php — Адвокатска канцеларија Маја Стојковска
// Main entry point for the website
?>
<!DOCTYPE html>
<html lang="mk">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- SEO -->
  <title>Адвокат Маја Стојковска | Адвокатска канцеларија Скопје</title>
  <meta name="description" content="Адвокатска канцеларија Маја Стојковска во Скопје нуди правна поддршка, договорно и наследно право, застапување пред судови, корпоративно, граѓанско и стопанско право." />
  <meta name="keywords" content="адвокат Скопје, адвокатска канцеларија Скопје, Маја Стојковска, договорно право, наследно право, правна помош, застапување пред суд, корпоративно право, граѓанско право" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://www.majastojkovska.mk/" />

  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Адвокат Маја Стојковска | Адвокатска канцеларија Скопје" />
  <meta property="og:description" content="Правна поддршка со прецизност, доверба и искуство. Договорно, наследно, граѓанско, корпоративно и стопанско право во Скопје." />
  <meta property="og:url" content="https://www.majastojkovska.mk/" />
  <meta property="og:locale" content="mk_MK" />
  <meta property="og:site_name" content="Адвокатска канцеларија Маја Стојковска" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Адвокат Маја Стојковска | Адвокатска канцеларија Скопје" />
  <meta name="twitter:description" content="Правна поддршка со прецизност, доверба и искуство." />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css" />

  <!-- JSON-LD Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LegalService",
    "name": "Адвокатска канцеларија Маја Стојковска",
    "url": "https://www.majastojkovska.mk",
    "telephone": "+38978280598",
    "email": "advokatmajastojkovska@gmail.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Народен Фронт 19-А, ТЦ Беверли Хилс, лок. 10-Б",
      "addressLocality": "Скопје",
      "addressRegion": "Скопје",
      "postalCode": "1000",
      "addressCountry": "MK"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 41.9981,
      "longitude": 21.4254
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
        "opens": "08:30",
        "closes": "16:30"
      }
    ],
    "areaServed": {
      "@type": "City",
      "name": "Скопје"
    },
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Правни услуги",
      "itemListElement": [
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Облигационо и договорно право"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Наследно право"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Застапување пред судови"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Граѓанско право"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Стопанско и корпоративно право"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Работни односи"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Осигурување и побарувања"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Даночно право"}},
        {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "ЦРРМ регистрациски агент"}}
      ]
    },
    "description": "Адвокатска канцеларија Маја Стојковска нуди правна поддршка, застапување и советување за физички и правни лица во Скопје и пошироко."
  }
  </script>
</head>
<body>

<!-- ============================================================
     SKIP LINK (Accessibility)
     ============================================================ -->
<a class="skip-link" href="#main-content">Прескочи на главната содржина</a>

<!-- ============================================================
     HEADER / NAVIGATION
     ============================================================ -->
<header class="site-header" id="site-header" role="banner">
  <div class="container header-inner">
    <a href="#hero" class="logo" aria-label="Адвокатска канцеларија Маја Стојковска — Почетна">
      <span class="logo-initials">МС</span>
      <span class="logo-text">
        <span class="logo-title">Маја Стојковска</span>
        <span class="logo-subtitle">Адвокат</span>
      </span>
    </a>

    <nav class="main-nav" id="main-nav" role="navigation" aria-label="Главна навигација">
      <ul class="nav-list" role="list">
        <li><a href="#hero" class="nav-link">Почетна</a></li>
        <li><a href="#about" class="nav-link">За канцеларијата</a></li>
        <li><a href="#services" class="nav-link">Услуги</a></li>
        <li><a href="#process" class="nav-link">Пристап</a></li>
        <li><a href="#contact" class="nav-link">Контакт</a></li>
      </ul>
    </nav>

    <div class="header-actions">
      <a href="#contact" class="btn btn-gold header-cta">Закажете консултација</a>
      <a href="tel:+38978280598" class="btn-call-mobile" aria-label="Јавете се">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013 11.37a19.79 19.79 0 01-3.07-8.67A2 2 0 011.92 0h3a2 2 0 012 1.72c.12.96.36 1.9.71 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.35 1.85.59 2.81.71A2 2 0 0122 16.92z"/></svg>
      </a>
      <button class="hamburger" id="hamburger-btn" aria-expanded="false" aria-controls="main-nav" aria-label="Отвори мени">
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Nav Overlay -->
<div class="mobile-overlay" id="mobile-overlay" aria-hidden="true"></div>

<!-- ============================================================
     MAIN CONTENT
     ============================================================ -->
<main id="main-content">

  <!-- ========== HERO SECTION ========== -->
  <section class="hero" id="hero" aria-labelledby="hero-heading">
    <div class="hero-bg-pattern" aria-hidden="true"></div>
    <div class="hero-bg-lines" aria-hidden="true"></div>
    <div class="container hero-inner">

      <div class="hero-content reveal-left">
        <div class="hero-eyebrow">
          <span class="eyebrow-line"></span>
          <span>Адвокатска канцеларија · Скопје</span>
        </div>
        <h1 class="hero-heading" id="hero-heading">
          Правна поддршка<br/>со <em>прецизност</em>,<br/>доверба и искуство.
        </h1>
        <p class="hero-sub">
          Адвокатска канцеларија Маја Стојковска обезбедува правна помош, застапување и советување за физички и правни лица во Скопје и пошироко, со фокус на договорно, наследно, граѓанско, стопанско и корпоративно право.
        </p>
        <div class="hero-actions">
          <a href="#contact" class="btn btn-gold btn-large">Закажете консултација</a>
          <a href="#services" class="btn btn-outline btn-large">Видете услуги</a>
        </div>
      </div>

      <div class="hero-visual reveal-right" aria-hidden="true">
        <div class="hero-card-stack">
          <div class="legal-card legal-card-1">
            <div class="card-icon">⚖</div>
            <div class="card-label">Застапување</div>
            <div class="card-sublabel">пред судови и институции</div>
          </div>
          <div class="legal-card legal-card-2">
            <div class="card-icon">📋</div>
            <div class="card-label">Договорно право</div>
            <div class="card-sublabel">изработка и ревизија</div>
          </div>
          <div class="legal-card legal-card-3">
            <div class="card-icon">🏛</div>
            <div class="card-label">Корпоративно право</div>
            <div class="card-sublabel">ЦРРМ регистрациски агент</div>
          </div>
          <div class="hero-seal" aria-hidden="true">
            <div class="seal-inner">
              <span>МС</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Stats Strip -->
    <div class="stats-strip" role="list" aria-label="Клучни информации">
      <div class="container stats-inner">
        <div class="stat-item" role="listitem">
          <span class="stat-number" data-target="11">0</span>
          <span class="stat-plus">+</span>
          <span class="stat-label">години искуство</span>
        </div>
        <div class="stat-divider" aria-hidden="true"></div>
        <div class="stat-item" role="listitem">
          <span class="stat-icon">⚖</span>
          <span class="stat-label">Застапување пред судови<br/>и институции</span>
        </div>
        <div class="stat-divider" aria-hidden="true"></div>
        <div class="stat-item" role="listitem">
          <span class="stat-icon">📜</span>
          <span class="stat-label">Договорно и<br/>наследно право</span>
        </div>
        <div class="stat-divider" aria-hidden="true"></div>
        <div class="stat-item" role="listitem">
          <span class="stat-icon">📍</span>
          <span class="stat-label">Скопје,<br/>Капиштец</span>
        </div>
      </div>
    </div>

    <div class="scroll-indicator" aria-hidden="true">
      <span class="scroll-line"></span>
      <span class="scroll-text">Scroll</span>
    </div>
  </section>

  <!-- ========== ABOUT SECTION ========== -->
  <section class="about section" id="about" aria-labelledby="about-heading">
    <div class="container about-inner">

      <div class="about-text reveal-up">
        <div class="section-eyebrow">За канцеларијата</div>
        <h2 class="section-heading" id="about-heading">
          Канцеларија изградена на доверба, јасност и правна прецизност.
        </h2>
        <p class="about-para">
          Маја Стојковска е адвокат од Скопје со повеќе од 11 години искуство во правно советување и застапување. Канцеларијата работи со физички и правни лица, нудејќи практична, прецизна и навремена правна поддршка во различни области на правото.
        </p>
        <p class="about-para about-edu">
          <em>Образованието е стекнато на Правниот факултет „Јустинијан Први" при Универзитетот „Св. Кирил и Методиј" во Скопје.</em>
        </p>
        <a href="#contact" class="btn btn-gold">Побарајте правна помош</a>
      </div>

      <div class="about-values reveal-right">
        <div class="values-grid" role="list" aria-label="Вредности на канцеларијата">
          <div class="value-card" role="listitem">
            <div class="value-icon" aria-hidden="true">
              <svg viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="14" stroke="currentColor" stroke-width="1.5"/><path d="M10 16l4 4 8-8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <h3 class="value-title">Доверливост</h3>
            <p class="value-desc">Сите информации и случаи се третираат со апсолутна дискреција.</p>
          </div>
          <div class="value-card" role="listitem">
            <div class="value-icon" aria-hidden="true">
              <svg viewBox="0 0 32 32" fill="none"><path d="M16 4l2 6h6l-5 4 2 6-5-4-5 4 2-6-5-4h6z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
            </div>
            <h3 class="value-title">Прецизност</h3>
            <p class="value-desc">Секој детаљ е важен. Правниот пристап е темелен и методичен.</p>
          </div>
          <div class="value-card" role="listitem">
            <div class="value-icon" aria-hidden="true">
              <svg viewBox="0 0 32 32" fill="none"><path d="M8 24V12l8-8 8 8v12" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><rect x="12" y="18" width="8" height="6" stroke="currentColor" stroke-width="1.5"/></svg>
            </div>
            <h3 class="value-title">Стратегија</h3>
            <p class="value-desc">Секој случај добива индивидуален правен пристап и стратегија.</p>
          </div>
          <div class="value-card" role="listitem">
            <div class="value-icon" aria-hidden="true">
              <svg viewBox="0 0 32 32" fill="none"><path d="M4 16h6M22 16h6M16 4v6M16 22v6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="16" cy="16" r="4" stroke="currentColor" stroke-width="1.5"/></svg>
            </div>
            <h3 class="value-title">Навремена комуникација</h3>
            <p class="value-desc">Клиентот е информиран за секој чекор во постапката.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SERVICES SECTION ========== -->
  <section class="services section section-dark" id="services" aria-labelledby="services-heading">
    <div class="container">
      <div class="section-header reveal-up">
        <div class="section-eyebrow section-eyebrow-light">Правни услуги</div>
        <h2 class="section-heading section-heading-light" id="services-heading">
          Области на правна пракса
        </h2>
        <p class="section-sub section-sub-light">
          Канцеларијата нуди правна поддршка во широк спектар на правни области, прилагодена на потребите на секој клиент.
        </p>
      </div>

      <div class="services-grid" role="list" aria-label="Правни услуги">

        <!-- Service 1 -->
        <div class="service-card reveal-up" role="listitem" tabindex="0" data-service="contract">
          <div class="service-card-inner">
            <div class="service-icon" aria-hidden="true">
              <svg viewBox="0 0 40 40" fill="none"><path d="M8 6h24v28H8V6z" stroke="currentColor" stroke-width="1.5"/><path d="M13 13h14M13 18h14M13 23h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M26 26l3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            </div>
            <h3 class="service-title">Облигационо и договорно право</h3>
            <p class="service-short">Изработка, анализа и ревизија на договори, правни мислења и советување при договорни односи.</p>
            <div class="service-expanded" aria-hidden="true">
              <p>Подготовка и правна ревизија на сите видови договори, анализа на ризици пред потпишување, правни мислења и советување при сложени договорни односи меѓу физички и правни лица.</p>
              <a href="#contact" class="btn btn-gold-outline service-cta">Побарај консултација</a>
            </div>
            <button class="service-toggle" aria-expanded="false" aria-label="Повеќе за облигационо право">
              <span class="toggle-text">Повеќе</span>
              <svg class="toggle-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="service-card reveal-up" role="listitem" tabindex="0" data-service="inheritance">
          <div class="service-card-inner">
            <div class="service-icon" aria-hidden="true">
              <svg viewBox="0 0 40 40" fill="none"><path d="M20 6l12 8v12l-12 8L8 26V14l12-8z" stroke="currentColor" stroke-width="1.5"/><path d="M20 14v8M16 18h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            </div>
            <h3 class="service-title">Наследно право</h3>
            <p class="service-short">Правна помош во оставински постапки, наследни спорови, договори и поврзани правни прашања.</p>
            <div class="service-expanded" aria-hidden="true">
              <p>Застапување во оставински постапки, помош при наследни договори, решавање на спорови меѓу наследници, правни мислења за имотни прашања и советување за распределба на имот.</p>
              <a href="#contact" class="btn btn-gold-outline service-cta">Побарај консултација</a>
            </div>
            <button class="service-toggle" aria-expanded="false" aria-label="Повеќе за наследно право">
              <span class="toggle-text">Повеќе</span>
              <svg class="toggle-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="service-card reveal-up" role="listitem" tabindex="0" data-service="representation">
          <div class="service-card-inner">
            <div class="service-icon" aria-hidden="true">
              <svg viewBox="0 0 40 40" fill="none"><path d="M20 4L6 12v10c0 7.18 5.82 13 14 16 8.18-3 14-8.82 14-16V12L20 4z" stroke="currentColor" stroke-width="1.5"/><path d="M14 20l4 4 8-8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <h3 class="service-title">Застапување пред судови и државни органи</h3>
            <p class="service-short">Застапување на клиенти во судски и управни постапки, подготовка на поднесоци, жалби и правна стратегија.</p>
            <div class="service-expanded" aria-hidden="true">
              <p>Целосно застапување во граѓански, стопански и управни постапки, подготовка на тужби, одговори, жалби и останати поднесоци, правна стратегија за водење спорови.</p>
              <a href="#contact" class="btn btn-gold-outline service-cta">Побарај консултација</a>
            </div>
            <button class="service-toggle" aria-expanded="false" aria-label="Повеќе за застапување">
              <span class="toggle-text">Повеќе</span>
              <svg class="toggle-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </div>

        <!-- Service 4 -->
        <div class="service-card reveal-up" role="listitem" tabindex="0" data-service="civil">
          <div class="service-card-inner">
            <div class="service-icon" aria-hidden="true">
              <svg viewBox="0 0 40 40" fill="none"><circle cx="20" cy="20" r="14" stroke="currentColor" stroke-width="1.5"/><path d="M14 20h12M20 14v12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            </div>
            <h3 class="service-title">Граѓанско право</h3>
            <p class="service-short">Правна помош во приватноправни односи, спорови, побарувања и заштита на права.</p>
            <div class="service-expanded" aria-hidden="true">
              <p>Советување и застапување во граѓанскоправни односи: облигациони спорови, стварни права, имотни прашања, заштита на права и покренување правни постапки.</p>
              <a href="#contact" class="btn btn-gold-outline service-cta">Побарај консултација</a>
            </div>
            <button class="service-toggle" aria-expanded="false" aria-label="Повеќе за граѓанско право">
              <span class="toggle-text">Повеќе</span>
              <svg class="toggle-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </div>

        <!-- Service 5 -->
        <div class="service-card reveal-up" role="listitem" tabindex="0" data-service="corporate">
          <div class="service-card-inner">
            <div class="service-icon" aria-hidden="true">
              <svg viewBox="0 0 40 40" fill="none"><rect x="6" y="18" width="28" height="16" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M13 18V12a7 7 0 0114 0v6" stroke="currentColor" stroke-width="1.5"/><circle cx="20" cy="26" r="2" stroke="currentColor" stroke-width="1.5"/></svg>
            </div>
            <h3 class="service-title">Стопанско и корпоративно право</h3>
            <p class="service-short">Правна поддршка за компании, корпоративно управување, основање фирми, промени и деловни договори.</p>
            <div class="service-expanded" aria-hidden="true">
              <p>Правно советување за компании, основање на трговски друштва, корпоративни промени, деловни договори, правна усогласеност и поддршка при стопански спорови.</p>
              <a href="#contact" class="btn btn-gold-outline service-cta">Побарај консултација</a>
            </div>
            <button class="service-toggle" aria-expanded="false" aria-label="Повеќе за корпоративно право">
              <span class="toggle-text">Повеќе</span>
              <svg class="toggle-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </div>

        <!-- Service 6 -->
        <div class="service-card reveal-up" role="listitem" tabindex="0" data-service="labor">
          <div class="service-card-inner">
            <div class="service-icon" aria-hidden="true">
              <svg viewBox="0 0 40 40" fill="none"><circle cx="20" cy="14" r="6" stroke="currentColor" stroke-width="1.5"/><path d="M8 34c0-6.627 5.373-12 12-12s12 5.373 12 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            </div>
            <h3 class="service-title">Работни односи</h3>
            <p class="service-short">Советување и постапки поврзани со работни договори, права и обврски од работен однос.</p>
            <div class="service-expanded" aria-hidden="true">
              <p>Правна помош при изработка и ревизија на работни договори, застапување во работни спорови, советување при откажување на работен однос и заштита на работнички права.</p>
              <a href="#contact" class="btn btn-gold-outline service-cta">Побарај консултација</a>
            </div>
            <button class="service-toggle" aria-expanded="false" aria-label="Повеќе за работни односи">
              <span class="toggle-text">Повеќе</span>
              <svg class="toggle-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </div>

        <!-- Service 7 -->
        <div class="service-card reveal-up" role="listitem" tabindex="0" data-service="insurance">
          <div class="service-card-inner">
            <div class="service-icon" aria-hidden="true">
              <svg viewBox="0 0 40 40" fill="none"><path d="M12 20a8 8 0 1116 0" stroke="currentColor" stroke-width="1.5"/><path d="M8 20h24M16 28l4-8 4 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <h3 class="service-title">Осигурување и побарувања</h3>
            <p class="service-short">Правна помош при наплата на побарувања, штети, осигурителни прашања и правна заштита.</p>
            <div class="service-expanded" aria-hidden="true">
              <p>Застапување при наплата на доспеани побарувања, правна помош во осигурителни постапки, заштита при штети и правни постапки за реализација на побарувања.</p>
              <a href="#contact" class="btn btn-gold-outline service-cta">Побарај консултација</a>
            </div>
            <button class="service-toggle" aria-expanded="false" aria-label="Повеќе за осигурување и побарувања">
              <span class="toggle-text">Повеќе</span>
              <svg class="toggle-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </div>

        <!-- Service 8 -->
        <div class="service-card reveal-up" role="listitem" tabindex="0" data-service="tax">
          <div class="service-card-inner">
            <div class="service-icon" aria-hidden="true">
              <svg viewBox="0 0 40 40" fill="none"><rect x="8" y="8" width="24" height="24" rx="3" stroke="currentColor" stroke-width="1.5"/><path d="M14 18l4 4 8-8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <h3 class="service-title">Даночно право и деловно советување</h3>
            <p class="service-short">Правни мислења и советување за прашања поврзани со даноци, деловно работење и усогласеност.</p>
            <div class="service-expanded" aria-hidden="true">
              <p>Советување за даночни обврски, правна анализа на деловни одлуки, правна усогласеност при деловни трансакции и правни мислења за компании и претприемачи.</p>
              <a href="#contact" class="btn btn-gold-outline service-cta">Побарај консултација</a>
            </div>
            <button class="service-toggle" aria-expanded="false" aria-label="Повеќе за даночно право">
              <span class="toggle-text">Повеќе</span>
              <svg class="toggle-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </div>

        <!-- Service 9 -->
        <div class="service-card reveal-up" role="listitem" tabindex="0" data-service="registration">
          <div class="service-card-inner">
            <div class="service-icon" aria-hidden="true">
              <svg viewBox="0 0 40 40" fill="none"><path d="M10 34V10l10-6 10 6v24" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><rect x="15" y="22" width="10" height="12" stroke="currentColor" stroke-width="1.5"/><path d="M15 16h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            </div>
            <h3 class="service-title">Регистрационен агент / ЦРРМ услуги</h3>
            <p class="service-short">Поддршка при основање компании, промени во регистрација и постапки пред Централен регистар.</p>
            <div class="service-expanded" aria-hidden="true">
              <p>Канцеларијата делува и како лиценциран регистрационен агент, обезбедувајќи целосна поддршка при основање на трговски друштва и промени пред Централниот регистар на Република Македонија.</p>
              <a href="#contact" class="btn btn-gold-outline service-cta">Побарај консултација</a>
            </div>
            <button class="service-toggle" aria-expanded="false" aria-label="Повеќе за ЦРРМ услуги">
              <span class="toggle-text">Повеќе</span>
              <svg class="toggle-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </div>

      </div><!-- end .services-grid -->

      <div class="section-cta-center reveal-up">
        <p class="cta-pre">Не сте сигурни за вашиот случај?</p>
        <a href="#contact" class="btn btn-gold btn-large">Закажете консултација</a>
      </div>

    </div>
  </section>

  <!-- ========== PROCESS SECTION ========== -->
  <section class="process section" id="process" aria-labelledby="process-heading">
    <div class="container">
      <div class="section-header reveal-up">
        <div class="section-eyebrow">Пристап</div>
        <h2 class="section-heading" id="process-heading">
          Јасен процес од првиот разговор до правното решение.
        </h2>
        <p class="section-sub">
          Секој клиент и случај заслужува систематски и промислен правен пристап.
        </p>
      </div>

      <div class="process-timeline" role="list" aria-label="Процес на работа">
        <div class="timeline-item reveal-up" role="listitem">
          <div class="timeline-number" aria-label="Чекор 1">1</div>
          <div class="timeline-connector" aria-hidden="true"></div>
          <div class="timeline-content">
            <h3 class="timeline-title">Првична консултација</h3>
            <p class="timeline-desc">Го разбираме вашиот случај, документите и целта. Слушаме, анализираме и поставуваме прашања.</p>
          </div>
        </div>
        <div class="timeline-item reveal-up" role="listitem">
          <div class="timeline-number" aria-label="Чекор 2">2</div>
          <div class="timeline-connector" aria-hidden="true"></div>
          <div class="timeline-content">
            <h3 class="timeline-title">Правна анализа</h3>
            <p class="timeline-desc">Се утврдуваат ризиците, можностите и најдобриот правен пат напред.</p>
          </div>
        </div>
        <div class="timeline-item reveal-up" role="listitem">
          <div class="timeline-number" aria-label="Чекор 3">3</div>
          <div class="timeline-connector" aria-hidden="true"></div>
          <div class="timeline-content">
            <h3 class="timeline-title">Стратегија и подготовка</h3>
            <p class="timeline-desc">Подготовка на договори, поднесоци, жалби или друга потребна документација.</p>
          </div>
        </div>
        <div class="timeline-item reveal-up" role="listitem">
          <div class="timeline-number" aria-label="Чекор 4">4</div>
          <div class="timeline-connector" aria-hidden="true"></div>
          <div class="timeline-content">
            <h3 class="timeline-title">Застапување и реализација</h3>
            <p class="timeline-desc">Застапување пред судови, институции или деловни страни во ваш интерес.</p>
          </div>
        </div>
        <div class="timeline-item reveal-up" role="listitem">
          <div class="timeline-number" aria-label="Чекор 5">5</div>
          <div class="timeline-content">
            <h3 class="timeline-title">Навремена комуникација</h3>
            <p class="timeline-desc">Клиентот добива јасни информации за следните чекори во секоја фаза.</p>
          </div>
        </div>
      </div>

      <div class="section-cta-center reveal-up">
        <a href="#contact" class="btn btn-gold btn-large">Проверете го вашиот правен ризик</a>
      </div>
    </div>
  </section>

  <!-- ========== TRUST SECTION ========== -->
  <section class="trust section section-beige" id="trust" aria-labelledby="trust-heading">
    <div class="container">
      <div class="section-header reveal-up">
        <div class="section-eyebrow">Доверба</div>
        <h2 class="section-heading" id="trust-heading">
          Зошто клиенти избираат прецизна правна поддршка?
        </h2>
      </div>

      <div class="trust-grid" role="list" aria-label="Предности на канцеларијата">
        <div class="trust-card reveal-up" role="listitem">
          <div class="trust-icon" aria-hidden="true">
            <svg viewBox="0 0 32 32" fill="none"><path d="M16 4l3 9h9l-7 5 3 9-8-6-8 6 3-9-7-5h9z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
          </div>
          <h3 class="trust-title">Доверлив пристап</h3>
          <p class="trust-desc">Дискреција и заштита на информациите на клиентите е фундаментален принцип на работата.</p>
        </div>
        <div class="trust-card reveal-up" role="listitem">
          <div class="trust-icon" aria-hidden="true">
            <svg viewBox="0 0 32 32" fill="none"><path d="M6 16h20M16 6v20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="16" cy="16" r="12" stroke="currentColor" stroke-width="1.5"/></svg>
          </div>
          <h3 class="trust-title">Јасна комуникација</h3>
          <p class="trust-desc">Правниот јазик се преведува во разбирливи информации за клиентот.</p>
        </div>
        <div class="trust-card reveal-up" role="listitem">
          <div class="trust-icon" aria-hidden="true">
            <svg viewBox="0 0 32 32" fill="none"><rect x="4" y="8" width="24" height="18" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M10 14h12M10 19h8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
          </div>
          <h3 class="trust-title">Практични решенија</h3>
          <p class="trust-desc">Правниот совет е насочен кон реши решенија, не само теоретски анализи.</p>
        </div>
        <div class="trust-card reveal-up" role="listitem">
          <div class="trust-icon" aria-hidden="true">
            <svg viewBox="0 0 32 32" fill="none"><path d="M16 4L4 12v8c0 5.52 5.12 10.12 12 12 6.88-1.88 12-6.48 12-12v-8L16 4z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
          </div>
          <h3 class="trust-title">Искусно застапување</h3>
          <p class="trust-desc">Повеќе од 11 години искуство во застапување пред судови и државни органи.</p>
        </div>
        <div class="trust-card reveal-up" role="listitem">
          <div class="trust-icon" aria-hidden="true">
            <svg viewBox="0 0 32 32" fill="none"><path d="M8 16l5 5 11-10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><circle cx="16" cy="16" r="12" stroke="currentColor" stroke-width="1.5"/></svg>
          </div>
          <h3 class="trust-title">Правна стратегија</h3>
          <p class="trust-desc">Секој случај добива индивидуален правен пристап приспособен на конкретните потреби.</p>
        </div>
        <div class="trust-card reveal-up" role="listitem">
          <div class="trust-icon" aria-hidden="true">
            <svg viewBox="0 0 32 32" fill="none"><circle cx="12" cy="12" r="6" stroke="currentColor" stroke-width="1.5"/><path d="M20 20l-6-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="22" cy="22" r="4" stroke="currentColor" stroke-width="1.5"/></svg>
          </div>
          <h3 class="trust-title">За физички и правни лица</h3>
          <p class="trust-desc">Поддршка за граѓани, претприемачи и компании во сите правни прашања.</p>
        </div>
      </div>

      <!-- Quote Block -->
      <blockquote class="legal-quote reveal-up" aria-label="Цитат">
        <div class="quote-mark" aria-hidden="true">„</div>
        <p class="quote-text">Во правото, деталите не се формалност — тие се разликата помеѓу ризик и заштита.</p>
        <footer class="quote-footer">
          <cite>Адвокатска канцеларија Маја Стојковска</cite>
        </footer>
      </blockquote>
    </div>
  </section>

  <!-- ========== CASE SELECTOR SECTION ========== -->
  <section class="case-selector section section-dark" id="case-selector" aria-labelledby="case-heading">
    <div class="container">
      <div class="section-header reveal-up">
        <div class="section-eyebrow section-eyebrow-light">Брза ориентација</div>
        <h2 class="section-heading section-heading-light" id="case-heading">
          Изберете што ви е потребно
        </h2>
        <p class="section-sub section-sub-light">Изберете ситуација и дознајте повеќе за тоа со кое прашање можеме да помогнеме.</p>
      </div>

      <div class="case-buttons" role="group" aria-label="Изберете правна потреба">
        <button class="case-btn" data-case="contract" aria-pressed="false">Ми треба договор</button>
        <button class="case-btn" data-case="inheritance" aria-pressed="false">Имам наследно прашање</button>
        <button class="case-btn" data-case="representation" aria-pressed="false">Ми треба застапување</button>
        <button class="case-btn" data-case="company" aria-pressed="false">Имам компанија</button>
        <button class="case-btn" data-case="claim" aria-pressed="false">Имам побарување</button>
        <button class="case-btn" data-case="opinion" aria-pressed="false">Ми треба правно мислење</button>
      </div>

      <div class="case-result" id="case-result" aria-live="polite" aria-atomic="true" hidden>
        <div class="case-result-inner">
          <p class="case-result-text" id="case-result-text"></p>
          <a href="#contact" class="btn btn-gold case-result-btn">Пратете порака</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FAQ SECTION ========== -->
  <section class="faq section" id="faq" aria-labelledby="faq-heading">
    <div class="container faq-inner">
      <div class="section-header reveal-up">
        <div class="section-eyebrow">Прашања и одговори</div>
        <h2 class="section-heading" id="faq-heading">Честo поставувани прашања</h2>
      </div>

      <div class="faq-list" role="list" aria-label="Честo поставувани прашања">

        <div class="faq-item reveal-up" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ans-1">
            <span>Дали е потребно да закажам консултација однапред?</span>
            <svg class="faq-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
          <div class="faq-answer" id="faq-ans-1" aria-hidden="true">
            <p>Да, препорачливо е однапред да ја контактирате канцеларијата за термин, за да може адвокатот да се подготви соодветно за вашиот случај и да ви посвети доволно внимание.</p>
          </div>
        </div>

        <div class="faq-item reveal-up" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ans-2">
            <span>Кои документи треба да ги донесам?</span>
            <svg class="faq-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
          <div class="faq-answer" id="faq-ans-2" aria-hidden="true">
            <p>Зависи од случајот, но најдобро е да ги подготвите сите релевантни договори, решенија, известувања, судски акти или комуникација. При закажувањето, можете да добиете попрецизна насока за потребните документи.</p>
          </div>
        </div>

        <div class="faq-item reveal-up" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ans-3">
            <span>Дали канцеларијата работи со компании?</span>
            <svg class="faq-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
          <div class="faq-answer" id="faq-ans-3" aria-hidden="true">
            <p>Да, канцеларијата обезбедува правна поддршка за физички и правни лица, вклучително и договори, корпоративни промени и деловно советување. Канцеларијата работи и како лиценциран регистрационен агент за ЦРРМ постапки.</p>
          </div>
        </div>

        <div class="faq-item reveal-up" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ans-4">
            <span>Дали може да се побара правно мислење?</span>
            <svg class="faq-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
          <div class="faq-answer" id="faq-ans-4" aria-hidden="true">
            <p>Да, може да се побара правна анализа или мислење врз основа на конкретни документи и факти. Правното мислење е пишан документ кој ги анализира правните прашања и ризици во конкретен случај.</p>
          </div>
        </div>

        <div class="faq-item reveal-up" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq-ans-5">
            <span>Дали испраќањето порака преку формата значи ангажирање адвокат?</span>
            <svg class="faq-icon" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
          <div class="faq-answer" id="faq-ans-5" aria-hidden="true">
            <p>Не. Испраќањето порака е почетен контакт. Адвокатски однос се воспоставува само по директна комуникација, договор и потпишување на соодветна документација.</p>
          </div>
        </div>

      </div><!-- end .faq-list -->

      <div class="section-cta-center reveal-up" style="margin-top: 3rem;">
        <a href="#contact" class="btn btn-gold btn-large">Побарајте правна помош</a>
      </div>
    </div>
  </section>

  <!-- ========== CONTACT SECTION ========== -->
  <section class="contact section section-dark" id="contact" aria-labelledby="contact-heading">
    <div class="container contact-inner">

      <!-- Contact Info -->
      <div class="contact-info reveal-left">
        <div class="section-eyebrow section-eyebrow-light">Контакт</div>
        <h2 class="section-heading section-heading-light" id="contact-heading">
          Контактирајте ја канцеларијата
        </h2>

        <div class="contact-details">
          <div class="contact-detail-item">
            <div class="contact-detail-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg>
            </div>
            <div>
              <strong>Адреса</strong>
              <address>Народен Фронт 19-А, Капиштец<br/>ТЦ Беверли Хилс, лок. 10-Б<br/>Скопје, Северна Македонија</address>
            </div>
          </div>
          <div class="contact-detail-item">
            <div class="contact-detail-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013 11.37a19.79 19.79 0 01-3.07-8.67A2 2 0 011.92 0h3a2 2 0 012 1.72c.12.96.36 1.9.71 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.35 1.85.59 2.81.71A2 2 0 0122 16.92z"/></svg>
            </div>
            <div>
              <strong>Телефон</strong>
              <a href="tel:+38978280598" class="contact-link">+389 78 280 598</a>
            </div>
          </div>
          <div class="contact-detail-item">
            <div class="contact-detail-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            <div>
              <strong>Е-пошта</strong>
              <a href="mailto:advokatmajastojkovska@gmail.com" class="contact-link">advokatmajastojkovska@gmail.com</a>
            </div>
          </div>
          <div class="contact-detail-item">
            <div class="contact-detail-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg>
            </div>
            <div>
              <strong>Работно време</strong>
              <span>Понеделник – Петок: 08:30 – 16:30</span>
            </div>
          </div>
        </div>

        <div class="contact-actions">
          <a href="tel:+38978280598" class="btn btn-gold">
            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M18.31 14.1v2.5a1.67 1.67 0 01-1.82 1.67 16.49 16.49 0 01-7.2-2.56A16.25 16.25 0 012.5 8.92 16.49 16.49 0 01-.06 1.77 1.67 1.67 0 011.6.1h2.5a1.67 1.67 0 011.67 1.43c.1.8.3 1.59.59 2.34a1.67 1.67 0 01-.38 1.76l-1.06 1.06a13.33 13.33 0 005 5l1.06-1.06a1.67 1.67 0 011.76-.38c.75.29 1.54.49 2.34.59A1.67 1.67 0 0118.31 14.1z"/></svg>
            Јавете се сега
          </a>
          <a href="mailto:advokatmajastojkovska@gmail.com" class="btn btn-outline-light">Испратете е-пошта</a>
          <a href="https://maps.google.com/?q=Naroden+Front+19A,+Beverly+Hills,+Skopje,+North+Macedonia" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light">
            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M10 2C7.24 2 5 4.24 5 7c0 4.38 5 11 5 11s5-6.62 5-11c0-2.76-2.24-5-5-5z"/><circle cx="10" cy="7" r="2"/></svg>
            Отвори во Google Maps
          </a>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="contact-form-wrap reveal-right">
        <form class="contact-form" id="contact-form" novalidate aria-label="Контакт форма">
          <!-- Honeypot (spam prevention - hidden from real users) -->
          <div class="hp-field" aria-hidden="true">
            <label for="website">Оставете ова поле празно</label>
            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off" />
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="name" class="form-label">Име и презиме <span class="required" aria-label="задолжително">*</span></label>
              <input type="text" id="name" name="name" class="form-input" required autocomplete="name" placeholder="Вашето целосно име" aria-required="true" />
              <span class="field-error" id="name-error" role="alert" aria-live="polite"></span>
            </div>
            <div class="form-group">
              <label for="email" class="form-label">Е-пошта <span class="required" aria-label="задолжително">*</span></label>
              <input type="email" id="email" name="email" class="form-input" required autocomplete="email" placeholder="vasa@email.com" aria-required="true" />
              <span class="field-error" id="email-error" role="alert" aria-live="polite"></span>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="phone" class="form-label">Телефон <span class="optional">(незадолжително)</span></label>
              <input type="tel" id="phone" name="phone" class="form-input" autocomplete="tel" placeholder="+389 XX XXX XXX" />
            </div>
            <div class="form-group">
              <label for="service" class="form-label">Правна област <span class="required" aria-label="задолжително">*</span></label>
              <select id="service" name="service" class="form-input form-select" required aria-required="true">
                <option value="" disabled selected>— Изберете услуга —</option>
                <option value="Договорно право">Договорно право</option>
                <option value="Наследно право">Наследно право</option>
                <option value="Застапување">Застапување</option>
                <option value="Корпоративно право">Корпоративно право</option>
                <option value="Работни односи">Работни односи</option>
                <option value="Наплата на побарувања">Наплата на побарувања</option>
                <option value="Даночно право">Даночно право</option>
                <option value="ЦРРМ услуги">ЦРРМ услуги</option>
                <option value="Друго">Друго</option>
              </select>
              <span class="field-error" id="service-error" role="alert" aria-live="polite"></span>
            </div>
          </div>

          <div class="form-group">
            <label for="message" class="form-label">Порака <span class="required" aria-label="задолжително">*</span></label>
            <textarea id="message" name="message" class="form-input form-textarea" rows="5" required aria-required="true" placeholder="Опишете накратко вашиот правен случај или прашање..."></textarea>
            <span class="field-error" id="message-error" role="alert" aria-live="polite"></span>
          </div>

          <div class="form-group form-consent">
            <label class="consent-label">
              <input type="checkbox" id="consent" name="consent" class="consent-checkbox" required aria-required="true" />
              <span class="consent-text">Се согласувам моите податоци да бидат искористени исклучиво за одговор на ова барање. <span class="required" aria-label="задолжително">*</span></span>
            </label>
            <span class="field-error" id="consent-error" role="alert" aria-live="polite"></span>
          </div>

          <button type="submit" class="btn btn-gold btn-large btn-full" id="submit-btn" aria-describedby="form-status">
            <span class="btn-text">Испратете порака</span>
            <span class="btn-spinner" aria-hidden="true" hidden>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
            </span>
          </button>

          <div class="form-status" id="form-status" role="status" aria-live="assertive" aria-atomic="true"></div>

        </form>
      </div>

    </div>
  </section>

  <!-- ========== MAP SECTION ========== -->
  <section class="map-section" id="map" aria-label="Локација на канцеларијата">
    <div class="map-embed-wrap">
      <!-- Google Maps embed — replace YOUR_API_KEY or use the embedless URL -->
      <iframe
        title="Локација — Адвокатска канцеларија Маја Стојковска, Скопје"
        src="https://maps.google.com/maps?q=Naroden+Front+19A,+Skopje,+North+Macedonia&t=&z=16&ie=UTF8&iwloc=&output=embed"
        width="100%"
        height="420"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        aria-label="Google Maps — Адвокатска канцеларија Маја Стојковска"
      ></iframe>
    </div>
    <div class="map-cta-bar">
      <span class="map-address">Народен Фронт 19-А, ТЦ Беверли Хилс, лок. 10-Б, Скопје</span>
      <a href="https://maps.google.com/?q=Naroden+Front+19A,+Beverly+Hills,+Skopje,+North+Macedonia" target="_blank" rel="noopener noreferrer" class="btn btn-gold">Отвори во Google Maps</a>
    </div>
  </section>

</main><!-- end #main-content -->

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer class="site-footer" role="contentinfo">
  <div class="container footer-inner">
    <div class="footer-brand">
      <a href="#hero" class="footer-logo" aria-label="Адвокатска канцеларија Маја Стојковска — Почетна">
        <span class="logo-initials">МС</span>
        <span class="logo-text">
          <span class="logo-title">Маја Стојковска</span>
          <span class="logo-subtitle">Адвокат · Скопје</span>
        </span>
      </a>
      <p class="footer-tagline">Правна поддршка со прецизност, доверба и искуство.</p>
    </div>

    <div class="footer-links">
      <h4 class="footer-col-title">Брзи линкови</h4>
      <ul role="list">
        <li><a href="#hero">Почетна</a></li>
        <li><a href="#about">За канцеларијата</a></li>
        <li><a href="#services">Услуги</a></li>
        <li><a href="#process">Пристап</a></li>
        <li><a href="#faq">ЧПП</a></li>
        <li><a href="#contact">Контакт</a></li>
      </ul>
    </div>

    <div class="footer-contact">
      <h4 class="footer-col-title">Контакт</h4>
      <address>
        <p>Народен Фронт 19-А, Капиштец<br/>ТЦ Беверли Хилс, лок. 10-Б<br/>Скопје, Северна Македонија</p>
        <p><a href="tel:+38978280598">+389 78 280 598</a></p>
        <p><a href="mailto:advokatmajastojkovska@gmail.com">advokatmajastojkovska@gmail.com</a></p>
        <p>Пон – Пет: 08:30 – 16:30</p>
      </address>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <p class="footer-disclaimer">
        Информациите на оваа веб-страница се од информативен карактер и не претставуваат правен совет. За конкретен случај, потребна е директна консултација со адвокат.
      </p>
      <p class="footer-copy">
        &copy; <?php echo date('Y'); ?> Адвокатска канцеларија Маја Стојковска. Сите права се задржани.
      </p>
    </div>
  </div>
</footer>

<!-- ============================================================
     BACK TO TOP BUTTON
     ============================================================ -->
<button class="back-to-top" id="back-to-top" aria-label="Назад на врв" hidden>
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M18 15l-6-6-6 6"/></svg>
</button>

<!-- ============================================================
     MOBILE STICKY BAR
     ============================================================ -->
<div class="mobile-sticky-bar" aria-label="Брз контакт" role="complementary">
  <a href="tel:+38978280598" class="mobile-sticky-btn mobile-sticky-call" aria-label="Јавете се на +389 78 280 598">
    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M18.31 14.1v2.5a1.67 1.67 0 01-1.82 1.67 16.49 16.49 0 01-7.2-2.56A16.25 16.25 0 012.5 8.92 16.49 16.49 0 01-.06 1.77 1.67 1.67 0 011.6.1h2.5a1.67 1.67 0 011.67 1.43c.1.8.3 1.59.59 2.34a1.67 1.67 0 01-.38 1.76l-1.06 1.06a13.33 13.33 0 005 5l1.06-1.06a1.67 1.67 0 011.76-.38c.75.29 1.54.49 2.34.59A1.67 1.67 0 0118.31 14.1z"/></svg>
    Јавете се
  </a>
  <a href="#contact" class="mobile-sticky-btn mobile-sticky-msg">
    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M17.5 2.5h-15A2.5 2.5 0 000 5v10a2.5 2.5 0 002.5 2.5h15A2.5 2.5 0 0020 15V5a2.5 2.5 0 00-2.5-2.5z"/><path d="M0 5l10 7 10-7"/></svg>
    Пратете порака
  </a>
</div>

<!-- Toast Notification -->
<div class="toast" id="toast" role="status" aria-live="polite" aria-atomic="true" hidden>
  <div class="toast-inner">
    <span class="toast-icon" aria-hidden="true"></span>
    <span class="toast-message" id="toast-message"></span>
  </div>
</div>

<!-- Script -->
<script src="script.js"></script>
</body>
</html>
