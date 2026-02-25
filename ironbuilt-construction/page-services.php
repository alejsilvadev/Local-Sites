<?php
/**
 * Template Name: Services Page
 * Slug: services
 *
 * @package IronBuilt
 */

get_header();
?>

<!-- ============================================
     PAGE HERO
     ============================================ -->
<section class="page-hero">
    <div class="page-hero-bg" style="background-image: url('<?php
        // IMAGE URL: Wide shot of an active construction site with cranes and workers
        // Upload a wide, high-resolution image (2000x800px) of a construction site
        echo esc_url(get_theme_file_uri('assets/images/services-hero.jpg'));
    ?>');"></div>
    <div class="container">
        <div class="page-hero-content reveal">
            <div class="breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span class="sep">/</span>
                <span>Services</span>
            </div>
            <h1>Our Services</h1>
            <p>Comprehensive construction solutions built on decades of expertise, precision engineering, and an unwavering commitment to quality.</p>
        </div>
    </div>
</section>

<!-- ============================================
     SERVICES DETAIL SECTION
     ============================================ -->
<section class="services-detail-section">
    <div class="container">

        <!-- Service 1: Commercial Construction -->
        <div class="service-detail-block">
            <div class="service-detail-image reveal-left">
                <!-- IMAGE URL: Large commercial building under construction or completed modern office tower
                     Upload a high-quality photo (700x450px) of a commercial construction project -->
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/service-detail-commercial.jpg')); ?>"
                     alt="Commercial Construction Services">
                <div class="overlay-tag">Most Popular</div>
            </div>
            <div class="service-detail-content reveal-right">
                <div class="service-icon"><?php echo ironbuilt_icon('building'); ?></div>
                <h3>Commercial Construction</h3>
                <p>
                    We specialize in building commercial properties that drive business success.
                    From corporate headquarters to retail spaces, our team delivers projects
                    that combine form, function, and lasting value.
                </p>
                <p>
                    Our commercial division handles projects ranging from $500K to $50M+,
                    with a portfolio spanning offices, medical facilities, hospitality, and retail.
                </p>
                <ul class="service-features-list">
                    <li><?php echo ironbuilt_icon('check'); ?> Office buildings &amp; corporate campuses</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Retail centers &amp; shopping complexes</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Medical &amp; healthcare facilities</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Hotels &amp; hospitality venues</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Tenant finish &amp; build-outs</li>
                </ul>
            </div>
        </div>

        <!-- Service 2: Residential Construction -->
        <div class="service-detail-block">
            <div class="service-detail-image reveal-left">
                <!-- IMAGE URL: Beautiful custom luxury home exterior with landscaping
                     Upload a high-quality photo (700x450px) of a custom residential home -->
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/service-detail-residential.jpg')); ?>"
                     alt="Residential Construction Services">
                <div class="overlay-tag">Custom Homes</div>
            </div>
            <div class="service-detail-content reveal-right">
                <div class="service-icon"><?php echo ironbuilt_icon('home'); ?></div>
                <h3>Residential Building</h3>
                <p>
                    Your home is more than a structure &mdash; it's where life happens. Our residential
                    division creates custom homes and multi-family developments that combine
                    architectural beauty with practical livability.
                </p>
                <p>
                    We work closely with homeowners and architects to bring unique visions to life,
                    with meticulous attention to every finish, fixture, and detail.
                </p>
                <ul class="service-features-list">
                    <li><?php echo ironbuilt_icon('check'); ?> Custom single-family homes</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Multi-family developments</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Luxury estate construction</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Energy-efficient &amp; green building</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Smart home integration</li>
                </ul>
            </div>
        </div>

        <!-- Service 3: Renovations -->
        <div class="service-detail-block">
            <div class="service-detail-image reveal-left">
                <!-- IMAGE URL: Modern kitchen or bathroom renovation - before/after style or in-progress
                     Upload a high-quality photo (700x450px) of a renovation project -->
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/service-detail-renovation.jpg')); ?>"
                     alt="Renovation and Remodeling Services">
                <div class="overlay-tag">Transform Spaces</div>
            </div>
            <div class="service-detail-content reveal-right">
                <div class="service-icon"><?php echo ironbuilt_icon('wrench'); ?></div>
                <h3>Renovations &amp; Remodeling</h3>
                <p>
                    Breathe new life into existing spaces with our expert renovation services.
                    Whether it's a complete gut-renovation or targeted upgrades, we transform
                    spaces while minimizing disruption to your daily life.
                </p>
                <p>
                    Our renovation team specializes in both residential and commercial remodeling,
                    with expertise in historic preservation and adaptive reuse.
                </p>
                <ul class="service-features-list">
                    <li><?php echo ironbuilt_icon('check'); ?> Kitchen &amp; bathroom remodels</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Whole-home renovations</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Commercial space updates</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Historic building restoration</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Additions &amp; expansions</li>
                </ul>
            </div>
        </div>

        <!-- Service 4: Project Management -->
        <div class="service-detail-block">
            <div class="service-detail-image reveal-left">
                <!-- IMAGE URL: Construction manager reviewing plans with tablet on job site, workers in background
                     Upload a high-quality photo (700x450px) showing project management -->
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/service-detail-management.jpg')); ?>"
                     alt="Project Management Services">
                <div class="overlay-tag">Full Service</div>
            </div>
            <div class="service-detail-content reveal-right">
                <div class="service-icon"><?php echo ironbuilt_icon('layout'); ?></div>
                <h3>Project Management</h3>
                <p>
                    Our project management services ensure your construction project stays on track,
                    on budget, and on schedule. We coordinate every detail so you can focus on
                    what matters most &mdash; your business.
                </p>
                <p>
                    From pre-construction planning to final walkthrough, our certified project
                    managers bring discipline, transparency, and accountability to every phase.
                </p>
                <ul class="service-features-list">
                    <li><?php echo ironbuilt_icon('check'); ?> Pre-construction planning &amp; budgeting</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Schedule management &amp; reporting</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Subcontractor coordination</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Quality assurance &amp; inspections</li>
                    <li><?php echo ironbuilt_icon('check'); ?> Change order management</li>
                </ul>
            </div>
        </div>

    </div>
