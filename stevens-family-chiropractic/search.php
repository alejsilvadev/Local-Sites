<?php
/**
 * Search Results Template
 *
 * @package Stevens_Chiro
 */

get_header();
?>

<div class="page-header">
	<div class="container">
		<h1 class="page-header__title">
			<?php
			printf(
				/* translators: %s: search query */
				esc_html__( 'Search Results for: %s', 'stevens-chiro' ),
				'<span>' . esc_html( get_search_query() ) . '</span>'
			);
			?>
		</h1>
	</div>
</div>

<div class="container page-content">
	<div class="content-area">
		<?php get_search_form(); ?>

		<?php if ( have_posts() ) : ?>
			<div class="posts-list">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
						<div class="post-card__content">
							<h2 class="post-card__title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<div class="post-card__meta">
								<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
								&middot; <?php echo esc_html( get_post_type_object( get_post_type() )->labels->singular_name ); ?>
							</div>
							<div class="post-card__excerpt">
								<?php the_excerpt(); ?>
							</div>
							<a href="<?php the_permalink(); ?>" class="btn btn--outline btn--sm"><?php esc_html_e( 'View', 'stevens-chiro' ); ?></a>
						</div>
					</article>
				<?php endwhile; ?>
			</div>

			<nav class="pagination">
				<?php
				the_posts_pagination( array(
					'mid_size'  => 2,
					'prev_text' => '&larr; ' . esc_html__( 'Previous', 'stevens-chiro' ),
					'next_text' => esc_html__( 'Next', 'stevens-chiro' ) . ' &rarr;',
				) );
				?>
			</nav>
		<?php else : ?>
			<div class="no-results" style="text-align: center; padding: var(--space-3xl) 0;">
				<h2><?php esc_html_e( 'No Results Found', 'stevens-chiro' ); ?></h2>
				<p><?php esc_html_e( 'Sorry, nothing matched your search. Please try different keywords.', 'stevens-chiro' ); ?></p>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php
get_footer();
