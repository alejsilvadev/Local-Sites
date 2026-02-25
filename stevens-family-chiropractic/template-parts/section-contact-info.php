<?php
/**
 * Contact Info Section
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

$phone   = get_theme_mod( 'stevens_phone', '(555) 123-4567' );
$email   = get_theme_mod( 'stevens_email', 'info@stevensfamilychiro.com' );
$address = get_theme_mod( 'stevens_address', '123 Wellness Way, Suite 100, Anytown, ST 12345' );
?>

<section class="section section--alt" id="contact">
	<div class="container">
		<div class="section__header fade-in">
			<span class="section__subtitle"><?php esc_html_e( 'Get in Touch', 'stevens-chiro' ); ?></span>
			<h2 class="section__title"><?php esc_html_e( 'Contact Our Office', 'stevens-chiro' ); ?></h2>
			<p class="section__desc"><?php esc_html_e( 'We\'re here to help. Reach out to schedule an appointment or ask any questions.', 'stevens-chiro' ); ?></p>
		</div>

		<div class="contact-info-grid fade-in">
			<!-- Phone -->
			<div class="contact-card">
				<div class="contact-card__icon">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
				</div>
				<h3 class="contact-card__title"><?php esc_html_e( 'Call Us', 'stevens-chiro' ); ?></h3>
				<p class="contact-card__text">
					<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a>
				</p>
			</div>

			<!-- Email -->
			<div class="contact-card">
				<div class="contact-card__icon">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
				</div>
				<h3 class="contact-card__title"><?php esc_html_e( 'Email Us', 'stevens-chiro' ); ?></h3>
				<p class="contact-card__text">
					<a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
				</p>
			</div>

			<!-- Location -->
			<div class="contact-card">
				<div class="contact-card__icon">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
				</div>
				<h3 class="contact-card__title"><?php esc_html_e( 'Visit Us', 'stevens-chiro' ); ?></h3>
				<p class="contact-card__text"><?php echo esc_html( $address ); ?></p>
			</div>
		</div>
	</div>
</section>
