<?php
/**
 * Amy's Eden Senior Care Theme Functions
 */

// Theme Setup
function amyseden_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 80,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');

    // Register nav menus
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'amyseden'),
        'footer-1' => __('Footer Column 1', 'amyseden'),
        'footer-2' => __('Footer Column 2', 'amyseden'),
    ));
}
add_action('after_setup_theme', 'amyseden_setup');

// Enqueue Scripts & Styles
function amyseden_scripts() {
    // Google Fonts
    wp_enqueue_style('amyseden-google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap', array(), null);

    // Main theme CSS
    wp_enqueue_style('amyseden-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.6.2');

    // Main theme JS (deferred)
    wp_enqueue_script('amyseden-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.6.2', true);

    // Pass data to JS (includes AJAX nonce for contact form)
    wp_localize_script('amyseden-main', 'amyseden', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'phone' => get_theme_mod('amyseden_phone', '(775) 884-3336'),
        'nonce' => wp_create_nonce('amyseden_contact_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'amyseden_scripts');

// Elementor Compatibility
function amyseden_elementor_support() {
    // Register Elementor locations for theme builder
    if (did_action('elementor/loaded')) {
        add_action('elementor/theme/register_locations', function($elementor_theme_manager) {
            $elementor_theme_manager->register_all_core_location();
        });
    }
}
add_action('after_setup_theme', 'amyseden_elementor_support');

// Allow Elementor on regular pages (page.php uses Elementor canvas if active)
function amyseden_elementor_page_templates($templates) {
    return $templates;
}

/**
 * DEPLOYMENT-AWARE Page Template Detection
 *
 * Respects the deployment mode set in Customizer > Deployment Mode:
 * - "elementor_only"  → Never uses coded templates. Elementor handles everything.
 * - "hybrid"          → Uses coded templates for landing pages, Elementor for rest.
 * - "full_theme"      → Uses coded templates everywhere possible.
 *
 * Individual page toggles let you enable/disable each landing page independently.
 */
function amyseden_template_include($template) {
    $deploy_mode = get_theme_mod('amyseden_deploy_mode', 'hybrid');

    // In "elementor_only" mode, never override — let Elementor handle everything
    if ($deploy_mode === 'elementor_only') {
        return $template;
    }

    if (is_page()) {
        $slug = get_post_field('post_name', get_the_ID());

        // Map slugs to template files AND their customizer toggle keys
        $custom_templates = array(
            'assisted-living' => array(
                'file' => 'page-assisted-living.php',
                'toggle' => 'amyseden_enable_assisted_living',
            ),
            'home-care' => array(
                'file' => 'page-home-care.php',
                'toggle' => 'amyseden_enable_home_care',
            ),
            'in-home-care-and-in-home-like-care' => array(
                'file' => 'page-in-home-care-and-in-home-like-care.php',
                'toggle' => 'amyseden_enable_comparison',
            ),
            'contact' => array(
                'file' => 'page-contact.php',
                'toggle' => 'amyseden_enable_contact',
            ),
            'about' => array(
                'file' => 'page-about.php',
                'toggle' => 'amyseden_enable_about',
            ),
            'about-amys-eden' => array(
                'file' => 'page-about.php',
                'toggle' => 'amyseden_enable_about',
            ),
        );

        if (isset($custom_templates[$slug])) {
            // Check if this specific page's coded template is enabled
            $enabled = get_theme_mod($custom_templates[$slug]['toggle'], true);
            if ($enabled) {
                $custom = locate_template($custom_templates[$slug]['file']);
                if ($custom) return $custom;
            }
        }
    }

    return $template;
}
add_filter('template_include', 'amyseden_template_include');

/**
 * Homepage template detection (front-page.php)
 * Respects deployment mode and homepage toggle
 */
function amyseden_frontpage_template($template) {
    if (is_front_page()) {
        $deploy_mode = get_theme_mod('amyseden_deploy_mode', 'hybrid');
        $homepage_enabled = get_theme_mod('amyseden_enable_homepage', true);

        if ($deploy_mode === 'elementor_only' || !$homepage_enabled) {
            // Don't use our front-page.php — let Elementor handle it
            return get_page_template();
        }
    }
    return $template;
}
add_filter('frontpage_template', 'amyseden_frontpage_template');

// Theme Customizer
require_once get_template_directory() . '/inc/customizer.php';

// Schema.org JSON-LD output
function amyseden_schema_markup() {
    if (is_front_page() || is_page(array('assisted-living', 'home-care', 'in-home-care-and-in-home-like-care', 'about', 'about-amys-eden'))) {
        $phone = get_theme_mod('amyseden_phone', '(775) 884-3336');
        $phone_clean = preg_replace('/[^0-9]/', '', $phone);
        ?>
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "AssistedLivingFacility",
            "name": "Amy's Eden Senior Care",
            "description": "Two-Resident Home™ assisted living with a 2:1 resident-to-caregiver ratio in Reno and Carson City, Nevada.",
            "url": "<?php echo esc_url(home_url()); ?>",
            "telephone": "+1<?php echo esc_attr($phone_clean); ?>",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Reno",
                "addressRegion": "NV",
                "addressCountry": "US"
            },
            "areaServed": ["Reno, NV", "Carson City, NV"],
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "5",
                "reviewCount": "120"
            }
        }
        </script>
        <?php
    }
}
add_action('wp_head', 'amyseden_schema_markup');

