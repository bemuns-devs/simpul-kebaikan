<?php
/**
 * Template untuk mengatur footer
 *
 * @package WP Bluebem
 * @since WP Bluebem 2020
 */
?>

<?php if (!is_front_page() && !is_page() && !is_404()): ?>
    <aside class="col-xl-4">
      <?php if(is_active_sidebar( 'sidebar' )) : ?>
      <?php dynamic_sidebar( 'sidebar' ); ?>
      <?php endif; ?>
    </aside>
  </div>
</main>
<?php endif; ?>
<footer class="bg-bem">
  <div class="container p-5">
    <div class="row">
      <!-- Tentang Kami -->
      <?php if(is_active_sidebar( 'tentang' )) : ?>
      <?php dynamic_sidebar( 'tentang' ); ?>
      <?php endif; ?>
      <!-- Media Sosial -->
      <?php if(is_active_sidebar( 'medsos' )) : ?>
      <?php dynamic_sidebar( 'medsos' ); ?>
      <?php endif; ?>
    </div>
  </div>
  <a href="<?php echo get_theme_mod('float-btn__link', 'http://bemuns.com/uns-care/'); ?>" class="unscare-float-btn d-flex justify-content-center align-items-center" data-toggle="tooltip" data-placement="top" title="<?php echo get_theme_mod('float-btn__text', 'Hubungi Admin'); ?>" style="background-color:<?php echo get_theme_mod('float-btn__color', '#25D366'); ?>;">
    <i class="<?php echo get_theme_mod('float-btn__icon', 'fab fa-whatsapp'); ?>"></i>
  </a>
</footer>
<?php wp_footer(); ?>
</body>
</html>
