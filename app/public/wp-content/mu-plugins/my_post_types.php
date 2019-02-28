<?php
function my_posts_types() {
    register_post_type('event', array(
        'supports'=> array('title', 'editor', 'excerpt'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-calendar',
        'labels' => array(
            'name' => 'events',
            'add_new_item' => 'Add new Event',
            'edit_item' => 'Edit Event',
            'all_events' => 'All Events',
            'singular_name' => 'event'
        )
    ));
    //program post type
    register_post_type('program', array(
        'supports'=> array('title', 'editor'),
        'rewrite' => array('slug', 'programs'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-awards',
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add new Program',
            'edit_item' => 'Edit Program',
            'all_events' => 'All Programs',
            'singular_name' => 'program'
        )
    ));

    //professor post type 

     register_post_type('professor', array(
        'supports'=> array('title', 'editor', 'thumbnail'),
        'public' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'labels' => array(
            'name' => 'Professors',
            'add_new_item' => 'Add new Professor',
            'edit_item' => 'Edit Professor',
            'all_events' => 'All professors',
            'singular_name' => 'Professor'
        )
    ));

    //campus post type

    
    register_post_type('campus', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'campuses'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
          'name' => 'Campuses',
          'add_new_item' => 'Add New Campus',
          'edit_item' => 'Edit Campus',
          'all_items' => 'All Campuses',
          'singular_name' => 'Campus'
        ),
        'menu_icon' => 'dashicons-location-alt'
      ));
}
add_action("init", 'my_posts_types');
 ?>