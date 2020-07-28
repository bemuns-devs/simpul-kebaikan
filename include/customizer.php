<?php
  function bluebem_customizer_register($wp_customize) {
    // Hero Section
    $wp_customize -> add_section('hero', array(
      'title' => __('Hero Header', 'bluebem'),
      'description' => sprintf(__('Kustomisasi bagian header website BEM UNS', 'bluebem')),
      'priority' => 130
    ));

    // Heading Image
    $wp_customize -> add_setting('hero__image', array(
      'default' => get_bloginfo( 'template_directory' ) . '/img/logo.svg',
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control(
      new WP_Customize_Image_Control($wp_customize, 'hero__image', array(
        'label' => __('Hero Image', 'bluebem'),
        'section' => 'hero',
        'setting' => 'hero__image',
        'priority' => 1
      ))
    );

    // Heading Text
    $wp_customize -> add_setting('hero__heading', array(
      'default' => _x( get_bloginfo( 'name' ), 'bluebem' ),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('hero__heading', array(
      'label' => __('Heading', 'bluebem'),
      'section' => 'hero',
      'priority' => 2
    ));

    // Heading Caption

    $wp_customize -> add_setting('hero__caption', array(
      'default' => _x( get_bloginfo( 'description' ), 'bluebem' ),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('hero__caption', array(
      'label' => __('Caption', 'bluebem'),
      'type' => 'textarea',
      'section' => 'hero',
      'priority' => 3
    ));

    // Button Text
    $wp_customize -> add_setting('hero__button-text', array(
      'default' => _x( 'Narasi Kebaikan', 'bluebem' ),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('hero__button-text', array(
      'label' => __('Button Text', 'bluebem'),
      'section' => 'hero',
      'priority' => 4
    ));

    // Button Link
    $wp_customize -> add_setting('hero__button-url', array(
      'default' => _x( get_permalink(get_option('page_for_posts')), 'bluebem' ),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('hero__button-url', array(
      'label' => __('Button URL', 'bluebem'),
      'section' => 'hero',
      'priority' => 5
    ));

    // Platform Section
    $wp_customize -> add_section('section', array(
      'title' => __('Section', 'bluebem'),
      'description' => sprintf(__('Kustomisasi bagian section website BEM UNS', 'bluebem')),
      'priority' => 140
    ));

    // Section Heading
    $wp_customize -> add_setting('section__heading', array(
      'default' => _x( 'Platform', 'bluebem' ),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('section__heading', array(
      'label' => __('Heading', 'bluebem'),
      'section' => 'section',
      'priority' => 1
    ));

    // Section Caption
    $wp_customize -> add_setting('section__caption', array(
      'default' => _x( 'Guna mendukung dan mengoptimalkan terwujudnya kolaborasi simpul kebaikan yang progresif, beragam platform hadir dan diharapkan menjadi bagian dari alternatif yang solutif dan inovatif', 'bluebem' ),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('section__caption', array(
      'label' => __('Caption', 'bluebem'),
      'type' => 'textarea',
      'section' => 'section',
      'priority' => 2
    ));

    // Button Text
    $wp_customize -> add_setting('section__button-text', array(
      'default' => _x( 'Lihat Selengkapnya', 'bluebem' ),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('section__button-text', array(
      'label' => __('Button Text', 'bluebem'),
      'section' => 'section',
      'priority' => 3
    ));

    // Button Link
    $wp_customize -> add_setting('section__button-url', array(
      'default' => _x( get_bloginfo( 'template_url' ), 'bluebem' ),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('section__button-url', array(
      'label' => __('Button URL', 'bluebem'),
      'section' => 'section',
      'priority' => 4
    ));

    // Section Image
    $wp_customize -> add_setting('section__image', array(
      'default' => get_bloginfo( 'template_directory' ) . '/img/icon.png',
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control(
      new WP_Customize_Image_Control($wp_customize, 'section__image', array(
        'label' => __('Section Image', 'bluebem'),
        'section' => 'section',
        'setting' => 'section__image',
        'priority' => 5
      ))
    );

    // Change Nav Brand and Loader
    $wp_customize -> add_section('brand', array(
      'title' => __('Logo', 'bluebem'),
      'description' => sprintf(__('Mengubah gambar logo BEM UNS pada Navbar dan Loader', 'bluebem')),
      'priority' => 150
    ));

    // Nav Brand and Loader Image
    $wp_customize -> add_setting('brand__image', array(
      'default' => get_bloginfo( 'template_directory' ) . '/img/logo.svg',
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control(
      new WP_Customize_Image_Control($wp_customize, 'brand__image', array(
        'label' => __('Nav Brand and Loader Logo', 'bluebem'),
        'section' => 'brand',
        'setting' => 'brand__image',
        'priority' => 1
      ))
    );

    // Float Button
    $wp_customize -> add_section('float-btn', array(
      'title' => __('Float Button', 'bluebem'),
      'description' => sprintf(__('Kustomisasi float button website BEM UNS', 'bluebem')),
      'priority' => 160
    ));

    // Float Button Icon
    $wp_customize -> add_setting('float-btn__icon', array(
      'default' => _x( 'fab fa-whatsapp', 'bluebem' ),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('float-btn__icon', array(
      'label' => __('FontAwesome Icon', 'bluebem'),
      'section' => 'float-btn',
      'priority' => 1
    ));

    // Float Button Text
    $wp_customize -> add_setting('float-btn__text', array(
      'default' => _x( 'Yuk hubungi UNS Care!', 'bluebem' ),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('float-btn__text', array(
      'label' => __('Teks', 'bluebem'),
      'section' => 'float-btn',
      'priority' => 2
    ));

    // Float Button Link
    $wp_customize -> add_setting('float-btn__link', array(
      'default' => _x( 'http://bemuns.com/uns-care/', 'bluebem' ),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('float-btn__link', array(
      'label' => __('Float Button URL', 'bluebem'),
      'section' => 'float-btn',
      'priority' => 3
    ));

    // Float Button Color Picker
    $wp_customize -> add_setting('float-btn__color', array(
      'default' => _x( '#25D366', 'bluebem' ),
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
        $wp_customize,
        'float-btn__color',
        array(
            'label'      => __( 'Float Button Color', 'bluebem' ),
            'section'    => 'float-btn',
            'settings'   => 'float-btn__color',
        ) )
    );

    // Error Page
    $wp_customize -> add_section('error-page', array(
      'title' => __('Error Page', 'bluebem'),
      'description' => sprintf(__('Mengubah pesan error di halaman page not found!', 'bluebem')),
      'priority' => 170
    ));

    // Error Page Message
    $wp_customize -> add_setting('error-page_text', array(
      'default' => _x( 'Maaf, halaman yang Anda cari tidak dapat kami temukan. Barangkali halaman tersebut sudah kami hapus atau alamat URL yang Anda ketik kurang tepat.', 'bluebem' ),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('error-page_text', array(
      'label' => __('Error Page Message', 'bluebem'),
      'section' => 'error-page',
      'type' => 'textarea',
      'priority' => 1
    ));

    // Post Number in Front Page
    $wp_customize -> add_section('post-number', array(
      'title' => __('Jumlah Artikel Halaman Utama', 'bluebem'),
      'description' => sprintf(__('Mengubah jumlah postingan yang ditampilkan pada halaman utama (exclude pos yang disematkan)', 'bluebem')),
      'priority' => 180
    ));

    // Post Number
    $wp_customize -> add_setting('post-number_number', array(
      'default' => _x( '4', 'bluebem' ),
      'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('post-number_number', array(
      'label' => __('Jumlah Pos Halaman Utama', 'bluebem'),
      'section' => 'post-number',
      'priority' => 1
    ));
  }

  add_action( 'customize_register', 'bluebem_customizer_register' );
