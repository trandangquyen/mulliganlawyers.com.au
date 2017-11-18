<?php
$section  = 'top_general';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'toggle',
    'setting'     => 'top_enable',
    'label'       => esc_html__( 'Enable', 'tm-lawyers' ),
    'description' => esc_html__( 'Enabling this option will display top area', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 1,
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color-alpha',
    'setting'     => 'top_bg_color',
    'label'       => esc_html__( 'Background color', 'tm-lawyers' ),
    'description' => esc_html__( 'Setup background color for your top', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#333333',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.site-top',
            'property' => 'background-color',
        ),
    ),
    'required'    => array(
        array(
            'setting'  => 'top_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.site-top',
            'function' => 'css',
            'property' => 'background-color',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'text',
    'setting'     => 'top_padding',
    'label'       => esc_html__( 'Padding', 'tm-lawyers' ),
    'description' => esc_html__( 'Set up padding for top area', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '15px 0px 15px 0px',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.site-top',
            'property' => 'padding',
        ),
    ),
    'required'    => array(
        array(
            'setting'  => 'top_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.site-top',
            'function' => 'css',
            'property' => 'padding',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'text',
    'setting'     => 'top_margin',
    'label'       => esc_html__( 'Margin', 'tm-lawyers' ),
    'description' => esc_html__( 'Set up margin for top area', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '0px 0px 0px 0px',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.site-top',
            'property' => 'margin',
        ),
    ),
    'required'    => array(
        array(
            'setting'  => 'top_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.site-top',
            'function' => 'css',
            'property' => 'margin',
        ),
    ),
) );