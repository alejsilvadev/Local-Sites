<?php
/**
 * Services Section
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

$services = new WP_Query( array(
	'post_type'      => 'service',
	'posts_per_page' => 4,
	'orderby'        => 'menu_order',
	'order'          => 'ASC',
	'meta_query'     => array(
		array(
			'key'     => '_stevens_service_featured',
			'value'   => '1',
			'compare' => '=',
		),
	),
) );

// Fallback: if no featured services, get any 4.
if ( ! $services->have_posts() ) {
	$services = new WP_Query( array(
		'post_type'      => 'service',
		'posts_per_page' => 4,
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
	) );
}

if ( ! $services->have_posts() ) {
	return;
}
?>

<section class="section section--alt" id="services">
	<div class="container">
		<div class="section__header fade-in">
			<span class="section__subtitle"><?php esc_html_e( 'What We Offer', 'stevens-chiro' ); ?></span>
			<h2 class="section__title"><?php esc_html_e( 'Our Chiropractic Services', 'stevens-chiro' ); ?></h2>
			<p class="section__desc"><?php esc_html_e( 'We offer a comprehensive range of chiropractic treatments tailored to your unique needs.', 'stevens-chiro' ); ?></p>
		</div>

		<div class="services-grid">
			<?php while ( $services->have_posts() ) : $services->the_post(); ?>
				<?php get_template_part( 'template-parts/card-service' ); ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>

		<?php
		$services_page = get_page_by_path( 'services' );
		if ( $services_page ) :
		?>
			<div style="text-align: center; margin-top: var(--space-2xl);">
				<a href="<?php echo esc_url( get_permalink( $services_page ) ); ?>" class="btn btn--outline">
					<?php esc_html_e( 'View All Services', 'stevens-chiro' ); ?>
					<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
				</a>
			</div>
		<?php endif; ?>
	</div>
</section>
