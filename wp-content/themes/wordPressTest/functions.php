<?php

// Добавить действие

  add_action('wp_enqueue_scripts', 'add_scripts_and_styles');

  function add_scripts_and_styles() {

    //Скрипты

  //  wp_deregister_script( 'jquery' );
//
  //  wp_register_script( 'jquery',get_template_directory_uri() .'/assets/js/jquery-3.5.1.min.js',false,null,true );
//
  //  wp_enqueue_script( 'jquery' );
//
  //  wp_enqueue_script( 'main',get_template_directory_uri() .'/assets/js/main.js',array('jquery'),null,'footer' );
//
    //Стили

    wp_enqueue_style('test', get_template_directory_uri().'/assets/css/test.css');

   // wp_enqueue_style( 'main',get_stylesheet_uri(),array('fontello') );

  }

?>