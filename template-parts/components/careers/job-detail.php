<?php
/**
 * 320 Grit — Job Detail / View Position Page
 * Template for /careers/{job-slug}/
 *
 * Usage in WordPress:
 * - Create a page template or use a single-job_position.php CPT template.
 * - Pass $job via query var or load by slug.
 *
 * For demo: expects $job_slug or defaults to 'project-manager'.
 */

if ( ! defined( 'ABSPATH' ) ) {
	// Development fallback
	require_once __DIR__ . '/job-data.php';
	$job_slug = isset( $_GET['job'] ) ? sanitize_title( $_GET['job'] ) : 'project-manager';
	$job      = grit_get_job_by_slug( $job_slug );
	if ( ! $job ) {
		$job = grit_get_job_by_slug( 'project-manager' );
	}
} else {
	// WordPress context — replace with CPT query later
	require_once __DIR__ . '/job-data.php';
	$job_slug = get_query_var( 'job_slug' ) ?: 'project-manager';
	$job      = grit_get_job_by_slug( $job_slug );
	if ( ! $job ) {
		// Fallback or 404
		$job = grit_get_job_by_slug( 'project-manager' );
	}
}

$related_jobs = grit_get_related_jobs( $job['slug'], 3 );

// Helper for safe output
function grit_e( $text ) {
	echo esc_html( $text );
}
function grit_attr( $text ) {
	echo esc_attr( $text );
}
?>

