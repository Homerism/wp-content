<?php
function financial_files(){
#<----------------------CSS------------------------------------->
#wp_enqueue_style('bootstrap', get_theme_file_uri().'/css/bootstrap.min.css' );
#wp_enqueue_style('main_styles', get_theme_file_uri().'/css/style.csss' );
#wp_enqueue_style( 'font-css', get_theme_file_uri().'/css/font-awesome.min.css' );
#wp_enqueue_script( 'animate-css', get_theme_file_uri().'/css/animate.min.css' );
#wp_enqueue_script( 'et-css', get_theme_file_uri().'/css/et-line-font.css' );
#wp_enqueue_script( 'nivo_light-css', get_theme_file_uri().'/css/nivo-lightbox.css' );
#wp_enqueue_script( 'nivo-css', get_theme_file_uri().'/css/nivo_themes/default/default.css' );

#<--------------------JAVA SCRIPT--------------------------------->
#wp_enqueue_script( 'script_1', get_theme_file_uri( '/js/jquery.js' ), array(), '1.0', true );
#wp_enqueue_script( 'script_2', get_theme_file_uri( '/js/bootstrap.min.js' ), array(), '3.3.5', true );
#wp_enqueue_script( 'script_3', get_theme_file_uri( '/js/smoothscroll.js' ), array(), '1.0', true );
#wp_enqueue_script( 'script_4', get_theme_file_uri( '/js/isotope.js' ), array(), '1.0', true );
#wp_enqueue_script( 'script_5', get_theme_file_uri( '/js/imagesloaded.min.js' ), array(), '1.0', true );
#wp_enqueue_script( 'script_6', get_theme_file_uri( '/js/nivo-lightbox.min.js' ), array(), '1.0', true );
#wp_enqueue_script( 'script_7', get_theme_file_uri( '/js/jquery.backstretch.min.js' ), array(), '1.0', true );
#wp_enqueue_script( 'script_8', get_theme_file_uri( '/js/wow.min.js' ), array(), '1.0', true );
#wp_enqueue_script( 'script_9', get_theme_file_uri( '/js/custom.js' ), array(), '1.0', true );
}

function financial_features(){
    add_theme_support('title-tag');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
 }

add_action('wp_enqueue_scripts', 'financial_files'); // type of instruction for WordPress to run, function name to run
add_action('after_setup_theme', 'financial_features');
?>