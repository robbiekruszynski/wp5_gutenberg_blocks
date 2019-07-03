<?php
/**
 * Plugin Name: Repeater Plugin
 * Author: Robbie
 * Version: 1.0.0
 */

function loadRepeater() {
  wp_enqueue_script(
    'my-other-new-block',
    plugin_dir_url(__FILE__) . 'test-block.js',
    array('wp-blocks','wp-editor'),
    true
  );
}

add_action('enqueue_block_editor_assets', 'loadRepeater');
