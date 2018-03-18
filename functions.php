<?php

/* css */
function theme_styles() {
  wp_enqueue_style( 'reset_css', get_template_directory_uri() . '/css/reset.css' );
  wp_enqueue_style( 'domster_css', get_template_directory_uri() . '/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


/* google fonts */
function tutsplus_add_google_fonts() {
  wp_register_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700');
  wp_enqueue_style( 'googleFonts');
}
add_action( 'wp_enqueue_scripts', 'tutsplus_add_google_fonts' );

/*=============================
=            Menus            =
=============================*/
add_theme_support( 'menus' );
function domsters_static_register_menu() {
  register_nav_menu('main-menu', __( 'Main Menu') );
}
add_action('init', 'domsters_static_register_menu');

/* enable js theme */
// function theme_js() {
//   wp_enqueue_script( 'tourdates_js', get_template_directory_uri() . '/js/tourdates.js', '', '', true );
// }
// add_action( 'wp_enqueue_scripts', 'theme_js' );



/* widgets */
/* WIDGETS */
function create_widget($name, $id, $description) {
    register_sidebar(array(
      'name' => __( $name ),
      'id'   => $id,
      'description' => __( $description ),
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    ));
}

// don't use camelCase!
create_widget( 'bandlogo', 'logo-full-width', ' Display Logo on all pages');
create_widget( 'textarea', 'single-width', ' Text Area for Home');
create_widget( 'socialicons', 'social-icons', ' HTML for social icons');

show_admin_bar(false);
