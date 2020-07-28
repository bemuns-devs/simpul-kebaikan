<?php
/**
 * Template untuk halaman depan
 *
 * @package WP Bluebem
 * @since WP Bluebem 2020
 */
?>
<?php get_header(); ?>
<header class="ptb-bem-2 bg-bem pr-3 pl-3">
  <!-- Image Header -->
  <div class="container grid-container hero-container">
    <figure class="overflow-hidden">
      <img src="<?php echo get_theme_mod( 'hero__image', get_bloginfo( 'template_url' ).'/img/logo.svg' ) ?>" class="img-fluid" alt="Logo <?php bloginfo( 'name' ); ?>">
    </figure>
    <section class="text-white">
      <header>
        <h1>
          <?php echo get_theme_mod('hero__heading', get_bloginfo( 'name' )); ?>
        </h1>
      </header>
      <blockquote class="blockquote">
        <?php echo get_theme_mod('hero__caption', get_bloginfo( 'description' )); ?>
      </blockquote>
      <a href="<?php echo get_theme_mod( 'hero__button-url', get_permalink(get_option('page_for_posts')) ) ?>" class="btn-jingga text-uppercase" title="<?php echo get_theme_mod('hero__button-text', 'Narasi Kebaikan'); ?>"><?php echo get_theme_mod('hero__button-text', 'Narasi Kebaikan'); ?></a>
    </section>
  </div>
  <!-- Image Header End -->
</header>
<main>
  <!-- Visi Misi -->
  <div class="m-section-bem">
    <!-- Visi -->
    <?php if (is_active_sidebar( 'visi' )): ?>
      <?php dynamic_sidebar( 'visi' ); ?>
    <?php endif; ?>
    <!-- Misi -->
    <?php if (is_active_sidebar( 'misi' )): ?>
      <?php dynamic_sidebar( 'misi' ); ?>
    <?php endif; ?>
  </div>
  <!-- Platform -->
  <div class="row m-section-bem">
    <!-- platform -->
    <div class="mx-auto my-auto col-lg-6 order-lg-2">
      <figure>
        <img src="<?php echo get_theme_mod('section__image', get_bloginfo( 'template_directory' ) . '/img/icon.png') ?>" class="img-fluid" alt="Logo <?php echo get_theme_mod('section__heading', 'Platform'); ?>">
      </figure>
    </div>
    <section class="ptb-2 col-lg-6 order-lg-1 my-auto text-center text-lg-left">
      <header>
        <h2 class="font-weight-bold text-capitalize border-bottom-jingga">
          <?php echo get_theme_mod('section__heading', 'Platform'); ?>
        </h2>
      </header>
      <blockquote class="blockquote">
        <?php echo get_theme_mod('section__caption', 'Guna mendukung dan mengoptimalkan terwujudnya kolaborasi simpul kebaikan yang progresif, beragam platform hadir dan diharapkan menjadi bagian dari alternatif yang solutif dan inovatif'); ?>
      </blockquote>
      <a href="<?php echo get_theme_mod('section__button-url', get_bloginfo( 'template_url' )); ?>" class="btn-jingga text-uppercase"><?php echo get_theme_mod('section__button-text', 'Lihat Selengkapnya'); ?></a>
    </section>
  </div>
  <!-- Video -->
  <?php if (is_active_sidebar( 'video' )): ?>
    <?php dynamic_sidebar( 'video' ); ?>
  <?php endif; ?>
  <!-- Artikel -->
  <article class="m-section-bem">
    <header class="m-bem">
      <h2 class="text-capitalize text-center font-weight-bold border-bottom-jingga">
        Informasi
      </h2>
    </header>
    <div class="grid-container artikel-container">
      <?php $latest_blog_posts = new WP_Query(array(
        'posts_per_page' => get_theme_mod('post-number_number', '4')
        ));?>
      <?php if($latest_blog_posts->have_posts()) : ?>
        <?php while($latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>
        <section class="artikel shadow">
          <figure class="m-0 artikel-thumbnail">
            <?php if(has_post_thumbnail()) : ?>
                <a href="<?php the_permalink();?>" title="Baca artikel &quot;<?php the_title(); ?>"&quot;>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                </a>
              <?php else: ?>
                <a href="<?php the_permalink();?>" title="Baca artikel &quot;<?php the_title(); ?>"&quot;>
                  <img src="<?php bloginfo( 'template_url' ); ?>/img/thumb.png" alt="<?php the_title(); ?>">
                </a>
            <?php endif; ?>
          </figure>
          <article class="artikel-content">
            <h3 class="h6 font-weight-bold">
              <a href="<?php the_permalink();?>" title="Baca artikel &quot;<?php the_title(); ?>"&quot;>
                <?php the_title(); ?>
              </a>
            </h3>
            <p class="artikel-excerpt">
              <?php the_excerpt(); ?>
            </p>
            <span class="d-flex flex-wrap justify-content-between artikel-meta">
              <span>
                <i class="far fa-calendar"></i>
                <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>" class="ml-1"><?php echo get_the_date('l, j F Y'); ?></time>
              </span>
              <span>
                <i class="fa fa-tags"></i>
                <span class="ml-1">
                  <?php
  									$categories = get_the_category();
  									if ( ! empty( $categories ) ) {
  										echo esc_html( $categories[0]->name );
  									}
  								?>
                </span>
              </span>
            </span>
          </article>
        </section>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="m-section-bem text-center">
      <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="btn-jingga text-uppercase">Baca Lebih Banyak</a>
    </div>
  </article>
  <!-- Partner -->
  <?php if (is_active_sidebar( 'partner' )): ?>
    <?php dynamic_sidebar( 'partner' ); ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
