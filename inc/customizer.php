<?php
/**
 * Theme Customizer - Comprehensive Content Controls
 * Amy's Eden Senior Care Theme
 *
 * Provides full control over ALL text, images, and backgrounds
 * across every page template via the WordPress Customizer.
 */
function amyseden_customize_register($wp_customize) {

    // ============================================================
    // 1. DEPLOYMENT MODE
    // ============================================================
    $wp_customize->add_section('amyseden_deployment', array(
        'title' => __('Deployment Mode', 'amyseden'),
        'priority' => 1,
        'description' => __('Control how the theme works alongside Elementor.', 'amyseden'),
    ));

    $wp_customize->add_setting('amyseden_deploy_mode', array(
        'default' => 'hybrid',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_deploy_mode', array(
        'label' => __('Deployment Mode', 'amyseden'),
        'section' => 'amyseden_deployment',
        'type' => 'radio',
        'choices' => array(
            'elementor_only' => __('Elementor Only - Theme templates disabled. Elementor handles all pages.', 'amyseden'),
            'hybrid' => __('Hybrid - Landing pages use coded templates, other pages use Elementor.', 'amyseden'),
            'full_theme' => __('Full Theme - All pages use theme templates.', 'amyseden'),
        ),
    ));

    // Individual page toggles
    $landing_pages = array(
        'homepage' => 'Homepage (front-page.php)',
        'assisted_living' => 'Assisted Living',
        'home_care' => 'Home Care',
        'comparison' => 'In-Home Care vs In-Home-Like Care',
        'contact' => 'Contact Page',
        'about' => 'About Page',
    );

    foreach ($landing_pages as $key => $label) {
        $wp_customize->add_setting('amyseden_enable_' . $key, array(
            'default' => true,
            'sanitize_callback' => 'wp_validate_boolean',
        ));
        $wp_customize->add_control('amyseden_enable_' . $key, array(
            'label' => sprintf(__('Use coded template for: %s', 'amyseden'), $label),
            'section' => 'amyseden_deployment',
            'type' => 'checkbox',
        ));
    }

    // ============================================================
    // 2. CONTACT INFORMATION
    // ============================================================
    $wp_customize->add_section('amyseden_contact', array(
        'title' => __('Contact Information', 'amyseden'),
        'priority' => 10,
    ));

    $contact_fields = array(
        'amyseden_phone' => array('Phone Number', '(775) 884-3336', 'text'),
        'amyseden_phone_raw' => array('Phone Number (digits only, for tel: links)', '7758843336', 'text'),
        'amyseden_email' => array('Email Address', 'info@amyseden.com', 'email'),
    );

    foreach ($contact_fields as $id => $field) {
        $wp_customize->add_setting($id, array(
            'default' => $field[1],
            'sanitize_callback' => $id === 'amyseden_email' ? 'sanitize_email' : 'sanitize_text_field',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control($id, array(
            'label' => __($field[0], 'amyseden'),
            'section' => 'amyseden_contact',
            'type' => $field[2],
        ));
    }

    // ============================================================
    // 3. ANNOUNCEMENT BAR
    // ============================================================
    $wp_customize->add_section('amyseden_announcement', array(
        'title' => __('Announcement Bar', 'amyseden'),
        'priority' => 15,
    ));

    $wp_customize->add_setting('amyseden_announcement_text', array(
        'default' => 'Trusted Care for 13+ Years in Reno & Carson City',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_announcement_text', array(
        'label' => __('Announcement Bar Text', 'amyseden'),
        'section' => 'amyseden_announcement',
        'type' => 'text',
    ));

    $wp_customize->add_setting('amyseden_announcement_visible', array(
        'default' => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    $wp_customize->add_control('amyseden_announcement_visible', array(
        'label' => __('Show Announcement Bar', 'amyseden'),
        'section' => 'amyseden_announcement',
        'type' => 'checkbox',
    ));

    // ============================================================
    // 4. HOMEPAGE - HERO
    // ============================================================
    $wp_customize->add_panel('amyseden_homepage', array(
        'title' => __('Homepage Content', 'amyseden'),
        'priority' => 20,
    ));

    $wp_customize->add_section('amyseden_home_hero', array(
        'title' => __('Hero Section', 'amyseden'),
        'panel' => 'amyseden_homepage',
    ));

    $home_hero_fields = array(
        'amyseden_home_hero_bg' => array(
            'label' => 'Hero Background Image URL',
            'default' => 'https://amyseden.com/wp-content/uploads/2025/04/Hero.png',
            'type' => 'url',
        ),
        'amyseden_home_hero_badge' => array(
            'label' => 'Hero Badge Text',
            'default' => 'Reno & Carson City, Nevada',
            'type' => 'text',
        ),
        'amyseden_home_hero_heading' => array(
            'label' => 'Hero Heading',
            'default' => "Where Two Residents Receive One Caregiver's Undivided Attention",
            'type' => 'text',
        ),
        'amyseden_home_hero_subtext' => array(
            'label' => 'Hero Subtext',
            'default' => "Amy's Eden's Two-Resident Home™ redefines senior living with a 2:1 resident-to-caregiver ratio, 24/7 personalized care, and the warmth of a real home.",
            'type' => 'textarea',
        ),
        'amyseden_home_hero_cta1_text' => array(
            'label' => 'Primary CTA Button Text',
            'default' => 'Schedule a Private Tour',
            'type' => 'text',
        ),
        'amyseden_home_hero_cta1_url' => array(
            'label' => 'Primary CTA Button URL',
            'default' => '#contact',
            'type' => 'text',
        ),
    );

    // Hero Background Mobile Horizontal Position (special range control)
    $wp_customize->add_setting('amyseden_home_hero_bg_mobile_x', array(
        'default' => 'center',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_home_hero_bg_mobile_x', array(
        'label' => __('Hero BG Mobile Horizontal Position', 'amyseden'),
        'description' => __('Horizontal position of hero background on mobile. Use CSS values like "center", "left", "right", "30%", "70%", etc.', 'amyseden'),
        'section' => 'amyseden_home_hero',
        'type' => 'text',
    ));

    foreach ($home_hero_fields as $id => $field) {
        $wp_customize->add_setting($id, array(
            'default' => $field['default'],
            'sanitize_callback' => $field['type'] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field',
        ));
        $wp_customize->add_control($id, array(
            'label' => __($field['label'], 'amyseden'),
            'section' => 'amyseden_home_hero',
            'type' => $field['type'],
        ));
    }

    // ============================================================
    // 4b. HOMEPAGE - TRUST BAR
    // ============================================================
    $wp_customize->add_section('amyseden_home_trust', array(
        'title' => __('Trust Bar', 'amyseden'),
        'panel' => 'amyseden_homepage',
    ));

    for ($i = 1; $i <= 4; $i++) {
        $defaults = array(
            1 => array('13+', 'Years of Care'),
            2 => array('2:1', 'Resident-to-Caregiver Ratio'),
            3 => array('12', 'Licensed Homes'),
            4 => array('24/7', 'Personalized Care'),
        );
        $wp_customize->add_setting("amyseden_trust_{$i}_number", array(
            'default' => $defaults[$i][0],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("amyseden_trust_{$i}_number", array(
            'label' => sprintf(__('Stat %d - Number', 'amyseden'), $i),
            'section' => 'amyseden_home_trust',
            'type' => 'text',
        ));
        $wp_customize->add_setting("amyseden_trust_{$i}_label", array(
            'default' => $defaults[$i][1],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("amyseden_trust_{$i}_label", array(
            'label' => sprintf(__('Stat %d - Label', 'amyseden'), $i),
            'section' => 'amyseden_home_trust',
            'type' => 'text',
        ));
    }

    // ============================================================
    // 4c. HOMEPAGE - DIFFERENCE SECTION
    // ============================================================
    $wp_customize->add_section('amyseden_home_difference', array(
        'title' => __('What Makes Us Different', 'amyseden'),
        'panel' => 'amyseden_homepage',
    ));

    $diff_fields = array(
        'amyseden_diff_label' => array('Section Label', 'What Makes Us Different', 'text'),
        'amyseden_diff_heading' => array('Section Heading', 'The Two-Resident Home™ Difference', 'text'),
        'amyseden_diff_text' => array('Section Description', 'Unlike large facilities housing 50–100+ residents, each Amy\'s Eden home welcomes only two residents. One dedicated caregiver provides around-the-clock personalized attention in a real, licensed home — not an institution.', 'textarea'),
        'amyseden_diff_image' => array('Section Image URL', 'https://amyseden.com/wp-content/uploads/2025/05/2.webp', 'url'),
    );

    foreach ($diff_fields as $id => $field) {
        $wp_customize->add_setting($id, array(
            'default' => $field[1],
            'sanitize_callback' => $field[2] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field',
        ));
        $wp_customize->add_control($id, array(
            'label' => __($field[0], 'amyseden'),
            'section' => 'amyseden_home_difference',
            'type' => $field[2],
        ));
    }

    // Feature items (3 features)
    $features = array(
        1 => array('2:1 Resident-to-Caregiver Ratio', 'Not 10:1 or 20:1 like traditional facilities. Your loved one gets real, dedicated attention.'),
        2 => array('A Real Home, Not an Institution', 'Warm, comfortable, licensed residential homes where seniors truly feel at home.'),
        3 => array('Personalized Care, Not a Checklist', 'Care plans tailored to individual needs, preferences, and daily rhythms.'),
    );

    foreach ($features as $i => $feat) {
        $wp_customize->add_setting("amyseden_diff_feat_{$i}_title", array(
            'default' => $feat[0],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("amyseden_diff_feat_{$i}_title", array(
            'label' => sprintf(__('Feature %d Title', 'amyseden'), $i),
            'section' => 'amyseden_home_difference',
            'type' => 'text',
        ));
        $wp_customize->add_setting("amyseden_diff_feat_{$i}_desc", array(
            'default' => $feat[1],
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("amyseden_diff_feat_{$i}_desc", array(
            'label' => sprintf(__('Feature %d Description', 'amyseden'), $i),
            'section' => 'amyseden_home_difference',
            'type' => 'textarea',
        ));
    }

    // ============================================================
    // 4d. HOMEPAGE - GALLERY
    // ============================================================
    $wp_customize->add_section('amyseden_home_gallery', array(
        'title' => __('Photo Gallery', 'amyseden'),
        'panel' => 'amyseden_homepage',
    ));

    $wp_customize->add_setting('amyseden_gallery_label', array(
        'default' => 'Our Homes',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_gallery_label', array(
        'label' => __('Gallery Section Label', 'amyseden'),
        'section' => 'amyseden_home_gallery',
        'type' => 'text',
    ));

    $wp_customize->add_setting('amyseden_gallery_heading', array(
        'default' => "A Glimpse Inside Amy's Eden",
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_gallery_heading', array(
        'label' => __('Gallery Heading', 'amyseden'),
        'section' => 'amyseden_home_gallery',
        'type' => 'text',
    ));

    $wp_customize->add_setting('amyseden_gallery_subtext', array(
        'default' => 'Warm, welcoming, and beautifully maintained — every Amy\'s Eden home is a place your loved one can truly call their own.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('amyseden_gallery_subtext', array(
        'label' => __('Gallery Subtext', 'amyseden'),
        'section' => 'amyseden_home_gallery',
        'type' => 'textarea',
    ));

    // Gallery images (row 1: 8 images, row 2: 8 images)
    $gallery_defaults_row1 = array(
        'https://amyseden.com/wp-content/uploads/2025/05/1.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/2.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/3.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/4.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/5.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/6.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/7.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/8.webp',
    );

    for ($i = 1; $i <= 8; $i++) {
        $wp_customize->add_setting("amyseden_gallery_row1_{$i}", array(
            'default' => $gallery_defaults_row1[$i - 1],
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("amyseden_gallery_row1_{$i}", array(
            'label' => sprintf(__('Row 1 - Image %d URL', 'amyseden'), $i),
            'section' => 'amyseden_home_gallery',
            'type' => 'url',
        ));
    }

    $gallery_defaults_row2 = array(
        'https://amyseden.com/wp-content/uploads/2025/05/9.webp',
        'https://amyseden.com/wp-content/uploads/2025/09/10-1.webp',
        'https://amyseden.com/wp-content/uploads/2025/09/11.webp',
        'https://amyseden.com/wp-content/uploads/2025/09/12.webp',
        'https://amyseden.com/wp-content/uploads/2025/09/13.webp',
        'https://amyseden.com/wp-content/uploads/2025/09/14-1.webp',
        'https://amyseden.com/wp-content/uploads/2025/09/15.webp',
        'https://amyseden.com/wp-content/uploads/2024/03/word-image-47518-3.jpeg',
    );

    for ($i = 1; $i <= 8; $i++) {
        $wp_customize->add_setting("amyseden_gallery_row2_{$i}", array(
            'default' => $gallery_defaults_row2[$i - 1],
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("amyseden_gallery_row2_{$i}", array(
            'label' => sprintf(__('Row 2 - Image %d URL', 'amyseden'), $i),
            'section' => 'amyseden_home_gallery',
            'type' => 'url',
        ));
    }

    // ============================================================
    // 4e. HOMEPAGE - COMPARISON TABLE
    // ============================================================
    $wp_customize->add_section('amyseden_home_comparison', array(
        'title' => __('Comparison Table', 'amyseden'),
        'panel' => 'amyseden_homepage',
    ));

    $wp_customize->add_setting('amyseden_comp_label', array(
        'default' => 'The Clear Choice',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_comp_label', array(
        'label' => __('Section Label', 'amyseden'),
        'section' => 'amyseden_home_comparison',
        'type' => 'text',
    ));

    $wp_customize->add_setting('amyseden_comp_heading', array(
        'default' => 'Why Families Choose Us Over Large Facilities',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_comp_heading', array(
        'label' => __('Section Heading', 'amyseden'),
        'section' => 'amyseden_home_comparison',
        'type' => 'text',
    ));

    // ============================================================
    // 4f. HOMEPAGE - CARE OPTIONS
    // ============================================================
    $wp_customize->add_section('amyseden_home_care_options', array(
        'title' => __('Care Options Cards', 'amyseden'),
        'panel' => 'amyseden_homepage',
    ));

    $wp_customize->add_setting('amyseden_care_label', array(
        'default' => 'Our Services',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_care_label', array(
        'label' => __('Section Label', 'amyseden'),
        'section' => 'amyseden_home_care_options',
        'type' => 'text',
    ));

    $wp_customize->add_setting('amyseden_care_heading', array(
        'default' => 'Two Ways We Care for Your Family',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_care_heading', array(
        'label' => __('Section Heading', 'amyseden'),
        'section' => 'amyseden_home_care_options',
        'type' => 'text',
    ));

    // Card 1 - Assisted Living
    $care_card1 = array(
        'amyseden_care1_image' => array('Card 1 Image URL', 'https://amyseden.com/wp-content/uploads/2025/01/1.jpg', 'url'),
        'amyseden_care1_label' => array('Card 1 Label', 'Assisted Living', 'text'),
        'amyseden_care1_title' => array('Card 1 Title', 'Two-Resident Home™', 'text'),
        'amyseden_care1_desc' => array('Card 1 Description', '24/7 personalized care in a licensed residential home with only one other resident. Home-cooked meals, medication management, and a dedicated caregiver who knows your loved one by heart.', 'textarea'),
    );

    foreach ($care_card1 as $id => $field) {
        $wp_customize->add_setting($id, array(
            'default' => $field[1],
            'sanitize_callback' => $field[2] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field',
        ));
        $wp_customize->add_control($id, array(
            'label' => __($field[0], 'amyseden'),
            'section' => 'amyseden_home_care_options',
            'type' => $field[2],
        ));
    }

    // Card 2 - Home Care
    $care_card2 = array(
        'amyseden_care2_image' => array('Card 2 Image URL', 'https://amyseden.com/wp-content/uploads/2025/06/In-Home-Care-Amys-Eden.webp', 'url'),
        'amyseden_care2_label' => array('Card 2 Label', 'In-Home Care', 'text'),
        'amyseden_care2_title' => array('Card 2 Title', 'In-Home Care Services', 'text'),
        'amyseden_care2_desc' => array('Card 2 Description', 'Professional caregivers come to your loved one\'s home to provide companionship, personal care, meal preparation, and more — on the schedule that works best for your family.', 'textarea'),
    );

    foreach ($care_card2 as $id => $field) {
        $wp_customize->add_setting($id, array(
            'default' => $field[1],
            'sanitize_callback' => $field[2] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field',
        ));
        $wp_customize->add_control($id, array(
            'label' => __($field[0], 'amyseden'),
            'section' => 'amyseden_home_care_options',
            'type' => $field[2],
        ));
    }

    // ============================================================
    // 4g. HOMEPAGE - HOMES SHOWCASE
    // ============================================================
    $wp_customize->add_section('amyseden_home_showcase', array(
        'title' => __('Homes Showcase', 'amyseden'),
        'panel' => 'amyseden_homepage',
    ));

    $showcase_fields = array(
        'amyseden_showcase_label' => array('Section Label', '12 Licensed Homes', 'text'),
        'amyseden_showcase_heading' => array('Section Heading', 'Beautiful Homes Across Reno & Carson City', 'text'),
        'amyseden_showcase_text' => array('Description', 'Each Amy\'s Eden home is a carefully selected, fully licensed residential property in a quiet, established neighborhood. Our homes feature private bedrooms, beautifully appointed common areas, and welcoming outdoor spaces.', 'textarea'),
        'amyseden_showcase_img1' => array('Photo 1 URL', 'https://amyseden.com/wp-content/uploads/2025/01/Amys-Homes-1.png', 'url'),
        'amyseden_showcase_img2' => array('Photo 2 URL', 'https://amyseden.com/wp-content/uploads/2025/07/Frame-56.png', 'url'),
        'amyseden_showcase_img3' => array('Photo 3 URL', 'https://amyseden.com/wp-content/uploads/2025/07/Frame-57.png', 'url'),
    );

    foreach ($showcase_fields as $id => $field) {
        $wp_customize->add_setting($id, array(
            'default' => $field[1],
            'sanitize_callback' => $field[2] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field',
        ));
        $wp_customize->add_control($id, array(
            'label' => __($field[0], 'amyseden'),
            'section' => 'amyseden_home_showcase',
            'type' => $field[2],
        ));
    }

    // ============================================================
    // 4h. HOMEPAGE - TESTIMONIALS
    // ============================================================
    $wp_customize->add_section('amyseden_home_testimonials', array(
        'title' => __('Testimonials', 'amyseden'),
        'panel' => 'amyseden_homepage',
    ));

    $wp_customize->add_setting('amyseden_test_label', array(
        'default' => 'Testimonials',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_test_label', array(
        'label' => __('Section Label', 'amyseden'),
        'section' => 'amyseden_home_testimonials',
        'type' => 'text',
    ));

    $wp_customize->add_setting('amyseden_test_heading', array(
        'default' => 'Trusted by Families Across Nevada',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_test_heading', array(
        'label' => __('Section Heading', 'amyseden'),
        'section' => 'amyseden_home_testimonials',
        'type' => 'text',
    ));

    // 3 testimonials
    $testimonials = array(
        1 => array(
            'I am so happy to have found such a lovely home for my 98 year old mother. The caregivers are attentive, kind, and truly treat her like family. The 2:1 ratio means she always has someone there for her.',
            'Ingrid Paine',
            'Daughter',
        ),
        2 => array(
            'My Mother-in-law was in this home for several years and we could always tell she was so happy there. The care and attention she received was beyond anything we could have hoped for.',
            'Aloha Bennett',
            'Family Member',
        ),
        3 => array(
            'I called in a panic. The rehab center was discharging my daddy and I had no plan. Amy\'s Eden stepped in immediately with compassion and professionalism. He was settled into his new home that same week.',
            'Collett Rigdon',
            'Daughter',
        ),
    );

    foreach ($testimonials as $i => $test) {
        $wp_customize->add_setting("amyseden_test_{$i}_quote", array(
            'default' => $test[0],
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("amyseden_test_{$i}_quote", array(
            'label' => sprintf(__('Testimonial %d - Quote', 'amyseden'), $i),
            'section' => 'amyseden_home_testimonials',
            'type' => 'textarea',
        ));

        $wp_customize->add_setting("amyseden_test_{$i}_author", array(
            'default' => $test[1],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("amyseden_test_{$i}_author", array(
            'label' => sprintf(__('Testimonial %d - Author', 'amyseden'), $i),
            'section' => 'amyseden_home_testimonials',
            'type' => 'text',
        ));

        $wp_customize->add_setting("amyseden_test_{$i}_role", array(
            'default' => $test[2],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("amyseden_test_{$i}_role", array(
            'label' => sprintf(__('Testimonial %d - Role', 'amyseden'), $i),
            'section' => 'amyseden_home_testimonials',
            'type' => 'text',
        ));
    }

    // ============================================================
    // 4i. HOMEPAGE - PROCESS / HOW IT WORKS
    // ============================================================
    $wp_customize->add_section('amyseden_home_process', array(
        'title' => __('How It Works', 'amyseden'),
        'panel' => 'amyseden_homepage',
    ));

    $wp_customize->add_setting('amyseden_process_label', array(
        'default' => 'How It Works',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_process_label', array(
        'label' => __('Section Label', 'amyseden'),
        'section' => 'amyseden_home_process',
        'type' => 'text',
    ));

    $wp_customize->add_setting('amyseden_process_heading', array(
        'default' => 'Getting Started is Simple',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_process_heading', array(
        'label' => __('Section Heading', 'amyseden'),
        'section' => 'amyseden_home_process',
        'type' => 'text',
    ));

    $steps = array(
        1 => array('Call Us', 'Speak directly with our care team. We will listen to your situation, answer questions, and help you understand your options.'),
        2 => array('Visit a Home', 'Schedule a private, no-pressure tour of any of our 12 licensed homes in Reno or Carson City. See the difference for yourself.'),
        3 => array('Move In', 'We handle everything to make the transition seamless. Your loved one settles into their new home with a dedicated caregiver from day one.'),
    );

    foreach ($steps as $i => $step) {
        $wp_customize->add_setting("amyseden_step_{$i}_title", array(
            'default' => $step[0],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("amyseden_step_{$i}_title", array(
            'label' => sprintf(__('Step %d Title', 'amyseden'), $i),
            'section' => 'amyseden_home_process',
            'type' => 'text',
        ));
        $wp_customize->add_setting("amyseden_step_{$i}_desc", array(
            'default' => $step[1],
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("amyseden_step_{$i}_desc", array(
            'label' => sprintf(__('Step %d Description', 'amyseden'), $i),
            'section' => 'amyseden_home_process',
            'type' => 'textarea',
        ));
    }

    // ============================================================
    // 4j. HOMEPAGE - FINAL CTA
    // ============================================================
    $wp_customize->add_section('amyseden_home_cta', array(
        'title' => __('Final CTA Section', 'amyseden'),
        'panel' => 'amyseden_homepage',
    ));

    $cta_fields = array(
        'amyseden_cta_label' => array('Section Label', 'Take the First Step', 'text'),
        'amyseden_cta_heading' => array('CTA Heading', 'Your Loved One Deserves', 'text'),
        'amyseden_cta_heading_gradient' => array('CTA Heading (gradient text)', 'More Than a Facility', 'text'),
        'amyseden_cta_subtext' => array('CTA Subtext', 'Discover what truly personalized senior care looks like. Tour one of our homes and experience the Two-Resident Home™ difference.', 'textarea'),
        'amyseden_cta_tagline' => array('CTA Tagline', 'No pressure. No obligation. Just heart.', 'text'),
    );

    foreach ($cta_fields as $id => $field) {
        $wp_customize->add_setting($id, array(
            'default' => $field[1],
            'sanitize_callback' => $field[2] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field',
        ));
        $wp_customize->add_control($id, array(
            'label' => __($field[0], 'amyseden'),
            'section' => 'amyseden_home_cta',
            'type' => $field[2],
        ));
    }

    // ============================================================
    // 4k. HOMEPAGE - VIDEO SECTION
    // ============================================================
    $wp_customize->add_section('amyseden_home_video', array(
        'title' => __('Video / Home Tour', 'amyseden'),
        'panel' => 'amyseden_homepage',
    ));

    $wp_customize->add_setting('amyseden_video_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('amyseden_video_url', array(
        'label' => __('YouTube Video URL', 'amyseden'),
        'description' => __('Paste any YouTube URL (e.g. https://www.youtube.com/watch?v=XXXXX). Leave empty to show placeholder.', 'amyseden'),
        'section' => 'amyseden_home_video',
        'type' => 'url',
    ));

    $wp_customize->add_setting('amyseden_video_label', array(
        'default' => 'Virtual Tour',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_video_label', array(
        'label' => __('Section Label', 'amyseden'),
        'section' => 'amyseden_home_video',
        'type' => 'text',
    ));

    $wp_customize->add_setting('amyseden_video_heading', array(
        'default' => 'Experience Our Homes',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_video_heading', array(
        'label' => __('Section Heading', 'amyseden'),
        'section' => 'amyseden_home_video',
        'type' => 'text',
    ));

    $wp_customize->add_setting('amyseden_video_subtext', array(
        'default' => 'Tour any of our 12 homes in Reno & Carson City from the comfort of your own home.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('amyseden_video_subtext', array(
        'label' => __('Section Subtext', 'amyseden'),
        'section' => 'amyseden_home_video',
        'type' => 'textarea',
    ));

    // ============================================================
    // 5. ASSISTED LIVING PAGE
    // ============================================================
    $wp_customize->add_panel('amyseden_assisted_living', array(
        'title' => __('Assisted Living Page', 'amyseden'),
        'priority' => 25,
    ));

    $wp_customize->add_section('amyseden_al_hero', array(
        'title' => __('Hero Section', 'amyseden'),
        'panel' => 'amyseden_assisted_living',
    ));

    // Helper for the rest of this panel — adds a setting + control in one call
    $add_al = function ($wp_customize, $id, $label, $default, $type, $section, $description = '') {
        $sanitize = 'sanitize_text_field';
        if ($type === 'textarea') {
            $sanitize = 'wp_kses_post';
        } elseif ($type === 'url') {
            $sanitize = 'esc_url_raw';
        }
        $wp_customize->add_setting($id, array(
            'default' => $default,
            'sanitize_callback' => $sanitize,
        ));
        $control_args = array(
            'label' => __($label, 'amyseden'),
            'section' => $section,
            'type' => $type,
        );
        if ($description) $control_args['description'] = __($description, 'amyseden');
        $wp_customize->add_control($id, $control_args);
    };

    // ---- Hero fields (expanded) ----
    $al_hero_fields = array(
        array('amyseden_al_hero_bg',         'Hero Background — Desktop',  'https://amyseden.com/wp-content/uploads/2025/05/1.webp', 'url'),
        array('amyseden_al_hero_bg_mobile',  'Hero Background — Mobile',   'https://amyseden.com/wp-content/uploads/2025/05/1.webp', 'url'),
        array('amyseden_al_hero_badge',      'Hero Badge Text',            '13+ Years of Trusted Care', 'text'),
        array('amyseden_al_hero_heading',    'Hero Heading',               'The Two-Resident Home™', 'text'),
        array('amyseden_al_hero_subtitle',   'Hero Subtitle',              'Not a facility. A real home — where only two seniors share one dedicated caregiver, 24 hours a day.', 'textarea'),
        array('amyseden_al_hero_location',   'Location Text',              '12 Licensed Homes in Reno & Carson City, Nevada', 'text'),
        array('amyseden_al_hero_cta1_text',  'Primary Button Text',        'Schedule a Private Tour', 'text'),
        array('amyseden_al_hero_cta1_url',   'Primary Button URL',         '#contact', 'text'),
        array('amyseden_al_hero_cta2_text',  'Secondary Button Text',      'Call (775) 884-3336', 'text'),
    );
    foreach ($al_hero_fields as $f) $add_al($wp_customize, $f[0], $f[1], $f[2], $f[3], 'amyseden_al_hero');

    // Hero stats
    $stat_defs = array(
        1 => array('2:1',  'Resident-to-Caregiver Ratio'),
        2 => array('24/7', 'Dedicated Care'),
        3 => array('12',   'Licensed Homes'),
    );
    foreach ($stat_defs as $i => $d) {
        $add_al($wp_customize, "amyseden_al_stat{$i}_value", "Stat {$i} Value", $d[0], 'text', 'amyseden_al_hero');
        $add_al($wp_customize, "amyseden_al_stat{$i}_label", "Stat {$i} Label", $d[1], 'text', 'amyseden_al_hero');
    }

    // ---- Section: Why Two Residents ----
    $wp_customize->add_section('amyseden_al_why', array('title' => __('Why Two Residents Section', 'amyseden'), 'panel' => 'amyseden_assisted_living'));
    $why_fields = array(
        array('amyseden_al_why_label',   'Label',        'The Philosophy', 'text'),
        array('amyseden_al_why_heading', 'Heading',      "Because your loved one isn't a room number.", 'text'),
        array('amyseden_al_why_p1',      'Paragraph 1',  'In most large assisted living facilities, one caregiver is responsible for <strong>15 to 30 residents</strong>. That means rushed meals, impersonal care, and a loved one who feels like just another name on a clipboard.', 'textarea'),
        array('amyseden_al_why_p2',      'Paragraph 2',  'At Amy\'s Eden, every home has <strong>only two residents</strong> and <strong>one dedicated caregiver</strong>. That means real attention, genuine connection, and care that adapts to your loved one — not the other way around.', 'textarea'),
        array('amyseden_al_why_image',   'Section Image',  'https://amyseden.com/wp-content/uploads/2025/05/1.webp', 'url'),
        array('amyseden_al_cmp1_title',  'Card 1 — Title',   "Amy's Eden", 'text'),
        array('amyseden_al_cmp1_number', 'Card 1 — Number',  '2', 'text'),
        array('amyseden_al_cmp1_label',  'Card 1 — Label',   'Residents per Home', 'text'),
        array('amyseden_al_cmp2_title',  'Card 2 — Title',   'Typical Facility', 'text'),
        array('amyseden_al_cmp2_number', 'Card 2 — Number',  '50+', 'text'),
        array('amyseden_al_cmp2_label',  'Card 2 — Label',   'Residents per Facility', 'text'),
    );
    foreach ($why_fields as $f) $add_al($wp_customize, $f[0], $f[1], $f[2], $f[3], 'amyseden_al_why');

    // ---- Section: What's Included (7 cards) ----
    $wp_customize->add_section('amyseden_al_inc', array(
        'title' => __("What's Included Section", 'amyseden'),
        'panel' => 'amyseden_assisted_living',
        'description' => __('Icon field accepts slugs: user, users, meal, pill, hands, home, activity, heart, clock, shield, palette, music, smile, sparkles, clipboard, phone, location, mail, check.', 'amyseden'),
    ));
    $add_al($wp_customize, 'amyseden_al_inc_label',    'Label',    'All-Inclusive Care', 'text', 'amyseden_al_inc');
    $add_al($wp_customize, 'amyseden_al_inc_heading',  'Heading',  'Everything Your Loved One Needs', 'text', 'amyseden_al_inc');
    $add_al($wp_customize, 'amyseden_al_inc_subtitle', 'Subtitle', 'One simple monthly rate covers every aspect of daily living — no surprise fees, no hidden costs.', 'textarea', 'amyseden_al_inc');
    $inc_card_defs = array(
        1 => array('user',     '24/7 Dedicated Caregiver',     'A single caregiver who lives in the home and knows your loved one\'s needs, preferences, and routines intimately.'),
        2 => array('meal',     'Home-Cooked Meals',            'Three nutritious meals plus snacks daily, prepared fresh in the home kitchen and tailored to dietary needs and preferences.'),
        3 => array('pill',     'Medication Management',        'Careful medication administration and monitoring, coordinated with physicians and pharmacies for accuracy and safety.'),
        4 => array('hands',    'Personal Care Assistance',     'Dignified help with bathing, grooming, dressing, and mobility — always at your loved one\'s pace and comfort level.'),
        5 => array('home',     'Housekeeping & Laundry',       'A clean, comfortable living environment maintained daily — because home should always feel welcoming.'),
        6 => array('palette',  'Companionship & Activities',   'Engaging activities, conversation, outings, and genuine friendship — not just a scheduled activity calendar.'),
        7 => array('activity', 'Hospice & Health Coordination','Seamless coordination with hospice agencies, home health providers, physicians, and specialists as needed.'),
    );
    foreach ($inc_card_defs as $i => $d) {
        $add_al($wp_customize, "amyseden_al_inc{$i}_icon",  "Card {$i} — Icon Slug",  $d[0], 'text',     'amyseden_al_inc');
        $add_al($wp_customize, "amyseden_al_inc{$i}_title", "Card {$i} — Title",      $d[1], 'text',     'amyseden_al_inc');
        $add_al($wp_customize, "amyseden_al_inc{$i}_desc",  "Card {$i} — Description",$d[2], 'textarea', 'amyseden_al_inc');
    }

    // ---- Section: Gallery (12 images) ----
    $wp_customize->add_section('amyseden_al_gal', array('title' => __('Photo Gallery Section', 'amyseden'), 'panel' => 'amyseden_assisted_living'));
    $add_al($wp_customize, 'amyseden_al_gal_label',    'Label',    'Our Homes', 'text', 'amyseden_al_gal');
    $add_al($wp_customize, 'amyseden_al_gal_heading',  'Heading',  'Where Care Feels Like Home', 'text', 'amyseden_al_gal');
    $add_al($wp_customize, 'amyseden_al_gal_subtitle', 'Subtitle', 'Every Amy\'s Eden home is a real residence — warm, inviting, and designed for comfort and dignity.', 'textarea', 'amyseden_al_gal');
    $gal_url_defaults = array(
        'https://amyseden.com/wp-content/uploads/2025/05/2.webp',  'https://amyseden.com/wp-content/uploads/2025/05/3.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/4.webp',  'https://amyseden.com/wp-content/uploads/2025/05/5.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/6.webp',  'https://amyseden.com/wp-content/uploads/2025/05/7.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/8.webp',  'https://amyseden.com/wp-content/uploads/2025/05/9.webp',
        'https://amyseden.com/wp-content/uploads/2025/09/10-1.webp','https://amyseden.com/wp-content/uploads/2025/09/11.webp',
        'https://amyseden.com/wp-content/uploads/2025/09/12.webp', 'https://amyseden.com/wp-content/uploads/2025/09/13.webp',
    );
    foreach ($gal_url_defaults as $i => $url) {
        $n = $i + 1;
        $add_al($wp_customize, "amyseden_al_gal_{$n}", "Gallery Image {$n}", $url, 'url', 'amyseden_al_gal');
    }

    // ---- Section: Care Tabs (6) ----
    $wp_customize->add_section('amyseden_al_care', array('title' => __('Specialized Care Tabs', 'amyseden'), 'panel' => 'amyseden_assisted_living'));
    $add_al($wp_customize, 'amyseden_al_care_label',    'Label',    'Specialized Care', 'text', 'amyseden_al_care');
    $add_al($wp_customize, 'amyseden_al_care_heading',  'Heading',  'Expert Care for Every Need', 'text', 'amyseden_al_care');
    $add_al($wp_customize, 'amyseden_al_care_subtitle', 'Subtitle', 'Our Two-Resident Home model is uniquely suited for seniors with varying levels of care needs.', 'textarea', 'amyseden_al_care');
    $tab_slugs = array('alzheimers', 'memory', 'dementia', 'senior', 'independent', 'hospice');
    $tab_defaults_c = array(
        'alzheimers'  => array("Alzheimer's Care",   'https://amyseden.com/wp-content/uploads/2025/07/Frame-56.png'),
        'memory'      => array('Memory Care',         'https://amyseden.com/wp-content/uploads/2025/07/Frame-57.png'),
        'dementia'    => array('Dementia Care',       'https://amyseden.com/wp-content/uploads/2025/07/Frame-58.png'),
        'senior'      => array('Senior Living',       'https://amyseden.com/wp-content/uploads/2025/05/3.webp'),
        'independent' => array('Independent Living',  'https://amyseden.com/wp-content/uploads/2025/05/5.webp'),
        'hospice'     => array('Hospice Support',     'https://amyseden.com/wp-content/uploads/2025/06/in-home-care-2.webp'),
    );
    foreach ($tab_slugs as $slug) {
        $d = $tab_defaults_c[$slug];
        $add_al($wp_customize, "amyseden_al_tab_{$slug}_title",    ucfirst($slug) . ' — Title', $d[0], 'text', 'amyseden_al_care');
        $add_al($wp_customize, "amyseden_al_tab_{$slug}_image",    ucfirst($slug) . ' — Image URL', $d[1], 'url', 'amyseden_al_care');
        $add_al($wp_customize, "amyseden_al_tab_{$slug}_body",     ucfirst($slug) . ' — Body (blank line between paragraphs)', '', 'textarea', 'amyseden_al_care');
        $add_al($wp_customize, "amyseden_al_tab_{$slug}_features", ucfirst($slug) . ' — Feature bullets (one per line)', '', 'textarea', 'amyseden_al_care');
    }

    // ---- Section: Compare / Testimonials / Pricing / Tour / FAQ / Contact ----
    $wp_customize->add_section('amyseden_al_compare', array('title' => __('Comparison Table Section', 'amyseden'), 'panel' => 'amyseden_assisted_living'));
    $add_al($wp_customize, 'amyseden_al_compare_label',    'Label',    'The Difference', 'text', 'amyseden_al_compare');
    $add_al($wp_customize, 'amyseden_al_compare_heading',  'Heading',  'See How We Compare', 'text', 'amyseden_al_compare');
    $add_al($wp_customize, 'amyseden_al_compare_subtitle', 'Subtitle', 'A side-by-side look at why the Two-Resident Home model provides superior care.', 'textarea', 'amyseden_al_compare');

    $wp_customize->add_section('amyseden_al_test', array('title' => __('Testimonials Section', 'amyseden'), 'panel' => 'amyseden_assisted_living'));
    $add_al($wp_customize, 'amyseden_al_test_label',    'Label',    'Family Stories', 'text', 'amyseden_al_test');
    $add_al($wp_customize, 'amyseden_al_test_heading',  'Heading',  'What Families Are Saying', 'text', 'amyseden_al_test');
    $add_al($wp_customize, 'amyseden_al_test_subtitle', 'Subtitle', 'Real stories from families who chose the Two-Resident Home difference.', 'textarea', 'amyseden_al_test');
    for ($i = 1; $i <= 3; $i++) {
        $add_al($wp_customize, "amyseden_al_test{$i}_quote",  "Testimonial {$i} — Quote",  '', 'textarea', 'amyseden_al_test');
        $add_al($wp_customize, "amyseden_al_test{$i}_author", "Testimonial {$i} — Author", '', 'text',     'amyseden_al_test');
        $add_al($wp_customize, "amyseden_al_test{$i}_role",   "Testimonial {$i} — Role",   '', 'text',     'amyseden_al_test');
    }

    $wp_customize->add_section('amyseden_al_pr', array('title' => __('Pricing Section', 'amyseden'), 'panel' => 'amyseden_assisted_living'));
    $add_al($wp_customize, 'amyseden_al_pr_label',    'Label',    'Transparent Pricing', 'text', 'amyseden_al_pr');
    $add_al($wp_customize, 'amyseden_al_pr_heading',  'Heading',  'Simple, All-Inclusive Pricing', 'text', 'amyseden_al_pr');
    $add_al($wp_customize, 'amyseden_al_pr_image',    'Image URL','https://amyseden.com/wp-content/uploads/2025/06/In-Home-Care-Amys-Eden.webp', 'url', 'amyseden_al_pr');
    $add_al($wp_customize, 'amyseden_al_pr_p1',       'Paragraph 1','No hidden fees. No surprise charges. No confusing level-of-care add-ons. Just one straightforward monthly rate that covers everything your loved one needs.', 'textarea', 'amyseden_al_pr');
    $add_al($wp_customize, 'amyseden_al_pr_p2',       'Paragraph 2','Our all-inclusive rate is <strong>significantly more affordable than 24-hour in-home care</strong>, which typically costs $15,000–$20,000+ per month.', 'textarea', 'amyseden_al_pr');
    $add_al($wp_customize, 'amyseden_al_pr_features', 'Feature bullets (one per line)', "All-inclusive base rate — no hidden fees\nMore affordable than 24-hour in-home care\nNo level-of-care surcharges\nPersonalized quotes based on individual needs\nNo long-term contracts required", 'textarea', 'amyseden_al_pr');
    $add_al($wp_customize, 'amyseden_al_pr_cta',      'CTA Button Text', 'Get a Personalized Quote', 'text', 'amyseden_al_pr');

    $wp_customize->add_section('amyseden_al_tour', array('title' => __('Virtual Tour Section', 'amyseden'), 'panel' => 'amyseden_assisted_living'));
    $add_al($wp_customize, 'amyseden_al_tour_label',   'Label',     'Virtual Tour', 'text', 'amyseden_al_tour');
    $add_al($wp_customize, 'amyseden_al_tour_heading', 'Heading',   'See Our Homes for Yourself', 'text', 'amyseden_al_tour');
    $add_al($wp_customize, 'amyseden_al_tour_text',    'Body Text', 'We invite you to take a private tour of any of our 12 licensed homes in Reno and Carson City. Experience the warmth, comfort, and care firsthand.', 'textarea', 'amyseden_al_tour');
    $add_al($wp_customize, 'amyseden_al_tour_cta',     'CTA Text',  'Schedule a Private Tour', 'text', 'amyseden_al_tour');
    $add_al($wp_customize, 'amyseden_al_tour_bg',     'Background Image', 'https://amyseden.com/wp-content/uploads/2025/09/19.webp', 'url', 'amyseden_al_tour');
    for ($i = 1; $i <= 5; $i++) {
        $add_al($wp_customize, "amyseden_al_tour_photo{$i}", "Tour Thumb {$i}", '', 'url', 'amyseden_al_tour');
    }

    $wp_customize->add_section('amyseden_al_faq', array('title' => __('FAQ Section', 'amyseden'), 'panel' => 'amyseden_assisted_living'));
    $add_al($wp_customize, 'amyseden_al_faq_label',    'Label',    'Common Questions', 'text', 'amyseden_al_faq');
    $add_al($wp_customize, 'amyseden_al_faq_heading',  'Heading',  'Frequently Asked Questions', 'text', 'amyseden_al_faq');
    $add_al($wp_customize, 'amyseden_al_faq_subtitle', 'Subtitle', 'Get answers to the most common questions families ask about our Two-Resident Homes.', 'textarea', 'amyseden_al_faq');
    for ($i = 1; $i <= 12; $i++) {
        $add_al($wp_customize, "amyseden_al_faq{$i}_q", "FAQ {$i} — Question", '', 'text', 'amyseden_al_faq');
        $add_al($wp_customize, "amyseden_al_faq{$i}_a", "FAQ {$i} — Answer",   '', 'textarea', 'amyseden_al_faq');
    }

    $wp_customize->add_section('amyseden_al_con', array('title' => __('Contact Section', 'amyseden'), 'panel' => 'amyseden_assisted_living'));
    $add_al($wp_customize, 'amyseden_al_con_label',    'Label',    'Get Started', 'text', 'amyseden_al_con');
    $add_al($wp_customize, 'amyseden_al_con_heading',  'Heading',  'Schedule Your Private Tour', 'text', 'amyseden_al_con');
    $add_al($wp_customize, 'amyseden_al_con_subtitle', 'Subtitle', 'Tell us about your loved one and we\'ll help you find the perfect home. No pressure, no obligation — just answers.', 'textarea', 'amyseden_al_con');
    $add_al($wp_customize, 'amyseden_al_con_image',    'Side Image', 'https://amyseden.com/wp-content/uploads/2025/06/Untitled-design-23-1.webp', 'url', 'amyseden_al_con');

    // ============================================================
    // 6. HOME CARE PAGE
    // ============================================================
    $wp_customize->add_panel('amyseden_home_care', array(
        'title' => __('Home Care Page', 'amyseden'),
        'priority' => 30,
    ));

    $wp_customize->add_section('amyseden_hc_hero', array(
        'title' => __('Hero Section', 'amyseden'),
        'panel' => 'amyseden_home_care',
    ));

    $hc_hero_fields = array(
        'amyseden_hc_hero_bg' => array('Hero Background Image URL', 'https://amyseden.com/wp-content/uploads/2025/04/Hero.png', 'url'),
        'amyseden_hc_hero_badge' => array('Hero Badge Text', 'In-Home Care Services', 'text'),
        'amyseden_hc_hero_heading' => array('Hero Heading', 'Premium In-Home Care', 'text'),
        'amyseden_hc_hero_accent' => array('Hero Heading Accent Text', 'That Comes to You', 'text'),
        'amyseden_hc_hero_subtitle' => array('Hero Subtitle', 'Professional, compassionate caregivers providing personalized care in the comfort of your own home — serving Reno & Carson City.', 'textarea'),
    );

    foreach ($hc_hero_fields as $id => $field) {
        $wp_customize->add_setting($id, array(
            'default' => $field[1],
            'sanitize_callback' => $field[2] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field',
        ));
        $wp_customize->add_control($id, array(
            'label' => __($field[0], 'amyseden'),
            'section' => 'amyseden_hc_hero',
            'type' => $field[2],
        ));
    }

    // ============================================================
    // 7. ABOUT PAGE
    // ============================================================
    $wp_customize->add_panel('amyseden_about', array(
        'title' => __('About Page', 'amyseden'),
        'priority' => 35,
    ));

    $wp_customize->add_section('amyseden_about_hero', array(
        'title' => __('Hero Section', 'amyseden'),
        'panel' => 'amyseden_about',
    ));

    $about_hero_fields = array(
        'amyseden_about_hero_bg' => array('Hero Background Image URL', 'https://amyseden.com/wp-content/uploads/2025/04/Hero.png', 'url'),
        'amyseden_about_hero_heading' => array('Hero Heading', 'Our Story', 'text'),
        'amyseden_about_hero_subtitle' => array('Hero Subtitle', 'How a family\'s personal journey through senior care led to a revolutionary approach — the Two-Resident Home™.', 'textarea'),
    );

    foreach ($about_hero_fields as $id => $field) {
        $wp_customize->add_setting($id, array(
            'default' => $field[1],
            'sanitize_callback' => $field[2] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field',
        ));
        $wp_customize->add_control($id, array(
            'label' => __($field[0], 'amyseden'),
            'section' => 'amyseden_about_hero',
            'type' => $field[2],
        ));
    }

    $wp_customize->add_section('amyseden_about_mission', array(
        'title' => __('Mission Section', 'amyseden'),
        'panel' => 'amyseden_about',
    ));

    $about_mission_fields = array(
        'amyseden_about_mission_label' => array('Section Label', 'Our Mission', 'text'),
        'amyseden_about_mission_heading' => array('Heading', 'Redefining What Senior Care Can Be', 'text'),
        'amyseden_about_mission_text' => array('Description', 'At Amy\'s Eden, we believe every senior deserves more than just a bed in a crowded facility. They deserve a real home, a dedicated caregiver who knows them by name, and care that revolves around their life — not a schedule.', 'textarea'),
        'amyseden_about_mission_image' => array('Mission Image URL', 'https://amyseden.com/wp-content/uploads/2025/05/3.webp', 'url'),
    );

    foreach ($about_mission_fields as $id => $field) {
        $wp_customize->add_setting($id, array(
            'default' => $field[1],
            'sanitize_callback' => $field[2] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field',
        ));
        $wp_customize->add_control($id, array(
            'label' => __($field[0], 'amyseden'),
            'section' => 'amyseden_about_mission',
            'type' => $field[2],
        ));
    }

    // ============================================================
    // 8. CONTACT PAGE
    // ============================================================
    $wp_customize->add_section('amyseden_contact_page', array(
        'title' => __('Contact Page Content', 'amyseden'),
        'priority' => 40,
    ));

    $contact_page_fields = array(
        'amyseden_contact_heading' => array('Page Heading', "Let's Start a Conversation", 'text'),
        'amyseden_contact_subtitle' => array('Page Subtitle', 'Whether you have questions, want to schedule a tour, or are ready to get started — we are here for you.', 'textarea'),
        'amyseden_contact_address' => array('Office Address', 'Reno & Carson City, Nevada', 'text'),
        'amyseden_contact_hours' => array('Office Hours', 'Available 24/7 for inquiries', 'text'),
    );

    foreach ($contact_page_fields as $id => $field) {
        $wp_customize->add_setting($id, array(
            'default' => $field[1],
            'sanitize_callback' => $field[2] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field',
        ));
        $wp_customize->add_control($id, array(
            'label' => __($field[0], 'amyseden'),
            'section' => 'amyseden_contact_page',
            'type' => $field[2],
        ));
    }

    // ============================================================
    // 9. COMPARISON PAGE
    // ============================================================
    $wp_customize->add_section('amyseden_comparison_page', array(
        'title' => __('Comparison Page Content', 'amyseden'),
        'priority' => 45,
    ));

    $comparison_fields = array(
        'amyseden_comparison_hero_bg' => array('Hero Background Image URL', 'https://amyseden.com/wp-content/uploads/2025/05/5.webp', 'url'),
        'amyseden_comparison_heading' => array('Page Heading', 'In-Home Care vs. In-Home-Like Care', 'text'),
        'amyseden_comparison_subtitle' => array('Page Subtitle', 'Understanding the key differences to make the best decision for your loved one.', 'textarea'),
    );

    foreach ($comparison_fields as $id => $field) {
        $wp_customize->add_setting($id, array(
            'default' => $field[1],
            'sanitize_callback' => $field[2] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field',
        ));
        $wp_customize->add_control($id, array(
            'label' => __($field[0], 'amyseden'),
            'section' => 'amyseden_comparison_page',
            'type' => $field[2],
        ));
    }

    // ============================================================
    // 10. SOCIAL MEDIA LINKS
    // ============================================================
    $wp_customize->add_section('amyseden_social', array(
        'title' => __('Social Media Links', 'amyseden'),
        'priority' => 50,
        'description' => __('Set to "#" or leave empty to hide any social icon.', 'amyseden'),
    ));

    $social_links = array(
        'amyseden_facebook' => array('Facebook URL', 'https://www.facebook.com/AmysEden/'),
        'amyseden_instagram' => array('Instagram URL', '#'),
        'amyseden_youtube' => array('YouTube Channel URL', '#'),
        'amyseden_linkedin' => array('LinkedIn URL', '#'),
        'amyseden_twitter' => array('X (Twitter) URL', '#'),
    );

    foreach ($social_links as $id => $field) {
        $wp_customize->add_setting($id, array(
            'default' => $field[1],
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control($id, array(
            'label' => __($field[0], 'amyseden'),
            'section' => 'amyseden_social',
            'type' => 'url',
        ));
    }

    // ============================================================
    // 10b. FOOTER SETTINGS
    // ============================================================
    $wp_customize->add_section('amyseden_footer', array(
        'title' => __('Footer Settings', 'amyseden'),
        'priority' => 51,
        'description' => __('Customize the footer content. Assign menus in Appearance > Menus to "Footer Column 1" and "Footer Column 2" locations.', 'amyseden'),
    ));

    // Footer logo (light version)
    $wp_customize->add_setting('amyseden_footer_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('amyseden_footer_logo', array(
        'label' => __('Footer Logo URL (light/white version)', 'amyseden'),
        'description' => __('Upload a light-colored logo for the dark footer. Leave empty to auto-brighten the site logo.', 'amyseden'),
        'section' => 'amyseden_footer',
        'type' => 'url',
    ));

    // Footer tagline
    $wp_customize->add_setting('amyseden_footer_tagline', array(
        'default' => 'Redefining senior care with our Two-Resident Home&trade; model. Only 2 residents per home with 1 dedicated caregiver, 24/7.',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('amyseden_footer_tagline', array(
        'label' => __('Footer Tagline / Description', 'amyseden'),
        'section' => 'amyseden_footer',
        'type' => 'textarea',
    ));

    // Footer column headings
    $wp_customize->add_setting('amyseden_footer_col1_heading', array(
        'default' => 'Assisted Living',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_footer_col1_heading', array(
        'label' => __('Footer Column 1 Heading', 'amyseden'),
        'section' => 'amyseden_footer',
        'type' => 'text',
    ));

    $wp_customize->add_setting('amyseden_footer_col2_heading', array(
        'default' => 'Home Care',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_footer_col2_heading', array(
        'label' => __('Footer Column 2 Heading', 'amyseden'),
        'section' => 'amyseden_footer',
        'type' => 'text',
    ));

    // Copyright text
    $wp_customize->add_setting('amyseden_footer_copyright', array(
        'default' => "Amy's Eden Senior Care. All rights reserved.",
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_footer_copyright', array(
        'label' => __('Copyright Text', 'amyseden'),
        'description' => __('The year is added automatically before this text.', 'amyseden'),
        'section' => 'amyseden_footer',
        'type' => 'text',
    ));

    // Legal text
    $wp_customize->add_setting('amyseden_footer_legal', array(
        'default' => 'Licensed by the State of Nevada',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_footer_legal', array(
        'label' => __('Legal / License Text', 'amyseden'),
        'section' => 'amyseden_footer',
        'type' => 'text',
    ));

    // ============================================================
    // 11. BLOG SETTINGS
    // ============================================================
    $wp_customize->add_section('amyseden_blog', array(
        'title' => __('Blog Settings', 'amyseden'),
        'priority' => 55,
    ));

    $wp_customize->add_setting('amyseden_blog_cta_text', array(
        'default' => 'Need Help Finding the Right Care?',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_blog_cta_text', array(
        'label' => __('Blog CTA Heading', 'amyseden'),
        'section' => 'amyseden_blog',
        'type' => 'text',
    ));

    // ============================================================
    // 12. FORMS & NOTIFICATIONS (Slack webhook, spam settings)
    // ============================================================
    $wp_customize->add_section('amyseden_forms', array(
        'title' => __('Forms & Notifications', 'amyseden'),
        'priority' => 60,
        'description' => __('Deliver form submissions to Slack and configure anti-spam protection.', 'amyseden'),
    ));

    // Slack webhook URL
    $wp_customize->add_setting('amyseden_slack_webhook', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('amyseden_slack_webhook', array(
        'label' => __('Slack Incoming Webhook URL', 'amyseden'),
        'description' => __('Paste your Slack webhook URL (https://hooks.slack.com/services/...). Leave empty to disable Slack delivery and fall back to email.', 'amyseden'),
        'section' => 'amyseden_forms',
        'type' => 'url',
    ));

    // Slack channel override (optional)
    $wp_customize->add_setting('amyseden_slack_channel', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('amyseden_slack_channel', array(
        'label' => __('Slack Channel Override (optional)', 'amyseden'),
        'description' => __('e.g. "#leads". Leave empty to use the webhook\'s default channel.', 'amyseden'),
        'section' => 'amyseden_forms',
        'type' => 'text',
    ));

    // Also send to email?
    $wp_customize->add_setting('amyseden_form_email_copy', array(
        'default' => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    $wp_customize->add_control('amyseden_form_email_copy', array(
        'label' => __('Also send email copy to site email', 'amyseden'),
        'section' => 'amyseden_forms',
        'type' => 'checkbox',
    ));

    // Anti-spam: minimum time to fill form (seconds)
    $wp_customize->add_setting('amyseden_form_min_time', array(
        'default' => 3,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('amyseden_form_min_time', array(
        'label' => __('Min seconds to fill form (anti-bot)', 'amyseden'),
        'description' => __('Submissions faster than this are treated as bot spam. Default: 3 seconds.', 'amyseden'),
        'section' => 'amyseden_forms',
        'type' => 'number',
        'input_attrs' => array('min' => 0, 'max' => 60),
    ));
}
add_action('customize_register', 'amyseden_customize_register');
