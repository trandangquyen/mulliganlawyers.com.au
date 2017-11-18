<?php
$panel    = 'page';
$priority = 1;
Kirki::add_section( 'page_general', array(
    'title'    => esc_html__( 'General', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'page_title', array(
    'title'    => esc_html__( 'Title', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-clipboard',
) );

Kirki::add_section( 'page_404', array(
    'title'    => esc_html__( '404 page', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-sos',
) );

require_once get_template_directory() . '/inc/customizer/page/general.php';
require_once get_template_directory() . '/inc/customizer/page/title.php';
require_once get_template_directory() . '/inc/customizer/page/404.php';