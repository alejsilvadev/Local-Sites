<?php
/**
 * The main template file
 *
 * @package Stevens_Chiro
 */

get_header();
?>

<div class="container page-content">
	<div class="content-area">
		<?php if ( have_posts() ) : ?>
			<div class="posts-list">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="post-card__image">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( 'medium_large' ); ?>
								</a>
							</div>
						<?php endif; ?>
						<div class="post-card__content">
							<h2 class="post-card__title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<div class="post-card__meta">
								<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
							</div>
							<div class="post-card__excerpt">
								<?php the_excerpt(); ?>
							</div>
							<a href="<?php the_permalink(); ?>" class="btn btn--outline btn--sm"><?php esc_html_e( 'Read More', 'stevens-chiro' ); ?></a>
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
			<div class="no-results">
				<h2><?php esc_html_e( 'Nothing Found', 'stevens-chiro' ); ?></h2>
				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'stevens-chiro' ); ?></p>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php
get_footer();
