<?php
function financial_files(){
#<----------------------CSS------------------------------------->
wp_enqueue_style('bootstrap',get_stylesheet_directory_uri().'/css/bootstrap.min.css');
wp_enqueue_style('main_styles',get_stylesheet_directory_uri().'/css/style.csss');
wp_enqueue_style( 'font-css',get_stylesheet_directory_uri().'/css/font-awesome.min.css');
wp_enqueue_script( 'animate-css',get_stylesheet_directory_uri().'/css/animate.min.css');
wp_enqueue_script( 'et-css',get_stylesheet_directory_uri().'/css/et-line-font.css');
wp_enqueue_script( 'nivo_light-css',get_stylesheet_directory_uri().'/css/nivo-lightbox.css');
wp_enqueue_script( 'nivo-css',get_stylesheet_directory_uri().'/css/nivo_themes/default/default.css');


#<--------------------JAVA SCRIPT--------------------------------->

wp_register_script( 'script_1', get_stylesheet_directory_uri() . '/js/jquery.js', array( 'jquery' ), '1.0', true );
wp_register_script( 'script_2', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.0', true );
wp_register_script( 'script_3', get_stylesheet_directory_uri() . '/js/smoothscroll.js', array( 'jquery' ), '1.0', true );
wp_register_script( 'script_4', get_stylesheet_directory_uri() . '/js/isotope.js', array( 'jquery' ), '1.0', true );
wp_register_script( 'script_5', get_stylesheet_directory_uri() . '/js/imagesloaded.min.js', array( 'jquery' ), '1.0', true );
wp_register_script( 'script_6', get_stylesheet_directory_uri() . '/js/nivo-lightbox.min.js', array( 'jquery' ), '1.0', true );
wp_register_script( 'script_7', get_stylesheet_directory_uri() . '/js/jquery.backstretch.min.js', array( 'jquery' ), '1.0', true );
wp_register_script( 'script_8', get_stylesheet_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '1.0', true );
wp_register_script( 'script_9', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0', true );
wp_enqueue_script( 'script_1' );
wp_enqueue_script( 'script_2' );
wp_enqueue_script( 'script_3' );
wp_enqueue_script( 'script_4' );
wp_enqueue_script( 'script_5' );
wp_enqueue_script( 'script_6' );
wp_enqueue_script( 'script_7' );
wp_enqueue_script( 'script_8' );
wp_enqueue_script( 'script_9' );
}

function health_features(){
    add_theme_support('title-tag');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
 }

add_action('wp_enqueue_scripts', 'financial_files'); // type of instruction for WordPress to run, function name to run
add_action('after_setup_theme', 'health_features');
?>