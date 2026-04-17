<?php
/**
 * Template Name: Home Care
 * Template for the Home Care landing page
 *
 * All text/images are Customizer-controlled via the "Home Care Page" panel.
 */
get_header();

$phone     = get_theme_mod('amyseden_phone', '(775) 884-3336');
$phone_raw = get_theme_mod('amyseden_phone_raw', '7758843336');

// ---- Hero ----
$hc_hero_bg        = get_theme_mod('amyseden_hc_hero_bg', 'https://amyseden.com/wp-content/uploads/2025/04/Hero.png');
$hc_hero_bg_mobile = get_theme_mod('amyseden_hc_hero_bg_mobile', $hc_hero_bg);
$hc_hero_badge     = get_theme_mod('amyseden_hc_hero_badge', 'In-Home Care Services');
$hc_hero_heading   = get_theme_mod('amyseden_hc_hero_heading', 'Premium In-Home Care');
$hc_hero_accent    = get_theme_mod('amyseden_hc_hero_accent', 'That Comes to You');
$hc_hero_subtitle  = get_theme_mod('amyseden_hc_hero_subtitle', 'Professional, compassionate caregivers providing personalized care in the comfort of your own home — serving Reno & Carson City.');
$hc_hero_cta1_text = get_theme_mod('amyseden_hc_hero_cta1_text', 'Get Started Today');
$hc_hero_cta1_url  = get_theme_mod('amyseden_hc_hero_cta1_url', '#contact');
$hc_hero_cta2_text = get_theme_mod('amyseden_hc_hero_cta2_text', 'Call ' . $phone);

// ---- Trust bar (4 items) ----
$trust_defs = array(
    1 => array('13+',  'Years of Care'),
    2 => array('12',   'Licensed Homes'),
    3 => array('24/7', 'Availability'),
    4 => array('100%', 'Personalized Plans'),
);
$trust_items = array();
for ($i = 1; $i <= 4; $i++) {
    $trust_items[$i] = array(
        'number' => get_theme_mod("amyseden_hc_trust{$i}_number", $trust_defs[$i][0]),
        'label'  => get_theme_mod("amyseden_hc_trust{$i}_label",  $trust_defs[$i][1]),
    );
}

// ---- Overview ----
$ov_label    = get_theme_mod('amyseden_hc_ov_label', 'About Our Home Care');
$ov_heading  = get_theme_mod('amyseden_hc_ov_heading', 'Compassionate Care in the Comfort of Home');
$ov_p1       = get_theme_mod('amyseden_hc_ov_p1', 'At Amy\'s Eden, we believe everyone deserves to age with dignity in the place they feel most comfortable — home. Our professional caregivers bring warmth, expertise, and genuine compassion directly to your door.');
$ov_p2       = get_theme_mod('amyseden_hc_ov_p2', 'Whether your loved one needs a few hours of help each week or comprehensive daily support, our personalized approach ensures they receive exactly the care they need, exactly when they need it.');
$ov_image    = get_theme_mod('amyseden_hc_ov_image', 'https://amyseden.com/wp-content/uploads/2025/06/In-Home-Care-Amys-Eden.webp');
$ov_image_ac = get_theme_mod('amyseden_hc_ov_image_accent', 'https://amyseden.com/wp-content/uploads/2025/06/in-home-care-2.webp');
$ov_cta_text = get_theme_mod('amyseden_hc_ov_cta_text', 'Schedule a Free Assessment');
$ov_cta_url  = get_theme_mod('amyseden_hc_ov_cta_url', '#contact');

