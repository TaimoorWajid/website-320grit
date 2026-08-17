/**
 * 320 Grit — Open Positions Page JavaScript
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
		});
	}

	function initSaveButtons() {
		document.querySelectorAll('.grit-save-job').forEach((btn) => {
			const jobId = btn.getAttribute('data-job-id');
			if (!jobId) return;

			if (isJobSaved(jobId)) {
				updateSaveButtons(jobId, true);
			}

			btn.addEventListener('click', function (e) {
				e.preventDefault();
				e.stopPropagation();
				const nowSaved = toggleSaveJob(jobId);
				updateSaveButtons(jobId, nowSaved);
			});
		});
	}

	/* =========================================================
	   SECTION 02 — SEARCH & FILTERS
	   ========================================================= */
	function initFilters() {
		const searchInput = document.getElementById('grit-job-search');
		const deptSelect = document.getElementById('grit-filter-dept');
		const locSelect = document.getElementById('grit-filter-location');
		const typeSelect = document.getElementById('grit-filter-type');
		const clearBtn = document.getElementById('grit-clear-filters');
		const emptyClear = document.getElementById('grit-empty-clear');
		const jobList = document.getElementById('grit-job-list');
		const resultsCount = document.getElementById('grit-results-count');
		const noResults = document.getElementById('grit-no-results');
		const cards = jobList ? Array.from(jobList.querySelectorAll('.grit-job-card--directory')) : [];

		function applyFilters() {
			const query = (searchInput?.value || '').toLowerCase().trim();
			const dept = deptSelect?.value || '';
			const loc = locSelect?.value || '';
			const type = typeSelect?.value || '';

			let visible = 0;

			cards.forEach((card) => {
				const title = card.getAttribute('data-title') || '';
				const desc = card.getAttribute('data-desc') || '';
				const cardDept = card.getAttribute('data-department') || '';
				const cardLoc = card.getAttribute('data-location') || '';
				const cardType = card.getAttribute('data-type') || '';

				const matchesSearch = !query || title.includes(query) || desc.includes(query);
				const matchesDept = !dept || cardDept === dept;
				const matchesLoc = !loc || cardLoc === loc;
				const matchesType = !type || cardType === type;

				const show = matchesSearch && matchesDept && matchesLoc && matchesType;
				card.hidden = !show;
				if (show) visible++;
			});

			if (resultsCount) {
				resultsCount.innerHTML = `<strong>${visible}</strong> Open Position${visible !== 1 ? 's' : ''}`;
			}

			if (noResults) {
				noResults.hidden = visible > 0;
			}
			if (jobList) {
				jobList.hidden = visible === 0;
			}
		}

		function clearFilters() {
			if (searchInput) searchInput.value = '';
			if (deptSelect) deptSelect.value = '';
			if (locSelect) locSelect.value = '';
			if (typeSelect) typeSelect.value = '';

			// Sync mobile selects
			document.querySelectorAll('.grit-filter-sync').forEach((sel) => {
				sel.value = '';
			});

			applyFilters();
		}

		if (searchInput) {
			searchInput.addEventListener('input', applyFilters);
		}
		if (deptSelect) deptSelect.addEventListener('change', applyFilters);
		if (locSelect) locSelect.addEventListener('change', applyFilters);
		if (typeSelect) typeSelect.addEventListener('change', applyFilters);
		if (clearBtn) clearBtn.addEventListener('click', clearFilters);
		if (emptyClear) emptyClear.addEventListener('click', clearFilters);

		// Mobile drawer
		const mobileToggle = document.getElementById('grit-mobile-filter-toggle');
		const mobileDrawer = document.getElementById('grit-mobile-filters');
		const mobileClose = document.getElementById('grit-mobile-filter-close');
		const mobileApply = document.getElementById('grit-apply-filters-m');
		const mobileClear = document.getElementById('grit-clear-filters-m');

		function openDrawer() {
			if (mobileDrawer) {
				mobileDrawer.hidden = false;
				document.body.style.overflow = 'hidden';
				if (mobileToggle) mobileToggle.setAttribute('aria-expanded', 'true');
			}
		}

		function closeDrawer() {
			if (mobileDrawer) {
				mobileDrawer.hidden = true;
				document.body.style.overflow = '';
				if (mobileToggle) mobileToggle.setAttribute('aria-expanded', 'false');
			}
		}

		if (mobileToggle) mobileToggle.addEventListener('click', openDrawer);
		if (mobileClose) mobileClose.addEventListener('click', closeDrawer);
		if (mobileDrawer) {
			mobileDrawer.addEventListener('click', function (e) {
				if (e.target === mobileDrawer) closeDrawer();
			});
		}

		// Sync mobile selects with desktop
		document.querySelectorAll('.grit-filter-sync').forEach((sel) => {
			const targetId = sel.getAttribute('data-sync');
			const target = document.getElementById(targetId);
			if (target) {
				sel.addEventListener('change', function () {
					target.value = this.value;
				});
			}
		});

		if (mobileApply) {
			mobileApply.addEventListener('click', function () {
				// Sync values back
				document.querySelectorAll('.grit-filter-sync').forEach((sel) => {
					const targetId = sel.getAttribute('data-sync');
					const target = document.getElementById(targetId);
					if (target) target.value = sel.value;
				});
				applyFilters();
				closeDrawer();
			});
		}

		if (mobileClear) {
			mobileClear.addEventListener('click', function () {
				clearFilters();
				closeDrawer();
			});
		}

		// Escape key
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape' && mobileDrawer && !mobileDrawer.hidden) {
				closeDrawer();
			}
		});
	}

	/* =========================================================
	   SECTION 03 — JOB LISTINGS (handled by filters)
	   ========================================================= */

	/* =========================================================
	   SECTION 04 — BOTTOM CTA (no JS)
	   ========================================================= */

	/* =========================================================
	   INIT
	   ========================================================= */
	document.addEventListener('DOMContentLoaded', function () {
		initSaveButtons();
		initFilters();
	});
})();
