<?php
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Thememove_Gmaps extends WPBakeryShortCode {
        public function __construct( $settings ) {
            parent::__construct( $settings );
            $this->jsScripts();
        }

        public function jsScripts() {
            if ( Kirki::get_option( 'tm-lawyers', 'site_gmap_key' ) != '' ) {
                $gmap_url = 'http://maps.google.com/maps/api/js?sensor=false&amp;language=en&amp;key=' . esc_attr( Kirki::get_option( 'tm-lawyers', 'site_gmap_key' ) );
            } else {
                $gmap_url = 'http://maps.google.com/maps/api/js?sensor=false&amp;language=en';
            }
            wp_enqueue_script( 'thememove-js-maps', $gmap_url );
            wp_enqueue_script( 'thememove-js-gmap3', TM_LAWYERS_THEME_ROOT . '/assets/libs/gmap3/gmap3.min.js' );
        }
    }
}

vc_map( array(
    'name'        => esc_html__( 'Google Maps', 'tm-lawyers' ),
    'description' => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'category'    => sprintf( esc_html__( 'by %s', 'tm-lawyers' ), TM_LAWYERS_PARENT_THEME_NAME ),
    'base'        => 'thememove_gmaps',
    'icon'        => 'tm-shortcode-ico default-icon',
    'params'      => array(
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Address or Coordinate', 'tm-lawyers' ),
            'admin_label' => true,
            'param_name'  => 'address',
            'value'       => '40.7590615,-73.969231',
            'description' => esc_html__( 'Enter address or coordinate.', 'tm-lawyers' ),
        ),
        array(
            'type'        => 'attach_image',
            'heading'     => esc_html__( 'Marker icon', 'tm-lawyers' ),
            'param_name'  => 'marker_icon',
            'description' => esc_html__( 'Choose a image for marker address', 'tm-lawyers' ),
        ),
        array(
            'type'        => 'textarea_html',
            'heading'     => esc_html__( 'Marker Information', 'tm-lawyers' ),
            'param_name'  => 'content',
            'description' => esc_html__( 'Content for info window', 'tm-lawyers' ),
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Height', 'tm-lawyers' ),
            'param_name'  => 'map_height',
            'value'       => '480',
            'description' => esc_html__( 'Enter map height (in pixels or percentage)', 'tm-lawyers' ),
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Width', 'tm-lawyers' ),
            'param_name'  => 'map_width',
            'value'       => '100%',
            'description' => esc_html__( 'Enter map width (in pixels or percentage)', 'tm-lawyers' ),
        ),
        array(
            'type'        => 'textfield',
            'heading'     => esc_html__( 'Zoom level', 'tm-lawyers' ),
            'param_name'  => 'zoom',
            'value'       => '16',
            'description' => esc_html__( 'Map zoom level', 'tm-lawyers' ),
        ),
        array(
            'type'       => 'checkbox',
            'heading'    => esc_html__( 'Enable Map zoom', 'tm-lawyers' ),
            'param_name' => 'zoom_enable',
            'value'      => array(
                esc_html__( 'Enable', 'tm-lawyers' ) => 'enable'
            ),
        ),
        array(
            'type'        => 'dropdown',
            'heading'     => esc_html__( 'Map type', 'tm-lawyers' ),
            'admin_label' => true,
            'param_name'  => 'map_type',
            'description' => esc_html__( 'Choose a map type', 'tm-lawyers' ),
            'value'       => array(
                esc_html__( 'Roadmap', 'tm-lawyers' )   => 'roadmap',
                esc_html__( 'Satellite', 'tm-lawyers' ) => 'satellite',
                esc_html__( 'Hybrid', 'tm-lawyers' )    => 'hybrid',
                esc_html__( 'Terrain', 'tm-lawyers' )   => 'terrain',
            ),
        ),
        array(
            'type'        => 'dropdown',
            'heading'     => esc_html__( 'Map style', 'tm-lawyers' ),
            'admin_label' => true,
            'param_name'  => 'map_style',
            'description' => esc_html__( 'Choose a map style. This approach changes the style of the Roadmap types (base imagery in terrain and satellite views is not affected, but roads, labels, etc. respect styling rules', 'tm-lawyers' ),
            'value'       => array(
                esc_html__( 'Default', 'tm-lawyers' )          => 'default',
                esc_html__( 'Grayscale', 'tm-lawyers' )        => 'style1',
                esc_html__( 'Subtle Grayscale', 'tm-lawyers' ) => 'style2',
                esc_html__( 'Apple Maps-esque', 'tm-lawyers' ) => 'style3',
                esc_html__( 'Pale Dawn', 'tm-lawyers' )        => 'style4',
                esc_html__( 'Muted Blue', 'tm-lawyers' )       => 'style5',
                esc_html__( 'Paper', 'tm-lawyers' )            => 'style6',
                esc_html__( 'Light Dream', 'tm-lawyers' )      => 'style7',
                esc_html__( 'Retro', 'tm-lawyers' )            => 'style8',
                esc_html__( 'Avocado World', 'tm-lawyers' )    => 'style9',
                esc_html__( 'Facebook', 'tm-lawyers' )         => 'style10',
                esc_html__( 'Shades of Grey', 'tm-lawyers' )   => 'style11',
                esc_html__( 'Custom', 'tm-lawyers' )           => 'custom'
            )
        ),
        array(
            'type'       => 'textarea_raw_html',
            'heading'    => esc_html__( 'Map style snippet', 'tm-lawyers' ),
            'param_name' => 'map_style_snippet',
            'dependency' => array(
                'element' => 'map_style',
                'value'   => 'custom',
            )
        ),
        array(
            'type'       => 'textfield',
            'heading'    => esc_html__( 'Extra class name', 'tm-lawyers' ),
            'param_name' => 'el_class',
        ),
    )
) );