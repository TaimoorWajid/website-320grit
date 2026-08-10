(function () {
  const section = document.querySelector('#service-what-is');
  if (!section) return;

  const building = section.querySelector('[data-rotate]');

  // Entrance observer
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        section.classList.add('is-inview');
      }
    });
  }, { threshold: 0.2 });

  observer.observe(section);

  // Scroll rotation
  function onScroll() {
    const rect = section.getBoundingClientRect();
    const winH = window.innerHeight;

    // 0 = section just entering from bottom, 1 = section leaving top
    let progress = (winH - rect.top) / (winH + rect.height);
    progress = Math.min(Math.max(progress, 0), 1);

    // Stronger rotation range
    const rotateY = -22 + (progress * 44);   // -22° → +22°
    const rotateX = 8 - (progress * 16);     // slight tilt
    const translateZ = progress * 50;

    if (building) {
      building.style.transform = `rotateY(${rotateY}deg) rotateX(${rotateX}deg) translateZ(${translateZ}px)`;
    }
  }

  window.addEventListener('scroll', () => {
    requestAnimationFrame(onScroll);
  }, { passive: true });

  // Run once on load
  onScroll();
})();