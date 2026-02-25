/**
 * Testimonial Carousel
 *
 * Vanilla JS carousel with touch/swipe support, auto-advance, dots, and arrows.
 *
 * @package Stevens_Chiro
 */
(function () {
	'use strict';

	var carousels = document.querySelectorAll('[data-carousel]');

	carousels.forEach(function (carousel) {
		initCarousel(carousel);
	});

	function initCarousel(container) {
		var track = container.querySelector('[data-carousel-track]');
		var slides = container.querySelectorAll('[data-carousel-slide]');
		var prevBtn = container.querySelector('[data-carousel-prev]');
		var nextBtn = container.querySelector('[data-carousel-next]');
		var dotsContainer = container.querySelector('[data-carousel-dots]');

		if (!track || slides.length === 0) return;

		var currentIndex = 0;
		var slideCount = slides.length;
		var autoAdvanceInterval = null;
		var autoAdvanceDelay = 6000;
		var isTransitioning = false;

		// Touch/swipe variables.
		var touchStartX = 0;
		var touchEndX = 0;
		var touchStartY = 0;
		var isDragging = false;
		var swipeThreshold = 50;

		// Create dot indicators.
		if (dotsContainer) {
			for (var i = 0; i < slideCount; i++) {
				var dot = document.createElement('button');
				dot.className = 'carousel__dot' + (i === 0 ? ' is-active' : '');
				dot.setAttribute('aria-label', 'Go to testimonial ' + (i + 1));
				dot.setAttribute('data-index', i);
				dotsContainer.appendChild(dot);

				dot.addEventListener('click', function () {
					goToSlide(parseInt(this.getAttribute('data-index'), 10));
					resetAutoAdvance();
				});
			}
		}

		// Navigate functions.
		function goToSlide(index) {
			if (isTransitioning) return;

			isTransitioning = true;
			currentIndex = ((index % slideCount) + slideCount) % slideCount;
			track.style.transform = 'translateX(-' + currentIndex * 100 + '%)';
			updateDots();

			setTimeout(function () {
				isTransitioning = false;
			}, 500);
		}

		function nextSlide() {
			goToSlide(currentIndex + 1);
		}

		function prevSlide() {
			goToSlide(currentIndex - 1);
		}

		function updateDots() {
			if (!dotsContainer) return;
			var dots = dotsContainer.querySelectorAll('.carousel__dot');
			dots.forEach(function (dot, i) {
				dot.classList.toggle('is-active', i === currentIndex);
			});
		}

		// Arrow buttons.
		if (prevBtn) {
			prevBtn.addEventListener('click', function () {
				prevSlide();
				resetAutoAdvance();
			});
		}

		if (nextBtn) {
			nextBtn.addEventListener('click', function () {
				nextSlide();
				resetAutoAdvance();
			});
		}

		// Keyboard navigation.
		container.addEventListener('keydown', function (e) {
			if (e.key === 'ArrowLeft') {
				prevSlide();
				resetAutoAdvance();
			} else if (e.key === 'ArrowRight') {
				nextSlide();
				resetAutoAdvance();
			}
		});

		// Touch / Swipe support.
		track.addEventListener(
			'touchstart',
			function (e) {
				touchStartX = e.changedTouches[0].screenX;
				touchStartY = e.changedTouches[0].screenY;
				isDragging = true;
			},
			{ passive: true }
		);

		track.addEventListener(
			'touchmove',
			function (e) {
				if (!isDragging) return;
				touchEndX = e.changedTouches[0].screenX;
			},
			{ passive: true }
		);

		track.addEventListener('touchend', function () {
			if (!isDragging) return;
			isDragging = false;

			var diffX = touchStartX - touchEndX;
			var diffY = Math.abs(touchStartY - (touchEndX ? touchEndX : touchStartX));

			// Only swipe if horizontal movement is greater than vertical.
			if (Math.abs(diffX) > swipeThreshold && Math.abs(diffX) > diffY) {
				if (diffX > 0) {
					nextSlide();
				} else {
					prevSlide();
				}
				resetAutoAdvance();
			}
		});

		// Mouse drag support for desktop.
		var mouseStartX = 0;
		var mouseIsDragging = false;

		track.addEventListener('mousedown', function (e) {
			mouseStartX = e.clientX;
			mouseIsDragging = true;
			track.style.cursor = 'grabbing';
			e.preventDefault();
		});

		document.addEventListener('mousemove', function (e) {
			if (!mouseIsDragging) return;
			e.preventDefault();
		});

		document.addEventListener('mouseup', function (e) {
			if (!mouseIsDragging) return;
			mouseIsDragging = false;
			track.style.cursor = '';

			var diffX = mouseStartX - e.clientX;

			if (Math.abs(diffX) > swipeThreshold) {
				if (diffX > 0) {
					nextSlide();
				} else {
					prevSlide();
				}
				resetAutoAdvance();
			}
		});

		// Auto-advance.
		function startAutoAdvance() {
			var prefersReducedMotion = window.matchMedia(
				'(prefers-reduced-motion: reduce)'
			).matches;
			if (prefersReducedMotion) return;

			autoAdvanceInterval = setInterval(nextSlide, autoAdvanceDelay);
		}

		function resetAutoAdvance() {
			clearInterval(autoAdvanceInterval);
			startAutoAdvance();
		}

		// Pause on hover / focus.
		container.addEventListener('mouseenter', function () {
			clearInterval(autoAdvanceInterval);
		});

		container.addEventListener('mouseleave', function () {
			startAutoAdvance();
		});

		container.addEventListener('focusin', function () {
			clearInterval(autoAdvanceInterval);
		});

		container.addEventListener('focusout', function () {
			startAutoAdvance();
		});

		// Start auto-advance.
		startAutoAdvance();
	}
})();
