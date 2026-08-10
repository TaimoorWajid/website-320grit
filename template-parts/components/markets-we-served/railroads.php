<?php
/**
 * 320 GRIT — Railroads Market Page (Content Only)
 * No header / footer — drop into WordPress
 * Reuses healthcare.css for shared styles
 * Loads railroads.css for page-specific styles
 */

/* ---------- DATA ARRAYS ---------- */

$overview_points = [
  [
    'title' => 'Complex Projects',
    'text'  => 'Experience delivering challenging rail and transit infrastructure.',
    'icon'  => '<path d="M4 15.5V8.5C4 7.67 4.67 7 5.5 7H18.5C19.33 7 20 7.67 20 8.5V15.5M4 15.5H20M4 15.5L2 19H22L20 15.5M8 7V4M16 7V4M9 11H15"/>'
  ],
  [
    'title' => 'Safety Driven',
    'text'  => 'Committed to protecting people, the public, and the environment.',
    'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'
  ],
  [
    'title' => 'Collaborative Approach',
    'text'  => 'Strong partnerships and clear communication every step of the way.',
    'icon'  => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>'
  ],
  [
    'title' => 'Built to Last',
    'text'  => 'Quality craftsmanship and building for long-term performance.',
    'icon'  => '<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>'
  ],
];

$capabilities = [
  [
    'title' => 'Track Construction & Rehabilitation',
    'text'  => 'New track installation, track upgrades, and rehabilitation.',
    'icon'  => '<path d="M4 15.5V8.5C4 7.67 4.67 7 5.5 7H18.5C19.33 7 20 7.67 20 8.5V15.5M4 15.5H20M4 15.5L2 19H22L20 15.5M8 7V4M16 7V4M9 11H15"/>'
  ],
  [
    'title' => 'Bridge & Structure Work',
    'text'  => 'Rail bridges, retaining walls, culverts, and structural repairs.',
    'icon'  => '<path d="M3 21h18M5 21V10l7-5 7 5v11M9 21v-6h6v6"/>'
  ],
  [
    'title' => 'Turnouts & Crossing Systems',
    'text'  => 'Turnouts, crossings, signaling foundations, and trackwork.',
    'icon'  => '<circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>'
  ],
  [
    'title' => 'Yard & Terminal Development',
    'text'  => 'Rail yards, terminals, and intermodal facilities.',
    'icon'  => '<path d="M3 21h18M5 21V7l7-4 7 4v14M9 10h6M12 7v6"/>'
  ],
  [
    'title' => 'Electrification Support',
    'text'  => 'Overhead systems, foundations, and electrical infrastructure.',
    'icon'  => '<path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>'
  ],
  [
    'title' => 'Maintenance & System Improvements',
    'text'  => 'Ongoing maintenance, inspections, and infrastructure upgrades.',
    'icon'  => '<path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/>'
  ],
];

$project_types = [
  [
    'title' => 'Mainline Rail Construction',
    'text'  => 'New mainline construction and capacity expansions.',
    'icon'  => '<path d="M4 15.5V8.5C4 7.67 4.67 7 5.5 7H18.5C19.33 7 20 7.67 20 8.5V15.5M4 15.5H20M4 15.5L2 19H22L20 15.5M8 7V4M16 7V4M9 11H15"/>'
  ],
  [
    'title' => 'Commuter & Passenger Rail',
    'text'  => 'Stations, platforms, trackwork, and associated facilities.',
    'icon'  => '<path d="M4 15.5V8.5C4 7.67 4.67 7 5.5 7H18.5C19.33 7 20 7.67 20 8.5V15.5M4 15.5H20M4 15.5L2 19H22L20 15.5M8 11h8"/>'
  ],
  [
    'title' => 'Freight & Intermodal Facilities',
    'text'  => 'Yards, sidings, containers, and logistics infrastructure.',
    'icon'  => '<path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><path d="M3.27 6.96L12 12.01l8.73-5.05M12 22.08V12"/>'
  ],
  [
    'title' => 'Industrial Rail Solutions',
    'text'  => 'Spur tracks, plant rail systems, and material handling.',
    'icon'  => '<path d="M3 21h18M5 21V7l7-4 7 4v14M9 10h6M12 7v6"/>'
  ],
  [
    'title' => 'Safety & System Upgrades',
    'text'  => 'Track improvements, crossings, and safety enhancements.',
    'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'
  ],
];

