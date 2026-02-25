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
    <div class="header-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
            Flavor<span>Studio</span>
        </a>

        <button class="menu-toggle" id="menu-toggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="main-nav" id="main-nav">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>" class="<?php echo is_front_page() ? 'current' : ''; ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="<?php echo is_page('gallery') ? 'current' : ''; ?>">Gallery</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="<?php echo is_page('contact') ? 'current' : ''; ?>">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