<div class="grit-careers-page grit-job-detail" data-job-id="<?php grit_attr( $job['id'] ); ?>">

	<?php /* =========================================================
	   SECTION 01 — BREADCRUMB
	   ========================================================= */ ?>
	<nav class="grit-breadcrumb" aria-label="Breadcrumb">
		<ol class="grit-breadcrumb__list">
			<li class="grit-breadcrumb__item">
				<a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>" class="grit-breadcrumb__link">Careers</a>
			</li>
			<li class="grit-breadcrumb__separator" aria-hidden="true">/</li>
			<li class="grit-breadcrumb__item">
				<a href="<?php echo esc_url( home_url( '/careers/open-positions/' ) ); ?>" class="grit-breadcrumb__link">Open Positions</a>
			</li>
			<li class="grit-breadcrumb__separator" aria-hidden="true">/</li>
			<li class="grit-breadcrumb__item grit-breadcrumb__item--current" aria-current="page">
				<?php grit_e( $job['title'] ); ?>
			</li>
		</ol>
	</nav>

	<?php /* =========================================================
	   SECTION 02 — JOB HERO
	   ========================================================= */ ?>
	<section class="grit-job-hero">
		<div class="grit-job-hero__content">
			<div class="grit-job-hero__meta">
				<span class="grit-job-hero__location">
					<svg class="grit-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z" fill="currentColor"/></svg>
					<?php grit_e( $job['location'] ); ?>
				</span>
				<span class="grit-job-hero__type">
					<svg class="grit-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z" fill="currentColor"/></svg>
					<?php grit_e( $job['employment_type'] ); ?>
				</span>
			</div>

			<h1 class="grit-job-hero__title"><?php grit_e( $job['title'] ); ?></h1>

			<p class="grit-job-hero__excerpt"><?php grit_e( $job['excerpt'] ); ?></p>

			<div class="grit-job-hero__actions">
				<a href="<?php echo esc_url( home_url( '/careers/apply/?job=' . $job['slug'] ) ); ?>" class="grit-btn grit-btn--primary grit-btn--lg">
					APPLY NOW
					<svg class="grit-btn__arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</a>
			</div>

			<div class="grit-job-hero__share">
				<span class="grit-job-hero__share-label">Share this position</span>
				<div class="grit-share-links">
					<button type="button" class="grit-share-btn" data-share="linkedin" aria-label="Share on LinkedIn">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19 3a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14m-.5 15.5v-5.3a3.26 3.26 0 00-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 011.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 001.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 00-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
					</button>
					<button type="button" class="grit-share-btn" data-share="email" aria-label="Share via Email">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="2"/><path d="M22 6l-10 7L2 6" stroke="currentColor" stroke-width="2"/></svg>
					</button>
					<button type="button" class="grit-share-btn" data-share="copy" aria-label="Copy link">
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
					</button>
				</div>
			</div>
		</div>

		<div class="grit-job-hero__visual">
			<div class="grit-careers-image grit-job-hero__image">
				<img src="YOUR-IMAGE-URL-JOB-HERO" alt="320 Grit construction professionals on site at sunset" width="600" height="700" loading="eager">
			</div>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 03 — ROLE OVERVIEW + JOB DETAILS
	   ========================================================= */ ?>
	<section class="grit-role-overview">
		<div class="grit-role-overview__main">
			<div class="grit-tabs" role="tablist" aria-label="Job information">
				<button type="button" class="grit-tabs__btn is-active" role="tab" aria-selected="true" aria-controls="panel-overview" id="tab-overview" data-tab="overview">Overview</button>
				<button type="button" class="grit-tabs__btn" role="tab" aria-selected="false" aria-controls="panel-responsibilities" id="tab-responsibilities" data-tab="responsibilities">Responsibilities</button>
				<button type="button" class="grit-tabs__btn" role="tab" aria-selected="false" aria-controls="panel-qualifications" id="tab-qualifications" data-tab="qualifications">Qualifications</button>
				<button type="button" class="grit-tabs__btn" role="tab" aria-selected="false" aria-controls="panel-benefits" id="tab-benefits" data-tab="benefits">Benefits</button>
			</div>

			<div class="grit-tabs__panels">
				<div class="grit-tabs__panel is-active" id="panel-overview" role="tabpanel" aria-labelledby="tab-overview">
					<h2 class="grit-section-title">About The Role</h2>
					<p class="grit-body-text"><?php grit_e( $job['overview'] ); ?></p>
				</div>

				<div class="grit-tabs__panel" id="panel-responsibilities" role="tabpanel" aria-labelledby="tab-responsibilities" hidden>
					<h2 class="grit-section-title">Key Responsibilities</h2>
					<ul class="grit-check-list">
						<?php foreach ( $job['responsibilities'] as $item ) : ?>
							<li class="grit-check-list__item">
								<svg class="grit-check-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"/><path d="M8 12l3 3 5-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
								<span><?php grit_e( $item ); ?></span>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>

				<div class="grit-tabs__panel" id="panel-qualifications" role="tabpanel" aria-labelledby="tab-qualifications" hidden>
					<h2 class="grit-section-title">Qualifications</h2>
					<ul class="grit-check-list">
						<?php foreach ( $job['qualifications'] as $item ) : ?>
							<li class="grit-check-list__item">
								<svg class="grit-check-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"/><path d="M8 12l3 3 5-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
								<span><?php grit_e( $item ); ?></span>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>

				<div class="grit-tabs__panel" id="panel-benefits" role="tabpanel" aria-labelledby="tab-benefits" hidden>
					<h2 class="grit-section-title">What We Offer</h2>
					<ul class="grit-check-list">
						<?php foreach ( $job['benefits'] as $item ) : ?>
							<li class="grit-check-list__item">
								<svg class="grit-check-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"/><path d="M8 12l3 3 5-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
								<span><?php grit_e( $item ); ?></span>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>

		<aside class="grit-job-details-card">
			<h3 class="grit-job-details-card__title">Job Details</h3>
			<dl class="grit-job-details-list">
				<div class="grit-job-details-list__row">
					<dt>Department</dt>
					<dd><?php grit_e( $job['department'] ); ?></dd>
				</div>
				<div class="grit-job-details-list__row">
					<dt>Reports To</dt>
					<dd><?php grit_e( $job['reports_to'] ); ?></dd>
				</div>
				<div class="grit-job-details-list__row">
					<dt>Employment Type</dt>
					<dd><?php grit_e( $job['employment_type'] ); ?></dd>
				</div>
				<div class="grit-job-details-list__row">
					<dt>Location</dt>
					<dd><?php grit_e( $job['location'] ); ?></dd>
				</div>
				<div class="grit-job-details-list__row">
					<dt>Travel</dt>
					<dd><?php grit_e( $job['travel'] ); ?></dd>
				</div>
			</dl>

			<div class="grit-why-grit">
				<h4 class="grit-why-grit__title">Why 320 Grit?</h4>
				<ul class="grit-why-grit__list">
					<?php foreach ( $job['why_grit'] as $reason ) : ?>
						<li>
							<svg class="grit-check-icon grit-check-icon--sm" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 13l4 4L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
							<?php grit_e( $reason ); ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="grit-careers-image grit-job-details-card__image">
				<img src="YOUR-IMAGE-URL-SIDE-CARD" alt="320 Grit construction site with crane at sunset" width="360" height="220" loading="lazy">
			</div>
		</aside>
	</section>

	<?php /* =========================================================
	   SECTION 04 — RELATED POSITIONS
	   ========================================================= */ ?>
	<section class="grit-related-positions">
		<div class="grit-related-positions__header">
			<h2 class="grit-section-title">Similar Positions</h2>
			<a href="<?php echo esc_url( home_url( '/careers/open-positions/' ) ); ?>" class="grit-link-arrow">
				View All Positions
				<svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</a>
		</div>

		<div class="grit-job-cards grit-job-cards--related">
			<?php foreach ( $related_jobs as $related ) : ?>
				<article class="grit-job-card" data-job-id="<?php grit_attr( $related['id'] ); ?>">
					<div class="grit-job-card__header">
						<h3 class="grit-job-card__title">
							<a href="<?php echo esc_url( home_url( '/careers/' . $related['slug'] . '/' ) ); ?>">
								<?php grit_e( $related['title'] ); ?>
							</a>
						</h3>
						<button type="button" class="grit-save-job grit-save-job--icon" data-job-id="<?php grit_attr( $related['id'] ); ?>" aria-label="Save <?php grit_attr( $related['title'] ); ?>" aria-pressed="false">
							<svg class="grit-icon grit-save-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
								<path class="grit-save-outline" d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path class="grit-save-filled" d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z" fill="currentColor" style="display:none"/>
							</svg>
						</button>
					</div>
					<div class="grit-job-card__meta">
						<span><?php grit_e( $related['location'] ); ?></span>
						<span class="grit-job-card__dot">·</span>
						<span><?php grit_e( $related['employment_type'] ); ?></span>
					</div>
					<p class="grit-job-card__desc"><?php grit_e( $related['short_desc'] ); ?></p>
					<a href="<?php echo esc_url( home_url( '/careers/' . $related['slug'] . '/' ) ); ?>" class="grit-link-arrow grit-job-card__link">
						VIEW POSITION
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</a>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 05 — FINAL CTA
	   ========================================================= */ ?>
	<section class="grit-final-cta">
		<div class="grit-final-cta__inner">
			<div class="grit-final-cta__content">
				<span class="grit-eyebrow">Ready to join the team?</span>
				<h2 class="grit-final-cta__title">Apply for <?php grit_e( $job['title'] ); ?></h2>
				<p class="grit-final-cta__text">Take the next step in your career with 320 Grit. We’re looking for people who build with purpose.</p>
			</div>
			<div class="grit-final-cta__actions">
				<a href="<?php echo esc_url( home_url( '/careers/apply/?job=' . $job['slug'] ) ); ?>" class="grit-btn grit-btn--primary grit-btn--lg">
					APPLY NOW
					<svg class="grit-btn__arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</a>
			</div>
		</div>
	</section>

</div><!-- .grit-careers-page -->
