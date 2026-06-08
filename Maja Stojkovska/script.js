/**
 * script.js — Адвокатска канцеларија Маја Стојковска
 * Vanilla JS — no frameworks required
 */

'use strict';

/* ============================================================
   UTILITY HELPERS
   ============================================================ */
const $ = (sel, ctx = document) => ctx.querySelector(sel);
const $$ = (sel, ctx = document) => [...ctx.querySelectorAll(sel)];

/* ============================================================
   DOM READY
   ============================================================ */
document.addEventListener('DOMContentLoaded', () => {
  initHeader();
  initMobileMenu();
  initSmoothScroll();
  initScrollReveal();
  initCounters();
  initServiceCards();
  initFAQ();
  initCaseSelector();
  initContactForm();
  initBackToTop();
  initActiveNav();
});

/* ============================================================
   1. HEADER — Sticky + Scroll Effect
   ============================================================ */
function initHeader() {
  const header = $('#site-header');
  if (!header) return;

  const onScroll = () => {
    header.classList.toggle('scrolled', window.scrollY > 40);
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll(); // run once on load
}

/* ============================================================
   2. MOBILE MENU
   ============================================================ */
function initMobileMenu() {
  const btn     = $('#hamburger-btn');
  const nav     = $('#main-nav');
  const overlay = $('#mobile-overlay');
  if (!btn || !nav || !overlay) return;

  function openMenu() {
    nav.classList.add('open');
    overlay.classList.add('active');
    overlay.removeAttribute('aria-hidden');
    btn.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
    // Trap focus inside nav on mobile
    const firstLink = nav.querySelector('a, button');
    if (firstLink) firstLink.focus();
  }

  function closeMenu() {
    nav.classList.remove('open');
    overlay.classList.remove('active');
    overlay.setAttribute('aria-hidden', 'true');
    btn.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
    btn.focus();
  }

  btn.addEventListener('click', () => {
    const isOpen = nav.classList.contains('open');
    isOpen ? closeMenu() : openMenu();
  });

  overlay.addEventListener('click', closeMenu);

  // Close on nav link click
  $$('.nav-link', nav).forEach(link => {
    link.addEventListener('click', closeMenu);
  });

  // Close on Escape
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && nav.classList.contains('open')) {
      closeMenu();
    }
  });
}

/* ============================================================
   3. SMOOTH SCROLL
   ============================================================ */
function initSmoothScroll() {
  $$('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', e => {
      const target = $(anchor.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });
}

/* ============================================================
   4. SCROLL REVEAL (IntersectionObserver)
   ============================================================ */
function initScrollReveal() {
  const els = $$('.reveal-up, .reveal-left, .reveal-right');
  if (!els.length) return;

  // Respect prefers-reduced-motion
  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (prefersReduced) {
    els.forEach(el => el.classList.add('visible'));
    return;
  }

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
  );

  els.forEach(el => observer.observe(el));
}

/* ============================================================
   5. ANIMATED COUNTERS
   ============================================================ */
function initCounters() {
  const counters = $$('[data-target]');
  if (!counters.length) return;

  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const animateCounter = (el) => {
    const target = parseInt(el.dataset.target, 10);
    if (isNaN(target)) return;

    if (prefersReduced) {
      el.textContent = target;
      return;
    }

    const duration = 1800;
    const start    = performance.now();

    const step = (timestamp) => {
      const elapsed  = timestamp - start;
      const progress = Math.min(elapsed / duration, 1);
      // Ease out cubic
      const eased    = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.floor(eased * target);
      if (progress < 1) requestAnimationFrame(step);
    };

    requestAnimationFrame(step);
  };

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.5 }
  );

  counters.forEach(el => observer.observe(el));
}

/* ============================================================
   6. SERVICE CARDS — Expand / Collapse
   ============================================================ */
function initServiceCards() {
  const cards = $$('.service-card');

  cards.forEach(card => {
    const toggle   = card.querySelector('.service-toggle');
    const expanded = card.querySelector('.service-expanded');
    if (!toggle || !expanded) return;

    const toggleCard = () => {
      const isExpanded = toggle.getAttribute('aria-expanded') === 'true';

      // Close all others
      cards.forEach(otherCard => {
        if (otherCard === card) return;
        const otherToggle   = otherCard.querySelector('.service-toggle');
        const otherExpanded = otherCard.querySelector('.service-expanded');
        if (otherToggle) otherToggle.setAttribute('aria-expanded', 'false');
        if (otherExpanded) {
          otherExpanded.classList.remove('open');
          otherExpanded.setAttribute('aria-hidden', 'true');
        }
        otherCard.classList.remove('expanded');
      });

      // Toggle this one
      if (isExpanded) {
        toggle.setAttribute('aria-expanded', 'false');
        expanded.classList.remove('open');
        expanded.setAttribute('aria-hidden', 'true');
        card.classList.remove('expanded');
      } else {
        toggle.setAttribute('aria-expanded', 'true');
        expanded.classList.add('open');
        expanded.setAttribute('aria-hidden', 'false');
        card.classList.add('expanded');
        // Scroll into view gently
        setTimeout(() => {
          card.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }, 100);
      }
    };

    toggle.addEventListener('click', (e) => {
      e.stopPropagation();
      toggleCard();
    });

    // Allow keyboard activation on card
    card.addEventListener('keydown', e => {
      if ((e.key === 'Enter' || e.key === ' ') && e.target === card) {
        e.preventDefault();
        toggleCard();
      }
    });
  });
}

