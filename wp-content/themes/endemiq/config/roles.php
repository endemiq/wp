<?php

add_role('appuser', 
  __('App user'),
  array(
    'read'                    => true, // Allows a user to read
    'create_posts'            => true, // Allows user to create new posts
    'edit_posts'              => false, // Allows user to edit their own posts
    'edit_published_posts'    => false, // Allows user to edit their own posts
    'edit_others_posts'       => false, // Allows user to edit others posts too
    'publish_posts'           => false, // Allows the user to publish posts
  )
);
