<?php
/**
 * Amy's Eden Senior Care - Header Template
 *
 * Smart header: On hardcoded landing pages, uses our custom header.
 * On all other pages, lets Elementor Theme Builder header take over if active.
 */

$phone = get_theme_mod('amyseden_phone', '(775) 884-3336');
$phone_raw = get_theme_mod('amyseden_phone_raw', '7758843336');
$announcement_text = get_theme_mod('amyseden_announcement_text', 'Trusted Care for 13+ Years in Reno & Carson City');
$announcement_visible = get_theme_mod('amyseden_announcement_visible', true);

// Determine if this is a hardcoded landing page
$amyseden_landing_slugs = array('assisted-living', 'home-care', 'in-home-care-and-in-home-like-care', 'contact', 'about', 'about-amys-eden');
$is_landing_page = false;
if (is_page()) {
    $current_slug = get_post_field('post_name', get_the_ID());
    $is_landing_page = in_array($current_slug, $amyseden_landing_slugs);
}
if (is_front_page()) {
    $is_landing_page = true;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
/**
 * ELEMENTOR THEME BUILDER INTEGRATION:
 *
 * On NON-landing pages: If Elementor Theme Builder has a header template,
 * it renders that instead of our theme header. This keeps your existing
 * Elementor pages working exactly as before.
 *
 * On LANDING pages (homepage, assisted-living, home-care, comparison, contact, about):
 * Always uses our custom-coded header for the perfect design match.
 *
 * To use OUR header everywhere: Go to Elementor > Theme Builder > Header
 * and delete or disable your old Elementor header template.
 */
$use_theme_header = $is_landing_page; // Landing pages always get our header

if (!$use_theme_header && function_exists('elementor_theme_do_location') && elementor_theme_do_location('header')) {
    // Elementor Theme Builder rendered its header — we're done
    return;
}

// Otherwise, render OUR theme header:
?>

    <?php if ($announcement_visible) : ?>
    <!-- Announcement Bar -->
    <div class="announcement-bar">
        <?php echo esc_html($announcement_text); ?>
        <a href="tel:<?php echo esc_attr($phone_raw); ?>">Call <?php echo esc_html($phone); ?></a>
    </div>
    <?php endif; ?>

    <!-- ===================== NAVIGATION ===================== -->
    <nav class="nav" id="nav">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="nav__logo" aria-label="Amy's Eden Senior Care Home">
                <?php if (has_custom_logo()) : ?>
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    ?>
                    <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>">
                <?php else : ?>
                    <img src="https://amyseden.com/wp-content/uploads/2024/10/Layer_1.png" alt="<?php bloginfo('name'); ?>">
                <?php endif; ?>
            </a>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav__links',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'fallback_cb' => 'amyseden_fallback_menu',
                'link_before' => '',
                'link_after' => '',
            ));
            ?>

            <div class="nav__cta">
                <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="nav__phone">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <?php echo esc_html($phone); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">Schedule a Tour</a>
            </div>

            <button class="nav__hamburger" id="hamburger" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Mobile Nav Overlay -->
    <div class="nav__mobile" id="mobileNav">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'nav__mobile-menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'walker' => new Amyseden_Mobile_Walker(),
            'fallback_cb' => 'amyseden_fallback_mobile_menu',
            'depth' => 2,
        ));
        ?>
        <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="nav__mobile-phone">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <?php echo esc_html($phone); ?>
        </a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">Schedule a Tour</a>
    </div>
