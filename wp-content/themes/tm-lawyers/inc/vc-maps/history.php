<?php
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Thememove_History extends WPBakeryShortCode {
    }
}

vc_map( array(
    'name'        => esc_html__( 'History', 'tm-lawyers' ),
    'description' => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'category'    => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'base'        => 'thememove_history',
    'icon'        => 'tm-shortcode-ico default-icon',
    'params'      => array(
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Date', 'tm-lawyers' ),
            'admin_label' => true,
            'param_name'  => 'date'
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Text', 'tm-lawyers' ),
            'admin_label' => true,
            'param_name'  => 'text'
        )
    )
) );