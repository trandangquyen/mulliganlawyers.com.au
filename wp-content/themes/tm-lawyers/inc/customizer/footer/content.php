<?php
$section  = 'footer_content';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'typography',
    'settings'    => 'footer_title_font',
    'label'       => esc_html__( 'Title font', 'tm-lawyers' ),
    'description' => esc_html__( 'Set up font settings for footer title', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => array(
        'font-style'     => array( 'bold', 'italic' ),
        'font-family'    => TM_LAWYERS_PRIMARY_FONT,
        'font-size'      => '20px',
        'font-weight'    => '100',
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
            'element' => '.site-footer .widget-title',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color',
    'setting'     => 'footer_title_color',
    'label'       => esc_html__( 'Title color', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose color for footer title', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#FFFFFF',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.site-footer .widget-title',
            'property' => 'color',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.site-footer .widget-title',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'typography',
    'settings'    => 'footer_font',
    'label'       => esc_html__( 'Text font', 'tm-lawyers' ),
    'description' => esc_html__( 'Set up font settings for footer text', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => array(
        'font-style'     => array( 'bold', 'italic' ),
        'font-family'    => TM_LAWYERS_SECONDARY_FONT,
        'font-size'      => '13px',
        'font-weight'    => '400',
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
            'element' => '.site-footer, .copyright',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color',
    'setting'     => 'footer_text_color',
    'label'       => esc_html__( 'Text color', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose color for footer text', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#AAAAAA',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.site-footer',
            'property' => 'color',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.site-footer',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color',
    'setting'     => 'footer_link_color',
    'label'       => esc_html__( 'Link color', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose color for footer text link', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#AAAAAA',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.site-footer a',
            'property' => 'color',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.site-footer a',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
) );
