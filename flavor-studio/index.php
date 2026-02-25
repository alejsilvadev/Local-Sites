<?php
/**
 * Fallback template
 */
get_header();
?>

<section class="page-hero">
    <h1><?php the_title(); ?></h1>
</section>

<section class="section">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>
