<?php
/**
 * 320 GRIT - Commercial Construction Page Template
 * For use with [grit_commercial] shortcode
 * 
 * Place this file in your active theme root directory (e.g., /wp-content/themes/your-theme/commercial.php)
 * 
 * Available variables:
 * $grit_atts - shortcode attributes array
 */

// Prevent direct access
if (!defined('ABSPATH')) exit;

// Get custom images from shortcode attributes if provided
$hero_image = !empty($grit_atts['hero_image']) ? esc_url($grit_atts['hero_image']) : 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=1920&q=80';
$case_image = !empty($grit_atts['case_image']) ? esc_url($grit_atts['case_image']) : 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=1200&q=80';

// Project images array for spectrum section
$projects = array(
    array(
        'img' => 'https://images.unsplash.com/photo-1577495508048-b635879837f1?w=1200&q=80',
        'category' => 'Office & Corporate',
        'name' => 'Meridian Tower',
        'stats' => '125,000 SF | 18 Months | $42M',
        'link' => '#'
    ),
    array(
        'img' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=1200&q=80',
        'category' => 'Retail & Mixed-Use',
        'name' => 'The District at Westbrook',
        'stats' => '85,000 SF | 14 Months | $28M',
        'link' => '#'
    ),
    array(
        'img' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1200&q=80',
        'category' => 'Industrial & Warehouse',
        'name' => 'LogiPark Distribution Center',
        'stats' => '250,000 SF | 12 Months | $35M',
        'link' => '#'
    ),
    array(
        'img' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=1200&q=80',
        'category' => 'Healthcare Facilities',
        'name' => 'Summit Medical Pavilion',
        'stats' => '95,000 SF | 22 Months | $58M',
        'link' => '#'
    ),
    array(
        'img' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1200&q=80',
        'category' => 'Hospitality',
        'name' => 'The Ironwood Hotel',
        'stats' => '60,000 SF | 16 Months | $32M',
        'link' => '#'
    ),
    array(
        'img' => 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=1200&q=80',
        'category' => 'Education',
        'name' => 'Riverside Innovation Campus',
        'stats' => '110,000 SF | 20 Months | $48M',
        'link' => '#'
    ),
);

// FAQ items
$faqs = array(
    array(
        'q' => 'What types of commercial projects do you specialize in?',
        'a' => 'We specialize in office buildings, retail centers, industrial warehouses, healthcare facilities, hospitality, and educational institutions. Our portfolio spans from 10,000 SF tenant improvements to 500,000+ SF ground-up developments.'
    ),
    array(
        'q' => 'How do you handle project budgeting and cost control?',
        'a' => 'We employ a rigorous pre-construction process that includes detailed quantity takeoffs, value engineering, and real-time cost tracking. Our proprietary dashboard gives clients 24/7 visibility into budget status, change orders, and forecasts.'
    ),
    array(
        'q' => 'What is your typical project timeline?',
        'a' => 'Timelines vary based on project scope and complexity. A typical 50,000 SF commercial build takes 12-18 months from design to delivery. We provide detailed Gantt charts and milestone schedules during pre-construction.'
    ),
    array(
        'q' => 'Do you offer design-build services?',
        'a' => 'Yes. Our design-build approach streamlines communication, reduces risk, and accelerates timelines by integrating design and construction under a single contract. This model has delivered 15% faster completion on average.'
    ),
    array(
        'q' => 'How do you ensure quality and safety on site?',
        'a' => 'Quality is enforced through a three-tier inspection system: daily self-checks, weekly third-party reviews, and monthly client walkthroughs. Safety is managed via OSHA-compliant protocols, daily toolbox talks, and a zero-incident mindset.'
    ),
    array(
        'q' => 'What geographic regions do you serve?',
        'a' => 'We operate across the continental United States with regional offices in Austin, Dallas, Denver, and Atlanta. Our teams are equipped to mobilize nationwide for projects exceeding $10M in value.'
    ),
);
?>

