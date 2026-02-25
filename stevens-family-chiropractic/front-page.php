<?php
/**
 * Front Page Template
 *
 * @package Stevens_Chiro
 */

get_header();

get_template_part( 'template-parts/hero' );
get_template_part( 'template-parts/section-services' );
get_template_part( 'template-parts/section-about-preview' );
get_template_part( 'template-parts/section-testimonials' );
get_template_part( 'template-parts/section-cta' );
get_template_part( 'template-parts/section-contact-info' );

get_footer();
