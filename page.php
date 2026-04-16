<?php
/**
 * Amy's Eden Senior Care - Default Page Template
 * Works with both WordPress editor and Elementor
 */

// Let Elementor handle if it's an Elementor page
if (function_exists('\Elementor\Plugin')) {
    $elementor = \Elementor\Plugin::instance();
    if ($elementor->db->is_built_with_elementor(get_the_ID())) {
        get_header();
        echo '<main class="site-main"><div style="padding-top:100px;">';
        while (have_posts()) { the_post(); the_content(); }
        echo '</div></main>';
        get_footer();
        return;
    }
}

// If Elementor theme builder handles this location, let it
if (function_exists('elementor_theme_do_location') && elementor_theme_do_location('single')) {
    return;
}

get_header();
?>

<style>
/* ===================== DEFAULT PAGE STYLES ===================== */
.page-hero-banner {
    background: #FBF5F0;
    padding: 140px 24px 60px;
    text-align: center;
}
.page-hero-banner h1 {
    font-family: 'Playfair Display', serif;
    font-size: 48px;
    font-weight: 700;
    color: #2A2A3C;
    margin: 0;
}

.page-layout {
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 24px 80px;
    display: grid;
    grid-template-columns: 1fr 320px;
    gap: 48px;
    align-items: start;
}
.page-layout.no-sidebar {
    grid-template-columns: 1fr;
    max-width: 880px;
}

/* Page Content Typography */
.page-content {
    min-width: 0;
}
.page-content h2 {
    font-family: 'Playfair Display', serif;
    font-size: 32px;
    font-weight: 700;
    color: #2A2A3C;
    margin: 40px 0 16px;
}
.page-content h3 {
    font-family: 'Playfair Display', serif;
    font-size: 24px;
    font-weight: 700;
    color: #2A2A3C;
    margin: 32px 0 12px;
}
.page-content h4 {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 20px;
    font-weight: 700;
    color: #2A2A3C;
    margin: 28px 0 10px;
}
.page-content p {
    font-family: 'Plus Jakarta Sans', sans-serif;
    color: #5C5C6F;
    font-size: 16px;
    line-height: 1.8;
    margin-bottom: 20px;
}
.page-content ul,
.page-content ol {
    font-family: 'Plus Jakarta Sans', sans-serif;
    color: #5C5C6F;
    font-size: 16px;
    line-height: 1.8;
    padding-left: 24px;
    margin-bottom: 20px;
}
.page-content li {
    margin-bottom: 8px;
}
.page-content img {
    max-width: 100%;
    height: auto;
    border-radius: 12px;
    margin: 24px 0;
}
.page-content blockquote {
    border-left: 4px solid;
    border-image: linear-gradient(135deg, #EE5F3D, #C12787) 1;
    padding: 20px 24px;
    background: #FBF5F0;
    margin: 24px 0;
    font-style: italic;
    border-radius: 0 12px 12px 0;
}
.page-content blockquote p {
    margin: 0;
    color: #2A2A3C;
    font-weight: 500;
}
.page-content a {
    color: #EE5F3D;
    font-weight: 500;
    text-decoration: none;
    transition: color 0.2s ease;
}
.page-content a:hover {
    color: #C12787;
}
.page-content table {
    width: 100%;
    border-collapse: collapse;
    margin: 24px 0;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
}
.page-content table th,
.page-content table td {
    padding: 12px 16px;
    text-align: left;
    border-bottom: 1px solid #E8E3DD;
    color: #5C5C6F;
}
.page-content table th {
    font-weight: 700;
    color: #2A2A3C;
    background: #FBF5F0;
}
.page-content hr {
    border: none;
    height: 2px;
    background: #FBF5F0;
    margin: 40px 0;
}

/* WordPress alignment classes */
.page-content .aligncenter {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.page-content .alignleft {
    float: left;
    margin-right: 24px;
    margin-bottom: 12px;
}
.page-content .alignright {
    float: right;
    margin-left: 24px;
    margin-bottom: 12px;
}
.page-content .wp-caption {
    max-width: 100%;
}
.page-content .wp-caption-text {
    font-size: 13px;
    color: #8A8A9A;
    text-align: center;
    margin-top: 8px;
}

@media (max-width: 900px) {
    .page-layout {
        grid-template-columns: 1fr;
    }
    .page-hero-banner h1 {
        font-size: 34px;
    }
}
</style>

<main class="site-main">

    <!-- Hero Banner -->
    <section class="page-hero-banner">
        <h1><?php the_title(); ?></h1>
    </section>

    <!-- Page Layout -->
    <?php
    $has_sidebar = is_active_sidebar('sidebar-widgets') || true; // Always show sidebar with CTA
    ?>
    <div class="page-layout<?php echo $has_sidebar ? '' : ' no-sidebar'; ?>">

        <article class="page-content">
            <?php
            while (have_posts()) : the_post();
                the_content();
            endwhile;
            ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
        </article>

        <?php if ($has_sidebar) : ?>
            <?php get_sidebar(); ?>
        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>
