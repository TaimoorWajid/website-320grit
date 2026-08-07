/* ============================================
   320 GRIT — Commercial Construction Page
   Complete JavaScript
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

  // ============================================
  // 1. LENIS SMOOTH SCROLL
  // ============================================
  const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smooth: true,
    smoothTouch: false,
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);

  lenis.on('scroll', ScrollTrigger.update);
  gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
  });
  gsap.ticker.lagSmoothing(0);

  // ============================================
  // 2. CUSTOM CURSOR
  // ============================================
  const cursor = document.getElementById('cursor');
  const isTouchDevice = window.matchMedia('(pointer: coarse)').matches;

  if (!isTouchDevice && cursor) {
    let mouseX = 0, mouseY = 0;
    let cursorX = 0, cursorY = 0;

    document.addEventListener('mousemove', (e) => {
      mouseX = e.clientX;
      mouseY = e.clientY;
    });

    function animateCursor() {
      cursorX += (mouseX - cursorX) * 0.15;
      cursorY += (mouseY - cursorY) * 0.15;
      cursor.style.left = cursorX + 'px';
      cursor.style.top = cursorY + 'px';
      requestAnimationFrame(animateCursor);
    }
    animateCursor();

    document.querySelectorAll('a, button, .magnetic, .tilt-card').forEach(el => {
      el.addEventListener('mouseenter', () => cursor.classList.add('expanded'));
      el.addEventListener('mouseleave', () => cursor.classList.remove('expanded'));
    });
  }

  // ============================================
  // 3. MOBILE NAV
  // ============================================
  const navToggle = document.getElementById('navToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  if (navToggle && mobileMenu) {
    navToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('active');
      const spans = navToggle.querySelectorAll('span');
      if (mobileMenu.classList.contains('active')) {
        spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
        spans[1].style.opacity = '0';
        spans[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
      } else {
        spans[0].style.transform = 'none';
        spans[1].style.opacity = '1';
        spans[2].style.transform = 'none';
      }
    });
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        navToggle.querySelectorAll('span').forEach(s => { s.style.transform = 'none'; s.style.opacity = '1'; });
      });
    });
  }

  // ============================================
  // 4. NAVBAR SCROLL EFFECT
  // ============================================
  const navbar = document.getElementById('navbar');
  let lastScroll = 0;
  window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY;
    if (currentScroll > 100) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
    lastScroll = currentScroll;
  }, { passive: true });

  // ============================================
  // 5. HERO CHARACTER SPLIT
  // ============================================
  const headline = document.getElementById('heroHeadline');
  if (headline) {
    const text = headline.textContent;
    headline.innerHTML = '';
    text.split('').forEach((char, i) => {
      const span = document.createElement('span');
      span.className = 'char';
      span.textContent = char === ' ' ? '\\u00A0' : char;
      span.style.animationDelay = (1.6 + i * 0.025) + 's';
      headline.appendChild(span);
    });
  }

  // ============================================
  // 6. HERO ENTRANCE ANIMATIONS
  // ============================================
  gsap.to('.hero-eyebrow', {
    opacity: 1, y: 0, duration: 0.8, ease: 'expo.out', delay: 1.4
  });
  gsap.to('.hero-headline .char', {
    opacity: 1, y: 0, duration: 1, ease: 'expo.out', stagger: 0.025, delay: 1.6
  });
  gsap.to('.hero-subheadline', {
    opacity: 1, y: 0, duration: 0.8, ease: 'expo.out', delay: 2.2
  });
  gsap.to('.hero-ctas', {
    opacity: 1, y: 0, duration: 0.8, ease: 'expo.out', delay: 2.5
  });
  gsap.to('.scroll-indicator', {
    opacity: 1, duration: 0.8, ease: 'expo.out', delay: 3.0
  });

  // ============================================
  // 7. HERO SCROLL PARALLAX (PIN + FADE)
  // ============================================
  const heroSection = document.querySelector('.hero-section');
  const heroCanvas = document.querySelector('.hero-canvas');
  const heroContent = document.querySelector('.hero-content');
  const scrollInd = document.querySelector('.scroll-indicator');

  if (heroSection && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const heroTl = gsap.timeline({
      scrollTrigger: {
        trigger: heroSection,
        start: 'top top',
        end: '+=60%',
        pin: true,
        scrub: 1,
      }
    });
    heroTl.to(heroCanvas, { scale: 1.12, filter: 'blur(6px)', ease: 'none' }, 0);
    heroTl.to(heroContent, { y: -80, opacity: 0, ease: 'none' }, 0);
    heroTl.to(scrollInd, { opacity: 0, ease: 'none' }, 0);
  }

  // ============================================
  // 8. WEBGL HERO DISPLACEMENT SHADER
  // ============================================
  const heroCanvasContainer = document.getElementById('heroCanvas');
  const fallbackImg = document.querySelector('.hero-fallback-img');

  if (heroCanvasContainer && !isTouchDevice && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    try {
      const scene = new THREE.Scene();
      const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
      camera.position.z = 1;

      const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
      renderer.setSize(window.innerWidth, window.innerHeight);
      renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
      heroCanvasContainer.insertBefore(renderer.domElement, heroCanvasContainer.firstChild);

      const loader = new THREE.TextureLoader();
      loader.load('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1920&q=80', (texture) => {
        texture.minFilter = THREE.LinearFilter;
        texture.magFilter = THREE.LinearFilter;

        const geometry = new THREE.PlaneGeometry(2.2, 2.2, 32, 32);
        const material = new THREE.ShaderMaterial({
          uniforms: {
            uTexture: { value: texture },
            uMouse: { value: new THREE.Vector2(0.5, 0.5) },
            uTime: { value: 0 },
            uIntensity: { value: 0.25 }
          },
          vertexShader: `
            varying vec2 vUv;
            void main() {
              vUv = uv;
              gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
            }
          `,
          fragmentShader: `
            uniform sampler2D uTexture;
            uniform vec2 uMouse;
            uniform float uTime;
            uniform float uIntensity;
            varying vec2 vUv;

            vec3 mod289(vec3 x) { return x - floor(x * (1.0 / 289.0)) * 289.0; }
            vec2 mod289(vec2 x) { return x - floor(x * (1.0 / 289.0)) * 289.0; }
            vec3 permute(vec3 x) { return mod289(((x*34.0)+1.0)*x); }

            float snoise(vec2 v) {
              const vec4 C = vec4(0.211324865405187, 0.366025403784439,
                                 -0.577350269189626, 0.024390243902439);
              vec2 i  = floor(v + dot(v, C.yy));
              vec2 x0 = v - i + dot(i, C.xx);
              vec2 i1 = (x0.x > x0.y) ? vec2(1.0, 0.0) : vec2(0.0, 1.0);
              vec4 x12 = x0.xyxy + C.xxzz;
              x12.xy -= i1;
              i = mod289(i);
              vec3 p = permute(permute(i.y + vec3(0.0, i1.y, 1.0))
                              + i.x + vec3(0.0, i1.x, 1.0));
              vec3 m = max(0.5 - vec3(dot(x0,x0), dot(x12.xy,x12.xy),
                                      dot(x12.zw,x12.zw)), 0.0);
              m = m*m; m = m*m;
              vec3 x = 2.0 * fract(p * C.www) - 1.0;
              vec3 h = abs(x) - 0.5;
              vec3 ox = floor(x + 0.5);
              vec3 a0 = x - ox;
              m *= 1.79284291400159 - 0.85373472095314 * (a0*a0 + h*h);
              vec3 g;
              g.x = a0.x * x0.x + h.x * x0.y;
              g.yz = a0.yz * x12.xz + h.yz * x12.yw;
              return 130.0 * dot(m, g);
            }

            void main() {
              vec2 uv = vUv;
              float dist = distance(uv, uMouse);
              float strength = smoothstep(0.5, 0.0, dist) * uIntensity;
              float noise = snoise(uv * 3.0 + uTime * 0.3) * 0.015;
              vec2 displacedUV = uv + (uMouse - uv) * strength * 0.12 + noise;
              displacedUV.x += sin(uv.y * 10.0 + uTime * 0.5) * 0.002;
              displacedUV.y += cos(uv.x * 10.0 + uTime * 0.5) * 0.002;
              gl_FragColor = texture2D(uTexture, displacedUV);
            }
          `
        });

        const mesh = new THREE.Mesh(geometry, material);
        scene.add(mesh);

        let mouseX = 0.5, mouseY = 0.5;
        let targetMX = 0.5, targetMY = 0.5;
        let time = 0;

        document.addEventListener('mousemove', (e) => {
          targetMX = e.clientX / window.innerWidth;
          targetMY = 1.0 - (e.clientY / window.innerHeight);
        });

        function animate() {
          requestAnimationFrame(animate);
          time += 0.016;
          mouseX += (targetMX - mouseX) * 0.05;
          mouseY += (targetMY - mouseY) * 0.05;
          material.uniforms.uMouse.value.set(mouseX, mouseY);
          material.uniforms.uTime.value = time;
          renderer.render(scene, camera);
        }
        animate();

        window.addEventListener('resize', () => {
          camera.aspect = window.innerWidth / window.innerHeight;
          camera.updateProjectionMatrix();
          renderer.setSize(window.innerWidth, window.innerHeight);
        });

        // Hide fallback image
        if (fallbackImg) fallbackImg.style.display = 'none';
      });
    } catch (e) {
      console.log('WebGL not supported, using fallback');
      if (fallbackImg) fallbackImg.classList.add('visible');
    }
  } else {
    if (fallbackImg) fallbackImg.classList.add('visible');
  }

  // ============================================
  // 9. MAGNETIC BUTTONS
  // ============================================
  document.querySelectorAll('.magnetic').forEach(btn => {
    btn.addEventListener('mousemove', (e) => {
      const rect = btn.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;
      btn.style.transform = `translate(${x * 0.25}px, ${y * 0.25}px)`;
    });
    btn.addEventListener('mouseleave', () => {
      btn.style.transform = 'translate(0, 0)';
    });
  });

  // ============================================
  // 10. SCROLL-TRIGGERED REVEALS
  // ============================================
  gsap.utils.toArray('.difference-section, .process-section, .stats-section, .testimonial-section, .faq-section').forEach(section => {
    gsap.from(section.querySelectorAll('.section-eyebrow, .section-headline, .section-body'), {
      y: 50, opacity: 0, duration: 1, ease: 'expo.out', stagger: 0.1,
      scrollTrigger: { trigger: section, start: 'top 80%', toggleActions: 'play none none reverse' }
    });
  });

  // ============================================
  // 11. 3D CARD TILT
  // ============================================
  document.querySelectorAll('.tilt-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width - 0.5;
      const y = (e.clientY - rect.top) / rect.height - 0.5;
      card.style.transform = `perspective(800px) rotateX(${-y * 12}deg) rotateY(${x * 12}deg) scale3d(1.02, 1.02, 1.02)`;
      card.style.boxShadow = `${-x * 20}px ${y * 20}px 40px rgba(0,0,0,0.3), 0 0 0 1px rgba(124,58,237,0.1)`;
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = 'perspective(800px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
      card.style.boxShadow = 'none';
    });
  });

  // ============================================
  // 12. CAPABILITY CARDS STAGGER
  // ============================================
  gsap.from('.capability-card', {
    y: 80, opacity: 0, duration: 0.9, ease: 'expo.out', stagger: 0.12,
    scrollTrigger: { trigger: '.difference-cards', start: 'top 78%', toggleActions: 'play none none reverse' }
  });

  // ============================================
  // 13. HORIZONTAL SCROLL
  // ============================================
  const hWrapper = document.querySelector('.horizontal-scroll-wrapper');
  const hContainer = document.getElementById('horizontalContainer');
  const hProgress = document.getElementById('scrollProgress');

  if (hWrapper && hContainer && window.innerWidth > 768) {
    const cards = hContainer.querySelectorAll('.horizontal-card');
    const totalWidth = hContainer.scrollWidth - window.innerWidth;

    gsap.to(hContainer, {
      x: -totalWidth,
      ease: 'none',
      scrollTrigger: {
        trigger: hWrapper,
        start: 'top top',
        end: () => `+=${totalWidth}`,
        pin: true,
        scrub: 1,
        invalidateOnRefresh: true,
        anticipatePin: 1,
        onUpdate: (self) => {
          if (hProgress) hProgress.style.transform = `scaleX(${self.progress})`;
        }
      }
    });

    // Image parallax within cards
    cards.forEach(card => {
      const img = card.querySelector('img');
      if (img) {
        gsap.fromTo(img, { x: '-8%' }, {
          x: '8%', ease: 'none',
          scrollTrigger: {
            trigger: card,
            containerAnimation: gsap.getById && gsap.getById('horizontal'),
            start: 'left right',
            end: 'right left',
            scrub: 1
          }
        });
      }
    });
  }

  // ============================================
  // 14. PROCESS TIMELINE
  // ============================================
  const timelineProgress = document.getElementById('timelineProgress');
  const processSteps = document.querySelectorAll('.process-step');

  if (timelineProgress) {
    gsap.to(timelineProgress, {
      height: '100%',
      ease: 'none',
      scrollTrigger: {
        trigger: '.process-timeline',
        start: 'top 70%',
        end: 'bottom 70%',
        scrub: 1,
        onUpdate: (self) => {
          const activeIndex = Math.floor(self.progress * processSteps.length);
          processSteps.forEach((step, i) => {
            if (i <= activeIndex) step.classList.add('active');
            else step.classList.remove('active');
          });
        }
      }
    });
  }

  processSteps.forEach((step, i) => {
    const isEven = i % 2 === 0;
    gsap.from(step, {
      x: isEven ? -60 : 60, opacity: 0, duration: 1, ease: 'expo.out',
      scrollTrigger: { trigger: step, start: 'top 80%', toggleActions: 'play none none reverse' }
    });
  });

  // ============================================
  // 15. COUNT-UP ANIMATION
  // ============================================
  function countUp(el) {
    const target = parseFloat(el.dataset.target);
    const prefix = el.dataset.prefix || '';
    const suffix = el.dataset.suffix || '';
    const decimals = parseInt(el.dataset.decimals) || 0;
    const duration = 2000;
    const startTime = performance.now();

    function update(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      const current = target * eased;
      el.textContent = prefix + current.toFixed(decimals) + suffix;
      if (progress < 1) requestAnimationFrame(update);
    }
    requestAnimationFrame(update);
  }

  const countObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counters = entry.target.querySelectorAll('.count-up');
        counters.forEach((c, i) => {
          setTimeout(() => countUp(c), i * 150);
        });
        countObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.4 });

  document.querySelectorAll('.stats-grid, .case-stats-row').forEach(grid => {
    countObserver.observe(grid);
  });

  // ============================================
  // 16. CASE STUDY PARALLAX
  // ============================================
  const caseImg = document.querySelector('.case-study-image img');
  if (caseImg) {
    gsap.fromTo(caseImg, { y: '-10%' }, {
      y: '10%', ease: 'none',
      scrollTrigger: {
        trigger: '.case-study-section',
        start: 'top bottom',
        end: 'bottom top',
        scrub: 1
      }
    });
  }

  gsap.from('.case-study-content > *', {
    y: 40, opacity: 0, duration: 0.9, ease: 'expo.out', stagger: 0.1,
    scrollTrigger: { trigger: '.case-study-content', start: 'top 75%', toggleActions: 'play none none reverse' }
  });

  // ============================================
  // 17. TESTIMONIAL 3D PERSPECTIVE
  // ============================================
  const testimonialCard = document.getElementById('testimonialCard');
  if (testimonialCard && !isTouchDevice) {
    testimonialCard.addEventListener('mousemove', (e) => {
      const rect = testimonialCard.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width - 0.5;
      const y = (e.clientY - rect.top) / rect.height - 0.5;
      testimonialCard.style.transform = `rotateY(${x * 6}deg) rotateX(${-y * 6}deg)`;
    });
    testimonialCard.addEventListener('mouseleave', () => {
      testimonialCard.style.transform = 'rotateY(0) rotateX(0)';
    });
  }

  gsap.from('.testimonial-card', {
    y: 60, opacity: 0, duration: 1.2, ease: 'expo.out',
    scrollTrigger: { trigger: '.testimonial-section', start: 'top 75%', toggleActions: 'play none none reverse' }
  });

  // ============================================
  // 18. CTA PARTICLES
  // ============================================
  const particlesContainer = document.getElementById('particles');
  if (particlesContainer) {
    for (let i = 0; i < 30; i++) {
      const p = document.createElement('div');
      p.className = 'particle';
      const size = Math.random() * 3 + 1;
      p.style.width = size + 'px';
      p.style.height = size + 'px';
      p.style.left = Math.random() * 100 + '%';
      p.style.animationDuration = (Math.random() * 10 + 10) + 's';
      p.style.animationDelay = (Math.random() * 10) + 's';
      p.style.opacity = Math.random() * 0.5 + 0.2;
      particlesContainer.appendChild(p);
    }
  }

  gsap.from('.cta-headline', {
    y: 50, opacity: 0, duration: 1, ease: 'expo.out',
    scrollTrigger: { trigger: '.cta-section', start: 'top 70%', toggleActions: 'play none none reverse' }
  });
  gsap.from('.cta-subheadline', {
    y: 30, opacity: 0, duration: 0.8, ease: 'expo.out', delay: 0.2,
    scrollTrigger: { trigger: '.cta-section', start: 'top 70%', toggleActions: 'play none none reverse' }
  });
  gsap.from('.btn-cta', {
    y: 30, opacity: 0, duration: 0.8, ease: 'expo.out', delay: 0.4,
    scrollTrigger: { trigger: '.cta-section', start: 'top 70%', toggleActions: 'play none none reverse' }
  });

  // ============================================
  // 19. FAQ ACCORDION
  // ============================================
  document.querySelectorAll('.faq-item').forEach(item => {
    const question = item.querySelector('.faq-question');
    question.addEventListener('click', () => {
      const isActive = item.classList.contains('active');
      document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));
      if (!isActive) item.classList.add('active');
    });
  });

  gsap.from('.faq-item', {
    y: 30, opacity: 0, duration: 0.7, ease: 'expo.out', stagger: 0.08,
    scrollTrigger: { trigger: '.faq-accordion', start: 'top 80%', toggleActions: 'play none none reverse' }
  });

  // ============================================
  // 20. STATS BACKGROUND WIREFRAME CUBES
  // ============================================
  const statsCanvasEl = document.getElementById('statsCanvas');
  if (statsCanvasEl && !isTouchDevice && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    try {
      const sScene = new THREE.Scene();
      const sCamera = new THREE.PerspectiveCamera(75, statsCanvasEl.offsetWidth / statsCanvasEl.offsetHeight, 0.1, 100);
      sCamera.position.z = 5;

      const sRenderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
      sRenderer.setSize(statsCanvasEl.offsetWidth, statsCanvasEl.offsetHeight);
      sRenderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
      statsCanvasEl.appendChild(sRenderer.domElement);

      const cubes = [];
      for (let i = 0; i < 5; i++) {
        const geometry = new THREE.BoxGeometry(0.8, 0.8, 0.8);
        const edges = new THREE.EdgesGeometry(geometry);
        const material = new THREE.LineBasicMaterial({ color: 0x27272a, transparent: true, opacity: 0.4 });
        const cube = new THREE.LineSegments(edges, material);
        cube.position.set(
          (Math.random() - 0.5) * 8,
          (Math.random() - 0.5) * 4,
          (Math.random() - 0.5) * 3
        );
        cube.userData = {
          rotSpeedX: (Math.random() - 0.5) * 0.01,
          rotSpeedY: (Math.random() - 0.5) * 0.01,
          floatSpeed: Math.random() * 0.002 + 0.001,
          floatOffset: Math.random() * Math.PI * 2
        };
        sScene.add(cube);
        cubes.push(cube);
      }

      let sTime = 0;
      function animateStats() {
        requestAnimationFrame(animateStats);
        sTime += 0.016;
        cubes.forEach(cube => {
          cube.rotation.x += cube.userData.rotSpeedX;
          cube.rotation.y += cube.userData.rotSpeedY;
          cube.position.y += Math.sin(sTime * 0.5 + cube.userData.floatOffset) * cube.userData.floatSpeed;
        });
        sRenderer.render(sScene, sCamera);
      }
      animateStats();

      window.addEventListener('resize', () => {
        sCamera.aspect = statsCanvasEl.offsetWidth / statsCanvasEl.offsetHeight;
        sCamera.updateProjectionMatrix();
        sRenderer.setSize(statsCanvasEl.offsetWidth, statsCanvasEl.offsetHeight);
      });
    } catch (e) {
      console.log('Stats WebGL fallback');
    }
  }

  // ============================================
  // 21. SPECTRUM HEADER REVEAL
  // ============================================
  gsap.from('.spectrum-header > *', {
    y: 40, opacity: 0, duration: 0.9, ease: 'expo.out', stagger: 0.1,
    scrollTrigger: { trigger: '.spectrum-header', start: 'top 85%', toggleActions: 'play none none reverse' }
  });

}); // End DOMContentLoaded
