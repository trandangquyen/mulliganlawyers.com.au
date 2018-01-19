<?php
$section  = 'header_general';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'select',
    'setting'     => 'header_type',
    'label'       => esc_html__( 'Header Type', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose the header type you want', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 'header01',
    'choices'     => array(
        'header01' => 'Type 01',
        'header02' => 'Type 02',
        'header03' => 'Type 03'
    ),
) );


Kirki::add_field( 'tm-lawyers', array(
    'type'      => 'color-alpha',
    'setting'   => 'header_bg_color',
    'label'     => esc_html__( 'Background color', 'tm-lawyers' ),
    'section'   => $section,
    'priority'  => $priority ++,
    'default'   => '#ffffff',
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => '.site-header',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
        array(
            'element'  => '.site-header',
            'function' => 'css',
            'property' => 'background-color',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'      => 'text',
    'setting'   => 'header_padding',
    'label'     => esc_html__( 'Padding', 'tm-lawyers' ),
    'section'   => $section,
    'priority'  => $priority ++,
    'default'   => '0px 0px 0px 0px',
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => '.site-header',
            'property' => 'padding',
        ),
    ),
    'js_vars'   => array(
        array(
            'element'  => '.site-header',
            'function' => 'css',
            'property' => 'padding',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'      => 'text',
    'setting'   => 'header_margin',
    'label'     => esc_html__( 'Margin', 'tm-lawyers' ),
    'section'   => $section,
    'priority'  => $priority ++,
    'default'   => '0px 0px 0px 0px',
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => '.site-header',
            'property' => 'margin',
        ),
    ),
    'js_vars'   => array(
        array(
            'element'  => '.site-header',
            'function' => 'css',
            'property' => 'margin',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'toggle',
    'setting'     => 'header_left_enable',
    'label'       => esc_html__( 'Enable Header Left', 'tm-lawyers' ),
    'description' => esc_html__( 'Turn on this option if you want to enable header left', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 1,
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'toggle',
    'setting'     => 'header_right_enable',
    'label'       => esc_html__( 'Enable Header Right', 'tm-lawyers' ),
    'description' => esc_html__( 'Turn on this option if you want to enable header right', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 1,
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'text',
    'setting'     => 'header_right_text',
    'label'       => esc_html__( 'Header Right text', 'tm-lawyers' ),
    'description' => esc_html__( 'Entry the text for header right block', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '<span class="icon pe-7s-culture"></span> <span class="text"><a href="/#case-evaluation">FREE CASE EVALUATION</a></span>',
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '.site-header-right-content',
            'function' => 'html',
        ),
    ),
    'required'    => array(
        array(
            'setting'  => 'header_right_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'      => 'image',
    'setting'   => 'header_right_bg',
    'label'     => esc_html__( 'Header Right Background image', 'tm-lawyers' ),
    'section'   => $section,
    'priority'  => $priority ++,
    'default'   => 'http://lawyers.thememove.com/data/images/header_right.png',
    'transport' => 'postMessage',
    'output'    => array(
        array(
            'element'  => '.header01 .site-header-right, .header02 .site-header-right-content',
            'property' => 'background-image',
        ),
    ),
    'required'  => array(
        array(
            'setting'  => 'header_right_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );
