<?php
/**
 * Service Card Partial
 *
 * Used in the services grid on the front page.
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

$icon = get_post_meta( get_the_ID(), '_stevens_service_icon', true );
if ( ! $icon ) {
	$icon = 'spine';
}
?>

<div class="service-card fade-in">
	<div class="service-card__icon">
		<?php echo stevens_get_service_icon( $icon ); ?>
	</div>
	<h3 class="service-card__title"><?php the_title(); ?></h3>
	<p class="service-card__desc"><?php echo esc_html( wp_trim_words( get_the_content(), 20 ) ); ?></p>
	<?php
	$services_page = get_page_by_path( 'services' );
	if ( $services_page ) :
	?>
		<a href="<?php echo esc_url( get_permalink( $services_page ) ); ?>" class="service-card__link">
			<?php esc_html_e( 'Learn More', 'stevens-chiro' ); ?>
			<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
		</a>
	<?php endif; ?>
</div>
