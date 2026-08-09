(function () {
  const hero = document.querySelector('#hero-bid-build');
  if (!hero) return;

  // Trigger entrance animations
  window.addEventListener('load', () => {
    // Small delay so images can settle
    setTimeout(() => {
      hero.classList.add('is-loaded');
    }, 80);
  });

  // Optional: Parallax on scroll (subtle)
  let ticking = false;
  window.addEventListener('scroll', () => {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        const scrolled = window.pageYOffset;
        const img = hero.querySelector('.hero-bid-build__bg-img');
        if (img && scrolled < window.innerHeight) {
          img.style.transform = `scale(1) translateY(${scrolled * 0.25}px)`;
        }
        ticking = false;
      });
      ticking = true;
    }
  });
})();