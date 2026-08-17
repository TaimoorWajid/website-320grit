/**
 * 320 Grit — Job Detail Page JavaScript
 * Vanilla JS, modular, localStorage for saved jobs
 */

(function () {
	'use strict';

	const STORAGE_KEY = 'grit_saved_jobs';

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
		return index === -1; // true if now saved
	}

	function updateSaveButtons(jobId, isSaved) {
		document.querySelectorAll(`.grit-save-job[data-job-id="${jobId}"]`).forEach((btn) => {
			btn.classList.toggle('is-saved', isSaved);
			btn.setAttribute('aria-pressed', isSaved ? 'true' : 'false');
			const textEl = btn.querySelector('.grit-save-text');
			if (textEl) {
				textEl.textContent = isSaved ? 'SAVED' : 'SAVE FOR LATER';
			}
		});
	}

	/* =========================================================
	   SECTION 01 — BREADCRUMB (no JS needed)
	   ========================================================= */

	/* =========================================================
	   SECTION 02 — JOB HERO INTERACTIONS
	   ========================================================= */
	function initSaveButtons() {
		document.querySelectorAll('.grit-save-job').forEach((btn) => {
			const jobId = btn.getAttribute('data-job-id');
			if (!jobId) return;

			// Initial state
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

	function initShareButtons() {
		const pageUrl = window.location.href;
		const pageTitle = document.querySelector('.grit-job-hero__title')?.textContent || '320 Grit Career Opportunity';

		document.querySelectorAll('.grit-share-btn').forEach((btn) => {
			btn.addEventListener('click', function () {
				const type = this.getAttribute('data-share');

				if (type === 'linkedin') {
					const url = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(pageUrl)}`;
					window.open(url, '_blank', 'noopener,width=600,height=500');
				} else if (type === 'email') {
					const subject = encodeURIComponent(`Job Opportunity: ${pageTitle}`);
					const body = encodeURIComponent(`I thought you might be interested in this position at 320 Grit:\n\n${pageTitle}\n${pageUrl}`);
					window.location.href = `mailto:?subject=${subject}&body=${body}`;
				} else if (type === 'copy') {
					navigator.clipboard.writeText(pageUrl).then(() => {
						const original = this.getAttribute('aria-label');
						this.setAttribute('aria-label', 'Link copied!');
						this.style.color = 'var(--grit-purple)';
						setTimeout(() => {
							this.setAttribute('aria-label', original);
							this.style.color = '';
						}, 2000);
					}).catch(() => {
						// Fallback
						prompt('Copy this link:', pageUrl);
					});
				}
			});
		});
	}

	/* =========================================================
	   SECTION 03 — ROLE OVERVIEW TABS
	   ========================================================= */
	function initTabs() {
		const tabBtns = document.querySelectorAll('.grit-tabs__btn');
		const panels = document.querySelectorAll('.grit-tabs__panel');

		if (!tabBtns.length) return;

		tabBtns.forEach((btn) => {
			btn.addEventListener('click', function () {
				const target = this.getAttribute('data-tab');

				tabBtns.forEach((b) => {
					b.classList.remove('is-active');
					b.setAttribute('aria-selected', 'false');
				});
				panels.forEach((p) => {
					p.classList.remove('is-active');
					p.hidden = true;
				});

				this.classList.add('is-active');
				this.setAttribute('aria-selected', 'true');

				const panel = document.getElementById(`panel-${target}`);
				if (panel) {
					panel.classList.add('is-active');
					panel.hidden = false;
				}
			});

			// Keyboard support
			btn.addEventListener('keydown', function (e) {
				const currentIndex = Array.from(tabBtns).indexOf(this);
				let newIndex = currentIndex;

				if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
					newIndex = (currentIndex + 1) % tabBtns.length;
					e.preventDefault();
				} else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
					newIndex = (currentIndex - 1 + tabBtns.length) % tabBtns.length;
					e.preventDefault();
				} else if (e.key === 'Home') {
					newIndex = 0;
					e.preventDefault();
				} else if (e.key === 'End') {
					newIndex = tabBtns.length - 1;
					e.preventDefault();
				}

				if (newIndex !== currentIndex) {
					tabBtns[newIndex].focus();
					tabBtns[newIndex].click();
				}
			});
		});
	}

	/* =========================================================
	   SECTION 04 — RELATED POSITIONS (save handled globally)
	   ========================================================= */

	/* =========================================================
	   SECTION 05 — FINAL CTA (save handled globally)
	   ========================================================= */

	/* =========================================================
	   INIT
	   ========================================================= */
	document.addEventListener('DOMContentLoaded', function () {
		initSaveButtons();
		initShareButtons();
		initTabs();
	});
})();
