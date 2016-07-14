<?php
/**
 * Plugin Name: Woocommerce Redirect 
 * Version: 0.1
 * Description: Plugin to redirect woocommerce buy-now buttons to product. 
 * Author: Ian Golden
 * Author URI: http://unitedwebco.com
 * Plugin URI: http://unitedwebco.com
 * Text Domain: woo-redirect
 * Domain Path: /languages
 * @package woo-redirect
 */

# CPT INIT


# ACF BUNDLE
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = plugin_dir_path( __FILE__ ) . '/acf/';
    
    // return
    return $path;
    
}
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
    $dir = plugin_dir_url( __FILE__ ) . '/acf/';
    return $dir;
}
 

# add_filter('acf/settings/show_admin', '__return_false');

$plugin_dir = array_reverse(explode("/", plugin_dir_path(__FILE__)));

include_once( plugin_dir_path(__FILE__) . '/acf/acf.php' );

# END ACF BUNDLE


add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = plugin_dir_path(__FILE__) . '/acf-json/' ;
    
    // return
    return $path;
    
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
    
    // append path
    $paths[] = plugin_dir_path(__FILE__) . '/acf-json/';
    
    
    // return
    return $paths;
    
}
 
###################################
# Bulk / Quick Edit Code
# #################################

if ( ! defined( 'ABSPATH' ) )
	die('Nope.');


if ( is_admin() ) {
	require_once __DIR__.'/include/class-acftoquickedit.php';
}
