<?php
/**
 * Template bagian header
 *
 * @package WP Bluebem
 * @since WP Bluebem 2020
 */
?>
<!doctype html>
<html <?php language_attributes();?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Badan Eksekutif Mahasiswa Universitas Sebelas Maret Surakarta, Kabinet Simpul Kebaikan">
    <meta name="keywords" content="BEM, UNS, Mahasiswa, Rakyat, Indonesia">
    <meta name="author" content="Aksal SF">
    <!-- SEO Tag -->
    <meta property="og:url" content="<?php is_front_page() ? bloginfo( 'url' ) : the_permalink(); ?>" />
    <meta property="og:title" content="<?php is_front_page() ? bloginfo( 'name' ) : wp_title(); ?>" />
    <meta property="og:description" content="<?php is_front_page() ? bloginfo( 'description' ) : the_excerpt(); ?>" />
    <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
    <!-- Favicon -->
    <?php if(has_site_icon()) : ?>
      <link rel="shortcut icon" href="<?php site_icon_url(); ?>">
    <?php endif; ?>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/main.css">
    <title>
      <?php wp_title(); ?>
    </title>
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <div class="preloader-content">
        <img src="<?php echo get_theme_mod( 'brand__image', get_bloginfo( 'template_url' ).'/img/logo.svg' ) ?>" class="img-fluid mb-3" alt="Logo <?php bloginfo( 'name' ); ?>">
        <div class="progress active shadow border-0">
          <div class="progress-bar bg-jingga" role="progressbar" id="bar" style="width: 0%"></div>
        </div>
      </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-bem fixed-top" id="navbar-bem">
      <div class="container">
        <a class="navbar-brand mr-0 p-0" href="<?php echo home_url(); ?>">
          <img src="<?php echo get_theme_mod( 'brand__image', get_bloginfo( 'template_url' ).'/img/logo.svg' ) ?>" alt="Logo <?php bloginfo( 'name' ); ?>">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false">
          <i class="fa fa-bars text-white"></i>
        </button>
        <nav class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <?php
            wp_nav_menu( array(
                'theme_location'  => 'primary',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'nav',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarCollapse',
                'menu_class'      => 'navbar-nav mr-auto text-nav-bem',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
          </ul>
        </nav>
      </div>
    </nav>
    <!-- Navbar End -->
