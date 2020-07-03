<?php
/**
 * Template untuk single page
 *
 * @package WP Bluebem
 * @since WP Bluebem 2020
 */
?>
<?php get_header(); ?>
<main class="container-lg mtb-bem-2">
  <div class="row">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part('content'); ?>
      <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer( ); ?>
