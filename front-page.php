<?php
/**
 * Template Name: Homepage
 * The front page template
 */
get_header();

$phone = get_theme_mod('amyseden_phone', '(775) 884-3336');
$phone_raw = get_theme_mod('amyseden_phone_raw', '7758843336');

// Hero
$hero_bg = get_theme_mod('amyseden_home_hero_bg', 'https://amyseden.com/wp-content/uploads/2025/04/Hero.png');
$hero_badge = get_theme_mod('amyseden_home_hero_badge', 'Reno & Carson City, Nevada');
$hero_heading = get_theme_mod('amyseden_home_hero_heading', "Where Two Residents Receive One Caregiver's Undivided Attention");
$hero_subtext = get_theme_mod('amyseden_home_hero_subtext', "Amy's Eden's Two-Resident Home™ redefines senior living with a 2:1 resident-to-caregiver ratio, 24/7 personalized care, and the warmth of a real home.");
$hero_cta1_text = get_theme_mod('amyseden_home_hero_cta1_text', 'Schedule a Private Tour');
$hero_cta1_url = get_theme_mod('amyseden_home_hero_cta1_url', '#contact');
$hero_bg_mobile_x = get_theme_mod('amyseden_home_hero_bg_mobile_x', 'center');
?>

    <!-- ===================== HERO ===================== -->
    <section class="hero" id="hero">
        <div class="hero__bg" role="img" aria-label="Amy's Eden Senior Care home exterior" style="background-image: url('<?php echo esc_url($hero_bg); ?>'); --hero-bg-mobile-x: <?php echo esc_attr($hero_bg_mobile_x); ?>;"></div>
        <div class="hero__content">
            <div class="hero__badge">
                <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <?php echo esc_html($hero_badge); ?>
            </div>
            <h1 class="hero__heading"><?php echo wp_kses_post($hero_heading); ?></h1>
            <p class="hero__subtext"><?php echo esc_html($hero_subtext); ?></p>
            <div class="hero__ctas">
                <a href="<?php echo esc_url($hero_cta1_url); ?>" class="btn btn-primary"><?php echo esc_html($hero_cta1_text); ?></a>
                <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn btn-outline--light">Call <?php echo esc_html($phone); ?></a>
            </div>
            <?php echo amyseden_trust_badges('hero'); ?>
        </div>
        <div class="hero__scroll">
            <span>Scroll</span>
            <div class="hero__scroll-line"></div>
        </div>
    </section>

    <!-- ===================== TRUST BAR ===================== -->
    <section class="trust-bar">
        <div class="container">
            <?php for ($i = 1; $i <= 4; $i++) :
                $defaults_num = array(1 => '13+', 2 => '2:1', 3 => '12', 4 => '24/7');
                $defaults_lbl = array(1 => 'Years of Care', 2 => 'Resident-to-Caregiver Ratio', 3 => 'Licensed Homes', 4 => 'Personalized Care');
                $num = get_theme_mod("amyseden_trust_{$i}_number", $defaults_num[$i]);
                $lbl = get_theme_mod("amyseden_trust_{$i}_label", $defaults_lbl[$i]);
                $delay = $i > 1 ? ' reveal-delay-' . ($i - 1) : '';
            ?>
            <div class="trust-item reveal<?php echo $delay; ?>">
                <div class="trust-item__number"><?php echo esc_html($num); ?></div>
                <div class="trust-item__label"><?php echo esc_html($lbl); ?></div>
            </div>
            <?php endfor; ?>
        </div>
    </section>

    <!-- ===================== TWO-RESIDENT HOME DIFFERENCE ===================== -->
    <?php
    $diff_label = get_theme_mod('amyseden_diff_label', 'What Makes Us Different');
    $diff_heading = get_theme_mod('amyseden_diff_heading', 'The Two-Resident Home™ Difference');
    $diff_text = get_theme_mod('amyseden_diff_text', 'Unlike large facilities housing 50–100+ residents, each Amy\'s Eden home welcomes only two residents. One dedicated caregiver provides around-the-clock personalized attention in a real, licensed home — not an institution.');
    $diff_image = get_theme_mod('amyseden_diff_image', 'https://amyseden.com/wp-content/uploads/2025/05/2.webp');
    $feat_defaults = array(
        1 => array('2:1 Resident-to-Caregiver Ratio', 'Not 10:1 or 20:1 like traditional facilities. Your loved one gets real, dedicated attention.'),
        2 => array('A Real Home, Not an Institution', 'Warm, comfortable, licensed residential homes where seniors truly feel at home.'),
        3 => array('Personalized Care, Not a Checklist', 'Care plans tailored to individual needs, preferences, and daily rhythms.'),
    );
    $feat_icons = array(
        1 => '<svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        2 => '<svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
        3 => '<svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>',
    );
    ?>
    <section class="difference" id="difference">
        <div class="container">
            <div class="difference__grid">
                <div class="difference__text">
                    <span class="section-label reveal"><?php echo esc_html($diff_label); ?></span>
                    <h2 class="section-heading reveal reveal-delay-1"><?php echo esc_html($diff_heading); ?></h2>
                    <p class="reveal reveal-delay-2"><?php echo esc_html($diff_text); ?></p>
                    <div class="difference__features">
                        <?php for ($i = 1; $i <= 3; $i++) :
                            $ft = get_theme_mod("amyseden_diff_feat_{$i}_title", $feat_defaults[$i][0]);
                            $fd = get_theme_mod("amyseden_diff_feat_{$i}_desc", $feat_defaults[$i][1]);
                            $delay = $i + 1;
                        ?>
                        <div class="feature-item reveal reveal-delay-<?php echo $delay; ?>">
                            <div class="feature-item__icon"><?php echo $feat_icons[$i]; ?></div>
                            <div class="feature-item__content">
                                <h4><?php echo esc_html($ft); ?></h4>
                                <p><?php echo esc_html($fd); ?></p>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <a href="#care-options" class="btn btn-primary reveal reveal-delay-4">Discover Our Homes</a>
                </div>
                <div class="difference__image reveal">
                    <img src="<?php echo esc_url($diff_image); ?>" alt="Inside an Amy's Eden Two-Resident Home" loading="lazy">
                    <div class="difference__image-badge">
                        <span>2:1</span>
                        <span>Resident-to-Caregiver Ratio</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== PHOTO GALLERY ===================== -->
    <?php
    $gal_label = get_theme_mod('amyseden_gallery_label', 'Our Homes');
    $gal_heading = get_theme_mod('amyseden_gallery_heading', "A Glimpse Inside Amy's Eden");
    $gal_subtext = get_theme_mod('amyseden_gallery_subtext', "Warm, welcoming, and beautifully maintained — every Amy's Eden home is a place your loved one can truly call their own.");
    $gal_row1_defaults = array(
        'https://amyseden.com/wp-content/uploads/2025/05/1.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/2.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/3.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/4.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/5.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/6.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/7.webp',
        'https://amyseden.com/wp-content/uploads/2025/05/8.webp',
    );
    $gal_row2_defaults = array(
        'https://amyseden.com/wp-content/uploads/2025/05/9.webp',
        'https://amyseden.com/wp-content/uploads/2025/09/10-1.webp',
        'https://amyseden.com/wp-content/uploads/2025/09/11.webp',
        'https://amyseden.com/wp-content/uploads/2025/09/12.webp',
        'https://amyseden.com/wp-content/uploads/2025/09/13.webp',
        'https://amyseden.com/wp-content/uploads/2025/09/14-1.webp',
        'https://amyseden.com/wp-content/uploads/2025/09/15.webp',
        'https://amyseden.com/wp-content/uploads/2024/03/word-image-47518-3.jpeg',
    );
    ?>
    <section class="gallery" id="gallery">
        <div class="container">
            <div class="gallery__header">
                <span class="section-label reveal"><?php echo esc_html($gal_label); ?></span>
                <h2 class="section-heading reveal reveal-delay-1"><?php echo esc_html($gal_heading); ?></h2>
                <p class="section-subtext reveal reveal-delay-2" style="margin:0 auto"><?php echo esc_html($gal_subtext); ?></p>
            </div>
        </div>
        <!-- Row 1 -->
        <div class="gallery__track">
            <?php for ($i = 1; $i <= 8; $i++) :
                $img = get_theme_mod("amyseden_gallery_row1_{$i}", $gal_row1_defaults[$i - 1]);
            ?>
            <div class="gallery__item"><img src="<?php echo esc_url($img); ?>" alt="Amy's Eden home photo <?php echo $i; ?>" loading="lazy"></div>
            <?php endfor; ?>
            <!-- Duplicate for seamless loop -->
            <?php for ($i = 1; $i <= 8; $i++) :
                $img = get_theme_mod("amyseden_gallery_row1_{$i}", $gal_row1_defaults[$i - 1]);
            ?>
            <div class="gallery__item"><img src="<?php echo esc_url($img); ?>" alt="Amy's Eden home photo <?php echo $i; ?>" loading="lazy"></div>
            <?php endfor; ?>
        </div>
        <!-- Row 2 (reverse scroll) -->
        <div class="gallery__track gallery__track--reverse">
            <?php for ($i = 1; $i <= 8; $i++) :
                $img = get_theme_mod("amyseden_gallery_row2_{$i}", $gal_row2_defaults[$i - 1]);
            ?>
            <div class="gallery__item"><img src="<?php echo esc_url($img); ?>" alt="Amy's Eden home photo <?php echo $i + 8; ?>" loading="lazy"></div>
            <?php endfor; ?>
            <!-- Duplicate for seamless loop -->
            <?php for ($i = 1; $i <= 8; $i++) :
                $img = get_theme_mod("amyseden_gallery_row2_{$i}", $gal_row2_defaults[$i - 1]);
            ?>
            <div class="gallery__item"><img src="<?php echo esc_url($img); ?>" alt="Amy's Eden home photo <?php echo $i + 8; ?>" loading="lazy"></div>
            <?php endfor; ?>
        </div>
    </section>

    <!-- ===================== COMPARISON ===================== -->
    <section class="comparison" id="comparison">
        <div class="container">
            <div class="comparison__header">
                <span class="section-label reveal"><?php echo esc_html(get_theme_mod('amyseden_comp_label', 'The Clear Choice')); ?></span>
                <h2 class="section-heading reveal reveal-delay-1"><?php echo esc_html(get_theme_mod('amyseden_comp_heading', 'Why Families Choose Us Over Large Facilities')); ?></h2>
                <p class="section-subtext reveal reveal-delay-2">When you compare the details, the difference becomes undeniable.</p>
            </div>
            <div class="comparison__table reveal reveal-delay-2">
                <div class="comparison__row comparison__row--header">
                    <div class="comparison__cell comparison__cell--label">Category</div>
                    <div class="comparison__cell comparison__cell--eden">Amy's Eden</div>
                    <div class="comparison__cell">Traditional Facility</div>
                </div>
                <div class="comparison__row">
                    <div class="comparison__cell comparison__cell--label">Caregiver Ratio</div>
                    <div class="comparison__cell comparison__cell--eden">2 residents : 1 caregiver</div>
                    <div class="comparison__cell comparison__cell--facility">10&ndash;20+ residents : 1 caregiver</div>
                </div>
                <div class="comparison__row">
                    <div class="comparison__cell comparison__cell--label">Environment</div>
                    <div class="comparison__cell comparison__cell--eden">Real residential home</div>
                    <div class="comparison__cell comparison__cell--facility">Institutional building</div>
                </div>
                <div class="comparison__row">
                    <div class="comparison__cell comparison__cell--label">Meals</div>
                    <div class="comparison__cell comparison__cell--eden">Home-cooked, personalized</div>
                    <div class="comparison__cell comparison__cell--facility">Cafeteria-style, standardized</div>
                </div>
                <div class="comparison__row">
                    <div class="comparison__cell comparison__cell--label">Personal Attention</div>
                    <div class="comparison__cell comparison__cell--eden">Fully individualized care</div>
                    <div class="comparison__cell comparison__cell--facility">Shared attention, rigid schedules</div>
                </div>
                <div class="comparison__row">
                    <div class="comparison__cell comparison__cell--label">Pricing</div>
                    <div class="comparison__cell comparison__cell--eden">Transparent, all-inclusive</div>
                    <div class="comparison__cell comparison__cell--facility">Hidden fees, tiered add-ons</div>
                </div>
                <div class="comparison__row">
                    <div class="comparison__cell comparison__cell--label">Flexibility</div>
                    <div class="comparison__cell comparison__cell--eden">Adapts to each resident</div>
                    <div class="comparison__cell comparison__cell--facility">One-size-fits-all policies</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== CARE OPTIONS ===================== -->
    <?php
    $care_label = get_theme_mod('amyseden_care_label', 'Our Services');
    $care_heading = get_theme_mod('amyseden_care_heading', 'Two Ways We Care for Your Family');
    $c1_img = get_theme_mod('amyseden_care1_image', 'https://amyseden.com/wp-content/uploads/2025/01/1.jpg');
    $c1_label = get_theme_mod('amyseden_care1_label', 'Assisted Living');
    $c1_title = get_theme_mod('amyseden_care1_title', 'Two-Resident Home™');
    $c1_desc = get_theme_mod('amyseden_care1_desc', '24/7 personalized care in a licensed residential home with only one other resident. Home-cooked meals, medication management, and a dedicated caregiver who knows your loved one by heart.');
    $c2_img = get_theme_mod('amyseden_care2_image', 'https://amyseden.com/wp-content/uploads/2025/06/In-Home-Care-Amys-Eden.webp');
    $c2_label = get_theme_mod('amyseden_care2_label', 'In-Home Care');
    $c2_title = get_theme_mod('amyseden_care2_title', 'In-Home Care Services');
    $c2_desc = get_theme_mod('amyseden_care2_desc', 'Professional caregivers come to your loved one\'s home to provide companionship, personal care, meal preparation, and more — on the schedule that works best for your family.');
    ?>
    <section class="care-options" id="care-options">
        <div class="container">
            <div class="care-options__header">
                <span class="section-label reveal"><?php echo esc_html($care_label); ?></span>
                <h2 class="section-heading reveal reveal-delay-1"><?php echo esc_html($care_heading); ?></h2>
                <p class="section-subtext reveal reveal-delay-2">Whether your loved one needs full-time residential care or support in their own home, we deliver the same exceptional standard.</p>
            </div>
            <div class="care-options__grid">
                <div class="care-card reveal">
                    <div class="care-card__image">
                        <img src="<?php echo esc_url($c1_img); ?>" alt="<?php echo esc_attr($c1_title); ?>" loading="lazy">
                    </div>
                    <div class="care-card__body">
                        <div class="care-card__label"><?php echo esc_html($c1_label); ?></div>
                        <h3 class="care-card__title"><?php echo esc_html($c1_title); ?></h3>
                        <p class="care-card__desc"><?php echo esc_html($c1_desc); ?></p>
                        <a href="<?php echo esc_url(home_url('/assisted-living/')); ?>" class="care-card__link">
                            Explore <?php echo esc_html($c1_label); ?>
                            <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>
                <div class="care-card reveal reveal-delay-2">
                    <div class="care-card__image">
                        <img src="<?php echo esc_url($c2_img); ?>" alt="<?php echo esc_attr($c2_title); ?>" loading="lazy">
                    </div>
                    <div class="care-card__body">
                        <div class="care-card__label"><?php echo esc_html($c2_label); ?></div>
                        <h3 class="care-card__title"><?php echo esc_html($c2_title); ?></h3>
                        <p class="care-card__desc"><?php echo esc_html($c2_desc); ?></p>
                        <a href="<?php echo esc_url(home_url('/home-care/')); ?>" class="care-card__link">
                            Explore <?php echo esc_html($c2_label); ?>
                            <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== HOMES SHOWCASE ===================== -->
    <?php
    $sc_label = get_theme_mod('amyseden_showcase_label', '12 Licensed Homes');
    $sc_heading = get_theme_mod('amyseden_showcase_heading', 'Beautiful Homes Across Reno & Carson City');
    $sc_text = get_theme_mod('amyseden_showcase_text', "Each Amy's Eden home is a carefully selected, fully licensed residential property in a quiet, established neighborhood. Our homes feature private bedrooms, beautifully appointed common areas, and welcoming outdoor spaces.");
    $sc_img1 = get_theme_mod('amyseden_showcase_img1', 'https://amyseden.com/wp-content/uploads/2025/01/Amys-Homes-1.png');
    $sc_img2 = get_theme_mod('amyseden_showcase_img2', 'https://amyseden.com/wp-content/uploads/2025/07/Frame-56.png');
    $sc_img3 = get_theme_mod('amyseden_showcase_img3', 'https://amyseden.com/wp-content/uploads/2025/07/Frame-57.png');
    ?>
    <section class="homes-showcase">
        <div class="container">
            <div class="homes-showcase__grid">
                <div class="homes-showcase__photos reveal">
                    <div class="homes-showcase__photo">
                        <img src="<?php echo esc_url($sc_img1); ?>" alt="Amy's Eden Homes" loading="lazy">
                    </div>
                    <div class="homes-showcase__photo">
                        <img src="<?php echo esc_url($sc_img2); ?>" alt="Amy's Eden home in Reno" loading="lazy">
                    </div>
                    <div class="homes-showcase__photo">
                        <img src="<?php echo esc_url($sc_img3); ?>" alt="Amy's Eden home in Carson City" loading="lazy">
                    </div>
                </div>
                <div class="homes-showcase__content">
                    <span class="section-label reveal"><?php echo esc_html($sc_label); ?></span>
                    <h2 class="section-heading reveal reveal-delay-1"><?php echo wp_kses_post($sc_heading); ?></h2>
                    <p class="reveal reveal-delay-2"><?php echo esc_html($sc_text); ?></p>
                    <p class="reveal reveal-delay-2">From morning coffee on the patio to evening meals prepared just the way your loved one likes &mdash; every detail is designed around comfort and dignity.</p>
                    <div class="homes-showcase__stats reveal reveal-delay-3">
                        <div class="homes-showcase__stat">
                            <div class="homes-showcase__stat-number">2</div>
                            <div class="homes-showcase__stat-label">Residents Per Home</div>
                        </div>
                        <div class="homes-showcase__stat">
                            <div class="homes-showcase__stat-number">1</div>
                            <div class="homes-showcase__stat-label">Dedicated Caregiver</div>
                        </div>
                        <div class="homes-showcase__stat">
                            <div class="homes-showcase__stat-number">24/7</div>
                            <div class="homes-showcase__stat-label">Around-the-Clock Care</div>
                        </div>
                        <div class="homes-showcase__stat">
                            <div class="homes-showcase__stat-number">12</div>
                            <div class="homes-showcase__stat-label">Homes in Nevada</div>
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-primary reveal reveal-delay-4">Schedule a Home Tour</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== TESTIMONIALS ===================== -->
    <?php
    $test_label = get_theme_mod('amyseden_test_label', 'Testimonials');
    $test_heading = get_theme_mod('amyseden_test_heading', 'Trusted by Families Across Nevada');
    $test_defaults = array(
        1 => array(
            'I am so happy to have found such a lovely home for my 98 year old mother. The caregivers are attentive, kind, and truly treat her like family. The 2:1 ratio means she always has someone there for her.',
            'Ingrid Paine', 'Daughter',
        ),
        2 => array(
            'My Mother-in-law was in this home for several years and we could always tell she was so happy there. The care and attention she received was beyond anything we could have hoped for.',
            'Aloha Bennett', 'Family Member',
        ),
        3 => array(
            'I called in a panic. The rehab center was discharging my daddy and I had no plan. Amy\'s Eden stepped in immediately with compassion and professionalism. He was settled into his new home that same week.',
            'Collett Rigdon', 'Daughter',
        ),
    );
    $star_svg = '<svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
    ?>
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="testimonials__header">
                <span class="section-label reveal"><?php echo esc_html($test_label); ?></span>
                <h2 class="section-heading reveal reveal-delay-1"><?php echo esc_html($test_heading); ?></h2>
                <p class="section-subtext reveal reveal-delay-2">Hear from families who have experienced the Amy's Eden difference firsthand.</p>
            </div>
            <div class="testimonials__grid">
                <?php for ($i = 1; $i <= 3; $i++) :
                    $quote = get_theme_mod("amyseden_test_{$i}_quote", $test_defaults[$i][0]);
                    $author = get_theme_mod("amyseden_test_{$i}_author", $test_defaults[$i][1]);
                    $role = get_theme_mod("amyseden_test_{$i}_role", $test_defaults[$i][2]);
                    $delay = $i > 1 ? ' reveal-delay-' . ($i - 1) : '';
                ?>
                <div class="testimonial-card reveal<?php echo $delay; ?>">
                    <div class="testimonial-card__stars">
                        <?php echo str_repeat($star_svg, 5); ?>
                    </div>
                    <p class="testimonial-card__quote">&ldquo;<?php echo esc_html($quote); ?>&rdquo;</p>
                    <div class="testimonial-card__divider"></div>
                    <div class="testimonial-card__author"><?php echo esc_html($author); ?></div>
                    <div class="testimonial-card__role"><?php echo esc_html($role); ?></div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- ===================== VIDEO SECTION ===================== -->
    <?php
    $video_url = get_theme_mod('amyseden_video_url', '');
    $video_label = get_theme_mod('amyseden_video_label', 'Virtual Tour');
    $video_heading = get_theme_mod('amyseden_video_heading', 'Experience Our Homes');
    $video_subtext = get_theme_mod('amyseden_video_subtext', 'Tour any of our 12 homes in Reno & Carson City from the comfort of your own home.');

    // Extract YouTube video ID from URL
    $video_id = '';
    if ($video_url) {
        if (preg_match('/(?:youtube\.com\/(?:watch\?v=|embed\/|shorts\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $video_url, $matches)) {
            $video_id = $matches[1];
        }
    }
    ?>
    <section class="video-section" id="tour">
        <div class="container">
            <div class="video-section__header">
                <span class="section-label reveal"><?php echo esc_html($video_label); ?></span>
                <h2 class="section-heading reveal reveal-delay-1"><?php echo esc_html($video_heading); ?></h2>
                <p class="section-subtext reveal reveal-delay-2"><?php echo esc_html($video_subtext); ?></p>
            </div>
            <div class="video-section__embed reveal reveal-delay-3" <?php if ($video_id) : ?>data-video-id="<?php echo esc_attr($video_id); ?>"<?php endif; ?>>
                <?php if ($video_id) : ?>
                <div class="video-section__overlay" role="button" tabindex="0" aria-label="Play video: <?php echo esc_attr($video_heading); ?>">
                    <img src="https://img.youtube.com/vi/<?php echo esc_attr($video_id); ?>/maxresdefault.jpg" alt="<?php echo esc_attr($video_heading); ?>" loading="lazy">
                    <button class="video-play-btn" aria-label="Play video">
                        <svg viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                    </button>
                    <span class="video-play-label">Watch the Tour</span>
                </div>
                <?php else : ?>
                <div class="video-section__placeholder">
                    <button class="video-play-btn" aria-label="Play video tour">
                        <svg viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                    </button>
                    <span>Add a YouTube URL in Customizer to embed your home tour video</span>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- ===================== PROCESS ===================== -->
    <?php
    $proc_label = get_theme_mod('amyseden_process_label', 'How It Works');
    $proc_heading = get_theme_mod('amyseden_process_heading', 'Getting Started is Simple');
    $step_defaults = array(
        1 => array('Call Us', 'Speak directly with our care team. We will listen to your situation, answer questions, and help you understand your options.'),
        2 => array('Visit a Home', 'Schedule a private, no-pressure tour of any of our 12 licensed homes in Reno or Carson City. See the difference for yourself.'),
        3 => array('Move In', 'We handle everything to make the transition seamless. Your loved one settles into their new home with a dedicated caregiver from day one.'),
    );
    ?>
    <section class="process" id="process">
        <div class="container">
            <div class="process__header">
                <span class="section-label reveal"><?php echo esc_html($proc_label); ?></span>
                <h2 class="section-heading reveal reveal-delay-1"><?php echo esc_html($proc_heading); ?></h2>
                <p class="section-subtext reveal reveal-delay-2">We make the transition as smooth and stress-free as possible for your entire family.</p>
            </div>
            <div class="process__grid">
                <?php for ($i = 1; $i <= 3; $i++) :
                    $st = get_theme_mod("amyseden_step_{$i}_title", $step_defaults[$i][0]);
                    $sd = get_theme_mod("amyseden_step_{$i}_desc", $step_defaults[$i][1]);
                    $delay = $i > 1 ? ' reveal-delay-' . ($i - 1) : '';
                ?>
                <div class="process-step reveal<?php echo $delay; ?>">
                    <div class="process-step__number"><?php echo $i; ?></div>
                    <h3 class="process-step__title"><?php echo esc_html($st); ?></h3>
                    <p class="process-step__desc"><?php echo esc_html($sd); ?></p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- ===================== FINAL CTA ===================== -->
    <?php
    $cta_label = get_theme_mod('amyseden_cta_label', 'Take the First Step');
    $cta_heading = get_theme_mod('amyseden_cta_heading', 'Your Loved One Deserves');
    $cta_gradient = get_theme_mod('amyseden_cta_heading_gradient', 'More Than a Facility');
    $cta_subtext = get_theme_mod('amyseden_cta_subtext', 'Discover what truly personalized senior care looks like. Tour one of our homes and experience the Two-Resident Home™ difference.');
    $cta_tagline = get_theme_mod('amyseden_cta_tagline', 'No pressure. No obligation. Just heart.');
    ?>
    <section class="final-cta" id="contact">
        <div class="container">
            <span class="section-label reveal"><?php echo esc_html($cta_label); ?></span>
            <h2 class="final-cta__heading reveal reveal-delay-1">
                <?php echo esc_html($cta_heading); ?><br>
                <span class="gradient-text"><?php echo esc_html($cta_gradient); ?></span>
            </h2>
            <p class="final-cta__subtext reveal reveal-delay-2"><?php echo esc_html($cta_subtext); ?></p>
            <p class="final-cta__tagline reveal reveal-delay-2"><?php echo esc_html($cta_tagline); ?></p>
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="final-cta__phone reveal reveal-delay-3"><?php echo esc_html($phone); ?></a>
            <div class="final-cta__buttons reveal reveal-delay-3">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary"><?php echo esc_html($hero_cta1_text); ?></a>
                <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn btn-outline">Call Us Today</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
