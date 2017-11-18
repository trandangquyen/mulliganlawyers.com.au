<?php
$section  = 'post_general';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'radio',
    'setting'     => 'post_layout',
    'label'       => esc_html__( 'Post layout', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose the site layout you want', 'tm-lawyers' ),
    'help'        => esc_html__( 'Choose the site layout you want', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 'content-sidebar',
    'choices'     => array(
        'full-width'      => esc_html__( 'Full width', 'tm-lawyers' ),
        'content-sidebar' => esc_html__( 'Content Sidebar', 'tm-lawyers' ),
        'sidebar-content' => esc_html__( 'Sidebar Content', 'tm-lawyers' ),
    ),
) );