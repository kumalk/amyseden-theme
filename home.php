<?php
/**
 * Amy's Eden Senior Care - Blog Listing Page (home.php)
 *
 * This template displays the blog index / posts page.
 *
 * @package AmysEden
 */

get_header();
$phone     = get_theme_mod( 'amyseden_phone', '(775) 884-3336' );
$phone_raw = get_theme_mod( 'amyseden_phone_raw', '7758843336' );
?>

<style>
/* ===================== Blog Listing Styles ===================== */
.blog-hero {
    background: #FBF5F0;
    padding: 140px 0 60px;
    text-align: center;
}
.blog-hero__title {
    font-family: 'Playfair Display', serif;
    font-size: 48px;
    font-weight: 700;
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin: 0 0 16px;
}
.blog-hero__subtitle {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 18px;
    color: #5C5C6F;
    max-width: 600px;
    margin: 0 auto 20px;
    line-height: 1.6;
}
.blog-hero__breadcrumbs {
    font-size: 14px;
    color: #8A8A9A;
}
.blog-hero__breadcrumbs a {
    color: #8A8A9A;
    text-decoration: none;
    transition: color 0.2s;
}
.blog-hero__breadcrumbs a:hover {
    color: #EE5F3D;
}
.blog-hero__breadcrumbs span {
    margin: 0 8px;
}

/* Blog Layout */
.blog-section {
    padding: 60px 0 80px;
    background: #FDFAF7;
}
.blog-layout {
    display: grid;
    grid-template-columns: 1fr 340px;
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
}

/* Blog Grid */
.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
    gap: 32px;
}

/* Blog Card */
.blog-card {
    background: #FFFFFF;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
}
.blog-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.1);
}
.blog-card__image {
    aspect-ratio: 16/9;
    overflow: hidden;
    background: #E8E3DD;
}
.blog-card__image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}
.blog-card:hover .blog-card__image img {
    transform: scale(1.04);
}
.blog-card__body {
    padding: 24px;
    flex: 1;
    display: flex;
    flex-direction: column;
}
.blog-card__category {
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
.blog-card__category:hover {
    opacity: 0.9;
    color: #fff;
}
.blog-card__title {
    font-family: 'Playfair Display', serif;
    font-size: 20px;
    font-weight: 700;
    color: #2A2A3C;
    margin: 12px 0 8px;
    line-height: 1.35;
}
.blog-card__title a {
    color: inherit;
    text-decoration: none;
    transition: color 0.2s;
}
.blog-card__title a:hover {
    color: #EE5F3D;
}
.blog-card__excerpt {
    font-family: 'Plus Jakarta Sans', sans-serif;
    color: #5C5C6F;
    font-size: 14px;
    line-height: 1.6;
    margin: 0;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.blog-card__footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: auto;
    padding-top: 16px;
    border-top: 1px solid #E8E3DD;
}
.blog-card__meta {
    display: flex;
    align-items: center;
    gap: 12px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    color: #8A8A9A;
}
.blog-card__meta svg {
    width: 14px;
    height: 14px;
    stroke: #8A8A9A;
    fill: none;
    stroke-width: 2;
    flex-shrink: 0;
}
.blog-card__meta-item {
    display: flex;
    align-items: center;
    gap: 4px;
}
.blog-card__read-more {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    font-weight: 600;
    color: #EE5F3D;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 4px;
    transition: gap 0.2s;
}
.blog-card__read-more:hover {
    gap: 8px;
}

/* Sidebar */
.blog-sidebar {
    display: flex;
    flex-direction: column;
    gap: 32px;
}
.sidebar-card {
    background: #FFFFFF;
    border-radius: 16px;
    padding: 28px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.06);
}
.sidebar-card__title {
    font-family: 'Playfair Display', serif;
    font-size: 20px;
    font-weight: 700;
    color: #2A2A3C;
    margin: 0 0 16px;
}
.sidebar-cta {
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    color: #fff;
    text-align: center;
}
.sidebar-cta .sidebar-card__title {
    color: #fff;
}
.sidebar-cta p {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    line-height: 1.6;
    color: rgba(255,255,255,0.9);
    margin: 0 0 20px;
}
.sidebar-cta__btn {
    display: inline-block;
    background: #fff;
    color: #EE5F3D;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    font-weight: 700;
    padding: 12px 28px;
    border-radius: 50px;
    text-decoration: none;
    transition: transform 0.2s, box-shadow 0.2s;
}
.sidebar-cta__btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 16px rgba(0,0,0,0.15);
}
.sidebar-phone {
    text-align: center;
    border: 2px solid #E8E3DD;
    box-shadow: none;
}
.sidebar-phone__number {
    font-family: 'Playfair Display', serif;
    font-size: 24px;
    font-weight: 700;
    color: #2A2A3C;
    text-decoration: none;
    display: block;
    margin-top: 8px;
}
.sidebar-phone__number:hover {
    color: #EE5F3D;
}
.sidebar-phone__label {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    color: #8A8A9A;
}
.sidebar-recent__list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.sidebar-recent__list li {
    padding: 12px 0;
    border-bottom: 1px solid #E8E3DD;
}
.sidebar-recent__list li:last-child {
    border-bottom: none;
    padding-bottom: 0;
}
.sidebar-recent__list a {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 14px;
    font-weight: 600;
    color: #2A2A3C;
    text-decoration: none;
    line-height: 1.45;
    display: block;
    transition: color 0.2s;
}
.sidebar-recent__list a:hover {
    color: #EE5F3D;
}
.sidebar-recent__date {
    font-size: 12px;
    color: #8A8A9A;
    margin-top: 4px;
    display: block;
}

