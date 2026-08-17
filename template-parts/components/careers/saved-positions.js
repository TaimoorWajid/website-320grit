/**
 * 320 Grit — Saved Positions Page JavaScript
 */

(function () {
	'use strict';

	const STORAGE_KEY = 'grit_saved_jobs';
	const SAVED_DATES_KEY = 'grit_saved_dates';

	/* =========================================================
	   SECTION 00 — UTILITIES
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

	function getSavedDates() {
		try {
			const raw = localStorage.getItem(SAVED_DATES_KEY);
			return raw ? JSON.parse(raw) : {};
		} catch (e) {
			return {};
		}
	}

	function setSavedDate(jobId) {
		const dates = getSavedDates();
		if (!dates[jobId]) {
			dates[jobId] = new Date().toISOString().slice(0, 10);
			try {
				localStorage.setItem(SAVED_DATES_KEY, JSON.stringify(dates));
			} catch (e) {}
		}
		return dates[jobId];
	}

	function formatDate(iso) {
		if (!iso) return '';
		const d = new Date(iso + 'T00:00:00');
		return d.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
	}

	function getJobsData() {
		const el = document.getElementById('grit-jobs-data');
		if (!el) return [];
		try {
			return JSON.parse(el.textContent);
		} catch (e) {
			return [];
		}
	}

	/* =========================================================
	   SECTION 02 — RENDER SAVED LIST
	   ========================================================= */
	function renderSavedList() {
		const savedIds = getSavedJobs();
		const allJobs = getJobsData();
		const listEl = document.getElementById('grit-saved-list');
		const countEl = document.getElementById('grit-saved-count');
		const emptyEl = document.getElementById('grit-saved-empty');
		const footerEl = document.getElementById('grit-saved-footer');

		if (!listEl) return;

		const savedJobs = allJobs.filter((j) => savedIds.includes(j.id));

		if (countEl) {
			countEl.innerHTML = savedJobs.length
				? `<strong>${savedJobs.length}</strong> Saved Job${savedJobs.length !== 1 ? 's' : ''}`
				: '';
		}

		if (savedJobs.length === 0) {
			listEl.innerHTML = '';
			if (emptyEl) emptyEl.hidden = false;
			if (footerEl) footerEl.hidden = true;
			return;
		}

		if (emptyEl) emptyEl.hidden = true;
		if (footerEl) footerEl.hidden = false;

		const dates = getSavedDates();

		listEl.innerHTML = savedJobs.map((job) => {
			const dateStr = formatDate(dates[job.id] || setSavedDate(job.id));
			const viewUrl = `/careers/${job.slug}/`;

			return `
				<article class="grit-saved-item" data-job-id="${escapeAttr(job.id)}">
					<div class="grit-saved-item__info">
						<h2 class="grit-saved-item__title">
							<a href="${escapeAttr(viewUrl)}">${escapeHtml(job.title)}</a>
						</h2>
						<div class="grit-saved-item__meta">
							${escapeHtml(job.location)} · ${escapeHtml(job.employment_type)}
						</div>
						<div class="grit-saved-item__date">Saved on ${escapeHtml(dateStr)}</div>
					</div>
					<div class="grit-saved-item__actions">
						<a href="${escapeAttr(viewUrl)}" class="grit-link-arrow">
							VIEW POSITION
							<svg width="14" height="14" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</a>
						<button type="button" class="grit-saved-item__remove" data-job-id="${escapeAttr(job.id)}" aria-label="Remove ${escapeAttr(job.title)} from saved">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M3 6h18M8 6V4a2 2 0 012-2h4a2 2 0 012 2v2m3 0v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6h14zM10 11v6M14 11v6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</button>
					</div>
				</article>
			`;
		}).join('');

		// Bind remove buttons
		listEl.querySelectorAll('.grit-saved-item__remove').forEach((btn) => {
			btn.addEventListener('click', function () {
				const jobId = this.getAttribute('data-job-id');
				removeJob(jobId);
			});
		});
	}

	function removeJob(jobId) {
		let saved = getSavedJobs();
		saved = saved.filter((id) => id !== jobId);
		setSavedJobs(saved);
		renderSavedList();
	}

	function escapeHtml(str) {
		const div = document.createElement('div');
		div.textContent = str;
		return div.innerHTML;
	}

	function escapeAttr(str) {
		return String(str)
			.replace(/&/g, '&amp;')
			.replace(/"/g, '&quot;')
			.replace(/'/g, '&#39;')
			.replace(/</g, '&lt;')
			.replace(/>/g, '&gt;');
	}

	/* =========================================================
	   SECTION 03 — EMPTY STATE (handled in render)
	   ========================================================= */

	/* =========================================================
	   INIT
	   ========================================================= */
	document.addEventListener('DOMContentLoaded', function () {
		renderSavedList();
	});
})();
