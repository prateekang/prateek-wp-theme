<?php 

add_action('wp_enqueue_scripts',function(){
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', false, null );
wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, null );
wp_enqueue_style( 'sp-core-style', get_template_directory_uri() .'/css/main.css', array('bootstrap', 'font-awesome'), time() );

 wp_enqueue_style('theme-css', get_stylesheet_directory_uri().'/css/main.css', array(), time() );
 wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array('jquery'), null, true );
});
//  wp_enqueue_style('navbar-css', get_stylesheet_directory_uri().'/css/navbar.css', array(), time() );
add_action('after_setup_theme','theme_setup');

function theme_setup(){
 /* post thumbnail */
    add_theme_support( 'post-thumbnails' );

    // add_post_type_support('page','excerpt');
}
