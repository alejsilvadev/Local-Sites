<?php
/**
 * Template Name: Front Page
 * The front page template
 */
get_header();
?>

<!-- HERO -->
<section class="hero">
    <div class="hero__bg"></div>
    <div class="hero__content">
        <p class="hero__label">Authentic Italian Cuisine Since 1987</p>
        <h1 class="hero__title">La Tavola</h1>
        <p class="hero__subtitle">Where every meal is a celebration of Italy's finest culinary traditions, crafted with passion and served with love.</p>
        <div class="hero__actions">
            <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="btn btn--filled">View Menu</a>
            <a href="#reservations" class="btn">Reserve a Table</a>
        </div>
    </div>
    <div class="hero__scroll">
        <span>Scroll</span>
        <div class="hero__scroll-line"></div>
    </div>
</section>

<!-- INFO STRIP -->
<section class="info-strip fade-in">
    <div class="info-strip__item">
        <span class="info-strip__number">37</span>
        <span class="info-strip__label">Years of Tradition</span>
    </div>
    <div class="info-strip__item">
        <span class="info-strip__number">200+</span>
        <span class="info-strip__label">Wine Selection</span>
    </div>
    <div class="info-strip__item">
        <span class="info-strip__number">100%</span>
        <span class="info-strip__label">Fresh Ingredients</span>
    </div>
    <div class="info-strip__item">
        <span class="info-strip__number">5</span>
        <span class="info-strip__label">Star Reviews</span>
    </div>
</section>

<!-- ABOUT -->
<section class="section" id="about">
    <div class="container">
        <div class="about">
            <div class="about__image fade-in">
                <div class="about__image-placeholder">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" style="color: var(--color-gold)">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                        <line x1="9" y1="9" x2="9.01" y2="9"/>
                        <line x1="15" y1="9" x2="15.01" y2="9"/>
                    </svg>
                </div>
            </div>
            <div class="about__content fade-in">
                <span class="about__label">Our Story</span>
                <h2 class="about__title">A Legacy of Italian Passion</h2>
                <p class="about__text">
                    Founded in 1987 by Chef Marco Bellini, La Tavola began as a humble trattoria in the heart of Little Italy. What started as a family dream has blossomed into one of New York's most beloved Italian restaurants.
                </p>
                <p class="about__text">
                    Every dish on our menu pays homage to the recipes passed down through three generations of the Bellini family. We source our ingredients from local farms and import our olive oils, aged cheeses, and cured meats directly from small producers across Italy.
                </p>
                <p class="about__signature">&mdash; Chef Marco Bellini</p>
            </div>
        </div>
    </div>
</section>

<!-- FEATURED DISHES -->
<section class="section section--dark">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-header__label">From Our Kitchen</span>
            <h2 class="section-header__title">Signature Dishes</h2>
            <div class="section-header__divider"></div>
            <p class="section-header__desc">Each dish is a testament to our commitment to authentic Italian flavors, prepared with the freshest seasonal ingredients.</p>
        </div>

        <div class="featured-grid">
            <div class="dish-card fade-in fade-in-delay-1">
                <span class="dish-card__icon">&#127837;</span>
                <h3 class="dish-card__name">Cacio e Pepe</h3>
                <p class="dish-card__desc">Handmade tonnarelli pasta with Pecorino Romano and freshly cracked Tellicherry black pepper.</p>
                <span class="dish-card__price">$24</span>
            </div>

            <div class="dish-card fade-in fade-in-delay-2">
                <span class="dish-card__icon">&#129385;</span>
                <h3 class="dish-card__name">Osso Buco</h3>
                <p class="dish-card__desc">Braised veal shanks in white wine, vegetables, and broth, served with saffron risotto Milanese.</p>
                <span class="dish-card__price">$42</span>
            </div>

            <div class="dish-card fade-in fade-in-delay-3">
                <span class="dish-card__icon">&#127856;</span>
                <h3 class="dish-card__name">Tiramis&ugrave;</h3>
                <p class="dish-card__desc">Our legendary recipe with mascarpone, espresso-soaked Savoiardi, and Marsala wine.</p>
                <span class="dish-card__price">$16</span>
            </div>
        </div>

        <div class="text-center" style="margin-top: 3rem;">
            <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="btn fade-in">View Full Menu &rarr;</a>
        </div>
    </div>
</section>

<!-- TESTIMONIAL -->
<section class="section">
    <div class="container">
        <div class="testimonial fade-in">
            <p class="testimonial__quote">
                The most authentic Italian dining experience outside of Rome. Every visit feels like being welcomed into the Bellini family home.
            </p>
            <p class="testimonial__author">The New York Times</p>
            <p class="testimonial__role">Restaurant Review, 2024</p>
        </div>
    </div>
</section>

<!-- RESERVATION CTA -->
<section class="section cta-section" id="reservations">
    <div class="container">
        <div class="section-header fade-in">
            <span class="section-header__label">Join Us</span>
            <h2 class="section-header__title">Reserve Your Table</h2>
            <div class="section-header__divider"></div>
            <p class="section-header__desc">Experience the warmth of Italian hospitality. Book your table for an unforgettable evening of exceptional food and wine.</p>
        </div>
        <div class="fade-in" style="text-align:center;">
            <a href="tel:+12125551987" class="btn btn--filled">Call to Reserve</a>
            <span class="cta-section__phone">(212) 555-1987</span>
        </div>
    </div>
</section>

<?php get_footer(); ?>