<!-- CUSTOM CURSOR -->
<div class="custom-cursor" id="cursor"></div>

<!-- NAVIGATION -->
<nav class="site-nav" id="navbar">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-brand">320 GRIT</a>
    <div class="nav-links">
        <a href="<?php echo esc_url(home_url('/services')); ?>">Services</a>
        <a href="<?php echo esc_url(home_url('/projects')); ?>">Projects</a>
        <a href="<?php echo esc_url(home_url('/about')); ?>">About</a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
    </div>
    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="nav-cta magnetic">Start a Project</a>
    <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
        <span></span><span></span><span></span>
    </button>
</nav>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu">
    <a href="<?php echo esc_url(home_url('/services')); ?>">Services</a>
    <a href="<?php echo esc_url(home_url('/projects')); ?>">Projects</a>
    <a href="<?php echo esc_url(home_url('/about')); ?>">About</a>
    <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
</div>

<!-- ============================================ -->
<!-- SECTION 01: HERO -->
<!-- ============================================ -->
<section class="hero-section" id="hero">
    <div class="hero-canvas" id="heroCanvas">
        <img src="<?php echo $hero_image; ?>" alt="Modern commercial building" class="hero-fallback-img">
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-grain"></div>
    
    <div class="hero-content">
        <p class="hero-eyebrow">Commercial Construction</p>
        <h1 class="hero-headline" id="heroHeadline">Building Commercial Spaces That Drive Success</h1>
        <p class="hero-subheadline">
            From ground-up developments to complex tenant improvements, we deliver commercial projects that balance ambition with precision.
        </p>
        <div class="hero-ctas">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary magnetic">
                Start Your Project
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="<?php echo esc_url(home_url('/projects')); ?>" class="btn-secondary">
                View Our Portfolio
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
    
    <div class="scroll-indicator">
        <span>Scroll</span>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12l7 7 7-7"/></svg>
    </div>
</section>

<!-- ============================================ -->
<!-- SECTION 02: DIFFERENCE -->
<!-- ============================================ -->
<section class="difference-section" id="difference">
    <div class="difference-layout">
        <div class="difference-sticky">
            <p class="section-eyebrow">Why 320 Grit</p>
            <h2 class="section-headline">Built Different.</h2>
            <p class="section-body">We don't just construct buildings. We engineer environments where businesses thrive.</p>
        </div>
        <div class="difference-cards">
            <article class="capability-card tilt-card">
                <svg class="card-number-svg" viewBox="0 0 120 80"><text x="0" y="65" class="card-number-text">01</text></svg>
                <h3>Design-Build Excellence</h3>
                <p>Single-source accountability from concept to completion. One team, one vision, zero gaps.</p>
            </article>
            <article class="capability-card tilt-card">
                <svg class="card-number-svg" viewBox="0 0 120 80"><text x="0" y="65" class="card-number-text">02</text></svg>
                <h3>Lean Construction</h3>
                <p>Waste reduction, schedule optimization, and cost control through data-driven methodologies.</p>
            </article>
            <article class="capability-card tilt-card">
                <svg class="card-number-svg" viewBox="0 0 120 80"><text x="0" y="65" class="card-number-text">03</text></svg>
                <h3>Sustainable Practices</h3>
                <p>LEED-certified approaches and green building standards that reduce environmental impact.</p>
            </article>
            <article class="capability-card tilt-card">
                <svg class="card-number-svg" viewBox="0 0 120 80"><text x="0" y="65" class="card-number-text">04</text></svg>
                <h3>Technology-Driven</h3>
                <p>BIM, drone surveying, and real-time project dashboards for total transparency.</p>
            </article>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- SECTION 03: SPECTRUM -->
