<?php
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Thememove_Blog extends WPBakeryShortCode {
    }
}

vc_map( array(
    'name'        => esc_html__( 'Blog', 'tm-lawyers' ),
    'description' => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'category'    => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'base'        => 'thememove_blog',
    'icon'        => 'tm-shortcode-ico default-icon',
    'params'      => array(
        array(
            "type"       => "dropdown",
            "heading"    => "Show Share Buttons",
            "param_name" => "enable_share",
            "value"      => array(
                "No"  => 'false',
                "Yes" => 'true',
            ),
        ),
    )
) );