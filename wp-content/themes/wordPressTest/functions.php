<?php
  // Добавить действие для подключения скриптов и стилей
  add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
  // Добавляем кастомный логотип в настройки админки
  add_theme_support('custom-logo');
  // Добавляем действие для подключения меню
  add_action( 'after_setup_theme','main_menu' );
  // Добавляем выбор изображения к записи в админку
  add_theme_support('post-thumbnails', array('post'));
  // Регистрация миниатюры изображения
  add_image_size('adv_thumbnail', 100, 100, true);

  // Подключаем скрипты и стили
  function add_scripts_and_styles() {
    //Скрипты
  //  wp_deregister_script( 'jquery' );
  //  wp_register_script( 'jquery',get_template_directory_uri() .'/assets/js/jquery-3.5.1.min.js',false,null,true );
  //  wp_enqueue_script( 'jquery' );
  //  wp_enqueue_script( 'main',get_template_directory_uri() .'/assets/js/main.js',array('jquery'),null,'footer' );

    //Стили
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css');
    wp_enqueue_style('header', get_template_directory_uri().'/assets/css/header.css',array('main'));
    wp_enqueue_style('footer', get_template_directory_uri().'/assets/css/footer.css',array('main'));

  }

  // Регистрируем меню
  function main_menu() {
    register_nav_menu( 'top','Меню в шапке' );
    register_nav_menu( 'bottom','Меню в подвале' );
  }
?>
