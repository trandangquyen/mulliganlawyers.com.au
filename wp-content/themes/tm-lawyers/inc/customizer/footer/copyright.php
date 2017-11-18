<?php
$section  = 'footer_copyright';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'toggle',
    'setting'     => 'copyright_enable',
    'label'       => esc_html__( 'Copyright', 'tm-lawyers' ),
    'description' => esc_html__( 'Enabling this option will display copyright area', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 1,
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'textarea',
    'setting'     => 'copyright_text_left',
    'label'       => esc_html__( 'Left text', 'tm-lawyers' ),
    'description' => esc_html__( 'Entry the text for left block', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 'Lawyers Theme Made by &lt;a target=&quot;_blank&quot; href=&quot;http://thememove.com&quot;&gt;ThemeMove&lt;/a&gt;',
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '.copyright .copyright-left',
            'function' => 'html',
        ),
    ),
    'required'    => array(
        array(
            'setting'  => 'copyright_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'textarea',
    'setting'     => 'copyright_text_right',
    'label'       => esc_html__( 'Right text', 'tm-lawyers' ),
    'description' => esc_html__( 'Entry the text for right block', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '&amp;copy; Copyrights 2015 &lt;a target=&quot;_blank&quot; href=&quot;http://thememove.com&quot;&gt;ThemeMove&lt;/a&gt;, Inc. All rights reserved.',
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '.copyright .copyright-right',
            'function' => 'html',
        ),
    ),
    'required'    => array(
        array(
            'setting'  => 'copyright_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color',
    'setting'     => 'copyright_text_color',
    'label'       => esc_html__( 'Text color', 'tm-lawyers' ),
    'description' => esc_html__( 'Choose color for copyright text', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#AAAAAA',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.copyright',
            'property' => 'color',
        ),
    ),
    'required'    => array(
        array(
            'setting'  => 'copyright_enable',
            'operator' => '==',
            'value'    => 1,
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.copyright',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'color-alpha',
    'setting'     => 'copyright_bg_color',
    'label'       => esc_html__( 'Background color', 'tm-lawyers' ),
    'description' => esc_html__( 'Setup background color for your copyright section', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => '#333333',
    'transport'   => 'postMessage',
    'output'      => array(
        array(
            'element'  => '.copyright',
            'property' => 'background-color',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => '.copyright',
            'function' => 'css',
            'property' => 'background-color',
        ),
    ),
) );