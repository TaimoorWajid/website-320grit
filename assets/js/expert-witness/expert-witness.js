/* ============================================
   320 GRIT — Expert Witness Service Page
   Premium JavaScript
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

// ======================================================
// /* SHARED UTILITIES */
// ======================================================

  // Intersection Observer helper
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

  const hero = document.querySelector('#hero');
  if (hero) {
    // Entrance
    window.addEventListener('load', () => {
      setTimeout(() => {
        hero.classList.add('is-loaded');
      }, 80);
    });

    // Subtle parallax on scroll
    let ticking = false;
    window.addEventListener('scroll', () => {
      if (!ticking) {
        window.requestAnimationFrame(() => {
          const scrolled = window.pageYOffset;
          const img = hero.querySelector('.ew-hero__bg-img');
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
// /* SECTION 02: TECHNICAL EXPERTISE */
// ======================================================

  createObserver('#ew-expertise', { threshold: 0.18 });

// ======================================================
// /* SECTION 03: WHAT IS AN EXPERT WITNESS */
// ======================================================

  createObserver('#ew-what', { threshold: 0.2 });

// ======================================================
// /* SECTION 04: OUR EXPERTISE (6 CARDS) */
// ======================================================

  createObserver('#ew-services', { threshold: 0.15 });

// ======================================================
// /* SECTION 05: PROCESS */
// ======================================================

  createObserver('#ew-process', { threshold: 0.18 });

// ======================================================
// /* SECTION 06: WHY CHOOSE 320 GRIT */
// ======================================================

  createObserver('#ew-why', { threshold: 0.18 });

// ======================================================
// /* SECTION 07: WHO WE SERVE */
// ======================================================

  createObserver('#ew-serve', { threshold: 0.2 });

// ======================================================
// /* SECTION 08: FINAL CTA */
// ======================================================

  // Optional subtle entrance for CTA (if you want later)
  // Currently kept clean and static for maximum impact

// ======================================================
// /* OPTIONAL: SMOOTH MAGNETIC BUTTONS */
// ======================================================

  document.querySelectorAll('.ew-hero__btn, .ew-cta__btn').forEach(btn => {
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