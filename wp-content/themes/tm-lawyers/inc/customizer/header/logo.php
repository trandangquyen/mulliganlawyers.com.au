<?php
$section  = 'header_logo';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'image',
    'setting'     => 'logo',
    'label'       => esc_html__( 'Normal', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose a default logo image to display', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 'http://lawyers.thememove.com/data/images/logo_1.png',
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'image',
    'setting'     => 'logo_retina',
    'label'       => esc_html__( 'Retina', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose a image for retina logo', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '',
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'text',
    'label'       => esc_html__( 'Padding', 'tm-lawyers' ),
    'description' => esc_html__( 'Set up padding for your logo', 'tm-lawyers' ),
    'setting'     => 'logo_padding',
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '40px 0px 40px 0px',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.site-branding',
            'property' => 'padding',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.site-branding',
            'function' => 'css',
            'property' => 'padding',
        ),
    ),
) );
