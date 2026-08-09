/* ============================================
   320 GRIT — Side Navigation Scroll Tracker
   Highlights current section on scroll
   ============================================ */

(function() {
  'use strict';

  const nav = document.getElementById('gritSidenav');
  if (!nav) return;

  const items = nav.querySelectorAll('.grit-sidenav__item');
  if (!items.length) return;

  // Build section map
  const sectionMap = {};
  items.forEach(item => {
    const id = item.dataset.section;
    if (id) sectionMap[id] = item;
  });

  const sectionIds = Object.keys(sectionMap);
  if (!sectionIds.length) return;

  // Intersection Observer — triggers when section hits middle of viewport
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.id;
        const activeItem = sectionMap[id];

        items.forEach(i => i.classList.remove('active'));
        if (activeItem) activeItem.classList.add('active');
      }
    });
  }, {
    root: null,
    rootMargin: '-45% 0px -45% 0px', // Active when section is in middle 10%
    threshold: 0
  });

  // Observe all sections
  sectionIds.forEach(id => {
    const section = document.getElementById(id);
    if (section) observer.observe(section);
  });

  // Click to smooth scroll
  items.forEach(item => {
    item.addEventListener('click', (e) => {
      e.preventDefault();
      const id = item.dataset.section;
      const section = document.getElementById(id);
      if (section) {
        section.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

})();