<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package TM Lawyers
 */
?>
<?php tha_html_before(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php tha_head_top(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php tha_head_bottom(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>
<div class="mobile-menu-wrap">
    <div class="mobile-menu-overlay"></div>
    <div class="mobile-menu-inner">
        <?php if ( class_exists( 'TM_Walker_Nav_Menu' ) && has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array(
                'theme_location'  => 'primary',
                'menu_id'         => 'mobile-menu',
                'container_class' => 'mobile-menu',
                'walker'          => new TM_Walker_Nav_Menu
            ) );
        } else {
            wp_nav_menu( array(
                'theme_location'  => 'primary',
                'menu_id'         => 'mobile-menu',
                'container_class' => 'mobile-menu'
            ) );
        } ?>
    </div>
</div>
<div id="page" class="hfeed site">
    <?php require_once( get_template_directory() . '/template-parts/' . Kirki::get_option( 'tm-lawyers', 'header_type' ) . '.php' ); ?>
    <?php tha_content_before(); ?>
    <div id="content" class="site-content">
        <?php tha_content_top(); ?>
