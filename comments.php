<?php
/**
 * Template untuk mengubah form komentar
 *
 * @package WP Bluebem
 * @since WP Bluebem 2020
 */
?>
<aside class="komentar mr-3 ml-3">
  <h2>Komentar</h2>
  <?php
    $args = array(
        'walker'            => null,
        'max_depth'         => '',
        'style'             => 'ul',
        'callback'          => null,
        'end-callback'      => null,
        'type'              => 'all',
        'page'              => '',
        'per_page'          => '',
        'avatar_size'       => 32,
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
        'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
    );
    wp_list_comments($args, $comments);

    $comments_args = array(
            // Change the title of send button
            'label_submit' => __( 'Kirim', 'textdomain' ),
            // Change the title of the reply section
            'title_reply' => __( 'Tulis balasan atau komentar', 'textdomain' ),
            // Remove "Text or HTML to be displayed after the set of comment fields".
            'comment_notes_after' => '',
            // Redefine your own textarea (the comment body).
            'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
    );
    comment_form( $comments_args );
   ?>
</aside>
