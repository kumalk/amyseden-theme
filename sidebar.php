<?php
/**
 * Amy's Eden Senior Care - Sidebar Template
 */
$phone = get_theme_mod('amyseden_phone', '(775) 884-3336');
$phone_raw = get_theme_mod('amyseden_phone_raw', '7758843336');
?>

<aside class="page-sidebar" role="complementary">

    <style>
    .page-sidebar {
        display: flex;
        flex-direction: column;
        gap: 28px;
    }
    .sidebar-cta {
        background: linear-gradient(135deg, #EE5F3D, #C12787);
        border-radius: 16px;
        padding: 32px 28px;
        text-align: center;
        color: #FFFFFF;
    }
    .sidebar-cta h3 {
        font-family: 'Playfair Display', serif;
        font-size: 22px;
        font-weight: 700;
        color: #FFFFFF;
        margin: 0 0 10px;
    }
    .sidebar-cta p {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 14px;
        color: rgba(255,255,255,0.9);
        margin: 0 0 20px;
        line-height: 1.6;
    }
    .sidebar-cta .sidebar-phone {
        display: block;
        font-family: 'Playfair Display', serif;
        font-size: 22px;
        font-weight: 700;
        color: #FFFFFF;
        text-decoration: none;
        margin-bottom: 16px;
    }
    .sidebar-cta .sidebar-phone:hover {
        opacity: 0.9;
    }
    .sidebar-cta .sidebar-btn {
        display: inline-block;
        padding: 12px 28px;
        background: #FFFFFF;
        color: #EE5F3D;
        border-radius: 10px;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        transition: transform 0.2s ease;
    }
    .sidebar-cta .sidebar-btn:hover {
        transform: translateY(-2px);
    }
    .sidebar-widget {
        background: #FFFFFF;
        border-radius: 16px;
        padding: 28px;
        box-shadow: 0 2px 20px rgba(0,0,0,0.06);
        border: 1px solid #E8E3DD;
    }
    .sidebar-widget h4 {
        font-family: 'Playfair Display', serif;
        font-size: 18px;
        font-weight: 700;
        color: #2A2A3C;
        margin: 0 0 16px;
        padding-bottom: 12px;
        border-bottom: 2px solid #FBF5F0;
    }
    .sidebar-widget ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .sidebar-widget ul li {
        margin-bottom: 10px;
    }
    .sidebar-widget ul li:last-child {
        margin-bottom: 0;
    }
    .sidebar-widget ul li a {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 14px;
        color: #5C5C6F;
        text-decoration: none;
        display: block;
        padding: 8px 12px;
        border-radius: 8px;
        transition: background 0.2s ease, color 0.2s ease;
    }
    .sidebar-widget ul li a:hover {
        background: #FBF5F0;
        color: #EE5F3D;
    }
    </style>

    <!-- Schedule a Tour CTA -->
    <div class="sidebar-cta">
        <h3>Schedule a Tour</h3>
        <p>See our Two-Resident Homes&trade; in person and meet our caregiving team.</p>
        <a href="tel:<?php echo esc_attr($phone_raw); ?>" class="sidebar-phone"><?php echo esc_html($phone); ?></a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="sidebar-btn">Book a Visit</a>
    </div>

    <!-- Recent Posts -->
    <div class="sidebar-widget">
        <h4>Recent Posts</h4>
        <?php if (is_active_sidebar('sidebar-widgets')) : ?>
            <?php dynamic_sidebar('sidebar-widgets'); ?>
        <?php else : ?>
            <ul>
                <?php
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 5,
                    'post_status' => 'publish',
                ));
                if ($recent_posts) :
                    foreach ($recent_posts as $post) :
                ?>
                    <li><a href="<?php echo esc_url(get_permalink($post['ID'])); ?>"><?php echo esc_html($post['post_title']); ?></a></li>
                <?php
                    endforeach;
                    wp_reset_postdata();
                else :
                ?>
                    <li><a href="<?php echo esc_url(home_url('/assisted-living/')); ?>">Two-Resident Home&trade; Care</a></li>
                    <li><a href="<?php echo esc_url(home_url('/home-care/')); ?>">In-Home Care Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about/')); ?>">Our Story</a></li>
                <?php endif; ?>
            </ul>
        <?php endif; ?>
    </div>

    <!-- Categories -->
    <div class="sidebar-widget">
        <h4>Categories</h4>
        <ul>
            <?php
            $categories = get_categories(array(
                'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => true,
            ));
            if ($categories) :
                foreach ($categories as $category) :
            ?>
                <li><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?> (<?php echo esc_html($category->count); ?>)</a></li>
            <?php
                endforeach;
            else :
            ?>
                <li><a href="<?php echo esc_url(home_url('/assisted-living/')); ?>">Assisted Living</a></li>
                <li><a href="<?php echo esc_url(home_url('/home-care/')); ?>">Home Care</a></li>
            <?php endif; ?>
        </ul>
    </div>

</aside>
