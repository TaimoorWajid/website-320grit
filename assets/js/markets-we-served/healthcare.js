/* ============================================================
   320 GRIT — Healthcare Landing
   Single JS File | Section-separated
   ============================================================ */

(function () {
  'use strict';

  /* ============================================================
     GLOBAL — SCROLL REVEAL
     ============================================================ */
  const reveals = document.querySelectorAll('.hc-reveal');

  if (reveals.length) {
    const revealObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('hc-visible');
            revealObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );

    reveals.forEach((el) => revealObserver.observe(el));
  }


  /* ============================================================
     SECTION 05 — ENVIRONMENTS (tab switcher)
     ============================================================ */
  const envCards = document.querySelectorAll('.hc-env-card');
  const envImage = document.getElementById('hc-env-img');
  const envTitle = document.getElementById('hc-env-title');
  const envDesc  = document.getElementById('hc-env-desc');

  // Data comes from the PHP-rendered buttons + initial image.
  // We rebuild a small lookup from the buttons themselves.
  if (envCards.length && envImage && envTitle && envDesc) {
    // Store data attributes if you want, or hard-map here.
    // For simplicity we keep a JS map that matches the PHP array keys.
    const envData = {
      hospitals: {
        title: '01 Hospitals',
        desc:  'Complex environments requiring disciplined coordination and careful construction planning.',
        img:   'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=900&q=80'
      },
      medical: {
        title: '02 Medical Centers',
        desc:  'Multi-specialty facilities built for efficiency, patient flow, and clinical excellence.',
        img:   'https://images.unsplash.com/photo-1586773860418-d37222d8fce3?w=900&q=80'
      },
      outpatient: {
        title: '03 Outpatient Facilities',
        desc:  'Patient-centered spaces designed for high throughput and comfort.',
        img:   'https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=900&q=80'
      },
      clinics: {
        title: '04 Clinics',
        desc:  'Focused clinical environments optimized for specific care pathways.',
        img:   'https://images.unsplash.com/photo-1516549655169-df83a0774514?w=900&q=80'
      },
      specialty: {
        title: '05 Specialty Care',
        desc:  'Advanced care environments with specialized systems and workflows.',
        img:   'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=900&q=80'
      },
      office: {
        title: '06 Medical Office Buildings',
        desc:  'Professional medical office spaces designed for providers and patients.',
        img:   'https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=900&q=80'
      },
      ambulatory: {
        title: '07 Ambulatory Facilities',
        desc:  'Same-day care environments built for speed, safety, and recovery.',
        img:   'https://images.unsplash.com/photo-1551076805-e1869033fa41?w=900&q=80'
      },
      renovation: {
        title: '08 Renovation & Expansion',
        desc:  'Phased work in active facilities that protects operations while building the future.',
        img:   'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=900&q=80'
      }
    };

    envCards.forEach((card) => {
      card.addEventListener('click', () => {
        envCards.forEach((c) => c.classList.remove('active'));
        card.classList.add('active');

        const key  = card.dataset.env;
        const data = envData[key];
        if (!data) return;

        envImage.style.opacity = '0';
        setTimeout(() => {
          envImage.src = data.img;
          envTitle.textContent = data.title;
          envDesc.textContent  = data.desc;
          envImage.style.opacity = '1';
        }, 250);
      });
    });
  }


  /* ============================================================
     SECTION 09 — FAQ ACCORDION
     ============================================================ */
  document.querySelectorAll('.hc-faq-question').forEach((btn) => {
    btn.addEventListener('click', () => {
      const item   = btn.closest('.hc-faq-item');
      const answer = item.querySelector('.hc-faq-answer');
      const isOpen = item.classList.contains('active');

      // Close all
      document.querySelectorAll('.hc-faq-item').forEach((i) => {
        i.classList.remove('active');
        i.querySelector('.hc-faq-answer').style.maxHeight = null;
      });

      // Open clicked if it was closed
      if (!isOpen) {
        item.classList.add('active');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });


  /* ============================================================
     GLOBAL — SMOOTH ANCHOR OFFSET
     ============================================================ */
  document.querySelectorAll('a[href^="#hc-"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      const offset = 80;
      const top = target.getBoundingClientRect().top + window.pageYOffset - offset;
      window.scrollTo({ top, behavior: 'smooth' });
    });
  });

})();