<?php
/**
 * Template Name: Assisted Living
 * Template for the Assisted Living landing page
 *
 * All text and images below are controlled via WP Customizer →
 * Assisted Living Page panel.
 */
get_header();

$phone     = get_theme_mod('amyseden_phone', '(775) 884-3336');
$phone_raw = get_theme_mod('amyseden_phone_raw', '7758843336');

// ---- Hero ----
$al_hero_bg_desktop = get_theme_mod('amyseden_al_hero_bg', 'https://amyseden.com/wp-content/uploads/2025/05/1.webp');
$al_hero_bg_mobile  = get_theme_mod('amyseden_al_hero_bg_mobile', $al_hero_bg_desktop);
$al_hero_badge      = get_theme_mod('amyseden_al_hero_badge', '13+ Years of Trusted Care');
$al_hero_heading    = get_theme_mod('amyseden_al_hero_heading', 'The Two-Resident Home™');
$al_hero_subtitle   = get_theme_mod('amyseden_al_hero_subtitle', 'Not a facility. A real home — where only two seniors share one dedicated caregiver, 24 hours a day.');
$al_hero_location   = get_theme_mod('amyseden_al_hero_location', '12 Licensed Homes in Reno & Carson City, Nevada');
$al_hero_cta1_text  = get_theme_mod('amyseden_al_hero_cta1_text', 'Schedule a Private Tour');
$al_hero_cta1_url   = get_theme_mod('amyseden_al_hero_cta1_url', '#contact');
$al_hero_cta2_text  = get_theme_mod('amyseden_al_hero_cta2_text', 'Call ' . $phone);

// Hero stats (3)
$al_stats = array();
for ($i = 1; $i <= 3; $i++) {
    $def_val = array(1 => '2:1', 2 => '24/7', 3 => '12')[$i];
    $def_lbl = array(1 => 'Resident-to-Caregiver Ratio', 2 => 'Dedicated Care', 3 => 'Licensed Homes')[$i];
    $al_stats[$i] = array(
        'value' => get_theme_mod("amyseden_al_stat{$i}_value", $def_val),
        'label' => get_theme_mod("amyseden_al_stat{$i}_label", $def_lbl),
    );
}

// ---- Why Two Residents ----
$why_label   = get_theme_mod('amyseden_al_why_label', 'The Philosophy');
$why_heading = get_theme_mod('amyseden_al_why_heading', "Because your loved one isn't a room number.");
$why_p1      = get_theme_mod('amyseden_al_why_p1', 'In most large assisted living facilities, one caregiver is responsible for <strong>15 to 30 residents</strong>. That means rushed meals, impersonal care, and a loved one who feels like just another name on a clipboard.');
$why_p2      = get_theme_mod('amyseden_al_why_p2', 'At Amy\'s Eden, every home has <strong>only two residents</strong> and <strong>one dedicated caregiver</strong>. That means real attention, genuine connection, and care that adapts to your loved one — not the other way around.');
$why_image   = get_theme_mod('amyseden_al_why_image', 'https://amyseden.com/wp-content/uploads/2025/05/1.webp');
$cmp1_title  = get_theme_mod('amyseden_al_cmp1_title', "Amy's Eden");
$cmp1_number = get_theme_mod('amyseden_al_cmp1_number', '2');
$cmp1_label  = get_theme_mod('amyseden_al_cmp1_label', 'Residents per Home');
$cmp2_title  = get_theme_mod('amyseden_al_cmp2_title', 'Typical Facility');
$cmp2_number = get_theme_mod('amyseden_al_cmp2_number', '50+');
$cmp2_label  = get_theme_mod('amyseden_al_cmp2_label', 'Residents per Facility');

