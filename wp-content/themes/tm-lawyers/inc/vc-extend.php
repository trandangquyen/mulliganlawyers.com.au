<?php
/**
 * Initial setup
 * =============
 */
$new_vc_dir = get_template_directory() . '/inc/vc-template';
if ( function_exists( "vc_set_shortcodes_templates_dir" ) ) {
    vc_set_shortcodes_templates_dir( $new_vc_dir );
}

require_once get_template_directory() . '/inc/vc-maps/custom-heading.php';

require_once get_template_directory() . '/inc/vc-maps/accordion.php';
require_once get_template_directory() . '/inc/vc-maps/blog.php';
require_once get_template_directory() . '/inc/vc-maps/google-map.php';
require_once get_template_directory() . '/inc/vc-maps/recent-post.php';
require_once get_template_directory() . '/inc/vc-maps/testimonial.php';
require_once get_template_directory() . '/inc/vc-maps/single-testimonial.php';
require_once get_template_directory() . '/inc/vc-maps/skill.php';
require_once get_template_directory() . '/inc/vc-maps/history.php';
require_once get_template_directory() . '/inc/vc-maps/ourteam.php';
require_once get_template_directory() . '/inc/vc-maps/member-info.php';
require_once get_template_directory() . '/inc/vc-maps/title.php';
require_once get_template_directory() . '/inc/vc-maps/video.php';