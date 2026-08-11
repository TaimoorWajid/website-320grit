<?php
/**
 * 320 GRIT — Quality (Content Only)
 */

$pillars = [
  ['title' => 'Do It Right', 'text' => 'We plan thoroughly, build carefully, and verify relentlessly to get it right the first time.', 'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'],
  ['title' => 'Excellence in Execution', 'text' => 'Our experienced teams, proven processes, and attention to detail deliver exceptional workmanship.', 'icon' => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>'],
  ['title' => 'Quality Assurance', 'text' => 'Rigorous inspections, testing, and quality control ensure every element meets our exacting standards.', 'icon' => '<circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>'],
  ['title' => 'Continuous Improvement', 'text' => 'We learn from every project and invest in innovation to raise the bar on quality across everything we do.', 'icon' => '<path d="M18 20V10M12 20V4M6 20v-6"/>'],
  ['title' => 'Built on Trust', 'text' => 'We deliver what we promise and earn lasting trust through transparency, integrity, and results.', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zM23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>'],
];

$details = [
  ['title' => 'Precision in Every Detail', 'text' => 'We plan meticulously, manage proactively, and build with unmatched attention to detail to ensure every aspect of our work meets the highest standard.', 'img' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=600&q=80'],
  ['title' => 'Commitment to Excellence', 'text' => 'We partner with the best in the industry, use proven processes, and hold ourselves accountable to deliver outstanding quality on every project.', 'img' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&q=80'],
  ['title' => 'Continuous Improvement', 'text' => 'We are relentless in our pursuit of better—learning, evolving, and innovating to raise the bar and deliver even greater value for our clients.', 'img' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&q=80'],
];

$foundations = [
  ['title' => 'Quality People', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8z"/>'],
  ['title' => 'Quality Process', 'icon' => '<circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>'],
  ['title' => 'Quality Projects', 'icon' => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>'],
  ['title' => 'Quality Partnerships', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zM23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>'],
];
?>

<section class="hc-hero rr-hero" id="qual-hero">
  <div class="hc-hero-bg" aria-hidden="true"><img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1920&q=85" alt="" width="1920" height="1080" fetchpriority="high"></div>
  <div class="hc-hero-overlay rr-hero-overlay" aria-hidden="true"></div>
  <div class="hc-container">
    <div class="hc-hero-content hc-reveal">
      <div class="hc-hero-label"><span class="hc-line"></span><span class="hc-label">Quality</span></div>
      <h1 class="hc-display-xl">Built to the Highest Standard.<br><span class="hc-orange">Every Time.</span></h1>
      <p class="rr-hero-desc" style="max-width:540px">Quality is more than a goal—it’s how we build. From preconstruction to project closeout, we hold ourselves to the highest standards to deliver exceptional results that stand the test of time.</p>
      <a href="#qual-commit" class="hc-btn hc-btn-outline">Our Approach to Quality <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-dark)" id="qual-commit">
  <div class="hc-container">
    <div class="hc-section-header hc-center hc-reveal">
      <span class="hc-label">Our Commitment to Quality</span>
    </div>
    <div class="ab-value-grid" style="grid-template-columns:repeat(5,1fr)">
      <?php foreach ($pillars as $i => $p) : ?>
      <div class="ab-value-card hc-reveal hc-delay-<?php echo min($i+1,4); ?>">
        <div class="ab-value-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $p['icon']; ?></svg></div>
        <h3><?php echo $p['title']; ?></h3>
        <p><?php echo $p['text']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="hc-section ab-light" id="qual-details">
  <div class="hc-container">
    <div class="ab-project-grid hc-reveal">
      <?php foreach ($details as $d) : ?>
      <div class="ab-project-card" style="background:#fff;border-color:rgba(0,0,0,0.06)">
        <img src="<?php echo $d['img']; ?>" alt="<?php echo $d['title']; ?>" width="400" height="250" loading="lazy">
        <div class="ab-project-body">
          <h3 style="color:#111"><?php echo $d['title']; ?></h3>
          <p style="color:#555"><?php echo $d['text']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-black)" id="qual-quote">
  <div class="hc-container" style="text-align:center">
    <div class="hc-reveal" style="max-width:640px;margin-inline:auto">
      <p style="font-size:1.35rem;font-style:italic;color:var(--hc-gray-300);line-height:1.6">“Quality is never an accident. It is always the result of intelligent effort.”</p>
      <cite style="display:block;margin-top:1rem;font-size:0.9rem;color:var(--hc-text-muted);font-style:normal">— John Ruskin</cite>
    </div>
    <div class="ab-value-grid" style="grid-template-columns:repeat(4,1fr);margin-top:3rem;max-width:800px;margin-inline:auto">
      <?php foreach ($foundations as $f) : ?>
      <div class="ab-value-card hc-reveal">
        <div class="ab-value-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $f['icon']; ?></svg></div>
        <h3><?php echo $f['title']; ?></h3>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
