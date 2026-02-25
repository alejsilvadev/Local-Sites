<?php
/**
 * CTA Section
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

$cta_heading = get_theme_mod( 'stevens_cta_heading', 'Ready to Start Your Wellness Journey?' );
$cta_text    = get_theme_mod( 'stevens_cta_text', 'Schedule your consultation today and take the first step toward a healthier, pain-free life for you and your family.' );
$cta_btn     = get_theme_mod( 'stevens_cta_button_text', 'Schedule a Consultation' );
$cta_url     = get_theme_mod( 'stevens_cta_button_url', '' );

if ( ! $cta_url ) {
	$contact_page = get_page_by_path( 'contact' );
	$cta_url = $contact_page ? get_permalink( $contact_page ) : '#contact';
}
?>

<section class="cta-section fade-in">
	<div class="container">
		<h2 class="cta-section__title"><?php echo esc_html( $cta_heading ); ?></h2>
		<p class="cta-section__text"><?php echo esc_html( $cta_text ); ?></p>
		<a href="<?php echo esc_url( $cta_url ); ?>" class="btn btn--secondary btn--lg">
			<?php echo esc_html( $cta_btn ); ?>
		</a>
	</div>
</section>
