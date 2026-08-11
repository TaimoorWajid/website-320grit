<?php
/**
 * 320 GRIT — Community (Content Only)
 */

$pillars = [
  ['title' => 'Investing Locally', 'text' => 'Supporting local businesses, organizations, and initiatives.', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zM23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>'],
  ['title' => 'Volunteerism', 'text' => 'Our team gives time and talent to make a difference.', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8z"/>'],
  ['title' => 'Building Opportunities', 'text' => 'Creating jobs, careers, and pathways for the future.', 'icon' => '<path d="M2 20h20M5 20V10l7-5 7 5v10"/>'],
  ['title' => 'Stronger Together', 'text' => 'Partnering with communities to build a better tomorrow.', 'icon' => '<path d="M12 2.69l5.66 5.66a8 8 0 11-11.31 0z"/>'],
];
?>

<section class="hc-hero rr-hero" id="com-hero">
  <div class="hc-hero-bg" aria-hidden="true"><img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1920&q=85" alt="" width="1920" height="1080" fetchpriority="high"></div>
  <div class="hc-hero-overlay rr-hero-overlay" aria-hidden="true"></div>
  <div class="hc-container">
    <div class="hc-hero-content hc-reveal">
      <div class="hc-hero-label"><span class="hc-line"></span><span class="hc-label">Community</span></div>
      <h1 class="hc-display-xl">Building More<br><span class="hc-orange">Than Structures.</span></h1>
      <p class="rr-hero-desc" style="max-width:520px">We are proud to support and invest in the communities where we live and work. Together, we build stronger, healthier, and more vibrant places for all.</p>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-dark)" id="com-pillars">
  <div class="hc-container">
    <div class="ab-value-grid" style="grid-template-columns:repeat(4,1fr)">
      <?php foreach ($pillars as $i => $p) : ?>
      <div class="ab-value-card hc-reveal hc-delay-<?php echo $i+1; ?>">
        <div class="ab-value-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $p['icon']; ?></svg></div>
        <h3><?php echo $p['title']; ?></h3>
        <p><?php echo $p['text']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-black)" id="com-cta">
  <div class="hc-container">
    <div class="ab-split">
      <div class="ab-split-img hc-reveal">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=900&q=80" alt="Team volunteering" width="700" height="480" loading="lazy">
      </div>
      <div class="hc-reveal hc-delay-2">
        <h2 class="hc-display-md">Strong Communities<br><span class="hc-orange">Build a Better Future.</span></h2>
        <p class="hc-body-lg" style="margin-top:1.25rem">When we invest in the places we build, everyone wins. From local hiring and supplier partnerships to community programs and volunteer initiatives, we are committed to leaving every community stronger than we found it.</p>
        <a href="#contact" class="hc-btn hc-btn-primary" style="margin-top:1.75rem">Partner With Us <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
    </div>
  </div>
</section>