/* ============================================================
   7. FAQ ACCORDION
   ============================================================ */
function initFAQ() {
  const items = $$('.faq-item');

  items.forEach(item => {
    const question = item.querySelector('.faq-question');
    const answerId = question?.getAttribute('aria-controls');
    const answer   = answerId ? $(`#${answerId}`) : null;
    if (!question || !answer) return;

    question.addEventListener('click', () => {
      const isExpanded = question.getAttribute('aria-expanded') === 'true';

      // Close all others
      items.forEach(otherItem => {
        if (otherItem === item) return;
        const otherQ = otherItem.querySelector('.faq-question');
        const otherAId = otherQ?.getAttribute('aria-controls');
        const otherA = otherAId ? $(`#${otherAId}`) : null;
        if (otherQ) otherQ.setAttribute('aria-expanded', 'false');
        if (otherA) {
          otherA.classList.remove('open');
          otherA.setAttribute('aria-hidden', 'true');
        }
      });

      // Toggle this one
      const next = !isExpanded;
      question.setAttribute('aria-expanded', String(next));
      answer.classList.toggle('open', next);
      answer.setAttribute('aria-hidden', String(!next));
    });

    // Keyboard support
    question.addEventListener('keydown', e => {
      if (e.key === 'ArrowDown') {
        e.preventDefault();
        const next = item.nextElementSibling?.querySelector('.faq-question');
        next?.focus();
      }
      if (e.key === 'ArrowUp') {
        e.preventDefault();
        const prev = item.previousElementSibling?.querySelector('.faq-question');
        prev?.focus();
      }
      if (e.key === 'Home') {
        e.preventDefault();
        items[0]?.querySelector('.faq-question')?.focus();
      }
      if (e.key === 'End') {
        e.preventDefault();
        items[items.length - 1]?.querySelector('.faq-question')?.focus();
      }
    });
  });
}

/* ============================================================
   8. CASE TYPE SELECTOR
   ============================================================ */
function initCaseSelector() {
  const buttons    = $$('.case-btn');
  const resultBox  = $('#case-result');
  const resultText = $('#case-result-text');
  if (!buttons.length || !resultBox || !resultText) return;

  const messages = {
    contract:
      'Ако ви е потребен договор, канцеларијата може да помогне со изработка, ревизија и правна анализа на ризиците пред потпишување. Секој договор се изготвува прецизно, со фокус на заштита на вашите интереси.',
    inheritance:
      'Наследното право може да биде сложено и емотивно. Канцеларијата нуди правна помош во оставински постапки, наследни спорови и сите правни прашања поврзани со распределба на имот.',
    representation:
      'Застапувањето пред суд бара искуство, прецизност и добра стратегија. Канцеларијата го подготвува секој предмет темелно и ги брани вашите интереси во сите фази на постапката.',
    company:
      'За правни лица, канцеларијата нуди поддршка во корпоративно управување, договори, работни односи, деловно советување и ЦРРМ регистрации. Правната сигурност на вашата компанија е приоритет.',
    claim:
      'При побарувања и наплата, правниот пристап е клучен. Канцеларијата обезбедува правна стратегија, поднесоци и застапување за реализација на вашите побарувања.',
    opinion:
      'Правното мислење е темелна анализа на конкретни документи и факти. Канцеларијата изготвува јасни, практични и добро поткрепени правни мислења за физички и правни лица.',
  };

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      const caseType = btn.dataset.case;
      const msg      = messages[caseType];
      if (!msg) return;

      // Update button states
      buttons.forEach(b => {
        b.classList.remove('active');
        b.setAttribute('aria-pressed', 'false');
      });
      btn.classList.add('active');
      btn.setAttribute('aria-pressed', 'true');

      // Update result
      resultText.textContent = msg;
      resultBox.removeAttribute('hidden');

      // Animate
      resultBox.style.animation = 'none';
      void resultBox.offsetWidth; // reflow
      resultBox.style.animation = '';

      // Scroll result into view on mobile
      if (window.innerWidth < 768) {
        setTimeout(() => {
          resultBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }, 150);
      }
    });
  });
}

/* ============================================================
   9. CONTACT FORM — Validation + AJAX Submit
   ============================================================ */
