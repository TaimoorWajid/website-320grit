<?php
/**
 * 320 Grit — Introduce Yourself / General Interest Page
 * Template for /careers/introduce-yourself/
 */

if ( ! defined( 'ABSPATH' ) ) {
	// Standalone preview
}

function grit_e( $text ) {
	echo esc_html( $text );
}
function grit_attr( $text ) {
	echo esc_attr( $text );
}
?>

<div class="grit-careers-page grit-introduce-page">

	<?php /* =========================================================
	   SECTION 01 — HERO
	   ========================================================= */ ?>
	<section class="grit-intro-hero">
		<!-- <div class="grit-intro-hero__bg">
			<div class="grit-careers-image">
				<img src="YOUR-IMAGE-URL-INTRODUCE-HERO" alt="320 Grit team collaborating in a modern meeting room" width="1600" height="500" loading="eager">
			</div>
			<div class="grit-intro-hero__overlay"></div>
		</div> -->
		<div class="grit-intro-hero__content">
			<h1 class="grit-intro-hero__title">Don't See The Right Role?<br><span>We'd Still Love To Hear From You.</span></h1>
			<p class="grit-intro-hero__subtitle">Great people make great projects. Introduce yourself and let's start a conversation.</p>
		</div>
	</section>

	<?php /* =========================================================
	   SECTION 02 — WHY INTRODUCE + FORM LAYOUT
	   ========================================================= */ ?>
	<section class="grit-intro-layout">
		<div class="grit-intro-layout__inner">

			<div class="grit-intro-reasons">
				<h2 class="grit-intro-reasons__title">Why Introduce Yourself?</h2>
				<ul class="grit-intro-reasons__list">
					<li class="grit-intro-reasons__item">
						<div class="grit-intro-reasons__icon">
							<svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5"/></svg>
						</div>
						<div class="grit-intro-reasons__title">
							<h3>Future Opportunities</h3>
							<p>Be considered for upcoming roles that match your skills.</p>
						</div>
					</li>
					<li class="grit-intro-reasons__item">
						<div class="grit-intro-reasons__icon">
							<svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="1.5"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
						</div>
						<div class="grit-intro-reasons__title">
							<h3>Talent Network</h3>
							<p>Join our network of professionals building the future.</p>
						</div>
					</li>
					<li class="grit-intro-reasons__item">
						<div class="grit-intro-reasons__icon">
							<svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</div>
						<div class="grit-intro-reasons__title">
							<h3>Make an Impact</h3>
							<p>Your next opportunity might be closer than you think.</p>
						</div>
					</li>
				</ul>
			</div>

			<?php /* =========================================================
			   SECTION 03 — INTRODUCE FORM
			   ========================================================= */ ?>
			<div class="grit-intro-form-wrap">
				<form class="grit-intro-form" id="grit-intro-form" novalidate>
					<h2 class="grit-intro-form__title">Introduce Yourself</h2>

					<div class="grit-form-grid">
						<div class="grit-form-field">
							<label for="grit-intro-first">First Name <span class="grit-required">*</span></label>
							<input type="text" id="grit-intro-first" name="first_name" required autocomplete="given-name">
							<span class="grit-field-error" role="alert"></span>
						</div>
						<div class="grit-form-field">
							<label for="grit-intro-last">Last Name <span class="grit-required">*</span></label>
							<input type="text" id="grit-intro-last" name="last_name" required autocomplete="family-name">
							<span class="grit-field-error" role="alert"></span>
						</div>
						<div class="grit-form-field">
							<label for="grit-intro-email">Email Address <span class="grit-required">*</span></label>
							<input type="email" id="grit-intro-email" name="email" required autocomplete="email">
							<span class="grit-field-error" role="alert"></span>
						</div>
						<div class="grit-form-field">
							<label for="grit-intro-phone">Phone Number <span class="grit-optional">(Optional)</span></label>
							<input type="tel" id="grit-intro-phone" name="phone" autocomplete="tel">
						</div>
						<div class="grit-form-field grit-form-field--full">
							<label for="grit-intro-location">Current Location (City, State) <span class="grit-required">*</span></label>
							<input type="text" id="grit-intro-location" name="current_location" required>
							<span class="grit-field-error" role="alert"></span>
						</div>
						<div class="grit-form-field">
							<label for="grit-intro-position">Current Position <span class="grit-optional">(Optional)</span></label>
							<input type="text" id="grit-intro-position" name="current_position">
						</div>
						<div class="grit-form-field">
							<label for="grit-intro-interest">Area of Interest <span class="grit-required">*</span></label>
							<select id="grit-intro-interest" name="area_of_interest" required>
								<option value="">Select an area</option>
								<option value="project-management">Project Management</option>
								<option value="field-operations">Field Operations</option>
								<option value="preconstruction">Preconstruction</option>
								<option value="estimating">Estimating</option>
								<option value="safety">Safety</option>
								<option value="corporate">Corporate / Accounting</option>
								<option value="other">Other</option>
							</select>
							<span class="grit-field-error" role="alert"></span>
						</div>
						<div class="grit-form-field">
							<label for="grit-intro-years">Years of Experience <span class="grit-optional">(Optional)</span></label>
							<select id="grit-intro-years" name="years_experience">
								<option value="">Select</option>
								<option value="0-2">0–2 years</option>
								<option value="3-5">3–5 years</option>
								<option value="6-10">6–10 years</option>
								<option value="10+">10+ years</option>
							</select>
						</div>
						<div class="grit-form-field grit-form-field--full">
							<label for="grit-intro-about">Tell Us About Yourself <span class="grit-required">*</span></label>
							<textarea id="grit-intro-about" name="about" rows="5" required placeholder="Your background, skills, and what you're passionate about..."></textarea>
							<span class="grit-field-error" role="alert"></span>
						</div>
						<div class="grit-form-field grit-form-field--full">
							<label for="grit-intro-resume">Resume / CV <span class="grit-optional">(Optional)</span></label>
							<div class="grit-file-upload" data-input="grit-intro-resume">
								<input type="file" id="grit-intro-resume" name="resume" accept=".pdf,.doc,.docx" class="grit-file-input">
								<div class="grit-file-upload__zone">
									<svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 16V8M12 8l-3 3M12 8l3 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M20 16.5V18a2 2 0 01-2 2H6a2 2 0 01-2-2v-1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
									<p class="grit-file-upload__text"><strong>Drag & drop</strong> or <span class="grit-file-upload__browse">Browse</span></p>
									<p class="grit-file-upload__hint">PDF, DOC, DOCX (Max 5MB)</p>
								</div>
								<div class="grit-file-upload__preview" hidden>
									<span class="grit-file-upload__name"></span>
									<button type="button" class="grit-file-upload__remove" aria-label="Remove file">×</button>
								</div>
							</div>
						</div>
						<div class="grit-form-field grit-form-field--full">
							<label for="grit-intro-linkedin">LinkedIn Profile <span class="grit-optional">(Optional)</span></label>
							<input type="url" id="grit-intro-linkedin" name="linkedin" placeholder="https://linkedin.com/in/yourprofile">
						</div>
						<div class="grit-form-field grit-form-field--full grit-consent">
							<label class="grit-checkbox-label">
								<input type="checkbox" id="grit-intro-consent" name="privacy_consent" required>
								<span>I agree to the processing of my personal data for recruitment purposes. <span class="grit-required">*</span></span>
							</label>
							<span class="grit-field-error" role="alert"></span>
						</div>
					</div>

					<button type="submit" class="grit-btn grit-btn--primary grit-btn--lg grit-intro-form__submit">
						SUBMIT APPLICATION
						<svg class="grit-btn__arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</button>
				</form>

				<?php /* =========================================================
				   SECTION 04 — SUCCESS STATE
				   ========================================================= */ ?>
				<div class="grit-intro-success" id="grit-intro-success" hidden>
					<div class="grit-intro-success__icon">
						<svg width="64" height="64" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"/><path d="M8 12l3 3 5-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</div>
					<h2 class="grit-intro-success__title">Thank You</h2>
					<p class="grit-intro-success__text">We've received your information and will keep you in mind for future opportunities that match your background.</p>
					<a href="<?php echo esc_url( home_url( '/careers/open-positions/' ) ); ?>" class="grit-btn grit-btn--primary">View Open Positions</a>
				</div>
			</div>
		</div>
	</section>
</div>