// ---- Included (7 cards) ----
$inc_label    = get_theme_mod('amyseden_al_inc_label', 'All-Inclusive Care');
$inc_heading  = get_theme_mod('amyseden_al_inc_heading', 'Everything Your Loved One Needs');
$inc_subtitle = get_theme_mod('amyseden_al_inc_subtitle', 'One simple monthly rate covers every aspect of daily living — no surprise fees, no hidden costs.');
$inc_defaults = array(
    1 => array('user',       '24/7 Dedicated Caregiver',     'A single caregiver who lives in the home and knows your loved one\'s needs, preferences, and routines intimately.'),
    2 => array('meal',       'Home-Cooked Meals',            'Three nutritious meals plus snacks daily, prepared fresh in the home kitchen and tailored to dietary needs and preferences.'),
    3 => array('pill',       'Medication Management',        'Careful medication administration and monitoring, coordinated with physicians and pharmacies for accuracy and safety.'),
    4 => array('hands',      'Personal Care Assistance',     'Dignified help with bathing, grooming, dressing, and mobility — always at your loved one\'s pace and comfort level.'),
    5 => array('home',       'Housekeeping & Laundry',       'A clean, comfortable living environment maintained daily — because home should always feel welcoming.'),
    6 => array('palette',    'Companionship & Activities',   'Engaging activities, conversation, outings, and genuine friendship — not just a scheduled activity calendar.'),
    7 => array('activity',   'Hospice & Health Coordination','Seamless coordination with hospice agencies, home health providers, physicians, and specialists as needed.'),
);
$inc_cards = array();
foreach ($inc_defaults as $i => $d) {
    $inc_cards[$i] = array(
        'icon'  => get_theme_mod("amyseden_al_inc{$i}_icon", $d[0]),
        'title' => get_theme_mod("amyseden_al_inc{$i}_title", $d[1]),
        'desc'  => get_theme_mod("amyseden_al_inc{$i}_desc", $d[2]),
    );
}

// ---- Gallery ----
$gal_label    = get_theme_mod('amyseden_al_gal_label', 'Our Homes');
$gal_heading  = get_theme_mod('amyseden_al_gal_heading', 'Where Care Feels Like Home');
$gal_subtitle = get_theme_mod('amyseden_al_gal_subtitle', 'Every Amy\'s Eden home is a real residence — warm, inviting, and designed for comfort and dignity.');
$gal_defaults = array(
    'https://amyseden.com/wp-content/uploads/2025/05/2.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/3.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/4.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/5.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/6.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/7.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/8.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/9.webp',
    'https://amyseden.com/wp-content/uploads/2025/09/10-1.webp',
    'https://amyseden.com/wp-content/uploads/2025/09/11.webp',
    'https://amyseden.com/wp-content/uploads/2025/09/12.webp',
    'https://amyseden.com/wp-content/uploads/2025/09/13.webp',
);

// ---- Care tabs (6) ----
$care_label    = get_theme_mod('amyseden_al_care_label', 'Specialized Care');
$care_heading  = get_theme_mod('amyseden_al_care_heading', 'Expert Care for Every Need');
$care_subtitle = get_theme_mod('amyseden_al_care_subtitle', 'Our Two-Resident Home model is uniquely suited for seniors with varying levels of care needs.');
$tab_defaults = array(
    'alzheimers'  => array("Alzheimer's Care",   'https://amyseden.com/wp-content/uploads/2025/07/Frame-56.png', "Alzheimer's care requires consistency, patience, and a deep understanding of each individual. In our Two-Resident Homes, one caregiver devotes their full attention to learning the unique nuances, triggers, and comforts of each resident.\n\nNo rotating staff. No unfamiliar faces. Just a trusted companion who knows your loved one's story.", "Consistent daily routines that reduce confusion\nSecure, home-like environment\nOne caregiver who learns every nuance\nMeaningful engagement activities\nFamily communication and updates"),
    'memory'      => array('Memory Care',         'https://amyseden.com/wp-content/uploads/2025/07/Frame-57.png', "Memory care at Amy's Eden goes beyond safety — it's about preserving dignity, encouraging cognitive engagement, and creating moments of joy every day.\n\nOur calm, home environment dramatically reduces agitation and confusion compared to large facilities with constant noise and commotion.", "Cognitive engagement and brain-stimulating activities\nCalm, quiet environment that reduces anxiety\nMusic therapy and sensory stimulation\nPersonalized memory-support routines\nCoordination with neurologists and specialists"),
    'dementia'    => array('Dementia Care',       'https://amyseden.com/wp-content/uploads/2025/07/Frame-58.png', 'Dementia presents unique behavioral challenges that require patience, expertise, and individualized approaches. Our one-on-one model allows caregivers to respond thoughtfully rather than reactively.', "Behavioral management with dignity-first approach\nSundowning awareness and responsive care\nConsistent caregiver reduces behavioral episodes\nSafe wandering environment\nFamily education and support"),
    'senior'      => array('Senior Living',       'https://amyseden.com/wp-content/uploads/2025/05/3.webp',     'For seniors who want to enjoy their golden years in comfort without the institutional feel of a large facility. Our homes offer an active, engaged lifestyle with the security of 24/7 support.', "Active lifestyle with outings and activities\nHome-cooked meals tailored to preferences\nComfortable, private living spaces\nTransportation to appointments and errands\nGenuine companionship and social connection"),
    'independent' => array('Independent Living',  'https://amyseden.com/wp-content/uploads/2025/05/5.webp',     'Maintain your independence and daily routines in a comfortable home setting. Our caregivers provide just the right amount of support while respecting your autonomy.', "Maintain personal routines and preferences\nPrivate living space within a real home\nCompanionship without being intrusive\nHelp is always nearby when needed\nFreedom to come and go with support"),
    'hospice'     => array('Hospice Support',     'https://amyseden.com/wp-content/uploads/2025/06/in-home-care-2.webp', 'When the time comes for end-of-life care, our homes provide a peaceful, dignified setting. We coordinate seamlessly with hospice agencies to ensure your loved one is comfortable and surrounded by compassion.', "Compassionate end-of-life environment\nCoordination with hospice agencies\nComfort-focused care and pain management support\nFamily visitation welcomed anytime\nEmotional support for families"),
);
$tabs = array();
foreach ($tab_defaults as $slug => $d) {
    $tabs[$slug] = array(
        'title'    => get_theme_mod("amyseden_al_tab_{$slug}_title", $d[0]),
        'image'    => get_theme_mod("amyseden_al_tab_{$slug}_image", $d[1]),
        'body'     => get_theme_mod("amyseden_al_tab_{$slug}_body",  $d[2]),
        'features' => get_theme_mod("amyseden_al_tab_{$slug}_features", $d[3]),
    );
}

