<?php
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Thememove_OurTeam extends WPBakeryShortCode {
    }
}

vc_map( array(
    'name'        => esc_html__( 'Our Team', 'tm-lawyers' ),
    'description' => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'category'    => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'base'        => 'thememove_ourteam',
    'icon'        => 'tm-shortcode-ico default-icon',
    'params'      => array(
        array(
            'type'       => 'dropdown',
            'heading'    => esc_html__( 'Type', 'tm-lawyers' ),
            'param_name' => 'type',
            'value'      => array(
                esc_html__( '1', 'tm-lawyers' ) => '1',
                esc_html__( '2', 'tm-lawyers' ) => '2',
            ),
        ),
        array(
            'type'        => 'attach_image',
            'heading'     => esc_html__( 'Photo', 'tm-lawyers' ),
            'admin_label' => true,
            'param_name'  => 'photo',
            'description' => esc_html__( 'Member photo', 'tm-lawyers' )
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Name', 'tm-lawyers' ),
            'admin_label' => true,
            'param_name'  => 'name'
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Tagline', 'tm-lawyers' ),
            'param_name'  => 'byline',
            'description' => esc_html__( 'Example: Creative Manager', 'tm-lawyers' )
        ),
        array(
            'type'       => 'textarea',
            'heading'    => esc_html__( 'Description', 'tm-lawyers' ),
            'param_name' => 'desc'
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Profile url', 'tm-lawyers' ),
            'param_name' => 'profile'
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Extra class name', 'tm-lawyers' ),
            'param_name' => 'class',
        ),
    )
) );