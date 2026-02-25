<?php
/**
 * Hero Section
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

$hero_image    = get_theme_mod( 'stevens_hero_image', '' );
$hero_heading  = get_theme_mod( 'stevens_hero_heading', 'Your Family\'s Path to Wellness Starts Here' );
$hero_subtitle = get_theme_mod( 'stevens_hero_subtitle', 'Experience personalized chiropractic care that helps you and your family live pain-free, active lives. Serving our community with compassion and expertise.' );
$cta1_text     = get_theme_mod( 'stevens_hero_cta1_text', 'Book an Appointment' );
$cta1_url      = get_theme_mod( 'stevens_hero_cta1_url', '#contact' );
$cta2_text     = get_theme_mod( 'stevens_hero_cta2_text', 'Our Services' );
$cta2_url      = get_theme_mod( 'stevens_hero_cta2_url', '#services' );
$overlay       = get_theme_mod( 'stevens_hero_overlay_opacity', '0.7' );

$bg_style = $hero_image ? 'background-image: url(' . esc_url( $hero_image ) . ');' : '';
?>

<section class="hero" id="hero">
	<div class="hero__bg" style="<?php echo esc_attr( $bg_style ); ?>"></div>
	<div class="hero__overlay" style="opacity: <?php echo esc_attr( $overlay ); ?>;"></div>

	<div class="hero__content">
		<h1 class="hero__title"><?php echo esc_html( $hero_heading ); ?></h1>
		<p class="hero__subtitle"><?php echo esc_html( $hero_subtitle ); ?></p>
		<div class="hero__buttons">
			<?php if ( $cta1_text ) : ?>
				<a href="<?php echo esc_url( $cta1_url ); ?>" class="btn btn--secondary btn--lg">
					<?php echo esc_html( $cta1_text ); ?>
				</a>
			<?php endif; ?>
			<?php if ( $cta2_text ) : ?>
				<a href="<?php echo esc_url( $cta2_url ); ?>" class="btn btn--outline-white btn--lg">
					<?php echo esc_html( $cta2_text ); ?>
				</a>
			<?php endif; ?>
		</div>
	</div>

	<div class="hero__scroll-indicator" aria-hidden="true">
		<span>Scroll</span>
		<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
	</div>
</section>
