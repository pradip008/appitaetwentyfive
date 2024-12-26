<?php

// Disable updates for the ACF plugin
add_filter('site_transient_update_plugins', function($value) {
  if (isset($value->response['advanced-custom-fields-pro/acf.php'])) {
      unset($value->response['advanced-custom-fields-pro/acf.php']);
  }
  return $value;
});