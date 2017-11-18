<?php
$panel    = 'post';
$priority = 1;
Kirki::add_section( 'post_general', array(
    'title'    => esc_html__( 'General', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-admin-tools',
) );

require_once get_template_directory() . '/inc/customizer/post/general.php';