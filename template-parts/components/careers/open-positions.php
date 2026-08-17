<?php
/**
 * 320 Grit — Open Positions / All Jobs Page
 * Template for /careers/open-positions/
 */

if ( ! defined( 'ABSPATH' ) ) {
	require_once __DIR__ . '/job-data.php';
	$jobs = grit_get_demo_jobs();
} else {
	require_once __DIR__ . '/job-data.php';
	$jobs = grit_get_demo_jobs(); // Replace with WP_Query later
}

function grit_e( $text ) {
	echo esc_html( $text );
}
function grit_attr( $text ) {
	echo esc_attr( $text );
}

// Collect unique filter values
$departments = array_unique( array_column( $jobs, 'department' ) );
$locations   = array_unique( array_column( $jobs, 'location' ) );
$types       = array_unique( array_column( $jobs, 'employment_type' ) );
sort( $departments );
sort( $locations );
sort( $types );
?>

<div class="grit-careers-page grit-open-positions">

	<?php /* =========================================================
	   SECTION 01 — HERO
	   ========================================================= */ ?>
	<section class="grit-op-hero">
		<!-- <div class="grit-op-hero__bg">
			<div class="grit-careers-image grit-op-hero__image">
				<img src="YOUR-IMAGE-URL-OPEN-POSITIONS-HERO" alt="320 Grit construction team overlooking city skyline at sunset" width="1600" height="700" loading="eager">
			</div>
			<div class="grit-op-hero__overlay"></div>
		</div> -->
		<div class="grit-op-hero__content">
			<span class="grit-eyebrow">Open Positions</span>
			<h1 class="grit-op-hero__title">Build Your Career <span>With Purpose</span></h1>
			<p class="grit-op-hero__subtitle">Explore opportunities to lead, grow, and make an impact on projects that shape communities.</p>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 02 — SEARCH & FILTERS
	   ========================================================= */ ?>
	<section class="grit-op-filters" aria-label="Filter open positions">
		<div class="grit-op-filters__inner">
			<div class="grit-op-filters__search">
				<label for="grit-job-search" class="grit-sr-only">Search by job title or keyword</label>
				<svg class="grit-op-filters__search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/><path d="M20 20l-3-3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
				<input type="search" id="grit-job-search" class="grit-op-filters__input" placeholder="Search job title or keyword..." autocomplete="off">
			</div>

			<div class="grit-op-filters__selects">
				<div class="grit-op-filters__field">
					<label for="grit-filter-dept" class="grit-sr-only">Department</label>
					<select id="grit-filter-dept" class="grit-op-filters__select">
						<option value="">All Departments</option>
						<?php foreach ( $departments as $dept ) : ?>
							<option value="<?php grit_attr( $dept ); ?>"><?php grit_e( $dept ); ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="grit-op-filters__field">
					<label for="grit-filter-location" class="grit-sr-only">Location</label>
					<select id="grit-filter-location" class="grit-op-filters__select">
						<option value="">All Locations</option>
						<?php foreach ( $locations as $loc ) : ?>
							<option value="<?php grit_attr( $loc ); ?>"><?php grit_e( $loc ); ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="grit-op-filters__field">
					<label for="grit-filter-type" class="grit-sr-only">Employment Type</label>
					<select id="grit-filter-type" class="grit-op-filters__select">
						<option value="">All Types</option>
						<?php foreach ( $types as $type ) : ?>
							<option value="<?php grit_attr( $type ); ?>"><?php grit_e( $type ); ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<button type="button" class="grit-btn grit-btn--secondary grit-op-filters__clear" id="grit-clear-filters">
					Clear
				</button>
			</div>

			<!-- Mobile filter toggle -->
			<button type="button" class="grit-op-filters__mobile-toggle" id="grit-mobile-filter-toggle" aria-expanded="false" aria-controls="grit-mobile-filters">
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 6h16M4 12h10M4 18h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
				Filters
			</button>
		</div>

		<!-- Mobile filter drawer -->
		<div class="grit-op-filters__drawer" id="grit-mobile-filters" hidden>
			<div class="grit-op-filters__drawer-inner">
				<div class="grit-op-filters__drawer-header">
					<h3>Filters</h3>
					<button type="button" class="grit-op-filters__drawer-close" id="grit-mobile-filter-close" aria-label="Close filters">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
					</button>
				</div>
				<div class="grit-op-filters__drawer-body">
					<!-- Selects are cloned/moved via JS or duplicated for simplicity -->
					<div class="grit-op-filters__field">
						<label for="grit-filter-dept-m">Department</label>
						<select id="grit-filter-dept-m" class="grit-op-filters__select grit-filter-sync" data-sync="grit-filter-dept">
							<option value="">All Departments</option>
							<?php foreach ( $departments as $dept ) : ?>
								<option value="<?php grit_attr( $dept ); ?>"><?php grit_e( $dept ); ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="grit-op-filters__field">
						<label for="grit-filter-location-m">Location</label>
						<select id="grit-filter-location-m" class="grit-op-filters__select grit-filter-sync" data-sync="grit-filter-location">
							<option value="">All Locations</option>
							<?php foreach ( $locations as $loc ) : ?>
								<option value="<?php grit_attr( $loc ); ?>"><?php grit_e( $loc ); ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="grit-op-filters__field">
						<label for="grit-filter-type-m">Employment Type</label>
						<select id="grit-filter-type-m" class="grit-op-filters__select grit-filter-sync" data-sync="grit-filter-type">
							<option value="">All Types</option>
							<?php foreach ( $types as $type ) : ?>
								<option value="<?php grit_attr( $type ); ?>"><?php grit_e( $type ); ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="grit-op-filters__drawer-footer">
					<button type="button" class="grit-btn grit-btn--secondary" id="grit-clear-filters-m">Clear All</button>
					<button type="button" class="grit-btn grit-btn--primary" id="grit-apply-filters-m">Show Results</button>
				</div>
			</div>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 03 — JOB LISTINGS
	   ========================================================= */ ?>
	<section class="grit-op-listings">
		<div class="grit-op-listings__inner">
			<div class="grit-op-listings__count" id="grit-results-count" aria-live="polite">
				<strong><?php echo count( $jobs ); ?></strong> Open Positions
			</div>

			<div class="grit-job-cards grit-job-cards--directory" id="grit-job-list">
				<?php foreach ( $jobs as $job ) : ?>
					<article class="grit-job-card grit-job-card--directory"
						data-job-id="<?php grit_attr( $job['id'] ); ?>"
						data-title="<?php grit_attr( strtolower( $job['title'] ) ); ?>"
						data-department="<?php grit_attr( $job['department'] ); ?>"
						data-location="<?php grit_attr( $job['location'] ); ?>"
						data-type="<?php grit_attr( $job['employment_type'] ); ?>"
						data-desc="<?php grit_attr( strtolower( $job['short_desc'] ) ); ?>">

						<div class="grit-job-card__main">
							<div class="grit-job-card__header">
								<h2 class="grit-job-card__title">
									<a href="<?php echo esc_url( home_url( '/careers/' . $job['slug'] . '/' ) ); ?>">
										<?php grit_e( $job['title'] ); ?>
									</a>
								</h2>
								<button type="button" class="grit-save-job grit-save-job--icon" data-job-id="<?php grit_attr( $job['id'] ); ?>" aria-label="Save <?php grit_attr( $job['title'] ); ?>" aria-pressed="false">
									<svg class="grit-icon grit-save-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
										<path class="grit-save-outline" d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path class="grit-save-filled" d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z" fill="currentColor" style="display:none"/>
									</svg>
								</button>
							</div>

							<div class="grit-job-card__meta">
								<span class="grit-job-card__dept"><?php grit_e( $job['department'] ); ?></span>
								<span class="grit-job-card__dot">·</span>
								<span><?php grit_e( $job['location'] ); ?></span>
								<span class="grit-job-card__dot">·</span>
								<span><?php grit_e( $job['employment_type'] ); ?></span>
							</div>

							<p class="grit-job-card__desc"><?php grit_e( $job['short_desc'] ); ?></p>

							<div class="grit-job-card__footer">
								<span class="grit-job-card__date">Posted <?php echo esc_html( date( 'M j, Y', strtotime( $job['posted_date'] ) ) ); ?></span>
								<a href="<?php echo esc_url( home_url( '/careers/' . $job['slug'] . '/' ) ); ?>" class="grit-link-arrow grit-job-card__link">
									VIEW POSITION
									<svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
								</a>
							</div>
						</div>
					</article>
				<?php endforeach; ?>
			</div>

			<div class="grit-op-empty" id="grit-no-results" hidden>
				<svg width="48" height="48" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M20 20l-3-3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M8 11h6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
				<h3>No positions match your filters</h3>
				<p>Try adjusting your search or clearing filters to see more opportunities.</p>
				<button type="button" class="grit-btn grit-btn--primary" id="grit-empty-clear">Clear Filters</button>
			</div>

			<!-- Simple pagination / Load More placeholder -->
			<div class="grit-op-pagination" id="grit-pagination">
				<button type="button" class="grit-btn grit-btn--secondary" id="grit-load-more" hidden>
					Load More Positions
				</button>
			</div>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 04 — BOTTOM CTA
	   ========================================================= */ ?>
	<section class="grit-op-cta">
		<div class="grit-op-cta__inner">
			<div class="grit-op-cta__content">
				<h2 class="grit-op-cta__title">Don't See Your Role?</h2>
				<p class="grit-op-cta__text">We're always looking for talented people who share our values. Introduce yourself and we'll keep you in mind for future opportunities.</p>
			</div>
			<a href="<?php echo esc_url( home_url( '/careers/introduce-yourself/' ) ); ?>" class="grit-btn grit-btn--orange grit-btn--lg">
				INTRODUCE YOURSELF
				<svg class="grit-btn__arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</a>
		</div>
	</section>

</div><!-- .grit-careers-page -->
