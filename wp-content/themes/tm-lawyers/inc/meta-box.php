<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB directory)
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field object $field Field object
 *
 * @return bool                     True if metabox should show
 */
function cmb2_hide_if_no_cats( $field ) {
    // Don't show this field if not in the cats category
    if ( ! has_tag( 'cats', $field->object_id ) ) {
        return false;
    }

    return true;
}

add_filter( 'cmb2_meta_boxes', 'tm_lawyers_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 *
 * @return array
 */
function tm_lawyers_metaboxes( array $meta_boxes ) {

    // Start with an underscore to hide fields from custom fields list
    $prefix = 'tm_lawyers_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $meta_boxes['page_metabox'] = array(
        'id'           => 'page_metabox',
        'title'        => esc_html__( 'Page Settings', 'tm-lawyers' ),
        'object_types' => array( 'page' ), // Post type
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
        'fields'       => array(
            array(
                'name'    => esc_html__( 'Page Layout', 'tm-lawyers' ),
                'desc'    => esc_html__( 'Choose a layout you want', 'tm-lawyers' ),
                'id'      => $prefix . 'page_layout_private',
                'type'    => 'select',
                'options' => array(
                    'default'         => esc_html__( 'Default', 'tm-lawyers' ),
                    'full-width'      => esc_html__( 'Full width', 'tm-lawyers' ),
                    'content-sidebar' => esc_html__( 'Content-Sidebar', 'tm-lawyers' ),
                    'sidebar-content' => esc_html__( 'Sidebar-Content', 'tm-lawyers' ),
                ),
            ),
            array(
                'name' => esc_html__( 'Disable Title', 'tm-lawyers' ),
                'desc' => esc_html__( 'Check this box to disable the title of the page', 'tm-lawyers' ),
                'id'   => $prefix . 'disable_title',
                'type' => 'checkbox'
            ),
            array(
                'name' => esc_html__( 'Title Background', 'tm-lawyers' ),
                'desc' => esc_html__( 'Upload an image or enter a URL for heading title', 'tm-lawyers' ),
                'id'   => $prefix . 'heading_image',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__( 'Disable Comment', 'tm-lawyers' ),
                'desc' => esc_html__( 'Check this box to disable comment form of the page', 'tm-lawyers' ),
                'id'   => $prefix . 'disable_comment',
                'type' => 'checkbox'
            ),
            array(
                'name' => esc_html__( 'Disable Newsletter', 'tm-lawyers' ),
                'desc' => esc_html__( 'Check this box to disable newsletter', 'tm-lawyers' ),
                'id'   => $prefix . 'disable_newsletter',
                'type' => 'checkbox'
            ),
            array(
                'name' => esc_html__( 'Custom Class', 'tm-lawyers' ),
                'desc' => esc_html__( 'Enter custom class for this page', 'tm-lawyers' ),
                'id'   => $prefix . 'custom_class',
                'type' => 'text'
            ),
        ),
    );

    return $meta_boxes;
}
