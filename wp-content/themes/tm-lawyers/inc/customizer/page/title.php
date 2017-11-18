<?php
$section  = 'page_title';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'typography',
    'settings'    => 'page_title_font',
    'description' => esc_html__( 'Set up font settings for page title', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => array(
        'font-style'     => array( 'bold', 'italic' ),
        'font-family'    => TM_LAWYERS_SECONDARY_FONT,
        'font-size'      => '48px',
        'font-weight'    => '600',
        'line-height'    => '1.5',
        'letter-spacing' => '0em',
    ),
    'choices'     => array(
        'font-style'     => true,
        'font-family'    => true,
        'font-size'      => true,
        'font-weight'    => true,
        'line-height'    => true,
        'letter-spacing' => true,
    ),
    'output'      => array(
        array(
            'element' => '.big-title .entry-title',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color',
    'setting'     => 'page_title_color',
    'label'       => esc_html__( 'Text color', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose color for body text', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#fff',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.big-title .entry-title',
            'property' => 'color',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.big-title .entry-title',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'      => 'text',
    'setting'   => 'page_title_padding',
    'label'     => esc_html__( 'Padding', 'tm-lawyers' ),
    'section'   => $section,
    'priority'  => $priority ++,
    'default'   => '100px 0px 0px 0px',
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => '.big-title',
            'property' => 'padding',
        ),
    ),
    'js_vars'   => array(
        array(
            'element'  => '.big-title',
            'function' => 'css',
            'property' => 'padding',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'      => 'color',
    'setting'   => 'page_title_bg_color',
    'label'     => esc_html__( 'Background color', 'tm-lawyers' ),
    'help'      => esc_html__( 'Setup background color for your header', 'tm-lawyers' ),
    'section'   => $section,
    'priority'  => $priority ++,
    'default'   => '#fff',
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => '.big-title',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
        array(
            'element'  => '.big-title',
            'function' => 'css',
            'property' => 'background-color',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'     => 'image',
    'setting'  => 'page_title_bg_image',
    'label'    => esc_html__( 'Background image', 'tm-lawyers' ),
    'help'     => esc_html__( 'Default background image for your header', 'tm-lawyers' ),
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => 'http://lawyers.thememove.com/data/images/page_title_bg.png',
    'output'   => array(
        array(
            'element'  => '.big-title',
            'property' => 'background-image',
        ),
    ),
    'js_vars'  => array(
        array(
            'element'  => '.big-title',
            'function' => 'css',
            'property' => 'background-image',
        ),
    ),
) );