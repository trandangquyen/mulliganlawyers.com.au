<?php
$section  = 'navigation_mobile_menu';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color',
    'setting'     => 'mobile_menu_icon_color',
    'label'       => esc_html__( 'Color', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose color for mobile menu icon', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#333333',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '#open-left, #open-left:before, .search-box-mobile i',
            'property' => 'color'
        )
    ),
    'js_vars'     => array(
        array(
            'element'  => '#open-left, #open-left:before, .search-box-mobile i',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
) );