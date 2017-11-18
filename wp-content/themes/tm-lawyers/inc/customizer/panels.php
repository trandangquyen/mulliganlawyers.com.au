<?php
$priority = 1;
// Add panels
Kirki::add_panel( 'site', array(
    'priority'    => $priority ++,
    'title'       => esc_html__( 'Site', 'tm-lawyers' ),
    'description' => esc_html__( 'My Description', 'tm-lawyers' ),
    'icon'        => 'dashicons-admin-site',
) );

Kirki::add_panel( 'top', array(
    'priority'    => $priority ++,
    'title'       => esc_html__( 'Top', 'tm-lawyers' ),
    'description' => esc_html__( 'Top area above header with break news and social icons', 'tm-lawyers' ),
    'icon'        => 'dashicons-schedule',
) );

Kirki::add_panel( 'header', array(
    'priority'    => $priority ++,
    'title'       => esc_html__( 'Header', 'tm-lawyers' ),
    'description' => esc_html__( 'Top area above header with break news and social icons', 'tm-lawyers' ),
    'icon'        => 'dashicons-archive',
) );

Kirki::add_panel( 'navigation', array(
    'priority'    => $priority ++,
    'title'       => esc_html__( 'Navigation', 'tm-lawyers' ),
    'description' => esc_html__( 'My Description', 'tm-lawyers' ),
    'icon'        => 'dashicons-menu',
) );

Kirki::add_panel( 'footer', array(
    'priority'    => $priority ++,
    'title'       => esc_html__( 'Footer', 'tm-lawyers' ),
    'description' => esc_html__( 'My Description', 'tm-lawyers' ),
    'icon'        => 'dashicons-screenoptions',
) );

Kirki::add_panel( 'page', array(
    'priority'    => $priority ++,
    'title'       => esc_html__( 'Page', 'tm-lawyers' ),
    'description' => esc_html__( 'My Description', 'tm-lawyers' ),
    'icon'        => 'dashicons-admin-page',
) );

Kirki::add_panel( 'post', array(
    'priority'    => $priority ++,
    'title'       => esc_html__( 'Post', 'tm-lawyers' ),
    'description' => esc_html__( 'My Description', 'tm-lawyers' ),
    'icon'        => 'dashicons-edit',
) );

Kirki::add_panel( 'custom', array(
    'priority'    => $priority ++,
    'title'       => esc_html__( 'Custom', 'tm-lawyers' ),
    'description' => esc_html__( 'You can add custom CSS and Javascript here', 'tm-lawyers' ),
    'icon'        => 'dashicons-admin-generic',
) );

Kirki::add_panel( 'title_tagline', array(
    'priority'    => $priority ++,
    'title'       => esc_html__( 'Site Identity', 'tm-lawyers' ),
    'description' => esc_html__( 'Site Identity', 'tm-lawyers' ),
    'icon'        => 'dashicons-admin-generic',
) );