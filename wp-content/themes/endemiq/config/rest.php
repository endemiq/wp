<?php

define('JWT_AUTH_SECRET_KEY', 'U0{{-|Pr 8($Tal==#}-MvtP|{b[a|}wuO#%/^-dF6WF(xB e@~H{|O8@>GuhOwS');
define('JWT_AUTH_CORS_ENABLE', true);

// add_filter('rest_authentication_errors', function ($access) {
//   return new WP_Error(
//     'rest_disabled',
//     __('The WordPress REST API has been disabled.'),
//     array( 'status' => rest_authorization_required_code())
//   );
// });