<?php

function customized_files() {
  wp_enqueue_script( 'main-customized-js', get_theme_file_uri() . 'dist/script.js', NULL, '1.0', false );
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&family=Roboto:wght@400;700;900&display=swap');
  wp_enqueue_style( 'customized_main_styles', get_theme_file_uri('style.css' ));
  wp_enqueue_style( 'customized_styles', get_theme_file_uri('main.css' ));
}

add_action('wp_enqueue_scripts', 'customized_files');

function defer_parsing_of_js( $url ) {
  if ( is_user_logged_in() ) return $url; //don't break WP Admin
  if ( FALSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );

function add_comment_to_body_open() {
printf( "<!-- THIS SHOULD RENDER AFTER THE BODY TAG OPENS --" );
}
add_action( 'wp_body_open', 'add_comment_to_body_open' );

function recruitment_features() {
  add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'recruitment_features');

function recruitment_theme_menus() {
  register_nav_menus(
    array(
      'header-menu'  =>  'Header Menu'
    )
    );
}
add_action( 'init', 'recruitment_theme_menus');