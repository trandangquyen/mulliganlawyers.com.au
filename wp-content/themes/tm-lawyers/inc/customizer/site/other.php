<?php
$section  = 'site_other';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'toggle',
    'setting'     => 'box_mode',
    'label'       => esc_html__( 'Box mode', 'tm-lawyers' ),
    'description' => esc_html__( 'Enabling this option then your site will switch to box mode', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 0,
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color',
    'setting'     => 'boxed_bg_color',
    'label'       => esc_html__( 'Background color', 'tm-lawyers' ),
    'description' => esc_html__( 'Background color on box mode', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#333333',
    'transport'   => 'postMessage',
    'required'    => array(
        array(
            'setting'  => 'box_mode',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'output'      => array(
        array(
            'element'  => 'body.boxed',
            'property' => 'background-color',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'body.boxed',
            'function' => 'css',
            'property' => 'background-color',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'toggle',
    'setting'     => 'back_to_top',
    'label'       => esc_html__( 'Back to top', 'tm-lawyers' ),
    'description' => esc_html__( 'Enabling this option will display back to top button', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 1,
) );
