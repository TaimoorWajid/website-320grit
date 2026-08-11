/* ============================================================
   320 GRIT — Owner-Centric
   Scroll reveals · Parallax · Stagger · Smooth anchors
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
      { threshold: 0.12, rootMargin: '0px 0px -8% 0px' }
    );
    revealEls.forEach((el) => io.observe(el));
  } else {
    revealEls.forEach((el) => el.classList.add('is-in'));
  }

  /* ---------- PARALLAX ---------- */
  if (!prefersReduced) {
    const parallaxSections = document.querySelectorAll('[data-parallax]');
    let ticking = false;

    function updateParallax() {
      const scrollY = window.pageYOffset;
      parallaxSections.forEach((section) => {
        const rect = section.getBoundingClientRect();
        const sectionTop = scrollY + rect.top;
        const progress = (scrollY - sectionTop) / (rect.height + window.innerHeight);
        const layers = section.querySelectorAll('[data-speed]');
        layers.forEach((layer) => {
          const speed = parseFloat(layer.dataset.speed) || 0.3;
          const y = progress * speed * 120;
          layer.style.transform = `translate3d(0, ${y}px, 0)`;
        });
      });
      ticking = false;
    }

    window.addEventListener(
      'scroll',
      () => {
        if (!ticking) {
          requestAnimationFrame(updateParallax);
          ticking = true;
        }
      },
      { passive: true }
    );
    updateParallax();
  }

  /* ---------- SMOOTH ANCHORS ---------- */
  document.querySelectorAll('a[href^="#oc-"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      const top = target.getBoundingClientRect().top + window.pageYOffset - 60;
      window.scrollTo({ top, behavior: 'smooth' });
    });
  });

  /* ---------- ORBIT NODE HOVER DEPTH ---------- */
  if (!prefersReduced) {
    document.querySelectorAll('.oc-orbit-node').forEach((node) => {
      node.addEventListener('mouseenter', () => {
        node.style.zIndex = '10';
      });
      node.addEventListener('mouseleave', () => {
        node.style.zIndex = '4';
      });
    });
  }

  /* ---------- TABLET TILT ON MOUSE ---------- */
  const tabletWrap = document.querySelector('.oc-info-visual');
  const tablet = document.querySelector('.oc-tablet');

  if (tablet && tabletWrap && !prefersReduced) {
    tabletWrap.addEventListener('mousemove', (e) => {
      const rect = tabletWrap.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width - 0.5;
      const y = (e.clientY - rect.top) / rect.height - 0.5;
      tablet.style.transform = `rotateY(${-8 + x * 12}deg) rotateX(${4 - y * 8}deg)`;
    });
    tabletWrap.addEventListener('mouseleave', () => {
      tablet.style.transform = 'rotateY(-8deg) rotateX(4deg)';
    });
  }

})();
