<?php
/**
 * Meta Boxes
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

add_action( 'add_meta_boxes', 'stevens_register_meta_boxes' );

function stevens_register_meta_boxes() {
	// Testimonial meta box.
	add_meta_box(
		'stevens_testimonial_details',
		esc_html__( 'Testimonial Details', 'stevens-chiro' ),
		'stevens_testimonial_meta_box_html',
		'testimonial',
		'side',
		'default'
	);

	// Service meta box.
	add_meta_box(
		'stevens_service_details',
		esc_html__( 'Service Details', 'stevens-chiro' ),
		'stevens_service_meta_box_html',
		'service',
		'side',
		'default'
	);
}

function stevens_testimonial_meta_box_html( $post ) {
	wp_nonce_field( 'stevens_testimonial_meta', 'stevens_testimonial_nonce' );

	$rating = get_post_meta( $post->ID, '_stevens_testimonial_rating', true );
	$role   = get_post_meta( $post->ID, '_stevens_testimonial_role', true );

	if ( ! $rating ) {
		$rating = 5;
	}
	?>
	<p>
		<label for="stevens_testimonial_rating"><strong><?php esc_html_e( 'Rating (1-5 stars)', 'stevens-chiro' ); ?></strong></label><br>
		<select id="stevens_testimonial_rating" name="stevens_testimonial_rating" class="widefat">
			<?php for ( $i = 5; $i >= 1; $i-- ) : ?>
				<option value="<?php echo esc_attr( $i ); ?>" <?php selected( $rating, $i ); ?>>
					<?php echo esc_html( str_repeat( '★', $i ) . str_repeat( '☆', 5 - $i ) ); ?>
				</option>
			<?php endfor; ?>
		</select>
	</p>
	<p>
		<label for="stevens_testimonial_role"><strong><?php esc_html_e( 'Patient Description', 'stevens-chiro' ); ?></strong></label><br>
		<input type="text" id="stevens_testimonial_role" name="stevens_testimonial_role" value="<?php echo esc_attr( $role ); ?>" class="widefat" placeholder="<?php esc_attr_e( 'e.g. Patient since 2020', 'stevens-chiro' ); ?>">
	</p>
	<?php
}

function stevens_service_meta_box_html( $post ) {
	wp_nonce_field( 'stevens_service_meta', 'stevens_service_nonce' );

	$icon     = get_post_meta( $post->ID, '_stevens_service_icon', true );
	$featured = get_post_meta( $post->ID, '_stevens_service_featured', true );

	if ( ! $icon ) {
		$icon = 'spine';
	}
	?>
	<p>
		<label for="stevens_service_icon"><strong><?php esc_html_e( 'Icon', 'stevens-chiro' ); ?></strong></label><br>
		<select id="stevens_service_icon" name="stevens_service_icon" class="widefat">
			<option value="spine" <?php selected( $icon, 'spine' ); ?>><?php esc_html_e( 'Spine', 'stevens-chiro' ); ?></option>
			<option value="hands" <?php selected( $icon, 'hands' ); ?>><?php esc_html_e( 'Hands / Massage', 'stevens-chiro' ); ?></option>
			<option value="body" <?php selected( $icon, 'body' ); ?>><?php esc_html_e( 'Body / Posture', 'stevens-chiro' ); ?></option>
			<option value="family" <?php selected( $icon, 'family' ); ?>><?php esc_html_e( 'Family', 'stevens-chiro' ); ?></option>
			<option value="rehab" <?php selected( $icon, 'rehab' ); ?>><?php esc_html_e( 'Rehabilitation', 'stevens-chiro' ); ?></option>
			<option value="wellness" <?php selected( $icon, 'wellness' ); ?>><?php esc_html_e( 'Wellness / Heart', 'stevens-chiro' ); ?></option>
		</select>
	</p>
	<p>
		<label>
			<input type="checkbox" name="stevens_service_featured" value="1" <?php checked( $featured, '1' ); ?>>
			<strong><?php esc_html_e( 'Featured on Homepage', 'stevens-chiro' ); ?></strong>
		</label>
	</p>
	<?php
}

add_action( 'save_post', 'stevens_save_meta_boxes' );

function stevens_save_meta_boxes( $post_id ) {
	// Don't save on autosave.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Testimonial meta.
	if ( isset( $_POST['stevens_testimonial_nonce'] ) &&
		wp_verify_nonce( $_POST['stevens_testimonial_nonce'], 'stevens_testimonial_meta' ) &&
		current_user_can( 'edit_post', $post_id ) ) {

		if ( isset( $_POST['stevens_testimonial_rating'] ) ) {
			$rating = absint( $_POST['stevens_testimonial_rating'] );
			$rating = max( 1, min( 5, $rating ) );
			update_post_meta( $post_id, '_stevens_testimonial_rating', $rating );
		}

		if ( isset( $_POST['stevens_testimonial_role'] ) ) {
			update_post_meta( $post_id, '_stevens_testimonial_role', sanitize_text_field( $_POST['stevens_testimonial_role'] ) );
		}
	}

	// Service meta.
	if ( isset( $_POST['stevens_service_nonce'] ) &&
		wp_verify_nonce( $_POST['stevens_service_nonce'], 'stevens_service_meta' ) &&
		current_user_can( 'edit_post', $post_id ) ) {

		if ( isset( $_POST['stevens_service_icon'] ) ) {
			$allowed_icons = array( 'spine', 'hands', 'body', 'family', 'rehab', 'wellness' );
			$icon = sanitize_text_field( $_POST['stevens_service_icon'] );
			if ( in_array( $icon, $allowed_icons, true ) ) {
				update_post_meta( $post_id, '_stevens_service_icon', $icon );
			}
		}

		$featured = isset( $_POST['stevens_service_featured'] ) ? '1' : '0';
		update_post_meta( $post_id, '_stevens_service_featured', $featured );
	}
}
