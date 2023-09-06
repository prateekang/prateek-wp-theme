<?php 

add_action('wp_enqueue_scripts',function(){
 wp_enqueue_style('theme-css', get_stylesheet_directory_uri().'/css/main.css', array(), time() );
});
//  wp_enqueue_style('navbar-css', get_stylesheet_directory_uri().'/css/navbar.css', array(), time() );
add_action('after_setup_theme','theme_setup');

function theme_setup(){
 /* post thumbnail */
    add_theme_support( 'post-thumbnails' );
}