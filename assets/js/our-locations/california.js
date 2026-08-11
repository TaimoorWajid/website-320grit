/* ============================================================
   320 GRIT — California
   Reveals · 3D scroll ring · FAQ · fixed-bg cleanup
   No external libraries
   ============================================================ */

(function () {
  'use strict';

  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------- REVEAL ---------- */
  const revealEls = document.querySelectorAll('[data-reveal]');
  if (revealEls.length && !prefersReduced) {
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          const el = entry.target;
          const delay = parseInt(el.dataset.delay || '0', 10);
          setTimeout(() => el.classList.add('is-in'), delay);
          io.unobserve(el);
        });
      },
      { threshold: 0.12, rootMargin: '0px 0px -6% 0px' }
    );
    revealEls.forEach((el) => io.observe(el));
  } else {
    revealEls.forEach((el) => el.classList.add('is-in'));
  }

  /* ---------- FIXED HERO BG: hide when scrolled past ---------- */
  const heroBg = document.querySelector('.ca-hero-bg');
  const hero = document.querySelector('.ca-hero');
  if (heroBg && hero) {
    const syncHeroBg = () => {
      const rect = hero.getBoundingClientRect();
      // Once hero is fully above viewport, hide fixed bg so lower sections show their own
      if (rect.bottom <= 0) {
        heroBg.style.opacity = '0';
        heroBg.style.pointerEvents = 'none';
      } else {
        heroBg.style.opacity = '1';
        heroBg.style.pointerEvents = 'auto';
      }
    };
    window.addEventListener('scroll', syncHeroBg, { passive: true });
    syncHeroBg();
  }

  /* ---------- 3D RING (scroll-driven rotation) ---------- */
  const ringViewport = document.getElementById('ca-ring');
  const ringStage = document.getElementById('ca-ring-stage');
  const ringCards = ringStage ? Array.from(ringStage.querySelectorAll('.ca-ring-card')) : [];
  const ringDots = document.querySelectorAll('#ca-ring-dots .ca-dot');
  const N = ringCards.length;

  if (ringStage && N > 0 && !prefersReduced) {
    const RADIUS = 320; // smaller radius so cards fit in view
    const STEP = 360 / N;
    let activeIndex = 0;
    let currentAngle = 0;
    let targetAngle = 0;
    let rafId = null;
    let pointerInside = false;

    function layoutCards(angleOffset) {
      ringCards.forEach((card, i) => {
        const deg = angleOffset + i * STEP;
        const rad = (deg * Math.PI) / 180;
        const x = Math.sin(rad) * RADIUS;
        const z = Math.cos(rad) * RADIUS;
        const depth = (z + RADIUS) / (2 * RADIUS);
        const scale = 0.72 + depth * 0.28;
        const opacity = 0.3 + depth * 0.7;

        // Front card (deg near 0) → no rotateY, dead center
        card.style.transform =
          `translateX(${x}px) translateZ(${z}px) rotateY(${-deg}deg) scale(${scale})`;
        card.style.opacity = String(opacity);
        card.style.zIndex = String(Math.round(depth * 100));
        card.classList.toggle('is-front', depth > 0.88);
      });
    }

    function updateDots(idx) {
      ringDots.forEach((d, i) => d.classList.toggle('is-active', i === idx));
    }

    function tick() {
      currentAngle += (targetAngle - currentAngle) * 0.12;
      layoutCards(currentAngle);
      if (Math.abs(targetAngle - currentAngle) > 0.08) {
        rafId = requestAnimationFrame(tick);
      } else {
        currentAngle = targetAngle;
        layoutCards(currentAngle);
        rafId = null;
      }
    }

    // Always snap so ONE card is at angle 0 (exact center, straight)
    function goToIndex(idx, animate) {
      idx = ((idx % N) + N) % N;
      activeIndex = idx;
      targetAngle = -idx * STEP;
      updateDots(idx);
      if (animate) {
        if (!rafId) rafId = requestAnimationFrame(tick);
      } else {
        currentAngle = targetAngle;
        layoutCards(currentAngle);
      }
    }

    // Wheel inside section → rotate cards, block page scroll
    let isLocked = false;
    let wheelCooldown = false;

    function onWheel(e) {
      if (!isLocked) return;

      // At ends: let user scroll the page out of the section
      if (e.deltaY < 0 && activeIndex === 0) return;       // top card + scroll up → leave
      if (e.deltaY > 0 && activeIndex === N - 1) return;   // last card + scroll down → leave

      e.preventDefault();
      e.stopPropagation();

      if (wheelCooldown) return;
      wheelCooldown = true;
      setTimeout(() => { wheelCooldown = false; }, 320); // one card per gesture

      if (e.deltaY > 0) goToIndex(activeIndex + 1, true);
      else goToIndex(activeIndex - 1, true);
    }

    // Lock while the Markets section is the main thing on screen
    const ringSec = document.getElementById('ca-markets') || ringViewport.parentElement;
    const lockIO = new IntersectionObserver(
      ([entry]) => {
        isLocked = entry.isIntersecting && entry.intersectionRatio >= 0.55;
      },
      { threshold: [0.55, 0.7, 0.85] }
    );
    if (ringSec) lockIO.observe(ringSec);

    // Must be on window/document with passive:false so preventDefault always works
    window.addEventListener('wheel', onWheel, { passive: false });

    // Touch
    let touchY = null;
    if (ringSec) {
      ringSec.addEventListener('touchstart', (e) => {
        touchY = e.touches[0].clientY;
      }, { passive: true });

      ringSec.addEventListener('touchmove', (e) => {
        if (!isLocked || touchY === null) return;
        const dy = touchY - e.touches[0].clientY;
        if (Math.abs(dy) < 36) return;

        if (dy < 0 && activeIndex === 0) return;
        if (dy > 0 && activeIndex === N - 1) return;

        e.preventDefault();
        goToIndex(activeIndex + (dy > 0 ? 1 : -1), true);
        touchY = e.touches[0].clientY;
      }, { passive: false });

      ringSec.addEventListener('touchend', () => { touchY = null; });
    }

    ringDots.forEach((dot) => {
      dot.addEventListener('click', () => {
        goToIndex(parseInt(dot.dataset.index, 10), true);
      });
    });

    goToIndex(0, false);
  } else if (ringStage && N > 0) {
    ringCards.forEach((card) => {
      card.style.position = 'relative';
      card.style.transform = 'none';
      card.style.opacity = '1';
      card.style.margin = '0 auto 1rem';
      card.style.left = '0';
      card.style.top = '0';
    });
    if (ringViewport) ringViewport.style.height = 'auto';
  }

  /* ---------- FAQ accordion ---------- */
  document.querySelectorAll('.ca-faq-q').forEach((btn) => {
    btn.addEventListener('click', () => {
      const item = btn.closest('.ca-faq-item');
      const open = item.classList.contains('is-open');
      // Close others in same grid (optional: allow multi-open — keep single)
      item.parentElement.querySelectorAll('.ca-faq-item.is-open').forEach((el) => {
        el.classList.remove('is-open');
        el.querySelector('.ca-faq-q').setAttribute('aria-expanded', 'false');
      });
      if (!open) {
        item.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  /* ---------- Smooth anchors ---------- */
  document.querySelectorAll('a[href^="#ca-"]').forEach((a) => {
    a.addEventListener('click', function (e) {
      const t = document.querySelector(this.getAttribute('href'));
      if (!t) return;
      e.preventDefault();
      const top = t.getBoundingClientRect().top + window.pageYOffset - 50;
      window.scrollTo({ top, behavior: 'smooth' });
    });
  });

})();
