<?php
/**
 * Amy's Eden Senior Care - Comments Template
 */

// Prevent direct access
if (post_password_required()) {
    return;
}
?>

<style>
.comments-area {
    margin-top: 60px;
    padding-top: 40px;
    border-top: 2px solid #FBF5F0;
}
.comments-title {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    font-weight: 700;
    color: #2A2A3C;
    margin-bottom: 32px;
}
.comment-list {
    list-style: none;
    margin: 0;
    padding: 0;
}
.comment-list .comment {
    margin-bottom: 24px;
}
.comment-list .comment .comment-body {
    background: #FFFFFF;
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    border: 1px solid #E8E3DD;
}
.comment-list .comment .comment-meta {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
}
.comment-list .comment .comment-meta .avatar {
    border-radius: 50%;
    width: 44px;
    height: 44px;
}
.comment-list .comment .comment-author {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    font-weight: 700;
    color: #2A2A3C;
}
.comment-list .comment .comment-author a {
    color: #2A2A3C;
    text-decoration: none;
}
.comment-list .comment .comment-author a:hover {
    color: #EE5F3D;
}
.comment-list .comment .comment-metadata {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 12px;
    color: #8A8A9A;
}
.comment-list .comment .comment-metadata a {
    color: #8A8A9A;
    text-decoration: none;
}
.comment-list .comment .comment-content {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    color: #5C5C6F;
    line-height: 1.7;
}
.comment-list .comment .comment-content p {
    margin: 0 0 12px;
}
.comment-list .comment .reply a {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    font-weight: 600;
    color: #EE5F3D;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.comment-list .comment .reply a:hover {
    color: #C12787;
}
.comment-list .children {
    list-style: none;
    margin: 16px 0 0 32px;
    padding: 0;
}

/* Comment Form */
.comment-respond {
    margin-top: 40px;
}
.comment-reply-title {
    font-family: 'Playfair Display', serif;
    font-size: 24px;
    font-weight: 700;
    color: #2A2A3C;
    margin-bottom: 20px;
}
.comment-reply-title small a {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    font-weight: 600;
    color: #EE5F3D;
    text-decoration: none;
    margin-left: 12px;
}
.comment-form {
    background: #FFFFFF;
    border-radius: 16px;
    padding: 32px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    border: 1px solid #E8E3DD;
}
.comment-form label {
    display: block;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    font-weight: 600;
    color: #2A2A3C;
    margin-bottom: 6px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.comment-form input[type="text"],
.comment-form input[type="email"],
.comment-form input[type="url"],
.comment-form textarea {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid #E8E3DD;
    border-radius: 10px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    color: #2A2A3C;
    background: #FDFAF7;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
    box-sizing: border-box;
    margin-bottom: 16px;
}
.comment-form input:focus,
.comment-form textarea:focus {
    outline: none;
    border-color: #EE5F3D;
    box-shadow: 0 0 0 3px rgba(238, 95, 61, 0.1);
}
.comment-form textarea {
    min-height: 140px;
    resize: vertical;
}
.comment-form .form-submit input[type="submit"] {
    padding: 14px 36px;
    background: linear-gradient(135deg, #EE5F3D, #C12787);
    color: #FFFFFF;
    border: none;
    border-radius: 12px;
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    font-weight: 700;
    cursor: pointer;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.comment-form .form-submit input[type="submit"]:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(238, 95, 61, 0.3);
}
.comment-notes,
.logged-in-as {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 13px;
    color: #8A8A9A;
    margin-bottom: 20px;
}
.logged-in-as a {
    color: #EE5F3D;
    text-decoration: none;
}
.no-comments {
    font-family: 'Plus Jakarta Sans', sans-serif;
    font-size: 15px;
    color: #8A8A9A;
    text-align: center;
    padding: 40px 0;
}

@media (max-width: 768px) {
    .comment-list .children { margin-left: 16px; }
    .comment-form { padding: 24px; }
}
</style>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ('1' === $comment_count) {
                printf(
                    esc_html__('One Response to &ldquo;%s&rdquo;', 'amyseden'),
                    get_the_title()
                );
            } else {
                printf(
                    esc_html(_n(
                        '%1$s Response to &ldquo;%2$s&rdquo;',
                        '%1$s Responses to &ldquo;%2$s&rdquo;',
                        $comment_count,
                        'amyseden'
                    )),
                    number_format_i18n($comment_count),
                    get_the_title()
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style' => 'ol',
                'short_ping' => true,
                'avatar_size' => 44,
            ));
            ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation" role="navigation">
                <div style="display: flex; justify-content: space-between; padding: 16px 0;">
                    <div><?php previous_comments_link(esc_html__('&larr; Older Comments', 'amyseden')); ?></div>
                    <div><?php next_comments_link(esc_html__('Newer Comments &rarr;', 'amyseden')); ?></div>
                </div>
            </nav>
        <?php endif; ?>

    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'amyseden'); ?></p>
    <?php endif; ?>

    <?php
    comment_form(array(
        'title_reply' => __('Leave a Comment', 'amyseden'),
        'title_reply_to' => __('Reply to %s', 'amyseden'),
        'cancel_reply_link' => __('Cancel Reply', 'amyseden'),
        'label_submit' => __('Post Comment', 'amyseden'),
        'comment_notes_before' => '<p class="comment-notes">' . __('Your email address will not be published. Required fields are marked *', 'amyseden') . '</p>',
    ));
    ?>

</div>
