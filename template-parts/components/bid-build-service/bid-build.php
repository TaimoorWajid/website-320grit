<?php

/**
 * 320 GRIT - Forensic Accounting Page
 * Upgraded to match Commercial Construction animation level
 */

if (!defined('ABSPATH')) exit;

// $hero_image = !empty($grit_atts['hero_image']) ? esc_url($grit_atts['hero_image']) : 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1920&q=80';
// $case_image = !empty($grit_atts['case_image']) ? esc_url($grit_atts['case_image']) : 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=1200&q=80';

// $notable_cases = array(
//     array('img' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=1200&q=80', 'category' => 'Securities Fraud', 'name' => 'Meridian Securities Investigation', 'stats' => '$120M | 14 Months | SEC Litigation', 'link' => '#'),
//     array('img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1200&q=80', 'category' => 'Partnership Dispute', 'name' => 'Apex Holdings Dissolution', 'stats' => '$45M | 8 Months | Arbitration', 'link' => '#'),
//     array('img' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1200&q=80', 'category' => 'Construction Claim', 'name' => 'Westbrook Tower Audit', 'stats' => '$28M | 10 Months | Expert Testimony', 'link' => '#'),
//     array('img' => 'https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=1200&q=80', 'category' => 'Insurance Fraud', 'name' => 'Summit Healthcare Review', 'stats' => '$18M | 6 Months | Federal Court', 'link' => '#'),
//     array('img' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=1200&q=80', 'category' => 'Asset Tracing', 'name' => 'Riverside Estate Recovery', 'stats' => '$32M | 12 Months | Civil Fraud', 'link' => '#'),
//     array('img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=1200&q=80', 'category' => 'Embezzlement', 'name' => 'Ironwood Corporate Fraud', 'stats' => '$8M | 4 Months | Criminal Referral', 'link' => '#'),
// );

$faqs = array(
  array('q' => 'What is the difference between forensic accounting and auditing?', 'a' => 'Auditing verifies that financial statements are fairly presented. Forensic accounting goes deeper — investigating fraud, quantifying damages, tracing assets, and providing expert testimony for legal proceedings.'),
  array('q' => 'How long does a forensic investigation typically take?', 'a' => 'Duration varies by complexity. A straightforward fraud investigation may take 3-6 months, while complex litigation support or asset tracing can extend 12-18 months. We provide detailed timelines during intake.'),
  array('q' => 'Will your findings hold up in court?', 'a' => 'Yes. Our reports adhere to the highest professional and legal standards. Our experts have testified in federal and state courts, arbitrations, and regulatory hearings with strong credibility.'),
  array('q' => 'What industries do you specialize in?', 'a' => 'We serve construction, real estate, manufacturing, healthcare, financial services, government, retail, and energy sectors. Our team includes industry-specialized forensic accountants.'),
  array('q' => 'How do you maintain independence and objectivity?', 'a' => 'We operate under strict ethical guidelines. Our opinions are impartial, evidence-based, and defensible. We disclose any potential conflicts of interest upfront and maintain documentation for peer review.'),
  array('q' => 'Can you help with contract disputes and lost profits?', 'a' => 'Absolutely. We quantify economic damages, analyse contract terms, assess cost overruns, and calculate lost profits using accepted financial methodologies suitable for litigation.'),
);
?>
<!-- ======================================================
SECTION 01: HERO
====================================================== -->
<section class="ew-hero" id="hero" data-section="hero">
  <div class="ew-hero__bg">
    <img src="/wp-content/uploads/2026/08/labour-320-grit.webp" alt="Bid-Build Service" class="ew-hero__bg-img">
    <div class="ew-hero__overlay"></div>
    <div class="ew-hero__grid"></div>
  </div>

  <div class="hc-container">
    <div class="ew-hero__eyebrow">01 — Our Services</div>
    <h1 class="ew-hero__title">
      BID-<br>
      <span>BUILD</span>
    </h1>
    <p class="ew-hero__subtitle">ONE BID. <span>ONE BUILDER.</span><br>
      TOTAL ACCOUNTABILITY.</p>
    <p class="ew-hero__desc">
      A proven delivery method built on competitive bidding, transparent pricing, and disciplined execution — giving owners clarity and control from the first bid to final handover.
    </p>
    <a href="/contact/" class="ew-hero__btn">
      LET’S TALK YOUR CASE
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
        <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </a>
  </div>

  <div class="ew-hero__scroll">
    <span>SCROLL</span>
    <div class="ew-hero__scroll-line"></div>
  </div>
