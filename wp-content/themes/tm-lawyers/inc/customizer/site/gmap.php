<?php
/**
 * Site General
 * ================
 */
$section  = 'site_gmap';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'     => 'text',
    'setting'  => 'site_gmap_key',
    'label'    => esc_html__( 'Google Map API Key', 'tm-lawyers' ),
    'section'  => $section,
    'priority' => $priority ++,
    'default'  => '',
) );