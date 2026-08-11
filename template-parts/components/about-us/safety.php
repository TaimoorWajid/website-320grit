<?php
/**
 * 320 GRIT — Safety (Content Only)
 */

$approach = [
  ['title' => 'Plan Safely', 'text' => 'We identify risks early and plan proactively to eliminate or minimize them.', 'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'],
  ['title' => 'Work Safely', 'text' => 'We provide training, tools, and clear expectations to support safe work.', 'icon' => '<path d="M2 20h20M5 20V10l7-5 7 5v10"/>'],
  ['title' => 'Lead Safely', 'text' => 'We hold ourselves and each other accountable at every level.', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8z"/>'],
  ['title' => 'Improve Continuously', 'text' => 'We learn, adapt, and raise the bar through data, feedback, and innovation.', 'icon' => '<path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>'],
];

$stats = [
  ['num' => '2.4M+', 'label' => 'Work Hours (2023)'],
  ['num' => '0.48', 'label' => 'TRIR (Total Recordable Incident Rate)'],
  ['num' => '0', 'label' => 'Fatalities Since Inception'],
  ['num' => '100%', 'label' => 'Safety Training Completion'],
  ['num' => '100%', 'label' => 'Project-Specific Safety Plans'],
];

$culture = [
  'Empowering our teams to take ownership of safety',
  'Encouraging open communication and reporting',
  'Recognizing and reinforcing safe behaviors',
  'Supporting mental and physical well-being',
];

$focus = [
  ['title' => 'People', 'text' => 'Protecting the health, safety, and well-being of our employees, subcontractors, and partners.', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8z"/>'],
  ['title' => 'Prevention', 'text' => 'Eliminating hazards through proactive planning, hazard assessments, and robust safety programs.', 'icon' => '<path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><path d="M12 9v4M12 17h.01"/>'],
  ['title' => 'Training', 'text' => 'Providing ongoing, role-specific training to build knowledge, confidence, and competence.', 'icon' => '<path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/>'],
  ['title' => 'Technology', 'text' => 'Leveraging innovative tools and data to enhance awareness and reduce risk.', 'icon' => '<circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>'],
  ['title' => 'Partnership', 'text' => 'Collaborating with trade partners who share our commitment to safety excellence.', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zM23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>'],
  ['title' => 'Community', 'text' => 'Extending our commitment to safety to the communities where we live and build.', 'icon' => '<path d="M3 21h18M5 21V7l7-4 7 4v14"/>'],
];
?>

<section class="hc-hero rr-hero" id="safe-hero">
  <div class="hc-hero-bg" aria-hidden="true"><img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1920&q=85" alt="" width="1920" height="1080" fetchpriority="high"></div>
  <div class="hc-hero-overlay rr-hero-overlay" aria-hidden="true"></div>
  <div class="hc-container">
    <div class="hc-hero-content hc-reveal">
      <div class="hc-hero-label"><span class="hc-line"></span><span class="hc-label">Safety</span></div>
      <h1 class="hc-display-xl">Building with Care.<br><span class="hc-orange">Protecting People.</span></h1>
      <p class="rr-hero-desc" style="max-width:520px">At 320 Grit, safety is more than a priority—it’s a core value that guides every decision, every day. We are committed to protecting our people, partners, and the communities we build in.</p>
      <a href="#safe-approach" class="hc-btn hc-btn-outline" style="margin-top:0.5rem">Our Safety Approach <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-dark)" id="safe-approach">
  <div class="hc-container">
    <div class="hc-reveal" style="max-width:560px;margin-bottom:2.5rem">
      <span class="hc-label">Our Safety Approach</span>
      <h2 class="hc-display-md" style="margin-top:0.75rem">Safety by Design.<br>Built into Everything We Do.</h2>
      <p class="hc-body-md" style="margin-top:1rem">We integrate safety into our culture, our planning, and our operations. From preconstruction to project closeout, we empower every team member to lead with safety and look out for one another.</p>
    </div>
    <div class="ab-value-grid" style="grid-template-columns:repeat(4,1fr)">
      <?php foreach ($approach as $i => $a) : ?>
      <div class="ab-value-card hc-reveal hc-delay-<?php echo $i+1; ?>">
        <div class="ab-value-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $a['icon']; ?></svg></div>
        <h3><?php echo $a['title']; ?></h3>
        <p><?php echo $a['text']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-black)" id="safe-stats">
  <div class="hc-container">
    <div class="hc-reveal" style="margin-bottom:1.5rem">
      <span class="hc-label">Safety in Action</span>
      <h2 class="hc-display-md" style="margin-top:0.5rem">Results That Reflect Our Commitment</h2>
    </div>
    <div class="ab-impact hc-reveal hc-delay-2">
      <?php foreach ($stats as $s) : ?>
      <div class="ab-impact-item">
        <div class="ab-impact-num"><?php echo $s['num']; ?></div>
        <div class="ab-impact-label"><?php echo $s['label']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-dark)" id="safe-culture">
  <div class="hc-container">
    <div class="ab-split">
      <div class="ab-split-img hc-reveal">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=900&q=80" alt="Worker on rebar" width="700" height="480" loading="lazy">
      </div>
      <div class="hc-reveal hc-delay-2">
        <span class="hc-label">Our Safety Culture</span>
        <h2 class="hc-display-md" style="margin-top:0.75rem">Every Person. Every Day.</h2>
        <p class="hc-body-md" style="margin-top:1rem">We believe every incident is preventable. Our culture empowers every person on site to speak up, stop work when necessary, and make safety personal.</p>
        <ul class="ab-check-list"><?php foreach ($culture as $c) : ?><li><?php echo $c; ?></li><?php endforeach; ?></ul>
      </div>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-black)" id="safe-focus">
  <div class="hc-container">
    <div class="hc-section-header hc-center hc-reveal">
      <span class="hc-label">Our Focus Areas</span>
      <h2 class="hc-display-md">Focused on What Matters Most</h2>
    </div>
    <div class="ab-value-grid">
      <?php foreach ($focus as $i => $f) : ?>
      <div class="ab-value-card hc-reveal hc-delay-<?php echo min($i+1,4); ?>">
        <div class="ab-value-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $f['icon']; ?></svg></div>
        <h3><?php echo $f['title']; ?></h3>
        <p><?php echo $f['text']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="rr-final-cta" id="safe-cta">
  <div class="hc-container">
    <div class="rr-cta-inner hc-reveal">
      <h2 class="hc-display-lg">Safety Isn’t Just a Policy.<br><span class="hc-orange">It’s Our Promise.</span></h2>
      <p>We will continue to build a safer tomorrow—together. Because when our people go home safely, we all win.</p>
      <a href="#contact" class="hc-btn hc-btn-primary">Our Safety Policy <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    </div>
  </div>
</section>
