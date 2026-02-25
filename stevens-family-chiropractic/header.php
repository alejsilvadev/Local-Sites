<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main-content">
	<?php esc_html_e( 'Skip to content', 'stevens-chiro' ); ?>
</a>

<!-- Top Bar -->
<div class="top-bar">
	<div class="container top-bar__inner">
		<div class="top-bar__contact">
			<?php
			$phone = get_theme_mod( 'stevens_phone', '(555) 123-4567' );
			$hours_display = get_theme_mod( 'stevens_hours_monday_friday', '9:00 AM - 6:00 PM' );
			?>
			<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>" class="top-bar__phone">
				<svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
				<?php echo esc_html( $phone ); ?>
			</a>
			<span class="top-bar__hours">
				<svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
				Mon-Fri: <?php echo esc_html( $hours_display ); ?>
			</span>
		</div>
		<div class="top-bar__social">
			<?php stevens_social_links(); ?>
		</div>
	</div>
</div>

<!-- Main Header -->
<header class="site-header" id="site-header">
	<div class="container site-header__inner">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			<?php endif; ?>
		</div>

		<nav class="main-nav" id="main-nav" aria-label="<?php esc_attr_e( 'Primary Navigation', 'stevens-chiro' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class'     => 'nav-menu',
				'container'      => false,
				'fallback_cb'    => 'stevens_fallback_menu',
				'depth'          => 2,
			) );
			?>
		</nav>

		<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="btn btn--secondary header-cta">
			<?php esc_html_e( 'Book Appointment', 'stevens-chiro' ); ?>
		</a>

		<button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-controls="main-nav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation menu', 'stevens-chiro' ); ?>">
			<span class="hamburger">
				<span></span>
				<span></span>
				<span></span>
			</span>
		</button>
	</div>
</header>

<main id="main-content" class="site-main">
