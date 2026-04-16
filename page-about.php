<?php
/**
 * Template Name: About Us
 * Amy's Eden Senior Care - About Page
 */
get_header();
$phone = get_theme_mod('amyseden_phone', '(775) 884-3336');
$phone_raw = get_theme_mod('amyseden_phone_raw', '7758843336');
$about_hero_bg = get_theme_mod('amyseden_about_hero_bg', 'https://amyseden.com/wp-content/uploads/2025/04/Hero.png');
$about_hero_heading = get_theme_mod('amyseden_about_hero_heading', 'Our Story');
$about_hero_subtitle = get_theme_mod('amyseden_about_hero_subtitle', "For over 13 years, Amy's Eden has been redefining senior care with our revolutionary Two-Resident Home™ model — where every resident is treated like family.");
$about_mission_label = get_theme_mod('amyseden_about_mission_label', 'Our Mission');
$about_mission_heading = get_theme_mod('amyseden_about_mission_heading', 'Redefining What Senior Care Can Be');
$about_mission_text = get_theme_mod('amyseden_about_mission_text', "At Amy's Eden, we believe every senior deserves more than just a bed in a crowded facility. They deserve a real home, a dedicated caregiver who knows them by name, and care that revolves around their life — not a schedule.");
$about_mission_image = get_theme_mod('amyseden_about_mission_image', 'https://amyseden.com/wp-content/uploads/2025/05/2.webp');
?>

<style>
/* ===================== ABOUT PAGE STYLES ===================== */
.about-hero {
    position: relative;
    min-height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 160px 24px 100px;
    background: url('<?php echo esc_url($about_hero_bg); ?>') center/cover no-repeat;
}
.about-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(42,42,60,0.7) 0%, rgba(42,42,60,0.85) 100%);
}
.about-hero-content {
    position: relative;
    z-index: 2;
    max-width: 700px;
}
.about-hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: 56px;
    font-weight: 700;
    color: #FFFFFF;
    margin-bottom: 16px;
}
.about-hero p {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 18px;
    color: rgba(255,255,255,0.85);
    line-height: 1.7;
}

/* Mission Section */
.about-mission {
    padding: 100px 24px;
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}
.about-mission-text h2 {
    font-family: 'Playfair Display', serif;
    font-size: 40px;
    font-weight: 700;
    color: #2A2A3C;
    margin-bottom: 8px;
}
.about-mission-text h2 span {
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.about-mission-text .subtitle {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    font-weight: 600;
    color: #B8935A;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 20px;
    display: block;
}
.about-mission-text p {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 16px;
    color: #5C5C6F;
    line-height: 1.8;
    margin-bottom: 20px;
}
.about-mission-text .highlight-box {
    background: #FBF5F0;
    border-left: 4px solid;
    border-image: linear-gradient(135deg, #EE5F3D, #C12787) 1;
    padding: 20px 24px;
    border-radius: 0 12px 12px 0;
    margin-top: 24px;
}
.about-mission-text .highlight-box p {
    margin: 0;
    font-weight: 500;
    color: #2A2A3C;
}
.about-mission-image img {
    width: 100%;
    border-radius: 16px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.06);
}

/* Values Grid */
.about-values {
    background: #FBF5F0;
    padding: 100px 24px;
}
.about-values-inner {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
}
.about-values h2 {
    font-family: 'Playfair Display', serif;
    font-size: 40px;
    font-weight: 700;
    color: #2A2A3C;
    margin-bottom: 12px;
}
.about-values > .about-values-inner > p {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 17px;
    color: #5C5C6F;
    margin-bottom: 48px;
}
.values-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}
.value-card {
    background: #FFFFFF;
    border-radius: 16px;
    padding: 36px 28px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    border: 1px solid #E8E3DD;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.value-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
}
.value-card .value-icon {
    width: 64px;
    height: 64px;
    border-radius: 16px;
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}
.value-card .value-icon svg {
    width: 28px;
    height: 28px;
    stroke: #FFFFFF;
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.value-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 22px;
    font-weight: 700;
    color: #2A2A3C;
    margin-bottom: 10px;
}
.value-card p {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    color: #5C5C6F;
    line-height: 1.7;
    margin: 0;
}

/* By the Numbers */
.about-numbers {
    padding: 80px 24px;
    background: #2A2A3C;
}
.about-numbers-inner {
    max-width: 1000px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px;
    text-align: center;
}
.about-number-item .number {
    font-family: 'Playfair Display', serif;
    font-size: 48px;
    font-weight: 700;
    color: #FFFFFF;
    display: block;
    line-height: 1.1;
}
.about-number-item .number-label {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    color: rgba(255,255,255,0.6);
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin-top: 8px;
    display: block;
}

/* Photo Gallery */
.about-gallery {
    padding: 100px 24px;
    max-width: 1200px;
    margin: 0 auto;
}
.about-gallery h2 {
    font-family: 'Playfair Display', serif;
    font-size: 40px;
    font-weight: 700;
    color: #2A2A3C;
    text-align: center;
    margin-bottom: 48px;
}
.gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}
.gallery-grid img {
    width: 100%;
    height: 280px;
    object-fit: cover;
    border-radius: 16px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    transition: transform 0.3s ease;
}
.gallery-grid img:hover {
    transform: scale(1.02);
}

