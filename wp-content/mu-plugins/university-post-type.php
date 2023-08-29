<?php

function university_post_types() {
    register_post_type('event', [
        'has_archive' => true,
        'rewrite' => [
            'slug' => 'events'
        ],
        'public' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'show_in_rest' => true,
        'supports' => [
            'title',
            'editor',
            'excerpt',
        ],
        'labels' => [
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ],
    ]);
}
add_action('init', 'university_post_types');