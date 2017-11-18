<?php
$section  = 'custom_js';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'toggle',
    'settings'    => 'custom_js_enable',
    'label'       => esc_html__( 'Enable', 'tm-lawyers' ),
    'description' => esc_html__( 'Enabling this option will display top area', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 0,
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'     => 'code',
    'settings' => 'custom_js',
    'label'    => esc_html__( 'Custom JS', 'tm-lawyers' ),
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => '',
    'choices'  => array(
        'language' => 'javascript',
        'theme'    => 'monokai',
    ),
) );