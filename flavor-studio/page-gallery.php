<?php
/**
 * Template Name: Gallery
 */
get_header();
?>

<section class="page-hero">
    <h1>Gallery</h1>
    <p>Our Work Speaks for Itself</p>
</section>

<section class="section" style="padding-top: 40px;">
    <div class="gallery-grid" id="gallery-grid">
        <?php
        $images = new WP_Query(array(
            'post_type'      => 'gallery',
            'posts_per_page' => -1,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ));

        if ($images->have_posts()) :
            while ($images->have_posts()) : $images->the_post();
                if (has_post_thumbnail()) :
                    $full = get_the_post_thumbnail_url(get_the_ID(), 'full');
        ?>
                <div class="gallery-item" data-full="<?php echo esc_url($full); ?>">
                    <?php the_post_thumbnail('gallery-thumb'); ?>
                </div>
        <?php
                endif;
            endwhile;
            wp_reset_postdata();
        else :
            // 12 placeholder slots
            for ($i = 1; $i <= 12; $i++) :
        ?>
            <div class="gallery-item">
                <div style="width:100%;height:100%;background:var(--cream-darker);display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:0.75rem;letter-spacing:2px;text-transform:uppercase;">Photo <?php echo $i; ?></div>
            </div>
        <?php
            endfor;
        endif;
        ?>
    </div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
    <button class="lightbox-close" id="lightbox-close">&times;</button>
    <button class="lightbox-nav lightbox-prev" id="lightbox-prev">&#8249;</button>
    <button class="lightbox-nav lightbox-next" id="lightbox-next">&#8250;</button>
    <img src="" alt="" id="lightbox-img">
</div>

<?php get_footer(); ?>
