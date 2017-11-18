<?php
/**
 * Site General
 * ================
 */
$section  = 'site_breadcrumb';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'toggle',
    'setting'     => 'breadcrumb_enable',
    'label'       => esc_html__( 'Breadcrumb', 'tm-lawyers' ),
    'description' => esc_html__( 'Enabling this option will display breadcrumb on every page', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 1,
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'typography',
    'settings'    => 'breadcrumb_font',
    'description' => esc_html__( 'Set up font settings for page title', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => array(
        'font-style'     => array( 'bold', 'italic' ),
        'font-family'    => TM_LAWYERS_PRIMARY_FONT,
        'font-size'      => '20px',
        'font-weight'    => '400',
        'line-height'    => '1',
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
            'element' => '.tm_bread_crumb, .tm_bread_crumb a',
        ),
    ),
    'required'    => array(
        array(
            'setting'  => 'breadcrumb_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'     => 'text',
    'setting'  => 'breadcrumb_home_text',
    'label'    => esc_html__( '"Home" text', 'tm-lawyers' ),
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => 'Home',
    'required' => array(
        array(
            'setting'  => 'breadcrumb_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );

