<?php

function financial_post_types(){
    register_post_type('event',array(
        'capability_type' => 'event', 
        'map_meta_cap'=> true,  
        'rewrite'=> array('slug' => 'events' ),
        'supports' => array('title', 'editor','excerpt'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
        'name' => "Events",
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'all_items' => 'All Events',
        'singular_name' => "Event"
    ),
    'menu_icon' => 'dashicons-calendar'
));

register_post_type('service',array(
    'capability_type' => 'service',
    'map_meta_cap'=> true,
    'rewrite'=> array('slug' => 'services' ),
    'supports' => array('title', 'editor','excerpt'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
    'name' => "Services",
    'add_new_item' => 'Add New Service',
    'edit_item' => 'Edit Service',
    'all_items' => 'All Services',
    'singular_name' => "Service"
),
'menu_icon' => 'dashicons-bank'
));

register_post_type('member',array(
    'rewrite'=> array('slug' => 'members' ),
    'supports' => array('title', 'editor', 'thumbnail','excerpt'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
    'name' => "Members",
    'add_new_item' => 'Add New Member',
    'edit_item' => 'Edit Member',
    'all_items' => 'All Members',
    'singular_name' => "Member"
    ),
    'menu_icon' => 'dashicons-businessperson'
    ));

    register_post_type('question',array(
        'rewrite'=> array('slug' => 'questions' ),
        'supports' => array('title', 'editor', 'thumbnail','excerpt'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
        'name' => "Questions",
        'add_new_item' => 'Add New Question',
        'edit_item' => 'Edit Question',
        'all_items' => 'All Question',
        'singular_name' => "Question"
        ),
        'menu_icon' => 'dashicons-arker'
        ));
}

add_action('init', 'financial_post_types');
         
?>