/* About CTA */
.about-cta {
    background: #FBF5F0;
    padding: 100px 24px;
    text-align: center;
}
.about-cta h2 {
    font-family: 'Playfair Display', serif;
    font-size: 40px;
    font-weight: 700;
    color: #2A2A3C;
    margin-bottom: 16px;
}
.about-cta h2 span {
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.about-cta p {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 18px;
    color: #5C5C6F;
    max-width: 560px;
    margin: 0 auto 32px;
    line-height: 1.7;
}
.about-cta .btn-gradient {
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
.about-cta .btn-gradient:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(238, 95, 61, 0.3);
}

/* Responsive */
@media (max-width: 768px) {
    .about-hero { min-height: 380px; padding: 140px 24px 80px; }
    .about-hero h1 { font-size: 36px; }
    .about-mission { grid-template-columns: 1fr; gap: 40px; padding: 60px 24px; }
    .about-mission-text h2 { font-size: 30px; }
    .values-grid { grid-template-columns: 1fr 1fr; }
    .about-numbers-inner { grid-template-columns: repeat(2, 1fr); }
    .about-number-item .number { font-size: 36px; }
    .gallery-grid { grid-template-columns: 1fr 1fr; }
    .about-cta h2 { font-size: 28px; }
}
@media (max-width: 480px) {
    .values-grid { grid-template-columns: 1fr; }
    .gallery-grid { grid-template-columns: 1fr; }
}
</style>

<main class="site-main">

    <!-- ===================== HERO ===================== -->
    <section class="about-hero">
        <div class="about-hero-content">
            <h1><?php echo esc_html($about_hero_heading); ?></h1>
            <p><?php echo esc_html($about_hero_subtitle); ?></p>
        </div>
    </section>

    <!-- ===================== MISSION SECTION ===================== -->
    <section class="about-mission">
        <div class="about-mission-text">
            <span class="subtitle">Our Mission</span>
            <h2>Redefining Senior Care, <span>One Home at a Time</span></h2>
            <p>At Amy's Eden, we believe that every senior deserves care that honors their individuality, preserves their dignity, and enriches their daily life. That belief led us to create something truly different: the Two-Resident Home&trade;.</p>
            <p>Unlike traditional assisted living facilities that house dozens or even hundreds of residents, each of our 12 licensed homes serves just two residents. One dedicated caregiver provides 24/7 personalized attention, ensuring your loved one receives care tailored to their unique needs and preferences.</p>
            <div class="highlight-box">
                <p>Our 2:1 resident-to-caregiver ratio means your loved one is never just another number. They're family &mdash; and they're treated that way every single day.</p>
            </div>
        </div>
        <div class="about-mission-image">
            <img src="<?php echo esc_url($about_mission_image); ?>" alt="Amy's Eden Senior Care home interior" loading="lazy">
        </div>
    </section>

    <!-- ===================== VALUES GRID ===================== -->
    <section class="about-values">
        <div class="about-values-inner">
            <h2>Our Core Values</h2>
            <p>These principles guide every decision we make and every interaction we have.</p>
            <div class="values-grid">

                <div class="value-card">
                    <div class="value-icon">
                        <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    </div>
                    <h3>Compassion</h3>
                    <p>Every interaction is rooted in genuine empathy and heartfelt care for our residents and their families.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3>Dignity</h3>
                    <p>We honor each resident's autonomy, preferences, and life story, ensuring they always feel valued and respected.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h3>Family</h3>
                    <p>Our Two-Resident Home&trade; model creates a true family environment where residents feel at home, not in a facility.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    </div>
                    <h3>Excellence</h3>
                    <p>From our caregivers to our homes, we maintain the highest standards in everything we do &mdash; because your loved one deserves nothing less.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ===================== BY THE NUMBERS ===================== -->
    <section class="about-numbers">
        <div class="about-numbers-inner">
            <div class="about-number-item">
                <span class="number">13+</span>
                <span class="number-label">Years of Care</span>
            </div>
            <div class="about-number-item">
                <span class="number">12</span>
                <span class="number-label">Licensed Homes</span>
            </div>
            <div class="about-number-item">
                <span class="number">2:1</span>
                <span class="number-label">Resident-to-Caregiver</span>
            </div>
            <div class="about-number-item">
                <span class="number">5&#9733;</span>
                <span class="number-label">Average Reviews</span>
            </div>
        </div>
    </section>

    <!-- ===================== PHOTO GALLERY ===================== -->
    <section class="about-gallery">
        <h2>Inside Our Homes</h2>
        <div class="gallery-grid">
            <img src="https://amyseden.com/wp-content/uploads/2025/05/2.webp" alt="Amy's Eden home interior" loading="lazy">
            <img src="https://amyseden.com/wp-content/uploads/2025/05/5.webp" alt="Amy's Eden home living area" loading="lazy">
            <img src="https://amyseden.com/wp-content/uploads/2025/05/3.webp" alt="Amy's Eden comfortable bedroom" loading="lazy">
            <img src="https://amyseden.com/wp-content/uploads/2025/05/4.webp" alt="Amy's Eden dining area" loading="lazy">
            <img src="https://amyseden.com/wp-content/uploads/2025/05/1.webp" alt="Amy's Eden garden area" loading="lazy">
            <img src="https://amyseden.com/wp-content/uploads/2025/05/6.webp" alt="Amy's Eden home exterior" loading="lazy">
        </div>
    </section>

    <!-- ===================== CTA ===================== -->
    <section class="about-cta">
        <h2>Experience <span>the Difference</span></h2>
        <p>See for yourself why families trust Amy's Eden. Schedule a personal tour of one of our Two-Resident Homes today.</p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-gradient">Schedule a Tour</a>
    </section>

</main>

<?php get_footer(); ?>
