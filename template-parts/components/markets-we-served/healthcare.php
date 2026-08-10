<?php
/**
 * 320 GRIT — Healthcare Landing Page (Content Only)
 * No header / footer — designed to drop into WordPress
 */

/* ---------- DATA ARRAYS ---------- */

$diff_points = [
  [
    'num'   => '01',
    'title' => 'Continuity',
    'text'  => 'Facilities often remain operational. Construction must adapt without disrupting care.',
    'icon'  => '<path d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6"/>'
  ],
  [
    'num'   => '02',
    'title' => 'Coordination',
    'text'  => 'Multiple systems, trades and stakeholders must work together with precision.',
    'icon'  => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>'
  ],
  [
    'num'   => '03',
    'title' => 'Control',
    'text'  => 'Schedule, quality, safety and documentation require disciplined management.',
    'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'
  ],
  [
    'num'   => '04',
    'title' => 'Patient Experience',
    'text'  => 'Environments are built with the people who use them at the center of every decision.',
    'icon'  => '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2M12 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>'
  ],
];

$layers = [
  'Structure',
  'MEP Systems',
  'Clinical Spaces',
  'Patient Areas',
  'Circulation',
  'Building Systems',
];

$environments = [
  [
    'key'   => 'hospitals',
    'title' => 'Hospitals',
    'full'  => '01 Hospitals',
    'desc'  => 'Complex environments requiring disciplined coordination and careful construction planning.',
    'img'   => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=900&q=80',
    'icon'  => '<path d="M3 21h18M5 21V7l7-4 7 4v14M9 10h6M12 7v6"/>'
  ],
  [
    'key'   => 'medical',
    'title' => 'Medical Centers',
    'full'  => '02 Medical Centers',
    'desc'  => 'Multi-specialty facilities built for efficiency, patient flow, and clinical excellence.',
    'img'   => 'https://images.unsplash.com/photo-1586773860418-d37222d8fce3?w=900&q=80',
    'icon'  => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6v6H9z"/>'
  ],
  [
    'key'   => 'outpatient',
    'title' => 'Outpatient Facilities',
    'full'  => '03 Outpatient Facilities',
    'desc'  => 'Patient-centered spaces designed for high throughput and comfort.',
    'img'   => 'https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=900&q=80',
    'icon'  => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>'
  ],
  [
    'key'   => 'clinics',
    'title' => 'Clinics',
    'full'  => '04 Clinics',
    'desc'  => 'Focused clinical environments optimized for specific care pathways.',
    'img'   => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?w=900&q=80',
    'icon'  => '<path d="M12 2v20M2 12h20"/>'
  ],
  [
    'key'   => 'specialty',
    'title' => 'Specialty Care',
    'full'  => '05 Specialty Care',
    'desc'  => 'Advanced care environments with specialized systems and workflows.',
    'img'   => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=900&q=80',
    'icon'  => '<circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/>'
  ],
  [
    'key'   => 'office',
    'title' => 'Medical Office Buildings',
    'full'  => '06 Medical Office Buildings',
    'desc'  => 'Professional medical office spaces designed for providers and patients.',
    'img'   => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=900&q=80',
    'icon'  => '<path d="M3 21h18M5 21V5a2 2 0 012-2h10a2 2 0 012 2v16"/>'
  ],
  [
    'key'   => 'ambulatory',
    'title' => 'Ambulatory Facilities',
    'full'  => '07 Ambulatory Facilities',
    'desc'  => 'Same-day care environments built for speed, safety, and recovery.',
    'img'   => 'https://images.unsplash.com/photo-1551076805-e1869033fa41?w=900&q=80',
    'icon'  => '<path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8zM6 1v3M10 1v3M14 1v3"/>'
  ],
  [
    'key'   => 'renovation',
    'title' => 'Renovation & Expansion',
    'full'  => '08 Renovation & Expansion',
    'desc'  => 'Phased work in active facilities that protects operations while building the future.',
    'img'   => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=900&q=80',
    'icon'  => '<path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/>'
  ],
];

$process_steps = [
  ['num' => '01', 'title' => 'Understand', 'text' => 'Listen, learn and define operational and project requirements.'],
  ['num' => '02', 'title' => 'Plan',       'text' => 'Develop a strategy that aligns design, logistics and execution.'],
  ['num' => '03', 'title' => 'Coordinate', 'text' => 'Bring teams together with clarity and accountability.'],
  ['num' => '04', 'title' => 'Execute',    'text' => 'Build with precision, maintaining safety and operational continuity.'],
  ['num' => '05', 'title' => 'Deliver',    'text' => 'Close out with quality, documentation and confidence.'],
];

