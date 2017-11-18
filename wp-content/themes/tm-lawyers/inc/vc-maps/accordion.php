<?php
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Thememove_Accordion extends WPBakeryShortCode {
    }
}

vc_map( array(
    'name'        => esc_html__( 'Accordion', 'tm-lawyers' ),
    'description' => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'category'    => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'base'        => 'thememove_accordion',
    'icon'        => 'tm-shortcode-ico default-icon',
    'params'      => array(
        array(
            'type'       => 'param_group',
            'heading'    => esc_html__( 'Accordions', 'tm-lawyers' ),
            'param_name' => 'accordions',
            'params'     => array(
                array(
                    'type'        => 'textfield',
                    'heading'     => esc_html__( 'Title', 'tm-lawyers' ),
                    'param_name'  => 'title',
                    'value'       => '',
                    'admin_label' => true,
                ),
                array(
                    'type'       => 'textarea',
                    'heading'    => esc_html__( 'Content', 'tm-lawyers' ),
                    'param_name' => 'content',
                    'value'      => '',
                ),
            ),
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Extra class name', 'tm-lawyers' ),
            'param_name' => 'el_class',
        ),
    )
) );
