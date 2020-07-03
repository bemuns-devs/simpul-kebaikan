<?php
/**
 * Template untuk menampilkan daftar posting berdasarkan kategori dan label
 *
 * @package WP Bluebem
 * @since WP Bluebem 2020
 */
?>
<?php get_header(); ?>
<main class="container-lg mtb-bem-2">
  <div class="row">
    <div class="col-xl-8 p-archive">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <?php get_template_part('content'); ?>
        <?php endwhile; ?>
        <div class="nav-next alignright">
          <?php next_posts_link( 'Berikutnya' ); ?>
        </div>
        <div class="nav-previous alignleft">
          <?php previous_posts_link( 'Kembali' ); ?>
        </div>
      <?php else : ?>
        <p>
          Maaf, tidak ada artikel di sini.
        </p>
      <?php endif; ?>
    </div>
<?php get_footer( ); ?>
