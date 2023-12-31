<?php

function university_post_types() {
    //Event post type
    register_post_type('event', [
        'has_archive' => true,
        'rewrite' => ['slug' => 'events'],
        'public' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'show_in_rest' => false, //to show editor in new format false will show old format
        'supports' => ['title', 'editor', 'excerpt'],
        'labels' => [
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ],
    ]);

    //Program post type
    register_post_type('program', [
        'has_archive' => true,
        'rewrite' => ['slug' => 'programs'],
        'public' => true,
        'menu_icon' => 'dashicons-awards',
        'show_in_rest' => false,
        'supports' => ['title', 'editor'],
        'labels' => [
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        ],
    ]);

    //Professor post type
    register_post_type('professor', [
        'has_archive' => true,
        'rewrite' => ['slug' => 'professors'],
        'public' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'show_in_rest' => false,
        'supports' => ['title', 'editor', 'thumbnail'],
        'labels' => [
            'name' => 'Professors',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'All Professors',
            'singular_name' => 'Professor'
        ],
    ]);
}
add_action('init', 'university_post_types');