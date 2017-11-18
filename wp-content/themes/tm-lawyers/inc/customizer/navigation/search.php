<?php
$section  = 'navigation_search';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'toggle',
    'setting'     => 'search_enable',
    'label'       => esc_html__( 'Search', 'tm-lawyers' ),
    'description' => esc_html__( 'Turn on this option if you want to enable search box in header', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 1,
) );