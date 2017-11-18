<?php
/**
 * Site General
 * ================
 */
$section  = 'site_newsletter';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'toggle',
    'setting'     => 'newsletter_enable',
    'label'       => esc_html__( 'Newsletter', 'tm-lawyers' ),
    'description' => esc_html__( 'Enabling this option will display newsletter on every page', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 1,
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'      => 'text',
    'setting'   => 'newsletter_padding',
    'label'     => esc_html__( 'Padding', 'tm-lawyers' ),
    'section'   => $section,
    'priority'  => $priority ++,
    'default'   => '50px 0px 50px 0px',
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => '.newsletter',
            'property' => 'padding',
        ),
    ),
    'js_vars'   => array(
        array(
            'element'  => '.newsletter',
            'function' => 'css',
            'property' => 'padding',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'     => 'image',
    'setting'  => 'newsletter_bg_image',
    'label'    => esc_html__( 'Background image', 'tm-lawyers' ),
    'help'     => esc_html__( 'Default background image for newsletter', 'tm-lawyers' ),
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => 'http://lawyers.thememove.com/data/images/newsletter_bg.png',
    'output'   => array(
        array(
            'element'  => '.newsletter',
            'property' => 'background-image',
        ),
    ),
    'js_vars'  => array(
        array(
            'element'  => '.newsletter',
            'function' => 'css',
            'property' => 'background-image',
        ),
    ),
) );