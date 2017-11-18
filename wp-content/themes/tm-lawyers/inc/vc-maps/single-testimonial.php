<?php

class WPBakeryShortCode_Thememove_Single_Testi extends WPBakeryShortCode {
}

vc_map( array(
    'name'                      => esc_html__( 'Single Testimonials', 'tm-lawyers' ),
    'description'               => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'category'                  => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'base'                      => 'thememove_single_testi',
    'icon'                      => 'tm-shortcode-ico default-icon',
    'allowed_container_element' => 'vc_row',
    'params'                    => array(
        array(
            'type'        => 'attach_image',
            'heading'     => esc_html__( 'Photo', 'tm-lawyers' ),
            'param_name'  => 'photo',
            'admin_label' => true,
            'description' => esc_html__( 'Photo', 'tm-lawyers' )
        ),
        array(
            'type'       => 'textarea',
            'heading'    => esc_html__( 'Content', 'tm-lawyers' ),
            'param_name' => 'content',
            'value'      => ''
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Name', 'tm-lawyers' ),
            'param_name'  => 'name',
            'value'       => '',
            'admin_label' => true
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Tagline', 'tm-lawyers' ),
            'param_name'  => 'tagline',
            'value'       => '',
            'admin_label' => true
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Extra class name', 'tm-lawyers' ),
            'param_name' => 'el_class',
        ),
    )
) );
