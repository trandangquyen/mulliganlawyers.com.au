<?php
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Thememove_Title extends WPBakeryShortCode {
    }
}

vc_map( array(
    'name'        => esc_html__( 'Title', 'tm-lawyers' ),
    'description' => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'category'    => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'base'        => 'thememove_title',
    'icon'        => 'tm-shortcode-ico default-icon',
    'params'      => array(
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Small title', 'tm-lawyers' ),
            'param_name'  => 'small_title',
            'admin_label' => true,
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Big title', 'tm-lawyers' ),
            'param_name'  => 'big_title',
            'admin_label' => true,
        ),
        array(
            'type'       => 'checkbox',
            'param_name' => 'show_decor',
            'value'      => array(
                esc_html__( 'Show decor lines', 'tm-lawyers' ) => true
            )
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Extra class name', 'tm-lawyers' ),
            'param_name' => 'el_class',
        ),
    )
) );