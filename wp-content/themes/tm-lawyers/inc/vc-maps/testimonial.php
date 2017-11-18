<?php
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Thememove_Testi extends WPBakeryShortCode {
    }
}

vc_map( array(
    'name'        => esc_html__( 'Testimonials', 'tm-lawyers' ),
    'description' => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'category'    => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'base'        => 'thememove_testi',
    'icon'        => 'tm-shortcode-ico default-icon',
    'params'      => array(
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__( 'Enable Carousel', 'tm-lawyers' ),
            'param_name' => 'enable_carousel',
            'value'      => array(
                esc_html__( 'No', 'tm-lawyers' )  => 'false',
                esc_html__( 'Yes', 'tm-lawyers' ) => 'true',
            ),
        ),
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__( 'Show Bullets', 'tm-lawyers' ),
            'param_name' => 'display_bullets',
            'value'      => array(
                esc_html__( 'No', 'tm-lawyers' )  => 'false',
                esc_html__( 'Yes', 'tm-lawyers' ) => 'true',
            ),
            'dependency' => Array( 'element' => 'enable_carousel', 'value' => array( 'true' ) )
        ),
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__( 'Enable Autoplay', 'tm-lawyers' ),
            'param_name' => 'enable_autoplay',
            'value'      => array(
                esc_html__( 'No', 'tm-lawyers' )  => 'false',
                esc_html__( 'Yes', 'tm-lawyers' ) => 'true',
            ),
            'dependency' => Array( 'element' => 'enable_carousel', 'value' => array( 'true' ) )
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Slides to display', 'tm-lawyers' ),
            'param_name'  => 'slides_to_display',
            'value'       => '',
            'description' => esc_html__( 'Number of Slides to display (default: 2)', 'tm-lawyers' ),
            'dependency'  => Array( 'element' => 'enable_carousel', 'value' => array( 'true' ) )
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Number', 'tm-lawyers' ),
            'param_name'  => 'limit',
            'value'       => '',
            'description' => esc_html__( 'Number of Testimonials', 'tm-lawyers' ),
        ),
        array(
            'type'        => 'dropdown',
            'heading'     => esc_html__( 'Order by', 'tm-lawyers' ),
            'param_name'  => 'orderby',
            'value'       => array(
                esc_html__( 'None', 'tm-lawyers' )       => 'none',
                esc_html__( 'ID', 'tm-lawyers' )         => 'ID',
                esc_html__( 'Title', 'tm-lawyers' )      => 'title',
                esc_html__( 'Date', 'tm-lawyers' )       => 'date',
                esc_html__( 'Menu Order', 'tm-lawyers' ) => 'menu_order',
            ),
            'description' => esc_html__( 'How to order the items', 'tm-lawyers' ),
        ),
        array(
            'type'        => 'dropdown',
            'heading'     => esc_html__( 'Order', 'tm-lawyers' ),
            'param_name'  => 'order',
            'value'       => array(
                esc_html__( 'DESC', 'tm-lawyers' ) => 'DESC',
                esc_html__( 'ASC', 'tm-lawyers' )  => 'ASC',
            ),
            'description' => esc_html__( 'How to order the items', 'tm-lawyers' ),
        ),
        array(
            'type'        => 'dropdown',
            'heading'     => esc_html__( 'Show Author Info', 'tm-lawyers' ),
            'param_name'  => 'display_author',
            'value'       => array(
                esc_html__( 'No', 'tm-lawyers' )  => 'false',
                esc_html__( 'Yes', 'tm-lawyers' ) => 'true',
            ),
            'description' => esc_html__( 'Choose yes to show author name and byline', 'tm-lawyers' ),
        ),
        array(
            'type'        => 'dropdown',
            'heading'     => esc_html__( 'Show URL', 'tm-lawyers' ),
            'param_name'  => 'display_url',
            'value'       => array(
                esc_html__( 'No', 'tm-lawyers' )  => 'false',
                esc_html__( 'Yes', 'tm-lawyers' ) => 'true',
            ),
            'description' => esc_html__( 'Choose yes to show author url', 'tm-lawyers' ),
            'dependency'  => Array( 'element' => 'display_author', 'value' => array( 'true' ) )
        ),
        array(
            'type'        => 'dropdown',
            'heading'     => esc_html__( 'Show Author Image', 'tm-lawyers' ),
            'param_name'  => 'display_avatar',
            'value'       => array(
                esc_html__( 'No', 'tm-lawyers' )  => false,
                esc_html__( 'Yes', 'tm-lawyers' ) => true,
            ),
            'description' => esc_html__( 'Choose yes to show author avatar', 'tm-lawyers' ),
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Avatar Size', 'tm-lawyers' ),
            'param_name'  => 'size',
            'value'       => '',
            'description' => esc_html__( 'Size of Avatar (px)', 'tm-lawyers' ),
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Extra class name', 'tm-lawyers' ),
            'param_name' => 'el_class',
        ),
    )
) );