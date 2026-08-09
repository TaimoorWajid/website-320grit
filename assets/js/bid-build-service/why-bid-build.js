(function () {
  const section = document.querySelector('#why-bid-build');
  if (!section) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        section.classList.add('is-inview');
      }
    });
  }, {
    threshold: 0.2
  });

  observer.observe(section);
})();


// ===========================================

(function () {
  const section = document.querySelector('#bid-journey');
  if (!section) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        section.classList.add('is-inview');
      }
    });
  }, { threshold: 0.2 });

  observer.observe(section);
})();

// ==========================================

(function () {
  const section = document.querySelector('#bid-process');
  if (!section) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        section.classList.add('is-inview');
      }
    });
  }, { threshold: 0.2 });

  observer.observe(section);
})();

// ==========================================

(function () {
  const section = document.querySelector('#path-success');
  if (!section) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        section.classList.add('is-inview');
      }
    });
  }, { threshold: 0.2 });

  observer.observe(section);
})();

// ==========================================

(function () {
  const section = document.querySelector('#faq-bid');
  if (!section) return;

  // Entrance animation
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        section.classList.add('is-inview');
      }
    });
  }, { threshold: 0.15 });

  observer.observe(section);

  // Accordion
  const items = section.querySelectorAll('.faq-bid__item');

  items.forEach(item => {
    const button = item.querySelector('.faq-bid__question');

    button.addEventListener('click', () => {
      const isOpen = item.classList.contains('is-open');

      // Close all
      items.forEach(i => {
        i.classList.remove('is-open');
        i.querySelector('.faq-bid__question').setAttribute('aria-expanded', 'false');
      });

      // Open clicked one (if it was closed)
      if (!isOpen) {
        item.classList.add('is-open');
        button.setAttribute('aria-expanded', 'true');
      }
    });
  });
})();