/**
 * Main JavaScript - Mobile Menu, Sticky Header, Smooth Scroll, Scroll Animations
 *
 * @package Stevens_Chiro
 */
(function () {
	'use strict';

	// =========================================================================
	// Mobile Menu
	// =========================================================================
	var menuToggle = document.getElementById('mobile-menu-toggle');
	var mainNav = document.getElementById('main-nav');
	var body = document.body;
	var overlay = null;

	if (menuToggle && mainNav) {
		// Create overlay element.
		overlay = document.createElement('div');
		overlay.className = 'mobile-nav-overlay';
		overlay.setAttribute('aria-hidden', 'true');
		document.body.appendChild(overlay);

		menuToggle.addEventListener('click', function () {
			var isOpen = mainNav.classList.contains('is-open');

			if (isOpen) {
				closeMenu();
			} else {
				openMenu();
			}
		});

		overlay.addEventListener('click', closeMenu);

		// Close on Escape key.
		document.addEventListener('keydown', function (e) {
			if (e.key === 'Escape' && mainNav.classList.contains('is-open')) {
				closeMenu();
				menuToggle.focus();
			}
		});

		// Close menu on nav link click.
		mainNav.querySelectorAll('a').forEach(function (link) {
			link.addEventListener('click', function () {
				if (mainNav.classList.contains('is-open')) {
					closeMenu();
				}
			});
		});
	}

	function openMenu() {
		mainNav.classList.add('is-open');
		menuToggle.setAttribute('aria-expanded', 'true');
		overlay.classList.add('is-active');
		body.style.overflow = 'hidden';
	}

	function closeMenu() {
		mainNav.classList.remove('is-open');
		menuToggle.setAttribute('aria-expanded', 'false');
		overlay.classList.remove('is-active');
		body.style.overflow = '';
	}

	// =========================================================================
	// Sticky Header - Shadow on scroll
	// =========================================================================
	var header = document.getElementById('site-header');

	if (header) {
		var scrollThreshold = 50;
		var ticking = false;

		window.addEventListener('scroll', function () {
			if (!ticking) {
				window.requestAnimationFrame(function () {
					if (window.scrollY > scrollThreshold) {
						header.classList.add('is-scrolled');
					} else {
						header.classList.remove('is-scrolled');
					}
					ticking = false;
				});
				ticking = true;
			}
		});
	}

	// =========================================================================
	// Smooth Scroll for anchor links
	// =========================================================================
	document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
		anchor.addEventListener('click', function (e) {
			var targetId = this.getAttribute('href');
			if (targetId === '#') return;

			var target = document.querySelector(targetId);
			if (!target) return;

			e.preventDefault();

			var headerOffset = header ? header.offsetHeight : 0;
			var elementPosition = target.getBoundingClientRect().top + window.scrollY;
			var offsetPosition = elementPosition - headerOffset - 20;

			window.scrollTo({
				top: offsetPosition,
				behavior: 'smooth',
			});
		});
	});

	// =========================================================================
	// Scroll Animations (Intersection Observer)
	// =========================================================================
	var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	if (!prefersReducedMotion) {
		var fadeElements = document.querySelectorAll('.fade-in');

		if (fadeElements.length > 0 && 'IntersectionObserver' in window) {
			var observer = new IntersectionObserver(
				function (entries) {
					entries.forEach(function (entry) {
						if (entry.isIntersecting) {
							entry.target.classList.add('is-visible');
							observer.unobserve(entry.target);
						}
					});
				},
				{
					threshold: 0.1,
					rootMargin: '0px 0px -50px 0px',
				}
			);

			fadeElements.forEach(function (el) {
				observer.observe(el);
			});
		} else {
			// Fallback: show all elements immediately.
			fadeElements.forEach(function (el) {
				el.classList.add('is-visible');
			});
		}
	} else {
		// Reduced motion: make everything visible immediately.
		document.querySelectorAll('.fade-in').forEach(function (el) {
			el.classList.add('is-visible');
		});
	}
})();
