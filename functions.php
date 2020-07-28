<?php
/**
 * Template function untuk kustomisasi backend wordpress
 *
 * @package WP Bluebem
 * @since WP Bluebem 2020
 */
?>
<?php

// Menambahkan fitur pada website
function bluebem_theme_setup()
{
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'post-formats', array('gallery'));
	// 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'
}

add_action( 'after_setup_theme', 'bluebem_theme_setup' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Bluebem Nav' ),
) );

// Mengubah panjang kutipan
function set_excerpt_length()
{
	return 7;
}

add_filter( 'excerpt_length', 'set_excerpt_length' );

// Menambahkan atribut alt
function myprefix_get_attachment_alt( $attachment_ID ) {

	// Get ALT
	$thumb_alt = get_post_meta( $attachment_ID, '_wp_attachment_image_alt', true );

	// No ALT supplied get attachment info
	if ( empty( $thumb_alt ) )
		$attachment = get_post( $attachment_ID );

	// Use caption if no ALT supplied
	if ( empty( $thumb_alt ) )
		$thumb_alt = $attachment->post_excerpt;

	// // Use title if no caption supplied either
	// if ( empty( $thumb_alt ) )
	// 	$thumb_alt = $attachment->post_title;

	// Return ALT
	return esc_attr( trim( strip_tags( $thumb_alt ) ) );
}

// Change Comment Format Date Format
function my_change_comment_date_format( $date, $date_format, $comment ) {
	return date( 'l, j F Y', strtotime( $comment->comment_date ) );
}
add_filter( 'get_comment_date', 'my_change_comment_date_format', 10, 3 );

// Widget
function bluebem_init_widget($id) {
	// Sidebar
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<section class="widget-container">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-heading">',
		'after_title' => '<hr></h2>'
	));

	// Visi
	register_sidebar(array(
		'name' => 'Visi',
		'id' => 'visi',
		'before_widget' => '<section class="m-bem">',
		'after_widget' => '</section>',
		'before_title' => '<header class="m-bem"><h2 class="text-capitalize text-center font-weight-bold border-bottom-jingga">',
		'after_title' => '</h2></header>'
	));

	// Misi
	register_sidebar(array(
		'name' => 'Misi',
		'id' => 'misi',
		'before_widget' => '<section class="m-bem">',
		'after_widget' => '</section>',
		'before_title' => '<header class="m-bem"><h2 class="text-capitalize text-center font-weight-bold border-bottom-jingga">',
		'after_title' => '</h2></header>'
	));

	// Video
	register_sidebar(array(
		'name' => 'Video',
		'id' => 'video',
		'before_widget' => '<section class="m-bem">',
		'after_widget' => '</section>',
		'before_title' => '<header class="m-bem"><h2 class="text-capitalize text-center font-weight-bold border-bottom-jingga">',
		'after_title' => '</h2></header>'
	));

	// Partner
	register_sidebar(array(
		'name' => 'Partner',
		'id' => 'partner',
		'before_widget' => '<section class="m-section-bem pt-5 pb-5">',
		'after_widget' => '</section>',
		'before_title' => '<header class="m-bem"><h2 class="text-capitalize text-center font-weight-bold border-bottom-jingga">',
		'after_title' => '</h2></header>'
	));

	// Tentang Kami
	register_sidebar(array(
		'name' => 'Tentang Kami',
		'id' => 'tentang',
		'before_widget' => '<section class="col-md-6 text-white">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="h6 text-capitalize font-weight-bold">',
		'after_title' => '</h2>'
	));

	// Media Sosial
	register_sidebar(array(
		'name' => 'Media Sosial',
		'id' => 'medsos',
		'before_widget' => '<div class="col-md-6 my-auto">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="h6 text-capitalize font-weight-bold d-none">',
		'after_title' => '</h2>'
	));
}

add_action('widgets_init', 'bluebem_init_widget');

// Theme Customizer
// Customizer File
require get_template_directory() . '/include/customizer.php';
