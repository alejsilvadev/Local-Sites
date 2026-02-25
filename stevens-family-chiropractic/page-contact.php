<?php
/**
 * Contact Page Template (auto-matched to slug "contact")
 *
 * @package Stevens_Chiro
 */

get_header();

$phone     = get_theme_mod( 'stevens_phone', '(555) 123-4567' );
$email     = get_theme_mod( 'stevens_email', 'info@stevensfamilychiro.com' );
$address   = get_theme_mod( 'stevens_address', '123 Wellness Way, Suite 100, Anytown, ST 12345' );
$map_url   = get_theme_mod( 'stevens_google_maps_embed', '' );
?>

<div class="page-header">
	<div class="container">
		<h1 class="page-header__title"><?php esc_html_e( 'Contact Us', 'stevens-chiro' ); ?></h1>
		<p class="page-header__desc"><?php esc_html_e( 'We\'d love to hear from you. Reach out to schedule an appointment or ask any questions.', 'stevens-chiro' ); ?></p>
	</div>
</div>

<div class="container page-content">
	<div class="contact-page-grid">
		<!-- Forms Column -->
		<div>
			<div class="tabs">
				<div class="tabs__nav" role="tablist">
					<button class="tabs__btn is-active" role="tab" aria-selected="true" aria-controls="tab-contact" id="tab-btn-contact" data-tab="contact">
						<?php esc_html_e( 'Send a Message', 'stevens-chiro' ); ?>
					</button>
					<button class="tabs__btn" role="tab" aria-selected="false" aria-controls="tab-appointment" id="tab-btn-appointment" data-tab="appointment">
						<?php esc_html_e( 'Request Appointment', 'stevens-chiro' ); ?>
					</button>
				</div>

				<div class="tabs__panel is-active" id="tab-contact" role="tabpanel" aria-labelledby="tab-btn-contact">
					<?php get_template_part( 'template-parts/form-contact' ); ?>
				</div>
				<div class="tabs__panel" id="tab-appointment" role="tabpanel" aria-labelledby="tab-btn-appointment">
					<?php get_template_part( 'template-parts/form-appointment' ); ?>
				</div>
			</div>
		</div>

		<!-- Sidebar Column -->
		<div>
			<div class="contact-sidebar__section">
				<h3 class="contact-sidebar__title"><?php esc_html_e( 'Contact Information', 'stevens-chiro' ); ?></h3>
				<ul class="contact-sidebar__list">
					<li>
						<svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a>
					</li>
					<li>
						<svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
						<a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
					</li>
					<li>
						<svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
						<span><?php echo esc_html( $address ); ?></span>
					</li>
				</ul>
			</div>

			<div class="contact-sidebar__section">
				<h3 class="contact-sidebar__title"><?php esc_html_e( 'Office Hours', 'stevens-chiro' ); ?></h3>
				<ul class="footer__hours">
					<?php stevens_office_hours_list(); ?>
				</ul>
			</div>

			<?php if ( $map_url ) : ?>
				<div class="map-embed">
					<iframe src="<?php echo esc_url( $map_url ); ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="<?php esc_attr_e( 'Office Location', 'stevens-chiro' ); ?>"></iframe>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php
get_footer();
