<?php
/***
 * Plugin Name: WooCommerce Total Report
 * Plugin URI: http://ankitpokhrel.com
 * Description: A complete reporting platform for WooCommerce.
 * Version: 0.0.0
 * Author: Ankit Pokhrel
 * Author URI: http://ankitpokhrel.com
 * Text Domain: woocommerce-total-report
 * Domain Path: /languages
 *
 * Copyright (c) 2016 Ankit Pokhrel <info@ankitpokhrel.com.np, @ankitpokhrel>.
 */

//Avoid direct calls to this file
if ( ! defined( 'ABSPATH' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1 403 Forbidden' );
    die( 'Access Forbidden' );
}

define( 'PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_BASE', plugin_basename( __FILE__ ) );
