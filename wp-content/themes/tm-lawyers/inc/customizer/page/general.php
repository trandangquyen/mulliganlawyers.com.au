<?php
$section  = 'page_general';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'radio',
    'setting'     => 'page_layout',
    'label'       => esc_html__( 'Page layout', 'tm-lawyers' ),
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

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'radio',
    'setting'     => 'archive_layout',
    'label'       => esc_html__( 'Archive layout', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose the archive layout you want', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 'content-sidebar',
    'choices'     => array(
        'full-width'      => esc_html__( 'Full width', 'tm-lawyers' ),
        'content-sidebar' => esc_html__( 'Content - Sidebar', 'tm-lawyers' ),
        'sidebar-content' => esc_html__( 'Sidebar Content', 'tm-lawyers' ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'radio',
    'setting'     => 'search_layout',
    'label'       => esc_html__( 'Search layout', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose the search layout you want', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 'content-sidebar',
    'choices'     => array(
        'full-width'      => esc_html__( 'Full width', 'tm-lawyers' ),
        'content-sidebar' => esc_html__( 'Content - Sidebar', 'tm-lawyers' ),
        'sidebar-content' => esc_html__( 'Sidebar Content', 'tm-lawyers' ),
    ),
) );