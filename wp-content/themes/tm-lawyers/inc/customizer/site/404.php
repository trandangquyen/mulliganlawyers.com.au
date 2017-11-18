<?php
/**
 * 404 Page
 * ================
 */
$section  = 'site_404';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'typography',
    'settings'    => '404_heading_font',
    'label'       => esc_html__( 'Heading font', 'tm-lawyers' ),
    'description' => esc_html__( 'Set up font settings for heading', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => array(
        'font-style'     => array( 'bold', 'italic' ),
        'font-family'    => TM_LAWYERS_SECONDARY_FONT,
        'font-size'      => '48px',
        'font-weight'    => '700',
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
            'element' => '.error404 .page-title',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'typography',
    'settings'    => '404_content_font',
    'label'       => esc_html__( 'Content font', 'tm-lawyers' ),
    'description' => esc_html__( 'Set up font settings for content', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => array(
        'font-style'     => array( 'bold', 'italic' ),
        'font-family'    => TM_LAWYERS_PRIMARY_FONT,
        'font-size'      => '20px',
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
            'element' => '.error404 .page-content p',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'     => 'image',
    'setting'  => '404_bg_image',
    'label'    => esc_html__( 'Background image', 'tm-lawyers' ),
    'help'     => esc_html__( 'Default background image for 404 Page', 'tm-lawyers' ),
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => 'http://lawyers.thememove.com/data/images/404_bg.jpg',
    'output'   => array(
        array(
            'element'  => '.error404 .error404-bg',
            'property' => 'background-image',
        ),
    ),
) );