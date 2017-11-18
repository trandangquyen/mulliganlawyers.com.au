<?php
$section  = 'site_heading';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'typography',
    'settings'    => 'heading_font',
    'description' => esc_html__( 'Set up font settings for heading tag', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => array(
        'font-style'     => array( 'bold', 'italic' ),
        'font-family'    => TM_LAWYERS_PRIMARY_FONT,
        'font-weight'    => '400',
        'line-height'    => '1.5',
        'letter-spacing' => '0.08em',
    ),
    'choices'     => array(
        'font-style'     => true,
        'font-family'    => true,
        'font-size'      => false,
        'font-weight'    => true,
        'line-height'    => true,
        'letter-spacing' => true,
    ),
    'output'      => array(
        array(
            'element' => 'h1,h2,h3,h4,h5,h6',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'slider',
    'setting'     => 'h1_font_size',
    'label'       => esc_html__( 'Font size', 'tm-lawyers' ),
    'description' => esc_html__( 'H1', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 28,
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h1',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'slider',
    'setting'     => 'h2_font_size',
    'description' => esc_html__( 'H2', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 24,
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h2',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'slider',
    'setting'     => 'h3_font_size',
    'description' => esc_html__( 'H3', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 20,
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h3',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'slider',
    'setting'     => 'h4_font_size',
    'description' => esc_html__( 'H4', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 16,
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h4',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'slider',
    'setting'     => 'h5_font_size',
    'description' => esc_html__( 'H5', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 14,
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h5',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'slider',
    'setting'     => 'h6_font_size',
    'description' => esc_html__( 'H6', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 12,
    'choices'     => array(
        'min'  => 10,
        'max'  => 90,
        'step' => 1,
    ),
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'h6',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'      => 'color',
    'setting'   => 'heading_color',
    'label'     => esc_html__( 'Color', 'tm-lawyers' ),
    'section'   => $section,
    'priority'  => $priority ++,
    'default'   => '#111',
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => 'h1,h2,h3,h4,h5,h6',
            'property' => 'color',
        ),
    ),
) );