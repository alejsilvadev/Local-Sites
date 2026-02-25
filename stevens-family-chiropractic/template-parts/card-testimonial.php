<?php
/**
 * Testimonial Card Partial
 *
 * Used in the testimonials carousel.
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

$rating = get_post_meta( get_the_ID(), '_stevens_testimonial_rating', true );
$role   = get_post_meta( get_the_ID(), '_stevens_testimonial_role', true );

if ( ! $rating ) {
	$rating = 5;
}
?>

<div class="testimonial-card">
	<div class="testimonial-card__stars">
		<?php stevens_star_rating( $rating ); ?>
	</div>

	<p class="testimonial-card__text"><?php echo esc_html( wp_trim_words( get_the_content(), 50 ) ); ?></p>

	<div class="testimonial-card__author">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'stevens-testimonial', array( 'class' => 'testimonial-card__avatar' ) ); ?>
		<?php else : ?>
			<div class="testimonial-card__avatar-placeholder">
				<?php echo esc_html( mb_substr( get_the_title(), 0, 1 ) ); ?>
			</div>
		<?php endif; ?>
		<div>
			<div class="testimonial-card__name"><?php the_title(); ?></div>
			<?php if ( $role ) : ?>
				<div class="testimonial-card__role"><?php echo esc_html( $role ); ?></div>
			<?php endif; ?>
		</div>
	</div>
</div>
