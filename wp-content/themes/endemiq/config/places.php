<?php 

add_action('init', function () {
  register_post_type('places', [
    'labels' => [
      'name' => __( 'Places', 'lang' ),
      'singular_name' => __( 'Place', 'lang' ),
      'add_new_item'       => __( 'Add a place', 'lang' ),
    ],
    'public' => true,
    'has_archive' => false,
    'menu_icon' => 'dashicons-location',
    'show_in_rest' => false,
    'show_in_nav_menus' => true,
  ]);
});