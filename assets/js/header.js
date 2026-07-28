(function () {
  const htmlEl = document.documentElement;
  let scrollTimeout;
  const HOVER_ZONE_PX = 16; // width of the invisible hover-detection strip at the right edge

  function showScrollbar() {
    htmlEl.classList.add('sb-visible');
  }

  function hideScrollbarIfIdle() {
    if (!htmlEl.classList.contains('sb-hovering')) {
      htmlEl.classList.remove('sb-visible');
    }
  }

  window.addEventListener('scroll', function () {
    showScrollbar();
    clearTimeout(scrollTimeout);
    scrollTimeout = setTimeout(hideScrollbarIfIdle, 1000);
  }, { passive: true });

  window.addEventListener('mousemove', function (e) {
    const nearScrollbar = e.clientX >= window.innerWidth - HOVER_ZONE_PX;
    if (nearScrollbar) {
      htmlEl.classList.add('sb-hovering');
      showScrollbar();
    } else {
      htmlEl.classList.remove('sb-hovering');
      clearTimeout(scrollTimeout);
      scrollTimeout = setTimeout(hideScrollbarIfIdle, 1000);
    }
  }, { passive: true });
})();