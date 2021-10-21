<?php

/*

Plugin Name: Reginald

Plugin URI: https://google.com/

Description: An awesome plugin designed for newbies.

Version: 1.0.1

Author: Reginald Torkornoo

Author URI: https://google.com/

License: Free

Text Domain: google

*/



add_action('admin_menu','_main_menu_st_pl');
add_action('admin_menu','_sub_menu_st_pl');

function _main_menu_st_pl() {
    add_menu_page('Main Page','Main Page','manage_options','main-page','main_page_st_plugin_action');
}

function _sub_menu_st_pl() {
    add_submenu_page('main-page','Register Page', 'Register Page','manage_options','register-page','sub_page_st_plugin_action');
}

function main_page_st_plugin_action() {
    require_once(WP_PLUGIN_DIR . '/second_wp/main_page.php');
}

function sub_page_st_plugin_action() {
    require_once(WP_PLUGIN_DIR . '/second_wp/register_page.php');
}



/*Create a New Plugin:
1) Proper Menus (MainPage, Register, Listing)
2) Insert Data in DB
3) Fetch Data from DB
4) Show in the Table Form
Make sure to use proper HTML and name convention for the Menu Items and Pages
*/