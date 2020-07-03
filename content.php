<?php
/**
 * Template untuk mengatur tampilan artikel dan daftar artikel
 *
 * @package WP Bluebem
 * @since WP Bluebem 2020
 */
?>
<?php if (is_single()): ?>
    <article class="col-xl-8 p-bem-0">
    <header class="mt-5 mb-5 prl-bem-1 text-center">
      <span class="text-uppercase h6 kategori-artikel">
        <?php
          // Menangkap array yang menyimpan kategori
          $categories = get_the_category();
          // Get the ID of a given category
          $category_id = get_cat_ID( $categories[0]->name );
          // Get the URL of this category
          $category_link = get_category_link( $category_id );
         ?>
        <a href="<?php echo esc_url( $category_link ); ?>">
          <?php
            if ( ! empty( $categories ) ) {
                echo esc_html( $categories[0]->name );
            }
          ?>
        </a>
      </span>
      <h1 class="text-capitalize mb-5 mt-5">
        <?php the_title(); ?>
      </h1>
      <p class="h6 text-dark">
        <span class="d-block mb-3">
          <?php the_author(); ?>
        </span>
        <date datetime="<?php echo get_the_date( 'Y-m-d' ); ?>" class="d-block mb-3">
          <?php echo get_the_date( 'l, j F Y' ); ?>
        </date>
      </p>
    </header>
    <figure class="figure overflow-hidden">
      <?php if(has_post_thumbnail()) : ?>
      <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo myprefix_get_attachment_alt( $attachment_ID ); ?>" title="<?php the_title(); ?>" class="img-fluid">
      <?php else : ?>
        <img src="<?php bloginfo( 'template_url' ); ?>/img/thumb.png" alt="<?php echo myprefix_get_attachment_alt( $attachment_ID ); ?>" title="<?php the_title(); ?>" class="img-fluid">
      <?php endif; ?>
      <figcaption>
        <?php echo get_the_post_thumbnail_caption(); ?>
      </figcaption>
    </figure>
    <article class="artikel-body">
      <?php the_content(); ?>
    </article>
    <footer class="artikel-footer">
      <div class="d-flex flex-column text-center text-md-left flex-wrap mtb-2">
        <?php
          $post_tags = get_the_tags();
          if ( $post_tags ) :
            foreach( $post_tags as $tag ):
        ?>
        <span class="artikel-label">
          <a href="<?php echo get_tag_link($tag->term_id); ?>">
            <i class="fa fa-hashtag"></i>
            <span><?php echo $tag->name; ?></span>
          </a>
        </span>
        <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <div class="d-flex justify-content-center flex-wrap artikel-share-container mtb-2">
        <span class="h6 mb-md-0 footer-button-text">Bagikan: </span>
        <span class="footer-button artikel-share-button-facebook">
          <div id="fb-root"></div>
          <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v7.0" nonce="SkCwgioT"></script>
          <?php
            $linksf = rawurlencode(get_permalink());
           ?>
          <div data-href="<?php echo $linksf; ?>" data-layout="button_count" data-size="large">
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $linksf; ?>" title="Bagikan ke Facebook">
              <i class="fab fa-facebook"></i>
              <span>Bagikan</span>
            </a>
          </div>
        </span>
        <span class="footer-button artikel-share-button-whatsapp">
          <a href="https://wa.me/?text=<?php echo $linksf; ?>" target="_blank" title="Bagikan ke WhatsApp">
            <i class="fab fa-whatsapp"></i>
            <span>Bagikan</span>
          </a>
        </span>
        <span class="footer-button artikel-share-button-twitter">
          <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" target="_blank" data-size="large" data-show-count="false" title="Bagikan ke Twitter">
            <i class="fab fa-twitter"></i>
            <span>Tweet</span>
          </a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </span>
        <span class="footer-button artikel-share-button-telegram">
          <a href="https://t.me/share/url?url=<?php echo $linksf; ?>&text=<?php echo rawurlencode(get_the_title()); ?>" target="_blank"  title="Bagikan ke Telegram">
            <i class="fab fa-telegram"></i>
            <span>Bagikan</span>
          </a>
        </span>
      </div>
    </footer>
    <?php comments_template(); ?>
  </article>
  <?php else : ?>
    <article class="grid-container archive-container">
      <figure class="rounded overflow-hidden">
        <a href="<?php the_permalink(); ?>">
          <?php if(has_post_thumbnail( )) : ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo myprefix_get_attachment_alt( $attachment_ID ); ?>" class="img-fluid" title="Baca &quot;<?php the_title(); ?>&quot;">
          <?php else : ?>
            <img src="<?php bloginfo( 'template_url' ); ?>/img/thumb.png" alt="<?php echo myprefix_get_attachment_alt( $attachment_ID ); ?>" class="img-fluid" title="Baca &quot;<?php the_title(); ?>&quot;">
          <?php endif; ?>
        </a>
      </figure>
      <section class="archive-body">
        <header>
          <h2>
            <a href="<?php the_permalink() ?>" title="Laporan 100 Hari Kerja BEM UNS">
              <?php the_title(); ?>
            </a>
          </h2>
        </header>
        <p>
          <?php the_excerpt(); ?>
        </p>
        <span class="d-flex flex-wrap justify-content-between mt-3 artikel-meta">
          <span>
            <i class="far fa-calendar"></i>
            <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>" class="ml-1">
              <?php echo get_the_date( 'l, j F Y' ); ?>
            </time>
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
      </section>
    </article>
<?php endif; ?>
