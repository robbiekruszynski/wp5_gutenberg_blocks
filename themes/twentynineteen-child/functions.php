<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION


// BEGIN ENQUEUE THEME STYLESHEET
function theme_dependecies() {
    wp_enqueue_style( 'site-styles', get_stylesheet_directory_uri() . '/css/style.css');
    wp_enqueue_script( 'three-js', get_stylesheet_directory_uri() . '/js/three.min.js');
    // wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/js/theme.js');
}
add_action( 'wp_enqueue_scripts', 'theme_dependecies' );
// END ENQUEUE THEME STYLESHEET

// CUSTOM POST TYPE
function custom_post_type(){
  $labels = array(
    'name' => 'Portfolio',
    'singular_name' => 'Portfolio',
    "add_new" => "Add Portfolio work",
    "all_items" => "All Items",
    "add_new_items" => "Add item",
    "edit_item" => "Edit item",
    "new_item" => "New item",
    "view_item" => "View item",
    'search_item' => "Seach Portfolio",
    "not_found" => "No items found",
    "not_found_in_trash" => "No items found in trash",
    "parent_item_colon" => "Parent item"
  );
  $args = array(
    "labels" => $labels,
    'public' => true,
    "has_archive" => true,
    "publicly_queryable" => true,
    "query_var" => true,
    "rewrite" => true,
    "capability_type" => "post",
    "hierarchical" => false,
    "supports" => array(
      "title",
      "editor",
      "excerpt",
      "thumbnail",
      "revision",
    ),
    "taxonomies" => array("category", "post_tag"),
    "menu_position" => 4,
    "exclude_from_search" => false

  );
  register_post_type('portfolio', $args);
}
add_action("init", "custom_post_type");

//ANOTHER CUSTOM POST TYPE

function custom_post_type_two(){
  $labels = array(
    'name' => 'Book',
    'singular_name' => 'Book',
    "add_new" => "Add Books",
    "all_items" => "All Items",
    "add_new_items" => "Add item",
    "edit_item" => "Edit item",
    "new_item" => "New item",
    "view_item" => "View item",
    'search_item' => "Seach Books",
    "not_found" => "No items found",
    "not_found_in_trash" => "No items found in trash",
    "parent_item_colon" => "Parent item"
  );
  $args = array(
    "labels" => $labels,
    'public' => true,
    "has_archive" => true,
    "publicly_queryable" => true,
    "query_var" => true,
    "rewrite" => true,
    "capability_type" => "post",
    "hierarchical" => false,
    "supports" => array(
      "title",
      "editor",
      "excerpt",
      "thumbnail",
      "revision",
    ),
    "taxonomies" => array("category", "post_tag"),
    "menu_position" => 3,
    "exclude_from_search" => false

  );
  register_post_type('book', $args);
}
add_action("init", "custom_post_type_two");
