<?php
/**
 * Homepage template.
 *
 * @package Law_Firm
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Experienced Legal Representation <span>You Can Trust</span></h1>
        <p>For over 25 years, Smith &amp; Johnson Law has provided dedicated legal counsel to individuals and businesses. We fight tirelessly to protect your rights and secure the justice you deserve.</p>
        <div class="hero-buttons">
            <a href="#contact" class="btn btn-primary">Schedule a Free Consultation</a>
            <a href="#practice-areas" class="btn btn-outline">Our Practice Areas</a>
        </div>
    </div>
</section>

<!-- Practice Areas -->
<section id="practice-areas" class="section practice-areas">
    <div class="container">
        <div class="section-header">
            <h2>Our Practice Areas</h2>
            <span class="separator"></span>
            <p>We provide comprehensive legal services across a wide range of practice areas to meet your needs.</p>
        </div>

        <div class="practice-grid">
            <!-- Family Law -->
            <div class="practice-card">
                <div class="icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                </div>
                <h3>Family Law</h3>
                <p>Compassionate guidance through divorce, child custody, adoption, and other family matters with sensitivity and care.</p>
            </div>

            <!-- Criminal Defense -->
            <div class="practice-card">
                <div class="icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg>
                </div>
                <h3>Criminal Defense</h3>
                <p>Aggressive defense strategies for misdemeanors, felonies, DUI, and white-collar crimes to protect your freedom.</p>
            </div>

            <!-- Personal Injury -->
            <div class="practice-card">
                <div class="icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 3c1.93 0 3.5 1.57 3.5 3.5S13.93 13 12 13s-3.5-1.57-3.5-3.5S10.07 6 12 6zm7 13H5v-.23c0-.62.28-1.2.76-1.58C7.47 15.82 9.64 15 12 15s4.53.82 6.24 2.19c.48.38.76.97.76 1.58V19z"/></svg>
                </div>
                <h3>Personal Injury</h3>
                <p>Dedicated representation for accident victims seeking fair compensation for injuries, medical bills, and lost wages.</p>
            </div>

            <!-- Business Law -->
            <div class="practice-card">
                <div class="icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"/></svg>
                </div>
                <h3>Business Law</h3>
                <p>Strategic legal counsel for business formation, contracts, mergers, acquisitions, and regulatory compliance.</p>
            </div>

            <!-- Estate Planning -->
            <div class="practice-card">
                <div class="icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                </div>
                <h3>Estate Planning</h3>
                <p>Comprehensive wills, trusts, and estate plans to protect your assets and ensure your wishes are honored.</p>
            </div>

            <!-- Immigration Law -->
            <div class="practice-card">
                <div class="icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"/></svg>
                </div>
                <h3>Immigration Law</h3>
                <p>Expert assistance with visas, green cards, citizenship applications, and deportation defense proceedings.</p>
            </div>
        </div>
    </div>
</section>

<!-- About / Why Choose Us -->
<section id="about" class="section about-section">
    <div class="container">
        <div class="about-content">
            <h2>Why Choose Our Firm</h2>
            <span class="separator"></span>
            <p>At Smith &amp; Johnson Law, we combine decades of experience with a personalized approach to every case. Our team of dedicated attorneys takes the time to understand your unique situation and develop strategies tailored to achieve the best possible outcomes.</p>
            <p>We believe that everyone deserves access to exceptional legal representation. That&rsquo;s why we offer free initial consultations and flexible payment options to ensure that quality legal counsel is within reach.</p>

            <div class="about-stats">
                <div class="stat-item">
                    <span class="number">25+</span>
                    <span class="label">Years Experience</span>
                </div>
                <div class="stat-item">
                    <span class="number">5,000+</span>
                    <span class="label">Cases Handled</span>
                </div>
                <div class="stat-item">
                    <span class="number">98%</span>
                    <span class="label">Client Satisfaction</span>
                </div>
            </div>
        </div>

        <div class="about-image">
            <span>Law Office Image Placeholder</span>
        </div>
    </div>
</section>

<!-- Attorney Spotlight -->
<section id="attorneys" class="section attorneys">
    <div class="container">
        <div class="section-header">
            <h2>Meet Our Attorneys</h2>
            <span class="separator"></span>
            <p>Our experienced legal team is dedicated to providing exceptional representation and personalized service.</p>
        </div>

        <div class="attorney-grid">
            <div class="attorney-card">
                <div class="attorney-photo">&#9879;</div>
                <div class="attorney-info">
                    <h3>Robert Smith</h3>
                    <div class="title">Managing Partner</div>
                    <p>With over 25 years of experience in criminal defense and personal injury law, Robert has secured millions in settlements for his clients.</p>
                </div>
            </div>

            <div class="attorney-card">
                <div class="attorney-photo">&#9879;</div>
                <div class="attorney-info">
                    <h3>Elizabeth Johnson</h3>
                    <div class="title">Senior Partner</div>
                    <p>Elizabeth specializes in family law and estate planning, bringing compassion and fierce advocacy to every case she handles.</p>
                </div>
            </div>

            <div class="attorney-card">
                <div class="attorney-photo">&#9879;</div>
                <div class="attorney-info">
                    <h3>Michael Chen</h3>
                    <div class="title">Associate Attorney</div>
                    <p>Michael focuses on business law and immigration, helping entrepreneurs and families navigate complex legal challenges.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="section testimonials">
    <div class="container">
        <div class="section-header">
            <h2>What Our Clients Say</h2>
            <span class="separator"></span>
            <p>We take pride in the relationships we build and the results we deliver for our clients.</p>
        </div>

        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <blockquote>&ldquo;Smith &amp; Johnson Law handled my personal injury case with incredible professionalism. They secured a settlement that far exceeded my expectations. I cannot recommend them enough.&rdquo;</blockquote>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">JD</div>
                    <div>
                        <div class="name">James Davidson</div>
                        <div class="case-type">Personal Injury Client</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <blockquote>&ldquo;During one of the most difficult times of my life, Elizabeth Johnson guided me through my divorce with empathy and expertise. She fought for what was fair and kept me informed every step of the way.&rdquo;</blockquote>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">SM</div>
                    <div>
                        <div class="name">Sarah Mitchell</div>
                        <div class="case-type">Family Law Client</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <blockquote>&ldquo;Michael Chen helped us navigate the complex immigration process for our family. His knowledge and dedication made what seemed impossible become a reality. Forever grateful.&rdquo;</blockquote>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">RP</div>
                    <div>
                        <div class="name">Ricardo Perez</div>
                        <div class="case-type">Immigration Client</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="cta-banner">
    <div class="container">
        <h2>Schedule Your Free Consultation Today</h2>
        <p>Take the first step toward resolving your legal matter. Our attorneys are ready to help.</p>
        <div class="phone"><a href="tel:+15551234567">(555) 123-4567</a></div>
        <a href="#contact" class="btn btn-primary">Contact Us Now</a>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section contact-section">
    <div class="container">
        <div class="section-header">
            <h2>Get In Touch</h2>
            <span class="separator"></span>
            <p>Visit our office or reach out today for a free, no-obligation consultation about your legal matter.</p>
        </div>

        <div class="contact-grid">
            <div class="contact-details">
                <h3>Contact Information</h3>

                <div class="contact-item">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                    </div>
                    <div>
                        <h4>Office Address</h4>
                        <p>123 Justice Avenue, Suite 400<br>New York, NY 10001</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                    </div>
                    <div>
                        <h4>Phone</h4>
                        <p><a href="tel:+15551234567">(555) 123-4567</a></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    </div>
                    <div>
                        <h4>Email</h4>
                        <p><a href="mailto:contact@smithjohnsonlaw.com">contact@smithjohnsonlaw.com</a></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                    </div>
                    <div>
                        <h4>Office Hours</h4>
                        <p>Mon&ndash;Fri: 8:00 AM &ndash; 6:00 PM<br>Sat: 9:00 AM &ndash; 1:00 PM</p>
                    </div>
                </div>
            </div>

            <div class="contact-map">
                <span>Map Placeholder &mdash; Embed Google Map here</span>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
