<?php
/**
 * 320 GRIT — Sustainability (Content Only)
 */

$commitment = [
  ['title' => 'Environmental Stewardship', 'text' => 'We minimize our impact on the environment through responsible resource use and waste reduction.', 'icon' => '<path d="M12 2.69l5.66 5.66a8 8 0 11-11.31 0z"/>'],
  ['title' => 'Social Responsibility', 'text' => 'We invest in our people, partners, and communities to create safe, healthy, and thriving places to live and work.', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8z"/>'],
  ['title' => 'Ethical Governance', 'text' => 'We operate with integrity, transparency, and accountability in everything we do.', 'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'],
  ['title' => 'Long-Term Value', 'text' => 'We build with durability and efficiency in mind to generate lasting value for generations to come.', 'icon' => '<path d="M18 20V10M12 20V4M6 20v-6"/>'],
];

$impact = [
  ['num' => '45%', 'label' => 'Average Waste Diversion from Landfills'],
  ['num' => '30%', 'label' => 'Reduction in Energy Use Across Projects'],
  ['num' => '25%', 'label' => 'Lower Water Use Through Efficient Systems'],
  ['num' => '100%', 'label' => 'Of New Projects Aligned with Our Sustainability Standards'],
  ['num' => 'ESG', 'label' => 'Integrated into Every Decision We Make'],
];

$how = [
  ['title' => 'Sustainable Design & Planning', 'text' => 'We collaborate early to optimize design for energy performance, material efficiency, and future adaptability.', 'icon' => '<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/>'],
  ['title' => 'Responsible Materials', 'text' => 'We prioritize low-impact, locally sourced, and recycled materials that reduce embodied carbon and support a circular economy.', 'icon' => '<path d="M12 2.69l5.66 5.66a8 8 0 11-11.31 0z"/>'],
  ['title' => 'Efficient Construction', 'text' => 'We use innovative techniques, prefabrication, and technology to minimize waste, reduce emissions, and improve jobsite efficiency.', 'icon' => '<path d="M2 20h20M5 20V10l7-5 7 5v10"/>'],
  ['title' => 'Healthy Environments', 'text' => 'We create safe, comfortable, and healthy spaces that promote well-being and productivity.', 'icon' => '<path d="M2 20h20M5 20V10l7-5 7 5v10"/>'],
];

$projects = [
  ['title' => 'EcoEdge Corporate Campus', 'loc' => 'Austin, TX', 'text' => 'LEED Gold Certified. High-performance building designed for efficiency, wellness, and long-term environmental impact.', 'img' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&q=80'],
  ['title' => 'Riverside Education Center', 'loc' => 'Portland, OR', 'text' => 'Net Zero Energy Ready. A future-focused learning environment built with sustainable materials and renewable energy.', 'img' => 'https://images.unsplash.com/photo-1562774053-701939374585?w=600&q=80'],
  ['title' => 'Greenway Medical Pavilion', 'loc' => 'Nashville, TN', 'text' => 'LEED Silver Certified. Designed to improve patient well-being while reducing energy and water consumption.', 'img' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=600&q=80'],
];
?>

<section class="hc-hero rr-hero" id="sus-hero">
  <div class="hc-hero-bg" aria-hidden="true"><img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1920&q=85" alt="" width="1920" height="1080" fetchpriority="high"></div>
  <div class="hc-hero-overlay rr-hero-overlay" aria-hidden="true"></div>
  <div class="hc-container">
    <div class="hc-hero-content hc-reveal">
      <div class="hc-hero-label"><span class="hc-line"></span><span class="hc-label">Sustainability</span></div>
      <h1 class="hc-display-xl">Building a Better Future.<br><span class="hc-orange">Together.</span></h1>
      <p class="rr-hero-desc" style="max-width:540px">At 320 Grit, sustainability is more than a goal—it’s a responsibility. We are committed to creating lasting value for our clients, our communities, and our planet through smarter building practices and sustainable solutions.</p>
      <a href="#sus-commit" class="hc-btn hc-btn-outline">Our Approach to Sustainability <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-dark)" id="sus-commit">
  <div class="hc-container">
    <div class="hc-reveal" style="max-width:560px;margin-bottom:2.5rem">
      <span class="hc-label">Our Commitment</span>
      <h2 class="hc-display-md" style="margin-top:0.75rem">Building Responsibly.<br>For Today and Tomorrow.</h2>
      <p class="hc-body-md" style="margin-top:1rem">We integrate sustainable thinking into every phase of a project—from planning and design to construction and operations. Our approach reduces environmental impact, enhances efficiency, and delivers long-term value.</p>
    </div>
    <div class="ab-value-grid" style="grid-template-columns:repeat(4,1fr)">
      <?php foreach ($commitment as $i => $c) : ?>
      <div class="ab-value-card hc-reveal hc-delay-<?php echo $i+1; ?>">
        <div class="ab-value-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $c['icon']; ?></svg></div>
        <h3><?php echo $c['title']; ?></h3>
        <p><?php echo $c['text']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-black)" id="sus-impact">
  <div class="hc-container">
    <div class="hc-reveal" style="margin-bottom:1.5rem">
      <span class="hc-label">Our Impact</span>
      <h2 class="hc-display-md" style="margin-top:0.5rem">By the Numbers</h2>
    </div>
    <div class="ab-impact hc-reveal hc-delay-2">
      <?php foreach ($impact as $i) : ?>
      <div class="ab-impact-item">
        <div class="ab-impact-num"><?php echo $i['num']; ?></div>
        <div class="ab-impact-label"><?php echo $i['label']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-dark)" id="sus-how">
  <div class="hc-container">
    <div class="ab-split">
      <div class="hc-reveal">
        <span class="hc-label">How We Build Sustainably</span>
        <h2 class="hc-display-md" style="margin-top:0.75rem">Smarter Solutions.<br>Measurable Impact.</h2>
        <div style="margin-top:2rem;display:flex;flex-direction:column;gap:1.5rem">
          <?php foreach ($how as $h) : ?>
          <div style="display:flex;gap:1rem;align-items:flex-start">
            <div class="ab-value-icon" style="flex-shrink:0;width:44px;height:44px"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $h['icon']; ?></svg></div>
            <div>
              <h3 style="font-size:1rem;color:var(--hc-white);margin-bottom:0.3rem"><?php echo $h['title']; ?></h3>
              <p style="font-size:0.875rem;color:var(--hc-text-muted);margin:0;line-height:1.55"><?php echo $h['text']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="ab-split-img hc-reveal hc-delay-2">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=900&q=80" alt="Workers overlooking city" width="700" height="480" loading="lazy">
      </div>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-black)" id="sus-projects">
  <div class="hc-container">
    <div class="hc-section-header hc-reveal">
      <span class="hc-label">Sustainable in Action</span>
      <h2 class="hc-display-md">Projects That Make a Difference</h2>
    </div>
    <div class="ab-project-grid hc-reveal">
      <?php foreach ($projects as $p) : ?>
      <div class="ab-project-card">
        <img src="<?php echo $p['img']; ?>" alt="<?php echo $p['title']; ?>" width="400" height="250" loading="lazy">
        <div class="ab-project-body">
          <h3><?php echo $p['title']; ?></h3>
          <div class="ab-loc"><?php echo $p['loc']; ?></div>
          <p><?php echo $p['text']; ?></p>
          <a href="#" class="hc-btn hc-btn-ghost" style="font-size:0.85rem">View Project <svg class="hc-arrow" width="14" height="14" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="rr-final-cta" id="sus-cta">
  <div class="hc-container">
    <div class="rr-cta-inner hc-reveal">
      <h2 class="hc-display-lg">Building More Than Structures—<br><span class="hc-orange">Building a Legacy.</span></h2>
      <p>We believe the buildings we create today should help solve tomorrow’s challenges. Through innovation, partnership, and a relentless commitment to doing better, we’re building a legacy of sustainability that extends far beyond the jobsite.</p>
      <a href="#contact" class="hc-btn hc-btn-primary">Let’s Build a Better Future <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>
