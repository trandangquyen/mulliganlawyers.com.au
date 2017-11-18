<?php
$section  = 'page_404';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'     => 'text',
    'setting'  => 'page_404_big_title',
    'label'    => esc_html__( 'Title', 'tm-lawyers' ),
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => '<b>PAGE</b> NOT FOUND',
) );

Kirki::add_field( 'tm-lawyers', array(
    'type'     => 'text',
    'setting'  => 'page_404_sub_title',
    'label'    => esc_html__( 'Sub title', 'tm-lawyers' ),
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => 'Sorry, the page you requested could not be found.'
) );