// Disable unnecessary WordPress features for performance
function amyseden_performance() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    // Disable block editor CSS on front-end if not using blocks
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'amyseden_performance', 100);

/**
 * SVG Icon Library
 * Usage: echo amyseden_icon('user') or amyseden_icon('user', 'my-extra-class');
 * Customizer text fields accept these slugs so editors can swap icons easily.
 */
function amyseden_icon($slug, $class = '') {
    $class = trim('amyseden-icon amyseden-icon--' . $slug . ' ' . $class);
    $svg_attrs = 'class="' . esc_attr($class) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"';

    $paths = array(
        // People / caregivers
        'user'        => '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>',
        'users'       => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
        'caregiver'   => '<path d="M12 2l3 5.5 6 .9-4.5 4.2 1 6.1L12 16l-5.5 2.7 1-6.1L3 8.4l6-.9L12 2z"/>',
        // Home / dwelling
        'home'        => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>',
        'building'    => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 22V12h6v10"/><line x1="3" y1="9" x2="21" y2="9"/>',
        // Meals & medical
        'meal'        => '<path d="M6 2v20"/><path d="M6 2a4 4 0 0 1 4 4v6H2V6a4 4 0 0 1 4-4z"/><path d="M18 2v20"/><path d="M18 2a3 3 0 0 0-3 3v5a3 3 0 0 0 3 3"/>',
        'pill'        => '<path d="M10.5 20.5L3.5 13.5a4.95 4.95 0 1 1 7-7l7 7a4.95 4.95 0 1 1-7 7z"/><line x1="8" y1="8" x2="16" y2="16"/>',
        'activity'    => '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>',
        // Care types
        'hands'       => '<path d="M11 13V6a2 2 0 0 1 4 0v7"/><path d="M15 13V4a2 2 0 0 1 4 0v9"/><path d="M19 11a2 2 0 1 1 4 0v5a7 7 0 0 1-7 7H9a3 3 0 0 1-3-3v-1"/><path d="M7 13V8a2 2 0 0 0-4 0v9"/>',
        'heart'       => '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>',
        'sparkles'    => '<path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>',
        'shield'      => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'clipboard'   => '<path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/>',
        // Activities / companionship
        'palette'     => '<circle cx="13.5" cy="6.5" r=".5" fill="currentColor"/><circle cx="17.5" cy="10.5" r=".5" fill="currentColor"/><circle cx="8.5" cy="7.5" r=".5" fill="currentColor"/><circle cx="6.5" cy="12.5" r=".5" fill="currentColor"/><path d="M12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10-4.48 10-10 10"/>',
        'music'       => '<path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/>',
        'smile'       => '<circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/>',
        // Misc
        'clock'       => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
        'phone'       => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>',
        'location'    => '<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>',
        'mail'        => '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>',
        'check'       => '<polyline points="20 6 9 17 4 12"/>',
        'check-circle'=> '<path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>',
        'x'           => '<line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>',
        'x-circle'    => '<circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/>',
        'plus'        => '<line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>',
        'minus'       => '<line x1="5" y1="12" x2="19" y2="12"/>',
        'chevron-down'=> '<polyline points="6 9 12 15 18 9"/>',
        'chevron-right' => '<polyline points="9 18 15 12 9 6"/>',
        'star'        => '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>',
        'arrow-right' => '<line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>',
        'play'        => '<polygon points="5 3 19 12 5 21 5 3"/>',
    );

    if (!isset($paths[$slug])) {
        $slug = 'check';
    }

    // star uses fill, not stroke
    if ($slug === 'star') {
        return '<svg class="' . esc_attr($class) . '" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">' . $paths[$slug] . '</svg>';
    }

    return '<svg ' . $svg_attrs . '>' . $paths[$slug] . '</svg>';
}

