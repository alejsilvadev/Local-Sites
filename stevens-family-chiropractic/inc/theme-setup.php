<?php
/**
 * Theme Setup
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'stevens_theme_setup' );

function stevens_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 280,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Custom image sizes.
	add_image_size( 'stevens-hero', 1920, 1080, true );
	add_image_size( 'stevens-service', 600, 400, true );
	add_image_size( 'stevens-testimonial', 150, 150, true );
	add_image_size( 'stevens-about', 800, 600, true );

	// Navigation menus.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Navigation', 'stevens-chiro' ),
		'footer'  => esc_html__( 'Footer Navigation', 'stevens-chiro' ),
	) );
}
