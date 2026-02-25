<?php
/**
 * Testimonials Section
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

$testimonials = new WP_Query( array(
	'post_type'      => 'testimonial',
	'posts_per_page' => 6,
	'orderby'        => 'date',
	'order'          => 'DESC',
) );

if ( ! $testimonials->have_posts() ) {
	return;
}
?>

<section class="section testimonials-section" id="testimonials">
	<div class="container">
		<div class="section__header fade-in">
			<span class="section__subtitle"><?php esc_html_e( 'Patient Stories', 'stevens-chiro' ); ?></span>
			<h2 class="section__title"><?php esc_html_e( 'What Our Patients Say', 'stevens-chiro' ); ?></h2>
			<p class="section__desc"><?php esc_html_e( 'Hear from real patients about their experience with our practice.', 'stevens-chiro' ); ?></p>
		</div>

		<div class="carousel" data-carousel aria-label="<?php esc_attr_e( 'Patient Testimonials', 'stevens-chiro' ); ?>">
			<div class="carousel__track" data-carousel-track>
				<?php while ( $testimonials->have_posts() ) : $testimonials->the_post(); ?>
					<div class="carousel__slide" data-carousel-slide>
						<?php get_template_part( 'template-parts/card-testimonial' ); ?>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>

			<div class="carousel__controls">
				<button class="carousel__btn" data-carousel-prev aria-label="<?php esc_attr_e( 'Previous testimonial', 'stevens-chiro' ); ?>">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
				</button>
				<div class="carousel__dots" data-carousel-dots></div>
				<button class="carousel__btn" data-carousel-next aria-label="<?php esc_attr_e( 'Next testimonial', 'stevens-chiro' ); ?>">
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
				</button>
			</div>
		</div>
	</div>
</section>
