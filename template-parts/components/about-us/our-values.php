<?php
/**
 * 320 GRIT — Our Values (Content Only)
 */

$core_values = [
  ['title' => 'Safety', 'text' => 'We prioritize the safety of our people, partners, and communities in everything we do.', 'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'],
  ['title' => 'Integrity', 'text' => 'We do what’s right, even when no one is watching. Honesty and transparency, always.', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8z"/>'],
  ['title' => 'Quality', 'text' => 'We pursue excellence in every detail and deliver the highest standards on every project.', 'icon' => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>'],
  ['title' => 'Innovation', 'text' => 'We embrace smarter solutions and forward thinking to build better, stronger outcomes.', 'icon' => '<path d="M9 18h6M10 22h4M12 2a7 7 0 017 7c0 2.38-1.19 4.47-3 5.74V17H8v-2.26C6.19 13.47 5 11.38 5 9a7 7 0 017-7z"/>'],
  ['title' => 'Collaboration', 'text' => 'We believe the best results come from strong relationships and working together as one team.', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zM23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>'],
  ['title' => 'Commitment', 'text' => 'We are dedicated to our clients, our teams, and the communities we serve. We finish what we start.', 'icon' => '<path d="M3 21h18M5 21V7l7-4 7 4v14"/>'],
];

$actions = [
  ['title' => 'We Lead', 'text' => 'With integrity, accountability, and a relentless focus on doing what’s right.', 'img' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=500&q=80'],
  ['title' => 'We Build', 'text' => 'With precision, perseverance, and a commitment to excellence.', 'img' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=500&q=80'],
  ['title' => 'We Partner', 'text' => 'With respect, trust, and collaboration that lasts beyond the project.', 'img' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=500&q=80'],
  ['title' => 'We Impact', 'text' => 'Communities, industries, and lives through the work we do.', 'img' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=500&q=80'],
];
?>

<section class="hc-hero rr-hero" id="val-hero">
  <div class="hc-hero-bg" aria-hidden="true"><img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1920&q=85" alt="" width="1920" height="1080" fetchpriority="high"></div>
  <div class="hc-hero-overlay rr-hero-overlay" aria-hidden="true"></div>
  <div class="hc-container">
    <div class="hc-hero-content hc-reveal">
      <div class="hc-hero-label"><span class="hc-line"></span><span class="hc-label">Our Values</span></div>
      <h1 class="hc-display-xl">The Principles That<br><span class="hc-orange">Build Us.</span></h1>
      <p class="rr-hero-desc" style="max-width:520px">Our values shape the way we lead, build, and partner. They are the foundation of every relationship, decision, and structure we create.</p>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-dark)" id="val-core">
  <div class="hc-container">
    <div class="hc-section-header hc-center hc-reveal">
      <span class="hc-label">Our Core Values</span>
      <h2 class="hc-display-md">What We Stand For</h2>
    </div>
    <div class="ab-value-grid">
      <?php foreach ($core_values as $i => $v) : ?>
      <div class="ab-value-card hc-reveal hc-delay-<?php echo min($i+1,4); ?>">
        <div class="ab-value-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $v['icon']; ?></svg></div>
        <h3><?php echo $v['title']; ?></h3>
        <p><?php echo $v['text']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-black)" id="val-drive">
  <div class="hc-container">
    <div class="ab-split">
      <div class="hc-reveal">
        <span class="hc-label">What Drives Us</span>
        <h2 class="hc-display-md" style="margin-top:0.75rem">More Than Buildings,<br><span class="hc-orange">We Build Legacies.</span></h2>
        <p class="hc-body-lg" style="margin-top:1.25rem">We are driven by purpose, not just plans. Our values guide every decision, strengthen every partnership, and create a lasting impact for generations to come.</p>
        <a href="/our-story/" class="hc-btn hc-btn-outline" style="margin-top:1.75rem">Our Story <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <div class="ab-split-img hc-reveal hc-delay-2">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=900&q=80" alt="Team silhouette on site" width="700" height="480" loading="lazy">
      </div>
    </div>
  </div>
</section>

<section class="hc-section ab-light" id="val-action">
  <div class="hc-container">
    <div class="hc-reveal" style="max-width:480px;margin-bottom:2.5rem">
      <span class="hc-label">Our Commitment</span>
      <h2 class="hc-display-md" style="margin-top:0.75rem">Values in Action.<br><span class="hc-orange">Every Day.</span></h2>
      <p style="margin-top:1rem">Our values are more than words on a wall. They show up in the way we lead, the way we build, and the way we care. That’s the 320 Grit difference.</p>
      <a href="#contact" class="hc-btn hc-btn-primary" style="margin-top:1.5rem">Start a Project <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
    <div class="ab-project-grid" style="grid-template-columns:repeat(4,1fr)">
      <?php foreach ($actions as $a) : ?>
      <div class="ab-project-card hc-reveal" style="background:#fff;border-color:rgba(0,0,0,0.06)">
        <img src="<?php echo $a['img']; ?>" alt="<?php echo $a['title']; ?>" width="400" height="250" loading="lazy">
        <div class="ab-project-body">
          <h3 style="color:#111"><?php echo $a['title']; ?></h3>
          <p style="color:#555"><?php echo $a['text']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
