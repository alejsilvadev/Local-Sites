<?php
/**
 * Template Tags / Helper Functions
 *
 * @package Stevens_Chiro
 */

defined( 'ABSPATH' ) || exit;

/**
 * Render star rating SVGs.
 */
function stevens_star_rating( $rating = 5 ) {
	$rating = max( 1, min( 5, intval( $rating ) ) );
	$output = '';

	for ( $i = 0; $i < $rating; $i++ ) {
		$output .= '<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
	}

	for ( $i = $rating; $i < 5; $i++ ) {
		$output .= '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
	}

	echo $output;
}

/**
 * Render social links from Customizer settings.
 */
function stevens_social_links() {
	$socials = array(
		'facebook'        => array(
			'label' => 'Facebook',
			'icon'  => '<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>',
		),
		'instagram'       => array(
			'label' => 'Instagram',
			'icon'  => '<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>',
		),
		'twitter'         => array(
			'label' => 'Twitter',
			'icon'  => '<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>',
		),
		'google_business' => array(
			'label' => 'Google Business',
			'icon'  => '<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.372 0 0 5.373 0 12s5.372 12 12 12c6.627 0 12-5.373 12-12S18.627 0 12 0zm.14 19.018c-3.868 0-7-3.14-7-7.018 0-3.878 3.132-7.018 7-7.018 1.89 0 3.47.697 4.682 1.829l-1.974 1.896c-.508-.486-1.394-1.052-2.708-1.052-2.322 0-4.218 1.924-4.218 4.345 0 2.422 1.896 4.346 4.218 4.346 2.694 0 3.706-1.934 3.862-2.933h-3.862v-2.485h6.438c.073.416.11.846.11 1.39 0 4.033-2.706 6.7-6.548 6.7z"/></svg>',
		),
		'yelp'            => array(
			'label' => 'Yelp',
			'icon'  => '<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.16 12.594l-4.995 1.433c-.96.276-1.74-.8-1.176-1.63l2.905-4.308a1.072 1.072 0 011.596-.206 7.07 7.07 0 012.24 3.378 1.073 1.073 0 01-.57 1.333zm-7.728 4.078l1.404-5.003c.27-.96 1.55-1.063 1.938-.155l2.004 4.666a1.073 1.073 0 01-.592 1.418 7.072 7.072 0 01-3.898.464 1.073 1.073 0 01-.856-1.39zm-4.136-2.2l4.878 1.847c.936.355.87 1.678-.1 1.942l-4.997 1.363a1.073 1.073 0 01-1.344-.742 7.07 7.07 0 01.165-4.038c.216-.56.835-.6 1.398-.372zM6.16 9.608l3.834 3.354c.735.643.168 1.787-.858 1.73l-5.278-.293a1.073 1.073 0 01-1.003-1.09 7.07 7.07 0 011.653-3.782c.397-.446 1.084-.35 1.652.08zm4.13-7.2l.862 8.207c.1.956-1.07 1.468-1.77.774L4.938 7.036a1.073 1.073 0 01.074-1.58 7.07 7.07 0 014.207-2.8 1.073 1.073 0 011.07.752z"/></svg>',
		),
	);

	foreach ( $socials as $key => $social ) {
		$url = get_theme_mod( 'stevens_social_' . $key, '' );
		if ( $url ) {
			printf(
				'<a href="%s" target="_blank" rel="noopener noreferrer" aria-label="%s">%s</a>',
				esc_url( $url ),
				esc_attr( $social['label'] ),
				$social['icon']
			);
		}
	}
}

/**
 * Render office hours list.
 */
function stevens_office_hours_list() {
	$hours = array(
		'Mon-Fri'  => get_theme_mod( 'stevens_hours_monday_friday', '9:00 AM - 6:00 PM' ),
		'Saturday'  => get_theme_mod( 'stevens_hours_saturday', '9:00 AM - 1:00 PM' ),
		'Sunday'    => get_theme_mod( 'stevens_hours_sunday', 'Closed' ),
	);

	foreach ( $hours as $day => $time ) {
		printf(
			'<li><span class="day">%s</span><span>%s</span></li>',
			esc_html( $day ),
			esc_html( $time )
		);
	}
}

/**
 * Fallback menu if no nav menu is assigned.
 */
function stevens_fallback_menu() {
	echo '<ul class="nav-menu">';
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';

	$pages = array( 'services', 'about', 'contact' );
	foreach ( $pages as $slug ) {
		$page = get_page_by_path( $slug );
		if ( $page ) {
			echo '<li><a href="' . esc_url( get_permalink( $page ) ) . '">' . esc_html( $page->post_title ) . '</a></li>';
		}
	}

	echo '</ul>';
}

/**
 * Get service icon SVG by name.
 */
function stevens_get_service_icon( $icon_name = 'spine' ) {
	$icons = array(
		'spine'    => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 8v4M12 16v6M9 4h6M9 8h6M9 12h6M10 16h4"/></svg>',
		'hands'    => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 11V6a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v0"/><path d="M14 10V4a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v2"/><path d="M10 10.5V6a2 2 0 0 0-2-2v0a2 2 0 0 0-2 2v8"/><path d="M18 8a2 2 0 1 1 4 0v6a8 8 0 0 1-8 8h-2c-2.8 0-4.5-.86-5.99-2.34l-3.6-3.6a2 2 0 0 1 2.83-2.82L7 16"/></svg>',
		'body'     => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="4" r="2"/><path d="M16 22l-2-8-2 1-2-1-2 8"/><path d="M8 10l4 2 4-2"/></svg>',
		'family'   => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="2"/><circle cx="18" cy="6" r="2"/><circle cx="12" cy="10" r="1.5"/><path d="M2 21v-2a4 4 0 0 1 4-4h0"/><path d="M22 21v-2a4 4 0 0 0-4-4h0"/><path d="M9 21v-1a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v1"/></svg>',
		'rehab'    => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"/><line x1="4" y1="22" x2="4" y2="15"/></svg>',
		'wellness' => '<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>',
	);

	return isset( $icons[ $icon_name ] ) ? $icons[ $icon_name ] : $icons['spine'];
}
