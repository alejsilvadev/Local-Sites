<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">

            <!-- Brand Column -->
            <div class="footer-brand">
                <div class="logo-text">
                    IronBuilt
                    <span>Construction Co.</span>
                </div>
                <p>Building the future with precision, integrity, and an unwavering commitment to quality craftsmanship since 1998.</p>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook"><?php echo ironbuilt_icon('facebook'); ?></a>
                    <a href="#" aria-label="Instagram"><?php echo ironbuilt_icon('instagram'); ?></a>
                    <a href="#" aria-label="LinkedIn"><?php echo ironbuilt_icon('linkedin'); ?></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Services</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="footer-col">
                <h4>Services</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Commercial Construction</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Residential Building</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Renovations</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Project Management</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Design & Planning</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="footer-col">
                <h4>Contact Us</h4>
                <div class="footer-contact-item">
                    <?php echo ironbuilt_icon('map-pin'); ?>
                    <span>1247 Industrial Parkway<br>Austin, TX 78701</span>
                </div>
                <div class="footer-contact-item">
                    <?php echo ironbuilt_icon('phone'); ?>
                    <span>(512) 555-0198</span>
                </div>
                <div class="footer-contact-item">
                    <?php echo ironbuilt_icon('mail'); ?>
                    <span>info@ironbuiltco.com</span>
                </div>
            </div>

        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> IronBuilt Construction Co. All rights reserved.</p>
            <p>Licensed &amp; Insured | TX License #CB-29481</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
