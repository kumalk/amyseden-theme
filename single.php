<?php
/**
 * Amy's Eden Senior Care - Single Blog Post Template
 *
 * @package AmysEden
 */

get_header();
$phone     = get_theme_mod( 'amyseden_phone', '(775) 884-3336' );
$phone_raw = get_theme_mod( 'amyseden_phone_raw', '7758843336' );

// Estimated read time
$content    = get_the_content();
$word_count = str_word_count( wp_strip_all_tags( $content ) );
$read_time  = max( 1, ceil( $word_count / 250 ) );
?>

<style>
/* ===================== Single Post Styles ===================== */

/* Article Hero */
.article-hero {
    position: relative;
    min-height: 480px;
    display: flex;
    align-items: flex-end;
    overflow: hidden;
    background: #2A2A3C;
}
.article-hero__image {
    position: absolute;
    inset: 0;
    z-index: 1;
}
.article-hero__image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.5;
}
.article-hero__overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
    background: linear-gradient(to top, rgba(42,42,60,0.92) 0%, rgba(42,42,60,0.4) 60%, rgba(42,42,60,0.2) 100%);
}
.article-hero__content {
    position: relative;
    z-index: 3;
    max-width: 820px;
    padding: 60px 24px 60px;
    margin: 0 auto;
    width: 100%;
    text-align: center;
}
.article-hero__category {
    display: inline-block;
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    color: #fff;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 5px 14px;
    border-radius: 50px;
    text-decoration: none;
    margin-bottom: 20px;
}
.article-hero__category:hover {
    opacity: 0.9;
    color: #fff;
}
.article-hero__title {
    font-family: 'Playfair Display', serif;
    font-size: 44px;
    font-weight: 700;
    color: #fff;
    line-height: 1.2;
    margin: 0 0 20px;
}
.article-hero__meta {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    color: rgba(255,255,255,0.7);
}
.article-hero__meta-item {
    display: flex;
    align-items: center;
    gap: 6px;
}
.article-hero__meta svg {
    width: 16px;
    height: 16px;
    stroke: rgba(255,255,255,0.6);
    fill: none;
    stroke-width: 2;
}

/* No-image hero fallback */
.article-hero--no-image {
    min-height: 360px;
    background: #FBF5F0;
}
.article-hero--no-image .article-hero__title {
    color: #2A2A3C;
}
.article-hero--no-image .article-hero__meta {
    color: #8A8A9A;
}
.article-hero--no-image .article-hero__meta svg {
    stroke: #8A8A9A;
}

