<?php
/**
 * Customizer Sanitization Callbacks
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

/**
 * Sanitize opacity value (0 to 1).
 */
function stevens_sanitize_opacity( $value ) {
	$value = floatval( $value );
	return max( 0, min( 1, $value ) );
}

/**
 * Sanitize checkbox value.
 */
function stevens_sanitize_checkbox( $value ) {
	return ( isset( $value ) && true === $value ) ? true : false;
}

/**
 * Sanitize select/radio value.
 */
function stevens_sanitize_select( $input, $setting ) {
	$choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $choices ) ) ? $input : $setting->default;
}
