<?php
/**
 * La Tavola - Theme Functions
 */

// Theme setup
function la_tavola_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support('menus');

    register_nav_menus([
        'primary' => __('Primary Menu', 'la-tavola'),
    ]);
}
add_action('after_setup_theme', 'la_tavola_setup');

// Enqueue styles and scripts
function la_tavola_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'la-tavola-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400;1,500&family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&display=swap',
        [],
        null
    );

    // Theme stylesheet
    wp_enqueue_style('la-tavola-style', get_stylesheet_uri(), ['la-tavola-fonts'], wp_get_theme()->get('Version'));

    // Theme script
    wp_enqueue_script('la-tavola-script', get_template_directory_uri() . '/assets/js/main.js', [], wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'la_tavola_scripts');

// Custom walker for nav menu (simple flat list)
function la_tavola_menu_fallback() {
    echo '<ul class="site-nav__links">';
    echo '<li><a href="' . esc_url(home_url('/')) . '" class="current">Home</a></li>';
    echo '<li><a href="' . esc_url(home_url('/menu/')) . '">Menu</a></li>';
    echo '<li><a href="#about">About</a></li>';
    echo '<li><a href="#contact">Contact</a></li>';
    echo '<li><a href="#reservations" class="btn btn--small">Reserve</a></li>';
    echo '</ul>';
}

// Register widget areas
function la_tavola_widgets_init() {
    register_sidebar([
        'name'          => __('Footer Widget', 'la-tavola'),
        'id'            => 'footer-widget',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ]);
}
add_action('widgets_init', 'la_tavola_widgets_init');

// Allow SVG uploads
function la_tavola_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'la_tavola_mime_types');

// Custom body classes
function la_tavola_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'front-page';
    }
    if (is_page_template('page-menu.php')) {
        $classes[] = 'menu-page';
    }
    return $classes;
}
add_filter('body_class', 'la_tavola_body_classes');
