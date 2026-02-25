/**
 * Customizer Live Preview
 *
 * @package Stevens_Chiro
 */
(function () {
	'use strict';

	var api = wp.customize;

	// Helper: update text content.
	function bindText(settingId, selector) {
		api(settingId, function (value) {
			value.bind(function (newVal) {
				var el = document.querySelector(selector);
				if (el) el.textContent = newVal;
			});
		});
	}

	// Hero
	api('stevens_hero_image', function (value) {
		value.bind(function (newVal) {
			var bg = document.querySelector('.hero__bg');
			if (bg) bg.style.backgroundImage = newVal ? 'url(' + newVal + ')' : 'none';
		});
	});

	bindText('stevens_hero_heading', '.hero__title');
	bindText('stevens_hero_subtitle', '.hero__subtitle');

	api('stevens_hero_overlay_opacity', function (value) {
		value.bind(function (newVal) {
			var overlay = document.querySelector('.hero__overlay');
			if (overlay) overlay.style.opacity = newVal;
		});
	});

	bindText('stevens_hero_cta1_text', '.hero__buttons .btn--secondary');
	bindText('stevens_hero_cta2_text', '.hero__buttons .btn--outline-white');

	// About preview
	api('stevens_about_image', function (value) {
		value.bind(function (newVal) {
			var img = document.querySelector('.about-preview__image img');
			if (img) img.src = newVal;
		});
	});

	bindText('stevens_about_heading', '.about-preview__title');
	bindText('stevens_about_text', '.about-preview__text');

	// CTA
	bindText('stevens_cta_heading', '.cta-section__title');
	bindText('stevens_cta_text', '.cta-section__text');
	bindText('stevens_cta_button_text', '.cta-section .btn');

	// Colors
	api('stevens_color_primary', function (value) {
		value.bind(function (newVal) {
			document.documentElement.style.setProperty('--color-primary', newVal);
		});
	});

	api('stevens_color_secondary', function (value) {
		value.bind(function (newVal) {
			document.documentElement.style.setProperty('--color-secondary', newVal);
		});
	});

	// Contact info
	bindText('stevens_phone', '.top-bar__phone');
	bindText('stevens_email', '.footer__contact a[href^="mailto"]');
	bindText('stevens_address', '.footer__contact li:first-child span');
})();
