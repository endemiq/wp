<?php

add_filter('rest_authentication_errors', function ($access) {
  return new WP_Error(
    'rest_disabled',
    __('The WordPress REST API has been disabled.'),
    array( 'status' => rest_authorization_required_code())
  );
});