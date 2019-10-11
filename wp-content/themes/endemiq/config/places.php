<?php 

add_action('init', function () {
  register_post_type('places', [
    'labels' => [
      'name' => __('Places', 'lang' ),
      'singular_name' => __('Place', 'lang' ),
      'add_new_item'       => __('Add a place', 'lang' ),
    ],
    'public' => true,
    'has_archive' => false,
    'menu_icon' => 'dashicons-location',
    'show_in_rest' => true,
    'show_in_nav_menus' => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'Place',
    'graphql_plural_name' => 'Places',
  ]);
});

add_filter('manage_places_posts_columns', function ($columns) {
  return array_slice($columns, 0, 2, true) +
    array('subtitle' => 'Subtitle') + 
    array_slice($columns, 2, 3, true);
});

add_action('manage_places_posts_custom_column', function ($column) {
  global $post;
  $have_permission = current_user_can('edit_post', $post->ID);
  if ($column == 'subtitle') echo get_field('subtitle');
}, 10, 1 );




function expose_ACF_fields( $object ) {
    $ID = $object['id'];
    return get_fields($ID);
}

add_action('rest_api_init', function () {
  $postypes_to_exclude = ['acf-field-group','acf-field'];
  $extra_postypes_to_include = ["place"];
  $post_types = array_diff(get_post_types(["_builtin" => false], 'names'),$postypes_to_exclude);

  array_push($post_types, $extra_postypes_to_include);

  foreach ($post_types as $post_type) {
    register_rest_field( $post_type, 'properties', [
      'get_callback'    => 'expose_ACF_fields',
      'schema'          => null,
    ]);
  }
});