// ---- Why Us (6 cards + sidebar photo) ----
$why_label    = get_theme_mod('amyseden_hc_why_label', 'Why Choose Us');
$why_heading  = get_theme_mod('amyseden_hc_why_heading', "Why Amy's Eden Home Care");
$why_subtitle = get_theme_mod('amyseden_hc_why_subtitle', "Our caregivers are more than qualified — they're compassionate professionals who treat your loved ones like family.");
$why_photo    = get_theme_mod('amyseden_hc_why_photo', 'https://amyseden.com/wp-content/uploads/2025/06/Untitled-design-23-1.webp');
$usp_defs = array(
    1 => array('users',     'Trained & Vetted Caregivers',   'Every caregiver undergoes rigorous background checks, training, and ongoing education to deliver the highest standard of care.'),
    2 => array('clipboard', 'Personalized Care Plans',       'No two clients are alike. We create customized care plans tailored to your loved one\'s unique needs, preferences, and routines.'),
    3 => array('clock',     'Flexible Scheduling',           'From a few hours a week to full-time 24/7 care, we offer flexible scheduling options that adapt as your needs change.'),
    4 => array('pill',      'Medication Management',         'We ensure medications are taken correctly and on time, coordinating with physicians and pharmacies for seamless management.'),
    5 => array('smile',     'Companion Care & Activities',   'Beyond physical care, we provide meaningful companionship, engaging activities, and social interaction to enhance quality of life.'),
    6 => array('activity',  'Coordination with Medical Teams','We work directly with your loved one\'s doctors, therapists, and specialists to ensure a cohesive, comprehensive approach to care.'),
);
$usp_cards = array();
foreach ($usp_defs as $i => $d) {
    $usp_cards[$i] = array(
        'icon'  => get_theme_mod("amyseden_hc_usp{$i}_icon",  $d[0]),
        'title' => get_theme_mod("amyseden_hc_usp{$i}_title", $d[1]),
        'desc'  => get_theme_mod("amyseden_hc_usp{$i}_desc",  $d[2]),
    );
}

// ---- Photo strip (3 photos) ----
$photo_strip_defs = array(
    'https://amyseden.com/wp-content/uploads/2025/07/Frame-56.png',
    'https://amyseden.com/wp-content/uploads/2025/07/Frame-57.png',
    'https://amyseden.com/wp-content/uploads/2025/07/Frame-58.png',
);

// ---- Services (10 cards + feature row) ----
$sv_label    = get_theme_mod('amyseden_hc_sv_label', 'Our Services');
$sv_heading  = get_theme_mod('amyseden_hc_sv_heading', 'Comprehensive Home Care Services');
$sv_subtitle = get_theme_mod('amyseden_hc_sv_subtitle', 'From daily personal care to specialized medical support, we provide the full spectrum of in-home care services.');
$sv_feature_image = get_theme_mod('amyseden_hc_sv_feature_image', 'https://amyseden.com/wp-content/uploads/2023/08/pillr-page-image-1-web.png');
$sv_feature_label = get_theme_mod('amyseden_hc_sv_feature_label', 'Tailored to You');
$sv_feature_head  = get_theme_mod('amyseden_hc_sv_feature_heading', 'Every Service, Personalized to Your Family');
$sv_feature_text  = get_theme_mod('amyseden_hc_sv_feature_text', "We don't believe in one-size-fits-all care. Each service we provide is customized around your loved one's unique needs, preferences, daily routines, and health goals. From the first assessment to ongoing care, everything is built around them.");
$sv_defs = array(
    1  => array('hands',      'Personal Care',                  'Dignified assistance with bathing, grooming, dressing, and mobility to maintain comfort and independence.'),
    2  => array('heart',      'Companion Care',                 'Meaningful conversation, engaging activities, and accompanied outings to prevent isolation and bring joy.'),
    3  => array('pill',       'Medication Management',          'Accurate medication reminders, administration, and coordination with healthcare providers.'),
    4  => array('meal',       'Meal Preparation & Nutrition',   'Nutritious, home-cooked meals prepared to dietary needs and personal preferences.'),
    5  => array('sparkles',   'Light Housekeeping & Laundry',   'Maintaining a clean, safe, and comfortable home environment including laundry, dishes, and tidying.'),
    6  => array('location',   'Transportation & Errands',       'Safe transportation to appointments, social events, shopping, and other errands.'),
    7  => array('shield',     'Respite Care',                   'Giving family caregivers well-deserved breaks while ensuring your loved one is in expert hands.'),
    8  => array('check-circle','Post-Surgery & Rehabilitation', 'Specialized support during recovery, following care plans from surgeons and therapists.'),
    9  => array('activity',   'Chronic Disease Management',     'Ongoing support for diabetes, heart conditions, COPD, and other chronic conditions.'),
    10 => array('caregiver',  'Hospice Support Care',           'Compassionate support for end-of-life care, working alongside hospice teams to provide comfort and dignity.'),
);
$sv_cards = array();
foreach ($sv_defs as $i => $d) {
    $sv_cards[$i] = array(
        'icon'  => get_theme_mod("amyseden_hc_sv{$i}_icon",  $d[0]),
        'title' => get_theme_mod("amyseden_hc_sv{$i}_title", $d[1]),
        'desc'  => get_theme_mod("amyseden_hc_sv{$i}_desc",  $d[2]),
    );
}

