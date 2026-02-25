<?php

function flavor_studio_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'flavor-studio'),
    ));

    add_image_size('gallery-thumb', 800, 800, true);
    add_image_size('featured-large', 1200, 900, true);
}
add_action('after_setup_theme', 'flavor_studio_setup');

function flavor_studio_scripts() {
    wp_enqueue_style('flavor-studio-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap', array(), null);
    wp_enqueue_style('flavor-studio-style', get_stylesheet_uri(), array(), '1.0');
    wp_enqueue_script('flavor-studio-script', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);

    if (is_page_template('page-contact.php')) {
        wp_localize_script('flavor-studio-script', 'flavorAjax', array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'nonce'   => wp_create_nonce('flavor_contact_nonce'),
        ));
    }
}
add_action('wp_enqueue_scripts', 'flavor_studio_scripts');

// Gallery custom post type
function flavor_studio_gallery_cpt() {
    register_post_type('gallery', array(
        'labels' => array(
            'name'               => 'Gallery',
            'singular_name'      => 'Gallery Image',
            'add_new_item'       => 'Add New Image',
            'edit_item'          => 'Edit Image',
            'all_items'          => 'All Images',
            'menu_name'          => 'Gallery',
        ),
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-camera',
        'supports'     => array('title', 'thumbnail'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'flavor_studio_gallery_cpt');

// Handle contact form AJAX
function flavor_studio_handle_contact() {
    check_ajax_referer('flavor_contact_nonce', 'nonce');

    $name    = sanitize_text_field($_POST['name'] ?? '');
    $email   = sanitize_email($_POST['email'] ?? '');
    $service = sanitize_text_field($_POST['service'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error('Please fill in all required fields.');
    }

    if (!is_email($email)) {
        wp_send_json_error('Please enter a valid email address.');
    }

    $to = get_option('admin_email');
    $subject = 'New Inquiry from ' . $name;
    $body = "Name: {$name}\nEmail: {$email}\nService: {$service}\n\nMessage:\n{$message}";
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success('Thank you! Your message has been sent.');
    } else {
        wp_send_json_error('Something went wrong. Please try again.');
    }
}
add_action('wp_ajax_flavor_contact', 'flavor_studio_handle_contact');
add_action('wp_ajax_nopriv_flavor_contact', 'flavor_studio_handle_contact');
