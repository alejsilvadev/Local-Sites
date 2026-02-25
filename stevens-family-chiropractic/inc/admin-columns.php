<?php
/**
 * Custom Admin List Columns for CPTs
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

// --- Services Columns ---
add_filter( 'manage_service_posts_columns', 'stevens_service_columns' );

function stevens_service_columns( $columns ) {
	$new_columns = array();
	foreach ( $columns as $key => $value ) {
		$new_columns[ $key ] = $value;
		if ( 'title' === $key ) {
			$new_columns['service_icon']     = esc_html__( 'Icon', 'stevens-chiro' );
			$new_columns['service_featured'] = esc_html__( 'Featured', 'stevens-chiro' );
		}
	}
	return $new_columns;
}

add_action( 'manage_service_posts_custom_column', 'stevens_service_column_content', 10, 2 );

function stevens_service_column_content( $column, $post_id ) {
	if ( 'service_icon' === $column ) {
		$icon = get_post_meta( $post_id, '_stevens_service_icon', true );
		echo esc_html( ucfirst( $icon ?: 'spine' ) );
	}

	if ( 'service_featured' === $column ) {
		$featured = get_post_meta( $post_id, '_stevens_service_featured', true );
		echo $featured === '1' ? '<span style="color: #0A6E6E; font-weight: bold;">&#9733; Yes</span>' : 'No';
	}
}

// --- Testimonial Columns ---
add_filter( 'manage_testimonial_posts_columns', 'stevens_testimonial_columns' );

function stevens_testimonial_columns( $columns ) {
	$new_columns = array();
	foreach ( $columns as $key => $value ) {
		$new_columns[ $key ] = $value;
		if ( 'title' === $key ) {
			$new_columns['testimonial_rating'] = esc_html__( 'Rating', 'stevens-chiro' );
			$new_columns['testimonial_role']   = esc_html__( 'Description', 'stevens-chiro' );
		}
	}
	return $new_columns;
}

add_action( 'manage_testimonial_posts_custom_column', 'stevens_testimonial_column_content', 10, 2 );

function stevens_testimonial_column_content( $column, $post_id ) {
	if ( 'testimonial_rating' === $column ) {
		$rating = get_post_meta( $post_id, '_stevens_testimonial_rating', true );
		$rating = $rating ? intval( $rating ) : 5;
		echo '<span style="color: #C8963E;">' . esc_html( str_repeat( '★', $rating ) ) . '</span>';
	}

	if ( 'testimonial_role' === $column ) {
		echo esc_html( get_post_meta( $post_id, '_stevens_testimonial_role', true ) );
	}
}
