<?php
/**
 * 320 Grit — Saved Positions Page
 * Template for /careers/saved/
 * Jobs are loaded via JS from localStorage; PHP provides the shell + demo data for hydration.
 */

if ( ! defined( 'ABSPATH' ) ) {
	require_once __DIR__ . '/job-data.php';
	$all_jobs = grit_get_demo_jobs();
} else {
		require_once __DIR__ . '/job-data.php';
	$all_jobs = grit_get_demo_jobs();
}

function grit_e( $text ) {
	echo esc_html( $text );
}
function grit_attr( $text ) {
	echo esc_attr( $text );
}

// Output jobs as JSON for JS hydration
$jobs_json = wp_json_encode( array_map( function ( $j ) {
	return array(
		'id'              => $j['id'],
		'slug'            => $j['slug'],
		'title'           => $j['title'],
		'department'      => $j['department'],
		'location'        => $j['location'],
		'employment_type' => $j['employment_type'],
	);
}, $all_jobs ) );
?>

<div class="grit-careers-page grit-saved-positions">

	<?php /* =========================================================
	   SECTION 01 — HERO
	   ========================================================= */ ?>
	<section class="grit-saved-hero">
		<div class="grit-saved-hero__bg">
			<div class="grit-careers-image">
				<img src="YOUR-IMAGE-URL-SAVED-HERO" alt="320 Grit construction site at dusk" width="1600" height="360" loading="eager">
			</div>
			<div class="grit-saved-hero__overlay"></div>
		</div>
		<div class="grit-saved-hero__content">
			<h1 class="grit-saved-hero__title">Saved For Later</h1>
			<p class="grit-saved-hero__subtitle">Jobs you've saved for future consideration.</p>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 02 — SAVED JOBS LIST
	   ========================================================= */ ?>
	<section class="grit-saved-list-section">
		<div class="grit-saved-list-section__inner">

			<div class="grit-saved-count" id="grit-saved-count" aria-live="polite">
				<!-- Populated by JS -->
			</div>

			<div class="grit-saved-list" id="grit-saved-list">
				<!-- Populated by JS from localStorage -->
			</div>

			<?php /* =========================================================
			   SECTION 03 — EMPTY STATE
			   ========================================================= */ ?>
			<div class="grit-saved-empty" id="grit-saved-empty" hidden>
				<svg width="56" height="56" viewBox="0 0 24 24" fill="none" aria-hidden="true">
					<path d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
				<h2 class="grit-saved-empty__title">No Saved Positions Yet</h2>
				<p class="grit-saved-empty__text">Save positions you're interested in and come back when you're ready.</p>
				<a href="<?php echo esc_url( home_url( '/careers/open-positions/' ) ); ?>" class="grit-btn grit-btn--primary">
					VIEW ALL POSITIONS
					<svg class="grit-btn__arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</a>
			</div>

			<div class="grit-saved-footer" id="grit-saved-footer" hidden>
				<p class="grit-saved-footer__note">Don't see a job you saved? It may have been closed or removed.</p>
				<a href="<?php echo esc_url( home_url( '/careers/open-positions/' ) ); ?>" class="grit-btn grit-btn--primary">
					BROWSE ALL POSITIONS
					<svg class="grit-btn__arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</a>
			</div>
		</div>
	</section>

</div>

<script type="application/json" id="grit-jobs-data"><?php echo $jobs_json; // phpcs:ignore ?></script>
