<?php
/**
 * Amy's Eden Senior Care - 404 Page
 */
get_header();

$phone = get_theme_mod('amyseden_phone', '(775) 884-3336');
$phone_raw = get_theme_mod('amyseden_phone_raw', '7758843336');
?>

<main class="site-main">
    <section style="padding: 160px 24px 120px; text-align: center; min-height: 70vh; display: flex; align-items: center; justify-content: center;">
        <div class="container" style="max-width: 640px;">
            <span class="section-label">Page Not Found</span>
            <h1 class="section-heading" style="font-size: clamp(3rem, 6vw, 5rem); margin-bottom: 24px;">404</h1>
            <p style="font-size: 1.2rem; color: var(--text-secondary); margin-bottom: 16px;">
                We couldn't find the page you're looking for. It may have been moved or no longer exists.
            </p>
            <p style="font-size: 1.05rem; color: var(--text-muted); margin-bottom: 40px;">
                Let us help you find what you need — explore our care options or give us a call.
            </p>
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Back to Home</a>
                <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="btn btn-outline">Call <?php echo esc_html($phone); ?></a>
            </div>
            <div style="margin-top: 48px; display: flex; gap: 24px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/assisted-living/')); ?>" style="color: var(--coral); font-weight: 600; text-decoration: underline; text-underline-offset: 3px;">Assisted Living</a>
                <a href="<?php echo esc_url(home_url('/home-care/')); ?>" style="color: var(--coral); font-weight: 600; text-decoration: underline; text-underline-offset: 3px;">Home Care</a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" style="color: var(--coral); font-weight: 600; text-decoration: underline; text-underline-offset: 3px;">Contact Us</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
