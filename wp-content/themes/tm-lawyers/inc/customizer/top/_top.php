<?php
$panel    = 'top';
$priority = 1;
// Add sections for top area panel
Kirki::add_section( 'top_general', array(
    'title'    => esc_html__( 'General', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'top_content', array(
    'title'    => esc_html__( 'Content', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-format-aside',
) );

require_once get_template_directory() . '/inc/customizer/top/general.php';
require_once get_template_directory() . '/inc/customizer/top/content.php';