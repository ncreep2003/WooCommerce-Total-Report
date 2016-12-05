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

define( 'WTR_PLUGIN_VERSION', '0.0.0' );
define( 'WTR_TEXT_DOMAIN', 'woocommerce-total-report' );
define( 'WTR_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WTR_PLUGIN_BASE', plugin_basename( __FILE__ ) );

include "lib/helpers/WTR_Common_Helper.php";
include "lib/Woocommerce_Total_report.class.php";
include "lib/admin/WTR_Admin.class.php";
