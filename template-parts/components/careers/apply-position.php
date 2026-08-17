<?php
/**
 * 320 Grit — Apply for Position (Multi-step Application)
 * Template for /careers/apply/?job={slug}
 */

if ( ! defined( 'ABSPATH' ) ) {
	require_once __DIR__ . '/job-data.php';
	$job_slug = isset( $_GET['job'] ) ? sanitize_title( $_GET['job'] ) : 'project-manager';
	$job      = grit_get_job_by_slug( $job_slug );
	if ( ! $job ) {
		$job = grit_get_job_by_slug( 'project-manager' );
	}
} else {
	require_once __DIR__ . '/job-data.php';
	$job_slug = isset( $_GET['job'] ) ? sanitize_title( $_GET['job'] ) : 'project-manager';
	$job      = grit_get_job_by_slug( $job_slug );
	if ( ! $job ) {
		$job = grit_get_job_by_slug( 'project-manager' );
	}
}

function grit_e( $text ) {
	echo esc_html( $text );
}
function grit_attr( $text ) {
	echo esc_attr( $text );
}
?>

<div class="grit-careers-page grit-apply-page" data-job-slug="<?php grit_attr( $job['slug'] ); ?>">

	<?php /* =========================================================
	   SECTION 01 — APPLY HERO
	   ========================================================= */ ?>
	<section class="grit-apply-hero">
		<div class="grit-apply-hero__bg">
			<div class="grit-careers-image">
				<img src="YOUR-IMAGE-URL-APPLY-HERO" alt="320 Grit hard hat on construction site" width="1600" height="400" loading="eager">
			</div>
			<div class="grit-apply-hero__overlay"></div>
		</div>
		<div class="grit-apply-hero__content">
			<h1 class="grit-apply-hero__title">Apply For This Position</h1>
			<p class="grit-apply-hero__subtitle">We're excited you're interested in joining our team.</p>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 02 — APPLICATION LAYOUT
	   ========================================================= */ ?>
	<section class="grit-apply-layout">
		<div class="grit-apply-layout__inner">

			<!-- Position Summary Sidebar -->
			<aside class="grit-apply-sidebar">
				<div class="grit-apply-sidebar__card">
					<span class="grit-apply-sidebar__label">Position You're Applying For</span>
					<h2 class="grit-apply-sidebar__title"><?php grit_e( $job['title'] ); ?></h2>
					<div class="grit-apply-sidebar__meta">
						<span><?php grit_e( $job['location'] ); ?></span>
						<span class="grit-dot">·</span>
						<span><?php grit_e( $job['employment_type'] ); ?></span>
					</div>
					<a href="<?php echo esc_url( home_url( '/careers/' . $job['slug'] . '/' ) ); ?>" class="grit-link-arrow grit-apply-sidebar__change">
						Change Position
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</a>
				</div>
			</aside>

			<!-- Multi-step Form -->
			<div class="grit-apply-form-wrap">
				<?php /* =========================================================
				   SECTION 03 — PROGRESS INDICATOR
				   ========================================================= */ ?>
				<nav class="grit-apply-progress" aria-label="Application progress">
					<ol class="grit-apply-progress__list">
						<li class="grit-apply-progress__item is-active" data-step="1">
							<span class="grit-apply-progress__num">01</span>
							<span class="grit-apply-progress__label">Your Information</span>
						</li>
						<li class="grit-apply-progress__item" data-step="2">
							<span class="grit-apply-progress__num">02</span>
							<span class="grit-apply-progress__label">Experience</span>
						</li>
						<li class="grit-apply-progress__item" data-step="3">
							<span class="grit-apply-progress__num">03</span>
							<span class="grit-apply-progress__label">Resume & Documents</span>
						</li>
						<li class="grit-apply-progress__item" data-step="4">
							<span class="grit-apply-progress__num">04</span>
							<span class="grit-apply-progress__label">Review & Submit</span>
						</li>
					</ol>
				</nav>

				<form class="grit-apply-form" id="grit-application-form" novalidate>
					<input type="hidden" name="job_slug" value="<?php grit_attr( $job['slug'] ); ?>">
					<input type="hidden" name="job_title" value="<?php grit_attr( $job['title'] ); ?>">

					<?php /* =========================================================
					   SECTION 04 — STEP 1: PERSONAL INFORMATION
					   ========================================================= */ ?>
					<div class="grit-apply-step is-active" data-step="1" id="grit-step-1">
						<h2 class="grit-apply-step__title">Personal Information</h2>
						<p class="grit-apply-step__desc">Tell us a bit about yourself.</p>

						<div class="grit-form-grid">
							<div class="grit-form-field">
								<label for="grit-first-name">First Name <span class="grit-required">*</span></label>
								<input type="text" id="grit-first-name" name="first_name" required autocomplete="given-name">
								<span class="grit-field-error" role="alert"></span>
							</div>
							<div class="grit-form-field">
								<label for="grit-last-name">Last Name <span class="grit-required">*</span></label>
								<input type="text" id="grit-last-name" name="last_name" required autocomplete="family-name">
								<span class="grit-field-error" role="alert"></span>
							</div>
							<div class="grit-form-field">
								<label for="grit-email">Email Address <span class="grit-required">*</span></label>
								<input type="email" id="grit-email" name="email" required autocomplete="email">
								<span class="grit-field-error" role="alert"></span>
							</div>
							<div class="grit-form-field">
								<label for="grit-phone">Phone Number <span class="grit-required">*</span></label>
								<input type="tel" id="grit-phone" name="phone" required autocomplete="tel">
								<span class="grit-field-error" role="alert"></span>
							</div>
							<div class="grit-form-field grit-form-field--full">
								<label for="grit-location">Current Location (City, State) <span class="grit-required">*</span></label>
								<input type="text" id="grit-location" name="current_location" required autocomplete="address-level2">
								<span class="grit-field-error" role="alert"></span>
							</div>
							<div class="grit-form-field grit-form-field--full">
								<label for="grit-linkedin">LinkedIn Profile <span class="grit-optional">(Optional)</span></label>
								<input type="url" id="grit-linkedin" name="linkedin" placeholder="https://linkedin.com/in/yourprofile" autocomplete="url">
								<span class="grit-field-error" role="alert"></span>
							</div>
							<div class="grit-form-field grit-form-field--full">
								<label for="grit-hear-about">How did you hear about this position? <span class="grit-optional">(Optional)</span></label>
								<select id="grit-hear-about" name="hear_about">
									<option value="">Select an option</option>
									<option value="linkedin">LinkedIn</option>
									<option value="website">320 Grit Website</option>
									<option value="referral">Employee Referral</option>
									<option value="indeed">Indeed</option>
									<option value="other">Other</option>
								</select>
							</div>
						</div>
					</div>

					<?php /* =========================================================
					   SECTION 05 — STEP 2: EXPERIENCE
					   ========================================================= */ ?>
					<div class="grit-apply-step" data-step="2" id="grit-step-2" hidden>
						<h2 class="grit-apply-step__title">Experience</h2>
						<p class="grit-apply-step__desc">Help us understand your background.</p>

						<div class="grit-form-grid">
							<div class="grit-form-field">
								<label for="grit-years-exp">Years of Relevant Experience <span class="grit-required">*</span></label>
								<select id="grit-years-exp" name="years_experience" required>
									<option value="">Select</option>
									<option value="0-2">0–2 years</option>
									<option value="3-5">3–5 years</option>
									<option value="6-10">6–10 years</option>
									<option value="10+">10+ years</option>
								</select>
								<span class="grit-field-error" role="alert"></span>
							</div>
							<div class="grit-form-field">
								<label for="grit-current-title">Current / Most Recent Position <span class="grit-required">*</span></label>
								<input type="text" id="grit-current-title" name="current_title" required>
								<span class="grit-field-error" role="alert"></span>
							</div>
							<div class="grit-form-field grit-form-field--full">
								<label for="grit-current-company">Current / Most Recent Company <span class="grit-required">*</span></label>
								<input type="text" id="grit-current-company" name="current_company" required>
								<span class="grit-field-error" role="alert"></span>
							</div>
							<div class="grit-form-field grit-form-field--full">
								<label for="grit-relevant-exp">Relevant Experience Summary <span class="grit-required">*</span></label>
								<textarea id="grit-relevant-exp" name="relevant_experience" rows="5" required placeholder="Briefly describe your most relevant experience for this role..."></textarea>
								<span class="grit-field-error" role="alert"></span>
							</div>
							<div class="grit-form-field grit-form-field--full">
								<label for="grit-education">Education <span class="grit-required">*</span></label>
								<input type="text" id="grit-education" name="education" required placeholder="e.g. B.S. Construction Management, California State University">
								<span class="grit-field-error" role="alert"></span>
							</div>
							<div class="grit-form-field grit-form-field--full">
								<label for="grit-certifications">Certifications <span class="grit-optional">(Optional)</span></label>
								<input type="text" id="grit-certifications" name="certifications" placeholder="e.g. OSHA 30, PMP, LEED AP">
							</div>
						</div>
					</div>

					<?php /* =========================================================
					   SECTION 06 — STEP 3: RESUME & DOCUMENTS
					   ========================================================= */ ?>
					<div class="grit-apply-step" data-step="3" id="grit-step-3" hidden>
						<h2 class="grit-apply-step__title">Resume & Documents</h2>
						<p class="grit-apply-step__desc">Upload your resume and any supporting documents.</p>

						<div class="grit-form-grid">
							<div class="grit-form-field grit-form-field--full">
								<label for="grit-resume">Resume / CV <span class="grit-required">*</span></label>
								<div class="grit-file-upload" data-input="grit-resume">
									<input type="file" id="grit-resume" name="resume" accept=".pdf,.doc,.docx" required class="grit-file-input">
									<div class="grit-file-upload__zone">
										<svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 16V8M12 8l-3 3M12 8l3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M20 16.5V18a2 2 0 01-2 2H6a2 2 0 01-2-2v-1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
										<p class="grit-file-upload__text"><strong>Drag & drop your file here</strong> or <span class="grit-file-upload__browse">Browse File</span></p>
										<p class="grit-file-upload__hint">PDF, DOC, DOCX (Max 5MB)</p>
									</div>
									<div class="grit-file-upload__preview" hidden>
										<span class="grit-file-upload__name"></span>
										<button type="button" class="grit-file-upload__remove" aria-label="Remove file">×</button>
									</div>
								</div>
								<span class="grit-field-error" role="alert"></span>
							</div>

							<div class="grit-form-field grit-form-field--full">
								<label for="grit-additional-docs">Additional Documents <span class="grit-optional">(Optional)</span></label>
								<div class="grit-file-upload" data-input="grit-additional-docs">
									<input type="file" id="grit-additional-docs" name="additional_docs[]" accept=".pdf,.doc,.docx" multiple class="grit-file-input">
									<div class="grit-file-upload__zone">
										<svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 16V8M12 8l-3 3M12 8l3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M20 16.5V18a2 2 0 01-2 2H6a2 2 0 01-2-2v-1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
										<p class="grit-file-upload__text"><strong>Drag & drop files here</strong> or <span class="grit-file-upload__browse">Browse Files</span></p>
										<p class="grit-file-upload__hint">PDF, DOC, DOCX (Max 5MB each)</p>
									</div>
									<div class="grit-file-upload__preview" hidden>
										<span class="grit-file-upload__name"></span>
										<button type="button" class="grit-file-upload__remove" aria-label="Remove files">×</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php /* =========================================================
					   SECTION 07 — STEP 4: REVIEW & SUBMIT
					   ========================================================= */ ?>
					<div class="grit-apply-step" data-step="4" id="grit-step-4" hidden>
						<h2 class="grit-apply-step__title">Review & Submit</h2>
						<p class="grit-apply-step__desc">Please review your information before submitting.</p>

						<div class="grit-review-summary" id="grit-review-summary">
							<!-- Populated by JS -->
						</div>

						<div class="grit-form-field grit-form-field--full grit-consent">
							<label class="grit-checkbox-label">
								<input type="checkbox" id="grit-privacy-consent" name="privacy_consent" required>
								<span>I agree to the processing of my personal data in accordance with 320 Grit's privacy policy for recruitment purposes. <span class="grit-required">*</span></span>
							</label>
							<span class="grit-field-error" role="alert"></span>
						</div>
					</div>

					<?php /* =========================================================
					   SECTION 08 — FORM NAVIGATION
					   ========================================================= */ ?>
					<div class="grit-apply-nav">
						<button type="button" class="grit-btn grit-btn--secondary" id="grit-btn-back" hidden>
							Back
						</button>
						<button type="button" class="grit-btn grit-btn--primary" id="grit-btn-next">
							Next Step
							<svg class="grit-btn__arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</button>
						<button type="submit" class="grit-btn grit-btn--primary" id="grit-btn-submit" hidden>
							Submit Application
							<svg class="grit-btn__arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</button>
					</div>
				</form>

				<?php /* =========================================================
				   SECTION 09 — SUCCESS STATE
				   ========================================================= */ ?>
				<div class="grit-apply-success" id="grit-apply-success" hidden>
					<div class="grit-apply-success__icon">
						<svg width="64" height="64" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"/><path d="M8 12l3 3 5-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</div>
					<h2 class="grit-apply-success__title">Application Submitted</h2>
					<p class="grit-apply-success__text">Thank you for applying to the <strong id="grit-success-job-title"></strong> position. Our team will review your application and be in touch soon.</p>
					<div class="grit-apply-success__actions">
						<a href="<?php echo esc_url( home_url( '/careers/open-positions/' ) ); ?>" class="grit-btn grit-btn--primary">View Other Positions</a>
						<a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>" class="grit-btn grit-btn--secondary">Back to Careers</a>
					</div>
				</div>
			</div>
		</div>
	</section>

</div><!-- .grit-careers-page -->
