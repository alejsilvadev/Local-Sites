/**
 * La Tavola - Main JavaScript
 */

(function () {
    'use strict';

    // ── Navbar scroll effect ──
    const nav = document.getElementById('site-nav');

    function handleScroll() {
        if (window.scrollY > 60) {
            nav.classList.add('site-nav--scrolled');
        } else {
            nav.classList.remove('site-nav--scrolled');
        }
    }

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();

    // ── Mobile nav toggle ──
    const toggle = document.getElementById('nav-toggle');
    const navLinks = document.querySelector('.site-nav__links');

    if (toggle && navLinks) {
        toggle.addEventListener('click', function () {
            toggle.classList.toggle('active');
            navLinks.classList.toggle('open');
        });

        // Close menu on link click
        navLinks.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                toggle.classList.remove('active');
                navLinks.classList.remove('open');
            });
        });
    }

    // ── Scroll-triggered fade-in animations ──
    var fadeEls = document.querySelectorAll('.fade-in');

    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
        );

        fadeEls.forEach(function (el) {
            observer.observe(el);
        });
    } else {
        // Fallback: show everything
        fadeEls.forEach(function (el) {
            el.classList.add('visible');
        });
    }

    // ── Menu page: category nav buttons ──
    var menuNavBtns = document.querySelectorAll('.menu-nav__btn');

    if (menuNavBtns.length) {
        menuNavBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                // Update active state
                menuNavBtns.forEach(function (b) {
                    b.classList.remove('active');
                });
                btn.classList.add('active');

                // Scroll to section
                var target = document.getElementById(btn.getAttribute('data-target'));
                if (target) {
                    var navHeight = document.querySelector('.menu-nav').offsetHeight + 20;
                    var topPos = target.getBoundingClientRect().top + window.pageYOffset - navHeight - 60;
                    window.scrollTo({ top: topPos, behavior: 'smooth' });
                }
            });
        });

        // Update active button on scroll
        var categories = document.querySelectorAll('.menu-category');

        window.addEventListener(
            'scroll',
            function () {
                var scrollPos = window.scrollY + 200;

                categories.forEach(function (section) {
                    var top = section.offsetTop;
                    var height = section.offsetHeight;
                    var id = section.getAttribute('id');

                    if (scrollPos >= top && scrollPos < top + height) {
                        menuNavBtns.forEach(function (b) {
                            b.classList.remove('active');
                            if (b.getAttribute('data-target') === id) {
                                b.classList.add('active');
                            }
                        });
                    }
                });
            },
            { passive: true }
        );
    }

    // ── Smooth scroll for anchor links ──
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                var offset = nav ? nav.offsetHeight + 20 : 80;
                var topPos = target.getBoundingClientRect().top + window.pageYOffset - offset;
                window.scrollTo({ top: topPos, behavior: 'smooth' });
            }
        });
    });
})();
