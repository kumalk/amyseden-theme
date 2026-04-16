<?php
/**
 * Template Name: Full Width
 * A blank canvas for Elementor or full-width content
 */
get_header(); ?>

<main class="site-main page-full-width">
    <div style="padding-top: 100px;">
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
