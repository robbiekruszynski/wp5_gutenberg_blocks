<?php
/**
*Custom Gutenberg ReflectionFunctionAbstract
*/
 function custom_block_gutenberg_default_colors()
 {
   add_theme_support(
     'editor-color-palette',
   array(
    array(
      'name' => 'White',
      'slug' => 'white',
      'color' => '#ffffff'
    ),
    array(
      'name' => 'Black',
      'slug' => 'black',
      'color' => '#000000'
    ),
    array(
      'name' => 'Blue',
      'slug' => 'blue',
      'color' => '#7db1ff'
    ),
    array(
      'name' => 'ShiShi',
      'slug' => 'shishi',
      'color' => '#c1c76c'
    )
   )
 );

 add_theme_support(
     'editor-font-sizes',
     array(
       array(
         'name' => 'Normal',
         'slug' => 'normal',
         'size'=> 20
       ),
       array (
         'name' => 'Large',
         'slug' => 'large',
         'size'=> 30
       ),
       array (
         'name' => 'Small',
         'slug' => 'small',
         'size'=> 14
       )
     )
   );
 }



 add_action('init', 'custom_block_gutenberg_default_colors');

 function customblockwork_gutenberg_blocks()
 {
   wp_register_script( 'custom-cta-js', get_template_directory_uri() . '/build/index.js', array('wp-blocks', 'wp-editor','wp-components' ));
   register_block_type('customblock/custom-cta', array(
     'editor_script' => 'custom-cta-js'
   ) );

 }

 function customblockworktwo_gutenberg_blocks()
 {
   wp_register_script( 'custom-cta-js', get_template_directory_uri() . '/build/testbatch.js', array('wp-blocks', 'wp-editor','wp-components' ));
   register_block_type('customblocktwo/custom-cta', array(
     'editor_script' => 'custom-cta-js'
   ) );

 }

  add_action('init', 'customblockwork_gutenberg_blocks');

  add_action('init', 'customblockworktwo_gutenberg_blocks');