/* Pagination */
.blog-pagination {
    padding: 40px 0 0;
}
.blog-pagination .nav-links {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
}
.blog-pagination .page-numbers {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    border-radius: 12px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    font-weight: 600;
    color: #5C5C6F;
    background: #fff;
    border: 1px solid #E8E3DD;
    text-decoration: none;
    transition: all 0.2s;
}
.blog-pagination .page-numbers:hover {
    border-color: #EE5F3D;
    color: #EE5F3D;
}
.blog-pagination .page-numbers.current {
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    color: #fff;
    border-color: transparent;
}
.blog-pagination .page-numbers.prev,
.blog-pagination .page-numbers.next {
    width: auto;
    padding: 0 18px;
    font-size: 13px;
}

/* No Posts */
.blog-no-posts {
    text-align: center;
    padding: 60px 0;
}
.blog-no-posts h2 {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    color: #2A2A3C;
    margin: 0 0 12px;
}
.blog-no-posts p {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 16px;
    color: #5C5C6F;
}

/* Responsive */
@media (max-width: 1024px) {
    .blog-layout {
        grid-template-columns: 1fr;
    }
    .blog-sidebar {
        flex-direction: row;
        flex-wrap: wrap;
    }
    .blog-sidebar > * {
        flex: 1 1 280px;
    }
}
@media (max-width: 768px) {
    .blog-hero {
        padding: 120px 24px 40px;
    }
    .blog-hero__title {
        font-size: 34px;
    }
    .blog-hero__subtitle {
        font-size: 16px;
    }
    .blog-grid {
        grid-template-columns: 1fr;
    }
    .blog-card__title {
        font-size: 18px;
    }
}
</style>