// ---- Gallery (8 photos with captions) ----
$gal_label    = get_theme_mod('amyseden_hc_gal_label', 'Care in Action');
$gal_heading  = get_theme_mod('amyseden_hc_gal_heading', "See the Amy's Eden Difference");
$gal_subtitle = get_theme_mod('amyseden_hc_gal_subtitle', 'A glimpse into the compassionate, hands-on care our team provides every day.');
$gal_defs = array(
    1 => array('https://amyseden.com/wp-content/uploads/2025/06/In-Home-Care-Amys-Eden.webp', 'Personalized in-home care'),
    2 => array('https://amyseden.com/wp-content/uploads/2025/01/1.jpg',                        'Building meaningful connections'),
    3 => array('https://amyseden.com/wp-content/uploads/2025/01/2.jpg',                        'Compassionate daily support'),
    4 => array('https://amyseden.com/wp-content/uploads/2024/12/home-care_1.png',              'Comfort of home, quality of care'),
    5 => array('https://amyseden.com/wp-content/uploads/2025/06/in-home-care-2.webp',          'One-on-one personal attention'),
    6 => array('https://amyseden.com/wp-content/uploads/2024/03/word-image-47518-3.jpeg',      'Engaging activities every day'),
    7 => array('https://amyseden.com/wp-content/uploads/2025/06/Untitled-design-23-1.webp',    'Warmth and dignity always'),
    8 => array('https://amyseden.com/wp-content/uploads/2023/08/pillr-page-image-1-web.png',   'Professional caregiving team'),
);
$gal_cards = array();
foreach ($gal_defs as $i => $d) {
    $gal_cards[$i] = array(
        'img' => get_theme_mod("amyseden_hc_gal{$i}_img", $d[0]),
        'cap' => get_theme_mod("amyseden_hc_gal{$i}_cap", $d[1]),
    );
}

// ---- Cross-sell (Two-Resident Home) ----
$cs_badge    = get_theme_mod('amyseden_hc_cs_badge', 'When Needs Change');
$cs_heading  = get_theme_mod('amyseden_hc_cs_heading', "When Home Care Isn't Enough");
$cs_p1       = get_theme_mod('amyseden_hc_cs_p1', 'When 24-hour in-home care becomes too costly or complex, our Two-Resident Home™ provides the same personal attention at a fraction of the cost — in a beautiful, licensed home setting.');
$cs_p2       = get_theme_mod('amyseden_hc_cs_p2', "Our signature Two-Resident Home™ model means just two residents share one dedicated caregiver in a real home — not a facility. It's the best of both worlds: professional 24/7 care with the warmth of home.");
$cs_cta_text = get_theme_mod('amyseden_hc_cs_cta_text', 'Explore Our Two-Resident Homes →');
$cs_cta_url  = get_theme_mod('amyseden_hc_cs_cta_url', '/assisted-living/');
$cs_stats_defs = array(
    1 => array('2:1',  'Resident-to-Caregiver'),
    2 => array('24/7', 'Dedicated Caregiver'),
    3 => array('12',   'Licensed Homes'),
);
$cs_stats = array();
for ($i = 1; $i <= 3; $i++) {
    $cs_stats[$i] = array(
        'number' => get_theme_mod("amyseden_hc_cs_stat{$i}_number", $cs_stats_defs[$i][0]),
        'label'  => get_theme_mod("amyseden_hc_cs_stat{$i}_label",  $cs_stats_defs[$i][1]),
    );
}
$cs_gallery_defs = array(
    'https://amyseden.com/wp-content/uploads/2025/05/1.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/2.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/3.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/4.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/5.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/6.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/7.webp',
    'https://amyseden.com/wp-content/uploads/2025/09/10-1.webp',
    'https://amyseden.com/wp-content/uploads/2025/09/11.webp',
    'https://amyseden.com/wp-content/uploads/2025/09/12.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/8.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/9.webp',
);

