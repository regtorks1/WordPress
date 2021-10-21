<?php

// wp_enqueue_style('mytheme-style', get_stylesheet_uri());
    
add_action('wp_enqueue_scripts', 'mytheme_enqueue_style1');
function mytheme_enqueue_style1(){
    wp_register_style('custom', get_template_directory_uri() . "/customStyle/custom.css", "", "1.0.5");
    wp_enqueue_style('myStyles', get_template_directory_uri());
    wp_enqueue_style('custom');
}
 
function register_my_menus1() {
    register_nav_menus(
      array(
        'header-menu' => __('Header Menu'),
        'extra-menu' => __('Extra Menu')
       )
     );
   }
   add_action('init', 'register_my_menus1');
?>