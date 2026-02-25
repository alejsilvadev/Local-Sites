<?php
/**
 * Customizer Settings
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

add_action( 'customize_register', 'stevens_customize_register' );

function stevens_customize_register( $wp_customize ) {

	// =========================================================================
	// Panel: Stevens Chiropractic
	// =========================================================================
	$wp_customize->add_panel( 'stevens_panel', array(
		'title'    => esc_html__( 'Stevens Chiropractic', 'stevens-chiro' ),
		'priority' => 30,
	) );

	// =========================================================================
	// Section: Hero
	// =========================================================================
	$wp_customize->add_section( 'stevens_hero', array(
		'title' => esc_html__( 'Hero Section', 'stevens-chiro' ),
		'panel' => 'stevens_panel',
	) );

	$wp_customize->add_setting( 'stevens_hero_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stevens_hero_image', array(
		'label'   => esc_html__( 'Background Image', 'stevens-chiro' ),
		'section' => 'stevens_hero',
	) ) );

	$wp_customize->add_setting( 'stevens_hero_heading', array(
		'default'           => 'Your Family\'s Path to Wellness Starts Here',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_hero_heading', array(
		'label'   => esc_html__( 'Heading', 'stevens-chiro' ),
		'section' => 'stevens_hero',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'stevens_hero_subtitle', array(
		'default'           => 'Experience personalized chiropractic care that helps you and your family live pain-free, active lives. Serving our community with compassion and expertise.',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_hero_subtitle', array(
		'label'   => esc_html__( 'Subheading', 'stevens-chiro' ),
		'section' => 'stevens_hero',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'stevens_hero_cta1_text', array(
		'default'           => 'Book an Appointment',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_hero_cta1_text', array(
		'label'   => esc_html__( 'Primary Button Text', 'stevens-chiro' ),
		'section' => 'stevens_hero',
	) );

	$wp_customize->add_setting( 'stevens_hero_cta1_url', array(
		'default'           => '#contact',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( 'stevens_hero_cta1_url', array(
		'label'   => esc_html__( 'Primary Button URL', 'stevens-chiro' ),
		'section' => 'stevens_hero',
		'type'    => 'url',
	) );

	$wp_customize->add_setting( 'stevens_hero_cta2_text', array(
		'default'           => 'Our Services',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_hero_cta2_text', array(
		'label'   => esc_html__( 'Secondary Button Text', 'stevens-chiro' ),
		'section' => 'stevens_hero',
	) );

	$wp_customize->add_setting( 'stevens_hero_cta2_url', array(
		'default'           => '#services',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( 'stevens_hero_cta2_url', array(
		'label'   => esc_html__( 'Secondary Button URL', 'stevens-chiro' ),
		'section' => 'stevens_hero',
		'type'    => 'url',
	) );

	$wp_customize->add_setting( 'stevens_hero_overlay_opacity', array(
		'default'           => '0.7',
		'sanitize_callback' => 'stevens_sanitize_opacity',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_hero_overlay_opacity', array(
		'label'       => esc_html__( 'Overlay Opacity', 'stevens-chiro' ),
		'section'     => 'stevens_hero',
		'type'        => 'range',
		'input_attrs' => array(
			'min'  => '0',
			'max'  => '1',
			'step' => '0.05',
		),
	) );

	// =========================================================================
	// Section: Contact Info
	// =========================================================================
	$wp_customize->add_section( 'stevens_contact', array(
		'title' => esc_html__( 'Contact Information', 'stevens-chiro' ),
		'panel' => 'stevens_panel',
	) );

	$wp_customize->add_setting( 'stevens_phone', array(
		'default'           => '(555) 123-4567',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_phone', array(
		'label'   => esc_html__( 'Phone Number', 'stevens-chiro' ),
		'section' => 'stevens_contact',
	) );

	$wp_customize->add_setting( 'stevens_email', array(
		'default'           => 'info@stevensfamilychiro.com',
		'sanitize_callback' => 'sanitize_email',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_email', array(
		'label'   => esc_html__( 'Email Address', 'stevens-chiro' ),
		'section' => 'stevens_contact',
		'type'    => 'email',
	) );

	$wp_customize->add_setting( 'stevens_address', array(
		'default'           => '123 Wellness Way, Suite 100, Anytown, ST 12345',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_address', array(
		'label'   => esc_html__( 'Address', 'stevens-chiro' ),
		'section' => 'stevens_contact',
	) );

	$wp_customize->add_setting( 'stevens_google_maps_embed', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( 'stevens_google_maps_embed', array(
		'label'       => esc_html__( 'Google Maps Embed URL', 'stevens-chiro' ),
		'description' => esc_html__( 'Paste the src URL from a Google Maps embed iframe.', 'stevens-chiro' ),
		'section'     => 'stevens_contact',
		'type'        => 'url',
	) );

	$wp_customize->add_setting( 'stevens_appointment_email', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_email',
	) );

	$wp_customize->add_control( 'stevens_appointment_email', array(
		'label'       => esc_html__( 'Appointment Notification Email', 'stevens-chiro' ),
		'description' => esc_html__( 'Email address for form submissions. Defaults to admin email if empty.', 'stevens-chiro' ),
		'section'     => 'stevens_contact',
		'type'        => 'email',
	) );

	// =========================================================================
	// Section: Office Hours
	// =========================================================================
	$wp_customize->add_section( 'stevens_hours', array(
		'title' => esc_html__( 'Office Hours', 'stevens-chiro' ),
		'panel' => 'stevens_panel',
	) );

	$wp_customize->add_setting( 'stevens_hours_monday_friday', array(
		'default'           => '9:00 AM - 6:00 PM',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_hours_monday_friday', array(
		'label'   => esc_html__( 'Monday - Friday', 'stevens-chiro' ),
		'section' => 'stevens_hours',
	) );

	$wp_customize->add_setting( 'stevens_hours_saturday', array(
		'default'           => '9:00 AM - 1:00 PM',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_hours_saturday', array(
		'label'   => esc_html__( 'Saturday', 'stevens-chiro' ),
		'section' => 'stevens_hours',
	) );

	$wp_customize->add_setting( 'stevens_hours_sunday', array(
		'default'           => 'Closed',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_hours_sunday', array(
		'label'   => esc_html__( 'Sunday', 'stevens-chiro' ),
		'section' => 'stevens_hours',
	) );

	// =========================================================================
	// Section: Social Media
	// =========================================================================
	$wp_customize->add_section( 'stevens_social', array(
		'title' => esc_html__( 'Social Media', 'stevens-chiro' ),
		'panel' => 'stevens_panel',
	) );

	$social_fields = array(
		'facebook'        => 'Facebook URL',
		'instagram'       => 'Instagram URL',
		'twitter'         => 'Twitter / X URL',
		'google_business' => 'Google Business URL',
		'yelp'            => 'Yelp URL',
	);

	foreach ( $social_fields as $key => $label ) {
		$wp_customize->add_setting( 'stevens_social_' . $key, array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		) );

		$wp_customize->add_control( 'stevens_social_' . $key, array(
			'label'   => esc_html( $label ),
			'section' => 'stevens_social',
			'type'    => 'url',
		) );
	}

	// =========================================================================
	// Section: About Preview
	// =========================================================================
	$wp_customize->add_section( 'stevens_about_preview', array(
		'title' => esc_html__( 'About Preview (Home)', 'stevens-chiro' ),
		'panel' => 'stevens_panel',
	) );

	$wp_customize->add_setting( 'stevens_about_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stevens_about_image', array(
		'label'   => esc_html__( 'About Image', 'stevens-chiro' ),
		'section' => 'stevens_about_preview',
	) ) );

	$wp_customize->add_setting( 'stevens_about_heading', array(
		'default'           => 'Dedicated to Your Family\'s Health & Wellness',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_about_heading', array(
		'label'   => esc_html__( 'Heading', 'stevens-chiro' ),
		'section' => 'stevens_about_preview',
	) );

	$wp_customize->add_setting( 'stevens_about_text', array(
		'default'           => 'With over 15 years of experience, Dr. Stevens and our team are committed to providing the highest quality chiropractic care. We use evidence-based techniques combined with a holistic approach to help you achieve lasting wellness.',
		'sanitize_callback' => 'sanitize_textarea_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_about_text', array(
		'label'   => esc_html__( 'Description', 'stevens-chiro' ),
		'section' => 'stevens_about_preview',
		'type'    => 'textarea',
	) );

	// =========================================================================
	// Section: CTA Banner
	// =========================================================================
	$wp_customize->add_section( 'stevens_cta', array(
		'title' => esc_html__( 'CTA Banner', 'stevens-chiro' ),
		'panel' => 'stevens_panel',
	) );

	$wp_customize->add_setting( 'stevens_cta_heading', array(
		'default'           => 'Ready to Start Your Wellness Journey?',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_cta_heading', array(
		'label'   => esc_html__( 'Heading', 'stevens-chiro' ),
		'section' => 'stevens_cta',
	) );

	$wp_customize->add_setting( 'stevens_cta_text', array(
		'default'           => 'Schedule your consultation today and take the first step toward a healthier, pain-free life for you and your family.',
		'sanitize_callback' => 'sanitize_textarea_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_cta_text', array(
		'label'   => esc_html__( 'Description', 'stevens-chiro' ),
		'section' => 'stevens_cta',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'stevens_cta_button_text', array(
		'default'           => 'Schedule a Consultation',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'stevens_cta_button_text', array(
		'label'   => esc_html__( 'Button Text', 'stevens-chiro' ),
		'section' => 'stevens_cta',
	) );

	$wp_customize->add_setting( 'stevens_cta_button_url', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( 'stevens_cta_button_url', array(
		'label'   => esc_html__( 'Button URL', 'stevens-chiro' ),
		'section' => 'stevens_cta',
		'type'    => 'url',
	) );

	// =========================================================================
	// Section: Colors
	// =========================================================================
	$wp_customize->add_section( 'stevens_colors', array(
		'title' => esc_html__( 'Brand Colors', 'stevens-chiro' ),
		'panel' => 'stevens_panel',
	) );

	$wp_customize->add_setting( 'stevens_color_primary', array(
		'default'           => '#0A6E6E',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stevens_color_primary', array(
		'label'   => esc_html__( 'Primary Color', 'stevens-chiro' ),
		'section' => 'stevens_colors',
	) ) );

	$wp_customize->add_setting( 'stevens_color_secondary', array(
		'default'           => '#C8963E',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stevens_color_secondary', array(
		'label'   => esc_html__( 'Secondary Color', 'stevens-chiro' ),
		'section' => 'stevens_colors',
	) ) );

	// =========================================================================
	// Selective Refresh Partials
	// =========================================================================
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'stevens_phone', array(
			'selector'        => '.top-bar__phone',
			'render_callback' => function () {
				$phone = get_theme_mod( 'stevens_phone', '(555) 123-4567' );
				echo '<svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>';
				echo esc_html( $phone );
			},
		) );
	}
}