// ---- Testimonials ----
$tm_label    = get_theme_mod('amyseden_hc_tm_label', 'Testimonials');
$tm_heading  = get_theme_mod('amyseden_hc_tm_heading', "Families Trust Amy's Eden");
$tm_subtitle = get_theme_mod('amyseden_hc_tm_subtitle', "Hear from families who have experienced the Amy's Eden difference firsthand.");
$tm_photo    = get_theme_mod('amyseden_hc_tm_photo', 'https://amyseden.com/wp-content/uploads/2025/01/1.jpg');
$tm_defs = array(
    1 => array("The caregivers at Amy's Eden treat my mother like she's their own family. The level of personal attention is something we could never find at a large facility.", 'Sarah M.', 'Daughter of Resident · Reno, NV'),
    2 => array("After my father's surgery, Amy's Eden provided incredible in-home care during his recovery. Professional, punctual, and genuinely caring. We couldn't ask for more.", 'Michael T.', 'Son of Client · Carson City, NV'),
    3 => array('We started with home care and eventually moved Mom to one of their Two-Resident Homes. The transition was seamless because we already knew and trusted the team.', 'Jennifer L.', 'Daughter of Resident · Reno, NV'),
);
$tm_cards = array();
foreach ($tm_defs as $i => $d) {
    $tm_cards[$i] = array(
        'quote'  => get_theme_mod("amyseden_hc_tm{$i}_quote",  $d[0]),
        'author' => get_theme_mod("amyseden_hc_tm{$i}_author", $d[1]),
        'role'   => get_theme_mod("amyseden_hc_tm{$i}_role",   $d[2]),
    );
}

// ---- Process (3 steps + photos) ----
$pr_label    = get_theme_mod('amyseden_hc_pr_label', 'Getting Started');
$pr_heading  = get_theme_mod('amyseden_hc_pr_heading', 'Three Simple Steps');
$pr_subtitle = get_theme_mod('amyseden_hc_pr_subtitle', 'Beginning care with Amy\'s Eden is easy. We guide you through every step with compassion and clarity.');
$pr_photos_defs = array(
    'https://amyseden.com/wp-content/uploads/2025/06/in-home-care-2.webp',
    'https://amyseden.com/wp-content/uploads/2024/03/word-image-47518-3.jpeg',
    'https://amyseden.com/wp-content/uploads/2025/01/2.jpg',
);
$pr_steps_defs = array(
    1 => array('Call Us',           "Reach out by phone or through our contact form. We'll listen to your needs and answer all your questions."),
    2 => array('Free Assessment',   "We conduct a comprehensive in-home assessment to understand your loved one's needs, preferences, and goals."),
    3 => array('Care Begins',       'Your personalized care plan is created and matched with the ideal caregiver. Compassionate care starts right away.'),
);
$pr_steps = array();
for ($i = 1; $i <= 3; $i++) {
    $pr_steps[$i] = array(
        'title' => get_theme_mod("amyseden_hc_pr_step{$i}_title", $pr_steps_defs[$i][0]),
        'desc'  => get_theme_mod("amyseden_hc_pr_step{$i}_desc",  $pr_steps_defs[$i][1]),
    );
}

// ---- Contact ----
$con_label    = get_theme_mod('amyseden_hc_con_label', 'Contact Us');
$con_heading  = get_theme_mod('amyseden_hc_con_heading', 'Start the Conversation');
$con_subtitle = get_theme_mod('amyseden_hc_con_subtitle', "Ready to explore home care for your loved one? Fill out the form below and we'll reach out within 24 hours.");
$con_info_heading = get_theme_mod('amyseden_hc_con_info_heading', "We're Here to Help");
$con_info_p       = get_theme_mod('amyseden_hc_con_info_p', "Whether you need a few hours of help each week or full-time care, we'll work with you to find the perfect solution for your family.");
$con_image    = get_theme_mod('amyseden_hc_con_image', 'https://amyseden.com/wp-content/uploads/2024/12/home-care_1.png');

