<?php

/**
 * Main plugin class
 *
 * @package  woocommerce-total-report
 * @subpackage lib
 * @author Ankit Pokhrel <info@ankitpokhrel.com.np, @ankitpokhrel>
 * @version 0.0.0
 */
class Woocommerce_Total_Report
{
    /**
     * Constructor
     *
     * @see  add_action()
     * @since  0.0.0
     */
    public function __construct()
    {
        //check if WooCommerce plugin is installed and activated
        add_action( 'plugins_loaded', array( $this, 'wtr_validate_installation' ) );

        //load plugin textdomain
        add_action( 'plugins_loaded', array( $this, 'load_plugin_textdomain' ) );

        //enqueue necessary scripts and styles
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_global_scripts' ) );
    }

    /**
     * Enqueue required global styles and scripts.
     *
     * @access public
     * @since  0.0.0
     *
     * @see  wp_enqueue_style()
     *
     * @return void
     */
    public function enqueue_global_scripts()
    {
        //enqueue styles
        wp_enqueue_style( 'wtr-styles', plugins_url( '/build/css/wtr-styles.css', dirname( __FILE__ ) ) );

        //enqueue scripts
        wp_enqueue_script( 'wtr-scripts', plugins_url( '/resources/js/wtr-scripts.js', dirname( __FILE__ ) ),
            array( 'jquery' ) );
    }

    /**
     * Add notice if WooCommerce plugin is not activated.
     *
     * @since  0.0.0
     * @access public
     *
     * @see  add_action()
     *
     * @return void
     */
    public function wtr_validate_installation()
    {
        if ( ! class_exists( 'WooCommerce' ) ) {
            add_action( 'admin_notices', array( $this, 'wtr_plugin_required_notice' ) );
        }
    }

    /**
     * Error notice: WooCommerce Plugin is required for this plugin to work.
     *
     * @access public
     * @since  0.0.0
     *
     * @return void
     */
    public function wtr_plugin_required_notice()
    {
        wtr_error_notice(
            wtr_translate(
                'WooCommerce Total Report plugin requires
		 <a href="https://wordpress.org/plugins/woocommerce/">WooCommerce</a>
		 plugin to work. Please make sure that WooCommerce is installed and activated.'
            )
        );
    }

    /**
     * Load the plugin's text domain hooked to 'plugins_loaded'.
     *
     * @since 0.0.0
     * @access public
     *
     * @see    load_plugin_textdomain()
     * @see    plugin_basename()
     * @action plugins_loaded
     *
     * @return void
     */
    public function load_plugin_textdomain()
    {
        load_plugin_textdomain(
            WTR_TEXT_DOMAIN,
            false,
            dirname( plugin_basename( __FILE__ ) ) . '/../languages/'
        );
    }
}
