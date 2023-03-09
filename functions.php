<?php

function customized_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&family=Roboto:wght@400;700;900&display=swap');
  wp_enqueue_style( 'customized_main_styles', get_theme_file_uri('style.css' ));
  wp_enqueue_style( 'customized_styles', get_theme_file_uri('main.css' ));
  wp_enqueue_script( 'main_customized_js', get_stylesheet_directory_uri() . '/dist/script.js', NULL, '1.0', false );
}

add_action('wp_enqueue_scripts', 'customized_files');


function recruitment_features() {
  add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'recruitment_features');

function recruitment_theme_menus() {
  register_nav_menus(
    array(
      'header-menu'  =>  'Header Menu',
      'footer-menu'  =>  'Footer Menu'
    )
    );
}
add_action( 'init', 'recruitment_theme_menus');

wp_deregister_script('jquery'); 
wp_register_script('jquery', '', '', '', true);




// DEFER javascript
function defer_parsing_of_js ( $url ) {
  if ( FALSE === strpos( $url, '.js' ) ) return $url;
  if ( strpos( $url, 'jquery.js' ) ) return $url;
  return "$url' defer ";
  }
  add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );