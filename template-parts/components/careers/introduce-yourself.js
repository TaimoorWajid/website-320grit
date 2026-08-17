/**
 * 320 Grit — Introduce Yourself Page JavaScript
 */

(function () {
	'use strict';

	/* =========================================================
	   SECTION 03 — FORM VALIDATION + SUBMIT
	   ========================================================= */
	function qs(sel, ctx = document) {
		return ctx.querySelector(sel);
	}
	function qsa(sel, ctx = document) {
		return Array.from(ctx.querySelectorAll(sel));
	}

	function clearErrors(form) {
		qsa('.grit-field-error', form).forEach((el) => {
			el.textContent = '';
		});
		qsa('.is-invalid', form).forEach((el) => {
			el.classList.remove('is-invalid');
		});
	}

	function setError(field, message) {
		const input = typeof field === 'string' ? qs(`#${field}`) : field;
		if (!input) return;
		input.classList.add('is-invalid');
		const errorEl = input.closest('.grit-form-field, .grit-consent')?.querySelector('.grit-field-error');
		if (errorEl) errorEl.textContent = message;
	}

	function validateForm(form) {
		clearErrors(form);
		let valid = true;

		qsa('[required]', form).forEach((field) => {
			const value = field.type === 'checkbox' ? field.checked : field.value.trim();
			if (!value) {
				valid = false;
				const labelText = field.closest('.grit-form-field, .grit-consent')?.querySelector('label')?.textContent?.replace('*', '').trim() || 'This field';
				setError(field, `${labelText.split('(')[0].trim()} is required.`);
			}
		});

		const email = qs('#grit-intro-email');
		if (email && email.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
			valid = false;
			setError(email, 'Please enter a valid email address.');
		}

		return valid;
	}

	/* =========================================================
	   FILE UPLOAD
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
					if (nameEl) nameEl.textContent = input.files[0].name;
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
	   INIT
	   ========================================================= */
	document.addEventListener('DOMContentLoaded', function () {
		initFileUploads();

		const form = qs('#grit-intro-form');
		const successEl = qs('#grit-intro-success');

		if (form) {
			form.addEventListener('submit', function (e) {
				e.preventDefault();

				if (!validateForm(form)) return;

				// Demo success — replace with Gravity Forms / AJAX in production
				form.hidden = true;
				if (successEl) {
					successEl.hidden = false;
					successEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
				}
			});
		}
	});
})();
