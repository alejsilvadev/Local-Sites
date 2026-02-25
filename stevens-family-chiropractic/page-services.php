<?php
/**
 * Services Page Template (auto-matched to slug "services")
 *
 * @package Stevens_Chiro
 */

get_header();
?>

<div class="page-header">
	<div class="container">
		<h1 class="page-header__title"><?php esc_html_e( 'Our Services', 'stevens-chiro' ); ?></h1>
		<p class="page-header__desc"><?php esc_html_e( 'Comprehensive chiropractic care for the whole family. Explore our range of services below.', 'stevens-chiro' ); ?></p>
	</div>
</div>

<div class="container page-content">
	<?php
	$services = new WP_Query( array(
		'post_type'      => 'service',
		'posts_per_page' => -1,
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
	) );

	if ( $services->have_posts() ) :
	?>
		<div class="services-page-grid">
			<?php while ( $services->have_posts() ) : $services->the_post(); ?>
				<div class="service-detail-card fade-in">
					<div class="service-detail-card__image">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'stevens-service' ); ?>
						<?php else : ?>
							<div class="service-detail-card__image-placeholder">
								<?php
								$icon = get_post_meta( get_the_ID(), '_stevens_service_icon', true );
								echo stevens_get_service_icon( $icon ?: 'spine' );
								?>
							</div>
						<?php endif; ?>
					</div>
					<div class="service-detail-card__body">
						<h2 class="service-detail-card__title"><?php the_title(); ?></h2>
						<div class="service-detail-card__text"><?php the_content(); ?></div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	<?php else : ?>
		<p><?php esc_html_e( 'No services found. Please check back soon!', 'stevens-chiro' ); ?></p>
	<?php endif; ?>
</div>

<?php get_template_part( 'template-parts/section-cta' ); ?>

<?php
get_footer();