$approach_steps = [
  [
    'num'   => '1',
    'title' => 'Understand',
    'text'  => 'We learn your goals, challenges, and operational requirements.',
    'icon'  => '<circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>'
  ],
  [
    'num'   => '2',
    'title' => 'Plan',
    'text'  => 'We develop a clear plan focused on safety, efficiency, and constructability.',
    'icon'  => '<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/>'
  ],
  [
    'num'   => '3',
    'title' => 'Execute',
    'text'  => 'Our experienced teams deliver with precision, safety, and accountability.',
    'icon'  => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>'
  ],
  [
    'num'   => '4',
    'title' => 'Ensure Quality',
    'text'  => 'Rigorous inspections and testing to meet the highest industry standards.',
    'icon'  => '<path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>'
  ],
  [
    'num'   => '5',
    'title' => 'Deliver Value',
    'text'  => 'Reliable infrastructure that performs today and for years to come.',
    'icon'  => '<path d="M18 20V10M12 20V4M6 20v-6"/>'
  ],
];
?>

<!-- ============================================================
     SECTION 01 — HERO
     ============================================================ -->
<section class="hc-hero rr-hero" id="rr-hero">
  <div class="hc-hero-bg" aria-hidden="true">
    <img src="https://images.unsplash.com/photo-1474487548417-781cb71495f3?w=1920&q=85" alt="" width="1920" height="1080" fetchpriority="high">
  </div>
  <div class="hc-hero-overlay rr-hero-overlay" aria-hidden="true"></div>

  <div class="hc-container">
    <div class="hc-hero-content hc-reveal">
      <div class="hc-hero-label">
        <span class="hc-line"></span>
        <span class="hc-label">Markets We Serve</span>
      </div>

      <h1 class="hc-display-xl">
        Railroads
      </h1>

      <p class="hc-hero-sub" style="max-width:520px">
        Building the critical infrastructure that keeps people and industries moving forward.
      </p>

      <p class="rr-hero-desc">
        From new rail construction and expansions to complex trackwork and system improvements, 320 Grit delivers with safety, precision, and a relentless focus on performance.
      </p>

      <div class="hc-hero-actions">
        <a href="#rr-cta" class="hc-btn hc-btn-primary">
          Let’s Build What Moves
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 02 — OVERVIEW
     ============================================================ -->
<section class="hc-section rr-overview" id="rr-overview">
  <div class="hc-container">
    <div class="rr-overview-grid">
      <!-- Left content -->
      <div class="rr-overview-text hc-reveal">
        <span class="hc-label">Overview</span>
        <h2 class="hc-display-md" style="margin-top:0.75rem;color:#111">
          Infrastructure That Connects Communities and Powers Progress.
        </h2>
        <p class="rr-overview-body">
          Rail is one of the most efficient, sustainable, and reliable ways to move people and goods. We partner with rail owners, agencies, and private clients to deliver projects that improve safety, increase capacity, and support long-term growth.
        </p>
      </div>

      <!-- Right image + points panel -->
      <div class="rr-overview-visual hc-reveal hc-delay-2">
        <div class="rr-overview-img">
          <img src="https://images.unsplash.com/photo-1581094271901-8022df4466f9?w=900&q=80" alt="Rail construction crew on tracks" width="700" height="480" loading="lazy">
        </div>

        <div class="rr-overview-points">
          <?php foreach ($overview_points as $point) : ?>
          <div class="rr-point">
            <div class="rr-point-icon" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $point['icon']; ?></svg>
            </div>
            <div>
              <h4><?php echo $point['title']; ?></h4>
              <p><?php echo $point['text']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 03 — CAPABILITIES
     ============================================================ -->