// ---- Compare / Testimonials / Pricing / Tour / FAQ / Contact ----
$cmp_label = get_theme_mod('amyseden_al_compare_label', 'The Difference');
$cmp_head  = get_theme_mod('amyseden_al_compare_heading', 'See How We Compare');
$cmp_sub   = get_theme_mod('amyseden_al_compare_subtitle', 'A side-by-side look at why the Two-Resident Home model provides superior care.');

$test_label = get_theme_mod('amyseden_al_test_label', 'Family Stories');
$test_head  = get_theme_mod('amyseden_al_test_heading', 'What Families Are Saying');
$test_sub   = get_theme_mod('amyseden_al_test_subtitle', 'Real stories from families who chose the Two-Resident Home difference.');
$test_defaults = array(
    1 => array('"My 98-year-old mother has found a lovely home at Amy\'s Eden. The caregiver is attentive, kind, and genuinely cares about my mother\'s wellbeing. The home is clean, warm, and feels like a real family environment. We couldn\'t be happier with our decision."', 'Ingrid Paine', 'Daughter'),
    2 => array('"My mother-in-law has been happy at Amy\'s Eden for years. The personalized care she receives is something that no large facility could ever match. She\'s treated like family, not a patient. The consistency of having the same caregiver has made all the difference."', 'Aloha Bennett', 'Family Member'),
    3 => array('"We needed emergency placement for our loved one and Amy\'s Eden made it happen quickly and seamlessly. From the very first day, the level of care exceeded our expectations. The transition was smooth, and our family member adjusted beautifully to the home environment."', 'Collett Rigdon', 'Family Member'),
);
$testimonials = array();
for ($i = 1; $i <= 3; $i++) {
    $testimonials[$i] = array(
        'quote'  => get_theme_mod("amyseden_al_test{$i}_quote",  $test_defaults[$i][0]),
        'author' => get_theme_mod("amyseden_al_test{$i}_author", $test_defaults[$i][1]),
        'role'   => get_theme_mod("amyseden_al_test{$i}_role",   $test_defaults[$i][2]),
    );
}

$pr_label    = get_theme_mod('amyseden_al_pr_label', 'Transparent Pricing');
$pr_heading  = get_theme_mod('amyseden_al_pr_heading', 'Simple, All-Inclusive Pricing');
$pr_image    = get_theme_mod('amyseden_al_pr_image', 'https://amyseden.com/wp-content/uploads/2025/06/In-Home-Care-Amys-Eden.webp');
$pr_p1       = get_theme_mod('amyseden_al_pr_p1', 'No hidden fees. No surprise charges. No confusing level-of-care add-ons. Just one straightforward monthly rate that covers everything your loved one needs.');
$pr_p2       = get_theme_mod('amyseden_al_pr_p2', 'Our all-inclusive rate is <strong>significantly more affordable than 24-hour in-home care</strong>, which typically costs $15,000–$20,000+ per month. You get equivalent — or better — one-on-one attention at a fraction of the cost.');
$pr_features = get_theme_mod('amyseden_al_pr_features', "All-inclusive base rate — no hidden fees\nMore affordable than 24-hour in-home care\nNo level-of-care surcharges\nPersonalized quotes based on individual needs\nNo long-term contracts required");
$pr_cta      = get_theme_mod('amyseden_al_pr_cta', 'Get a Personalized Quote');

