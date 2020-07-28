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
  <?php if (is_category()): ?>
    <?php
      // Menangkap array yang menyimpan kategori
      $categories = get_the_category();
      // Get the ID of a given category
      $category_id = get_cat_ID( $categories[0]->name );
      // Get the URL of this category
      $category_link = get_category_link( $category_id );
     ?>
    <header class="text-center mb-1 mb-lg-5 category__container">
      <h1>
        <?php
          if ( ! empty( $categories ) ) {
              echo esc_html( $categories[0]->name );
          }
        ?>
      </h1>
      <?php echo category_description( $category_id ) ?>
      <hr class="bg-jingga col-6 col-md-4 mx-auto pb-1 border-0">
    </header>
  <?php endif; ?>
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