</section>

<!-- END SECTION 01: HERO -->

<!-- ============================================
SECTION 02: WHY FORENSIC ACCOUNTING 
============================================ -->
<section class="service-why" id="service-why" data-section="why">
  <div class="service-why__container">

    <!-- Right Content -->
    <div class="service-why__right__cards">
      <article class="service-why__card tilt-card">
        <div class="service-why__card__icon">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M12 6v6l4 2"></path>
          </svg>
        </div>
        <h3>Cost Transparency</h3>
        <p>Know exactly what you’re paying for before construction begins.</p>
      </article>
      <article class="service-why__card tilt-card">
        <div class="service-why__card__icon">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
            <path d="M2 17l10 5 10-5"></path>
            <path d="M2 12l10 5 10-5"></path>
          </svg>
        </div>
        <h3>Unbiased & Independent</h3>
        <p>Our opinions are objective, impartial, and defensible.</p>
      </article>
      <article class="service-why__card tilt-card">
        <div class="service-why__card__icon">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
        </div>
        <h3>Evidence That Holds</h3>
        <p>Reports built to meet legal standards and stand in court.</p>
      </article>
      <article class="service-why__card tilt-card">
        <div class="service-why__card__icon">

          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
            <path d="M9 12l2 2 4-4"></path>
          </svg>
        </div>
        <h3>Strategic Impact</h3>
        <p>We turn financial insights into stronger case outcomes.</p>
      </article>
    </div>
    <!-- Left Content -->
    <div class="service-why__content">
      <div class="service-why__eyebrow">02 — THE ADVANTAGE</div>

      <h2 class="service-why__title">
        Why<br>
        <span>Bid-Build?</span>
      </h2>

      <p class="service-why__desc">
        Owners choose Bid-Build for its simplicity, transparency, and ability to deliver high-quality projects with minimized risk and clear accountability.
      </p>
    </div>
  </div>
</section>
<!-- END SECTION 02: WHY FORENSIC ACCOUNTING -->

<!-- ============================================
SECTION 03: What is
============================================ -->
<section class="service-what-is" id="service-what-is" data-section="what">
  <div class="service-what-is__container">

    <!-- Left Content -->
    <div class="service-what-is__content">
      <div class="service-what-is__eyebrow">02 — UNDERSTANDING THE METHOD</div>

      <h2 class="service-what-is__title">
        WHAT IS<br>
        <span>BID-BUILD?</span>
      </h2>

      <div class="service-what-is__text">
        <p>
          The Bid-Build method is a linear, sequential approach where the owner first completes the design with their architect and engineers, then solicits competitive bids from qualified contractors, awards the contract, and construction begins.
        </p>
        <p>
          It is simple, structured, and designed to deliver projects with clarity and control — giving owners a clear scope, competitive pricing, and a single point of construction accountability.
        </p>
      </div>
    </div>

    <!-- Center 3D Building -->
    <div class="service-what-is__visual">
      <div class="service-what-is__building-wrapper">
        <div class="service-what-is__building" data-rotate>
          <!-- IMPORTANT: Use CLEAN image without any text/labels -->
          <img
            src="/wp-content/uploads/2026/08/ChatGPT-Image-Aug-8-2026-02_23_28-AM.png"
            alt="Exploded cutaway view of commercial building"
            class="service-what-is__building-img">
        </div>

        <!-- Clean Labels (only these will show) -->
        <div class="service-what-is__labels">
          <div class="service-what-is__label" style="top: 12%;">
            <span class="service-what-is__label-dot"></span>
            <div class="service-what-is__label-content">
              <strong>STRUCTURE</strong>
              <span>Built to perform.</span>
            </div>
          </div>

          <div class="service-what-is__label" style="top: 28%;">
            <span class="service-what-is__label-dot"></span>
            <div class="service-what-is__label-content">
              <strong>BUILDING ENVELOPE</strong>
              <span>Protects what’s inside.</span>
            </div>
          </div>

          <div class="service-what-is__label" style="top: 44%;">
            <span class="service-what-is__label-dot"></span>
            <div class="service-what-is__label-content">
              <strong>MECHANICAL / ELECTRICAL</strong>
              <span>Powering performance.</span>
            </div>
          </div>

          <div class="service-what-is__label" style="top: 60%;">
            <span class="service-what-is__label-dot"></span>
            <div class="service-what-is__label-content">
              <strong>INTERIOR SYSTEMS</strong>
              <span>Designed for function.</span>
            </div>
          </div>

          <div class="service-what-is__label" style="top: 78%;">
            <span class="service-what-is__label-dot"></span>
            <div class="service-what-is__label-content">
              <strong>FOUNDATION</strong>
              <span>Built on strength.</span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- END SECTION 03: What is -->

