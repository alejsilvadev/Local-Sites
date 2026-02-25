<?php
/**
 * About Page Template (auto-matched to slug "about")
 *
 * @package Stevens_Chiro
 */

get_header();

$about_image = get_theme_mod( 'stevens_about_image', '' );
?>

<div class="page-header">
	<div class="container">
		<h1 class="page-header__title"><?php esc_html_e( 'About Our Practice', 'stevens-chiro' ); ?></h1>
		<p class="page-header__desc"><?php esc_html_e( 'Dedicated to helping families achieve optimal health through expert chiropractic care.', 'stevens-chiro' ); ?></p>
	</div>
</div>

<div class="container page-content">
	<!-- Intro Section -->
	<div class="about-intro fade-in">
		<div class="about-intro__image">
			<?php if ( $about_image ) : ?>
				<img src="<?php echo esc_url( $about_image ); ?>" alt="<?php esc_attr_e( 'About Stevens Family Chiropractic', 'stevens-chiro' ); ?>" loading="lazy">
			<?php else : ?>
				<div style="aspect-ratio: 4/3; background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light)); display: flex; align-items: center; justify-content: center; color: #fff; border-radius: var(--radius-lg);">
					<svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
				</div>
			<?php endif; ?>
		</div>
		<div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h2><?php esc_html_e( 'Our Story', 'stevens-chiro' ); ?></h2>
				<div style="margin-top: var(--space-lg); color: var(--color-text-light); line-height: 1.8;">
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>

	<!-- Values Section -->
	<div class="about-values fade-in">
		<h2><?php esc_html_e( 'Our Core Values', 'stevens-chiro' ); ?></h2>
		<div class="values-grid">
			<div class="value-card">
				<div class="value-card__icon">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
				</div>
				<h3 class="value-card__title"><?php esc_html_e( 'Compassionate Care', 'stevens-chiro' ); ?></h3>
				<p class="value-card__text"><?php esc_html_e( 'We treat every patient like family, providing personalized attention and genuine concern for your wellbeing.', 'stevens-chiro' ); ?></p>
			</div>
			<div class="value-card">
				<div class="value-card__icon">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
				</div>
				<h3 class="value-card__title"><?php esc_html_e( 'Evidence-Based', 'stevens-chiro' ); ?></h3>
				<p class="value-card__text"><?php esc_html_e( 'Our treatments are grounded in the latest research and proven techniques for effective, lasting results.', 'stevens-chiro' ); ?></p>
			</div>
			<div class="value-card">
				<div class="value-card__icon">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="2"/><circle cx="18" cy="6" r="2"/><circle cx="12" cy="10" r="1.5"/><path d="M2 21v-2a4 4 0 0 1 4-4h0"/><path d="M22 21v-2a4 4 0 0 0-4-4h0"/><path d="M9 21v-1a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v1"/></svg>
				</div>
				<h3 class="value-card__title"><?php esc_html_e( 'Family-Centered', 'stevens-chiro' ); ?></h3>
				<p class="value-card__text"><?php esc_html_e( 'From children to seniors, we provide age-appropriate care for every member of your family.', 'stevens-chiro' ); ?></p>
			</div>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/section-cta' ); ?>

<?php
get_footer();
