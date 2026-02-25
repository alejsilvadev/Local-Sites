<?php get_header(); ?>

<!-- HERO -->
<section class="hero">
    <div class="hero-bg" id="hero-bg"></div>
    <div class="hero-content">
        <p class="tagline">Photography &amp; Videography</p>
        <h1>We Capture <em>Timeless</em> Moments</h1>
        <p>Cinematic storytelling through the art of light, composition, and emotion. Let us turn your vision into lasting memories.</p>
        <div class="hero-buttons">
            <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="btn btn-primary">View Our Work</a>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline">Get In Touch</a>
        </div>
    </div>
    <div class="scroll-indicator">
        <span></span>
    </div>
</section>

<!-- FEATURED WORK -->
<section class="section" id="work">
    <div class="container">
        <div class="section-header fade-in">
            <p class="label">Portfolio</p>
            <h2>Featured Work</h2>
            <div class="divider"></div>
            <p>A glimpse into our latest projects and creative vision.</p>
        </div>

        <div class="featured-grid fade-in">
            <?php
            $gallery = new WP_Query(array(
                'post_type'      => 'gallery',
                'posts_per_page' => 4,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ));

            if ($gallery->have_posts()) :
                $i = 0;
                while ($gallery->have_posts()) : $gallery->the_post();
                    $class = ($i === 0) ? 'featured-item tall' : 'featured-item';
            ?>
                <div class="<?php echo $class; ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('featured-large'); ?>
                    <?php else : ?>
                        <div style="width:100%;height:100%;background:var(--cream-darker);display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:0.8rem;letter-spacing:2px;text-transform:uppercase;">Add Image</div>
                    <?php endif; ?>
                    <div class="overlay">
                        <h3><?php the_title(); ?></h3>
                        <span>View Project</span>
                    </div>
                </div>
            <?php
                    $i++;
                endwhile;
                wp_reset_postdata();
            else :
                // Placeholder items when no gallery posts exist
                $placeholders = array(
                    array('title' => 'Wedding Collection', 'cat' => 'Weddings', 'tall' => true),
                    array('title' => 'Portrait Series', 'cat' => 'Portraits', 'tall' => false),
                    array('title' => 'Urban Stories', 'cat' => 'Commercial', 'tall' => false),
                    array('title' => 'Nature & Landscape', 'cat' => 'Landscape', 'tall' => false),
                );
                foreach ($placeholders as $ph) :
            ?>
                <div class="featured-item<?php echo $ph['tall'] ? ' tall' : ''; ?>">
                    <div style="width:100%;height:100%;background:var(--cream-darker);display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:0.8rem;letter-spacing:2px;text-transform:uppercase;"><?php echo esc_html($ph['title']); ?></div>
                    <div class="overlay">
                        <h3><?php echo esc_html($ph['title']); ?></h3>
                        <span><?php echo esc_html($ph['cat']); ?></span>
                    </div>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="section" style="background: var(--cream-dark);">
    <div class="container">
        <div class="section-header fade-in">
            <p class="label">What We Do</p>
            <h2>Our Services</h2>
            <div class="divider"></div>
            <p>From intimate portraits to cinematic wedding films, we bring artistry to every frame.</p>
        </div>

        <div class="services-grid fade-in">
            <div class="service-card">
                <span class="icon">&#9737;</span>
                <h3>Photography</h3>
                <p>Professional photo sessions for weddings, portraits, events, and commercial projects with a timeless aesthetic.</p>
            </div>
            <div class="service-card">
                <span class="icon">&#9654;</span>
                <h3>Videography</h3>
                <p>Cinematic films and highlight reels that tell your story with emotion, movement, and stunning visuals.</p>
            </div>
            <div class="service-card">
                <span class="icon">&#9998;</span>
                <h3>Post Production</h3>
                <p>Expert color grading, retouching, and editing to ensure every deliverable exceeds expectations.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container fade-in">
        <h2>Ready to Create Something Beautiful?</h2>
        <p>Let's talk about your next project and bring your creative vision to life.</p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">Book a Session</a>
    </div>
</section>

<?php get_footer(); ?>
