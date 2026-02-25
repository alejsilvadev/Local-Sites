<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-contact">
            <a href="tel:+15551234567">&#9742; (555) 123-4567</a>
            <a href="mailto:contact@smithjohnsonlaw.com">&#9993; contact@smithjohnsonlaw.com</a>
        </div>
        <div class="top-bar-social">
            <span>Mon&ndash;Fri: 8:00 AM &ndash; 6:00 PM</span>
        </div>
    </div>
</div>

<!-- Main Header -->
<header class="site-header">
    <div class="container">
        <div class="site-logo">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    Smith &amp; <span>Johnson</span> Law
                </a>
            <?php endif; ?>
        </div>

        <button class="nav-toggle" aria-label="Toggle navigation" onclick="document.querySelector('.main-nav').classList.toggle('active')">
            <span></span><span></span><span></span>
        </button>

        <nav class="main-nav">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'depth'          => 1,
                ) );
            } else {
                echo '<ul>';
                echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
                echo '<li><a href="#practice-areas">Practice Areas</a></li>';
                echo '<li><a href="#about">About</a></li>';
                echo '<li><a href="#attorneys">Attorneys</a></li>';
                echo '<li><a href="#testimonials">Testimonials</a></li>';
                echo '<li><a href="#contact">Contact</a></li>';
                echo '</ul>';
            }
            ?>
        </nav>

        <div class="nav-cta">
            <a href="#contact" class="btn btn-primary">Free Consultation</a>
        </div>
    </div>
</header>
