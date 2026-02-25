<?php
/**
 * Template Name: Contact
 */
get_header();
?>

<section class="page-hero">
    <h1>Get In Touch</h1>
    <p>Let's Create Together</p>
</section>

<section class="section">
    <div class="container">
        <div class="contact-layout">
            <div class="contact-info fade-in">
                <h3>We'd Love to Hear From You</h3>
                <p>Whether you're planning a wedding, need brand content, or just have a creative idea — reach out and let's make it happen.</p>

                <ul class="contact-details">
                    <li>
                        <span class="detail-label">Email</span>
                        <span class="detail-value"><?php echo antispambot(get_option('admin_email')); ?></span>
                    </li>
                    <li>
                        <span class="detail-label">Phone</span>
                        <span class="detail-value">(555) 123-4567</span>
                    </li>
                    <li>
                        <span class="detail-label">Location</span>
                        <span class="detail-value">Available Worldwide</span>
                    </li>
                    <li>
                        <span class="detail-label">Hours</span>
                        <span class="detail-value">Mon – Fri, 9am – 6pm</span>
                    </li>
                </ul>
            </div>

            <div class="contact-form fade-in">
                <form id="contact-form">
                    <div class="form-group">
                        <label for="name">Your Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="service">Service Interested In</label>
                        <select id="service" name="service">
                            <option value="">Select a service</option>
                            <option value="Wedding Photography">Wedding Photography</option>
                            <option value="Wedding Videography">Wedding Videography</option>
                            <option value="Portrait Session">Portrait Session</option>
                            <option value="Commercial/Brand">Commercial / Brand</option>
                            <option value="Event Coverage">Event Coverage</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="form-submit">Send Message</button>
                    <div class="form-message" id="form-message"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
