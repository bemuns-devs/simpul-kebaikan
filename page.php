<?php
/**
 * Template untuk mengatur page
 *
 * @package WP Bluebem
 * @since WP Bluebem 2020
 */
?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
      <?php the_content(); ?>
  <?php endwhile; ?>
 <?php else: ?>
   <h1>Halaman tidak ditemukan!</h1>
<?php endif; ?>
<?php get_footer(); ?>
