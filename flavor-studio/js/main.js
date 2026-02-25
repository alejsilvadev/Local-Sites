document.addEventListener('DOMContentLoaded', function () {

    /* ===== HEADER SCROLL + HERO PARALLAX ===== */
    const header = document.getElementById('site-header');
    const heroBg = document.getElementById('hero-bg');
    var ticking = false;

    window.addEventListener('scroll', function () {
        if (!ticking) {
            window.requestAnimationFrame(function () {
                var scrollY = window.scrollY;
                if (header) {
                    header.classList.toggle('scrolled', scrollY > 60);
                }
                if (heroBg && scrollY < window.innerHeight) {
                    heroBg.style.transform = 'translateY(' + (scrollY * 0.35) + 'px)';
                }
                ticking = false;
            });
            ticking = true;
        }
    });

    /* ===== MOBILE MENU ===== */
    const toggle = document.getElementById('menu-toggle');
    const nav = document.getElementById('main-nav');
    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            toggle.classList.toggle('active');
            nav.classList.toggle('open');
        });
        nav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                toggle.classList.remove('active');
                nav.classList.remove('open');
            });
        });
    }

    /* ===== FADE-IN ON SCROLL ===== */
    const fadeEls = document.querySelectorAll('.fade-in');
    if (fadeEls.length) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        fadeEls.forEach(function (el) {
            observer.observe(el);
        });
    }

    /* ===== LIGHTBOX ===== */
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxClose = document.getElementById('lightbox-close');
    const lightboxPrev = document.getElementById('lightbox-prev');
    const lightboxNext = document.getElementById('lightbox-next');
    const galleryItems = document.querySelectorAll('.gallery-item[data-full]');
    let currentIndex = 0;

    function openLightbox(index) {
        currentIndex = index;
        var src = galleryItems[index].getAttribute('data-full');
        lightboxImg.src = src;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        lightbox.classList.remove('active');
        lightboxImg.src = '';
        document.body.style.overflow = '';
    }

    if (galleryItems.length && lightbox) {
        galleryItems.forEach(function (item, i) {
            item.addEventListener('click', function () {
                openLightbox(i);
            });
        });

        lightboxClose.addEventListener('click', closeLightbox);

        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox) closeLightbox();
        });

        lightboxPrev.addEventListener('click', function (e) {
            e.stopPropagation();
            currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
            lightboxImg.src = galleryItems[currentIndex].getAttribute('data-full');
        });

        lightboxNext.addEventListener('click', function (e) {
            e.stopPropagation();
            currentIndex = (currentIndex + 1) % galleryItems.length;
            lightboxImg.src = galleryItems[currentIndex].getAttribute('data-full');
        });

        document.addEventListener('keydown', function (e) {
            if (!lightbox.classList.contains('active')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') lightboxPrev.click();
            if (e.key === 'ArrowRight') lightboxNext.click();
        });
    }

    /* ===== CONTACT FORM ===== */
    var form = document.getElementById('contact-form');
    if (form && typeof flavorAjax !== 'undefined') {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var msgEl = document.getElementById('form-message');
            var btn = form.querySelector('.form-submit');
            var originalText = btn.textContent;

            btn.textContent = 'Sending...';
            btn.disabled = true;
            msgEl.className = 'form-message';
            msgEl.style.display = 'none';

            var data = new FormData(form);
            data.append('action', 'flavor_contact');
            data.append('nonce', flavorAjax.nonce);

            fetch(flavorAjax.ajaxurl, {
                method: 'POST',
                body: data,
            })
            .then(function (r) { return r.json(); })
            .then(function (res) {
                msgEl.style.display = 'block';
                if (res.success) {
                    msgEl.className = 'form-message success';
                    msgEl.textContent = res.data;
                    form.reset();
                } else {
                    msgEl.className = 'form-message error';
                    msgEl.textContent = res.data;
                }
            })
            .catch(function () {
                msgEl.style.display = 'block';
                msgEl.className = 'form-message error';
                msgEl.textContent = 'Network error. Please try again.';
            })
            .finally(function () {
                btn.textContent = originalText;
                btn.disabled = false;
            });
        });
    }

});