<!-- ============================================ -->
<section class="spectrum-section" id="spectrum">
    <div class="spectrum-header">
        <p class="section-eyebrow">Our Work</p>
        <h2 class="section-headline">Commercial Spectrum</h2>
    </div>
    <div class="horizontal-scroll-wrapper">
        <div class="horizontal-scroll-container" id="horizontalContainer">
            <?php foreach ($projects as $project) : ?>
            <div class="horizontal-card">
                <div class="card-image-wrap">
                    <img src="<?php echo esc_url($project['img']); ?>" alt="<?php echo esc_attr($project['name']); ?>">
                </div>
                <div class="card-content">
                    <span class="card-category"><?php echo esc_html($project['category']); ?></span>
                    <h3><?php echo esc_html($project['name']); ?></h3>
                    <p class="card-stats"><?php echo esc_html($project['stats']); ?></p>
                    <a href="<?php echo esc_url($project['link']); ?>" class="card-link">
                        View Case Study
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="scroll-progress-track"><div class="scroll-progress" id="scrollProgress"></div></div>
    </div>
</section>

<!-- ============================================ -->
<!-- SECTION 04: PROCESS -->
<!-- ============================================ -->
<section class="process-section" id="process">
    <div class="process-header">
        <p class="section-eyebrow">How We Work</p>
        <h2 class="section-headline">The Process</h2>
    </div>
    <div class="process-timeline">
        <div class="timeline-line"><div class="timeline-progress" id="timelineProgress"></div></div>
        <div class="process-steps">
            <article class="process-step">
                <span class="step-number">01</span>
                <div class="step-content"><h3>Discovery & Feasibility</h3><p>We analyze your site, budget, and vision to establish project parameters and identify opportunities.</p></div>
            </article>
            <article class="process-step">
                <span class="step-number">02</span>
                <div class="step-content"><h3>Design Development</h3><p>Our team collaborates with architects and engineers to refine plans that balance aesthetics, function, and cost.</p></div>
            </article>
            <article class="process-step">
                <span class="step-number">03</span>
                <div class="step-content"><h3>Pre-Construction</h3><p>Permits, subcontractor selection, material procurement, and detailed scheduling — every detail locked before breaking ground.</p></div>
            </article>
            <article class="process-step">
                <span class="step-number">04</span>
                <div class="step-content"><h3>Construction</h3><p>Daily oversight, quality control, safety management, and transparent communication keep your project on track.</p></div>
            </article>
            <article class="process-step">
                <span class="step-number">05</span>
                <div class="step-content"><h3>Delivery & Beyond</h3><p>Final inspections, punch list completion, and ongoing support to ensure your building performs as designed.</p></div>
            </article>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- SECTION 05: STATS -->
<!-- ============================================ -->
<section class="stats-section" id="stats">
    <div class="stats-canvas" id="statsCanvas"></div>
    <div class="stats-grid">
        <div class="stat-item">
            <span class="stat-number count-up" data-target="2.4" data-prefix="$" data-suffix="B" data-decimals="1">$0.0B</span>
            <span class="stat-label">Total Project Value</span>
        </div>
        <div class="stat-item">
            <span class="stat-number count-up" data-target="847" data-suffix="+">0</span>
            <span class="stat-label">Projects Delivered</span>
        </div>
        <div class="stat-item">
            <span class="stat-number count-up" data-target="14" data-suffix="M+" data-prefix="">0</span>
            <span class="stat-label">Square Feet Constructed</span>
        </div>
        <div class="stat-item">
            <span class="stat-number count-up" data-target="98.7" data-suffix="%" data-decimals="1">0%</span>
            <span class="stat-label">On-Time Delivery Rate</span>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- SECTION 06: CASE STUDY -->
