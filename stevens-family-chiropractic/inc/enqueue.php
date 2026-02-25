<?php
/**
 * Enqueue Scripts & Styles
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', 'stevens_enqueue_assets' );

function stevens_enqueue_assets() {
	// Google Fonts.
	wp_enqueue_style(
		'stevens-google-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap',
		array(),
		null
	);

	// Main stylesheet.
	wp_enqueue_style(
		'stevens-main',
		STEVENS_THEME_URI . '/assets/css/main.css',
		array( 'stevens-google-fonts' ),
		STEVENS_THEME_VERSION
	);

	// Theme stylesheet (for metadata / minor overrides).
	wp_enqueue_style(
		'stevens-style',
		get_stylesheet_uri(),
		array( 'stevens-main' ),
		STEVENS_THEME_VERSION
	);

	// Main JS.
	wp_enqueue_script(
		'stevens-main',
		STEVENS_THEME_URI . '/assets/js/main.js',
		array(),
		STEVENS_THEME_VERSION,
		true
	);

	// Carousel JS (only on pages that need it).
	if ( is_front_page() ) {
		wp_enqueue_script(
			'stevens-carousel',
			STEVENS_THEME_URI . '/assets/js/carousel.js',
			array(),
			STEVENS_THEME_VERSION,
			true
		);
	}

	// Forms JS (only on pages with forms).
	if ( is_front_page() || is_page( 'contact' ) ) {
		wp_enqueue_script(
			'stevens-forms',
			STEVENS_THEME_URI . '/assets/js/forms.js',
			array(),
			STEVENS_THEME_VERSION,
			true
		);

		wp_localize_script( 'stevens-forms', 'stevensAjax', array(
			'url'   => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce( 'stevens_form_nonce' ),
		) );
	}
}

add_action( 'admin_enqueue_scripts', 'stevens_admin_assets' );

function stevens_admin_assets( $hook ) {
	if ( in_array( $hook, array( 'post.php', 'post-new.php' ), true ) ) {
		wp_enqueue_style(
			'stevens-admin',
			STEVENS_THEME_URI . '/assets/css/admin.css',
			array(),
			STEVENS_THEME_VERSION
		);
	}
}

add_action( 'customize_preview_init', 'stevens_customizer_preview_js' );

function stevens_customizer_preview_js() {
	wp_enqueue_script(
		'stevens-customizer-preview',
		STEVENS_THEME_URI . '/assets/js/customizer-preview.js',
		array( 'customize-preview' ),
		STEVENS_THEME_VERSION,
		true
	);
}
