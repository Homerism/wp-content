<?php


function financial_post_types(){
    register_post_type('event',array(
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
    'supports' => array('title', 'editor', 'thumbnail'),
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

}

add_action('init', 'financial_post_types');
         
?>
