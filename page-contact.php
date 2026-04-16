<?php
/**
 * Template Name: Contact Us
 * Amy's Eden Senior Care - Contact Page
 */
get_header();
$phone = get_theme_mod('amyseden_phone', '(775) 884-3336');
$phone_raw = get_theme_mod('amyseden_phone_raw', '7758843336');
$email = get_theme_mod('amyseden_email', 'info@amyseden.com');
?>

<style>
/* ===================== CONTACT PAGE STYLES ===================== */
.contact-hero {
    background: #FBF5F0;
    padding: 140px 24px 80px;
    text-align: center;
}
.contact-hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: 52px;
    font-weight: 700;
    color: #2A2A3C;
    margin-bottom: 16px;
}
.contact-hero h1 span {
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.contact-hero p {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 18px;
    color: #5C5C6F;
    max-width: 560px;
    margin: 0 auto;
    line-height: 1.7;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.4fr;
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 80px 24px;
}

/* Contact Info Cards */
.contact-info-cards {
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.contact-info-card {
    background: #FFFFFF;
    border-radius: 16px;
    padding: 28px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    display: flex;
    align-items: flex-start;
    gap: 20px;
    border: 1px solid #E8E3DD;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.contact-info-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
}
.contact-info-card .icon-wrap {
    width: 52px;
    height: 52px;
    min-width: 52px;
    border-radius: 14px;
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    display: flex;
    align-items: center;
    justify-content: center;
}
.contact-info-card .icon-wrap svg {
    width: 24px;
    height: 24px;
    stroke: #FFFFFF;
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.contact-info-card h3 {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 17px;
    font-weight: 700;
    color: #2A2A3C;
    margin: 0 0 4px;
}
.contact-info-card h3 a {
    color: #2A2A3C;
    text-decoration: none;
}
.contact-info-card h3 a:hover {
    color: #EE5F3D;
}
.contact-info-card p {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    color: #8A8A9A;
    margin: 0;
    line-height: 1.5;
}

/* Contact Form */
.contact-form-card {
    background: #FFFFFF;
    border-radius: 16px;
    padding: 40px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    border: 1px solid #E8E3DD;
}
.contact-form-card h2 {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    font-weight: 700;
    color: #2A2A3C;
    margin: 0 0 8px;
}
.contact-form-card > p {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    color: #5C5C6F;
    margin: 0 0 28px;
}
.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}
.form-group {
    margin-bottom: 20px;
}
.form-group label {
    display: block;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    font-weight: 600;
    color: #2A2A3C;
    margin-bottom: 6px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid #E8E3DD;
    border-radius: 10px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    color: #2A2A3C;
    background: #FDFAF7;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
    box-sizing: border-box;
    -webkit-appearance: none;
}
.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #EE5F3D;
    box-shadow: 0 0 0 3px rgba(238, 95, 61, 0.1);
}
.form-group textarea {
    min-height: 120px;
    resize: vertical;
}
.form-group select {
    cursor: pointer;
    background-image: url("data:image/svg+xml,%3Csvg width='12' height='8' viewBox='0 0 12 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1.5L6 6.5L11 1.5' stroke='%238A8A9A' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 16px center;
    padding-right: 40px;
}
.contact-submit-btn {
    width: 100%;
    padding: 16px 32px;
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    color: #FFFFFF;
    border: none;
    border-radius: 12px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    letter-spacing: 0.3px;
}
.contact-submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(238, 95, 61, 0.3);
}
.form-note {
    text-align: center;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    color: #8A8A9A;
    margin-top: 16px;
}
.form-note a {
    color: #EE5F3D;
    font-weight: 600;
    text-decoration: none;
}
.form-note a:hover {
    color: #C12787;
}

/* Map Section */
.contact-map-section {
    padding: 0 24px 80px;
    max-width: 1200px;
    margin: 0 auto;
}
.contact-map-section h2 {
    font-family: 'Playfair Display', serif;
    font-size: 32px;
    font-weight: 700;
    color: #2A2A3C;
    text-align: center;
    margin-bottom: 32px;
}
.map-placeholder {
    background: #FBF5F0;
    border-radius: 16px;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px dashed #E8E3DD;
    font-family: 'Plus Jakarta Sans', sans-serif;
    color: #8A8A9A;
    font-size: 16px;
}

/* CTA Section */
.contact-cta {
    background: #FBF5F0;
    padding: 80px 24px;
    text-align: center;
}
.contact-cta h2 {
    font-family: 'Playfair Display', serif;
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 16px;
}
.contact-cta h2 span {
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.contact-cta p {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 18px;
    color: #5C5C6F;
    margin-bottom: 32px;
    line-height: 1.7;
}
.contact-cta .cta-phone {
    font-family: 'Playfair Display', serif;
    font-size: 32px;
    font-weight: 700;
    color: #2A2A3C;
    display: block;
    margin-bottom: 24px;
    text-decoration: none;
}
.contact-cta .cta-phone:hover {
    color: #EE5F3D;
}
.contact-cta .btn-gradient {
    display: inline-block;
    padding: 16px 40px;
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    color: #FFFFFF;
    border-radius: 12px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 16px;
    font-weight: 700;
    text-decoration: none;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.contact-cta .btn-gradient:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(238, 95, 61, 0.3);
}

/* Trust Indicators */
.contact-trust-bar {
    background: #2A2A3C;
    padding: 40px 24px;
}
.trust-bar-inner {
    max-width: 1000px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    gap: 60px;
    flex-wrap: wrap;
}
.trust-bar-item {
    text-align: center;
}
.trust-bar-item .trust-number {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    font-weight: 700;
    color: #FFFFFF;
    display: block;
}
.trust-bar-item .trust-label {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    color: rgba(255,255,255,0.6);
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-top: 4px;
    display: block;
}

/* Responsive */
@media (max-width: 768px) {
    .contact-hero h1 { font-size: 36px; }
    .contact-grid {
        grid-template-columns: 1fr;
        padding: 40px 24px;
    }
    .form-row { grid-template-columns: 1fr; }
    .contact-form-card { padding: 28px; }
    .contact-cta h2 { font-size: 28px; }
    .contact-cta .cta-phone { font-size: 24px; }
    .trust-bar-inner { gap: 32px; }
    .trust-bar-item .trust-number { font-size: 22px; }
}
</style>

<main class="site-main">

    <!-- ===================== HERO ===================== -->
    <section class="contact-hero">
        <h1>Get in <span>Touch</span></h1>
        <p>We'd love to hear from you. Schedule a tour, ask questions about our Two-Resident Home&trade; model, or learn about care options for your loved one.</p>
    </section>

    <!-- ===================== CONTACT GRID ===================== -->
    <section class="contact-grid">

        <!-- Left Column: Contact Info Cards -->
        <div class="contact-info-cards">

            <div class="contact-info-card">
                <div class="icon-wrap">
                    <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                </div>
                <div>
                    <h3><a href="tel:<?php echo esc_attr($phone_raw); ?>"><?php echo esc_html($phone); ?></a></h3>
                    <p>Available 7 days a week</p>
                </div>
            </div>

            <div class="contact-info-card">
                <div class="icon-wrap">
                    <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <div>
                    <h3><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></h3>
                    <p>We respond within 24 hours</p>
                </div>
            </div>

            <div class="contact-info-card">
                <div class="icon-wrap">
                    <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <div>
                    <h3>Reno &amp; Carson City, Nevada</h3>
                    <p>12 Licensed Homes across the region</p>
                </div>
            </div>

            <div class="contact-info-card">
                <div class="icon-wrap">
                    <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                </div>
                <div>
                    <h3>Tours Available 7 Days a Week</h3>
                    <p>Schedule a visit at your convenience</p>
                </div>
            </div>

        </div>

        <!-- Right Column: Contact Form -->
        <div class="contact-form-card">
            <h2>Send Us a Message</h2>
            <p>Fill out the form below and a care coordinator will reach out shortly.</p>

            <form id="contact-form" class="amyseden-form" method="post" action="#" novalidate>
                <?php wp_nonce_field('amyseden_contact_nonce', 'amyseden_contact_nonce_field'); ?>
                <input type="hidden" name="form_ts" value="<?php echo esc_attr(time()); ?>">
                <input type="hidden" name="page_title" value="<?php echo esc_attr(get_the_title()); ?>">
                <!-- Honeypot: hidden from humans, irresistible to bots -->
                <div class="amyseden-hp" aria-hidden="true" style="position:absolute;left:-9999px;top:-9999px;height:0;width:0;overflow:hidden;">
                    <label for="website">Website (leave empty)</label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first_name" placeholder="Your first name" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last_name" placeholder="Your last name" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="contact-phone">Phone</label>
                        <input type="tel" id="contact-phone" name="phone" placeholder="(555) 123-4567">
                    </div>
                    <div class="form-group">
                        <label for="contact-email">Email</label>
                        <input type="email" id="contact-email" name="email" placeholder="you@example.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="location">Preferred Location</label>
                        <select id="location" name="location">
                            <option value="">Select a location</option>
                            <option value="reno">Reno</option>
                            <option value="carson-city">Carson City</option>
                            <option value="either">Either / No Preference</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="interest">I'm Interested In</label>
                        <select id="interest" name="interest">
                            <option value="">Select an option</option>
                            <option value="tour">Scheduling a Tour</option>
                            <option value="callback">Requesting a Callback</option>
                            <option value="pricing">Pricing Information</option>
                            <option value="immediate">Immediate Placement</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Tell us about your loved one's care needs, any questions you have, or the best time to reach you..."></textarea>
                </div>

                <button type="submit" class="contact-submit-btn">Send Message</button>

                <div class="form-status" role="status" aria-live="polite"></div>

                <p class="form-note">Or call us directly at <a href="tel:<?php echo esc_attr($phone_raw); ?>"><?php echo esc_html($phone); ?></a></p>
            </form>
        </div>

    </section>

    <!-- ===================== MAP SECTION ===================== -->
    <section class="contact-map-section">
        <h2>Our Locations</h2>
        <!--
            To add a Google Maps embed:
            1. Go to Google Maps and search for your location
            2. Click "Share" > "Embed a map"
            3. Copy the <iframe> code
            4. Replace the .map-placeholder div below with the iframe
            5. Add these styles to the iframe: width:100%; height:400px; border:0; border-radius:16px;

            Example:
            <iframe src="https://www.google.com/maps/embed?pb=YOUR_EMBED_CODE"
                    width="100%" height="400" style="border:0; border-radius:16px;"
                    allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
        -->
        <div class="map-placeholder">
            <span>Google Maps embed will appear here &mdash; See HTML comment for setup instructions</span>
        </div>
    </section>

    <!-- ===================== CTA SECTION ===================== -->
    <section class="contact-cta">
        <h2>Your Loved One Deserves <span>the Best</span></h2>
        <p>Experience our Two-Resident Home&trade; model &mdash; where every resident receives personalized, dignified care in a true home setting.</p>
        <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="cta-phone"><?php echo esc_html($phone); ?></a>
        <a href="#contact-form" class="btn-gradient">Schedule a Tour</a>
    </section>

    <!-- ===================== TRUST BAR ===================== -->
    <section class="contact-trust-bar">
        <div class="trust-bar-inner">
            <div class="trust-bar-item">
                <span class="trust-number">13+</span>
                <span class="trust-label">Years of Care</span>
            </div>
            <div class="trust-bar-item">
                <span class="trust-number">12</span>
                <span class="trust-label">Licensed Homes</span>
            </div>
            <div class="trust-bar-item">
                <span class="trust-number">5-Star</span>
                <span class="trust-label">Reviews</span>
            </div>
            <div class="trust-bar-item">
                <span class="trust-number">2:1</span>
                <span class="trust-label">Resident-to-Caregiver</span>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
