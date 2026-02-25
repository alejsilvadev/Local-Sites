<footer class="site-footer" id="contact">
    <div class="container">
        <div class="footer-main">
            <div class="footer-brand">
                <div class="footer-brand__logo">La <span>Tavola</span></div>
                <p class="footer-brand__text">
                    An authentic Italian dining experience where tradition meets modern elegance. Every dish tells the story of generations past.
                </p>
            </div>

            <div class="footer-col">
                <h4 class="footer-col__title">Navigate</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/menu/')); ?>">Menu</a></li>
                    <li><a href="#about">Our Story</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-col__title">Hours</h4>
                <ul>
                    <li><a href="javascript:void(0)">Mon &ndash; Thu: 5pm &ndash; 10pm</a></li>
                    <li><a href="javascript:void(0)">Fri &ndash; Sat: 5pm &ndash; 11pm</a></li>
                    <li><a href="javascript:void(0)">Sunday: 4pm &ndash; 9pm</a></li>
                    <li><a href="javascript:void(0)">Lunch: Sat &ndash; Sun 12pm</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4 class="footer-col__title">Contact</h4>
                <address>
                    742 Italia Avenue<br>
                    New York, NY 10012<br>
                    <a href="tel:+12125551987">(212) 555-1987</a><br>
                    <a href="mailto:info@latavola.com">info@latavola.com</a>
                </address>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> La Tavola. All rights reserved.</p>
            <div class="footer-bottom__social">
                <a href="#">Instagram</a>
                <a href="#">Facebook</a>
                <a href="#">Yelp</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
