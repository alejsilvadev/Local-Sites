<?php
/**
 * AJAX Form Handler
 *
 * Processes contact and appointment form submissions.
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

add_action( 'wp_ajax_stevens_contact_form', 'stevens_handle_contact_form' );
add_action( 'wp_ajax_nopriv_stevens_contact_form', 'stevens_handle_contact_form' );
add_action( 'wp_ajax_stevens_appointment_form', 'stevens_handle_appointment_form' );
add_action( 'wp_ajax_nopriv_stevens_appointment_form', 'stevens_handle_appointment_form' );

function stevens_handle_contact_form() {
	// Verify nonce.
	if ( ! check_ajax_referer( 'stevens_form_nonce', 'nonce', false ) ) {
		wp_send_json_error( array( 'message' => __( 'Security verification failed. Please refresh and try again.', 'stevens-chiro' ) ) );
	}

	// Rate limiting.
	if ( stevens_is_rate_limited() ) {
		wp_send_json_error( array( 'message' => __( 'Too many submissions. Please wait a few minutes before trying again.', 'stevens-chiro' ) ) );
	}

	// Honeypot check.
	if ( ! empty( $_POST['website'] ) ) {
		wp_send_json_error( array( 'message' => __( 'Submission blocked.', 'stevens-chiro' ) ) );
	}

	// Sanitize input.
	$name    = sanitize_text_field( $_POST['name'] ?? '' );
	$email   = sanitize_email( $_POST['email'] ?? '' );
	$phone   = sanitize_text_field( $_POST['phone'] ?? '' );
	$subject = sanitize_text_field( $_POST['subject'] ?? '' );
	$message = sanitize_textarea_field( $_POST['message'] ?? '' );

	// Validate required fields.
	if ( empty( $name ) || empty( $email ) || empty( $subject ) || empty( $message ) ) {
		wp_send_json_error( array( 'message' => __( 'Please fill in all required fields.', 'stevens-chiro' ) ) );
	}

	if ( ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => __( 'Please enter a valid email address.', 'stevens-chiro' ) ) );
	}

	// Build email.
	$to = get_theme_mod( 'stevens_appointment_email', '' );
	if ( empty( $to ) ) {
		$to = get_option( 'admin_email' );
	}

	$email_subject = sprintf( '[Contact Form] %s', $subject );

	$body  = sprintf( "Name: %s\n", $name );
	$body .= sprintf( "Email: %s\n", $email );
	if ( $phone ) {
		$body .= sprintf( "Phone: %s\n", $phone );
	}
	$body .= sprintf( "Subject: %s\n\n", $subject );
	$body .= sprintf( "Message:\n%s\n", $message );

	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		sprintf( 'Reply-To: %s <%s>', $name, $email ),
	);

	$sent = wp_mail( $to, $email_subject, $body, $headers );

	// Record rate limit.
	stevens_record_submission();

	if ( $sent ) {
		wp_send_json_success( array( 'message' => __( 'Thank you! Your message has been sent. We\'ll get back to you soon.', 'stevens-chiro' ) ) );
	} else {
		wp_send_json_error( array( 'message' => __( 'There was an error sending your message. Please try again or call us directly.', 'stevens-chiro' ) ) );
	}
}

function stevens_handle_appointment_form() {
	// Verify nonce.
	if ( ! check_ajax_referer( 'stevens_form_nonce', 'nonce', false ) ) {
		wp_send_json_error( array( 'message' => __( 'Security verification failed. Please refresh and try again.', 'stevens-chiro' ) ) );
	}

	// Rate limiting.
	if ( stevens_is_rate_limited() ) {
		wp_send_json_error( array( 'message' => __( 'Too many submissions. Please wait a few minutes before trying again.', 'stevens-chiro' ) ) );
	}

	// Honeypot check.
	if ( ! empty( $_POST['website'] ) ) {
		wp_send_json_error( array( 'message' => __( 'Submission blocked.', 'stevens-chiro' ) ) );
	}

	// Sanitize input.
	$name           = sanitize_text_field( $_POST['name'] ?? '' );
	$email          = sanitize_email( $_POST['email'] ?? '' );
	$phone          = sanitize_text_field( $_POST['phone'] ?? '' );
	$preferred_date = sanitize_text_field( $_POST['preferred_date'] ?? '' );
	$preferred_time = sanitize_text_field( $_POST['preferred_time'] ?? '' );
	$patient_status = sanitize_text_field( $_POST['patient_status'] ?? 'new' );
	$reason         = sanitize_textarea_field( $_POST['reason'] ?? '' );

	// Validate required fields.
	if ( empty( $name ) || empty( $email ) || empty( $phone ) || empty( $preferred_date ) ) {
		wp_send_json_error( array( 'message' => __( 'Please fill in all required fields.', 'stevens-chiro' ) ) );
	}

	if ( ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => __( 'Please enter a valid email address.', 'stevens-chiro' ) ) );
	}

	// Build email.
	$to = get_theme_mod( 'stevens_appointment_email', '' );
	if ( empty( $to ) ) {
		$to = get_option( 'admin_email' );
	}

	$email_subject = sprintf( '[Appointment Request] %s - %s', $name, $preferred_date );

	$body  = "=== Appointment Request ===\n\n";
	$body .= sprintf( "Name: %s\n", $name );
	$body .= sprintf( "Email: %s\n", $email );
	$body .= sprintf( "Phone: %s\n", $phone );
	$body .= sprintf( "Preferred Date: %s\n", $preferred_date );
	if ( $preferred_time ) {
		$body .= sprintf( "Preferred Time: %s\n", $preferred_time );
	}
	$body .= sprintf( "Patient Status: %s\n", ucfirst( $patient_status ) );
	if ( $reason ) {
		$body .= sprintf( "\nReason for Visit:\n%s\n", $reason );
	}

	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		sprintf( 'Reply-To: %s <%s>', $name, $email ),
	);

	$sent = wp_mail( $to, $email_subject, $body, $headers );

	// Record rate limit.
	stevens_record_submission();

	if ( $sent ) {
		wp_send_json_success( array( 'message' => __( 'Thank you! Your appointment request has been received. We\'ll contact you shortly to confirm.', 'stevens-chiro' ) ) );
	} else {
		wp_send_json_error( array( 'message' => __( 'There was an error submitting your request. Please try again or call us directly.', 'stevens-chiro' ) ) );
	}
}
