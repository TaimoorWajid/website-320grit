(function () {
    'use strict';

    const FORM_ID = 1;
    const FORM_SELECTOR = '#gform_' + FORM_ID;
    const WRAPPER_SELECTOR = '.project-inquiry-form';

    /*
     * Gravity Forms remains responsible for:
     * - validation
     * - pagination
     * - AJAX submission
     * - phone country selector
     * - conditional logic
     * - confirmation
     *
     * This script only improves UX.
     */

    function getForm() {
        return document.querySelector(FORM_SELECTOR);
    }

    function getWrapper() {
        return document.querySelector(WRAPPER_SELECTOR);
    }

    function getCurrentPage() {
        const form = getForm();

        if (!form) {
            return null;
        }

        const sourcePage = form.querySelector(
            '#gform_source_page_number_' + FORM_ID
        );

        if (sourcePage && sourcePage.value) {
            return parseInt(sourcePage.value, 10);
        }

        const visiblePage = form.querySelector(
            '.gform_page:not([style*="display: none"])'
        );

        if (!visiblePage) {
            return 1;
        }

        const match = visiblePage.id.match(/gform_page_\d+_(\d+)/);

        return match ? parseInt(match[1], 10) : 1;
    }

    function scrollToForm() {
        const wrapper = getWrapper();

        if (!wrapper) {
            return;
        }

        /*
         * Do not force scrolling when the form is inside a modal.
         * Gravity Forms itself handles its AJAX anchor behavior.
         */
        const modalParent = wrapper.closest(
            '.nectar-modal, .nectar-popup, .modal, [role="dialog"]'
        );

        if (modalParent) {
            return;
        }

        const rect = wrapper.getBoundingClientRect();

        /*
         * Only scroll if the form is substantially outside
         * the current viewport.
         */
        const viewportHeight = window.innerHeight;

        if (rect.top < -50 || rect.top > viewportHeight * 0.45) {
            const headerOffset = 90;

            window.scrollTo({
                top: window.scrollY + rect.top - headerOffset,
                behavior: 'smooth'
            });
        }
    }

    function updateStepAccessibility() {
        const form = getForm();

        if (!form) {
            return;
        }

        const steps = form.querySelectorAll('.gf_step');

        steps.forEach(function (step) {
            const active = step.classList.contains('gf_step_active');
            const completed = step.classList.contains('gf_step_completed');

            if (active) {
                step.setAttribute('aria-current', 'step');
            } else {
                step.removeAttribute('aria-current');
            }

            if (completed) {
                step.setAttribute('data-step-status', 'completed');
            } else if (active) {
                step.setAttribute('data-step-status', 'current');
            } else {
                step.setAttribute('data-step-status', 'pending');
            }
        });
    }

    function updateButtons() {
        const form = getForm();

        if (!form) {
            return;
        }

        const nextButtons = form.querySelectorAll(
            '.gform_next_button'
        );

        nextButtons.forEach(function (button) {
            if (!button.dataset.originalText) {
                button.dataset.originalText = button.textContent.trim();
            }

            button.textContent = 'Continue →';
        });

        const previousButtons = form.querySelectorAll(
            '.gform_previous_button'
        );

        previousButtons.forEach(function (button) {
            button.textContent = '← Back';
        });

        const submitButton = form.querySelector(
            '#gform_submit_button_' + FORM_ID
        );

        if (submitButton) {
            submitButton.value = 'Start the Conversation';
            submitButton.textContent = 'Start the Conversation →';
        }
    }

    function initializeForm() {
        const form = getForm();

        if (!form) {
            return;
        }

        updateStepAccessibility();
        updateButtons();
    }

    /*
     * Gravity Forms fires this event after a multi-page
     * AJAX page has been loaded.
     */
    document.addEventListener('gform_page_loaded', function (event) {

        const formId = event.detail && event.detail[0];

        /*
         * Some Gravity Forms versions expose event arguments
         * differently, so don't depend exclusively on detail.
         */
        if (formId && parseInt(formId, 10) !== FORM_ID) {
            return;
        }

        setTimeout(function () {
            updateStepAccessibility();
            updateButtons();
            scrollToForm();
        }, 80);
    });

    /*
     * jQuery event compatibility for Gravity Forms.
     *
     * Gravity Forms currently uses jQuery events for
     * gform_page_loaded in many configurations.
     */
    if (window.jQuery) {

        jQuery(document).on(
            'gform_page_loaded',
            function (event, formId) {

                if (parseInt(formId, 10) !== FORM_ID) {
                    return;
                }

                setTimeout(function () {
                    updateStepAccessibility();
                    updateButtons();
                    scrollToForm();
                }, 80);
            }
        );

        /*
         * AJAX confirmation.
         */
        jQuery(document).on(
            'gform_confirmation_loaded',
            function (event, formId) {

                if (parseInt(formId, 10) !== FORM_ID) {
                    return;
                }

                setTimeout(function () {
                    const wrapper = getWrapper();

                    if (wrapper) {
                        wrapper.classList.add(
                            'project-inquiry-form--submitted'
                        );
                    }
                }, 50);
            }
        );
    }

    /*
     * Prevent accidental double clicking while Gravity Forms
     * is processing a pagination/submission request.
     *
     * We do NOT disable the actual Gravity Forms mechanism.
     */
    document.addEventListener('click', function (event) {

        const button = event.target.closest(
            FORM_SELECTOR +
            ' .gform_next_button,' +
            FORM_SELECTOR +
            ' #gform_submit_button_' + FORM_ID
        );

        if (!button) {
            return;
        }

        if (button.dataset.piProcessing === 'true') {
            return;
        }

        button.dataset.piProcessing = 'true';

        setTimeout(function () {
            button.dataset.piProcessing = 'false';
        }, 1500);
    });

    /*
     * Initialize immediately.
     */
    if (document.readyState === 'loading') {
        document.addEventListener(
            'DOMContentLoaded',
            initializeForm
        );
    } else {
        initializeForm();
    }

})();