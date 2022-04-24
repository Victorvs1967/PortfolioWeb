<?php

show_admin_bar( false );
remove_action( 'wp_head', 'wp_generator' );
add_theme_support( 'post-thumbnails' );
add_action( 'widgets_init', 'logo_init_widget' );

function logo_init_widget() {
	register_sidebar( 
    array(
      'name'            => 'Logo SVG',
      'id'              => 'logo',
      'description'     => '',
      'class'           => '',
      'before_widget'   => '',
      'after_widget'    => '',
      'before_title'    => '',
      'after_title'     => '',
      'before_sidebar'  => '', // WP 5.6
      'after_sidebar'   => '', // WP 5.6
    ) 
  );
}

// Load up our awesome theme options
require_once ( get_stylesheet_directory() . '/theme-options.php' );