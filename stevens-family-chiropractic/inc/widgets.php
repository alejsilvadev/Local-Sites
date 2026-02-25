<?php
/**
 * Widget Areas
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

add_action( 'widgets_init', 'stevens_register_sidebars' );

function stevens_register_sidebars() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'stevens-chiro' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here for the blog sidebar.', 'stevens-chiro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'stevens-chiro' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'First footer widget area.', 'stevens-chiro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'stevens-chiro' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Second footer widget area.', 'stevens-chiro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'stevens-chiro' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Third footer widget area.', 'stevens-chiro' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