// Fallback menu when no menu is assigned in WP admin
function amyseden_fallback_menu() {
    echo '<ul class="nav__links">';
    echo '<li><a href="' . esc_url(home_url('/assisted-living/')) . '">Two-Resident Home&trade;</a></li>';
    echo '<li><a href="' . esc_url(home_url('/home-care/')) . '">Home Care</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about/')) . '">Our Story</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact/')) . '">Contact</a></li>';
    echo '</ul>';
}

// Fallback menu for mobile
function amyseden_fallback_mobile_menu() {
    echo '<ul class="nav__mobile-menu">';
    echo '<li><a href="' . esc_url(home_url('/assisted-living/')) . '">Two-Resident Home&trade;</a></li>';
    echo '<li><a href="' . esc_url(home_url('/home-care/')) . '">Home Care</a></li>';
    echo '<li><a href="' . esc_url(home_url('/in-home-care-and-in-home-like-care/')) . '">Compare Care</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about/')) . '">Our Story</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact/')) . '">Contact</a></li>';
    echo '</ul>';
}

// Fallback menu for footer columns
function amyseden_fallback_footer_1() {
    echo '<ul>';
    echo '<li><a href="' . esc_url(home_url('/assisted-living/')) . '">Two-Resident Home&trade;</a></li>';
    echo '<li><a href="' . esc_url(home_url('/assisted-living/#homes')) . '">Our Homes</a></li>';
    echo '<li><a href="' . esc_url(home_url('/assisted-living/#reno')) . '">Reno Locations</a></li>';
    echo '<li><a href="' . esc_url(home_url('/assisted-living/#carson-city')) . '">Carson City Locations</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact/')) . '">Schedule a Tour</a></li>';
    echo '</ul>';
}

function amyseden_fallback_footer_2() {
    echo '<ul>';
    echo '<li><a href="' . esc_url(home_url('/home-care/')) . '">In-Home Care Services</a></li>';
    echo '<li><a href="' . esc_url(home_url('/home-care/#companion')) . '">Companion Care</a></li>';
    echo '<li><a href="' . esc_url(home_url('/home-care/#personal')) . '">Personal Care</a></li>';
    echo '<li><a href="' . esc_url(home_url('/home-care/#respite')) . '">Respite Care</a></li>';
    echo '<li><a href="' . esc_url(home_url('/careers/')) . '">Careers</a></li>';
    echo '</ul>';
}

/**
 * Custom Walker for Mobile Menu — replaces parent link with a toggle button
 * that opens/closes the submenu with animation.
 */
class Amyseden_Mobile_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_str = implode(' ', array_filter($classes));

        $output .= '<li class="' . esc_attr($class_str) . '">';

        $has_children = in_array('menu-item-has-children', $classes);

        if ($has_children && $depth === 0) {
            // Output a button toggle instead of a plain link
            $output .= '<button class="mobile-submenu-toggle" aria-expanded="false">';
            $output .= '<span>' . esc_html($item->title) . '</span>';
            $output .= '<svg class="submenu-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>';
            $output .= '</button>';
        } else {
            $atts = array();
            $atts['href'] = !empty($item->url) ? $item->url : '';
            $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
            $atts['target'] = !empty($item->target) ? $item->target : '';

            $attributes = '';
            foreach ($atts as $attr => $value) {
                if (!empty($value)) {
                    $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
                }
            }

            $output .= '<a' . $attributes . '>';
            $output .= esc_html($item->title);
            $output .= '</a>';
        }
    }
}

// Widget areas
function amyseden_widgets() {
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'amyseden'),
        'id' => 'footer-widgets',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="footer-widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Sidebar Widgets', 'amyseden'),
        'id' => 'sidebar-widgets',
        'description' => __('Widgets for the page sidebar area.', 'amyseden'),
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'amyseden_widgets');

// ============================================================
// Blog Support & Settings
// ============================================================

// Set excerpt length
function amyseden_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'amyseden_excerpt_length');

// Custom excerpt more text
function amyseden_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'amyseden_excerpt_more');

