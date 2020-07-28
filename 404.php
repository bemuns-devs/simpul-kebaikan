<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WP Bluebem
 * @since WP Bluebem 2020
 */

get_header(); ?>
<main class="container ptb-bem-1">
  <section class="row d-flex flex-wrap flex-row justify-content-center align-items-center">
    <figure class="col-md-6 mb-0">
      <img src="<?php bloginfo( 'template_url' ) ?>/img/404-animated.svg" alt="Maaf, halaman yang Anda cari tidak dapat kami temukan - Website Resmi BEM UNS">
    </figure>
    <header class="col-md-6 mb-0 text-center text-md-left">
      <h2 class="display-3">Oops!</h2>
      <p class="error__message">
        <?php echo get_theme_mod('error-page_text', 'Maaf, halaman yang Anda cari tidak dapat kami temukan. Barangkali halaman tersebut sudah kami hapus atau alamat URL yang Anda ketik kurang tepat.'); ?>
      </p>
      <a href="<?php echo get_home_url(); ?>" class="error__back-home" title="Kembali ke Halaman Utama">
        Beranda
      </a>
      <a href="http://bemuns.com/informasi/" class="ml-2 error__back-home bg-bem" title="Kunjungi Halaman Informasi">
        Laman Informasi
      </a>
    </header>
  </section>
</main>
<?php get_footer(); ?>
