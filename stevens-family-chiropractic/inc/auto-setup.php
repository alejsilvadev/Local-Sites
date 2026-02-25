<?php
/**
 * Auto-Setup on Theme Activation
 *
 * Creates pages, nav menu, sample services and testimonials.
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

add_action( 'after_switch_theme', 'stevens_auto_setup' );

function stevens_auto_setup() {
	// Only run once.
	if ( get_option( 'stevens_theme_setup_complete' ) ) {
		return;
	}

	stevens_create_pages();
	stevens_create_nav_menu();
	stevens_create_sample_services();
	stevens_create_sample_testimonials();
	stevens_set_front_page();

	// Flush rewrite rules for CPTs.
	flush_rewrite_rules();

	update_option( 'stevens_theme_setup_complete', true );
}

function stevens_create_pages() {
	$pages = array(
		'home'     => array(
			'title'   => 'Home',
			'content' => '',
		),
		'services' => array(
			'title'   => 'Services',
			'content' => 'We offer a wide range of chiropractic services designed to help you and your family achieve optimal health.',
		),
		'about'    => array(
			'title'   => 'About',
			'content' => 'Stevens Family Chiropractic has been serving our community with compassionate, evidence-based chiropractic care. Our mission is to help every patient achieve their optimal health potential.',
		),
		'contact'  => array(
			'title'   => 'Contact',
			'content' => 'We would love to hear from you. Use the form below to send us a message or request an appointment.',
		),
	);

	foreach ( $pages as $slug => $page_data ) {
		if ( get_page_by_path( $slug ) ) {
			continue;
		}

		wp_insert_post( array(
			'post_title'   => $page_data['title'],
			'post_name'    => $slug,
			'post_content' => $page_data['content'],
			'post_status'  => 'publish',
			'post_type'    => 'page',
		) );
	}
}

function stevens_set_front_page() {
	$home_page = get_page_by_path( 'home' );
	if ( $home_page ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $home_page->ID );
	}
}

function stevens_create_nav_menu() {
	$menu_name = 'Primary Navigation';
	$menu_exists = wp_get_nav_menu_object( $menu_name );

	if ( $menu_exists ) {
		return;
	}

	$menu_id = wp_create_nav_menu( $menu_name );

	if ( is_wp_error( $menu_id ) ) {
		return;
	}

	$pages_order = array( 'home', 'services', 'about', 'contact' );
	$position = 0;

	foreach ( $pages_order as $slug ) {
		$page = get_page_by_path( $slug );
		if ( ! $page ) {
			continue;
		}

		$position++;
		wp_update_nav_menu_item( $menu_id, 0, array(
			'menu-item-title'     => $page->post_title,
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $page->ID,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
			'menu-item-position'  => $position,
		) );
	}

	$locations = get_theme_mod( 'nav_menu_locations', array() );
	$locations['primary'] = $menu_id;
	$locations['footer']  = $menu_id;
	set_theme_mod( 'nav_menu_locations', $locations );
}

function stevens_create_sample_services() {
	if ( get_posts( array( 'post_type' => 'service', 'posts_per_page' => 1 ) ) ) {
		return;
	}

	$services = array(
		array(
			'title'    => 'Spinal Adjustments',
			'content'  => 'Our core chiropractic service uses precise, gentle adjustments to restore proper spinal alignment. This helps relieve pain, improve nervous system function, and promote overall health.',
			'icon'     => 'spine',
			'featured' => '1',
			'order'    => 1,
		),
		array(
			'title'    => 'Massage Therapy',
			'content'  => 'Therapeutic massage works hand-in-hand with chiropractic care to relieve muscle tension, reduce stress, and accelerate healing. Our licensed massage therapists customize each session to your needs.',
			'icon'     => 'hands',
			'featured' => '1',
			'order'    => 2,
		),
		array(
			'title'    => 'Posture Correction',
			'content'  => 'Poor posture can lead to chronic pain and health issues. Our posture correction program includes assessment, adjustments, exercises, and ergonomic guidance to help you stand tall and pain-free.',
			'icon'     => 'body',
			'featured' => '1',
			'order'    => 3,
		),
		array(
			'title'    => 'Family Wellness Care',
			'content'  => 'Chiropractic care benefits the whole family, from infants to seniors. We provide age-appropriate, gentle treatments designed to keep every family member healthy and active.',
			'icon'     => 'family',
			'featured' => '1',
			'order'    => 4,
		),
	);

	foreach ( $services as $service ) {
		$post_id = wp_insert_post( array(
			'post_title'   => $service['title'],
			'post_content' => $service['content'],
			'post_status'  => 'publish',
			'post_type'    => 'service',
			'menu_order'   => $service['order'],
		) );

		if ( ! is_wp_error( $post_id ) ) {
			update_post_meta( $post_id, '_stevens_service_icon', $service['icon'] );
			update_post_meta( $post_id, '_stevens_service_featured', $service['featured'] );
		}
	}
}

function stevens_create_sample_testimonials() {
	if ( get_posts( array( 'post_type' => 'testimonial', 'posts_per_page' => 1 ) ) ) {
		return;
	}

	$testimonials = array(
		array(
			'title'   => 'Sarah M.',
			'content' => 'Dr. Stevens and the entire team have been incredible. After years of chronic back pain, I finally found relief through their personalized treatment plan. I can now enjoy playing with my kids without constant discomfort.',
			'rating'  => 5,
			'role'    => 'Patient since 2021',
		),
		array(
			'title'   => 'James R.',
			'content' => 'I was skeptical about chiropractic care at first, but the results speak for themselves. My migraines have decreased dramatically and my overall quality of life has improved significantly. Highly recommend!',
			'rating'  => 5,
			'role'    => 'Patient since 2022',
		),
		array(
			'title'   => 'Emily T.',
			'content' => 'The whole family comes here, from my 8-year-old to my 70-year-old mother. The care is always gentle, professional, and effective. We wouldn\'t go anywhere else for our chiropractic needs.',
			'rating'  => 5,
			'role'    => 'Patient since 2020',
		),
	);

	foreach ( $testimonials as $testimonial ) {
		$post_id = wp_insert_post( array(
			'post_title'   => $testimonial['title'],
			'post_content' => $testimonial['content'],
			'post_status'  => 'publish',
			'post_type'    => 'testimonial',
		) );

		if ( ! is_wp_error( $post_id ) ) {
			update_post_meta( $post_id, '_stevens_testimonial_rating', $testimonial['rating'] );
			update_post_meta( $post_id, '_stevens_testimonial_role', $testimonial['role'] );
		}
	}
}
