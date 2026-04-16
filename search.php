<?php
/**
 * Amy's Eden Senior Care - Search Results Template
 *
 * @package AmysEden
 */

get_header();
$phone     = get_theme_mod( 'amyseden_phone', '(775) 884-3336' );
$phone_raw = get_theme_mod( 'amyseden_phone_raw', '7758843336' );
?>

<style>
/* ===================== Search Results Styles ===================== */
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

.blog-section {
    padding: 60px 0 80px;
    background: #FDFAF7;
}
.blog-layout {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
}

.search-count {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    color: #8A8A9A;
    margin-bottom: 32px;
}

.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
    gap: 32px;
}

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

/* No Results */
.search-no-results {
    text-align: center;
    padding: 60px 0;
    max-width: 560px;
    margin: 0 auto;
}
.search-no-results h2 {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    color: #2A2A3C;
    margin: 0 0 12px;
}
.search-no-results p {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 16px;
    color: #5C5C6F;
    line-height: 1.6;
    margin: 0 0 28px;
}
.search-no-results__form {
    display: flex;
    gap: 12px;
    margin-bottom: 32px;
}
.search-no-results__input {
    flex: 1;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    padding: 14px 20px;
    border: 2px solid #E8E3DD;
    border-radius: 12px;
    background: #fff;
    color: #2A2A3C;
    outline: none;
    transition: border-color 0.2s;
}
.search-no-results__input:focus {
    border-color: #EE5F3D;
}
.search-no-results__input::placeholder {
    color: #8A8A9A;
}
.search-no-results__submit {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    font-weight: 700;
    color: #fff;
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    border: none;
    border-radius: 12px;
    padding: 14px 28px;
    cursor: pointer;
    transition: opacity 0.2s, transform 0.2s;
}
.search-no-results__submit:hover {
    opacity: 0.9;
    transform: translateY(-1px);
}
.search-no-results__cta {
    background: #fff;
    border-radius: 16px;
    padding: 28px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.06);
}
.search-no-results__cta p {
    font-size: 15px;
    margin: 0 0 16px;
    color: #5C5C6F;
}
.search-no-results__phone {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: 'Playfair Display', serif;
    font-size: 22px;
    font-weight: 700;
    color: #2A2A3C;
    text-decoration: none;
    transition: color 0.2s;
}
.search-no-results__phone:hover {
    color: #EE5F3D;
}
.search-no-results__phone svg {
    width: 22px;
    height: 22px;
    stroke: #EE5F3D;
    fill: none;
    stroke-width: 2;
}

@media (max-width: 768px) {
    .blog-hero {
        padding: 120px 24px 40px;
    }
    .blog-hero__title {
        font-size: 30px;
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
    .search-no-results__form {
        flex-direction: column;
    }
}
</style>

<main class="site-main page-search">

    <!-- Hero Banner -->
    <section class="blog-hero">
        <div class="container">
            <h1 class="blog-hero__title">Search Results</h1>
            <p class="blog-hero__subtitle">Results for: &ldquo;<?php echo esc_html( get_search_query() ); ?>&rdquo;</p>
            <nav class="blog-hero__breadcrumbs" aria-label="Breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <span>&rsaquo;</span>
                <strong>Search</strong>
            </nav>
        </div>
    </section>

    <!-- Search Results -->
    <section class="blog-section">
        <div class="blog-layout">

            <?php if ( have_posts() ) : ?>

                <p class="search-count">
                    <?php
                    printf(
                        esc_html( _n( '%d result found', '%d results found', $wp_query->found_posts, 'amyseden' ) ),
                        (int) $wp_query->found_posts
                    );
                    ?>
                </p>

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

                <div class="search-no-results">
                    <h2>No Results Found</h2>
                    <p>We could not find any content matching &ldquo;<?php echo esc_html( get_search_query() ); ?>&rdquo;. Try a different search or give us a call.</p>

                    <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-no-results__form">
                        <input type="search" name="s" class="search-no-results__input" placeholder="Try another search..." value="<?php echo esc_attr( get_search_query() ); ?>">
                        <button type="submit" class="search-no-results__submit">Search</button>
                    </form>

                    <div class="search-no-results__cta">
                        <p>Need help? Our care coordinators are happy to assist.</p>
                        <a href="tel:<?php echo esc_attr( $phone_raw ); ?>" class="search-no-results__phone">
                            <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <?php echo esc_html( $phone ); ?>
                        </a>
                    </div>
                </div>

            <?php endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>
