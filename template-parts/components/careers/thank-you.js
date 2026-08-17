/**
 * 320 Grit — Thank You Page JavaScript
 * Minimal — page is mostly static confirmation.
 */

(function () {
	'use strict';

	/* =========================================================
	   SECTION 01 — OPTIONAL: CONFETTI / SUBTLE ENTRANCE
	   (kept intentionally light — premium, not flashy)
	   ========================================================= */
	document.addEventListener('DOMContentLoaded', function () {
		const icon = document.querySelector('.grit-ty-hero__icon');
		if (icon) {
			icon.style.opacity = '0';
			icon.style.transform = 'scale(0.85)';
			requestAnimationFrame(function () {
				icon.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
				icon.style.opacity = '1';
				icon.style.transform = 'scale(1)';
			});
		}
	});
})();
