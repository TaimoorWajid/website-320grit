/**
 * 320 Grit — Multi-step Application Form JavaScript
 */

(function () {
	'use strict';

	let currentStep = 1;
	const totalSteps = 4;

	/* =========================================================
	   SECTION 00 — UTILITIES
	   ========================================================= */
	function qs(sel, ctx = document) {
		return ctx.querySelector(sel);
	}
	function qsa(sel, ctx = document) {
		return Array.from(ctx.querySelectorAll(sel));
	}

	/* =========================================================
	   SECTION 03 — PROGRESS + STEP NAVIGATION
	   ========================================================= */
	function updateProgress(step) {
		qsa('.grit-apply-progress__item').forEach((item) => {
			const s = parseInt(item.getAttribute('data-step'), 10);
			item.classList.remove('is-active', 'is-complete');
			if (s === step) {
				item.classList.add('is-active');
			} else if (s < step) {
				item.classList.add('is-complete');
			}
		});
	}

	function showStep(step) {
		qsa('.grit-apply-step').forEach((el) => {
			const s = parseInt(el.getAttribute('data-step'), 10);
			if (s === step) {
				el.hidden = false;
				el.classList.add('is-active');
			} else {
				el.hidden = true;
				el.classList.remove('is-active');
			}
		});

		const backBtn = qs('#grit-btn-back');
		const nextBtn = qs('#grit-btn-next');
		const submitBtn = qs('#grit-btn-submit');

		if (backBtn) backBtn.hidden = step === 1;
		if (nextBtn) nextBtn.hidden = step === totalSteps;
		if (submitBtn) submitBtn.hidden = step !== totalSteps;

		updateProgress(step);
		currentStep = step;

		// Scroll to top of form
		const formWrap = qs('.grit-apply-form-wrap');
		if (formWrap) {
			formWrap.scrollIntoView({ behavior: 'smooth', block: 'start' });
		}

		if (step === 4) {
			buildReviewSummary();
		}
	}

	/* =========================================================
	   SECTION 04–07 — VALIDATION
	   ========================================================= */
	function clearErrors(stepEl) {
		qsa('.grit-field-error', stepEl).forEach((el) => {
			el.textContent = '';
		});
		qsa('.is-invalid', stepEl).forEach((el) => {
			el.classList.remove('is-invalid');
		});
	}

	function setError(field, message) {
		const input = typeof field === 'string' ? qs(`#${field}`) : field;
		if (!input) return;
		input.classList.add('is-invalid');
		const errorEl = input.closest('.grit-form-field')?.querySelector('.grit-field-error') ||
			input.closest('.grit-consent')?.querySelector('.grit-field-error');
		if (errorEl) errorEl.textContent = message;
	}

	function validateStep(step) {
		const stepEl = qs(`#grit-step-${step}`);
		if (!stepEl) return true;

		clearErrors(stepEl);
		let valid = true;

		const requiredFields = qsa('[required]', stepEl);
		requiredFields.forEach((field) => {
			const value = field.type === 'checkbox' ? field.checked : field.value.trim();
			if (!value) {
				valid = false;
				const label = field.closest('.grit-form-field, .grit-consent')?.querySelector('label')?.textContent?.replace('*', '').trim() || 'This field';
				setError(field, `${label.split('(')[0].trim()} is required.`);
			}
		});

		// Email format
		const email = qs('#grit-email');
		if (email && email.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
			valid = false;
			setError(email, 'Please enter a valid email address.');
		}

		// File size check for resume
		if (step === 3) {
			const resume = qs('#grit-resume');
			if (resume && resume.files.length) {
				const file = resume.files[0];
				if (file.size > 5 * 1024 * 1024) {
					valid = false;
					setError(resume, 'File must be 5MB or smaller.');
				}
			}
		}

		return valid;
	}

	/* =========================================================
	   SECTION 06 — FILE UPLOAD UI
	   ========================================================= */
	function initFileUploads() {
		qsa('.grit-file-upload').forEach((wrap) => {
			const input = wrap.querySelector('.grit-file-input');
			const zone = wrap.querySelector('.grit-file-upload__zone');
			const preview = wrap.querySelector('.grit-file-upload__preview');
			const nameEl = wrap.querySelector('.grit-file-upload__name');
			const removeBtn = wrap.querySelector('.grit-file-upload__remove');

			if (!input) return;

			function updatePreview() {
				if (input.files && input.files.length) {
					const names = Array.from(input.files).map((f) => f.name).join(', ');
					if (nameEl) nameEl.textContent = names;
					if (zone) zone.hidden = true;
					if (preview) preview.hidden = false;
				} else {
					if (zone) zone.hidden = false;
					if (preview) preview.hidden = true;
				}
			}

			input.addEventListener('change', updatePreview);

			if (removeBtn) {
				removeBtn.addEventListener('click', function (e) {
					e.preventDefault();
					e.stopPropagation();
					input.value = '';
					updatePreview();
				});
			}

			// Drag & drop visual
			['dragenter', 'dragover'].forEach((evt) => {
				wrap.addEventListener(evt, function (e) {
					e.preventDefault();
					wrap.classList.add('is-dragover');
				});
			});
			['dragleave', 'drop'].forEach((evt) => {
				wrap.addEventListener(evt, function (e) {
					e.preventDefault();
					wrap.classList.remove('is-dragover');
				});
			});
			wrap.addEventListener('drop', function (e) {
				if (e.dataTransfer.files.length) {
					input.files = e.dataTransfer.files;
					updatePreview();
				}
			});
		});
	}

	/* =========================================================
	   SECTION 07 — REVIEW SUMMARY
	   ========================================================= */
	function buildReviewSummary() {
		const container = qs('#grit-review-summary');
		if (!container) return;

		const data = {
			'Personal Information': [
				['Name', `${qs('#grit-first-name')?.value || ''} ${qs('#grit-last-name')?.value || ''}`],
				['Email', qs('#grit-email')?.value || ''],
				['Phone', qs('#grit-phone')?.value || ''],
				['Location', qs('#grit-location')?.value || ''],
				['LinkedIn', qs('#grit-linkedin')?.value || '—'],
			],
			'Experience': [
				['Years of Experience', qs('#grit-years-exp')?.selectedOptions[0]?.text || ''],
				['Current Position', qs('#grit-current-title')?.value || ''],
				['Company', qs('#grit-current-company')?.value || ''],
				['Education', qs('#grit-education')?.value || ''],
				['Certifications', qs('#grit-certifications')?.value || '—'],
			],
			'Documents': [
				['Resume', qs('#grit-resume')?.files[0]?.name || 'Not uploaded'],
			],
		};

		let html = '';
		Object.keys(data).forEach((section) => {
			html += `<div class="grit-review-section"><h4>${section}</h4>`;
			data[section].forEach(([label, value]) => {
				html += `<div class="grit-review-row"><dt>${label}</dt><dd>${escapeHtml(value)}</dd></div>`;
			});
			html += '</div>';
		});

		container.innerHTML = html;
	}

	function escapeHtml(str) {
		const div = document.createElement('div');
		div.textContent = str;
		return div.innerHTML;
	}

	/* =========================================================
	   SECTION 08 — FORM NAV + SUBMIT
	   ========================================================= */
	function initFormNavigation() {
		const nextBtn = qs('#grit-btn-next');
		const backBtn = qs('#grit-btn-back');
		const form = qs('#grit-application-form');
		const successEl = qs('#grit-apply-success');

		if (nextBtn) {
			nextBtn.addEventListener('click', function () {
				if (validateStep(currentStep)) {
					showStep(currentStep + 1);
				}
			});
		}

		if (backBtn) {
			backBtn.addEventListener('click', function () {
				showStep(currentStep - 1);
			});
		}

		if (form) {
			form.addEventListener('submit', function (e) {
				e.preventDefault();

				if (!validateStep(4)) return;

				// Demo: show success state
				// In production: submit to Gravity Forms / AJAX endpoint
				form.hidden = true;
				qs('.grit-apply-progress').hidden = true;

				const jobTitle = qs('input[name="job_title"]')?.value || 'this position';
				const successTitle = qs('#grit-success-job-title');
				if (successTitle) successTitle.textContent = jobTitle;

				if (successEl) {
					successEl.hidden = false;
					successEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
				}

				// Optional: clear form data or send via fetch
				// fetch('/wp-admin/admin-ajax.php', { method: 'POST', body: new FormData(form) })
			});
		}
	}

	/* =========================================================
	   INIT
	   ========================================================= */
	document.addEventListener('DOMContentLoaded', function () {
		showStep(1);
		initFileUploads();
		initFormNavigation();
	});
})();
