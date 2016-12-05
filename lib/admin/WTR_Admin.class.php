<?php

/**
 * Admin page
 *
 * @package woocommerce-total-report
 * @subpackage lib/admin
 *
 * @author Ankit Pokhrel <info@ankitpokhrel.com.np, @ankitpokhrel>
 */
class WTR_Admin
{
    /**
     * Constructor
     *
     * @access public
     * @since 0.0.0
     *
     * @see     add_action()
     */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'main_menu' ) );
    }

    /**
     * Add main menu page
     *
     * @access public
     * @see  add_menu_page()
     *
     * @return void
     */
    public function main_menu() {
        add_menu_page(
            WFG_Common_Helper::translate( 'WooCommerce Total Report' ),
            WFG_Common_Helper::translate( 'Woo Total Report' ),
            'manage_options',
            'woocommerce-total-report',
            array( $this, 'landing_page_template' ),
            'dashicons-chart-bar'
        );
    }

    /**
     * Add landing page template
     *
     * @access public
     *
     * @return void
     */
    public function landing_page_template()
    {
        include 'pages/landing_page.php';
    }
}

/** Initialize */
new WTR_Admin();
