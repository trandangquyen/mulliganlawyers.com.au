<?php
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Thememove_MemberInfo extends WPBakeryShortCode {
    }
}

vc_map( array(
    'name'        => esc_html__( 'Member Info', 'tm-lawyers' ),
    'description' => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'category'    => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'base'        => 'thememove_memberinfo',
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
            'heading'    => esc_html__( 'Facebook url', 'tm-lawyers' ),
            'param_name' => 'facebook'
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Twitter url', 'tm-lawyers' ),
            'param_name' => 'twitter'
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Instagram url', 'tm-lawyers' ),
            'param_name' => 'instagram'
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Youtube url', 'tm-lawyers' ),
            'param_name' => 'youtube'
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Vimeo url', 'tm-lawyers' ),
            'param_name' => 'vimeo'
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Phone', 'tm-lawyers' ),
            'param_name' => 'phone'
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Email', 'tm-lawyers' ),
            'param_name' => 'email'
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Extra class name', 'tm-lawyers' ),
            'param_name' => 'class',
        ),
    )
) );