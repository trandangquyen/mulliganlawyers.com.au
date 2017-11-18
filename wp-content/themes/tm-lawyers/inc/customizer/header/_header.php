<?php
$panel    = 'header';
$priority = 1;

Kirki::add_section( 'header_general', array(
    'title'    => esc_html__( 'General', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'header_logo', array(
    'title'    => esc_html__( 'Logo', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-lightbulb',
) );

require_once get_template_directory() . '/inc/customizer/header/general.php';
require_once get_template_directory() . '/inc/customizer/header/logo.php';