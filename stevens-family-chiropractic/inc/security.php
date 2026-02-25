<?php
/**
 * Security: Rate Limiting & Honeypot Validation
 *
 * Uses WordPress transients for IP-based rate limiting.
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

/**
 * Check if the current IP has exceeded the rate limit.
 *
 * @return bool True if rate limited.
 */
function stevens_is_rate_limited() {
	$ip  = stevens_get_client_ip();
	$key = 'stevens_rl_' . md5( $ip );

	$submissions = get_transient( $key );

	if ( false === $submissions ) {
		return false;
	}

	return intval( $submissions ) >= 3;
}

/**
 * Record a form submission for rate limiting.
 */
function stevens_record_submission() {
	$ip  = stevens_get_client_ip();
	$key = 'stevens_rl_' . md5( $ip );

	$submissions = get_transient( $key );

	if ( false === $submissions ) {
		set_transient( $key, 1, 15 * MINUTE_IN_SECONDS );
	} else {
		$count = intval( $submissions ) + 1;
		// Preserve the existing TTL by getting remaining time.
		$timeout = get_option( '_transient_timeout_' . $key );
		$remaining = $timeout ? max( $timeout - time(), 60 ) : 15 * MINUTE_IN_SECONDS;
		set_transient( $key, $count, $remaining );
	}
}

/**
 * Get the client IP address.
 *
 * @return string
 */
function stevens_get_client_ip() {
	$ip = '';

	if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
		// May contain multiple IPs; take the first.
		$ips = explode( ',', $_SERVER['HTTP_X_FORWARDED_FOR'] );
		$ip  = trim( $ips[0] );
	} elseif ( ! empty( $_SERVER['REMOTE_ADDR'] ) ) {
		$ip = $_SERVER['REMOTE_ADDR'];
	}

	return sanitize_text_field( $ip );
}
