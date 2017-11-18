<?php
$section  = 'navigation_mini_cart';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'toggle',
    'setting'     => 'mini_cart_enable',
    'label'       => esc_html__( 'Mini Cart', 'tm-lawyers' ),
    'description' => esc_html__( 'Turn on this option if you want to enable mini cart in header', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 1,
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'      => 'color',
    'setting'   => 'minicart_text_color',
    'label'     => esc_html__( 'Cart Icon Color', 'tm-lawyers' ),
    'section'   => $section,
    'priority'  => $priority ++,
    'default'   => '#ffffff',
    'transport' => 'postMessage',
    'output'    => array(
        'element'  => '.mini-cart .mini-cart__button .mini-cart-icon:before',
        'property' => 'color',
    ),
    'required'  => array(
        array(
            'setting'  => 'mini_cart_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'      => 'color',
    'setting'   => 'minicart_number_color',
    'label'     => esc_html__( 'Cart Number Color', 'tm-lawyers' ),
    'section'   => $section,
    'priority'  => $priority ++,
    'default'   => '#ffffff',
    'transport' => 'postMessage',
    'output'    => array(
        'element'  => '.mini-cart .mini-cart__button .mini-cart-icon:after',
        'property' => 'color',
    ),
    'required'  => array(
        array(
            'setting'  => 'mini_cart_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'      => 'color-alpha',
    'setting'   => 'minicart_number_bg',
    'label'     => esc_html__( 'Number Background Color', 'tm-lawyers' ),
    'section'   => $section,
    'priority'  => $priority ++,
    'default'   => '#C6A472',
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => '.mini-cart .mini-cart__button .mini-cart-icon:after',
            'property' => 'background-color',
        ),
    ),
    'required'  => array(
        array(
            'setting'  => 'mini_cart_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );