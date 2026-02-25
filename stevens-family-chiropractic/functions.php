<?php
/**
 * Stevens Family Chiropractic Theme Functions
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

define( 'STEVENS_THEME_VERSION', '1.0.0' );
define( 'STEVENS_THEME_DIR', get_template_directory() );
define( 'STEVENS_THEME_URI', get_template_directory_uri() );

// Core includes.
require STEVENS_THEME_DIR . '/inc/theme-setup.php';
require STEVENS_THEME_DIR . '/inc/enqueue.php';
require STEVENS_THEME_DIR . '/inc/widgets.php';
require STEVENS_THEME_DIR . '/inc/custom-post-types.php';
require STEVENS_THEME_DIR . '/inc/meta-boxes.php';
require STEVENS_THEME_DIR . '/inc/template-tags.php';
require STEVENS_THEME_DIR . '/inc/customizer.php';
require STEVENS_THEME_DIR . '/inc/customizer-sanitize.php';
require STEVENS_THEME_DIR . '/inc/form-handler.php';
require STEVENS_THEME_DIR . '/inc/security.php';
require STEVENS_THEME_DIR . '/inc/auto-setup.php';
require STEVENS_THEME_DIR . '/inc/admin-columns.php';
