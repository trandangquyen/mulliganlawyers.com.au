<?php
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Thememove_Skill extends WPBakeryShortCode {
    }
}

vc_map( array(
    'name'        => esc_html__( 'Skill', 'tm-lawyers' ),
    'description' => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'category'    => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'base'        => 'thememove_skill',
    'icon'        => 'tm-shortcode-ico default-icon',
    'params'      => array(
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Name', 'tm-lawyers' ),
            'admin_label' => true,
            'param_name'  => 'name'
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Value', 'tm-lawyers' ),
            'admin_label' => true,
            'param_name'  => 'value',
            'description' => esc_html__( 'Number 1-100', 'tm-lawyers' )
        ),
        array(
            'type'       => 'colorpicker',
            'heading'    => esc_html__( 'Background color', 'tm-lawyers' ),
            'param_name' => 'bg'
        ),
        array(
            'type'       => 'colorpicker',
            'heading'    => esc_html__( 'Bar color', 'tm-lawyers' ),
            'param_name' => 'bar'
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Extra class name', 'tm-lawyers' ),
            'param_name' => 'class',
        ),
    )
) );