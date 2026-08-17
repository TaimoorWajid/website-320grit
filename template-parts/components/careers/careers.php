<?php
/**
 * 320 Grit — Careers Landing Page
 * Main entry point for /careers/
 *
 * Includes: Hero, Values, Culture, Open Positions preview,
 * Featured Position, Introduce Yourself CTA, Final CTA.
 * NO header / footer — those are provided globally by the theme.
 */

if ( ! defined( 'ABSPATH' ) ) {
	require_once __DIR__ . '/job-data.php';
	$jobs = grit_get_demo_jobs();
} else {
	require_once __DIR__ . '/job-data.php';
	$jobs = grit_get_demo_jobs(); // Replace with CPT query later
}

// Featured job (first one or specific)
$featured_job = $jobs[0] ?? null;

// Preview cards (first 5)
$preview_jobs = array_slice( $jobs, 0, 5 );

function grit_e( $text ) {
	echo esc_html( $text );
}
function grit_attr( $text ) {
	echo esc_attr( $text );
}
?>

<div class="grit-careers-page grit-careers-landing">

	<?php /* =========================================================
	   SECTION 01 — HERO
	   ========================================================= */ ?>
	<section class="grit-cl-hero">
		<div class="grit-cl-hero__bg">
			<div class="grit-careers-image grit-cl-hero__image">
				<img src="/wp-content/uploads/2026/08/labour-320-grit.webp" alt="320 Grit construction professionals overlooking city skyline at sunset" width="1600" height="800" loading="eager">
			</div>
			<div class="grit-cl-hero__overlay"></div>
		</div>

		<div class="grit-cl-hero__content">
			<div class="grit-cl-hero__text">
				<h1 class="grit-cl-hero__title">
					<span class="grit-cl-hero__title-line">Build What’s</span>
					<span class="grit-cl-hero__title-accent">Next With Us</span>
				</h1>
				<p class="grit-cl-hero__subtitle">
					At 320 Grit, we build more than projects — we build people, partnerships, and a better future.
				</p>
				<div class="grit-cl-hero__actions">
					<a href="<?php echo esc_url( home_url( '/careers/open-positions/' ) ); ?>" class="grit-btn grit-btn--primary grit-btn--lg">
						VIEW OPEN POSITIONS
						<svg class="grit-btn__arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</a>
					<a href="#our-culture" class="grit-btn grit-btn--outline grit-btn--lg">
						OUR CULTURE
					</a>
				</div>
			</div>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 02 — WHY JOIN 320 GRIT (VALUES)
	   ========================================================= */ ?>
	<section class="grit-cl-values" aria-labelledby="grit-values-heading">
		<div class="grit-cl-values__inner">
			<span class="grit-eyebrow">Why Join 320 Grit</span>
			<h2 id="grit-values-heading" class="grit-cl-values__title">Strong Values. Stronger Together.</h2>
			<p class="grit-cl-values__subtitle">Our people are the foundation of our success. We invest in our team and empower them to build extraordinary things.</p>

			<div class="grit-cl-values__grid">
				<article class="grit-cl-value-card">
					<div class="grit-cl-value-card__icon" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="1.5"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
					</div>
					<h3 class="grit-cl-value-card__title">Purpose Driven</h3>
					<p class="grit-cl-value-card__text">We take pride in building meaningful projects that strengthen communities.</p>
				</article>

				<article class="grit-cl-value-card">
					<div class="grit-cl-value-card__icon" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="1.5"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
					</div>
					<h3 class="grit-cl-value-card__title">Collaborative</h3>
					<p class="grit-cl-value-card__text">We believe the best results come from open communication and trust.</p>
				</article>

				<article class="grit-cl-value-card">
					<div class="grit-cl-value-card__icon" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M3 3v18h18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M7 14l4-4 4 4 5-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</div>
					<h3 class="grit-cl-value-card__title">Growth Mindset</h3>
					<p class="grit-cl-value-card__text">We support your development and provide paths to grow your career.</p>
				</article>

				<article class="grit-cl-value-card">
					<div class="grit-cl-value-card__icon" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</div>
					<h3 class="grit-cl-value-card__title">Integrity</h3>
					<p class="grit-cl-value-card__text">We do the right thing, on every project, every time.</p>
				</article>

				<article class="grit-cl-value-card">
					<div class="grit-cl-value-card__icon" aria-hidden="true">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none"><path d="M12 2L4 6v6c0 5 3.5 9 8 10 4.5-1 8-5 8-10V6l-8-4z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</div>
					<h3 class="grit-cl-value-card__title">Safety First</h3>
					<p class="grit-cl-value-card__text">We protect our people and promote a culture of safety always.</p>
				</article>
			</div>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 03 — OUR CULTURE
	   ========================================================= */ ?>
	<section class="grit-cl-culture" id="our-culture" aria-labelledby="grit-culture-heading">
		<div class="grit-cl-culture__inner">
			<div class="grit-cl-culture__content">
				<span class="grit-eyebrow">Our Culture</span>
				<h2 id="grit-culture-heading" class="grit-cl-culture__title">
					Built on People.<br>
					<span>Driven by Excellence.</span>
				</h2>
				<p class="grit-cl-culture__text">
					We are builders, problem solvers, and innovators. We value ownership, initiative, and a commitment to raising the standard—together.
				</p>
				<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="grit-btn grit-btn--outline-light">
					LEARN MORE ABOUT US
					<svg class="grit-btn__arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</a>
			</div>

			<div class="grit-cl-culture__gallery">
				<div class="grit-cl-culture__img grit-cl-culture__img--1">
					<div class="grit-careers-image">
						<img src="/wp-content/uploads/2026/08/ChatGPT-Image-Aug-4-2026-01_52_54-AM-1.webp" alt="320 Grit team in a strategy meeting" width="480" height="280" loading="lazy">
					</div>
				</div>
				<div class="grit-cl-culture__img grit-cl-culture__img--2">
					<div class="grit-careers-image">
						<img src="/wp-content/uploads/2026/08/ChatGPT-Image-Aug-3-2026-05_11_51-PM.webp" alt="320 Grit team group photo on site" width="480" height="280" loading="lazy">
					</div>
				</div>
				<div class="grit-cl-culture__img grit-cl-culture__img--3">
					<div class="grit-careers-image">
						<img src="/wp-content/uploads/2026/08/contact-us-bg.webp" alt="Construction crane at sunset on a 320 Grit project" width="480" height="580" loading="lazy">
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 04 — OPEN POSITIONS PREVIEW
	   ========================================================= */ ?>
	<section class="grit-cl-positions" aria-labelledby="grit-positions-heading">
		<div class="grit-cl-positions__inner">
			<span class="grit-eyebrow">Open Positions</span>
			<h2 id="grit-positions-heading" class="grit-cl-positions__title">Find Your Next <span>Opportunity</span></h2>

			<div class="grit-cl-positions__filters" role="tablist" aria-label="Filter by department">
				<button type="button" class="grit-cl-filter-pill is-active" data-dept="all" role="tab" aria-selected="true">All Departments</button>
				<button type="button" class="grit-cl-filter-pill" data-dept="Project Management" role="tab" aria-selected="false">Project Management</button>
				<button type="button" class="grit-cl-filter-pill" data-dept="Field Operations" role="tab" aria-selected="false">Field Operations</button>
				<button type="button" class="grit-cl-filter-pill" data-dept="Preconstruction" role="tab" aria-selected="false">Preconstruction</button>
				<button type="button" class="grit-cl-filter-pill" data-dept="Corporate" role="tab" aria-selected="false">Corporate</button>
			</div>

			<div class="grit-cl-positions__grid" id="grit-preview-jobs">
				<?php foreach ( $preview_jobs as $job ) : ?>
					<article class="grit-cl-job-card" data-department="<?php grit_attr( $job['department'] ); ?>" data-job-id="<?php grit_attr( $job['id'] ); ?>">
						<div class="grit-cl-job-card__icon" aria-hidden="true">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
						</div>
						<h3 class="grit-cl-job-card__title">
							<a href="<?php echo esc_url( home_url( '/careers/' . $job['slug'] . '/' ) ); ?>">
								<?php grit_e( $job['title'] ); ?>
							</a>
						</h3>
						<div class="grit-cl-job-card__meta">
							<span class="grit-cl-job-card__location">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z" fill="currentColor"/></svg>
								<?php grit_e( $job['location'] ); ?>
							</span>
							<span class="grit-cl-job-card__type">
								<svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z" fill="currentColor"/></svg>
								<?php grit_e( $job['employment_type'] ); ?>
							</span>
						</div>
						<p class="grit-cl-job-card__desc"><?php grit_e( $job['short_desc'] ); ?></p>
						<a href="<?php echo esc_url( home_url( '/careers/' . $job['slug'] . '/' ) ); ?>" class="grit-link-arrow">
							VIEW POSITION
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</a>
					</article>
				<?php endforeach; ?>
			</div>

			<div class="grit-cl-positions__cta">
				<a href="<?php echo esc_url( home_url( '/careers/open-positions/' ) ); ?>" class="grit-btn grit-btn--primary grit-btn--lg">
					VIEW ALL POSITIONS
					<svg class="grit-btn__arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</a>
			</div>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 05 — FEATURED POSITION
	   ========================================================= */ ?>
	<?php if ( $featured_job ) : ?>
	<section class="grit-cl-featured" aria-labelledby="grit-featured-heading">
		<div class="grit-cl-featured__inner">
			<div class="grit-cl-featured__main">
				<span class="grit-cl-featured__badge">Featured Position</span>
				<h2 id="grit-featured-heading" class="grit-cl-featured__title"><?php grit_e( $featured_job['title'] ); ?></h2>
				<div class="grit-cl-featured__meta">
					<span>
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z" fill="currentColor"/></svg>
						<?php grit_e( $featured_job['location'] ); ?>
					</span>
					<span>
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z" fill="currentColor"/></svg>
						<?php grit_e( $featured_job['employment_type'] ); ?>
					</span>
				</div>
				<p class="grit-cl-featured__excerpt"><?php grit_e( $featured_job['excerpt'] ); ?></p>
				<div class="grit-cl-featured__actions">
					<a href="<?php echo esc_url( home_url( '/careers/apply/?job=' . $featured_job['slug'] ) ); ?>" class="grit-btn grit-btn--primary">
						APPLY NOW
						<svg class="grit-btn__arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</a>
				</div>
			</div>

			<div class="grit-cl-featured__details">
				<div class="grit-cl-featured__col">
					<h3 class="grit-cl-featured__col-title">Key Responsibilities</h3>
					<ul class="grit-cl-featured__list">
						<?php foreach ( array_slice( $featured_job['responsibilities'], 0, 5 ) as $item ) : ?>
							<li>
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><path d="M8 12l3 3 5-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
								<?php grit_e( $item ); ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="grit-cl-featured__col">
					<h3 class="grit-cl-featured__col-title">Qualifications</h3>
					<ul class="grit-cl-featured__list">
						<?php foreach ( array_slice( $featured_job['qualifications'], 0, 4 ) as $item ) : ?>
							<li>
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><path d="M8 12l3 3 5-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
								<?php grit_e( $item ); ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="grit-cl-featured__col">
					<h3 class="grit-cl-featured__col-title">What We Offer</h3>
					<ul class="grit-cl-featured__list">
						<?php foreach ( array_slice( $featured_job['benefits'], 0, 5 ) as $item ) : ?>
							<li>
								<svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><path d="M8 12l3 3 5-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
								<?php grit_e( $item ); ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<?php /* =========================================================
	   SECTION 06 — DON'T SEE YOUR ROLE
	   ========================================================= */ ?>
	<section class="grit-cl-introduce">
		<div class="grit-cl-introduce__inner">
			<div class="grit-cl-introduce__content">
				<span class="grit-eyebrow">Don’t See Your Role?</span>
				<h2 class="grit-cl-introduce__title">We’re Always Looking for <span>Great People.</span></h2>
				<p class="grit-cl-introduce__text">
					If you don’t see a current opening that fits, we’d still love to hear from you.
				</p>
				<a href="<?php echo esc_url( home_url( '/careers/introduce-yourself/' ) ); ?>" class="grit-btn grit-btn--outline">
					INTRODUCE YOURSELF
					<svg class="grit-btn__arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</a>
			</div>
			<div class="grit-cl-introduce__visual">
				<div class="grit-careers-image grit-cl-introduce__image">
					<img src="/wp-content/uploads/2026/08/320-grit-hat.webp" alt="320 Grit hard hat on a rooftop overlooking the city" width="520" height="360" loading="lazy">
				</div>
			</div>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 07 — FINAL CTA
	   ========================================================= */ ?>
	<section class="grit-cl-final">
		<div class="grit-cl-final__inner">
			<h2 class="grit-cl-final__title">Great projects start with <span>great people.</span></h2>
			<a href="<?php echo esc_url( home_url( '/careers/open-positions/' ) ); ?>" class="grit-btn grit-btn--primary grit-btn--lg">
				JOIN 320 GRIT
				<svg class="grit-btn__arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</a>
		</div>
	</section>

</div><!-- .grit-careers-page -->