// Add reading time estimate to posts
function amyseden_reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 250);
    return $reading_time . ' min read';
}

// Blog Customizer settings are now in inc/customizer.php

// ============================================================
// Breadcrumbs
// ============================================================

function amyseden_breadcrumbs() {
    if (is_front_page()) return;

    echo '<nav class="breadcrumbs" aria-label="Breadcrumb">';
    echo '<a href="' . esc_url(home_url('/')) . '">Home</a>';
    echo '<span class="breadcrumb-sep"> / </span>';

    if (is_category() || is_single()) {
        $cats = get_the_category();
        if ($cats) {
            echo '<a href="' . esc_url(get_category_link($cats[0]->term_id)) . '">' . esc_html($cats[0]->name) . '</a>';
            echo '<span class="breadcrumb-sep"> / </span>';
        }
        if (is_single()) {
            echo '<span class="breadcrumb-current">' . get_the_title() . '</span>';
        }
    } elseif (is_page()) {
        $ancestors = get_post_ancestors(get_the_ID());
        foreach (array_reverse($ancestors) as $ancestor) {
            echo '<a href="' . esc_url(get_permalink($ancestor)) . '">' . get_the_title($ancestor) . '</a>';
            echo '<span class="breadcrumb-sep"> / </span>';
        }
        echo '<span class="breadcrumb-current">' . get_the_title() . '</span>';
    } elseif (is_archive()) {
        echo '<span class="breadcrumb-current">' . get_the_archive_title() . '</span>';
    } elseif (is_search()) {
        echo '<span class="breadcrumb-current">Search Results</span>';
    }
    echo '</nav>';
}

// ============================================================
// Body Class Additions
// ============================================================

function amyseden_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'page-home';
    }
    if (is_page('assisted-living')) {
        $classes[] = 'page-assisted-living';
    }
    if (is_page('home-care')) {
        $classes[] = 'page-home-care';
    }
    if (is_page('in-home-care-and-in-home-like-care')) {
        $classes[] = 'page-comparison';
    }
    if (is_page(array('about', 'about-amys-eden'))) {
        $classes[] = 'page-about';
    }
    if (is_singular('post')) {
        $classes[] = 'page-single-post';
    }
    if (is_home() || is_archive() || is_search()) {
        $classes[] = 'page-blog';
    }
    return $classes;
}
add_filter('body_class', 'amyseden_body_classes');

// ============================================================
// Contact Form AJAX Handler — with Slack + anti-spam protection
// ============================================================

/**
 * Accepts contact form submissions, runs multiple anti-spam checks,
 * posts to Slack webhook (if configured), and optionally emails a copy.
 *
 * Anti-spam layers:
 *   1. WordPress nonce (CSRF protection)
 *   2. Honeypot field ("website") — bots fill every field, humans don't see it
 *   3. Timestamp check — submissions faster than N seconds are bots
 *   4. Basic content heuristics (URL count, etc.)
 */
