<?php
$section  = 'navigation_desktop_menu';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'     => 'typography',
    'settings' => 'main_menu_font',
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => array(
        'font-style'     => array( 'bold', 'italic' ),
        'font-family'    => TM_LAWYERS_SECONDARY_FONT,
        'font-size'      => '14px',
        'font-weight'    => '600',
        'line-height'    => '1.5',
        'letter-spacing' => '0em',
    ),
    'choices'  => array(
        'font-style'     => true,
        'font-family'    => true,
        'font-size'      => true,
        'font-weight'    => true,
        'line-height'    => true,
        'letter-spacing' => true,
    ),
    'output'   => array(
        array(
            'element' => '.main-navigation ul > li > a',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color',
    'setting'     => 'main_menu_color',
    'label'       => esc_html__( 'Menu color', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose color for level 1 menu item', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#ffffff',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.main-navigation .menu > ul > li > a, .main-navigation .menu > li > a',
            'property' => 'color',
        ),
        array(
            'element'  => '.main-navigation .search-btn i:before, .main-navigation .search-btn i:after',
            'property' => 'color',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.main-navigation .menu > ul > li > a, .main-navigation .menu > li > a',
            'function' => 'css',
            'property' => 'color',
        ),
        array(
            'element'  => '.main-navigation .search-btn i:before, .main-navigation .search-btn i:after',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color-alpha',
    'setting'     => 'main_menu_hover_color',
    'description' => esc_html__( 'Color for level 1 menu item on hover', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 'rgba(255, 255, 255, 1)',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.main-navigation .menu > li.current-menu-item > a,.main-navigation .menu > ul > li > a:hover, .main-navigation .menu > li > a:hover',
            'property' => 'color',
        ),
        array(
            'element'  => '.main-navigation .search-btn:hover i:before, .main-navigation .search-btn:hover i:after',
            'property' => 'color',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.main-navigation .menu > li.current-menu-item > a,.main-navigation .menu > ul > li > a:hover, .main-navigation .menu > li > a:hover',
            'function' => 'css',
            'property' => 'color',
        ),
        array(
            'element'  => '.main-navigation .search-btn:hover i:before, .main-navigation .search-btn:hover i:after',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'text',
    'label'       => esc_html__( 'Menu padding', 'tm-lawyers' ),
    'setting'     => 'main_menu_padding',
    'description' => esc_html__( 'Set up padding for menu item', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '25px 13px 25px 13px',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.main-navigation .menu > ul > li >a, .main-navigation .menu > li >a',
            'property' => 'padding',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.main-navigation .menu > ul > li >a, .main-navigation .menu > li >a',
            'function' => 'css',
            'property' => 'padding',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'     => 'typography',
    'label'    => esc_html__( 'Sub-menu', 'tm-lawyers' ),
    'settings' => 'main_submenu_font',
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => array(
        'font-style'     => array( 'bold', 'italic' ),
        'font-family'    => TM_LAWYERS_SECONDARY_FONT,
        'font-size'      => '14px',
        'font-weight'    => '400',
        'line-height'    => '1',
        'letter-spacing' => '0em',
    ),
    'choices'  => array(
        'font-style'     => true,
        'font-family'    => true,
        'font-size'      => true,
        'font-weight'    => true,
        'line-height'    => true,
        'letter-spacing' => true,
    ),
    'output'   => array(
        array(
            'element' => '.main-navigation .sub-menu li a, .main-navigation .children li a',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'text',
    'setting'     => 'main_submenu_padding',
    'description' => esc_html__( 'Set up padding for sub-menu item', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '20px 0px 20px 0px',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.main-navigation .sub-menu li a, .main-navigation .children li a',
            'property' => 'padding',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.main-navigation .sub-menu li a, .main-navigation .children li a',
            'function' => 'css',
            'property' => 'padding',
        ),
    ),
) );