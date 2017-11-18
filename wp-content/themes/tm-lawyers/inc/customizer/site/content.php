<?php
$section  = 'site_content';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'typography',
    'settings'    => 'body_font',
    'description' => esc_html__( 'Set up font settings for body text', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => array(
        'font-style'     => array( 'bold', 'italic' ),
        'font-family'    => TM_LAWYERS_SECONDARY_FONT,
        'font-size'      => '14px',
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
            'element' => 'body,p',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color',
    'setting'     => 'body_color',
    'label'       => esc_html__( 'Text color', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose color for body text', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#666666',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'body',
            'property' => 'color',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color',
    'setting'     => 'link_color',
    'label'       => esc_html__( 'Link color', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose color for text link', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#333333',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => 'a,a:visited',
            'property' => 'color',
        ),
    ),
) );