/* Article Body */
.article-body-wrapper {
    background: #FDFAF7;
    padding: 60px 24px 80px;
}
.article-body {
    max-width: 740px;
    margin: 0 auto;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 17px;
    line-height: 1.8;
    color: #2A2A3C;
}
.article-body h2 {
    font-family: 'Playfair Display', serif;
    font-size: 30px;
    font-weight: 700;
    color: #2A2A3C;
    margin: 48px 0 16px;
    line-height: 1.3;
}
.article-body h3 {
    font-family: 'Playfair Display', serif;
    font-size: 24px;
    font-weight: 700;
    color: #2A2A3C;
    margin: 36px 0 12px;
    line-height: 1.35;
}
.article-body h4,
.article-body h5,
.article-body h6 {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-weight: 700;
    color: #2A2A3C;
    margin: 28px 0 10px;
}
.article-body h4 { font-size: 20px; }
.article-body h5 { font-size: 18px; }
.article-body h6 { font-size: 16px; text-transform: uppercase; letter-spacing: 0.5px; color: #5C5C6F; }

.article-body p {
    margin: 0 0 20px;
}
.article-body a {
    color: #EE5F3D;
    text-decoration: underline;
    text-underline-offset: 2px;
    transition: color 0.2s;
}
.article-body a:hover {
    color: #C12787;
}
.article-body ul,
.article-body ol {
    margin: 0 0 24px;
    padding-left: 24px;
}
.article-body li {
    margin-bottom: 8px;
}
.article-body blockquote {
    margin: 32px 0;
    padding: 24px 28px;
    background: #FBF5F0;
    border-left: 4px solid transparent;
    border-image: linear-gradient(135deg, #EE5F3D, #C12787) 1;
    border-radius: 0 12px 12px 0;
    font-family: 'Playfair Display', serif;
    font-style: italic;
    font-size: 19px;
    line-height: 1.6;
    color: #2A2A3C;
}
.article-body blockquote p {
    margin: 0;
}
.article-body blockquote cite {
    display: block;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-style: normal;
    font-size: 14px;
    color: #8A8A9A;
    margin-top: 12px;
}
.article-body img {
    max-width: 100%;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    margin: 24px 0;
}
.article-body figure {
    margin: 32px 0;
}
.article-body figcaption {
    font-size: 13px;
    color: #8A8A9A;
    text-align: center;
    margin-top: 8px;
}
.article-body pre,
.article-body code {
    font-family: 'SFMono-Regular', Consolas, 'Liberation Mono', Menlo, monospace;
}
.article-body code {
    background: #F0ECE6;
    padding: 2px 6px;
    border-radius: 4px;
    font-size: 0.9em;
}
.article-body pre {
    background: #F0ECE6;
    padding: 20px 24px;
    border-radius: 12px;
    overflow-x: auto;
    margin: 24px 0;
}
.article-body pre code {
    background: none;
    padding: 0;
}
.article-body table {
    width: 100%;
    border-collapse: collapse;
    margin: 24px 0;
    font-size: 15px;
}
.article-body th,
.article-body td {
    padding: 12px 16px;
    text-align: left;
    border-bottom: 1px solid #E8E3DD;
}
.article-body th {
    font-weight: 700;
    background: #FBF5F0;
    color: #2A2A3C;
}
.article-body hr {
    border: none;
    border-top: 1px solid #E8E3DD;
    margin: 40px 0;
}

/* Author Box */
.author-box {
    max-width: 740px;
    margin: 0 auto 48px;
    background: #fff;
    border-radius: 16px;
    padding: 32px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    display: flex;
    gap: 24px;
    align-items: center;
}
.author-box__avatar {
    flex-shrink: 0;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    overflow: hidden;
    background: #FBF5F0;
}
.author-box__avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.author-box__label {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #B8935A;
    margin: 0 0 4px;
}
.author-box__name {
    font-family: 'Playfair Display', serif;
    font-size: 20px;
    font-weight: 700;
    color: #2A2A3C;
    margin: 0 0 8px;
}
.author-box__bio {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    line-height: 1.6;
    color: #5C5C6F;
    margin: 0;
}

/* Related Posts */
.related-posts {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px 60px;
}
.related-posts__heading {
    font-family: 'Playfair Display', serif;
    font-size: 30px;
    font-weight: 700;
    color: #2A2A3C;
    text-align: center;
    margin: 0 0 32px;
}
.related-posts__grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 28px;
}

/* Reuse blog card styles from home.php */
.related-posts .blog-card {
    background: #FFFFFF;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
}
.related-posts .blog-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.1);
}
.related-posts .blog-card__image {
    aspect-ratio: 16/9;
    overflow: hidden;
    background: #E8E3DD;
}
.related-posts .blog-card__image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}
.related-posts .blog-card:hover .blog-card__image img {
    transform: scale(1.04);
}
.related-posts .blog-card__body {
    padding: 24px;
    flex: 1;
    display: flex;
    flex-direction: column;
}
.related-posts .blog-card__category {
    display: inline-block;
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    color: #fff;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 4px 12px;
    border-radius: 50px;
    text-decoration: none;
    align-self: flex-start;
}
.related-posts .blog-card__title {
    font-family: 'Playfair Display', serif;
    font-size: 18px;
    font-weight: 700;
    color: #2A2A3C;
    margin: 10px 0 8px;
    line-height: 1.35;
}
.related-posts .blog-card__title a {
    color: inherit;
    text-decoration: none;
    transition: color 0.2s;
}
.related-posts .blog-card__title a:hover {
    color: #EE5F3D;
}
.related-posts .blog-card__meta {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-top: auto;
    padding-top: 12px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    color: #8A8A9A;
}

