<?php

class WPBakeryShortCode_Thememove_Video extends WPBakeryShortCode {
}

vc_map( array(
    'name'        => esc_html__( 'Video', 'tm-lawyers' ),
    'description' => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'category'    => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'base'        => 'thememove_video',
    'icon'        => 'tm-shortcode-ico default-icon',
    'params'      => array(
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Video URL', 'tm-lawyers' ),
            'description' => esc_html__( 'Enter your video url (Youtube/Vimeo) here', 'tm-lawyers' ),
            'param_name'  => 'url',
            'value'       => 'http://vimeo.com/92033601',
            'admin_label' => true,
        ),
        array(
            'type'        => 'attach_image',
            'heading'     => esc_html__( 'Poster', 'tm-lawyers' ),
            'param_name'  => 'poster',
            'admin_label' => true,
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Extra class name', 'tm-lawyers' ),
            'param_name' => 'el_class',
        ),
    ),
) );