$tour_label   = get_theme_mod('amyseden_al_tour_label', 'Virtual Tour');
$tour_heading = get_theme_mod('amyseden_al_tour_heading', 'See Our Homes for Yourself');
$tour_text    = get_theme_mod('amyseden_al_tour_text', 'We invite you to take a private tour of any of our 12 licensed homes in Reno and Carson City. Experience the warmth, comfort, and care firsthand.');
$tour_cta     = get_theme_mod('amyseden_al_tour_cta', 'Schedule a Private Tour');
$tour_bg      = get_theme_mod('amyseden_al_tour_bg', 'https://amyseden.com/wp-content/uploads/2025/09/19.webp');
$tour_photos_default = array(
    'https://amyseden.com/wp-content/uploads/2025/09/19.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/4.webp',
    'https://amyseden.com/wp-content/uploads/2025/05/6.webp',
    'https://amyseden.com/wp-content/uploads/2025/09/15.webp',
    'https://amyseden.com/wp-content/uploads/2025/09/17-1.webp',
);

$faq_label   = get_theme_mod('amyseden_al_faq_label', 'Common Questions');
$faq_heading = get_theme_mod('amyseden_al_faq_heading', 'Frequently Asked Questions');
$faq_sub     = get_theme_mod('amyseden_al_faq_subtitle', 'Get answers to the most common questions families ask about our Two-Resident Homes.');
$faq_defaults = array(
    array('What type of clients are a good fit for Amy\'s Eden?', 'Amy\'s Eden is ideal for seniors who need personalized attention beyond what a large facility can provide. We serve those with Alzheimer\'s, dementia, Parkinson\'s, mobility challenges, and anyone who simply wants a higher quality of life with dedicated one-on-one care in a real home setting.'),
    array('Is Amy\'s Eden a good option when in-home care becomes too costly?', 'Absolutely. 24-hour in-home care typically costs $15,000–$20,000+ per month. Amy\'s Eden provides equivalent (or better) personalized attention with a dedicated caregiver at a significantly lower cost.'),
    array('Do you collaborate with home health and hospice agencies?', 'Yes, we actively coordinate with home health agencies, hospice providers, physicians, and specialists. Our caregivers work closely with these professionals to ensure seamless, comprehensive care for each resident.'),
    array('Are your homes licensed?', 'Yes, all 12 of our homes are fully licensed by the State of Nevada. We maintain rigorous standards and are regularly inspected to ensure compliance with all state regulations for residential care facilities.'),
    array('What areas do you serve?', 'We have 12 licensed homes located throughout Reno and Carson City, Nevada. Our homes are situated in quiet residential neighborhoods that provide a peaceful, comfortable living environment.'),
    array('What\'s included in the monthly base rate?', 'Our all-inclusive rate covers everything: a 24/7 dedicated caregiver, three home-cooked meals plus snacks daily, medication management, personal care assistance, housekeeping and laundry, companionship and activities, and coordination with health providers.'),
    array('How quickly can you admit a new resident?', 'We can often accommodate new residents within days, and we do handle emergency placements. Contact us anytime to discuss availability and your timeline.'),
    array('Do you accept residents on hospice?', 'Yes. Our homes provide a peaceful, dignified setting for end-of-life care. We coordinate closely with hospice agencies to ensure residents receive compassionate, comfort-focused care.'),
    array('Do you accept couples?', 'Yes! Our Two-Resident Home model is actually ideal for couples. Both partners can share a home together while receiving the individualized care each one needs.'),
    array('Are pets allowed?', 'We evaluate pet requests on a case-by-case basis. We understand the importance of the bond between seniors and their pets and work to accommodate them whenever possible.'),
    array('Do you support residents with dementia, Alzheimer\'s, or Parkinson\'s?', 'Yes, and our model is particularly ideal for these conditions. With only two residents per home and one dedicated caregiver, we provide the consistent, patient, individualized attention these conditions need.'),
    array('Can you care for insulin-dependent diabetics?', 'Yes. We work in coordination with physicians, home health agencies, and pharmacies to ensure proper insulin administration and blood sugar monitoring.'),
);
$faqs = array();
foreach ($faq_defaults as $i => $d) {
    $idx = $i + 1;
    $faqs[$idx] = array(
        'q' => get_theme_mod("amyseden_al_faq{$idx}_q", $d[0]),
        'a' => get_theme_mod("amyseden_al_faq{$idx}_a", $d[1]),
    );
}