/* CTA Banner */
.post-cta-banner {
    max-width: 740px;
    margin: 0 auto 48px;
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    border-radius: 16px;
    padding: 48px 40px;
    text-align: center;
    color: #fff;
}
.post-cta-banner__title {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    font-weight: 700;
    margin: 0 0 12px;
}
.post-cta-banner__text {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 16px;
    line-height: 1.6;
    color: rgba(255,255,255,0.9);
    margin: 0 0 24px;
}
.post-cta-banner__phone {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #fff;
    color: #EE5F3D;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 18px;
    font-weight: 700;
    padding: 14px 32px;
    border-radius: 50px;
    text-decoration: none;
    transition: transform 0.2s, box-shadow 0.2s;
}
.post-cta-banner__phone:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.2);
}
.post-cta-banner__phone svg {
    width: 20px;
    height: 20px;
    stroke: currentColor;
    fill: none;
    stroke-width: 2;
}
.post-cta-banner__or {
    display: block;
    margin: 16px 0;
    font-size: 14px;
    color: rgba(255,255,255,0.7);
}
.post-cta-banner__link {
    display: inline-block;
    color: #fff;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    font-weight: 600;
    text-decoration: underline;
    text-underline-offset: 3px;
}
.post-cta-banner__link:hover {
    color: #fff;
    opacity: 0.85;
}

/* Post Navigation */
.post-navigation {
    max-width: 740px;
    margin: 0 auto 60px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
}
.post-navigation__link {
    background: #fff;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    text-decoration: none;
    transition: transform 0.2s, box-shadow 0.2s;
    display: block;
}
.post-navigation__link:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
}
.post-navigation__label {
    display: block;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #8A8A9A;
    margin-bottom: 8px;
}
.post-navigation__title {
    font-family: 'Playfair Display', serif;
    font-size: 16px;
    font-weight: 700;
    color: #2A2A3C;
    line-height: 1.4;
}
.post-navigation__link:hover .post-navigation__title {
    color: #EE5F3D;
}
.post-navigation__link--next {
    text-align: right;
}

/* Responsive */
@media (max-width: 768px) {
    .article-hero {
        min-height: 360px;
    }
    .article-hero__title {
        font-size: 30px;
    }
    .article-hero__content {
        padding: 40px 20px;
    }
    .article-body {
        font-size: 16px;
    }
    .article-body h2 {
        font-size: 24px;
    }
    .article-body h3 {
        font-size: 20px;
    }
    .article-body blockquote {
        font-size: 17px;
        padding: 20px 22px;
    }
    .author-box {
        flex-direction: column;
        text-align: center;
    }
    .post-navigation {
        grid-template-columns: 1fr;
    }
    .post-cta-banner {
        padding: 36px 24px;
    }
    .post-cta-banner__title {
        font-size: 24px;
    }
    .related-posts__grid {
        grid-template-columns: 1fr;
    }
}
</style>

