<?php



/*

Plugin Name: Teacher's Data

Plugin URI: https://google.com/

Description: An awesome plugin made for teachers.

Version: 1.0.1

Author: Reginald Torkornoo

Author URI: https://google.com/

License: Free

Text Domain: google

*/


add_action('admin_menu','_main_menu_st_pl');
add_action('admin_menu','_sub_menu_st_pl');
add_action('admin-menu', '_sub_menu_st_pl2');

function _main_menu_st_pl() {
    add_menu_page('Main menu','Main menu','manage_options','main-page','main_page_st_plugin_action');
}

function _sub_menu_st_pl() {
    add_submenu_page('main-page','Register Page', 'Register Page','manage_options','register-page','sub_page_st_plugin_action');
    add_submenu_page('main-page', 'Listing Page', 'Listing Page', 'manage_options', 'listing-page', 'sub_page_st_plugin_action2');
}

function main_page_st_plugin_action() {
    require_once(WP_PLUGIN_DIR . '/plugin_best/MainPage.php');
}

function sub_page_st_plugin_action() {
    require_once(WP_PLUGIN_DIR . '/plugin_best/Register.php');
}

 function sub_page_st_plugin_action2(){
     require_once(WP_PLUGIN_DIR . '/plugin_best/Listing.php');
 }