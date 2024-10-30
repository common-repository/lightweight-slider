<?php

// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
  die;
}

delete_option('lws_slide_height');
delete_option('lws_delay');
delete_option('lws_transition');
delete_option('lws_animation');
delete_option('lws_controls');
delete_option('lws_pagination');

?>
