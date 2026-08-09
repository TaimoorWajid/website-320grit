/* ============================================
   320 GRIT — Shared Helpers
   Reusable JS utilities across ALL sections
   Load this BEFORE any section-specific JS
   ============================================ */

const Grit = {

  // ---- Detect Touch Device ----
  isTouch: window.matchMedia('(pointer: coarse)').matches,
  prefersReducedMotion: window.matchMedia('(prefers-reduced-motion: reduce)').matches,

  // ============================================
  // 1. CUSTOM CURSOR
  // ============================================
  initCustomCursor() {
    if (this.isTouch || this.prefersReducedMotion) return;

    const cursor = document.createElement('div');
    cursor.className = 'grit-cursor';
    Object.assign(cursor.style, {
      position: 'fixed',
      top: '0',
      left: '0',
      width: '8px',
      height: '8px',
      background: '#fff',
      borderRadius: '50%',
      pointerEvents: 'none',
      zIndex: '99999',
      mixBlendMode: 'difference',
      transform: 'translate(-50%, -50%)',
      transition: 'width 0.3s ease, height 0.3s ease, background 0.3s ease, border 0.3s ease'
    });
    document.body.appendChild(cursor);

    let mx = 0, my = 0, cx = 0, cy = 0;

    document.addEventListener('mousemove', (e) => {
      mx = e.clientX;
      my = e.clientY;
    });

    const animate = () => {
      cx += (mx - cx) * 0.15;
      cy += (my - cy) * 0.15;
      cursor.style.left = cx + 'px';
      cursor.style.top = cy + 'px';
      requestAnimationFrame(animate);
    };
    animate();

    // Expand on interactive elements
    const expandTargets = 'a, button, .grit-magnetic, [data-cursor-expand]';
    document.querySelectorAll(expandTargets).forEach(el => {
      el.addEventListener('mouseenter', () => {
        cursor.style.width = '40px';
        cursor.style.height = '40px';
        cursor.style.background = 'transparent';
        cursor.style.border = '1px solid #fff';
      });
      el.addEventListener('mouseleave', () => {
        cursor.style.width = '8px';
        cursor.style.height = '8px';
        cursor.style.background = '#fff';
        cursor.style.border = 'none';
      });
    });
  },

  // ============================================
  // 2. MAGNETIC BUTTONS
  // ============================================
  initMagneticButtons() {
    if (this.isTouch) return;

    document.querySelectorAll('.grit-magnetic').forEach(btn => {
      btn.addEventListener('mousemove', (e) => {
        const rect = btn.getBoundingClientRect();
        const x = (e.clientX - rect.left - rect.width / 2) * 0.25;
        const y = (e.clientY - rect.top - rect.height / 2) * 0.25;
        btn.style.transform = `translate(${x}px, ${y}px)`;
      });

      btn.addEventListener('mouseleave', () => {
        btn.style.transform = 'translate(0, 0)';
      });
    });
  },

  // ============================================
  // 3. TEXT SPLIT UTILITY (for character animations)
  // ============================================
  // SHARED-CANDIDATE: Used by Hero headline, CTA headline, etc.
  splitTextToChars(element, options = {}) {
    if (!element) return [];
    const text = element.textContent;
    element.innerHTML = '';
    const chars = [];
    const baseDelay = options.delay || 0;
    const stagger = options.stagger || 0.025;

    text.split('').forEach((char, i) => {
      const span = document.createElement('span');
      span.className = options.className || 'grit-char';
      span.textContent = char === ' ' ? '\\u00A0' : char;
      span.style.display = 'inline-block';
      span.style.opacity = '0';
      span.style.transform = 'translateY(120%)';
      span.style.animationDelay = (baseDelay + i * stagger) + 's';
      element.appendChild(span);
      chars.push(span);
    });

    return chars;
  },

  // ============================================
  // 4. COUNT UP ANIMATION
  // ============================================
  // SHARED-CANDIDATE: Used by Stats, Case Study, etc.
  countUp(element) {
    if (!element) return;
    const target = parseFloat(element.dataset.target);
    const prefix = element.dataset.prefix || '';
    const suffix = element.dataset.suffix || '';
    const decimals = parseInt(element.dataset.decimals) || 0;
    const duration = parseInt(element.dataset.duration) || 2000;
    const startTime = performance.now();

    const update = (currentTime) => {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3); // easeOutCubic
      const current = target * eased;
      element.textContent = prefix + current.toFixed(decimals) + suffix;
      if (progress < 1) requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
  },

  // ============================================
  // 5. SCROLL REVEAL HELPER
  // ============================================
  // SHARED-CANDIDATE: Used by almost every section
  scrollReveal(selector, options = {}) {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
      console.warn('GSAP/ScrollTrigger not loaded');
      return;
    }

    const defaults = {
      y: 50,
      opacity: 0,
      duration: 1,
      ease: 'expo.out',
      stagger: 0.1,
      start: 'top 85%',
      toggleActions: 'play none none reverse'
    };
    const config = { ...defaults, ...options };

    gsap.utils.toArray(selector).forEach(el => {
      gsap.from(el, {
        y: config.y,
        opacity: config.opacity,
        duration: config.duration,
        ease: config.ease,
        stagger: config.stagger,
        scrollTrigger: {
          trigger: el,
          start: config.start,
          toggleActions: config.toggleActions
        }
      });
    });
  },

  // ============================================
  // 6. SMOOTH SCROLL (Lenis)
  // ============================================
  // SHARED-CANDIDATE: Used globally
  initSmoothScroll() {
    if (this.prefersReducedMotion || typeof Lenis === 'undefined') return;

    const lenis = new Lenis({
      duration: 1.2,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      smooth: true,
      smoothTouch: false,
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => lenis.raf(time * 1000));
    gsap.ticker.lagSmoothing(0);

    return lenis;
  },

  // ============================================
  // 7. NAVBAR SCROLL EFFECT
  // ============================================
  // SHARED-CANDIDATE: Used globally
  initNavbarScroll() {
    const nav = document.querySelector('.grit-nav');
    if (!nav) return;

    window.addEventListener('scroll', () => {
      const scrolled = window.scrollY > 80;
      nav.classList.toggle('grit-nav--scrolled', scrolled);
    }, { passive: true });
  },

  // ============================================
  // 8. INIT ALL
  // ============================================
  init() {
    this.initCustomCursor();
    this.initMagneticButtons();
    this.initNavbarScroll();
    // Lenis init happens after GSAP is ready (call separately if needed)
  }
};

// Auto-init on DOM ready
document.addEventListener('DOMContentLoaded', () => Grit.init());
