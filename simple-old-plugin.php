<?php
/*
* Plugin Name: Simple Old Plugin
* Description: This is a practice plugin to explore wordpress development
* Version: 1.0
* License: GPL v3 or later
* License URI: https://www.gnu.org/licenses/gpl-3.0.html
* Text Domain: simple-old-plugin
* Domain Path: /languages
*/

define('PDEV_DIR',plugin_dir_path(__FILE__)); 

add_shortcode("practice_shortcode", "path_output"); function path_output(){ $arr=array('
    <p>'.plugin_dir_path(__FILE__).'</p>', '
    <p>'.plugin_dir_url(__FILE__).'</p>', '
    <p>'.admin_url("happy-town").'</p>',); 
                                                                           
    return implode("",$arr); }