<section class="hc-section rr-capabilities" id="rr-capabilities">
  <div class="hc-container">
    <div class="hc-section-header hc-center hc-reveal">
      <h2 class="hc-display-md">Our Railroad Construction Capabilities</h2>
    </div>

    <div class="rr-cap-grid">
      <?php foreach ($capabilities as $i => $cap) : ?>
      <div class="rr-cap-card hc-reveal hc-delay-<?php echo min($i + 1, 4); ?>">
        <div class="rr-cap-icon" aria-hidden="true">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><?php echo $cap['icon']; ?></svg>
        </div>
        <h3><?php echo $cap['title']; ?></h3>
        <p><?php echo $cap['text']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 04 — PROJECT TYPES
     ============================================================ -->
<section class="hc-section rr-projects" id="rr-projects">
  <div class="hc-container">
    <div class="rr-projects-grid">
      <div class="rr-projects-img hc-reveal">
        <img src="https://images.unsplash.com/photo-1474487548417-781cb71495f3?w=900&q=80" alt="Passenger train on curved track at sunset" width="700" height="520" loading="lazy">
      </div>

      <div class="rr-projects-list hc-reveal hc-delay-2">
        <h2 class="hc-display-md" style="margin-bottom:2rem">Types of Rail Projects We Deliver</h2>

        <?php foreach ($project_types as $type) : ?>
        <div class="rr-project-item">
          <div class="rr-project-icon" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $type['icon']; ?></svg>
          </div>
          <div>
            <h3><?php echo $type['title']; ?></h3>
            <p><?php echo $type['text']; ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 05 — APPROACH
     ============================================================ -->
<section class="hc-section rr-approach" id="rr-approach">
  <div class="hc-container">
    <div class="hc-section-header hc-center hc-reveal">
      <span class="hc-label">Our Approach</span>
      <h2 class="hc-display-md">How We Deliver</h2>
    </div>

    <div class="rr-approach-steps hc-reveal">
      <?php foreach ($approach_steps as $i => $step) : ?>
      <div class="rr-step">
        <div class="rr-step-icon" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $step['icon']; ?></svg>
        </div>
        <div class="rr-step-num"><?php echo $step['num']; ?>. <?php echo $step['title']; ?></div>
        <p><?php echo $step['text']; ?></p>
        <?php if ($i < count($approach_steps) - 1) : ?>
        <div class="rr-step-arrow" aria-hidden="true">→</div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 06 — PARTNER
     ============================================================ -->
<section class="hc-section rr-partner" id="rr-partner">
  <div class="hc-container">
    <div class="rr-partner-grid">
      <div class="rr-partner-text hc-reveal">
        <span class="hc-label">A Partner You Can Count On</span>
        <h2 class="hc-display-md" style="margin-top:0.75rem;color:#111">
          Experience. Accountability.<br>Infrastructure That Lasts.
        </h2>
        <p class="rr-partner-body">
          320 Grit brings deep construction expertise, strong partnerships, and a commitment to delivering rail projects that keep the world moving forward.
        </p>
      </div>

      <div class="rr-partner-img hc-reveal hc-delay-2">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=900&q=80" alt="Rail construction site with workers and crane" width="700" height="480" loading="lazy">
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     SECTION 07 — FINAL CTA
     ============================================================ -->
<section class="rr-final-cta" id="rr-cta">
  <div class="hc-container">
    <div class="rr-cta-inner hc-reveal">
      <h2 class="hc-display-lg">
        Let’s Build What <span class="hc-orange">Moves</span> Tomorrow.
      </h2>
      <p>Partner with 320 Grit for your next railroad project.</p>
      <a href="#contact" class="hc-btn hc-btn-primary">
        Start a Project
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
    </div>
  </div>
</section>
