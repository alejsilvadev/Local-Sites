<?php
/**
 * Template Name: Homepage
 * The front page template
 *
 * @package IronBuilt
 */

get_header();
?>

<!-- ============================================
     HERO SECTION
     ============================================ -->
<section class="hero">
    <div class="hero-bg" style="background-image: url('http://construction.local/wp-content/uploads/2026/02/christer-lassman-G2J41LRaKkE-unsplash-scaled.jpg');">
    </div>

    <div class="container">
        <div class="hero-content reveal">
            <div class="hero-badge">Trusted Since 1998</div>
            <h1>
                We Build
                <span class="accent">What Matters.</span>
            </h1>
            <p class="hero-description">
                From groundbreaking to grand opening, IronBuilt delivers exceptional construction
                services with the precision, safety, and craftsmanship your project demands.
            </p>
            <div class="hero-buttons">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">
                    Start Your Project
                    <?php echo ironbuilt_icon('arrow-right'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-outline">
                    Our Services
                </a>
            </div>
        </div>

        <div class="hero-stats reveal">
            <div class="hero-stat">
                <div class="number" data-count="750" data-suffix="+">0</div>
                <div class="label">Projects Completed</div>
            </div>
            <div class="hero-stat">
                <div class="number" data-count="25" data-suffix="+">0</div>
                <div class="label">Years Experience</div>
            </div>
            <div class="hero-stat">
                <div class="number" data-count="98" data-suffix="%">0</div>
                <div class="label">Client Satisfaction</div>
            </div>
            <div class="hero-stat">
                <div class="number" data-count="120" data-suffix="+">0</div>
                <div class="label">Team Members</div>
            </div>
        </div>
    </div>

    <div class="scroll-indicator">
        <div class="mouse"></div>
        Scroll
    </div>
</section>

<!-- ============================================
     ABOUT / INTRO SECTION
     ============================================ -->
<section class="about-section" id="about">
    <div class="container">
        <div class="about-grid">

            <div class="about-image-wrapper reveal-left">
                <div class="about-image">
                    <!-- IMAGE URL: Team of construction workers on a job site reviewing blueprints together
                         Upload a professional photo (800x550px) showing teamwork on a construction site -->
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/about-placeholder.jpg')); ?>"
                         alt="IronBuilt team reviewing project plans on site">
                </div>
                <div class="about-image-accent"></div>
                <div class="about-experience-badge">
                    <div class="number">25+</div>
                    <div class="text">Years of<br>Excellence</div>
                </div>
            </div>

            <div class="about-content reveal-right">
                <div class="section-tag">About IronBuilt</div>
                <h2>Building Excellence,<br>One Project at a Time</h2>
                <p>
                    Since 1998, IronBuilt Construction has been transforming visions into reality
                    across Austin, Texas and beyond. We combine cutting-edge technology with
                    old-school craftsmanship to deliver projects that stand the test of time.
                </p>
                <p>
                    Our team of 120+ skilled professionals brings unmatched expertise to every
                    project, from luxury residential homes to major commercial developments.
                </p>

                <div class="about-features">
                    <div class="about-feature">
                        <div class="icon"><?php echo ironbuilt_icon('shield'); ?></div>
                        <span>Licensed &amp; Insured</span>
                    </div>
                    <div class="about-feature">
                        <div class="icon"><?php echo ironbuilt_icon('award'); ?></div>
                        <span>Award Winning</span>
                    </div>
                    <div class="about-feature">
                        <div class="icon"><?php echo ironbuilt_icon('clock'); ?></div>
                        <span>On-Time Delivery</span>
                    </div>
                    <div class="about-feature">
                        <div class="icon"><?php echo ironbuilt_icon('users'); ?></div>
                        <span>Expert Crew</span>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-dark">
                    Explore Our Services
                    <?php echo ironbuilt_icon('arrow-right'); ?>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- ============================================
     SERVICES SECTION
     ============================================ -->
<section class="services-section" id="services">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-tag">What We Do</div>
            <h2>Our Core Services</h2>
            <p>Comprehensive construction solutions tailored to meet the unique demands of every project, delivered with uncompromising quality.</p>
        </div>

        <div class="services-grid stagger-children">

            <!-- Service 1 -->
            <div class="service-card reveal">
                <div class="service-card-image">
                    <!-- IMAGE URL: Modern commercial building exterior - glass and steel office tower
                         Upload a sharp photo (600x400px) of a commercial construction project -->
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/service-commercial.jpg')); ?>"
                         alt="Commercial Construction">
                    <div class="service-number">01</div>
                </div>
                <div class="service-card-body">
                    <h3>Commercial Construction</h3>
                    <p>Full-service commercial building from office complexes to retail spaces, built to exceed industry standards.</p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="service-card-link">
                        Learn More <?php echo ironbuilt_icon('arrow-right'); ?>
                    </a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="service-card reveal">
                <div class="service-card-image">
                    <!-- IMAGE URL: Beautiful luxury home exterior - modern residential construction
                         Upload a photo (600x400px) of a high-end residential home -->
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/service-residential.jpg')); ?>"
                         alt="Residential Building">
                    <div class="service-number">02</div>
                </div>
                <div class="service-card-body">
                    <h3>Residential Building</h3>
                    <p>Custom homes and multi-family developments designed and built to create lasting spaces families love.</p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="service-card-link">
                        Learn More <?php echo ironbuilt_icon('arrow-right'); ?>
                    </a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="service-card reveal">
                <div class="service-card-image">
                    <!-- IMAGE URL: Interior renovation in progress - modern kitchen or bathroom remodel
                         Upload a photo (600x400px) of a renovation project -->
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/service-renovation.jpg')); ?>"
                         alt="Renovations & Remodeling">
                    <div class="service-number">03</div>
                </div>
                <div class="service-card-body">
                    <h3>Renovations &amp; Remodeling</h3>
                    <p>Transform existing spaces with expert renovations that breathe new life into homes and commercial properties.</p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="service-card-link">
                        Learn More <?php echo ironbuilt_icon('arrow-right'); ?>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================
     CTA BANNER
     ============================================ -->
<section class="cta-banner">
    <div class="container">
        <div class="cta-inner reveal">
            <div class="cta-content">
                <h2>Ready to Build Something Great?</h2>
                <p>Let's discuss your next project. Our team is ready to bring your vision to life with a free consultation and detailed estimate.</p>
            </div>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">
                    Get Free Estimate
                    <?php echo ironbuilt_icon('arrow-right'); ?>
                </a>
                <a href="tel:5125550198" class="btn btn-outline">
                    <?php echo ironbuilt_icon('phone'); ?>
                    (512) 555-0198
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     PROJECTS / PORTFOLIO SECTION
     ============================================ -->
<section class="projects-section" id="projects">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-tag">Our Work</div>
            <h2>Featured Projects</h2>
            <p>A showcase of our finest work across commercial, residential, and industrial construction projects.</p>
        </div>

        <div class="projects-grid">

            <!-- Project 1 (large) -->
            <div class="project-card reveal">
                <div class="project-card-image">
                    <!-- IMAGE URL: Completed modern office building - dramatic architecture photography
                         Upload a wide photo (900x420px) of a striking commercial building -->
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/project-1.jpg')); ?>"
                         alt="Apex Tower - Commercial Office Complex">
                </div>
                <div class="project-card-overlay">
                    <div class="category">Commercial</div>
                    <h3>Apex Tower Office Complex</h3>
                    <p>48,000 sq ft modern office space in downtown Austin</p>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card reveal">
                <div class="project-card-image">
                    <!-- IMAGE URL: Luxury custom home exterior with landscaping
                         Upload a photo (600x420px) of a beautiful custom home -->
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/project-2.jpg')); ?>"
                         alt="Lakewood Estate - Custom Residential">
                </div>
                <div class="project-card-overlay">
                    <div class="category">Residential</div>
                    <h3>Lakewood Estate</h3>
                    <p>6,200 sq ft luxury lakeside residence</p>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card reveal">
                <div class="project-card-image">
                    <!-- IMAGE URL: Modern retail/restaurant space interior
                         Upload a photo (600x420px) of a commercial interior -->
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/project-3.jpg')); ?>"
                         alt="Market Square Retail - Mixed Use Development">
                </div>
                <div class="project-card-overlay">
                    <div class="category">Mixed Use</div>
                    <h3>Market Square Retail Center</h3>
                    <p>28,000 sq ft retail and dining destination</p>
                </div>
            </div>

            <!-- Project 4 (large) -->
            <div class="project-card reveal">
                <div class="project-card-image">
                    <!-- IMAGE URL: Industrial warehouse or manufacturing facility exterior
                         Upload a wide photo (900x420px) of an industrial building -->
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/project-4.jpg')); ?>"
                         alt="Steelridge Industrial Park">
                </div>
                <div class="project-card-overlay">
                    <div class="category">Industrial</div>
                    <h3>Steelridge Industrial Park</h3>
                    <p>120,000 sq ft state-of-the-art logistics facility</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================
     TESTIMONIALS SECTION
     ============================================ -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-tag">Testimonials</div>
            <h2>What Our Clients Say</h2>
            <p>Don't just take our word for it. Here's what our valued clients have to say about working with IronBuilt.</p>
        </div>

        <div class="testimonials-grid stagger-children">

            <!-- Testimonial 1 -->
            <div class="testimonial-card reveal">
                <div class="testimonial-stars">
                    <?php for ($i = 0; $i < 5; $i++) echo ironbuilt_icon('star'); ?>
                </div>
                <blockquote>
                    "IronBuilt transformed our outdated office into a modern workspace that our team loves.
                    They were professional, on schedule, and the quality exceeded our expectations."
                </blockquote>
                <div class="testimonial-author">
                    <div class="testimonial-author-image">
                        <!-- IMAGE URL: Professional headshot of a male business executive
                             Upload a 100x100px portrait photo -->
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/testimonial-1.jpg')); ?>"
                             alt="David Chen">
                    </div>
                    <div class="testimonial-author-info">
                        <div class="name">David Chen</div>
                        <div class="role">CEO, Vertex Technologies</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card reveal">
                <div class="testimonial-stars">
                    <?php for ($i = 0; $i < 5; $i++) echo ironbuilt_icon('star'); ?>
                </div>
                <blockquote>
                    "Building our dream home was stress-free thanks to the IronBuilt team.
                    Their attention to detail and transparent communication made all the difference."
                </blockquote>
                <div class="testimonial-author">
                    <div class="testimonial-author-image">
                        <!-- IMAGE URL: Professional headshot of a woman
                             Upload a 100x100px portrait photo -->
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/testimonial-2.jpg')); ?>"
                             alt="Sarah Mitchell">
                    </div>
                    <div class="testimonial-author-info">
                        <div class="name">Sarah Mitchell</div>
                        <div class="role">Homeowner, Lakewood Estate</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-card reveal">
                <div class="testimonial-stars">
                    <?php for ($i = 0; $i < 5; $i++) echo ironbuilt_icon('star'); ?>
                </div>
                <blockquote>
                    "We've worked with many contractors over the years, but IronBuilt is in a class of their own.
                    They delivered our retail center two weeks ahead of schedule."
                </blockquote>
                <div class="testimonial-author">
                    <div class="testimonial-author-image">
                        <!-- IMAGE URL: Professional headshot of a man in business attire
                             Upload a 100x100px portrait photo -->
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/testimonial-3.jpg')); ?>"
                             alt="Marcus Rivera">
                    </div>
                    <div class="testimonial-author-info">
                        <div class="name">Marcus Rivera</div>
                        <div class="role">Director, Pinnacle Development Group</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ============================================
     BOTTOM CTA
     ============================================ -->
<section class="cta-banner">
    <div class="container">
        <div class="cta-inner reveal">
            <div class="cta-content">
                <h2>Let's Build Your Vision</h2>
                <p>From concept to completion, we partner with you every step of the way. Contact us today for a free project consultation.</p>
            </div>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-accent">
                    Contact Us Today
                    <?php echo ironbuilt_icon('arrow-right'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