<main class="site-main page-single-post">

    <?php while ( have_posts() ) : the_post(); ?>

        <!-- Article Hero -->
        <section class="article-hero<?php echo ! has_post_thumbnail() ? ' article-hero--no-image' : ''; ?>">
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="article-hero__image">
                    <?php the_post_thumbnail( 'full' ); ?>
                </div>
                <div class="article-hero__overlay"></div>
            <?php endif; ?>
            <div class="article-hero__content">
                <?php
                $categories = get_the_category();
                if ( ! empty( $categories ) ) :
                ?>
                    <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>" class="article-hero__category">
                        <?php echo esc_html( $categories[0]->name ); ?>
                    </a>
                <?php endif; ?>

                <h1 class="article-hero__title"><?php the_title(); ?></h1>

                <div class="article-hero__meta">
                    <span class="article-hero__meta-item">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="7" r="4"/><path d="M5.5 21a6.5 6.5 0 0 1 13 0"/></svg>
                        <?php echo esc_html( get_the_author() ); ?>
                    </span>
                    <span class="article-hero__meta-item">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        <?php echo esc_html( get_the_date( 'F j, Y' ) ); ?>
                    </span>
                    <span class="article-hero__meta-item">
                        <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <?php echo esc_html( $read_time ); ?> min read
                    </span>
                </div>
            </div>
        </section>

        <!-- Article Body -->
        <section class="article-body-wrapper">
            <article class="article-body">
                <?php the_content(); ?>
            </article>

            <!-- Author Box -->
            <div class="author-box">
                <div class="author-box__avatar">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 160 ); ?>
                </div>
                <div class="author-box__info">
                    <p class="author-box__label">Written by</p>
                    <h3 class="author-box__name"><?php echo esc_html( get_the_author() ); ?></h3>
                    <?php if ( get_the_author_meta( 'description' ) ) : ?>
                        <p class="author-box__bio"><?php echo esc_html( get_the_author_meta( 'description' ) ); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- CTA Banner -->
            <div class="post-cta-banner">
                <h3 class="post-cta-banner__title">Need Help Finding the Right Care?</h3>
                <p class="post-cta-banner__text">Our care coordinators are here to answer your questions and help you explore the best options for your loved one.</p>
                <a href="tel:<?php echo esc_attr( $phone_raw ); ?>" class="post-cta-banner__phone">
                    <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <?php echo esc_html( $phone ); ?>
                </a>
                <span class="post-cta-banner__or">or</span>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="post-cta-banner__link">Schedule a Tour Online</a>
            </div>

            <!-- Post Navigation -->
            <nav class="post-navigation" aria-label="Post navigation">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                ?>
                <?php if ( $prev_post ) : ?>
                    <a href="<?php echo esc_url( get_permalink( $prev_post ) ); ?>" class="post-navigation__link post-navigation__link--prev">
                        <span class="post-navigation__label">&larr; Previous</span>
                        <span class="post-navigation__title"><?php echo esc_html( $prev_post->post_title ); ?></span>
                    </a>
                <?php else : ?>
                    <div></div>
                <?php endif; ?>

                <?php if ( $next_post ) : ?>
                    <a href="<?php echo esc_url( get_permalink( $next_post ) ); ?>" class="post-navigation__link post-navigation__link--next">
                        <span class="post-navigation__label">Next &rarr;</span>
                        <span class="post-navigation__title"><?php echo esc_html( $next_post->post_title ); ?></span>
                    </a>
                <?php else : ?>
                    <div></div>
                <?php endif; ?>
            </nav>
        </section>

        <!-- Related Posts -->
        <?php
        $categories = get_the_category();
        if ( ! empty( $categories ) ) :
            $related = new WP_Query( array(
                'category__in'        => array( $categories[0]->term_id ),
                'post__not_in'        => array( get_the_ID() ),
                'posts_per_page'      => 3,
                'no_found_rows'       => true,
                'ignore_sticky_posts' => true,
            ) );

            if ( $related->have_posts() ) :
        ?>
        <section class="related-posts" style="background:#FDFAF7;">
            <h2 class="related-posts__heading">Related Articles</h2>
            <div class="related-posts__grid">
                <?php while ( $related->have_posts() ) : $related->the_post(); ?>
                    <article class="blog-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="blog-card__image" aria-label="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail( 'medium_large', array( 'loading' => 'lazy' ) ); ?>
                            </a>
                        <?php endif; ?>
                        <div class="blog-card__body">
                            <?php
                            $rel_cats = get_the_category();
                            if ( ! empty( $rel_cats ) ) :
                            ?>
                                <a href="<?php echo esc_url( get_category_link( $rel_cats[0]->term_id ) ); ?>" class="blog-card__category">
                                    <?php echo esc_html( $rel_cats[0]->name ); ?>
                                </a>
                            <?php endif; ?>
                            <h3 class="blog-card__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="blog-card__meta">
                                <span><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></span>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        </section>
        <?php
            endif;
            wp_reset_postdata();
        endif;
        ?>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
