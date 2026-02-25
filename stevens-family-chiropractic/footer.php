</main><!-- .site-main -->

<footer class="site-footer">
	<div class="container">
		<div class="footer__grid">
			<!-- Column 1: About / Logo -->
			<div class="footer__col">
				<div class="footer__brand">
					<?php if ( has_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<span class="footer__site-name"><?php bloginfo( 'name' ); ?></span>
					<?php endif; ?>
				</div>
				<p class="footer__tagline">Helping families achieve optimal health through expert chiropractic care. Your wellness is our priority.</p>
				<div class="footer__social">
					<?php stevens_social_links(); ?>
				</div>
			</div>

			<!-- Column 2: Quick Links -->
			<div class="footer__col">
				<h4 class="footer__heading"><?php esc_html_e( 'Quick Links', 'stevens-chiro' ); ?></h4>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer__nav',
					'container'      => false,
					'fallback_cb'    => 'stevens_fallback_menu',
					'depth'          => 1,
				) );
				?>
			</div>

			<!-- Column 3: Office Hours -->
			<div class="footer__col">
				<h4 class="footer__heading"><?php esc_html_e( 'Office Hours', 'stevens-chiro' ); ?></h4>
				<ul class="footer__hours">
					<?php stevens_office_hours_list(); ?>
				</ul>
			</div>

			<!-- Column 4: Contact Info -->
			<div class="footer__col">
				<h4 class="footer__heading"><?php esc_html_e( 'Contact Us', 'stevens-chiro' ); ?></h4>
				<?php
				$phone   = get_theme_mod( 'stevens_phone', '(555) 123-4567' );
				$email   = get_theme_mod( 'stevens_email', 'info@stevensfamilychiro.com' );
				$address = get_theme_mod( 'stevens_address', '123 Wellness Way, Suite 100, Anytown, ST 12345' );
				?>
				<ul class="footer__contact">
					<li>
						<svg class="icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
						<span><?php echo esc_html( $address ); ?></span>
					</li>
					<li>
						<svg class="icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
						<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a>
					</li>
					<li>
						<svg class="icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
						<a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
					</li>
				</ul>
			</div>
		</div>

		<div class="footer__bottom">
			<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'stevens-chiro' ); ?></p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
