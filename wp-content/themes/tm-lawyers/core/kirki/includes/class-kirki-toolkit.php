<?php
/**
 * The main Kirki object
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2015, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Kirki_Toolkit' ) ) {
    final class Kirki_Toolkit {

        /** @var Kirki The only instance of this class */
        public static $instance = null;

        public static $version = '2.0.7';

        public $font_registry = null;
        public $scripts = null;
        public $api = null;
        public $styles = array();

        /**
         * Access the single instance of this class
         * @return Kirki
         */
        public static function get_instance() {
            if ( null == self::$instance ) {
                self::$instance = new Kirki_Toolkit();
            }

            return self::$instance;
        }

        /**
         * Shortcut method to get the translation strings
         */
        public static function i18n() {

            $i18n = array(
                'background-color'      => esc_attr__( 'Background Color', 'tm-lawyers' ),
                'background-image'      => esc_attr__( 'Background Image', 'tm-lawyers' ),
                'no-repeat'             => esc_attr__( 'No Repeat', 'tm-lawyers' ),
                'repeat-all'            => esc_attr__( 'Repeat All', 'tm-lawyers' ),
                'repeat-x'              => esc_attr__( 'Repeat Horizontally', 'tm-lawyers' ),
                'repeat-y'              => esc_attr__( 'Repeat Vertically', 'tm-lawyers' ),
                'inherit'               => esc_attr__( 'Inherit', 'tm-lawyers' ),
                'background-repeat'     => esc_attr__( 'Background Repeat', 'tm-lawyers' ),
                'cover'                 => esc_attr__( 'Cover', 'tm-lawyers' ),
                'contain'               => esc_attr__( 'Contain', 'tm-lawyers' ),
                'background-size'       => esc_attr__( 'Background Size', 'tm-lawyers' ),
                'fixed'                 => esc_attr__( 'Fixed', 'tm-lawyers' ),
                'scroll'                => esc_attr__( 'Scroll', 'tm-lawyers' ),
                'background-attachment' => esc_attr__( 'Background Attachment', 'tm-lawyers' ),
                'left-top'              => esc_attr__( 'Left Top', 'tm-lawyers' ),
                'left-center'           => esc_attr__( 'Left Center', 'tm-lawyers' ),
                'left-bottom'           => esc_attr__( 'Left Bottom', 'tm-lawyers' ),
                'right-top'             => esc_attr__( 'Right Top', 'tm-lawyers' ),
                'right-center'          => esc_attr__( 'Right Center', 'tm-lawyers' ),
                'right-bottom'          => esc_attr__( 'Right Bottom', 'tm-lawyers' ),
                'center-top'            => esc_attr__( 'Center Top', 'tm-lawyers' ),
                'center-center'         => esc_attr__( 'Center Center', 'tm-lawyers' ),
                'center-bottom'         => esc_attr__( 'Center Bottom', 'tm-lawyers' ),
                'background-position'   => esc_attr__( 'Background Position', 'tm-lawyers' ),
                'background-opacity'    => esc_attr__( 'Background Opacity', 'tm-lawyers' ),
                'on'                    => esc_attr__( 'ON', 'tm-lawyers' ),
                'off'                   => esc_attr__( 'OFF', 'tm-lawyers' ),
                'all'                   => esc_attr__( 'All', 'tm-lawyers' ),
                'cyrillic'              => esc_attr__( 'Cyrillic', 'tm-lawyers' ),
                'cyrillic-ext'          => esc_attr__( 'Cyrillic Extended', 'tm-lawyers' ),
                'devanagari'            => esc_attr__( 'Devanagari', 'tm-lawyers' ),
                'greek'                 => esc_attr__( 'Greek', 'tm-lawyers' ),
                'greek-ext'             => esc_attr__( 'Greek Extended', 'tm-lawyers' ),
                'khmer'                 => esc_attr__( 'Khmer', 'tm-lawyers' ),
                'latin'                 => esc_attr__( 'Latin', 'tm-lawyers' ),
                'latin-ext'             => esc_attr__( 'Latin Extended', 'tm-lawyers' ),
                'vietnamese'            => esc_attr__( 'Vietnamese', 'tm-lawyers' ),
                'hebrew'                => esc_attr__( 'Hebrew', 'tm-lawyers' ),
                'arabic'                => esc_attr__( 'Arabic', 'tm-lawyers' ),
                'bengali'               => esc_attr__( 'Bengali', 'tm-lawyers' ),
                'gujarati'              => esc_attr__( 'Gujarati', 'tm-lawyers' ),
                'tamil'                 => esc_attr__( 'Tamil', 'tm-lawyers' ),
                'telugu'                => esc_attr__( 'Telugu', 'tm-lawyers' ),
                'thai'                  => esc_attr__( 'Thai', 'tm-lawyers' ),
                'serif'                 => _x( 'Serif', 'font style', 'tm-lawyers' ),
                'sans-serif'            => _x( 'Sans Serif', 'font style', 'tm-lawyers' ),
                'monospace'             => _x( 'Monospace', 'font style', 'tm-lawyers' ),
                'font-family'           => esc_attr__( 'Font Family', 'tm-lawyers' ),
                'font-size'             => esc_attr__( 'Font Size', 'tm-lawyers' ),
                'font-weight'           => esc_attr__( 'Font Weight', 'tm-lawyers' ),
                'line-height'           => esc_attr__( 'Line Height', 'tm-lawyers' ),
                'letter-spacing'        => esc_attr__( 'Letter Spacing', 'tm-lawyers' ),
                'top'                   => esc_attr__( 'Top', 'tm-lawyers' ),
                'bottom'                => esc_attr__( 'Bottom', 'tm-lawyers' ),
                'left'                  => esc_attr__( 'Left', 'tm-lawyers' ),
                'right'                 => esc_attr__( 'Right', 'tm-lawyers' ),
                'color'                 => esc_attr__( 'Color', 'tm-lawyers' ),
                'add-image'             => esc_attr__( 'Add Image', 'tm-lawyers' ),
                'change-image'          => esc_attr__( 'Change Image', 'tm-lawyers' ),
                'remove'                => esc_attr__( 'Remove', 'tm-lawyers' ),
                'no-image-selected'     => esc_attr__( 'No Image Selected', 'tm-lawyers' ),
            );

            $config = apply_filters( 'kirki/config', array() );

            if ( isset( $config['i18n'] ) ) {
                $i18n = wp_parse_args( $config['i18n'], $i18n );
            }

            return $i18n;

        }

        /**
         * Shortcut method to get the font registry.
         */
        public static function fonts() {
            return self::get_instance()->font_registry;
        }

        /**
         * Constructor is private, should only be called by get_instance()
         */
        private function __construct() {
        }

        /**
         * Return true if we are debugging Kirki.
         */
        public static function kirki_debug() {
            return (bool) ( defined( 'KIRKI_DEBUG' ) && KIRKI_DEBUG );
        }

        /**
         * Take a path and return it clean
         *
         * @param string $path
         *
         * @return string
         */
        public static function clean_file_path( $path ) {
            $path = str_replace( '', '', str_replace( array( "\\", "\\\\" ), '/', $path ) );
            if ( '/' === $path[ strlen( $path ) - 1 ] ) {
                $path = rtrim( $path, '/' );
            }

            return $path;
        }

        /**
         * Determine if we're on a parent theme
         *
         * @param $file string
         *
         * @return bool
         */
        public static function is_parent_theme( $file ) {
            $file = self::clean_file_path( $file );
            $dir  = self::clean_file_path( get_template_directory() );
            $file = str_replace( '//', '/', $file );
            $dir  = str_replace( '//', '/', $dir );
            if ( false !== strpos( $file, $dir ) ) {
                return true;
            }

            return false;
        }

        /**
         * Determine if we're on a child theme.
         *
         * @param $file string
         *
         * @return bool
         */
        public static function is_child_theme( $file ) {
            $file = self::clean_file_path( $file );
            $dir  = self::clean_file_path( get_stylesheet_directory() );
            $file = str_replace( '//', '/', $file );
            $dir  = str_replace( '//', '/', $dir );
            if ( false !== strpos( $file, $dir ) ) {
                return true;
            }

            return false;
        }

        /**
         * Determine if we're running as a plugin
         */
        private static function is_plugin() {
            if ( false !== strpos( self::clean_file_path( __FILE__ ), self::clean_file_path( get_stylesheet_directory() ) ) ) {
                return false;
            }
            if ( false !== strpos( self::clean_file_path( __FILE__ ), self::clean_file_path( get_template_directory_uri() ) ) ) {
                return false;
            }
            if ( false !== strpos( self::clean_file_path( __FILE__ ), self::clean_file_path( WP_CONTENT_DIR . '/themes/' ) ) ) {
                return false;
            }

            return true;
        }

        /**
         * Determine if we're on a theme
         *
         * @param $file string
         *
         * @return bool
         */
        public static function is_theme( $file ) {
            if ( true == self::is_child_theme( $file ) || true == self::is_parent_theme( $file ) ) {
                return true;
            }

            return false;
        }
    }
}
