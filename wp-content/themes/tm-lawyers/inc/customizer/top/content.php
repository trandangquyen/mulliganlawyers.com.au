<?php
$section  = 'top_content';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'typography',
    'settings'    => 'top_font',
    'description' => esc_html__( 'Set up font settings for top area text', 'tm-lawyers' ),
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
            'element' => '.site-top, .site-top-left, .site-top-right',
        ),
    ),
    'required'    => array(
        array(
            'setting'  => 'top_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color',
    'setting'     => 'top_link_color',
    'label'       => esc_html__( 'Link color', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose color for text link', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#fff',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.site-top a',
            'property' => 'color',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.site-top a',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
    'required'    => array(
        array(
            'setting'  => 'top_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color',
    'setting'     => 'top_link_color_hover',
    'description' => esc_html__( 'Choose color for text link on hover', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#C6A472',
    'output'      => array(
        array(
            'element'  => '.site-top a:hover',
            'property' => 'color',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.site-top a:hover',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
    'required'    => array(
        array(
            'setting'  => 'top_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color',
    'setting'     => 'top_left_text_color',
    'label'       => esc_html__( 'Left text color', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose color for left text', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#fff',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.site-top-left',
            'property' => 'color',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.site-top-left',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
    'required'    => array(
        array(
            'setting'  => 'top_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'text',
    'setting'     => 'top_right_text',
    'label'       => esc_html__( 'Right Text', 'tm-lawyers' ),
    'description' => esc_html__( 'Entry the text for right block', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 'Add an interesting message for your visitors',
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '.site-top-right',
            'function' => 'html',
        ),
    ),
    'required'    => array(
        array(
            'setting'  => 'top_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color',
    'setting'     => 'top_right_text_color',
    'label'       => esc_html__( 'Right text color', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose color for right text', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#999999',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.site-top-right',
            'property' => 'color',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.site-top-right',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
    'required'    => array(
        array(
            'setting'  => 'top_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );

if ( class_exists( 'WooCommerce' ) ) {
    Kirki::add_field( 'tm-lawyers', array(
        'type'        => 'color',
        'setting'     => 'top_right_cart_text_color',
        'label'       => esc_html__( 'Right cart text color', 'tm-lawyers' ),
        'description' => esc_html__( 'Choose color for right cart text', 'tm-lawyers' ),
        'section'     => $section,
        'priority'    => $priority ++,
        'default'     => '#ffffff',
        'transport'   => 'postMessage',
        'output'      => array(
            array(
                'element'  => '.top-cart',
                'property' => 'color',
            ),
        ),
        'js_vars'     => array(
            array(
                'element'  => '.top-cart',
                'function' => 'css',
                'property' => 'color',
            ),
        ),
        'required'    => array(
            array(
                'setting'  => 'top_enable',
                'operator' => '==',
                'value'    => 1,
            ),
        ),
    ) );

    Kirki::add_field( 'tm-lawyers', array(
        'type'        => 'color',
        'setting'     => 'top_right_cart_icon_color',
        'label'       => esc_html__( 'Right cart icon color', 'tm-lawyers' ),
        'description' => esc_html__( 'Choose color for right cart icon', 'tm-lawyers' ),
        'section'     => $section,
        'priority'    => $priority ++,
        'default'     => '#C8A472',
        'transport'   => 'postMessage',
        'output'      => array(
            array(
                'element'  => '.top-cart i',
                'property' => 'color',
            ),
        ),
        'js_vars'     => array(
            array(
                'element'  => '.top-cart i',
                'function' => 'css',
                'property' => 'color',
            ),
        ),
        'required'    => array(
            array(
                'setting'  => 'top_enable',
                'operator' => '==',
                'value'    => 1,
            ),
        ),
    ) );
}