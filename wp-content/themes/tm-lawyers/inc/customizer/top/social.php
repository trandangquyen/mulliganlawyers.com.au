<?php
$section  = 'top_social';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'repeater',
    'settings'    => 'social_links',
    'description' => esc_html__( 'You can add/remove and sort your social network link in this section', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority,
    'default'     => array(
        array(
            'social_name' => esc_html__( 'Facebook', 'tm-lawyers' ),
            'link_url'    => 'http://facebook.com',
        ),
        array(
            'social_name' => esc_html__( 'Twitter', 'tm-lawyers' ),
            'link_url'    => 'http://twitter.com',
        ),
    ),
    'fields'      => array(
        'social_name' => array(
            'type'    => 'text',
            'label'   => esc_html__( 'Name', 'tm-lawyers' ),
            'default' => '',
        ),
        'link_url'    => array(
            'type'    => 'text',
            'label'   => esc_html__( 'URL', 'tm-lawyers' ),
            'default' => '',
        ),
    ),
) );