// ---- FAQ ----
$faq_label    = get_theme_mod('amyseden_hc_faq_label', 'Common Questions');
$faq_heading  = get_theme_mod('amyseden_hc_faq_heading', 'Frequently Asked Questions');
$faq_subtitle = get_theme_mod('amyseden_hc_faq_subtitle', 'Find answers to common questions about our in-home care services.');
$faq_photo    = get_theme_mod('amyseden_hc_faq_photo', 'https://amyseden.com/wp-content/uploads/2025/01/2.jpg');
$faq_defs = array(
    1 => array('What home care services do you offer?', 'We offer a comprehensive range of in-home care services including personal care (bathing, grooming, mobility assistance), companion care, medication management, meal preparation, light housekeeping, transportation, respite care, post-surgery support, chronic disease management, and hospice support care.'),
    2 => array('How are your caregivers selected and trained?', 'Every caregiver undergoes a thorough background check, reference verification, and skills assessment. They receive ongoing training in senior care best practices, safety protocols, and specialized areas like dementia care. We handpick caregivers who demonstrate not just skill, but genuine compassion.'),
    3 => array('Can I choose my schedule (hourly, daily, overnight)?', 'Absolutely. We offer fully flexible scheduling to meet your needs — from a few hours per week to full 24/7 live-in care. Whether you need morning assistance, overnight supervision, or weekend coverage, we\'ll create a schedule that works for your family.'),
    4 => array('What if my loved one\'s needs change over time?', 'Care plans are living documents that evolve with your loved one. We conduct regular reassessments and adjust services as needs change. If full-time care becomes necessary, we can also facilitate a seamless transition to one of our Two-Resident Homes™.'),
    5 => array('Do you serve both Reno and Carson City?', 'Yes, we provide in-home care services throughout Reno and Carson City, Nevada. With 12 licensed homes and a large team of caregivers across both cities, we can serve families in the greater Northern Nevada area.'),
    6 => array('What\'s the difference between home care and your Two-Resident Homes?', 'Home care means a caregiver comes to your loved one\'s home on a scheduled basis. Our Two-Resident Home™ is our signature assisted living model where just two residents live in a licensed home with a dedicated 24/7 caregiver. It\'s ideal when full-time in-home care becomes too expensive or when more intensive, round-the-clock support is needed.'),
    7 => array('How do I get started?', 'Simply call us at ' . $phone . ' or fill out the contact form on this page. We\'ll schedule a free in-home assessment, discuss your needs, and create a personalized care plan. Most families can begin care within days of the initial consultation.'),
);
$faqs = array();
for ($i = 1; $i <= 7; $i++) {
    $faqs[$i] = array(
        'q' => get_theme_mod("amyseden_hc_faq{$i}_q", $faq_defs[$i][0]),
        'a' => get_theme_mod("amyseden_hc_faq{$i}_a", $faq_defs[$i][1]),
    );
}

// ---- Final CTA ----
$fc_label    = get_theme_mod('amyseden_hc_fc_label', 'Take the First Step');
$fc_heading  = get_theme_mod('amyseden_hc_fc_heading', 'Your Loved One Deserves Exceptional Care');
$fc_subtitle = get_theme_mod('amyseden_hc_fc_subtitle', "Let's discuss how Amy's Eden can provide the personalized, premium home care your family needs.");
$fc_cta1     = get_theme_mod('amyseden_hc_fc_cta1', 'Request a Free Consultation');
$fc_bg       = get_theme_mod('amyseden_hc_fc_bg', 'https://amyseden.com/wp-content/uploads/2025/04/Hero.png');
?>

<!-- HERO -->
<section class="hero hero--hc">
    <picture class="hero__bg-picture">
        <source media="(max-width: 768px)" srcset="<?php echo esc_url($hc_hero_bg_mobile); ?>">
        <img src="<?php echo esc_url($hc_hero_bg); ?>" alt="" class="hero__bg-image" aria-hidden="true">
    </picture>
    <div class="hero__overlay"></div>
    <div class="hero__content">
        <div class="hero__badge">
            <?php echo amyseden_icon('star'); ?>
            <?php echo esc_html($hc_hero_badge); ?>
        </div>
        <h1 class="hero__heading">
            <?php echo esc_html($hc_hero_heading); ?>
            <br><em><?php echo esc_html($hc_hero_accent); ?></em>
        </h1>
        <p class="hero__subtext"><?php echo esc_html($hc_hero_subtitle); ?></p>
        <div class="hero__ctas">
            <a href="<?php echo esc_url($hc_hero_cta1_url); ?>" class="btn btn-primary"><?php echo esc_html($hc_hero_cta1_text); ?></a>
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn btn-outline--light">
                <?php echo amyseden_icon('phone'); ?>
                <?php echo esc_html($hc_hero_cta2_text); ?>
            </a>
        </div>
    </div>
</section>

<!-- TRUST BAR -->
<section class="trust-bar">
    <div class="container">
        <?php foreach ($trust_items as $i => $item) : $delay = $i > 1 ? ' reveal-delay-' . ($i - 1) : ''; ?>
            <div class="trust-item reveal<?php echo $delay; ?>">
                <div class="trust-item__number"><?php echo esc_html($item['number']); ?></div>
                <div class="trust-item__label"><?php echo esc_html($item['label']); ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- OVERVIEW -->
<section class="section overview-section">
    <div class="container">
        <div class="overview-grid reveal">
            <div class="overview-image-stack">
                <img class="img-main" src="<?php echo esc_url($ov_image); ?>" alt="Amy's Eden caregiver providing in-home care" loading="lazy">
                <img class="img-accent" src="<?php echo esc_url($ov_image_ac); ?>" alt="Personal care assistance at home" loading="lazy">
            </div>
            <div class="overview-content">
                <span class="section-label"><?php echo esc_html($ov_label); ?></span>
                <h2><?php echo esc_html($ov_heading); ?></h2>
                <p><?php echo wp_kses_post($ov_p1); ?></p>
                <p><?php echo wp_kses_post($ov_p2); ?></p>
                <a href="<?php echo esc_url($ov_cta_url); ?>" class="btn btn-primary"><?php echo esc_html($ov_cta_text); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- WHY US -->
