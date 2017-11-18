<?php
vc_add_params( 'vc_custom_heading', array(
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__( 'Font weight', 'tm-lawyers' ),
        'param_name' => 'tm_font_weight',
        'value'      => array(
            esc_html__( 'Default', 'tm-lawyers' ) => '',
            esc_html__( '100', 'tm-lawyers' )     => '100',
            esc_html__( '200', 'tm-lawyers' )     => '200',
            esc_html__( '300', 'tm-lawyers' )     => '300',
            esc_html__( '400', 'tm-lawyers' )     => '400',
            esc_html__( '500', 'tm-lawyers' )     => '500',
            esc_html__( '600', 'tm-lawyers' )     => '600',
            esc_html__( '700', 'tm-lawyers' )     => '700',
            esc_html__( '800', 'tm-lawyers' )     => '800',
            esc_html__( '900', 'tm-lawyers' )     => '900',
        ),
    ),
    array(
        'type'       => 'dropdown',
        'heading'    => esc_html__( 'Text transform', 'tm-lawyers' ),
        'param_name' => 'tm_text_transform',
        'value'      => array(
            esc_html__( 'None', 'tm-lawyers' )       => 'none',
            esc_html__( 'Capitalize', 'tm-lawyers' ) => 'capitalize',
            esc_html__( 'Uppercase', 'tm-lawyers' )  => 'uppercase',
            esc_html__( 'Lowercase', 'tm-lawyers' )  => 'lowercase',
            esc_html__( 'Initial', 'tm-lawyers' )    => 'initial',
            esc_html__( 'Inherit', 'tm-lawyers' )    => 'inherit',
        ),
    ),
    array(
        'type'       => 'textfield',
        'heading'    => esc_html__( 'Letter spacing', 'tm-lawyers' ),
        'param_name' => 'tm_letter_spacing',
    ),
) );