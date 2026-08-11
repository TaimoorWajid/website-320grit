<?php
/**
 * 320 GRIT — Awards & Recognition (Content Only)
 */

$awards = [
  ['title' => 'TOP 400', 'sub' => 'ENR Top 400 Contractors 2024', 'desc' => 'Recognized among the nation’s leading contractors.'],
  ['title' => 'SAFETY LEADER', 'sub' => 'AGC California Safety Excellence 2023', 'desc' => 'Honored for outstanding safety performance.'],
  ['title' => 'EXCELLENCE', 'sub' => 'ABC Excellence in Construction 2023', 'desc' => 'Awarded for project quality and craftsmanship.'],
  ['title' => 'CLIENT TRUST', 'sub' => 'Built on relationships. Proven by results.', 'desc' => 'Our greatest recognition is the trust of our clients.'],
];
?>

<section class="hc-hero rr-hero" id="awd-hero">
  <div class="hc-hero-bg" aria-hidden="true"><img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1920&q=85" alt="" width="1920" height="1080" fetchpriority="high"></div>
  <div class="hc-hero-overlay rr-hero-overlay" aria-hidden="true"></div>
  <div class="hc-container">
    <div class="hc-hero-content hc-reveal">
      <div class="hc-hero-label"><span class="hc-line"></span><span class="hc-label">Awards & Recognitions</span></div>
      <h1 class="hc-display-xl">Recognized for<br><span class="hc-orange">Excellence.</span></h1>
      <p class="rr-hero-desc" style="max-width:520px">Our commitment to safety, quality, and innovation has earned us industry recognition and the trust of our clients and partners.</p>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-dark)" id="awd-list">
  <div class="hc-container">
    <div class="ab-value-grid" style="grid-template-columns:repeat(4,1fr)">
      <?php foreach ($awards as $i => $a) : ?>
      <div class="ab-value-card hc-reveal hc-delay-<?php echo $i+1; ?>" style="text-align:left;padding:2rem 1.5rem;background:var(--hc-dark-3);border-radius:12px;border:1px solid rgba(255,255,255,0.06)">
        <div style="font-size:0.75rem;font-weight:700;letter-spacing:0.1em;color:var(--hc-orange);margin-bottom:0.5rem"><?php echo $a['title']; ?></div>
        <h3 style="font-size:1rem;margin-bottom:0.5rem"><?php echo $a['sub']; ?></h3>
        <p><?php echo $a['desc']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="rr-final-cta" id="awd-cta">
  <div class="hc-container">
    <div class="rr-cta-inner hc-reveal">
      <h2 class="hc-display-lg">Excellence Is Not a Destination.<br><span class="hc-orange">It’s How We Work.</span></h2>
      <p>Awards recognize the past. Our commitment is to the future—delivering safer, smarter, and higher-quality projects for every client we serve.</p>
      <a href="#contact" class="hc-btn hc-btn-primary">Start a Project <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>
