<?php

/**
 * Common Helper functions
 *
 * @static
 * @package  woocommerce-total-report
 * @subpackage lib/helpers
 * @author Ankit Pokhrel <info@ankitpokhrel.com.np, @ankitpokhrel>
 * @version 0.0.0
 */

/**
 * Localize text strings
 *
 * @since  0.0.0
 * @see  __()
 *
 * @return string
 */
function wtr_translate( $string )
{
    return __( $string, WTR_TEXT_DOMAIN );
}

/**
 * Displays error message with WordPress default theme.
 *
 * @since  0.0.0
 *
 * @param  string $message Message to display
 *
 * @return void
 */
function wtr_error_notice( $message )
{
    echo "<div class='error wfg-error'>";
    echo "<p>" . $message . "</p>";
    echo "</div>";
}

/**
 * Basic input filtering
 *
 * @since 1.0.0
 *
 * @param $string
 *
 * @return string
 */
function wtr_clean( $string )
{
    return htmlentities2( stripslashes( $string ) );
}

/**
 * Displays success message with WordPress default theme.
 *
 * @since  0.0.0
 *
 * @param  string $message Message to display
 *
 * @return void
 */
function wtr_success_notice( $message )
{
    echo "<div class='updated wtr-updated'>";
    echo "<p>" . $message . "</p>";
    echo "</div>";
}

/**
 * Displays fixed notice at the top of screen in frontend.
 *
 * @since  0.0.0
 *
 * @param  string $message Message to display
 *
 * @return void
 */
function wtr_fixed_notice( $message )
{
    echo "<div class='wtr-fixed-notice'>";
    echo "<p>" . $message . "<a class='wtr-fixed-notice-remove' href='javascript:void(0)'>x</a></p>";
    echo "</div>";
}
