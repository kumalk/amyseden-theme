<?php
/**
 * Template Name: Info Page with Sticky Sidebar
 *
 * General-purpose content page in the brand style.
 * Features a sticky sidebar with a contact form + call CTA that follows
 * the user as they scroll, and detaches when the main content ends.
 */
get_header();

$phone     = get_theme_mod('amyseden_phone', '(775) 884-3336');
$phone_raw = get_theme_mod('amyseden_phone_raw', '7758843336');
$email     = get_theme_mod('amyseden_email', 'info@amyseden.com');
?>

<main class="info-page">

    <!-- Hero Banner -->
    <section class="info-hero">
        <div class="container">
            <?php if (function_exists('amyseden_breadcrumbs')) { amyseden_breadcrumbs(); } ?>
            <h1 class="info-hero__title"><?php the_title(); ?></h1>
            <?php if (has_excerpt()) : ?>
                <p class="info-hero__subtitle"><?php echo esc_html(get_the_excerpt()); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Two-column layout with sticky sidebar -->
    <section class="info-layout">
        <div class="container info-layout__grid">

            <article class="info-content">
                <?php
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
                ?>
            </article>

            <aside class="info-sidebar" aria-label="Contact sidebar">
                <div class="info-sidebar__sticky">

                    <!-- Call CTA Card -->
                    <div class="info-cta-card">
                        <div class="info-cta-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div class="info-cta-card__label">Talk to a Care Coordinator</div>
                        <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="info-cta-card__phone"><?php echo esc_html($phone); ?></a>
                        <p class="info-cta-card__note">Available 7 days a week — no pressure, no obligation.</p>
                    </div>

                    <!-- Contact Form Card -->
                    <div class="info-form-card">
                        <h3 class="info-form-card__title">Request a Callback</h3>
                        <p class="info-form-card__subtitle">Fill this out and we'll be in touch shortly.</p>

                        <form class="amyseden-form info-form" method="post" action="#" novalidate>
                            <?php wp_nonce_field('amyseden_contact_nonce', 'amyseden_contact_nonce_field'); ?>
                            <input type="hidden" name="form_ts" value="<?php echo esc_attr(time()); ?>">
                            <input type="hidden" name="page_title" value="<?php echo esc_attr(get_the_title()); ?>">
                            <!-- Honeypot -->
                            <div class="amyseden-hp" aria-hidden="true" style="position:absolute;left:-9999px;top:-9999px;height:0;width:0;overflow:hidden;">
                                <label for="info-hp-website">Website (leave empty)</label>
                                <input type="text" id="info-hp-website" name="website" tabindex="-1" autocomplete="off">
                            </div>

                            <div class="info-form__group">
                                <label for="info-first-name">Name</label>
                                <input type="text" id="info-first-name" name="first_name" placeholder="Your name" required>
                            </div>

                            <div class="info-form__group">
                                <label for="info-email">Email</label>
                                <input type="email" id="info-email" name="email" placeholder="you@example.com" required>
                            </div>

                            <div class="info-form__group">
                                <label for="info-phone">Phone</label>
                                <input type="tel" id="info-phone" name="phone" placeholder="(555) 123-4567">
                            </div>

                            <div class="info-form__group">
                                <label for="info-interest">I'm Interested In</label>
                                <select id="info-interest" name="interest">
                                    <option value="">Select an option</option>
                                    <option value="Tour">Scheduling a Tour</option>
                                    <option value="Callback">A Callback</option>
                                    <option value="Pricing">Pricing Information</option>
                                    <option value="General Question">General Question</option>
                                </select>
                            </div>

                            <div class="info-form__group">
                                <label for="info-message">Message</label>
                                <textarea id="info-message" name="message" rows="3" placeholder="How can we help?"></textarea>
                            </div>

                            <button type="submit" class="info-form__submit">Send Message</button>
                            <div class="form-status" role="status" aria-live="polite"></div>
                            <p class="info-form__note">We respond within 24 hours.</p>
                        </form>
                    </div>

                </div>
            </aside>

        </div>
    </section>

</main>

<?php get_footer(); ?>
