<?php
$section  = 'navigation_general';
$priority = 1;

Kirki::add_field( 'tm-lawyers', array(
    'type'        => 'toggle',
    'setting'     => 'nav_sticky_enable',
    'label'       => esc_html__( 'Sticky Menu', 'tm-lawyers' ),
    'description' => esc_html__( 'Turn on this option if you want to enable sticky header on your site', 'tm-lawyers' ),
    'section'     => $section,
    'priority'    => $priority ++,
    'default'     => 0,
) );