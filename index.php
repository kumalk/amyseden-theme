<?php
/**
 * Amy's Eden Senior Care - Default Template
 */
get_header(); ?>

<main class="site-main">
    <div class="container" style="padding: 120px 24px 80px;">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