$ops_points = [
  'Occupied facility expertise',
  'Phasing & logistics planning',
  'Safety for patients, staff & visitors',
  'Clear communication',
];

$systems = [
  ['name' => 'Mechanical',  'icon' => '<path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/><circle cx="12" cy="12" r="4"/>'],
  ['name' => 'Electrical',  'icon' => '<path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>'],
  ['name' => 'Plumbing',    'icon' => '<path d="M12 2.69l5.66 5.66a8 8 0 11-11.31 0z"/>'],
  ['name' => 'Life Safety', 'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'],
  ['name' => 'Structural',  'icon' => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/>'],
  ['name' => 'Interiors',   'icon' => '<path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/>'],
];

$why_points = [
  [
    'title' => 'Owner-Focused',
    'text'  => 'We start with your goals, constraints and operational needs.',
    'icon'  => '<path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2M12 11a4 4 0 100-8 4 4 0 000 8z"/>'
  ],
  [
    'title' => 'Disciplined',
    'text'  => 'Complex construction requires disciplined planning and execution.',
    'icon'  => '<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>'
  ],
  [
    'title' => 'Transparent',
    'text'  => 'Clear communication keeps you informed and in control.',
    'icon'  => '<circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/>'
  ],
  [
    'title' => 'Adaptive',
    'text'  => 'Every healthcare environment is unique. We adapt to deliver what’s needed.',
    'icon'  => '<path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>'
  ],
];

$faqs = [
  [
    'q' => 'What types of healthcare construction does 320 Grit support?',
    'a' => 'We support hospitals, medical centers, outpatient and ambulatory facilities, clinics, specialty care environments, medical office buildings, and renovation & expansion projects in both new and occupied settings.'
  ],
  [
    'q' => 'What makes healthcare construction different?',
    'a' => 'Healthcare facilities have unique operational, regulatory, infection-control, and continuity requirements. Construction must often occur while the facility remains active, demanding specialized planning, phasing, and coordination.'
  ],
  [
    'q' => 'Can 320 Grit work around an operating healthcare facility?',
    'a' => 'Yes. Occupied-facility construction is a core strength. We develop detailed logistics and phasing plans that protect patient care, staff workflows, and life-safety systems throughout the project.'
  ],
  [
    'q' => 'How does 320 Grit approach renovation and expansion?',
    'a' => 'We begin with a deep understanding of current operations, then design a phased plan that isolates work zones, maintains critical systems, and keeps disruption to an absolute minimum.'
  ],
  [
    'q' => 'Can 320 Grit work with my existing design team?',
    'a' => 'Absolutely. We routinely collaborate with owners’ architects, engineers, and consultants. Our role is to bring construction expertise early and execute with precision.'
  ],
  [
    'q' => 'What markets does 320 Grit serve for healthcare construction?',
    'a' => 'We primarily serve healthcare clients across California and select Western markets, with the capability to support projects nationwide when required.'
  ],
];
?>

<!-- ============================================================
     SECTION 01 — HERO
     ============================================================ -->
<section class="hc-hero" id="hc-hero">
  <div class="hc-hero-bg" aria-hidden="true">
    <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?w=1920&q=85" alt="" width="1920" height="1080" fetchpriority="high">
  </div>
  <div class="hc-hero-overlay" aria-hidden="true"></div>

  <span class="hc-hero-side">Markets We Serve · Healthcare</span>

  <div class="hc-container">
    <div class="hc-hero-content hc-reveal">
      <div class="hc-hero-label">
        <span class="hc-line"></span>
        <span class="hc-label">Healthcare</span>
      </div>

      <h1 class="hc-display-xl">
        Healthcare<br>
        Building for<br>
        <span class="hc-orange">What Matters Most.</span>
      </h1>

      <p class="hc-hero-sub">
        Construction environments where precision, coordination and continuity matter.
      </p>

      <div class="hc-hero-actions">
        <a href="#hc-cta" class="hc-btn hc-btn-primary">
          Discuss Your Project
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="#hc-approach" class="hc-btn hc-btn-outline">Our Approach</a>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 02 — DISRUPTION
     ============================================================ -->
<section class="hc-section hc-disruption" id="hc-markets">
  <div class="hc-container">
    <div class="hc-disruption-grid">
      <div class="hc-disruption-text hc-reveal">
        <h2 class="hc-display-md">
          In Healthcare,<br>
          There’s No Room<br>
          <span class="hc-orange">for Disruption.</span>
        </h2>
        <p class="hc-body-lg">
          Every healthcare environment has unique operational, regulatory and logistical demands.
          Our approach begins by understanding those demands and building around them.
        </p>

        <div class="hc-flow-legend">
          <div class="hc-flow-item"><span class="hc-flow-dot patient"></span> Patient Flow</div>
          <div class="hc-flow-item"><span class="hc-flow-dot staff"></span> Staff Flow</div>
          <div class="hc-flow-item"><span class="hc-flow-dot material"></span> Material Flow</div>
          <div class="hc-flow-item"><span class="hc-flow-dot emergency"></span> Emergency Access</div>
          <div class="hc-flow-item"><span class="hc-flow-dot construction"></span> Construction Access</div>
        </div>
      </div>

      <div class="hc-blueprint hc-reveal hc-delay-2">
        <svg viewBox="0 0 520 340" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <rect width="520" height="340" fill="#111"/>
          <rect x="40" y="40" width="440" height="260" stroke="#333" stroke-width="1.5" fill="#161616"/>
          <rect x="60" y="60" width="120" height="90" stroke="#2a2a2a" stroke-width="1" fill="#1a1a1a"/>
          <rect x="200" y="60" width="140" height="90" stroke="#2a2a2a" stroke-width="1" fill="#1a1a1a"/>
          <rect x="360" y="60" width="100" height="90" stroke="#2a2a2a" stroke-width="1" fill="#1a1a1a"/>
          <rect x="60" y="170" width="90" height="110" stroke="#2a2a2a" stroke-width="1" fill="#1a1a1a"/>
          <rect x="170" y="170" width="160" height="110" stroke="#2a2a2a" stroke-width="1" fill="#1a1a1a"/>
          <rect x="350" y="170" width="110" height="110" stroke="#2a2a2a" stroke-width="1" fill="#1a1a1a"/>
          <rect x="150" y="60" width="50" height="220" stroke="#2a2a2a" stroke-width="1" fill="#141414"/>
          <rect x="60" y="150" width="400" height="20" stroke="#2a2a2a" stroke-width="1" fill="#141414"/>
          <path d="M80 105 H140 M140 105 V160 H250 M250 160 V220" stroke="#FF5C00" stroke-width="2.5" stroke-linecap="round" opacity="0.9"/>
          <circle cx="80" cy="105" r="4" fill="#FF5C00"/>
          <circle cx="250" cy="220" r="4" fill="#FF5C00"/>
          <path d="M220 90 H320 M320 90 V140 H400" stroke="#00C2FF" stroke-width="2" stroke-linecap="round" opacity="0.85"/>
          <circle cx="220" cy="90" r="3.5" fill="#00C2FF"/>
          <circle cx="400" cy="140" r="3.5" fill="#00C2FF"/>
          <path d="M100 200 H160 M160 200 V240 H300" stroke="#7CFF6B" stroke-width="2" stroke-linecap="round" opacity="0.8"/>
          <circle cx="100" cy="200" r="3.5" fill="#7CFF6B"/>
          <path d="M380 100 V160 H430" stroke="#FF3B3B" stroke-width="2.5" stroke-linecap="round" opacity="0.9"/>
          <circle cx="430" cy="160" r="4" fill="#FF3B3B"/>
          <path d="M60 280 H480" stroke="#FFB800" stroke-width="2" stroke-dasharray="6 4" opacity="0.7"/>
        </svg>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 03 — WHAT MAKES HEALTHCARE CONSTRUCTION DIFFERENT
     ============================================================ -->
<section class="hc-section hc-different" id="hc-different">
  <div class="hc-container">
    <div class="hc-section-header hc-center hc-reveal">
      <span class="hc-label">The Difference</span>
      <h2 class="hc-display-md">What Makes Healthcare<br>Construction Different?</h2>
    </div>

    <div class="hc-feature-grid">
      <?php foreach ($diff_points as $i => $item) : ?>
      <article class="hc-feature-card hc-reveal hc-delay-<?php echo $i + 1; ?>">
        <div class="hc-icon-wrap" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $item['icon']; ?></svg>
        </div>
        <div class="hc-num"><?php echo $item['num']; ?></div>
        <h3><?php echo $item['title']; ?></h3>
        <p><?php echo $item['text']; ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 04 — BUILT WITH PRECISION
     ============================================================ -->
<section class="hc-section hc-precision" id="hc-services">
  <div class="hc-container">
    <div class="hc-precision-grid">
      <div class="hc-precision-text hc-reveal">
        <span class="hc-label">Integrated Delivery</span>
        <h2 class="hc-display-md" style="margin-top:0.75rem">
          Built with Precision.<br>
          <span class="hc-orange">Delivered with Care.</span>
        </h2>
        <p class="hc-body-lg">
          From structure to systems, every element is planned and coordinated to support the environments where care happens.
        </p>

        <ul class="hc-layer-list">
          <?php foreach ($layers as $layer) : ?>
          <li class="hc-layer-item"><span class="hc-dot"></span> <?php echo $layer; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="hc-building-visual hc-reveal hc-delay-2">
        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1000&q=80" alt="Layered healthcare facility" width="800" height="550" loading="lazy">
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 05 — HEALTHCARE ENVIRONMENTS
     ============================================================ -->
<section class="hc-section hc-environments" id="hc-environments">
  <div class="hc-container">
    <div class="hc-section-header hc-reveal">
      <span class="hc-label">Environments</span>
      <h2 class="hc-display-md">Healthcare Environments<br>We Build</h2>
    </div>

    <div class="hc-env-grid hc-reveal">
      <?php foreach ($environments as $i => $env) : ?>
      <button class="hc-env-card<?php echo $i === 0 ? ' active' : ''; ?>" data-env="<?php echo $env['key']; ?>" type="button">
        <div class="hc-env-icon" aria-hidden="true">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><?php echo $env['icon']; ?></svg>
        </div>
        <h4><?php echo $env['title']; ?></h4>
      </button>
      <?php endforeach; ?>
    </div>

    <div class="hc-env-showcase hc-reveal hc-delay-2">
      <div class="hc-env-image-panel">
        <img src="<?php echo $environments[0]['img']; ?>" alt="Hospital interior" width="900" height="600" loading="lazy" id="hc-env-img">
        <div class="hc-env-caption">
          <h3 id="hc-env-title"><?php echo $environments[0]['full']; ?></h3>
          <p id="hc-env-desc"><?php echo $environments[0]['desc']; ?></p>
        </div>
      </div>

      <div>
        <p class="hc-body-lg" style="margin-bottom:1.5rem">
          We deliver the full spectrum of healthcare facilities — from acute-care hospitals to outpatient clinics and phased renovations in live environments.
        </p>
        <a href="#hc-cta" class="hc-btn hc-btn-ghost">
          Discuss a Facility Type
          <svg class="hc-arrow" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 06 — DELIVERY APPROACH
     ============================================================ -->
<section class="hc-section hc-approach" id="hc-approach">
  <div class="hc-container">
    <div class="hc-section-header hc-center hc-reveal">
      <span class="hc-label">Process</span>
      <h2 class="hc-display-md">Our Healthcare<br>Delivery Approach</h2>
      <p class="hc-body-lg" style="margin-top:1rem;max-width:560px;margin-inline:auto">
        A disciplined process that keeps your goals, operations and patients at the center.
      </p>
    </div>

    <div class="hc-process-steps hc-reveal">
      <?php foreach ($process_steps as $step) : ?>
      <div class="hc-process-step">
        <div class="hc-step-icon"><?php echo $step['num']; ?></div>
        <h4><?php echo $step['title']; ?></h4>
        <p><?php echo $step['text']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="hc-approach-layout" style="margin-top:4.5rem">
      <div class="hc-approach-visual hc-reveal">
        <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=800&q=80" alt="Construction team" width="700" height="525" loading="lazy">
      </div>
      <div class="hc-reveal hc-delay-2">
        <h3 class="hc-heading-lg" style="margin-bottom:1rem">Built Around Your Operations</h3>
        <p class="hc-body-md" style="margin-bottom:1.5rem">
          We plan construction to coexist with your mission — minimizing disruption and protecting what matters most.
        </p>
        <ul class="hc-layer-list">
          <?php foreach ($ops_points as $point) : ?>
          <li class="hc-layer-item"><span class="hc-dot"></span> <?php echo $point; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 07 — TRANSITION STAGES
     ============================================================ -->
<section class="hc-section hc-transition" id="hc-transition">
  <div class="hc-container">
    <div class="hc-section-header hc-reveal">
      <span class="hc-label">Phased Delivery</span>
      <h2 class="hc-display-md">
        Building Without Losing Sight<br>
        <span class="hc-orange">of the Environment.</span>
      </h2>
      <p class="hc-body-lg" style="margin-top:1rem;max-width:520px">
        Whether it’s a renovation or new construction on an active campus, we protect what matters while building what’s next.
      </p>
    </div>

    <div class="hc-transition-stages hc-reveal">
      <div class="hc-stage-card">
        <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=600&q=80" alt="Existing" width="400" height="250" loading="lazy">
        <div class="hc-stage-label">Existing</div>
      </div>
      <div class="hc-stage-arrow" aria-hidden="true">→</div>
      <div class="hc-stage-card">
        <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600&q=80" alt="Transition" width="400" height="250" loading="lazy">
        <div class="hc-stage-label">Transition</div>
      </div>
      <div class="hc-stage-arrow" aria-hidden="true">→</div>
      <div class="hc-stage-card active">
        <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=600&q=80" alt="Delivered" width="400" height="250" loading="lazy">
        <div class="hc-stage-label">Delivered</div>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 08 — SYSTEMS
     ============================================================ -->
<section class="hc-section hc-systems" id="hc-systems">
  <div class="hc-container">
    <div class="hc-section-header hc-center hc-reveal">
      <span class="hc-label">Integrated Systems</span>
      <h2 class="hc-display-md">Every System Has a Purpose.</h2>
      <p class="hc-body-lg" style="margin-top:1rem;max-width:520px;margin-inline:auto">
        Integrated planning across all building systems ensures performance, safety and comfort.
      </p>
    </div>

    <div class="hc-systems-row hc-reveal">
      <?php foreach ($systems as $sys) : ?>
      <div class="hc-system-pill">
        <div class="hc-sys-icon" aria-hidden="true">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><?php echo $sys['icon']; ?></svg>
        </div>
        <span><?php echo $sys['name']; ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 09 — WHY + FAQ
     ============================================================ -->
<section class="hc-section hc-why-faq" id="hc-about">
  <div class="hc-container">
    <div class="hc-why-faq-grid">
      <div>
        <div class="hc-section-header hc-reveal">
          <span class="hc-label">Partnership</span>
          <h2 class="hc-display-md">Why Partner with<br>320 Grit?</h2>
        </div>

        <div class="hc-why-grid">
          <?php foreach ($why_points as $i => $item) : ?>
          <div class="hc-why-card hc-reveal hc-delay-<?php echo $i + 1; ?>">
            <div class="hc-why-icon" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $item['icon']; ?></svg>
            </div>
            <h3><?php echo $item['title']; ?></h3>
            <p><?php echo $item['text']; ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div>
        <div class="hc-section-header hc-reveal">
          <span class="hc-label">Questions</span>
          <h2 class="hc-display-md">Frequently Asked<br>Questions</h2>
        </div>

        <div class="hc-faq-list hc-reveal hc-delay-2">
          <?php foreach ($faqs as $faq) : ?>
          <div class="hc-faq-item">
            <button class="hc-faq-question" type="button" aria-expanded="false">
              <?php echo $faq['q']; ?>
              <span class="hc-faq-icon" aria-hidden="true"></span>
            </button>
            <div class="hc-faq-answer">
              <div class="hc-faq-answer-inner"><?php echo $faq['a']; ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 10 — FINAL CTA
     ============================================================ -->
<section class="hc-final-cta" id="hc-cta">
  <div class="hc-final-cta-bg" aria-hidden="true">
    <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?w=1920&q=85" alt="" width="1920" height="800" loading="lazy">
  </div>
  <div class="hc-final-cta-overlay" aria-hidden="true"></div>

  <div class="hc-container">
    <div class="hc-final-cta-content hc-reveal">
      <h2 class="hc-display-lg">
        Let’s Build<br>
        <span class="hc-orange">What Matters Most.</span>
      </h2>
      <p>Let’s discuss how we can support your next healthcare project.</p>
      <a href="#contact" class="hc-btn hc-btn-primary">
        Start a Project
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
    </div>
  </div>
</section>