function amyseden_contact_form_handler() {
    // 1. Verify nonce
    if (!check_ajax_referer('amyseden_contact_nonce', 'nonce', false)) {
        wp_send_json_error(array('message' => 'Security check failed. Please refresh and try again.'));
    }

    // 2. Honeypot check — if the hidden "website" field is filled, it's a bot
    if (!empty($_POST['website']) || !empty($_POST['amyseden_hp'])) {
        // Silently pretend success so the bot doesn't retry
        wp_send_json_success(array('message' => 'Thank you! We\'ll be in touch soon.'));
    }

    // 3. Timestamp check — humans take at least a few seconds to fill a form
    $min_time = (int) get_theme_mod('amyseden_form_min_time', 3);
    $form_ts = isset($_POST['form_ts']) ? (int) $_POST['form_ts'] : 0;
    $elapsed = time() - $form_ts;
    if ($form_ts > 0 && $elapsed < $min_time) {
        wp_send_json_error(array('message' => 'Please take a moment to review your message.'));
    }
    // Also reject ancient timestamps (stale form, likely replay)
    if ($form_ts > 0 && $elapsed > 3600 * 3) {
        wp_send_json_error(array('message' => 'This form has expired. Please refresh the page and try again.'));
    }

    // 4. Gather + sanitize data (support both camelCase and snake_case field names)
    $first_name = sanitize_text_field(
        isset($_POST['firstName']) ? $_POST['firstName'] : (isset($_POST['first_name']) ? $_POST['first_name'] : '')
    );
    $last_name = sanitize_text_field(
        isset($_POST['lastName']) ? $_POST['lastName'] : (isset($_POST['last_name']) ? $_POST['last_name'] : '')
    );
    $name = trim($first_name . ' ' . $last_name);
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
    $location = isset($_POST['location']) ? sanitize_text_field($_POST['location']) : '';
    $interest = isset($_POST['interest']) ? sanitize_text_field($_POST['interest']) : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';

    // Required fields
    if (empty($name) || empty($email) || !is_email($email)) {
        wp_send_json_error(array('message' => 'Please provide your name and a valid email.'));
    }

    // 5. Content heuristics — reject messages with too many URLs (common spam)
    $url_count = preg_match_all('#https?://#i', $message . ' ' . $name, $m);
    if ($url_count > 3) {
        wp_send_json_error(array('message' => 'Message flagged as spam. Please remove links and try again.'));
    }

    // 6. Deliver to Slack (if configured)
    $slack_webhook = get_theme_mod('amyseden_slack_webhook', '');
    $slack_sent = false;
    if (!empty($slack_webhook) && filter_var($slack_webhook, FILTER_VALIDATE_URL)) {
        $slack_channel = get_theme_mod('amyseden_slack_channel', '');
        $page_title = isset($_POST['page_title']) ? sanitize_text_field($_POST['page_title']) : get_bloginfo('name');

        $fields = array();
        $fields[] = array('title' => 'Name',     'value' => $name,     'short' => true);
        $fields[] = array('title' => 'Email',    'value' => $email,    'short' => true);
        if ($phone)    $fields[] = array('title' => 'Phone',    'value' => $phone,    'short' => true);
        if ($location) $fields[] = array('title' => 'Location', 'value' => $location, 'short' => true);
        if ($interest) $fields[] = array('title' => 'Interest', 'value' => $interest, 'short' => true);
        $fields[] = array('title' => 'Source', 'value' => $page_title, 'short' => true);
        if ($message)  $fields[] = array('title' => 'Message',  'value' => $message,  'short' => false);

        $payload = array(
            'text' => ':wave: New inquiry from *' . $name . '*',
            'attachments' => array(array(
                'color' => '#EE5F3D',
                'fields' => $fields,
                'footer' => "Amy's Eden website",
                'ts' => time(),
            )),
        );
        if (!empty($slack_channel)) {
            $payload['channel'] = $slack_channel;
        }

        $response = wp_remote_post($slack_webhook, array(
            'headers' => array('Content-Type' => 'application/json'),
            'body' => wp_json_encode($payload),
            'timeout' => 10,
        ));

        if (!is_wp_error($response) && wp_remote_retrieve_response_code($response) === 200) {
            $slack_sent = true;
        }
    }

    // 7. Email copy (if enabled or Slack is not configured)
    $email_copy_enabled = (bool) get_theme_mod('amyseden_form_email_copy', true);
    $email_sent = false;
    if ($email_copy_enabled || empty($slack_webhook)) {
        $to = get_theme_mod('amyseden_email', 'info@amyseden.com');
        $subject = 'New Inquiry from ' . $name . ($interest ? ' — ' . $interest : '');
        $body  = "Name: $name\n";
        $body .= "Email: $email\n";
        if ($phone)    $body .= "Phone: $phone\n";
        if ($location) $body .= "Location: $location\n";
        if ($interest) $body .= "Interest: $interest\n";
        $body .= "\nMessage:\n" . $message . "\n";
        $headers = array('Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $email);
        $email_sent = wp_mail($to, $subject, $body, $headers);
    }

    // Success if either delivery channel succeeded
    if ($slack_sent || $email_sent) {
        wp_send_json_success(array('message' => 'Thank you! We\'ll be in touch soon.'));
    } else {
        wp_send_json_error(array('message' => 'Something went wrong. Please call us directly.'));
    }
}
add_action('wp_ajax_amyseden_contact', 'amyseden_contact_form_handler');
add_action('wp_ajax_nopriv_amyseden_contact', 'amyseden_contact_form_handler');

// ============================================================
// Comment Support (blog posts only, not pages)
// ============================================================

function amyseden_comment_support() {
    // Only enable comments on blog posts, not pages
    if (is_page()) {
        remove_post_type_support('page', 'comments');
    }
}
add_action('init', 'amyseden_comment_support');
