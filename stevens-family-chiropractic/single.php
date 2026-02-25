<?php
/**
 * Single Post Template
 *
 * @package Stevens_Chiro
 */

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<article class="single-post-content">
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
			<?php if ( get_the_author() ) : ?>
				&middot; <?php esc_html_e( 'by', 'stevens-chiro' ); ?> <?php the_author(); ?>
			<?php endif; ?>
		</div>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry-featured">
			<?php the_post_thumbnail( 'large' ); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<nav class="post-nav">
		<?php
		$prev = get_previous_post();
		$next = get_next_post();
		?>
		<div>
			<?php if ( $prev ) : ?>
				<a href="<?php echo esc_url( get_permalink( $prev ) ); ?>">
					&larr; <?php echo esc_html( get_the_title( $prev ) ); ?>
				</a>
			<?php endif; ?>
		</div>
		<div>
			<?php if ( $next ) : ?>
				<a href="<?php echo esc_url( get_permalink( $next ) ); ?>">
					<?php echo esc_html( get_the_title( $next ) ); ?> &rarr;
				</a>
			<?php endif; ?>
		</div>
	</nav>
</article>

<?php
endwhile; endif;

get_footer();
