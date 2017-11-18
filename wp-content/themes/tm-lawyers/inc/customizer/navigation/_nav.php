<?php
$panel    = 'navigation';
$priority = 1;
Kirki::add_section( 'navigation_general', array(
    'title'    => esc_html__( 'General', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'navigation_mobile_menu', array(
    'title'    => esc_html__( 'Mobile menu', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-smartphone',
) );

Kirki::add_section( 'navigation_desktop_menu', array(
    'title'    => esc_html__( 'Desktop menu', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-desktop',
) );

Kirki::add_section( 'navigation_search', array(
    'title'    => esc_html__( 'Search', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-search',
) );

if ( class_exists( 'WooCommerce' ) ) {
    Kirki::add_section( 'navigation_mini_cart', array(
        'title'    => esc_html__( 'Mini cart', 'tm-lawyers' ),
        'panel'    => $panel,
        'priority' => $priority ++,
        'icon'     => 'dashicons-cart',
    ) );
}

require_once get_template_directory() . '/inc/customizer/navigation/general.php';
require_once get_template_directory() . '/inc/customizer/navigation/mobile-menu.php';
require_once get_template_directory() . '/inc/customizer/navigation/desktop-menu.php';
require_once get_template_directory() . '/inc/customizer/navigation/search.php';
if ( class_exists( 'WooCommerce' ) ) {
    require_once get_template_directory() . '/inc/customizer/navigation/mini-cart.php';
}