<?php

/*

Plugin Name: Reginald First Plugin

Plugin URI: https://google.com/

Description: Displaying a nice plugin.

Version: 1.0

Author: Rehan Hanif

Author URI: https://google.com/

License: Free

Text Domain: google

*/

function test_plugin_setup_menu(){
    add_menu_page('Test Plugin Page', 'Test Plugin', 'manage_options', 'test_plugin', 'test_init');
}

add_action('admin_menu', 'test_plugin_setup_menu');

function test_init(){
    echo "<h2> Hi this is Reginald </h2>";
}