<main class="site-main page-blog">

    <!-- Hero Banner -->
    <section class="blog-hero">
        <div class="container">
            <h1 class="blog-hero__title">Insights &amp; Resources</h1>
            <p class="blog-hero__subtitle">Expert guidance on senior care, assisted living, and supporting your loved ones.</p>
            <nav class="blog-hero__breadcrumbs" aria-label="Breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <span>&rsaquo;</span>
                <strong>Blog</strong>
            </nav>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="blog-section">
        <div class="blog-layout">

            <!-- Main Column -->
            <div class="blog-main">
                <?php if ( have_posts() ) : ?>

                    <div class="blog-grid">
                        <?php while ( have_posts() ) : the_post(); ?>

                            <article <?php post_class( 'blog-card' ); ?>>
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a href="<?php the_permalink(); ?>" class="blog-card__image" aria-label="<?php the_title_attribute(); ?>">
                                        <?php the_post_thumbnail( 'large', array( 'loading' => 'lazy' ) ); ?>
                                    </a>
                                <?php else : ?>
                                    <a href="<?php the_permalink(); ?>" class="blog-card__image" aria-label="<?php the_title_attribute(); ?>">
                                        <div style="width:100%;height:100%;background:linear-gradient(135deg,#FBF5F0,#E8E3DD);display:flex;align-items:center;justify-content:center;">
                                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#B8935A" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="m21 15-5-5L5 21"/></svg>
                                        </div>
                                    </a>
                                <?php endif; ?>

                                <div class="blog-card__body">
                                    <?php
                                    $categories = get_the_category();
                                    if ( ! empty( $categories ) ) :
                                    ?>
                                        <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>" class="blog-card__category">
                                            <?php echo esc_html( $categories[0]->name ); ?>
                                        </a>
                                    <?php endif; ?>

                                    <h2 class="blog-card__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>

                                    <p class="blog-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22, '...' ) ); ?></p>

                                    <div class="blog-card__footer">
                                        <div class="blog-card__meta">
                                            <span class="blog-card__meta-item">
                                                <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="7" r="4"/><path d="M5.5 21a6.5 6.5 0 0 1 13 0"/></svg>
                                                <?php echo esc_html( get_the_author() ); ?>
                                            </span>
                                            <span class="blog-card__meta-item">
                                                <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                                <?php echo esc_html( get_the_date( 'M j, Y' ) ); ?>
                                            </span>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="blog-card__read-more">
                                            Read
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                                        </a>
                                    </div>
                                </div>
                            </article>

                        <?php endwhile; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="blog-pagination">
                        <?php
                        the_posts_pagination( array(
                            'mid_size'  => 2,
                            'prev_text' => '&larr; Previous',
                            'next_text' => 'Next &rarr;',
                        ) );
                        ?>
                    </div>

                <?php else : ?>

                    <div class="blog-no-posts">
                        <h2>No Posts Yet</h2>
                        <p>We are working on new content. Check back soon for expert insights on senior care.</p>
                    </div>

                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <aside class="blog-sidebar">

                <!-- Schedule a Tour CTA -->
                <div class="sidebar-card sidebar-cta">
                    <h3 class="sidebar-card__title">Schedule a Tour</h3>
                    <p>See our Two-Resident Homes&trade; in person and discover the Amy's Eden difference.</p>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="sidebar-cta__btn">Book a Visit</a>
                </div>

                <!-- Phone Card -->
                <div class="sidebar-card sidebar-phone">
                    <span class="sidebar-phone__label">Questions? Call us today</span>
                    <a href="tel:<?php echo esc_attr( $phone_raw ); ?>" class="sidebar-phone__number"><?php echo esc_html( $phone ); ?></a>
                </div>

                <!-- Recent Posts -->
                <div class="sidebar-card">
                    <h3 class="sidebar-card__title">Recent Articles</h3>
                    <ul class="sidebar-recent__list">
                        <?php
                        $recent = new WP_Query( array(
                            'posts_per_page'      => 5,
                            'no_found_rows'       => true,
                            'ignore_sticky_posts' => true,
                        ) );
                        if ( $recent->have_posts() ) :
                            while ( $recent->have_posts() ) : $recent->the_post();
                        ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <span class="sidebar-recent__date"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></span>
                            </li>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
                            <li>No posts yet.</li>
                        <?php endif; ?>
                    </ul>
                </div>

            </aside>

        </div>
    </section>

</main>

<?php get_footer(); ?>