<!-- ============================================ -->
<section class="case-study-section" id="caseStudy">
    <div class="case-study-layout">
        <div class="case-study-image">
            <img src="<?php echo $case_image; ?>" alt="Apex Corporate Center">
        </div>
        <div class="case-study-content">
            <p class="section-eyebrow">Featured Project</p>
            <h2 class="section-headline">The Apex Corporate Center</h2>
            <p class="case-location">Austin, Texas</p>
            <p class="case-description">A 200,000-square-foot Class A office tower featuring floor-to-ceiling glazing, smart building technology, and a LEED Platinum certification. Completed 3 weeks ahead of schedule.</p>
            <div class="case-stats-row">
                <div><span class="count-up" data-target="200000" data-suffix=" SF">0</span></div>
                <div><span class="count-up" data-target="24" data-suffix=" Months">0</span></div>
                <div><span class="count-up" data-target="78" data-prefix="$" data-suffix="M">$0M</span></div>
                <div><span>LEED Platinum</span></div>
            </div>
            <a href="<?php echo esc_url(home_url('/projects/apex-center')); ?>" class="btn-primary magnetic">
                Explore Full Case Study
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- SECTION 07: TESTIMONIAL -->
<!-- ============================================ -->
<section class="testimonial-section" id="testimonials">
    <div class="testimonial-card" id="testimonialCard">
        <div class="quote-mark">"</div>
        <blockquote id="quoteText">320 GRIT transformed our vision into a landmark. Their attention to detail and transparent communication made a complex project feel effortless.</blockquote>
        <div class="testimonial-author">
            <strong>Sarah Chen</strong>
            <span>CEO, Meridian Development Group</span>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- SECTION 08: CTA -->
<!-- ============================================ -->
<section class="cta-section" id="cta">
    <div class="cta-bg">
        <div class="gradient-mesh"></div>
        <div class="particles" id="particles"></div>
    </div>
    <div class="cta-content">
        <h2 class="cta-headline" id="ctaHeadline">Your Next Project Starts Here.</h2>
        <p class="cta-subheadline">Let's discuss how 320 GRIT can bring your commercial vision to life.</p>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-cta magnetic">Schedule a Consultation</a>
    </div>
</section>

<!-- ============================================ -->
<!-- SECTION 09: FAQ -->
<!-- ============================================ -->
<section class="faq-section" id="faq">
    <div class="faq-layout">
        <div class="faq-header">
            <h2 class="section-headline">Common Questions</h2>
            <p class="section-body">Everything you need to know about working with 320 GRIT on your commercial project.</p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-secondary">Still have questions? Contact us.</a>
        </div>
        <div class="faq-accordion">
            <?php foreach ($faqs as $i => $faq) : ?>
            <div class="faq-item">
                <button class="faq-question">
                    <?php echo esc_html($faq['q']); ?>
                    <span class="faq-icon"></span>
                </button>
                <div class="faq-answer"><p><?php echo esc_html($faq['a']); ?></p></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- SECTION 10: FOOTER -->
<!-- ============================================ -->
<footer class="site-footer">
    <div class="footer-main">
        <div class="footer-brand">
            <h3>320 GRIT</h3>
            <p>Built with precision. Delivered with grit.</p>
        </div>
        <div class="footer-links">
            <div class="footer-col">
                <h4>Services</h4>
                <a href="<?php echo esc_url(home_url('/services/commercial')); ?>">Commercial</a>
                <a href="<?php echo esc_url(home_url('/services/residential')); ?>">Residential</a>
                <a href="<?php echo esc_url(home_url('/services/industrial')); ?>">Industrial</a>
                <a href="<?php echo esc_url(home_url('/services/renovation')); ?>">Renovation</a>
            </div>
            <div class="footer-col">
                <h4>Company</h4>
                <a href="<?php echo esc_url(home_url('/about')); ?>">About</a>
                <a href="<?php echo esc_url(home_url('/projects')); ?>">Projects</a>
                <a href="<?php echo esc_url(home_url('/careers')); ?>">Careers</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
            </div>
            <div class="footer-col">
                <h4>Contact</h4>
                <p>hello@320grit.com</p>
                <p>(512) 555-0147</p>
                <p>Austin, Texas</p>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> 320 GRIT. All rights reserved.</p>
        <div class="footer-legal">
            <a href="<?php echo esc_url(home_url('/privacy')); ?>">Privacy Policy</a>
            <a href="<?php echo esc_url(home_url('/terms')); ?>">Terms of Service</a>
        </div>
    </div>
</footer>