<?php
/**
 * 404 Page Template
 *
 * @package Stevens_Chiro
 */

get_header();
?>

<div class="error-404-content">
	<div class="container">
		<div class="error-code" aria-hidden="true">404</div>
		<h1><?php esc_html_e( 'Page Not Found', 'stevens-chiro' ); ?></h1>
		<p><?php esc_html_e( 'The page you\'re looking for doesn\'t exist or has been moved. Let us help you find what you need.', 'stevens-chiro' ); ?></p>

		<?php get_search_form(); ?>

		<div style="margin-top: var(--space-2xl);">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary">
				<?php esc_html_e( 'Back to Home', 'stevens-chiro' ); ?>
			</a>
		</div>
	</div>
</div>

<?php
get_footer();
