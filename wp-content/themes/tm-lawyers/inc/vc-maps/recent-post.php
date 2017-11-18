<?php
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Thememove_Recentposts extends WPBakeryShortCode {
    }
}

vc_map( array(
    'name'        => esc_html__( 'Recent Posts', 'tm-lawyers' ),
    'description' => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'category'    => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'base'        => 'thememove_recentposts',
    'icon'        => 'tm-shortcode-ico default-icon',
    'params'      => array(
        array(
            "type"       => 'dropdown',
            "heading"    => esc_html__( 'Type', 'tm-lawyers' ),
            "param_name" => 'type',
            "value"      => array(
                esc_html__( 'Type 1', 'tm-lawyers' ) => 'type_1',
                esc_html__( 'Type 2', 'tm-lawyers' ) => 'type_2',
            ),
        ),
        array(
            'type'       => 'checkbox',
            'param_name' => 'show_title',
            'value'      => array(
                esc_html__( 'Show title', 'tm-lawyers' ) => true
            )
        ),
        array(
            'type'       => 'checkbox',
            'param_name' => 'show_excerpt',
            'value'      => array(
                esc_html__( 'Show excerpt', 'tm-lawyers' ) => true
            )
        ),
        array(
            'type'       => 'checkbox',
            'param_name' => 'show_meta',
            'value'      => array(
                esc_html__( 'Show Meta', 'tm-lawyers' ) => true
            )
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Enter numbers of articles', 'tm-lawyers' ),
            'param_name' => 'number',
        ),
    )
) );

