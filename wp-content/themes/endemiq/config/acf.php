<?php

// Enable ACF config import/export
add_filter('acf/settings/save_json', function ($path) {
  return get_stylesheet_directory() . '/acf';    
});

add_filter('acf/settings/load_json', function ($paths) {
  unset($paths[0]);
  $paths[] = get_stylesheet_directory() . '/acf';
  return $paths;
});
 