<!-- ============================================
SECTION 06: INVESTIGATIVE PROCESS
============================================ -->
<section class="fa-process" id="process" data-section="process">
  <div class="fa-process__header">
    <p class="section-eyebrow">How We Work</p>
    <h2 class="section-headline">Our Investigative Process</h2>
  </div>
  <div class="fa-process__timeline">
    <div class="timeline-line">
      <div class="timeline-progress" id="timelineProgress"></div>
    </div>
    <div class="fa-process__steps">
      <article class="fa-process__step">
        <span class="step-number">01</span>
        <div class="step-content">
          <h3>Case Intake</h3>
          <p>Understand the matter, objectives, and scope of engagement.</p>
        </div>
      </article>
      <article class="fa-process__step">
        <span class="step-number">02</span>
        <div class="step-content">
          <h3>Document Review</h3>
          <p>Collect and review relevant financial records and supporting data.</p>
        </div>
      </article>
      <article class="fa-process__step">
        <span class="step-number">03</span>
        <div class="step-content">
          <h3>Investigation & Analysis</h3>
          <p>Analyse transactions, identify issues, and quantify findings.</p>
        </div>
      </article>
      <article class="fa-process__step">
        <span class="step-number">04</span>
        <div class="step-content">
          <h3>Report Preparation</h3>
          <p>Deliver a clear, well-supported report with conclusions and evidence.</p>
        </div>
      </article>
      <article class="fa-process__step">
        <span class="step-number">05</span>
        <div class="step-content">
          <h3>Expert Testimony</h3>
          <p>Provide testimony and defend findings in legal proceedings.</p>
        </div>
      </article>
    </div>
  </div>
</section>
<!-- END SECTION 06: INVESTIGATIVE PROCESS -->

<!-- ============================================
SECTION 08: INDUSTRIES WE SUPPORT
============================================ -->
<section class="fa-industries" id="industries" data-section="industries">
  <div class="fa-industries__bg">
    <img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=1920&q=80" alt="City skyline">
  </div>
  <div class="fa-industries__overlay"></div>
  <div class="fa-industries__content">
    <h2 class="section-headline" style="text-align:center; margin-bottom:60px;">Industries We Support</h2>
    <div class="fa-industries__grid">
      <div class="fa-industries__item">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <path d="M2 22h20M2 6h20M2 10h20M2 14h20M2 18h20M6 2v20M18 2v20" />
        </svg>
        <span>Construction</span>
      </div>
      <div class="fa-industries__item">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <path d="M3 21h18M5 21V7l8-4 8 4v14M9 21v-6h6v6" />
        </svg>
        <span>Real Estate</span>
      </div>
      <div class="fa-industries__item">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <path d="M2 20h20M5 20v-8h3v8M10 20V8h3v12M15 20v-5h3v5M4 12l4-4 4 4 4-4 4 4" />
        </svg>
        <span>Manufacturing</span>
      </div>
      <div class="fa-industries__item">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
        </svg>
        <span>Healthcare</span>
      </div>
      <div class="fa-industries__item">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <rect x="2" y="3" width="20" height="14" rx="2" />
          <line x1="8" y1="21" x2="16" y2="21" />
          <line x1="12" y1="17" x2="12" y2="21" />
        </svg>
        <span>Financial Services</span>
      </div>
      <div class="fa-industries__item">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
        </svg>
        <span>Government</span>
      </div>
      <div class="fa-industries__item">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <circle cx="9" cy="21" r="1" />
          <circle cx="20" cy="21" r="1" />
          <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
        </svg>
        <span>Retail</span>
      </div>
      <div class="fa-industries__item">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
        </svg>
        <span>Energy</span>
      </div>
    </div>
  </div>
