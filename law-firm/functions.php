<?php
/**
 * Law Firm theme functions and definitions.
 *
 * @package Law_Firm
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function law_firm_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'navigation-widgets',
    ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'law-firm' ),
    ) );
}
add_action( 'after_setup_theme', 'law_firm_setup' );

function law_firm_enqueue_styles() {
    wp_enqueue_style( 'law-firm-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'law_firm_enqueue_styles' );
