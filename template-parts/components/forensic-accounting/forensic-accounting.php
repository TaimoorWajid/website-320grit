<?php

/**
 * 320 GRIT - Forensic Accounting Page
 * Upgraded to match Commercial Construction animation level
 */

if (!defined('ABSPATH')) exit;

$hero_image = !empty($grit_atts['hero_image']) ? esc_url($grit_atts['hero_image']) : 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1920&q=80';
$case_image = !empty($grit_atts['case_image']) ? esc_url($grit_atts['case_image']) : 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=1200&q=80';

$notable_cases = array(
    array('img' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=1200&q=80', 'category' => 'Securities Fraud', 'name' => 'Meridian Securities Investigation', 'stats' => '$120M | 14 Months | SEC Litigation', 'link' => '#'),
    array('img' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1200&q=80', 'category' => 'Partnership Dispute', 'name' => 'Apex Holdings Dissolution', 'stats' => '$45M | 8 Months | Arbitration', 'link' => '#'),
    array('img' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1200&q=80', 'category' => 'Construction Claim', 'name' => 'Westbrook Tower Audit', 'stats' => '$28M | 10 Months | Expert Testimony', 'link' => '#'),
    array('img' => 'https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=1200&q=80', 'category' => 'Insurance Fraud', 'name' => 'Summit Healthcare Review', 'stats' => '$18M | 6 Months | Federal Court', 'link' => '#'),
    array('img' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=1200&q=80', 'category' => 'Asset Tracing', 'name' => 'Riverside Estate Recovery', 'stats' => '$32M | 12 Months | Civil Fraud', 'link' => '#'),
    array('img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=1200&q=80', 'category' => 'Embezzlement', 'name' => 'Ironwood Corporate Fraud', 'stats' => '$8M | 4 Months | Criminal Referral', 'link' => '#'),
);

$faqs = array(
    array('q' => 'What is the difference between forensic accounting and auditing?', 'a' => 'Auditing verifies that financial statements are fairly presented. Forensic accounting goes deeper — investigating fraud, quantifying damages, tracing assets, and providing expert testimony for legal proceedings.'),
    array('q' => 'How long does a forensic investigation typically take?', 'a' => 'Duration varies by complexity. A straightforward fraud investigation may take 3-6 months, while complex litigation support or asset tracing can extend 12-18 months. We provide detailed timelines during intake.'),
    array('q' => 'Will your findings hold up in court?', 'a' => 'Yes. Our reports adhere to the highest professional and legal standards. Our experts have testified in federal and state courts, arbitrations, and regulatory hearings with strong credibility.'),
    array('q' => 'What industries do you specialize in?', 'a' => 'We serve construction, real estate, manufacturing, healthcare, financial services, government, retail, and energy sectors. Our team includes industry-specialized forensic accountants.'),
    array('q' => 'How do you maintain independence and objectivity?', 'a' => 'We operate under strict ethical guidelines. Our opinions are impartial, evidence-based, and defensible. We disclose any potential conflicts of interest upfront and maintain documentation for peer review.'),
    array('q' => 'Can you help with contract disputes and lost profits?', 'a' => 'Absolutely. We quantify economic damages, analyse contract terms, assess cost overruns, and calculate lost profits using accepted financial methodologies suitable for litigation.'),
);
?>

<!-- Custom Cursor -->
<div class="custom-cursor" id="cursor"></div>

<!-- ======================================================
SECTION 01: HERO
====================================================== -->
<section class="ew-hero" id="ew-hero">
    <div class="ew-hero__bg">
        <img src="/wp-content/uploads/2026/08/forensic-expert-bg-hero.webp" alt="Forensic Accounting" class="ew-hero__bg-img">
        <div class="ew-hero__overlay"></div>
        <div class="ew-hero__grid"></div>
    </div>

    <div class="ew-hero__content">
        <div class="ew-hero__eyebrow">01 — Our Services</div>
        <h1 class="ew-hero__title">
            FORENSIC<br>
            <span>ACCOUNTING</span>
        </h1>
        <p class="ew-hero__subtitle">FOLLOW THE NUMBERS.</p>
        <p class="ew-hero__subtitle">UNCOVER THE TRUTH.</p>
        <p class="ew-hero__desc">
            Independent financial investigation.<br>
            Facts you can trust. Evidence that holds up in court.
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
<section class="service-why" id="service-why" data-section="service-why">
    <div class="service-why__container">

        <!-- Left Content -->
        <div class="service-why__content">
            <div class="service-why__eyebrow">02 — THE ADVANTAGE</div>

            <h2 class="service-why__title">
                Financial Clarity.<br>
                Objective Truth.<br>
                <span>Stronger <br>
                    Outcomes.</span>
            </h2>

            <p class="service-why__desc">
               Our forensic accounting services deliver unbiased analysis, uncover financial irregularities, and provide the evidence you need to make informed decisions and win cases.
            </p>
        </div>
        <!-- Right Content -->
        <div class="service-why__right__cards">
            <article class="service-why__card tilt-card">
                <div class="service-why__card__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                </div>
                <h3>Detailed Analysis</h3>
                <p>We examine every detail to uncover the facts.</p>
            </article>
            <article class="service-why__card tilt-card">
                <div class="service-why__card__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                        <polyline points="14 2 14 8 20 8" />
                        <circle cx="11.5" cy="14.5" r="2.5" />
                        <path d="m16 19-1.5-1.5" />
                    </svg>
                </div>
                <h3>Unbiased & Independent</h3>
                <p>Our opinions are objective, impartial, and defensible.</p>
            </article>
            <article class="service-why__card tilt-card">
                <div class="service-why__card__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        <circle cx="12" cy="11" r="2" />
                        <path d="M12 13v3" />
                    </svg>
                </div>
                <h3>Evidence That Holds</h3>
                <p>Reports built to meet legal standards and stand in court.</p>
            </article>
            <article class="service-why__card tilt-card">
                <div class="service-why__card__icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <circle cx="12" cy="12" r="6" />
                        <circle cx="12" cy="12" r="2" />
                        <path d="M22 2 12 12" />
                        <path d="M16 2h6v6" />
                    </svg>
                </div>
                <h3>Strategic Impact</h3>
                <p>We turn financial insights into stronger case outcomes.</p>
            </article>
        </div>
    </div>
</section>
<!-- END SECTION 02: WHY FORENSIC ACCOUNTING -->


<!-- ============================================ -->
<!-- SECTION 03: WHAT IS FORENSIC ACCOUNTING -->
<!-- ============================================ -->
<section class="fa-what" id="what-is-forensic">
    <div class="fa-what__inner">
        <div class="fa-what__left">
            <div class="ew-hero__eyebrow">03 — Understanding The Method</div>
            <h2 class="section-headline">What is<br>Forensic Accounting?</h2>
            <p class="section-body">Forensic accounting applies accounting, auditing, and investigative skills to examine financial data, uncover irregularities, and deliver expert findings for legal, regulatory, and business objectives.</p>
        </div>
        <div class="fa-what__center">
            <div class="fa-what__image-wrap">
                <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=800&q=80" alt="Forensic accounting analysis" class="fa-what__image">
            </div>
        </div>
        <div class="fa-what__right">
            <ul class="fa-what__list">
                <li><strong>Fraud Detection</strong><span>Identify fraudulent activities, misrepresentations, and asset theft.</span></li>
                <li><strong>Financial Investigations</strong><span>Dig deep into complex transactions and financial records.</span></li>
                <li><strong>Quantify Damages</strong><span>Calculate losses with accuracy and support your claims.</span></li>
                <li><strong>Expert Reports</strong><span>Clear, comprehensive, and court-ready documentation.</span></li>
                <li><strong>Litigation Support</strong><span>Assistance at every stage of dispute resolution.</span></li>
            </ul>
        </div>
    </div>
</section>
<!-- END SECTION 03: WHAT IS FORENSIC ACCOUNTING -->


<!-- ============================================ -->
<!-- SECTION 04: OUR SERVICES -->
<!-- ============================================ -->
<section class="fa-services" id="services">
    <div class="fa-services__header">
        <p class="section-eyebrow">What We Do</p>
        <h2 class="section-headline">Our Forensic Accounting Services</h2>
    </div>
    <div class="fa-services__grid">
        <article class="fa-services__card">
            <div class="fa-services__card-img">
                <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&q=80" alt="Fraud Investigation">
            </div>
            <div class="fa-services__card-content">
                <h3>Fraud Investigation</h3>
                <p>Uncover hidden fraud, embezzlement, and financial misconduct.</p>
            </div>
        </article>
        <article class="fa-services__card">
            <div class="fa-services__card-img">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80" alt="Financial Statement Fraud">
            </div>
            <div class="fa-services__card-content">
                <h3>Financial Statement Fraud</h3>
                <p>Identify material misstatements and deceptive reporting.</p>
            </div>
        </article>
        <article class="fa-services__card">
            <div class="fa-services__card-img">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&q=80" alt="Business Valuation Disputes">
            </div>
            <div class="fa-services__card-content">
                <h3>Business Valuation Disputes</h3>
                <p>Independent valuation analysis for disputes and transactions.</p>
            </div>
        </article>
        <article class="fa-services__card">
            <div class="fa-services__card-img">
                <img src="https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=600&q=80" alt="Lost Profits Analysis">
            </div>
            <div class="fa-services__card-content">
                <h3>Lost Profits Analysis</h3>
                <p>Quantify economic loss and future income impacts.</p>
            </div>
        </article>
        <article class="fa-services__card">
            <div class="fa-services__card-img">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&q=80" alt="Contract & Claim Analysis">
            </div>
            <div class="fa-services__card-content">
                <h3>Contract & Claim Analysis</h3>
                <p>Analyse contract terms, costs, and entitlement disputes.</p>
            </div>
        </article>
        <article class="fa-services__card">
            <div class="fa-services__card-img">
                <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=600&q=80" alt="Dispute Resolution Support">
            </div>
            <div class="fa-services__card-content">
                <h3>Dispute Resolution Support</h3>
                <p>Support mediation, arbitration, and litigation processes.</p>
            </div>
        </article>
    </div>
</section>
<!-- END SECTION 04: OUR SERVICES -->


<!-- ============================================ -->
<!-- SECTION 05: NOTABLE CASES (HORIZONTAL SCROLL) -->
<!-- ============================================ -->
<section class="fa-cases" id="notable-cases">
    <div class="fa-cases__header">
        <p class="section-eyebrow">Case Results</p>
        <h2 class="section-headline">Notable Engagements</h2>
    </div>
    <div class="horizontal-scroll-wrapper">
        <div class="horizontal-scroll-container" id="horizontalContainer">
            <?php foreach ($notable_cases as $case) : ?>
                <div class="horizontal-card">
                    <div class="card-image-wrap">
                        <img src="<?php echo esc_url($case['img']); ?>" alt="<?php echo esc_attr($case['name']); ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-category"><?php echo esc_html($case['category']); ?></span>
                        <h3><?php echo esc_html($case['name']); ?></h3>
                        <p class="card-stats"><?php echo esc_html($case['stats']); ?></p>
                        <a href="<?php echo esc_url($case['link']); ?>" class="card-link">
                            View Case Study
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="scroll-progress-track">
            <div class="scroll-progress" id="scrollProgress"></div>
        </div>
    </div>
</section>
<!-- END SECTION 05: NOTABLE CASES -->


<!-- ============================================ -->
<!-- SECTION 06: INVESTIGATIVE PROCESS -->
<!-- ============================================ -->
<section class="fa-process" id="process">
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


<!-- ============================================ -->
<!-- SECTION 07: PROJECT STATS -->
<!-- ============================================ -->
<section class="stats-section" id="stats">
    <div class="stats-canvas" id="statsCanvas"></div>
    <div class="stats-grid">
        <div class="stat-item">
            <span class="stat-number count-up" data-target="850" data-prefix="$" data-suffix="M+" data-decimals="0">$0M+</span>
            <span class="stat-label">Assets Analysed</span>
        </div>
        <div class="stat-item">
            <span class="stat-number count-up" data-target="400" data-suffix="+">0</span>
            <span class="stat-label">Cases Delivered</span>
        </div>
        <div class="stat-item">
            <span class="stat-number count-up" data-target="98" data-suffix="%" data-decimals="0">0%</span>
            <span class="stat-label">Favourable Outcomes</span>
        </div>
        <div class="stat-item">
            <span class="stat-number count-up" data-target="15" data-suffix="+">0</span>
            <span class="stat-label">Years Experience</span>
        </div>
    </div>
</section>
<!-- END SECTION 07: PROJECT STATS -->


<!-- ============================================ -->
<!-- SECTION 08: INDUSTRIES WE SUPPORT -->
<!-- ============================================ -->
<section class="fa-industries" id="industries">
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


<!-- ============================================ -->
<!-- SECTION 09: WHY CHOOSE 320 GRIT -->
<!-- ============================================ -->
<section class="fa-choose" id="why-choose">
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


<!-- ============================================ -->
<!-- SECTION 10: CASE STUDY / FEATURED PROJECT -->
<!-- ============================================ -->
<section class="case-study-section" id="caseStudy">
    <div class="case-study-layout">
        <div class="case-study-image">
            <img src="<?php echo $case_image; ?>" alt="Meridian Securities Investigation">
        </div>
        <div class="case-study-content">
            <p class="section-eyebrow">Featured Engagement</p>
            <h2 class="section-headline">The Meridian Securities Investigation</h2>
            <p class="case-location">Securities & Exchange Commission</p>
            <p class="case-description">A comprehensive forensic audit of a $120M securities fraud scheme. Our team traced concealed assets across 14 jurisdictions, quantified investor losses, and provided expert testimony that contributed to a successful enforcement action and $89M in recovered funds.</p>
            <div class="case-stats-row">
                <div><span class="count-up" data-target="120" data-prefix="$" data-suffix="M">$0M</span></div>
                <div><span class="count-up" data-target="14" data-suffix=" Jurisdictions">0</span></div>
                <div><span class="count-up" data-target="89" data-prefix="$" data-suffix="M Recovered">$0M</span></div>
                <div><span>Expert Testimony</span></div>
            </div>
            <a href="#" class="btn-primary magnetic">
                Explore Full Case Study
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</section>
<!-- END SECTION 10: CASE STUDY -->


<!-- ============================================ -->
<!-- SECTION 11: REVIEWS / TESTIMONIAL -->
<!-- ============================================ -->
<section class="testimonial-section" id="testimonials">
    <div class="testimonial-card" id="testimonialCard">
        <div class="quote-mark">"</div>
        <blockquote id="quoteText">320 GRIT's forensic team uncovered critical evidence that completely shifted the trajectory of our case. Their precision, objectivity, and courtroom credibility were instrumental in securing a favourable verdict.</blockquote>
        <div class="testimonial-author">
            <strong>David Harrington</strong>
            <span>Managing Partner, Sterling &amp; Associates LLP</span>
        </div>
    </div>
</section>
<!-- END SECTION 11: TESTIMONIAL -->


<!-- ============================================ -->
<!-- SECTION 12: CTA -->
<!-- ============================================ -->
<section class="cta-section" id="cta">
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


<!-- ============================================ -->
<!-- SECTION 13: FAQ -->
<!-- ============================================ -->
<section class="faq-section" id="faq">
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