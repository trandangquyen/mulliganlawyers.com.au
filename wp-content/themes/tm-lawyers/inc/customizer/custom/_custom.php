<?php
$panel    = 'custom';
$priority = 1;

Kirki::add_section( 'custom_css', array(
    'title'    => esc_html__( 'Custom CSS', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
) );

Kirki::add_section( 'custom_js', array(
    'title'    => esc_html__( 'Custom JS', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
) );

require_once get_template_directory() . '/inc/customizer/custom/css.php';
require_once get_template_directory() . '/inc/customizer/custom/js.php';