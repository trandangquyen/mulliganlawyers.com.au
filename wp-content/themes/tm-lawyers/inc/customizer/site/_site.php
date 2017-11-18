<?php
$panel    = 'site';
$priority = 1;

Kirki::add_section( 'site_skin', array(
    'title'    => esc_html__( 'Preset', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-art',
) );

Kirki::add_section( 'site_color', array(
    'title'    => esc_html__( 'Color', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-art',
) );

Kirki::add_section( 'site_content', array(
    'title'    => esc_html__( 'Content', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-format-aside',
) );

Kirki::add_section( 'site_heading', array(
    'title'    => esc_html__( 'Heading', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-admin-customizer',
) );

Kirki::add_section( 'site_breadcrumb', array(
    'title'    => esc_html__( 'Breadcrumb', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-filter',
) );

Kirki::add_section( 'site_newsletter', array(
    'title'    => esc_html__( 'Newsletter', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-email',
) );

Kirki::add_section( 'site_404', array(
    'title'    => esc_html__( '404 Page', 'tm-lawyers' ),
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-warning',
) );

Kirki::add_section( 'site_gmap', array(
    'title'    => esc_html__( 'Google Map API', 'tm-lawyers' ),
    'icon'     => 'dashicons-location-alt',
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-admin-tools',
) );

Kirki::add_section( 'site_other', array(
    'title'    => esc_html__( 'Other', 'tm-lawyers' ),
    'icon'     => 'schedule',
    'panel'    => $panel,
    'priority' => $priority ++,
    'icon'     => 'dashicons-admin-tools',
) );

require_once get_template_directory() . '/inc/customizer/site/skin.php';
require_once get_template_directory() . '/inc/customizer/site/color.php';
require_once get_template_directory() . '/inc/customizer/site/content.php';
require_once get_template_directory() . '/inc/customizer/site/heading.php';
if ( function_exists( 'tm_bread_crumb' ) ) {
    require_once get_template_directory() . '/inc/customizer/site/breadcrumb.php';
}
require_once get_template_directory() . '/inc/customizer/site/newsletter.php';
require_once get_template_directory() . '/inc/customizer/site/404.php';
require_once get_template_directory() . '/inc/customizer/site/gmap.php';
require_once get_template_directory() . '/inc/customizer/site/other.php';
