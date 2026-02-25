<?php
/**
 * Template Name: Contact Page
 * Slug: contact
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
        // IMAGE URL: Construction site with beautiful sunset or sunrise behind the structure
        // Upload a wide, high-resolution image (2000x800px) for the contact page hero
        echo esc_url(get_theme_file_uri('assets/images/contact-hero.jpg'));
    ?>');"></div>
    <div class="container">
        <div class="page-hero-content reveal">
            <div class="breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span class="sep">/</span>
                <span>Contact</span>
            </div>
            <h1>Get In Touch</h1>
            <p>Ready to start your project? We'd love to hear from you. Reach out and let's build something extraordinary together.</p>
        </div>
    </div>
</section>

<!-- ============================================
     CONTACT SECTION
     ============================================ -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">

            <!-- Contact Info -->
            <div class="contact-info reveal-left">
                <div class="section-tag">Contact Us</div>
                <h2>Let's Talk About<br>Your Project</h2>
                <p>Whether you have a detailed plan or just an idea, our team is here to help you every step of the way. Get in touch and we'll respond within 24 hours.</p>

                <div class="contact-info-items">
                    <div class="contact-info-item">
                        <div class="icon"><?php echo ironbuilt_icon('map-pin'); ?></div>
                        <div>
                            <h4>Visit Our Office</h4>
                            <p>1247 Industrial Parkway<br>Austin, TX 78701</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon"><?php echo ironbuilt_icon('phone'); ?></div>
                        <div>
                            <h4>Call Us</h4>
                            <p>(512) 555-0198<br>(512) 555-0199 (Fax)</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="icon"><?php echo ironbuilt_icon('mail'); ?></div>
                        <div>
                            <h4>Email Us</h4>
                            <p>info@ironbuiltco.com<br>quotes@ironbuiltco.com</p>
                        </div>
                    </div>
                </div>

                <div class="contact-hours">
                    <h4><?php echo ironbuilt_icon('clock'); ?> Business Hours</h4>
                    <div class="contact-hours-row">
                        <span class="day">Monday - Friday</span>
                        <span class="time">7:00 AM - 6:00 PM</span>
                    </div>
                    <div class="contact-hours-row">
                        <span class="day">Saturday</span>
                        <span class="time">8:00 AM - 2:00 PM</span>
                    </div>
                    <div class="contact-hours-row">
                        <span class="day">Sunday</span>
                        <span class="time">Closed</span>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-wrapper reveal-right">
                <h3>Request a Free Quote</h3>
                <p>Fill out the form below and our team will get back to you within one business day.</p>

                <form id="contact-form" class="contact-form" method="post">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">First Name *</label>
                            <input type="text" id="first-name" name="first_name" placeholder="John" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name *</label>
                            <input type="text" id="last-name" name="last_name" placeholder="Doe" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="(512) 555-0000">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="service">Service Interested In</label>
                        <select id="service" name="service">
                            <option value="">Select a service...</option>
                            <option value="commercial">Commercial Construction</option>
                            <option value="residential">Residential Building</option>
                            <option value="renovation">Renovations & Remodeling</option>
                            <option value="management">Project Management</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="budget">Estimated Budget</label>
                        <select id="budget" name="budget">
                            <option value="">Select budget range...</option>
                            <option value="under-100k">Under $100,000</option>
                            <option value="100k-500k">$100,000 - $500,000</option>
                            <option value="500k-1m">$500,000 - $1,000,000</option>
                            <option value="1m-5m">$1,000,000 - $5,000,000</option>
                            <option value="over-5m">Over $5,000,000</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Project Details *</label>
                        <textarea id="message" name="message" placeholder="Tell us about your project, timeline, and any specific requirements..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Send Message
                        <?php echo ironbuilt_icon('arrow-right'); ?>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- ============================================
     MAP SECTION
     ============================================ -->
<section class="map-section">
    <!-- Replace the src below with your actual Google Maps embed URL -->
    <!-- To get an embed URL: Go to Google Maps > Search your address > Click Share > Embed a map > Copy the iframe src -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.76953987854!2d-97.79878215!3d30.307182149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644b599a0cc032f%3A0x5d9b464bd469d57a!2sAustin%2C%20TX!5e0!3m2!1sen!1sus!4v1700000000000"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="IronBuilt Construction Office Location">
    </iframe>
</section>

<?php get_footer(); ?>
