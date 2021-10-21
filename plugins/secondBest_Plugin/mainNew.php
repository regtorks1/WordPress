<?php



/*

Plugin Name: Profile Data

Plugin URI: https://google.com/

Description: A simple profile plugin.

Version: 1.0.2

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
    add_submenu_page('main-page','Registration Page', 'Registration Page','manage_options','registration-page','sub_page_st_plugin_action');
    add_submenu_page('main-page', 'Details Page', 'Details Page', 'manage_options', 'details-page', 'sub_page_st_plugin_action2');
}

function main_page_st_plugin_action() {
    require_once(WP_PLUGIN_DIR . '/secondBest_Plugin/mainNew.php');
}

function sub_page_st_plugin_action() {
    require_once(WP_PLUGIN_DIR . '/secondBest_Plugin/Registration.php');
}

 function sub_page_st_plugin_action2(){
     require_once(WP_PLUGIN_DIR . '/secondBest_Plugin/Details.php');
 }