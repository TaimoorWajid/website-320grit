<?php
/**
 * 320 Grit — Thank You Page
 * Shown after successful job application or Introduce Yourself submission.
 *
 * Suggested URL: /careers/thank-you/
 * Optional query params:
 *   ?type=application   → job application confirmation
 *   ?type=interest      → general interest confirmation
 *   ?job=project-manager → show specific job title
 */

if ( ! defined( 'ABSPATH' ) ) {
	require_once __DIR__ . '/job-data.php';
	$type     = isset( $_GET['type'] ) ? sanitize_key( $_GET['type'] ) : 'application';
	$job_slug = isset( $_GET['job'] ) ? sanitize_title( $_GET['job'] ) : '';
	$job      = $job_slug ? grit_get_job_by_slug( $job_slug ) : null;
} else {
    require_once __DIR__ . '/job-data.php';
    $type     = isset( $_GET['type'] ) ? sanitize_key( $_GET['type'] ) : 'application';
    $job_slug = isset( $_GET['job'] ) ? sanitize_title( $_GET['job'] ) : '';
    $job      = $job_slug ? grit_get_job_by_slug( $job_slug ) : null;
}

$is_interest = ( $type === 'interest' );

function grit_e( $text ) {
	echo esc_html( $text );
}
function grit_attr( $text ) {
	echo esc_attr( $text );
}
?>

<div class="grit-careers-page grit-thank-you-page">

	<?php /* =========================================================
	   SECTION 01 — THANK YOU HERO
	   ========================================================= */ ?>
	<section class="grit-ty-hero">
		<!-- <div class="grit-ty-hero__bg">
			<div class="grit-careers-image">
				<img src="YOUR-IMAGE-URL-THANK-YOU-HERO" alt="320 Grit construction skyline at dusk" width="1600" height="480" loading="eager">
			</div>
			<div class="grit-ty-hero__overlay"></div>
		</div> -->
		<div class="grit-ty-hero__content">
			<div class="grit-ty-hero__icon" aria-hidden="true">
				<svg width="64" height="64" viewBox="0 0 24 24" fill="none">
					<circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"/>
					<path d="M8 12l3 3 5-6" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</div>
			<h1 class="grit-ty-hero__title">Thank You</h1>
			<?php if ( $is_interest ) : ?>
				<p class="grit-ty-hero__subtitle">
					We've received your information and will keep you in mind for future opportunities that match your background and interests.
				</p>
			<?php elseif ( $job ) : ?>
				<p class="grit-ty-hero__subtitle">
					Your application for <strong><?php grit_e( $job['title'] ); ?></strong> has been submitted successfully. Our team will review it and be in touch soon.
				</p>
			<?php else : ?>
				<p class="grit-ty-hero__subtitle">
					Your application has been submitted successfully. Our recruiting team will review your materials and reach out if there's a strong match.
				</p>
			<?php endif; ?>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 02 — WHAT HAPPENS NEXT
	   ========================================================= */ ?>
	<section class="grit-ty-next">
		<div class="grit-ty-next__inner">
			<h2 class="grit-ty-next__title">What Happens Next</h2>
			<div class="grit-ty-next__steps">
				<article class="grit-ty-step">
					<span class="grit-ty-step__num">01</span>
					<h3 class="grit-ty-step__title">We Review</h3>
					<p class="grit-ty-step__text">Our team carefully reviews every application against the role requirements and our values.</p>
				</article>
				<article class="grit-ty-step">
					<span class="grit-ty-step__num">02</span>
					<h3 class="grit-ty-step__title">We Reach Out</h3>
					<p class="grit-ty-step__text">If there's a strong fit, a member of our recruiting or hiring team will contact you directly.</p>
				</article>
				<article class="grit-ty-step">
					<span class="grit-ty-step__num">03</span>
					<h3 class="grit-ty-step__title">We Connect</h3>
					<p class="grit-ty-step__text">Next steps may include a conversation, interview, or additional information request.</p>
				</article>
			</div>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 03 — HELPFUL ACTIONS
	   ========================================================= */ ?>
	<section class="grit-ty-actions">
		<div class="grit-ty-actions__inner">
			<div class="grit-ty-actions__card">
				<h3 class="grit-ty-actions__card-title">Explore Other Opportunities</h3>
				<p class="grit-ty-actions__card-text">While you wait, browse additional open positions that might also be a good fit.</p>
				<a href="<?php echo esc_url( home_url( '/careers/open-positions/' ) ); ?>" class="grit-btn grit-btn--primary">
					VIEW OPEN POSITIONS
					<svg class="grit-btn__arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</a>
			</div>
			<div class="grit-ty-actions__card">
				<h3 class="grit-ty-actions__card-title">Learn About Our Culture</h3>
				<p class="grit-ty-actions__card-text">Get a deeper sense of who we are, how we work, and what it means to build with 320 Grit.</p>
				<a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>#our-culture" class="grit-btn grit-btn--outline">
					OUR CULTURE
					<svg class="grit-btn__arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</a>
			</div>
			<div class="grit-ty-actions__card">
				<h3 class="grit-ty-actions__card-title">Stay Connected</h3>
				<p class="grit-ty-actions__card-text">Follow us for project updates, company news, and future career opportunities.</p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="grit-btn grit-btn--outline">
					BACK TO HOME
					<svg class="grit-btn__arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</a>
			</div>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 04 — FINAL MESSAGE
	   ========================================================= */ ?>
	<section class="grit-ty-final">
		<div class="grit-ty-final__inner">
			<p class="grit-ty-final__text">Great projects start with <span>great people.</span></p>
			<p class="grit-ty-final__note">We appreciate your interest in 320 Grit.</p>
		</div>
		<div class="grit-footer__bottom"></div>
	</section>

</div><!-- .grit-careers-page -->
