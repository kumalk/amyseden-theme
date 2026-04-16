<?php
/**
 * Amy's Eden Senior Care - Footer Template
 *
 * Smart footer: On hardcoded landing pages, uses our custom footer.
 * On all other pages, lets Elementor Theme Builder footer take over if active.
 */

$phone = get_theme_mod('amyseden_phone', '(775) 884-3336');
$phone_raw = get_theme_mod('amyseden_phone_raw', '7758843336');
$email = get_theme_mod('amyseden_email', 'info@amyseden.com');

// Footer customizer settings
$footer_tagline = get_theme_mod('amyseden_footer_tagline', 'Redefining senior care with our Two-Resident Home&trade; model. Only 2 residents per home with 1 dedicated caregiver, 24/7.');
$footer_col1_heading = get_theme_mod('amyseden_footer_col1_heading', 'Assisted Living');
$footer_col2_heading = get_theme_mod('amyseden_footer_col2_heading', 'Home Care');
$footer_copyright = get_theme_mod('amyseden_footer_copyright', "Amy's Eden Senior Care. All rights reserved.");
$footer_legal = get_theme_mod('amyseden_footer_legal', 'Licensed by the State of Nevada');
$footer_logo_url = get_theme_mod('amyseden_footer_logo', '');

// Social links
$social_fb = get_theme_mod('amyseden_facebook', 'https://www.facebook.com/AmysEden/');
$social_ig = get_theme_mod('amyseden_instagram', '#');
$social_yt = get_theme_mod('amyseden_youtube', '#');
$social_li = get_theme_mod('amyseden_linkedin', '#');
$social_tw = get_theme_mod('amyseden_twitter', '#');

// Check if this is a landing page (same logic as header.php)
$amyseden_landing_slugs = array('assisted-living', 'home-care', 'in-home-care-and-in-home-like-care', 'contact', 'about', 'about-amys-eden');
$is_landing_page = false;
if (is_page()) {
    $current_slug = get_post_field('post_name', get_the_ID());
    $is_landing_page = in_array($current_slug, $amyseden_landing_slugs);
}
if (is_front_page()) {
    $is_landing_page = true;
}

$use_theme_footer = $is_landing_page;

if (!$use_theme_footer && function_exists('elementor_theme_do_location') && elementor_theme_do_location('footer')) {
    // Elementor Theme Builder rendered its footer
    wp_footer();
    echo '</body></html>';
    return;
}

// Render OUR theme footer:
?>

    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <!-- Brand Column -->
                <div class="footer__brand">
                    <?php if ($footer_logo_url) : ?>
                        <img src="<?php echo esc_url($footer_logo_url); ?>" alt="<?php bloginfo('name'); ?>" loading="lazy">
                    <?php elseif (has_custom_logo()) : ?>
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        ?>
                        <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>" loading="lazy" class="footer-logo--auto">
                    <?php else : ?>
                        <img src="https://amyseden.com/wp-content/uploads/2024/10/Layer_1.png" alt="<?php bloginfo('name'); ?>" loading="lazy" class="footer-logo--auto">
                    <?php endif; ?>
                    <p><?php echo wp_kses_post($footer_tagline); ?></p>
                    <div class="footer__social">
                        <?php if ($social_fb && $social_fb !== '#') : ?>
                        <a href="<?php echo esc_url($social_fb); ?>" aria-label="Facebook" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                        </a>
                        <?php endif; ?>
                        <?php if ($social_ig && $social_ig !== '#') : ?>
                        <a href="<?php echo esc_url($social_ig); ?>" aria-label="Instagram" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="5" fill="none" stroke="currentColor" stroke-width="1.5"/><circle cx="17.5" cy="6.5" r="1.5"/></svg>
                        </a>
                        <?php endif; ?>
                        <?php if ($social_yt && $social_yt !== '#') : ?>
                        <a href="<?php echo esc_url($social_yt); ?>" aria-label="YouTube" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19.1c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.43z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" fill="#2A2A3C"/></svg>
                        </a>
                        <?php endif; ?>
                        <?php if ($social_li && $social_li !== '#') : ?>
                        <a href="<?php echo esc_url($social_li); ?>" aria-label="LinkedIn" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                        </a>
                        <?php endif; ?>
                        <?php if ($social_tw && $social_tw !== '#') : ?>
                        <a href="<?php echo esc_url($social_tw); ?>" aria-label="X (Twitter)" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Footer Nav Column 1 -->
                <div class="footer__menu-col">
                    <h4 class="footer__heading"><?php echo esc_html($footer_col1_heading); ?></h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-1',
                        'container' => false,
                        'menu_class' => 'footer__links',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'fallback_cb' => 'amyseden_fallback_footer_1',
                        'depth' => 2,
                    ));
                    ?>
                </div>

                <!-- Footer Nav Column 2 -->
                <div class="footer__menu-col">
                    <h4 class="footer__heading"><?php echo esc_html($footer_col2_heading); ?></h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-2',
                        'container' => false,
                        'menu_class' => 'footer__links',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'fallback_cb' => 'amyseden_fallback_footer_2',
                        'depth' => 2,
                    ));
                    ?>
                </div>

                <!-- Contact Column -->
                <div>
                    <h4 class="footer__heading">Contact</h4>
                    <div class="footer__contact-item">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <span><a href="tel:<?php echo esc_attr($phone_raw); ?>"><?php echo esc_html($phone); ?></a></span>
                    </div>
                    <div class="footer__contact-item">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <span><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></span>
                    </div>
                    <div class="footer__contact-item">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span>Reno &amp; Carson City, Nevada</span>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <span class="footer__copy">&copy; <?php echo date('Y'); ?> <?php echo esc_html($footer_copyright); ?></span>
                <span class="footer__legal"><?php echo esc_html($footer_legal); ?></span>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
