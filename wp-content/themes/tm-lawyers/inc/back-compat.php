<?php
/**
 * TM Lawyers back compat functionality
 *
 * Prevents TM Lawyers from running on WordPress versions prior to 3.9,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 3.9.
 *
 * @package    WordPress
 * @subpackage Twenty_Fifteen
 * @since      TM Lawyers 1.0
 */

/**
 * Prevent switching to TM Lawyers on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since TM Lawyers 1.0
 */
function tm_lawyers_switch_theme() {
    switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
    unset( $_GET['activated'] );
    add_action( 'admin_notices', 'tm_lawyers_upgrade_notice' );
}

add_action( 'after_switch_theme', 'tm_lawyers_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * TM Lawyers on WordPress versions prior to 3.9.
 *
 * @since Twenty Fifteen 1.0
 */
function tm_lawyers_upgrade_notice() {
    $message = sprintf( esc_html__( 'TM Lawyers requires at least WordPress version 3.9. You are running version %s. Please upgrade and try again.', 'tm-lawyers' ), $GLOBALS['wp_version'] );
    printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 3.9.
 *
 * @since TM Lawyers 1.0
 */
function tm_lawyers_customize() {
    wp_die( sprintf( esc_html__( 'TM Lawyers requires at least WordPress version 3.9. You are running version %s. Please upgrade and try again.', 'tm-lawyers' ), $GLOBALS['wp_version'] ), '', array(
        'back_link' => true,
    ) );
}

add_action( 'load-customize.php', 'tm_lawyers_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.9.
 *
 * @since TM Lawyers 1.0
 */
function tm_lawyers_preview() {
    if ( isset( $_GET['preview'] ) ) {
        wp_die( sprintf( esc_html__( 'TM Lawyers requires at least WordPress version 3.9. You are running version %s. Please upgrade and try again.', 'tm-lawyers' ), $GLOBALS['wp_version'] ) );
    }
}

add_action( 'template_redirect', 'tm_lawyers_preview' );
