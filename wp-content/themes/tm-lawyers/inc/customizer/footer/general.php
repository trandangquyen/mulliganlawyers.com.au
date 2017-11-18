<?php
$section  = 'footer_general';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color-alpha',
    'setting'     => 'footer_bg_color',
    'label'       => esc_html__( 'Background color', 'tm-lawyers' ),
    'description' => esc_html__( 'Setup background color for your footer', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#333333',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.site-footer',
            'property' => 'background-color',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.site-footer',
            'function' => 'css',
            'property' => 'background-color',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'text',
    'setting'     => 'footer_padding',
    'label'       => esc_html__( 'Padding', 'tm-lawyers' ),
    'description' => esc_html__( 'Setup padding for your footer', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '60px 0px 60px 0px',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.site-footer',
            'property' => 'padding',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.site-footer',
            'function' => 'css',
            'property' => 'padding',
        ),
    ),
) );