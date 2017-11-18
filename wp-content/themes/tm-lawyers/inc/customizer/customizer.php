<?php
/**
 * TM Lawyers Theme Customizer
 *
 * @package TM Lawyers
 */

/**
 * Configuration for the Kirki Customizer
 * ======================================
 */
function tm_lawyers_config() {
    $args = array(
        'styles_priority' => 999,
        'width'           => '300px',
        'url_path'        => TM_LAWYERS_THEME_ROOT . '/core/kirki/',
    );

    return $args;
}

add_filter( 'kirki/config', 'tm_lawyers_config' );

/**
 * Remove Unused Native Sections
 * =============================
 */
function tm_lawyers_remove_customizer_sections( $wp_customize ) {
    $wp_customize->remove_section( 'nav' );
    $wp_customize->remove_section( 'colors' );
    $wp_customize->remove_section( 'background_image' );
    $wp_customize->remove_section( 'header_image' );
    $wp_customize->remove_section( 'static_front_page' );
    $wp_customize->remove_control( 'blogname' );
    $wp_customize->remove_control( 'blogdescription' );
    $wp_customize->remove_control( 'page_for_posts' );
    $wp_customize->remove_control( 'display_header_text' );

}

add_action( 'customize_register', 'tm_lawyers_remove_customizer_sections' );

/**
 * General setups
 * ==============
 */
Kirki::add_config( 'tm-lawyers', array(
    'option_type' => 'theme_mod',
    'capability'  => 'edit_theme_options',
) );

require_once get_template_directory() . '/inc/customizer/panels.php';
require_once get_template_directory() . '/inc/customizer/site/_site.php';
require_once get_template_directory() . '/inc/customizer/top/_top.php';
require_once get_template_directory() . '/inc/customizer/header/_header.php';
require_once get_template_directory() . '/inc/customizer/navigation/_nav.php';
require_once get_template_directory() . '/inc/customizer/footer/_footer.php';
require_once get_template_directory() . '/inc/customizer/page/_page.php';
require_once get_template_directory() . '/inc/customizer/post/_post.php';
require_once get_template_directory() . '/inc/customizer/custom/_custom.php';

/**
 * Add custom css
 * ==============
 */
function tm_lawyers_customize_preview_css() {
    wp_enqueue_style( 'tm-lawyers-kirki-custom-css', TM_LAWYERS_THEME_ROOT . '/core/custom.css' );
}

add_action( 'customize_controls_init', 'tm_lawyers_customize_preview_css' );