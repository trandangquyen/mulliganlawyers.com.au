<?php
$section  = 'site_skin';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'preset',
    'settings'    => 'preset',
    'label'       => esc_html__( 'Preset', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose a preset you want', 'tm-lawyers' ),
    'section'     => $section,
    'default'     => '1',
    'priority'    => $priority ++,
    'multiple'    => 3,
    'choices'     => array(
        '1' => array(
            'label'    => esc_html__( 'Preset 1', 'tm-lawyers' ),
            'settings' => array(
                'header_type'     => 'header01',
                'logo'            => 'http://lawyers.thememove.com/data/images/logo_1.png',
                'header_bg_color' => '#ffffff',
                'top_bg_color'    => '#333333',
                'nav_bg'          => '#C89A69'
            ),
        ),
        '2' => array(
            'label'    => esc_html__( 'Preset 2', 'tm-lawyers' ),
            'settings' => array(
                'header_type'     => 'header02',
                'logo'            => 'http://lawyers.thememove.com/data/images/logo_2.png',
                'header_bg_color' => '#ffffff',
                'top_bg_color'    => '#333333',
                'nav_bg'          => '#C89A69'
            ),
        ),
        '3' => array(
            'label'    => esc_html__( 'Preset 3', 'tm-lawyers' ),
            'settings' => array(
                'header_type'     => 'header03',
                'logo'            => 'http://lawyers.thememove.com/data/images/logo_3.png',
                'header_bg_color' => '#333333',
                'top_bg_color'    => '#333333',
                'nav_bg'          => '#C89A69'
            ),
        ),
        '4' => array(
            'label'    => esc_html__( 'Preset 4', 'tm-lawyers' ),
            'settings' => array(
                'header_type'          => 'header04',
                'logo'                 => 'http://lawyers.thememove.com/data/images/logo_4.png',
                'header_bg_color'      => '#ffffff',
                'top_bg_color'         => '#EEEEEE',
                'nav_bg'               => '#ffffff',
                'top_right_text_color' => '#888888'
            ),
        ),
    ),
) );