</section>

<!-- ============================================
     OUR PROCESS
     ============================================ -->
<section class="process-section">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-tag" style="color: var(--primary);">How We Work</div>
            <h2 style="color: var(--white);">Our Proven Process</h2>
            <p style="color: rgba(255,255,255,0.5);">A streamlined approach that keeps your project moving forward with clarity and confidence at every phase.</p>
        </div>

        <div class="process-grid stagger-children">
            <div class="process-step reveal">
                <div class="step-number">01</div>
                <h4>Discovery &amp; Planning</h4>
                <p>We start with a deep dive into your vision, needs, and budget to create a comprehensive project roadmap.</p>
            </div>
            <div class="process-step reveal">
                <div class="step-number">02</div>
                <h4>Design &amp; Engineering</h4>
                <p>Our design team collaborates with architects and engineers to develop detailed plans and specifications.</p>
            </div>
            <div class="process-step reveal">
                <div class="step-number">03</div>
                <h4>Construction</h4>
                <p>Expert crews bring the plans to life with precision craftsmanship, daily updates, and rigorous quality control.</p>
            </div>
            <div class="process-step reveal">
                <div class="step-number">04</div>
                <h4>Delivery &amp; Support</h4>
                <p>Final walkthrough, punch list completion, and ongoing warranty support to ensure your complete satisfaction.</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     CTA BANNER
     ============================================ -->
<section class="cta-banner" style="background: var(--off-white);">
    <div class="container">
        <div class="cta-inner reveal">
            <div class="cta-content">
                <h2 style="color: var(--secondary);">Let's Discuss Your Project</h2>
                <p style="color: var(--medium-gray);">Every great build starts with a conversation. Reach out for a free consultation and detailed project estimate.</p>
            </div>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-dark">
                    Get Free Estimate
                    <?php echo ironbuilt_icon('arrow-right'); ?>
                </a>
                <a href="tel:5125550198" class="btn btn-accent">
                    <?php echo ironbuilt_icon('phone'); ?>
                    Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
