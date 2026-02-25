<?php
/**
 * Custom Post Types
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

add_action( 'init', 'stevens_register_cpts' );

function stevens_register_cpts() {
	// Services CPT.
	register_post_type( 'service', array(
		'labels' => array(
			'name'               => esc_html__( 'Services', 'stevens-chiro' ),
			'singular_name'      => esc_html__( 'Service', 'stevens-chiro' ),
			'add_new'            => esc_html__( 'Add New Service', 'stevens-chiro' ),
			'add_new_item'       => esc_html__( 'Add New Service', 'stevens-chiro' ),
			'edit_item'          => esc_html__( 'Edit Service', 'stevens-chiro' ),
			'new_item'           => esc_html__( 'New Service', 'stevens-chiro' ),
			'view_item'          => esc_html__( 'View Service', 'stevens-chiro' ),
			'search_items'       => esc_html__( 'Search Services', 'stevens-chiro' ),
			'not_found'          => esc_html__( 'No services found', 'stevens-chiro' ),
			'not_found_in_trash' => esc_html__( 'No services found in Trash', 'stevens-chiro' ),
			'all_items'          => esc_html__( 'All Services', 'stevens-chiro' ),
			'menu_name'          => esc_html__( 'Services', 'stevens-chiro' ),
		),
		'public'       => true,
		'has_archive'  => false,
		'menu_icon'    => 'dashicons-heart',
		'supports'     => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
		'show_in_rest' => true,
		'rewrite'      => array( 'slug' => 'service' ),
	) );

	// Testimonials CPT.
	register_post_type( 'testimonial', array(
		'labels' => array(
			'name'               => esc_html__( 'Testimonials', 'stevens-chiro' ),
			'singular_name'      => esc_html__( 'Testimonial', 'stevens-chiro' ),
			'add_new'            => esc_html__( 'Add New Testimonial', 'stevens-chiro' ),
			'add_new_item'       => esc_html__( 'Add New Testimonial', 'stevens-chiro' ),
			'edit_item'          => esc_html__( 'Edit Testimonial', 'stevens-chiro' ),
			'new_item'           => esc_html__( 'New Testimonial', 'stevens-chiro' ),
			'view_item'          => esc_html__( 'View Testimonial', 'stevens-chiro' ),
			'search_items'       => esc_html__( 'Search Testimonials', 'stevens-chiro' ),
			'not_found'          => esc_html__( 'No testimonials found', 'stevens-chiro' ),
			'not_found_in_trash' => esc_html__( 'No testimonials found in Trash', 'stevens-chiro' ),
			'all_items'          => esc_html__( 'All Testimonials', 'stevens-chiro' ),
			'menu_name'          => esc_html__( 'Testimonials', 'stevens-chiro' ),
		),
		'public'       => true,
		'has_archive'  => false,
		'menu_icon'    => 'dashicons-format-quote',
		'supports'     => array( 'title', 'editor', 'thumbnail' ),
		'show_in_rest' => true,
		'rewrite'      => array( 'slug' => 'testimonial' ),
	) );
}
