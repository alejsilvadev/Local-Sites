<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header">
    <div class="container">
        <div class="header-inner">

            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                <div class="logo-icon">IB</div>
                <div class="logo-text">
                    IronBuilt
                    <span>Construction Co.</span>
                </div>
            </a>

            <nav class="main-nav" id="main-nav">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>" class="<?php echo is_front_page() ? 'current' : ''; ?>">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>" class="<?php echo is_page('services') ? 'current' : ''; ?>">Services</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="<?php echo is_page('contact') ? 'current' : ''; ?>">Contact</a></li>
                </ul>
            </nav>

            <div class="header-cta">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">
                    Get a Quote
                    <?php echo ironbuilt_icon('arrow-right'); ?>
                </a>
            </div>

            <button class="mobile-toggle" id="mobile-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
    </div>
</header>
