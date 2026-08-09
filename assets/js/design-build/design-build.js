/* ============================================
   320 GRIT — Design-Build Service Page
   Premium JavaScript
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

// ======================================================
// /* SHARED UTILITIES */
// ======================================================

  const createObserver = (selector, options = { threshold: 0.2 }) => {
    const section = document.querySelector(selector);
    if (!section) return;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          section.classList.add('is-inview');
        }
      });
    }, options);

    observer.observe(section);
  };

// ======================================================
// /* SECTION 01: HERO */
// ======================================================

  const hero = document.querySelector('#db-hero');
  if (hero) {
    window.addEventListener('load', () => {
      setTimeout(() => {
        hero.classList.add('is-loaded');
      }, 80);
    });

    // Subtle parallax
    let ticking = false;
    window.addEventListener('scroll', () => {
      if (!ticking) {
        window.requestAnimationFrame(() => {
          const scrolled = window.pageYOffset;
          const img = hero.querySelector('.db-hero__bg-img');
          if (img && scrolled < window.innerHeight) {
            img.style.transform = `scale(1) translateY(${scrolled * 0.22}px)`;
          }
          ticking = false;
        });
        ticking = true;
      }
    }, { passive: true });
  }

    // ======================================================
    // /* SECTION 02: KEY BENEFITS */
    // ======================================================

  createObserver('#db-benefits', { threshold: 0.18 });

// ======================================================
// /* SECTION 03: WHAT IS DESIGN-BUILD */
// ======================================================

  createObserver('#db-what', { threshold: 0.2 });

// ======================================================
// /* SECTION 04: PROCESS */
// ======================================================

  createObserver('#db-process', { threshold: 0.18 });

// ======================================================
// /* SECTION 05: WHY CHOOSE DESIGN-BUILD */
// ======================================================

  createObserver('#db-why', { threshold: 0.15 });

// ======================================================
// /* SECTION 06: TYPICAL PROJECTS */
// ======================================================

  createObserver('#db-projects', { threshold: 0.15 });

// ======================================================
// /* SECTION 07: COLLABORATION */
// ======================================================

  createObserver('#db-collab', { threshold: 0.2 });

// ======================================================
// /* SECTION 08: FINAL CTA */
// ======================================================

//   // Kept clean for maximum impact

// ======================================================
// /* MAGNETIC BUTTONS */
// ======================================================

  document.querySelectorAll('.db-hero__btn, .db-cta__btn').forEach(btn => {
    btn.addEventListener('mousemove', (e) => {
      const rect = btn.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;
      btn.style.transform = `translate(${x * 0.18}px, ${y * 0.18}px)`;
    });
    btn.addEventListener('mouseleave', () => {
      btn.style.transform = 'translate(0, 0)';
    });
  });

}); // End DOMContentLoaded