$con_label    = get_theme_mod('amyseden_al_con_label', 'Get Started');
$con_heading  = get_theme_mod('amyseden_al_con_heading', 'Schedule Your Private Tour');
$con_subtitle = get_theme_mod('amyseden_al_con_subtitle', 'Tell us about your loved one and we\'ll help you find the perfect home. No pressure, no obligation — just answers.');
$con_image    = get_theme_mod('amyseden_al_con_image', 'https://amyseden.com/wp-content/uploads/2025/06/Untitled-design-23-1.webp');
?>

<!-- HERO -->
<section class="hero hero--al">
    <picture class="hero__bg-picture">
        <source media="(max-width: 768px)" srcset="<?php echo esc_url($al_hero_bg_mobile); ?>">
        <img src="<?php echo esc_url($al_hero_bg_desktop); ?>" alt="" class="hero__bg-image" aria-hidden="true">
    </picture>
    <div class="hero__overlay"></div>
    <div class="hero__content">
        <div class="hero__badge">
            <?php echo amyseden_icon('star'); ?>
            <?php echo esc_html($al_hero_badge); ?>
        </div>
        <h1 class="hero__heading"><?php echo wp_kses_post($al_hero_heading); ?></h1>
        <p class="hero__subtext"><?php echo esc_html($al_hero_subtitle); ?></p>
        <p class="hero__location">
            <?php echo amyseden_icon('location'); ?>
            <?php echo esc_html($al_hero_location); ?>
        </p>
        <div class="hero__ctas">
            <a href="<?php echo esc_url($al_hero_cta1_url); ?>" class="btn btn-primary"><?php echo esc_html($al_hero_cta1_text); ?></a>
            <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn btn-outline--light">
                <?php echo amyseden_icon('phone'); ?>
                <?php echo esc_html($al_hero_cta2_text); ?>
            </a>
        </div>
        <div class="hero__stats">
            <?php foreach ($al_stats as $s) : ?>
                <div class="hero__stat">
                    <div class="hero__stat-value"><?php echo esc_html($s['value']); ?></div>
                    <div class="hero__stat-label"><?php echo esc_html($s['label']); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php echo amyseden_trust_badges('hero'); ?>
    </div>
</section>

<!-- WHY TWO RESIDENTS -->
<section class="why-section" id="why">
    <div class="container">
        <div class="why-grid reveal">
            <div class="why-image">
                <img src="<?php echo esc_url($why_image); ?>" alt="Cozy interior of an Amy's Eden senior care home" loading="lazy" width="600" height="500">
            </div>
            <div class="why-text">
                <div class="section-label"><?php echo esc_html($why_label); ?></div>
                <h2><?php echo esc_html($why_heading); ?></h2>
                <p><?php echo wp_kses_post($why_p1); ?></p>
                <p><?php echo wp_kses_post($why_p2); ?></p>
                <div class="why-comparison">
                    <div class="comparison-card eden">
                        <h4><?php echo esc_html($cmp1_title); ?></h4>
                        <div class="number"><?php echo esc_html($cmp1_number); ?></div>
                        <div class="label"><?php echo esc_html($cmp1_label); ?></div>
                    </div>
                    <div class="comparison-card facility">
                        <h4><?php echo esc_html($cmp2_title); ?></h4>
                        <div class="number"><?php echo esc_html($cmp2_number); ?></div>
                        <div class="label"><?php echo esc_html($cmp2_label); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT'S INCLUDED -->
