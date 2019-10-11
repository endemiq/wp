<?php

// Enable ACF config export
add_filter('acf/settings/save_json', function ($path) {
  return get_stylesheet_directory() . '/acf';    
});
 