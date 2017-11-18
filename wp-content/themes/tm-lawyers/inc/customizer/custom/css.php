<?php
$section  = 'custom_css';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'toggle',
    'settings'    => 'custom_css_enable',
    'label'       => esc_html__( 'Enable', 'tm-lawyers' ),
    'description' => esc_html__( 'Enabling this option will display top area', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 0,
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'      => 'code',
    'settings'  => 'custom_css',
    'label'     => esc_html__( 'Custom CSS', 'tm-lawyers' ),
    'section'   => $section,
    'priority'  => $priority ++,
    'default'   => 'body{background-color:#fff;}',
    'choices'   => array(
        'language' => 'css',
        'theme'    => 'monokai',
    ),
    'transport' => 'postMessage',
    'js_vars'   => array(
        array(
            'element'  => '#tm-lawyers-main-inline-css',
            'function' => 'html',
        ),
    ),
) );