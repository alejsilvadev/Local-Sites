<?php
/**
 * About Preview Section
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

$about_image   = get_theme_mod( 'stevens_about_image', '' );
$about_heading = get_theme_mod( 'stevens_about_heading', 'Dedicated to Your Family\'s Health & Wellness' );
$about_text    = get_theme_mod( 'stevens_about_text', 'With over 15 years of experience, Dr. Stevens and our team are committed to providing the highest quality chiropractic care. We use evidence-based techniques combined with a holistic approach to help you achieve lasting wellness.' );
?>

<section class="section" id="about">
	<div class="container">
		<div class="about-preview fade-in">
			<div class="about-preview__image">
				<?php if ( $about_image ) : ?>
					<img src="<?php echo esc_url( $about_image ); ?>" alt="<?php esc_attr_e( 'About Stevens Family Chiropractic', 'stevens-chiro' ); ?>" loading="lazy">
				<?php else : ?>
					<div style="aspect-ratio: 4/3; background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light)); display: flex; align-items: center; justify-content: center; color: #fff;">
						<svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
					</div>
				<?php endif; ?>
			</div>

			<div class="about-preview__content">
				<span class="about-preview__subtitle"><?php esc_html_e( 'About Our Practice', 'stevens-chiro' ); ?></span>
				<h2 class="about-preview__title"><?php echo esc_html( $about_heading ); ?></h2>
				<p class="about-preview__text"><?php echo esc_html( $about_text ); ?></p>

				<ul class="about-preview__features">
					<li>
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
						<?php esc_html_e( '15+ Years of Experience', 'stevens-chiro' ); ?>
					</li>
					<li>
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
						<?php esc_html_e( 'Family-Friendly Practice', 'stevens-chiro' ); ?>
					</li>
					<li>
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
						<?php esc_html_e( 'Evidence-Based Treatments', 'stevens-chiro' ); ?>
					</li>
					<li>
						<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
						<?php esc_html_e( 'Personalized Care Plans', 'stevens-chiro' ); ?>
					</li>
				</ul>

				<?php
				$about_page = get_page_by_path( 'about' );
				if ( $about_page ) :
				?>
					<a href="<?php echo esc_url( get_permalink( $about_page ) ); ?>" class="btn btn--primary">
						<?php esc_html_e( 'Learn More About Us', 'stevens-chiro' ); ?>
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