</section>
<!-- END SECTION 08: INDUSTRIES WE SUPPORT -->


<!-- ============================================
SECTION 09: Single line process numbering for later use
============================================ -->

<!-- <section class="bid-journey" id="bid-journey" data-section="bid-journey">
  <div class="bid-journey__container">

    <div class="bid-journey__header">
      <div class="bid-journey__eyebrow">04 — THE JOURNEY</div>
      <h2 class="bid-journey__title">THE BID-BUILD<br><span>JOURNEY</span></h2>
    </div>

    <div class="bid-journey__timeline">

      <div class="bid-journey__step" data-step>
        <div class="bid-journey__step-number">01</div>
        <div class="bid-journey__step-content">
          <h3>Invitation to Bid</h3>
          <p>Project scope and requirements are shared with prequalified contractors.</p>
        </div>
      </div>

      <div class="bid-journey__step" data-step>
        <div class="bid-journey__step-number">02</div>
        <div class="bid-journey__step-content">
          <h3>Bid Evaluation</h3>
          <p>Proposals are carefully reviewed for pricing, qualifications, experience, and approach.</p>
        </div>
      </div>

      <div class="bid-journey__step" data-step>
        <div class="bid-journey__step-number">03</div>
        <div class="bid-journey__step-content">
          <h3>Contract Award</h3>
          <p>The best overall value is selected and a clear contract is executed.</p>
        </div>
      </div>

      <div class="bid-journey__step" data-step>
        <div class="bid-journey__step-number">04</div>
        <div class="bid-journey__step-content">
          <h3>Construction Execution</h3>
          <p>We build with discipline, communicate proactively, and manage every detail.</p>
        </div>
      </div>

      <div class="bid-journey__step" data-step>
        <div class="bid-journey__step-number">05</div>
        <div class="bid-journey__step-content">
          <h3>Project Delivery</h3>
          <p>Final inspections, closeout, and handover — your vision, delivered.</p>
        </div>
      </div>

    </div>
  </div>
</section> -->

<!-- ============================================
SECTION 09: Single line process numbering for later use
============================================ -->


<!-- ============================================
SECTION 09: Cards Section for later use
============================================ -->

<!-- <section class="bid-process" id="bid-process" data-section="bid-process">
  <div class="bid-process__container">

    <div class="bid-process__header">
      <div class="bid-process__eyebrow">05 — HOW WE WORK</div>
      <h2 class="bid-process__title">OUR BID-BUILD<br><span>PROCESS</span></h2>
    </div>

    <div class="bid-process__grid">

      <div class="bid-process__card" data-card>
        <div class="bid-process__card-number">01</div>
        <h3 class="bid-process__card-title">Preconstruction Planning</h3>
        <ul class="bid-process__card-list">
          <li>Define scope and budget</li>
          <li>Develop drawings & specs</li>
          <li>Prepare bid documents</li>
          <li>Prequalify contractors</li>
        </ul>
      </div>

      <div class="bid-process__card" data-card>
        <div class="bid-process__card-number">02</div>
        <h3 class="bid-process__card-title">Competitive Bidding</h3>
        <ul class="bid-process__card-list">
          <li>Issue bids to qualified contractors</li>
          <li>Collect and analyze proposals</li>
          <li>Clarify and compare</li>
          <li>Recommend award</li>
        </ul>
      </div>

      <div class="bid-process__card" data-card>
        <div class="bid-process__card-number">03</div>
        <h3 class="bid-process__card-title">Construction Management</h3>
        <ul class="bid-process__card-list">
          <li>Mobilization & scheduling</li>
          <li>Quality control</li>
          <li>Cost & risk management</li>
          <li>Ongoing communication</li>
        </ul>
      </div>

      <div class="bid-process__card" data-card>
        <div class="bid-process__card-number">04</div>
        <h3 class="bid-process__card-title">Closeout & Delivery</h3>
        <ul class="bid-process__card-list">
          <li>Final inspections</li>
          <li>Punch list completion</li>
          <li>Closeout documentation</li>
          <li>Owner handover</li>
        </ul>
      </div>

    </div>
  </div>
