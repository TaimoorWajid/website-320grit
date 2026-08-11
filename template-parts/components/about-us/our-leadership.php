<?php
/**
 * 320 GRIT — Our Leadership (Content Only)
 */

$stats = [
  ['num' => '100+', 'label' => 'Years of Combined Experience', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8z"/>'],
  ['num' => '500+', 'label' => 'Projects Completed Across the U.S.', 'icon' => '<path d="M3 21h18M5 21V7l7-4 7 4v14"/>'],
  ['num' => '20+', 'label' => 'Markets Served', 'icon' => '<path d="M2 20h20M5 20V10l7-5 7 5v10"/>'],
  ['num' => '1', 'label' => 'Unified Commitment to Excellence', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zM23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>'],
];

$principles = [
  ['title' => 'Lead with Integrity', 'text' => 'We do what’s right—always.', 'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'],
  ['title' => 'Empower Our Teams', 'text' => 'We invest in our people and encourage ownership.', 'icon' => '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8z"/>'],
  ['title' => 'Deliver Lasting Impact', 'text' => 'We build more than projects—we build trust and communities.', 'icon' => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>'],
];

$team = [
  ['name' => 'Michael D. Campbell', 'role' => 'Chief Executive Officer', 'bio' => 'Visionary leader with 25+ years in construction and real estate development.', 'img' => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&q=80'],
  ['name' => 'Sarah J. Mitchell', 'role' => 'President', 'bio' => 'Expert in operational strategy and project delivery with a focus on people and process.', 'img' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=80'],
  ['name' => 'David R. Thompson', 'role' => 'Chief Operating Officer', 'bio' => 'Drives performance across projects and markets with precision and accountability.', 'img' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&q=80'],
  ['name' => 'Jason P. Anderson', 'role' => 'Chief Financial Officer', 'bio' => 'Financial steward focused on sustainable growth and long-term value creation.', 'img' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&q=80'],
  ['name' => 'Melissa K. Rodriguez', 'role' => 'Chief People Officer', 'bio' => 'Champion of culture, talent development, and a people-first mindset.', 'img' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&q=80'],
];

$guide_values = [
  ['title' => 'Safety', 'text' => 'We prioritize safety in every decision, every time.'],
  ['title' => 'Integrity', 'text' => 'We build trust through honesty, transparency, and accountability.'],
  ['title' => 'Quality', 'text' => 'We are committed to delivering the highest standards.'],
  ['title' => 'Innovation', 'text' => 'We embrace innovation to solve complex challenges.'],
  ['title' => 'Community', 'text' => 'We strengthen communities through meaningful partnerships.'],
];
?>

<section class="hc-hero rr-hero" id="lead-hero">
  <div class="hc-hero-bg" aria-hidden="true"><img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1920&q=85" alt="" width="1920" height="1080" fetchpriority="high"></div>
  <div class="hc-hero-overlay rr-hero-overlay" aria-hidden="true"></div>
  <div class="hc-container">
    <div class="hc-hero-content hc-reveal">
      <div class="hc-hero-label"><span class="hc-line"></span><span class="hc-label">Our Leadership</span></div>
      <h1 class="hc-display-xl">Leadership That Builds<br><span class="hc-orange">Legacies.</span></h1>
      <p class="rr-hero-desc" style="max-width:540px">Great projects start with strong leadership. Our leadership team brings decades of experience, a passion for excellence, and a shared commitment to building a better future.</p>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-dark);padding-top:0;margin-top:-60px;position:relative;z-index:2" id="lead-stats">
  <div class="hc-container">
    <div class="ab-stats hc-reveal">
      <?php foreach ($stats as $s) : ?>
      <div class="ab-stat">
        <div class="ab-stat-icon"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $s['icon']; ?></svg></div>
        <div class="ab-stat-num"><?php echo $s['num']; ?></div>
        <div class="ab-stat-label"><?php echo $s['label']; ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-black)" id="lead-approach">
  <div class="hc-container">
    <div class="hc-section-header hc-center hc-reveal">
      <span class="hc-label">Our Approach to Leadership</span>
      <h2 class="hc-display-md">Experience. Integrity. Impact.</h2>
      <p class="hc-body-lg" style="margin-top:1rem;max-width:600px;margin-inline:auto">Our leaders set the standard for how we work, collaborate, and deliver value. They empower our teams, build lasting relationships, and ensure every project reflects the 320 Grit promise of precision, integrity, and care.</p>
    </div>
    <div class="ab-value-grid" style="grid-template-columns:repeat(3,1fr);max-width:900px;margin-inline:auto">
      <?php foreach ($principles as $i => $p) : ?>
      <div class="ab-value-card hc-reveal hc-delay-<?php echo $i+1; ?>">
        <div class="ab-value-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"><?php echo $p['icon']; ?></svg></div>
        <h3><?php echo $p['title']; ?></h3>
        <p><?php echo $p['text']; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-dark)" id="lead-team">
  <div class="hc-container">
    <div class="hc-section-header hc-center hc-reveal">
      <span class="hc-label">Meet Our Team</span>
      <h2 class="hc-display-md">Our Leadership Team</h2>
    </div>
    <div class="ab-team-grid hc-reveal">
      <?php foreach ($team as $t) : ?>
      <div class="ab-team-card">
        <div class="ab-team-photo"><img src="<?php echo $t['img']; ?>" alt="<?php echo $t['name']; ?>" width="300" height="300" loading="lazy"></div>
        <div class="ab-team-info">
          <h3><?php echo $t['name']; ?></h3>
          <div class="ab-role"><?php echo $t['role']; ?></div>
          <p><?php echo $t['bio']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="hc-section" style="background:var(--hc-black)" id="lead-values">
  <div class="hc-container">
    <div class="ab-split">
      <div class="ab-split-img hc-reveal">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=900&q=80" alt="Team on site at sunset" width="700" height="480" loading="lazy">
      </div>
      <div class="hc-reveal hc-delay-2">
        <span class="hc-label">Our Values</span>
        <h2 class="hc-display-md" style="margin-top:0.75rem">The Principles That Guide Us</h2>
        <div class="ab-value-grid" style="grid-template-columns:1fr 1fr;margin-top:2rem;gap:1.5rem">
          <?php foreach ($guide_values as $g) : ?>
          <div>
            <h3 style="font-size:0.95rem;color:var(--hc-orange);margin-bottom:0.35rem"><?php echo $g['title']; ?></h3>
            <p style="font-size:0.85rem;color:var(--hc-text-muted);margin:0"><?php echo $g['text']; ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