function initContactForm() {
  const form       = $('#contact-form');
  const submitBtn  = $('#submit-btn');
  const statusEl   = $('#form-status');
  if (!form) return;

  // --- Front-end validation helpers ---
  const validators = {
    name:    v => v.trim().length >= 2 ? '' : 'Внесете го вашето целосно име.',
    email:   v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim()) ? '' : 'Внесете валидна е-пошта.',
    phone:   v => v === '' || /^[\d\s\+\-\(\)]{6,20}$/.test(v.trim()) ? '' : 'Внесете валиден телефонски број.',
    service: v => v !== '' ? '' : 'Изберете правна област.',
    message: v => v.trim().length >= 10 ? '' : 'Пораката мора да содржи најмалку 10 знаци.',
    consent: (_, checked) => checked ? '' : 'Мора да се согласите со обработката на податоци.',
  };

  const showError = (fieldId, msg) => {
    const errEl = $(`#${fieldId}-error`);
    const input = $(`#${fieldId}`);
    if (errEl) errEl.textContent = msg;
    if (input) input.classList.toggle('error', !!msg);
  };

  const clearErrors = () => {
    Object.keys(validators).forEach(key => showError(key, ''));
    if (statusEl) {
      statusEl.textContent = '';
      statusEl.className   = 'form-status';
    }
  };

  const validateField = (name) => {
    const el  = form.elements[name];
    if (!el) return true;
    const val = el.type === 'checkbox' ? el.checked : el.value;
    const err = validators[name]?.(String(val), Boolean(val));
    if (err !== undefined) showError(name, err);
    return !err;
  };

  // Real-time validation on blur
  ['name','email','phone','service','message'].forEach(name => {
    const el = form.elements[name];
    if (el) {
      el.addEventListener('blur', () => validateField(name));
      el.addEventListener('input', () => {
        if (el.classList.contains('error')) validateField(name);
      });
    }
  });

  // --- Form submit ---
  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    clearErrors();

    // Validate all
    const fields   = ['name','email','phone','service','message','consent'];
    const isValid  = fields.every(f => validateField(f));
    if (!isValid) {
      // Focus first error
      const firstErr = form.querySelector('.error');
      if (firstErr) firstErr.focus();
      return;
    }

    // Loading state
    const btnText    = submitBtn.querySelector('.btn-text');
    const btnSpinner = submitBtn.querySelector('.btn-spinner');
    submitBtn.classList.add('loading');
    if (btnText)    btnText.hidden    = true;
    if (btnSpinner) btnSpinner.hidden = false;
    submitBtn.disabled = true;

    try {
      const data = new FormData(form);

      const response = await fetch('contact.php', {
        method:  'POST',
        body:    data,
        headers: { 'X-Requested-With': 'XMLHttpRequest' },
      });

      const result = await response.json();

      if (result.success) {
        // Success
        statusEl.textContent = result.message || 'Вашата порака е успешно испратена. Канцеларијата ќе ве контактира во најкраток можен рок.';
        statusEl.className   = 'form-status success';
        form.reset();
        showToast('success', '✓ Пораката е испратена успешно!');
        // Scroll to status
        statusEl.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      } else {
        // Server-side error
        statusEl.textContent = result.message || 'Се случи грешка. Обидете се повторно или контактирајте директно преку телефон.';
        statusEl.className   = 'form-status error';
        showToast('error', '✗ Грешка при испраќање. Обидете се повторно.');
      }
    } catch (err) {
      console.error('Form submit error:', err);
      statusEl.textContent = 'Не може да се поврзе со серверот. Обидете се повторно или јавете се директно.';
      statusEl.className   = 'form-status error';
      showToast('error', '✗ Грешка при поврзување со серверот.');
    } finally {
      // Restore button
      submitBtn.classList.remove('loading');
      if (btnText)    btnText.hidden    = false;
      if (btnSpinner) btnSpinner.hidden = true;
      submitBtn.disabled = false;
    }
  });
}

/* ============================================================
   10. BACK TO TOP BUTTON
   ============================================================ */
function initBackToTop() {
  const btn = $('#back-to-top');
  if (!btn) return;

  const onScroll = () => {
    if (window.scrollY > 500) {
      btn.removeAttribute('hidden');
    } else {
      btn.hidden = true;
    }
  };

  btn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
}

/* ============================================================
   11. ACTIVE NAV LINK (Scroll Spy)
   ============================================================ */
function initActiveNav() {
  const sections = $$('section[id]');
  const navLinks = $$('.nav-link');
  if (!sections.length || !navLinks.length) return;

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const id = entry.target.getAttribute('id');
          navLinks.forEach(link => {
            const href = link.getAttribute('href');
            link.classList.toggle('active', href === `#${id}`);
          });
        }
      });
    },
    { threshold: 0.3, rootMargin: '-80px 0px -40% 0px' }
  );

  sections.forEach(section => observer.observe(section));
}

/* ============================================================
   TOAST NOTIFICATION
   ============================================================ */
function showToast(type, message, duration = 4500) {
  const toast      = $('#toast');
  const toastMsg   = $('#toast-message');
  const toastIcon  = toast?.querySelector('.toast-icon');
  if (!toast || !toastMsg) return;

  toast.className = `toast toast-${type}`;
  toastMsg.textContent = message;
  if (toastIcon) {
    toastIcon.textContent = type === 'success' ? '✓' : '✕';
  }

  toast.removeAttribute('hidden');

  // Clear previous timer
  if (toast._timer) clearTimeout(toast._timer);

  toast._timer = setTimeout(() => {
    toast.hidden = true;
  }, duration);
}