<section class="included-section" id="included">
    <div class="container">
        <div class="included-header reveal">
            <div class="section-label"><?php echo esc_html($inc_label); ?></div>
            <h2 class="section-title"><?php echo esc_html($inc_heading); ?></h2>
            <p class="section-subtitle"><?php echo esc_html($inc_subtitle); ?></p>
        </div>
        <div class="included-grid">
            <?php foreach ($inc_cards as $card) : ?>
                <div class="included-card reveal">
                    <div class="included-icon"><?php echo amyseden_icon($card['icon']); ?></div>
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <p><?php echo esc_html($card['desc']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- PHOTO GALLERY -->
<section class="gallery-section" id="gallery">
    <div class="container">
        <div class="gallery-header reveal">
            <div class="section-label"><?php echo esc_html($gal_label); ?></div>
            <h2 class="section-title"><?php echo esc_html($gal_heading); ?></h2>
            <p class="section-subtitle"><?php echo esc_html($gal_subtitle); ?></p>
        </div>
        <div class="gallery-grid reveal">
            <?php
            $shapes = array('tall', '', '', '', '', 'wide', '', '', 'tall', '', '', 'wide');
            foreach ($gal_defaults as $i => $default) :
                $img = get_theme_mod('amyseden_al_gal_' . ($i + 1), $default);
                $shape = isset($shapes[$i]) ? $shapes[$i] : '';
            ?>
                <div class="gallery-item<?php echo $shape ? ' ' . $shape : ''; ?>" onclick="openLightbox(this)">
                    <img src="<?php echo esc_url($img); ?>" alt="Amy's Eden home photo <?php echo $i + 1; ?>" loading="lazy">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<div class="lightbox" id="lightbox" onclick="closeLightbox()">
    <button class="lightbox-close" aria-label="Close">&times;</button>
    <img src="" alt="Gallery photo enlarged" id="lightboxImg">
</div>

<!-- SPECIALIZED CARE TABS -->
<section class="care-section" id="care">
    <div class="container">
        <div class="care-header reveal">
            <div class="section-label"><?php echo esc_html($care_label); ?></div>
            <h2 class="section-title"><?php echo esc_html($care_heading); ?></h2>
            <p class="section-subtitle"><?php echo esc_html($care_subtitle); ?></p>
        </div>
        <div class="tab-nav reveal">
            <?php $first = true; foreach ($tabs as $slug => $tab) : ?>
                <button class="tab-btn<?php echo $first ? ' active' : ''; ?>" data-tab="<?php echo esc_attr($slug); ?>"><?php echo esc_html($tab['title']); ?></button>
            <?php $first = false; endforeach; ?>
        </div>
        <?php $first = true; foreach ($tabs as $slug => $tab) : ?>
            <div class="tab-panel<?php echo $first ? ' active' : ''; ?>" id="tab-<?php echo esc_attr($slug); ?>">
                <div class="tab-content<?php echo $first ? ' reveal' : ''; ?>">
                    <div class="tab-image">
                        <img src="<?php echo esc_url($tab['image']); ?>" alt="<?php echo esc_attr($tab['title']); ?> at Amy's Eden" loading="lazy">
                    </div>
                    <div class="tab-info">
                        <h3><?php echo esc_html($tab['title']); ?></h3>
                        <?php foreach (explode("\n\n", $tab['body']) as $para) : if (trim($para) === '') continue; ?>
                            <p><?php echo esc_html($para); ?></p>
                        <?php endforeach; ?>
                        <ul class="tab-features">
                            <?php foreach (array_filter(array_map('trim', explode("\n", $tab['features']))) as $feat) : ?>
                                <li><?php echo amyseden_icon('check'); ?><?php echo esc_html($feat); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php $first = false; endforeach; ?>
    </div>
</section>

<!-- COMPARISON TABLE -->
<section class="compare-section" id="compare">
    <div class="container">
        <div class="compare-header reveal">
            <div class="section-label"><?php echo esc_html($cmp_label); ?></div>
            <h2 class="section-title"><?php echo esc_html($cmp_head); ?></h2>
            <p class="section-subtitle"><?php echo esc_html($cmp_sub); ?></p>
        </div>
        <div class="compare-table-wrap reveal">
            <table class="compare-table">
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Amy's Eden</th>
                        <th>Large Facility</th>
                        <th>24hr In-Home Care</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Resident-to-Caregiver Ratio</td><td><span class="check"><?php echo amyseden_icon('check-circle'); ?>2:1</span></td><td><span class="x"><?php echo amyseden_icon('x-circle'); ?>15-30:1</span></td><td><span class="check"><?php echo amyseden_icon('check-circle'); ?>1:1</span></td></tr>
                    <tr><td>Living Environment</td><td><span class="check"><?php echo amyseden_icon('check-circle'); ?>Real home setting</span></td><td><span class="x"><?php echo amyseden_icon('x-circle'); ?>Institutional facility</span></td><td>Client's own home</td></tr>
                    <tr><td>Meals</td><td><span class="check"><?php echo amyseden_icon('check-circle'); ?>Home-cooked, personalized</span></td><td><span class="x"><?php echo amyseden_icon('x-circle'); ?>Cafeteria-style, mass prepared</span></td><td>Caregiver-prepared</td></tr>
                    <tr><td>Personalized Attention</td><td><span class="check"><?php echo amyseden_icon('check-circle'); ?>Exceptional &mdash; 2 residents only</span></td><td><span class="x"><?php echo amyseden_icon('x-circle'); ?>Limited &mdash; shared among 50+</span></td><td><span class="check"><?php echo amyseden_icon('check-circle'); ?>High</span></td></tr>
                    <tr><td>Staff Consistency</td><td><span class="check"><?php echo amyseden_icon('check-circle'); ?>Same dedicated caregiver</span></td><td><span class="x"><?php echo amyseden_icon('x-circle'); ?>Rotating shifts, high turnover</span></td><td>Varies by agency</td></tr>
                    <tr><td>Medication Management</td><td><span class="check"><?php echo amyseden_icon('check-circle'); ?>Personalized, attentive</span></td><td><span class="x"><?php echo amyseden_icon('x-circle'); ?>Scheduled rounds</span></td><td><span class="check"><?php echo amyseden_icon('check-circle'); ?>Personalized</span></td></tr>
                    <tr><td>Cost Transparency</td><td><span class="check"><?php echo amyseden_icon('check-circle'); ?>All-inclusive, no hidden fees</span></td><td><span class="x"><?php echo amyseden_icon('x-circle'); ?>Base rate + level-of-care charges</span></td><td>Hourly rates, overtime charges</td></tr>
                    <tr><td>Flexibility</td><td><span class="check"><?php echo amyseden_icon('check-circle'); ?>Tailored to resident's schedule</span></td><td><span class="x"><?php echo amyseden_icon('x-circle'); ?>Fixed facility schedule</span></td><td><span class="check"><?php echo amyseden_icon('check-circle'); ?>Flexible</span></td></tr>
                    <tr><td>Monthly Cost</td><td><span class="check"><?php echo amyseden_icon('check-circle'); ?>Competitive all-inclusive rate</span></td><td>$4K-$8K + add-ons</td><td><span class="x"><?php echo amyseden_icon('x-circle'); ?>$15K-$20K+/month</span></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section" id="testimonials">
    <div class="container">
        <div class="testimonials-header reveal">
            <div class="section-label"><?php echo esc_html($test_label); ?></div>
            <h2 class="section-title"><?php echo esc_html($test_head); ?></h2>
            <p class="section-subtitle"><?php echo esc_html($test_sub); ?></p>
        </div>
        <div class="testimonials-grid reveal">
            <?php foreach ($testimonials as $t) : ?>
                <div class="testimonial-card">
                    <div class="testimonial-accent"></div>
                    <div class="testimonial-stars">
                        <?php for ($s = 0; $s < 5; $s++) echo amyseden_icon('star'); ?>
                    </div>
                    <p class="testimonial-quote"><?php echo esc_html($t['quote']); ?></p>
                    <div class="testimonial-author"><?php echo esc_html($t['author']); ?></div>
                    <div class="testimonial-role"><?php echo esc_html($t['role']); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- PRICING -->
<section class="pricing-section" id="pricing">
    <div class="container">
        <div class="pricing-grid reveal">
            <div class="pricing-image">
                <img src="<?php echo esc_url($pr_image); ?>" alt="Amy's Eden caregiver with senior resident" loading="lazy" width="600" height="420">
            </div>
            <div>
                <div class="section-label"><?php echo esc_html($pr_label); ?></div>
                <h2 class="section-title"><?php echo esc_html($pr_heading); ?></h2>
                <p><?php echo wp_kses_post($pr_p1); ?></p>
                <p style="margin-top:12px;"><?php echo wp_kses_post($pr_p2); ?></p>
                <ul class="pricing-features">
                    <?php foreach (array_filter(array_map('trim', explode("\n", $pr_features))) as $feat) : ?>
                        <li><?php echo amyseden_icon('check'); ?><?php echo esc_html($feat); ?></li>
                    <?php endforeach; ?>
                </ul>
                <div style="margin-top:32px; display:flex; gap:16px; flex-wrap:wrap;">
                    <a href="#contact" class="btn btn-primary"><?php echo esc_html($pr_cta); ?></a>
                    <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn btn-outline-dark">
                        <?php echo amyseden_icon('phone'); ?>
                        <?php echo esc_html($phone); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- VIRTUAL TOUR -->
<section class="tour-section">
    <div class="tour-bg" role="img" aria-label="Amy's Eden homes overview" style="background-image: url('<?php echo esc_url($tour_bg); ?>');"></div>
    <div class="container">
        <div class="tour-content reveal">
            <div class="section-label" style="color:rgba(255,255,255,0.7);"><?php echo esc_html($tour_label); ?></div>
            <h2><?php echo esc_html($tour_heading); ?></h2>
            <p><?php echo esc_html($tour_text); ?></p>
            <a href="#contact" class="btn btn-primary"><?php echo esc_html($tour_cta); ?></a>
            <div class="tour-photos">
                <?php for ($i = 1; $i <= 5; $i++) :
                    $photo = get_theme_mod("amyseden_al_tour_photo{$i}", $tour_photos_default[$i - 1]);
                ?>
                    <img src="<?php echo esc_url($photo); ?>" alt="Amy's Eden home <?php echo $i; ?>" loading="lazy">
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="faq-section" id="faq">
    <div class="container">
        <div class="faq-header reveal">
            <div class="section-label"><?php echo esc_html($faq_label); ?></div>
            <h2 class="section-title"><?php echo esc_html($faq_heading); ?></h2>
            <p class="section-subtitle"><?php echo esc_html($faq_sub); ?></p>
        </div>
        <div class="faq-grid reveal">
            <?php foreach ($faqs as $faq) : ?>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">
                        <h4><?php echo esc_html($faq['q']); ?></h4>
                        <div class="faq-toggle"><?php echo amyseden_icon('chevron-down'); ?></div>
                    </div>
                    <div class="faq-answer"><div class="faq-answer-inner"><?php echo esc_html($faq['a']); ?></div></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section class="contact-section" id="contact">
    <div class="container">
        <div class="contact-grid reveal">
            <div class="contact-image">
                <img src="<?php echo esc_url($con_image); ?>" alt="Amy's Eden senior care home with caregiver" loading="lazy" width="600" height="600">
            </div>
            <div class="contact-form-card">
                <div class="section-label"><?php echo esc_html($con_label); ?></div>
                <h2><?php echo esc_html($con_heading); ?></h2>
                <p><?php echo esc_html($con_subtitle); ?></p>
                <form id="contactForm" class="amyseden-form" action="#" method="POST" novalidate>
                    <?php wp_nonce_field('amyseden_contact_nonce', 'amyseden_contact_nonce_field'); ?>
                    <input type="hidden" name="form_ts" value="<?php echo esc_attr(time()); ?>">
                    <input type="hidden" name="page_title" value="<?php echo esc_attr(get_the_title()); ?>">
                    <div class="amyseden-hp" aria-hidden="true" style="position:absolute;left:-9999px;top:-9999px;height:0;width:0;overflow:hidden;">
                        <label for="al-website">Website</label>
                        <input type="text" id="al-website" name="website" tabindex="-1" autocomplete="off">
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name *</label>
                            <input type="text" id="firstName" name="firstName" required placeholder="First name">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name *</label>
                            <input type="text" id="lastName" name="lastName" required placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone *</label>
                            <input type="tel" id="phone" name="phone" required placeholder="(775) 000-0000">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="you@example.com">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="location">Preferred Location</label>
                            <select id="location" name="location">
                                <option value="">Select location...</option>
                                <option value="reno">Reno, NV</option>
                                <option value="carson-city">Carson City, NV</option>
                                <option value="either">Either Location</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="interest">I'm Interested In</label>
                            <select id="interest" name="interest">
                                <option value="">Select...</option>
                                <option value="assisted-living">Assisted Living</option>
                                <option value="memory-care">Memory Care</option>
                                <option value="alzheimers">Alzheimer's Care</option>
                                <option value="dementia">Dementia Care</option>
                                <option value="hospice">Hospice Support</option>
                                <option value="respite">Respite Care</option>
                                <option value="couples">Couples Care</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Tell Us About Your Loved One</label>
                        <textarea id="message" name="message" placeholder="Share any details about care needs, timeline, or questions you have..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary form-submit">Request a Private Tour</button>
                    <div class="form-status" role="status" aria-live="polite"></div>
                </form>
                <div class="contact-info">
                    <div class="contact-info-item">
                        <?php echo amyseden_icon('phone'); ?>
                        <?php echo esc_html($phone); ?>
                    </div>
                    <div class="contact-info-item">
                        <?php echo amyseden_icon('location'); ?>
                        Reno &amp; Carson City, NV
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
