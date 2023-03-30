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
    add_theme_support('post-thumbnails');
    add_image_size('memberLandscape',400, 260, true);
    add_image_size('memberPortrait',200, 300, true);
    add_image_size('pageBanner',1500, 350, true);
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
 }

function custom_paginate_links() { // Customize pagination links with custom CSS and HTML
    global $wp_query;
    $big = 999999999;
    $links = paginate_links( array(
        'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'    => '?paged=%#%',
        'current'   => max( 1, get_query_var('paged') ),
        'total'     => $wp_query->max_num_pages,
        'type'      => 'array',
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
    ) );
    if ( $links ) {
        echo '<ul class="pagination">';
        foreach ( $links as $link ) {
            echo '<li>' . $link . '</li>';
        }
        echo '</ul>';
    }
}

function financial_adjust_queries($query){
    if(!is_admin() AND is_post_type_archive('service')
                   AND $query->is_main_query()){
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        $query->set('posts_per_page', 3);
        
        wp_reset_postdata();
    }
 }

 function financial_adjust_members($query){
    if(!is_admin() AND is_post_type_archive('member')
                   AND $query->is_main_query()){
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        $query->set('posts_per_page', 4);
        
        wp_reset_postdata();
    }
 }

 function financial_adjust_questions($query){
    if(!is_admin() AND is_post_type_archive('question')
                   AND $query->is_main_query()){
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        $query->set('posts_per_page', -1);
        
        wp_reset_postdata();
    }
 }

 /* Roles and Login */

 function redirectSubsToFrontend(){
    $ourCurrentUser = wp_get_current_user();
    $userNumRoles = count($ourCurrentUser->roles);
    $userRole = $ourCurrentUser->roles[0];
    if($userNumRoles == 1 AND $userRole == 'subscriber'){
        wp_redirect(site_url('/'));
        exit;
    }
}

function noSubsAdminBar(){
    if(is_user_logged_in()){
        $ourCurrentUser = wp_get_current_user();
        $userNumRoles = count($ourCurrentUser->roles);
        $userRole = $ourCurrentUser->roles[0];
        if($userNumRoles == 1 AND $userRole == 'subscriber'){
            show_admin_bar(false);
        }
    }
}

function ourHeaderUrl(){
    return esc_url(site_url('/'));
}

function ourLoginCSS(){
    wp_enqueue_style('university_main_styles',get_stylesheet_uri());
    wp_enqueue_style('custom-google-font','https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
 }
   
add_action('pre_get_posts', 'financial_adjust_members');
add_action('pre_get_posts', 'financial_adjust_queries');
add_action('pre_get_posts', 'financial_adjust_questions');
add_action('wp_enqueue_scripts', 'financial_files'); 
add_action('after_setup_theme', 'financial_features');
add_action('after_setup_theme', 'custom_paginate_links');
add_action('admin_init', 'redirectSubsToFrontend');
add_action('wp_loaded', 'noSubsAdminBar');
add_filter('login_headerurl','ourHeaderUrl');
add_action('login_enqueue_scripts','ourLoginCSS');
?>