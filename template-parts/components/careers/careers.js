/**
 * 320 Grit — Careers Landing Page JavaScript
 */

(function () {
	'use strict';

	const STORAGE_KEY = 'grit_saved_jobs';

	/* =========================================================
	   SECTION 00 — UTILITIES (Saved Jobs)
	   ========================================================= */
	function getSavedJobs() {
		try {
			const raw = localStorage.getItem(STORAGE_KEY);
			return raw ? JSON.parse(raw) : [];
		} catch (e) {
			return [];
		}
	}

	function setSavedJobs(ids) {
		try {
			localStorage.setItem(STORAGE_KEY, JSON.stringify(ids));
		} catch (e) {
			console.warn('320 Grit: Unable to persist saved jobs', e);
		}
	}

	function isJobSaved(jobId) {
		return getSavedJobs().includes(jobId);
	}

	function toggleSaveJob(jobId) {
		let saved = getSavedJobs();
		const index = saved.indexOf(jobId);
		if (index > -1) {
			saved.splice(index, 1);
		} else {
			saved.push(jobId);
		}
		setSavedJobs(saved);
		return index === -1;
	}

	function updateSaveButtons(jobId, isSaved) {
		document.querySelectorAll(`.grit-save-job[data-job-id="${jobId}"]`).forEach((btn) => {
			btn.classList.toggle('is-saved', isSaved);
			btn.setAttribute('aria-pressed', isSaved ? 'true' : 'false');
			if (isSaved) {
				btn.textContent = 'SAVED';
			} else {
				btn.textContent = 'SAVE FOR LATER';
			}
		});
	}

	/* =========================================================
	   SECTION 04 — DEPARTMENT FILTER PILLS
	   ========================================================= */
	function initDepartmentFilters() {
		const pills = document.querySelectorAll('.grit-cl-filter-pill');
		const cards = document.querySelectorAll('.grit-cl-job-card');

		if (!pills.length || !cards.length) return;

		pills.forEach((pill) => {
			pill.addEventListener('click', function () {
				const dept = this.getAttribute('data-dept');

				pills.forEach((p) => {
					p.classList.remove('is-active');
					p.setAttribute('aria-selected', 'false');
				});
				this.classList.add('is-active');
				this.setAttribute('aria-selected', 'true');

				cards.forEach((card) => {
					const cardDept = card.getAttribute('data-department') || '';
					const show = dept === 'all' || cardDept === dept;
					card.hidden = !show;
				});
			});
		});
	}

	/* =========================================================
	   SECTION 05 — FEATURED SAVE BUTTON
	   ========================================================= */
	function initSaveButtons() {
		document.querySelectorAll('.grit-save-job').forEach((btn) => {
			const jobId = btn.getAttribute('data-job-id');
			if (!jobId) return;

			if (isJobSaved(jobId)) {
				updateSaveButtons(jobId, true);
			}

			btn.addEventListener('click', function (e) {
				e.preventDefault();
				const nowSaved = toggleSaveJob(jobId);
				updateSaveButtons(jobId, nowSaved);
			});
		});
	}

	/* =========================================================
	   SECTION 01 — SMOOTH SCROLL FOR ANCHOR LINKS
	   ========================================================= */
	function initSmoothScroll() {
		document.querySelectorAll('a[href^="#"]').forEach((link) => {
			link.addEventListener('click', function (e) {
				const targetId = this.getAttribute('href').slice(1);
				const target = document.getElementById(targetId);
				if (target) {
					e.preventDefault();
					target.scrollIntoView({ behavior: 'smooth', block: 'start' });
				}
			});
		});
	}

	/* =========================================================
	   INIT
	   ========================================================= */
	document.addEventListener('DOMContentLoaded', function () {
		initDepartmentFilters();
		initSaveButtons();
		initSmoothScroll();
	});
})();
