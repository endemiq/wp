<?php

add_filter('graphql_resolve_field', function (
  $result,
  $source,
  $args,
  $context,
  $info,
  $type_name,
  $field_key,
  $field,
  $field_resolver
) {
    if (
      $type_name === 'Category'
      || $type_name === 'Comment'
      || $type_name === 'DiscussionSettings'
      || $type_name === 'GeneralSettings'
      || $type_name === 'MediaItem'
      || $type_name === 'Menu'
      || $type_name === 'MenuItem'
      || $type_name === 'Node'
      || $type_name === 'Page'
      || $type_name === 'Plugin'
      || $type_name === 'Post'
      || $type_name === 'ReadingSettings'
      || $type_name === 'Revision'
      || $type_name === 'Settings'
      || $type_name === 'Tag'
      || $type_name === 'Theme'
      || $type_name === 'User'
      || $type_name === 'UserRole'
      || $type_name === 'WritingSettings'
    ) {
        $result = 'You are not allowed to access this data';
    }
    return $result;
}, 10, 9 );
