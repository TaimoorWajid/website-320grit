<?php
/**
 * 320 GRIT — Our Story (Content Only)
 */

$values = [
  ['title' => 'Integrity', 'text' => 'We do what’s right, even when no one is watching.', 'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'],
  ['title' => 'Safety', 'text' => 'We protect our people, our partners, and our communities.', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8z"/>'],
  ['title' => 'Excellence', 'text' => 'We pursue the highest standards in everything we do.', 'icon' => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>'],
  ['title' => 'Collaboration', 'text' => 'We believe the best results come from strong relationships.', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zM23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>'],
  ['title' => 'Innovation', 'text' => 'We embrace smarter solutions to build a better tomorrow.', 'icon' => '<path d="M9 18h6M10 22h4M12 2a7 7 0 017 7c0 2.38-1.19 4.47-3 5.74V17H8v-2.26C6.19 13.47 5 11.38 5 9a7 7 0 017-7z"/>'],
];

$milestones = [
  ['year' => '2008', 'title' => 'Founded', 'text' => '320 GRIT was established with a vision to raise the standard in construction.'],
  ['year' => '2012', 'title' => 'First Major Project', 'text' => 'Delivered our first large-scale project, earning our clients’ confidence.'],
  ['year' => '2016', 'title' => 'Expansion', 'text' => 'Expanded our team and services to meet growing demand across markets.'],
  ['year' => '2020', 'title' => 'National Reach', 'text' => 'Strengthened our presence nationwide with key projects in multiple industries.'],
  ['year' => '2024', 'title' => 'Continuing the Journey', 'text' => 'Focused on innovation, sustainability, and long-term partnerships for the future.'],
];
?>

<!-- ============================================================
     SECTION 01 — HERO
     ============================================================ -->
<section class="hc-hero rr-hero" id="story-hero">
  <div class="hc-hero-bg" aria-hidden="true">
    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1920&q=85" alt="" width="1920" height="1080" fetchpriority="high">
  </div>
  <div class="hc-hero-overlay rr-hero-overlay" aria-hidden="true"></div>
  <div class="hc-container">
    <div class="hc-hero-content hc-reveal">
      <div class="hc-hero-label"><span class="hc-line"></span><span class="hc-label">Our Story</span></div>
      <h1 class="hc-display-xl">Built on Experience.<br><span class="hc-orange">Driven by Purpose.</span></h1>
      <p class="rr-hero-desc" style="max-width:540px">
        320 GRIT was founded on the belief that great construction is more than building structures—it’s about building trust, relationships, and a better future for the communities we serve.
      </p>
    </div>
  </div>
</section>

<!-- ============================================================
     SECTION 02 — HOW IT BEGAN
     ============================================================ -->
<section class="hc-section" style="background:var(--hc-dark)" id="story-began">
  <div class="hc-container">
    <div class="ab-split">
      <div class="hc-reveal">
        <span class="hc-label">How It All Began</span>
        <h2 class="hc-display-md" style="margin-top:0.75rem">From the Ground Up</h2>
        <p class="hc-body-lg" style="margin-top:1.25rem">
          320 GRIT began with a simple idea—raise the standard. We saw an opportunity to approach construction differently through better planning, transparent communication, and an unrelenting focus on safety and quality.
        </p>
        <p class="hc-body-md" style="margin-top:1rem">
          What started as a small team with big values has grown into a trusted construction partner across the United States, delivering complex projects with precision and integrity.
        </p>
        <a href="#story-milestones" class="hc-btn hc-btn-outline" style="margin-top:1.75rem">Our Journey <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <div class="ab-split-img hc-reveal hc-delay-2">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=900&q=80" alt="Construction team at sunrise" width="700" height="480" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SECTION 03 — VALUES
     ============================================================ -->
<section class="hc-section" style="background:var(--hc-black)" id="story-values">
  <div class="hc-container">
    <div class="hc-section-header hc-center hc-reveal">
      <h2 class="hc-display-md">Our Values. Our Foundation.</h2>
    </div>
    <div class="ab-value-grid" style="grid-template-columns:repeat(5,1fr)">
      <?php foreach ($values as $i => $v) : ?>
      <div class="ab-value-card hc-reveal hc-delay-<?php echo min($i+1,4); ?>">
        <div class="ab-value-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $v['icon']; ?></svg></div>
        <h3><?php echo $v['title']; ?></h3>
        <p><?php echo $v['text']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================================
     SECTION 04 — MILESTONES
     ============================================================ -->
<section class="hc-section" style="background:var(--hc-dark)" id="story-milestones">
  <div class="hc-container">
    <div class="hc-reveal" style="max-width:480px;margin-bottom:1rem">
      <span class="hc-label">Key Milestones</span>
      <h2 class="hc-display-md" style="margin-top:0.75rem">A Track Record of Growth</h2>
      <p class="hc-body-md" style="margin-top:1rem">Over the years, we’ve taken on bigger challenges, expanded our capabilities, and built a legacy of results.</p>
      <a href="#contact" class="hc-btn hc-btn-outline" style="margin-top:1.5rem">View Projects <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
    <div class="ab-timeline hc-reveal hc-delay-2">
      <?php foreach ($milestones as $m) : ?>
      <div class="ab-timeline-item">
        <div class="ab-timeline-dot"></div>
        <div class="ab-timeline-year"><?php echo $m['year']; ?></div>
        <h4><?php echo $m['title']; ?></h4>
        <p><?php echo $m['text']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================================================
     SECTION 05 — PURPOSE
     ============================================================ -->
<section class="hc-section" style="background:var(--hc-black)" id="story-purpose">
  <div class="hc-container">
    <div class="ab-split">
      <div class="ab-split-img hc-reveal">
        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=900&q=80" alt="Modern building exterior at night" width="700" height="480" loading="lazy">
      </div>
      <div class="hc-reveal hc-delay-2">
        <span class="hc-label">Our Purpose</span>
        <h2 class="hc-display-md" style="margin-top:0.75rem">Building More Than Structures</h2>
        <p class="hc-body-lg" style="margin-top:1.25rem">
          We’re in the business of building more than buildings. We build lasting partnerships, stronger communities, and a legacy of trust that extends far beyond the last day on site.
        </p>
        <div class="ab-quote">
          <p>“At 320 GRIT, every project is an opportunity to make a lasting impact.”</p>
          <cite>— 320 GRIT Leadership Team</cite>
        </div>
      </div>
    </div>
  </div>
</section>
