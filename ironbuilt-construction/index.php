<?php
/**
 * The main template file (fallback)
 *
 * @package IronBuilt
 */

get_header();
?>

<section class="page-hero">
    <div class="page-hero-bg"></div>
    <div class="container">
        <div class="page-hero-content">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<section style="padding: 80px 0;">
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