<section class="section why-us">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-label"><?php echo esc_html($why_label); ?></span>
            <h2><?php echo esc_html($why_heading); ?></h2>
            <p><?php echo esc_html($why_subtitle); ?></p>
            <div class="accent-line"></div>
        </div>
        <div class="why-us-layout">
            <div class="why-us-photo reveal">
                <img src="<?php echo esc_url($why_photo); ?>" alt="Compassionate Amy's Eden caregiver with senior" loading="lazy">
            </div>
            <div class="usp-grid">
                <?php foreach ($usp_cards as $card) : ?>
                    <div class="usp-card reveal">
                        <div class="usp-icon"><?php echo amyseden_icon($card['icon']); ?></div>
                        <h3><?php echo esc_html($card['title']); ?></h3>
                        <p><?php echo esc_html($card['desc']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- PHOTO STRIP -->
<div class="photo-strip">
    <?php for ($i = 1; $i <= 3; $i++) :
        $img = get_theme_mod("amyseden_hc_strip{$i}", $photo_strip_defs[$i - 1]);
    ?>
        <img src="<?php echo esc_url($img); ?>" alt="Senior care moments at Amy's Eden" loading="lazy">
    <?php endfor; ?>
</div>

<!-- SERVICES -->
<section class="section services-section">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-label"><?php echo esc_html($sv_label); ?></span>
            <h2><?php echo esc_html($sv_heading); ?></h2>
            <p><?php echo esc_html($sv_subtitle); ?></p>
            <div class="accent-line"></div>
        </div>
        <div class="services-layout">
            <div class="services-top-row reveal">
                <div class="services-feature-photo">
                    <img src="<?php echo esc_url($sv_feature_image); ?>" alt="Professional in-home care services" loading="lazy">
                </div>
                <div class="services-feature-text">
                    <span class="section-label"><?php echo esc_html($sv_feature_label); ?></span>
                    <h3><?php echo esc_html($sv_feature_head); ?></h3>
                    <p><?php echo esc_html($sv_feature_text); ?></p>
                </div>
            </div>
            <div class="services-grid">
                <?php foreach ($sv_cards as $card) : ?>
                    <div class="service-card reveal">
                        <span class="service-icon"><?php echo amyseden_icon($card['icon']); ?></span>
                        <h3><?php echo esc_html($card['title']); ?></h3>
                        <p><?php echo esc_html($card['desc']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- GALLERY -->
<section class="section gallery-section">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-label"><?php echo esc_html($gal_label); ?></span>
            <h2><?php echo esc_html($gal_heading); ?></h2>
            <p><?php echo esc_html($gal_subtitle); ?></p>
            <div class="accent-line"></div>
        </div>
        <div class="gallery-track-wrapper">
            <div class="gallery-track" id="galleryTrack">
                <?php foreach ($gal_cards as $g) : ?>
                    <div class="gallery-card reveal">
                        <img src="<?php echo esc_url($g['img']); ?>" alt="<?php echo esc_attr($g['cap']); ?>" loading="lazy">
                        <div class="gallery-caption"><?php echo esc_html($g['cap']); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="gallery-nav">
            <button onclick="document.getElementById('galleryTrack').scrollBy({left:-340,behavior:'smooth'})" aria-label="Scroll gallery left"><?php echo amyseden_icon('chevron-right', 'flip-h'); ?></button>
            <button onclick="document.getElementById('galleryTrack').scrollBy({left:340,behavior:'smooth'})" aria-label="Scroll gallery right"><?php echo amyseden_icon('chevron-right'); ?></button>
        </div>
    </div>
</section>

<!-- CROSS-SELL -->
<section class="section cross-sell">
    <div class="container">
        <div class="cross-sell-wrapper">
            <div class="cross-sell-content reveal">
                <div class="badge-outline"><?php echo esc_html($cs_badge); ?></div>
                <h2><?php echo esc_html($cs_heading); ?></h2>
                <p><?php echo wp_kses_post($cs_p1); ?></p>
                <div class="cross-sell-stats">
                    <?php foreach ($cs_stats as $s) : ?>
                        <div class="cross-sell-stat">
                            <strong><?php echo esc_html($s['number']); ?></strong>
                            <span><?php echo esc_html($s['label']); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
                <p style="font-size: 0.95rem; color: var(--text-secondary); margin-bottom: 28px;"><?php echo wp_kses_post($cs_p2); ?></p>
                <a href="<?php echo esc_url($cs_cta_url); ?>" class="btn btn-primary"><?php echo esc_html($cs_cta_text); ?></a>
            </div>
            <div class="cross-sell-gallery reveal">
                <?php
                $cs_classes = array('cs-wide', '', '', '', '', '', '', '', '', '', 'cs-wide', '');
                foreach ($cs_gallery_defs as $i => $default) :
                    $img = get_theme_mod("amyseden_hc_cs_img_" . ($i + 1), $default);
                    $cls = isset($cs_classes[$i]) ? $cs_classes[$i] : '';
                ?>
                    <img <?php echo $cls ? 'class="' . esc_attr($cls) . '"' : ''; ?> src="<?php echo esc_url($img); ?>" alt="Amy's Eden Two-Resident Home" loading="lazy">
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="section testimonials">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-label"><?php echo esc_html($tm_label); ?></span>
            <h2><?php echo esc_html($tm_heading); ?></h2>
            <p><?php echo esc_html($tm_subtitle); ?></p>
            <div class="accent-line"></div>
        </div>
        <div class="testimonials-layout">
            <div class="testimonial-photo-col reveal">
                <img src="<?php echo esc_url($tm_photo); ?>" alt="Happy family with Amy's Eden care" loading="lazy">
            </div>
            <div class="testimonials-grid">
                <?php foreach ($tm_cards as $t) : ?>
                    <div class="testimonial-card reveal">
                        <div class="testimonial-stars">
                            <?php for ($s = 0; $s < 5; $s++) echo amyseden_icon('star'); ?>
                        </div>
                        <blockquote>&ldquo;<?php echo esc_html($t['quote']); ?>&rdquo;</blockquote>
                        <div class="testimonial-author"><?php echo esc_html($t['author']); ?></div>
                        <div class="testimonial-role"><?php echo esc_html($t['role']); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="section process-section">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-label"><?php echo esc_html($pr_label); ?></span>
            <h2><?php echo esc_html($pr_heading); ?></h2>
            <p><?php echo esc_html($pr_subtitle); ?></p>
            <div class="accent-line"></div>
        </div>
        <div class="process-grid">
            <div class="process-photos reveal">
                <?php for ($i = 1; $i <= 3; $i++) :
                    $img = get_theme_mod("amyseden_hc_pr_photo{$i}", $pr_photos_defs[$i - 1]);
                ?>
                    <img src="<?php echo esc_url($img); ?>" alt="Care process photo" loading="lazy">
                <?php endfor; ?>
            </div>
            <div class="process-steps">
                <?php foreach ($pr_steps as $i => $step) : ?>
                    <div class="process-step reveal">
                        <div class="step-number"><?php echo esc_html($i); ?></div>
                        <div>
                            <h3><?php echo esc_html($step['title']); ?></h3>
                            <p><?php echo esc_html($step['desc']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section class="section contact-section" id="contact">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-label"><?php echo esc_html($con_label); ?></span>
            <h2><?php echo esc_html($con_heading); ?></h2>
            <p><?php echo esc_html($con_subtitle); ?></p>
            <div class="accent-line"></div>
        </div>
        <div class="contact-grid">
            <div class="contact-info reveal">
                <h3><?php echo esc_html($con_info_heading); ?></h3>
                <p><?php echo esc_html($con_info_p); ?></p>
                <div class="contact-detail">
                    <div class="contact-detail-icon"><?php echo amyseden_icon('phone'); ?></div>
                    <div class="contact-detail-text">
                        <strong>Phone</strong>
                        <a href="tel:<?php echo esc_attr($phone_raw); ?>"><?php echo esc_html($phone); ?></a>
                    </div>
                </div>
                <div class="contact-detail">
                    <div class="contact-detail-icon"><?php echo amyseden_icon('location'); ?></div>
                    <div class="contact-detail-text">
                        <strong>Service Areas</strong>
                        Reno &amp; Carson City, Nevada
                    </div>
                </div>
                <div class="contact-detail">
                    <div class="contact-detail-icon"><?php echo amyseden_icon('clock'); ?></div>
                    <div class="contact-detail-text">
                        <strong>Availability</strong>
                        24 hours a day, 7 days a week
                    </div>
                </div>
                <div class="contact-detail">
                    <div class="contact-detail-icon"><?php echo amyseden_icon('home'); ?></div>
                    <div class="contact-detail-text">
                        <strong>Licensed Homes</strong>
                        12 homes across Reno &amp; Carson City
                    </div>
                </div>
                <div style="margin-top: 28px;">
                    <img src="<?php echo esc_url($con_image); ?>" alt="In-home care services by Amy's Eden" style="border-radius: 12px; width: 100%; max-width: 400px; display: block;" loading="lazy">
                </div>
            </div>
            <div class="contact-form-card reveal">
                <form class="amyseden-form" action="#" method="POST" novalidate>
                    <?php wp_nonce_field('amyseden_contact_nonce', 'amyseden_contact_nonce_field'); ?>
                    <input type="hidden" name="form_ts" value="<?php echo esc_attr(time()); ?>">
                    <input type="hidden" name="page_title" value="<?php echo esc_attr(get_the_title()); ?>">
                    <div class="amyseden-hp" aria-hidden="true" style="position:absolute;left:-9999px;top:-9999px;height:0;width:0;overflow:hidden;">
                        <label for="hc-website">Website</label>
                        <input type="text" id="hc-website" name="website" tabindex="-1" autocomplete="off">
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="hc-first-name">First Name *</label>
                            <input type="text" id="hc-first-name" name="first_name" placeholder="Your first name" required>
                        </div>
                        <div class="form-group">
                            <label for="hc-last-name">Last Name</label>
                            <input type="text" id="hc-last-name" name="last_name" placeholder="Last name">
                        </div>
                        <div class="form-group">
                            <label for="hc-phone-input">Phone Number *</label>
                            <input type="tel" id="hc-phone-input" name="phone" placeholder="(775) 000-0000" required>
                        </div>
                        <div class="form-group">
                            <label for="hc-email">Email Address *</label>
                            <input type="email" id="hc-email" name="email" placeholder="you@email.com" required>
                        </div>
                        <div class="form-group">
                            <label for="hc-location">Location</label>
                            <select id="hc-location" name="location">
                                <option value="">Select area</option>
                                <option value="reno">Reno, NV</option>
                                <option value="carson-city">Carson City, NV</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hc-interest">I'm Interested In</label>
                            <select id="hc-interest" name="interest">
                                <option value="">Select an option</option>
                                <option value="home-care">In-Home Care</option>
                                <option value="two-resident">Two-Resident Home™ Assisted Living</option>
                                <option value="respite">Respite Care</option>
                                <option value="not-sure">Not Sure Yet</option>
                            </select>
                        </div>
                        <div class="form-group full">
                            <label for="hc-message">Message</label>
                            <textarea id="hc-message" name="message" placeholder="Tell us about your loved one's needs..."></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary form-submit">Request a Free Consultation</button>
                    <div class="form-status" role="status" aria-live="polite"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section faq-section">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-label"><?php echo esc_html($faq_label); ?></span>
            <h2><?php echo esc_html($faq_heading); ?></h2>
            <p><?php echo esc_html($faq_subtitle); ?></p>
            <div class="accent-line"></div>
        </div>
        <div class="faq-layout">
            <div class="faq-photo reveal">
                <img src="<?php echo esc_url($faq_photo); ?>" alt="Caring moments at Amy's Eden" loading="lazy">
            </div>
            <div class="faq-grid">
                <?php foreach ($faqs as $faq) : ?>
                    <div class="faq-item reveal">
                        <button class="faq-question" onclick="this.parentElement.classList.toggle('active')" aria-expanded="false">
                            <h4><?php echo esc_html($faq['q']); ?></h4>
                            <span class="faq-icon"><?php echo amyseden_icon('chevron-down'); ?></span>
                        </button>
                        <div class="faq-answer">
                            <p><?php echo wp_kses_post($faq['a']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- FINAL CTA -->
<section class="final-cta">
    <div class="container">
        <div class="final-cta-inner reveal">
            <div class="final-cta-bg">
                <img src="<?php echo esc_url($fc_bg); ?>" alt="" loading="lazy" aria-hidden="true">
            </div>
            <span class="section-label"><?php echo esc_html($fc_label); ?></span>
            <h2><?php echo esc_html($fc_heading); ?></h2>
            <p><?php echo esc_html($fc_subtitle); ?></p>
            <div class="hero__ctas">
                <a href="#contact" class="btn btn-primary"><?php echo esc_html($fc_cta1); ?></a>
                <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn btn-outline--light">
                    <?php echo amyseden_icon('phone'); ?>
                    Call <?php echo esc_html($phone); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