</section> -->
<!-- ============================================
SECTION 09: Cards Section for later use
============================================ -->

<!-- ============================================
SECTION 09: WHY CHOOSE 320 GRIT
============================================ -->
<section class="fa-choose" id="why-320" data-section="why-320">
  <div class="fa-choose__inner">
    <div class="fa-choose__left">
      <p class="section-eyebrow">Our Difference</p>
      <h2 class="section-headline">Why Choose<br>320 Grit?</h2>
      <p class="section-body">We combine deep technical expertise with an unwavering commitment to objectivity, delivering findings that withstand the highest scrutiny.</p>
    </div>
    <div class="fa-choose__right">
      <article class="fa-choose__card tilt-card">
        <svg class="card-number-svg" viewBox="0 0 120 80"><text x="0" y="65" class="card-number-text">01</text></svg>
        <h3>Expertise That Counts</h3>
        <p>Experienced forensic accountants with deep technical and industry knowledge.</p>
      </article>
      <article class="fa-choose__card tilt-card">
        <svg class="card-number-svg" viewBox="0 0 120 80"><text x="0" y="65" class="card-number-text">02</text></svg>
        <h3>Objective & Independent</h3>
        <p>We provide unbiased opinions you can rely on with full credibility.</p>
      </article>
      <article class="fa-choose__card tilt-card">
        <svg class="card-number-svg" viewBox="0 0 120 80"><text x="0" y="65" class="card-number-text">03</text></svg>
        <h3>Court-Ready Results</h3>
        <p>Our reports and testimony meet the highest legal and professional standards.</p>
      </article>
      <article class="fa-choose__card tilt-card">
        <svg class="card-number-svg" viewBox="0 0 120 80"><text x="0" y="65" class="card-number-text">04</text></svg>
        <h3>Focused on Your Outcome</h3>
        <p>We deliver insights that strengthen your case and drive results.</p>
      </article>
    </div>
  </div>
</section>
<!-- END SECTION 09: WHY CHOOSE 320 GRIT -->



<!-- ============================================
SECTION 12: CTA
============================================ -->
<section class="cta-section" id="get-started" data-section="get-started">
  <div class="cta-bg">
    <div class="gradient-mesh"></div>
    <div class="particles" id="particles"></div>
  </div>
  <div class="cta-content">
    <h2 class="cta-headline" id="ctaHeadline">Financial Truth.<br>Stronger Cases.</h2>
    <p class="cta-subheadline">Let our forensic accounting experts uncover the facts and deliver the clarity you need to move forward.</p>
    <a href="#contact" class="btn-cta magnetic">Schedule a Consultation</a>
  </div>
</section>
<!-- END SECTION 12: CTA -->

<!-- ============================================
SECTION 13: FAQ
============================================ -->
<section class="faq-section" id="faq" data-section="faq">
  <div class="faq-layout">
    <div class="faq-header">
      <p class="section-eyebrow">Common Questions</p>
      <h2 class="section-headline">Everything You Need to Know</h2>
      <p class="section-body">Answers to the most frequently asked questions about our forensic accounting services and engagement process.</p>
      <a href="#contact" class="btn-secondary">Still have questions? Contact us.</a>
    </div>
    <div class="faq-accordion">
      <?php foreach ($faqs as $faq) : ?>
        <div class="faq-item">
          <button class="faq-question">
            <?php echo esc_html($faq['q']); ?>
            <span class="faq-icon"></span>
          </button>
          <div class="faq-answer">
            <p><?php echo esc_html($faq['a']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- END SECTION 13: FAQ -->