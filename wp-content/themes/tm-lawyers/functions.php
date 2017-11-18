<?php
/**
 * TM Lawyers functions and definitions
 *
 * @package TM Lawyers
 */

if ( ! function_exists( 'tm_lawyers_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     * ===========================================================================
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function tm_lawyers_setup() {
        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on TM Lawyers, use a find and replace
		 * to change 'tm-lawyers' to the name of your theme in all the template files
		 */
        load_theme_textdomain( 'tm-lawyers', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
        add_theme_support( 'title-tag' );

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
        add_theme_support( 'post-thumbnails' );

        add_image_size( 'tm-lawyers-post-thumb', 848, 450, true );
        add_image_size( 'tm-lawyers-small-thumb', 80, 80, true );
        add_image_size( 'tm-lawyers-medium-thumb', 370, 220, true );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary'     => esc_html__( 'Primary Menu', 'tm-lawyers' ),
            'primary3'    => esc_html__( 'Header 03 Menu', 'tm-lawyers' ),
            'social-menu' => esc_html__( 'Social Menu', 'tm-lawyers' )
        ) );

        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

        /*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
        add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio' ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'tm_lawyers_custom_background_args', array(
            'default-color' => '#333',
            'default-image' => '',
        ) ) );

        // Support woocommerce
        add_theme_support( 'woocommerce' );
    }
endif; // tm_lawyers_setup
add_action( 'after_setup_theme', 'tm_lawyers_setup' );

/**
 * Define Constants
 * ================
 */
define( 'TM_LAWYERS_THEME_ROOT', esc_url( get_template_directory_uri() ) );
define( 'TM_LAWYERS_PARENT_THEME_NAME', wp_get_theme( get_template() )->get( 'Name' ) );
define( 'TM_LAWYERS_PARENT_THEME_VERSION', wp_get_theme( get_template() )->get( 'Version' ) );
define( 'TM_LAWYERS_PARENT_THEME_AUTHOR', wp_get_theme( get_template() )->get( 'Author' ) );
define( 'TM_LAWYERS_PRIMARY_COLOR', '#C6A472' );
define( 'TM_LAWYERS_SECONDARY_COLOR', '#333333' );
define( 'TM_LAWYERS_PRIMARY_FONT', 'EB Garamond' );
define( 'TM_LAWYERS_SECONDARY_FONT', 'Poppins' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * ===========================================================================
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if ( ! isset( $content_width ) ) {
    $content_width = 640; /* pixels */
}

/**
 * Register widget area.
 * ====================
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function tm_lawyers_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'tm-lawyers' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Newsletter Form', 'tm-lawyers' ),
        'id'            => 'newsletter-form',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Top Slider', 'tm-lawyers' ),
        'id'            => 'top-slider',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Top Left', 'tm-lawyers' ),
        'id'            => 'top-left',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget header-right %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Header 02 Info 1', 'tm-lawyers' ),
        'id'            => 'header02-info1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget header02-info1 %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Header 02 Info 2', 'tm-lawyers' ),
        'id'            => 'header02-info2',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget header02-info2 %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Header 03 Info', 'tm-lawyers' ),
        'id'            => 'header03-info',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget header03-info %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ) );

    if ( class_exists( 'WooCommerce' ) ) {
        register_sidebar( array(
            'name'          => esc_html__( 'Sidebar for shop', 'tm-lawyers' ),
            'id'            => 'sidebar-shop',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        ) );
    }
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1 Widget Area', 'tm-lawyers' ),
        'id'            => 'footer',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title"><span>',
        'after_title'   => '</span></h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2 Widget Area', 'tm-lawyers' ),
        'id'            => 'footer2',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title"><span>',
        'after_title'   => '</span></h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3 Widget Area', 'tm-lawyers' ),
        'id'            => 'footer3',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title"><span>',
        'after_title'   => '</span></h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 4 Widget Area', 'tm-lawyers' ),
        'id'            => 'footer4',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title"><span>',
        'after_title'   => '</span></h3>',
    ) );
}

add_action( 'widgets_init', 'tm_lawyers_widgets_init' );

/**
 * Enqueue scripts and styles.
 * ==========================
 */
function tm_lawyers_scripts() {
    wp_enqueue_style( 'tm-lawyers-style', TM_LAWYERS_THEME_ROOT . '/style.css' );
    wp_enqueue_style( 'tm-lawyers-main', TM_LAWYERS_THEME_ROOT . '/assets/css/output/main-ltr.css' );
    wp_enqueue_style( 'tm-lawyers-icon', TM_LAWYERS_THEME_ROOT . '/assets/css/tm-lawyers-icon.css' );
    wp_enqueue_style( 'font-awesome', TM_LAWYERS_THEME_ROOT . '/assets/libs/font-awesome/css/font-awesome.min.css' );
    wp_enqueue_style( 'pe-icon-7-stroke', TM_LAWYERS_THEME_ROOT . '/assets/css/pe-icon-7-stroke.css' );
    wp_enqueue_script( 'lightgallery', TM_LAWYERS_THEME_ROOT . '/assets/libs/lightgallery/js/lightgallery-all.min.js', array( 'jquery' ), null, true );
    wp_enqueue_style( 'lightgallery', TM_LAWYERS_THEME_ROOT . '/assets/libs/lightgallery/css/lightgallery.min.css' );
    if ( Kirki::get_option( 'tm-lawyers', 'nav_sticky_enable' ) == 1 ) {
        wp_enqueue_script( 'head-room-jquery', TM_LAWYERS_THEME_ROOT . '/assets/libs/headroom/jQuery.headroom.min.js', array( 'jquery' ), TM_LAWYERS_PARENT_THEME_VERSION, true );
        wp_enqueue_script( 'head-room', TM_LAWYERS_THEME_ROOT . '/assets/libs/headroom/headroom.min.js', array( 'jquery' ), TM_LAWYERS_PARENT_THEME_VERSION, true );
    }
    wp_enqueue_script( 'owl-carousel', TM_LAWYERS_THEME_ROOT . '/assets/libs/owl-carousel/owl.carousel.min.js', array( 'jquery' ), TM_LAWYERS_PARENT_THEME_VERSION, true );
    wp_enqueue_script( 'counterup', TM_LAWYERS_THEME_ROOT . '/assets/libs/waypoint/jquery.counterup.min.js', array( 'jquery' ), TM_LAWYERS_PARENT_THEME_VERSION, true );
    wp_enqueue_script( 'fitvids', TM_LAWYERS_THEME_ROOT . '/assets/libs/jquery.fitvids.js', array( 'jquery' ), TM_LAWYERS_PARENT_THEME_VERSION, true );
    wp_enqueue_script( 'tm-lawyers-js-main', TM_LAWYERS_THEME_ROOT . '/assets/js/main.js', array( 'jquery' ), TM_LAWYERS_PARENT_THEME_VERSION, true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'tm_lawyers_scripts' );

/**
 * Enqueue admin scripts and styles.
 * ==========================
 */
function tm_lawyers_admin_scripts() {
    wp_enqueue_style( 'tm-lawyers-admin-style', TM_LAWYERS_THEME_ROOT . '/assets/admin/css/style.css' );
}

add_action( 'admin_enqueue_scripts', 'tm_lawyers_admin_scripts' );

/**
 * Setup custom css.
 * ================
 */
function tm_lawyers_custom_css() {
    $tm_lawyers_custom_css = Kirki::get_option( 'tm-lawyers', 'custom_css' );
    if ( Kirki::get_option( 'tm-lawyers', 'custom_css_enable' ) == 1 ) {
        wp_add_inline_style( 'tm-lawyers-main', html_entity_decode( $tm_lawyers_custom_css, ENT_QUOTES ) );
    }
}

add_action( 'wp_enqueue_scripts', 'tm_lawyers_custom_css' );

/**
 * Implement other setup.
 * ======================
 */
// Load core
require_once get_template_directory() . '/core/core.php';
require_once get_template_directory() . '/inc/customizer/customizer.php';
require_once get_template_directory() . '/inc/oneclick.php';

// Theme Hook Alliance
require_once get_template_directory() . '/inc/tha-theme-hooks.php';

// Load tmg
require_once get_template_directory() . '/inc/tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/tgm-plugin-registration.php';

// Load metabox
require_once get_template_directory() . '/inc/meta-box.php';

// Load custom js
require_once get_template_directory() . '/inc/custom-js.php';

// Load custom header
require_once get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require_once get_template_directory() . '/inc/template-tags.php';

// Custom functions that act independently of the theme templates.
require_once get_template_directory() . '/inc/extras.php';

// Load Jetpack compatibility file.
require_once get_template_directory() . '/inc/jetpack.php';

// Support shortcode in widget
add_filter( 'widget_text', 'do_shortcode' );

// Remove admin notification of Projects
if ( class_exists( 'Projects_Admin' ) ) {
    global $projects;
    remove_action( 'admin_notices', array( $projects->admin, 'configuration_admin_notice' ) );
}

// TM Core Functions
if ( ! function_exists( 'tm_lawyers_base_encode' ) ) {
    function tm_lawyers_base_encode( $data ) {
        return $data;
    }
}

if ( ! function_exists( 'tm_lawyers_base_decode' ) ) {
    function tm_lawyers_base_decode( $data ) {
        return $data;
    }
}

if ( ! function_exists( 'is_tree' ) ) {
    function is_tree( $pid ) {
        global $post;
        if ( is_page() && ( $post->post_parent == $pid || is_page( $pid ) ) ) {
            return true;
        } else {
            return false;
        }
    }
}

// Extend VC
if ( class_exists( 'WPBakeryVisualComposerAbstract' ) ) {
    function tm_lawyers_requireVcExtend() {
        require get_template_directory() . '/inc/vc-extend.php';
    }

    add_action( 'init', 'tm_lawyers_requireVcExtend', 2 );
}

// 404 Page
add_action( 'tha_content_before', 'tm_lawyers_page404_before' );
function tm_lawyers_page404_before() {
    if ( is_404() ) {
        echo '<div class="error404-bg">';
    }
}

add_action( 'tha_content_after', 'tm_lawyers_page404_after' );
function tm_lawyers_page404_after() {
    if ( is_404() ) {
        echo '</div>';
    }
}

function tm_lawyers_search_filter( $query ) {
    if ( is_search() && ( ! isset( $query->query_vars['post_type'] ) ) ) {
        $query->set( 'post_type', array( 'post' ) );
    }
}

add_action( 'pre_get_posts', 'tm_lawyers_search_filter' );

function tm_lawyers_search_form( $form ) {
    $form = '<form method="get" class="search-form" action="' . home_url( '/' ) . '">
					<input type="search" class="search-field" placeholder="' . esc_attr__( 'Search...', 'tm-lawyers' ) . '" value="" name="s" title="' . esc_attr__( 'Search for:', 'tm-lawyers' ) . '">
				<input type="submit" class="search-submit" value="' . esc_attr__( 'Search', 'tm-lawyers' ) . '">
			</form>';

    return $form;
}

add_filter( 'get_search_form', 'tm_lawyers_search_form' );

add_action( 'init', 'tm_lawyers_remove_vc_tgm_update_notice' );
function tm_lawyers_remove_vc_tgm_update_notice() {
    global $vc_manager;
    if ( ! empty( $vc_manager ) ) {
        $updater = $vc_manager->updater();
        remove_filter( 'upgrader_pre_download', array( $updater, 'preUpgradeFilter' ), 10 );
    }
}

add_filter( 'vc_google_fonts_get_fonts_filter', 'tm_lawyers_add_vc_fonts' );
function tm_lawyers_add_vc_fonts( $vcfonts ) {
    $vcfonts[] = (object) array(
        'font_family' => 'EB Garamond',
        'font_styles' => '100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic',
        'font_types'  => '100 light regular:100:normal,100 light italic:100:italic,200 light regular:200:normal,200 light italic:200:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,500 bold regular:500:normal,500 bold italic:500:italic,600 bold regular:600:normal,600 bold italic:600:italic,700 bold regular:700:normal,700 bold italic:700:italic,800 bold regular:800:normal,800 bold italic:800:italic,900 bold regular:900:normal,900 bold italic:900:italic'
    );
    $vcfonts[] = (object) array(
        'font_family' => 'Poppins',
        'font_styles' => '100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic',
        'font_types'  => '100 light regular:100:normal,100 light italic:100:italic,200 light regular:200:normal,200 light italic:200:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,500 bold regular:500:normal,500 bold italic:500:italic,600 bold regular:600:normal,600 bold italic:600:italic,700 bold regular:700:normal,700 bold italic:700:italic,800 bold regular:800:normal,800 bold italic:800:italic,900 bold regular:900:normal,900 bold italic:900:italic'
    );

    return $vcfonts;
}

add_action( 'admin_bar_menu', 'tm_lawyers_toolbar_links', 100 );
function tm_lawyers_toolbar_links( $wp_admin_bar ) {
    $wp_admin_bar->add_node( array(
        'id'    => 'tm-lawyers',
        'title' => '<span class="ab-icon"></span> ' . TM_LAWYERS_PARENT_THEME_NAME . ' (v' . TM_LAWYERS_PARENT_THEME_VERSION . ') ',
        'href'  => '#',
        'meta'  => array( 'class' => 'tm_lawyers_menu' )
    ) );
    $wp_admin_bar->add_node( array(
        'id'     => 'tm_lawyers_customize',
        'parent' => 'tm-lawyers',
        'title'  => esc_html__( 'Customize', 'tm-lawyers' ),
        'href'   => admin_url( 'customize.php' )
    ) );
    $wp_admin_bar->add_node( array(
        'id'     => 'tm_lawyers_support',
        'parent' => 'tm-lawyers',
        'title'  => esc_html__( 'Need Support?', 'tm-lawyers' ),
        'href'   => 'http://support.thememove.com',
        'meta'   => array( 'target' => '_blank' )
    ) );
    $wp_admin_bar->remove_node( 'customize' );
    ?>
    <style>
        .tm_lawyers_menu > a {
            background-color: #eb4723 !important;
            color: #ffffff !important
        }

        .tm_lawyers_menu > a:hover {
            background-color: #0073aa !important;
            color: #ffffff !important
        }

        .tm_lawyers_menu > a > .ab-icon:before {
            content: "\f540";
            top: 2px;
            color: #ffffff !important
        }

        .tm_notice {
            padding: 0px;
            margin: 40px 20px 20px 0;
            position: relative;
            overflow: hidden;
            display: block;
            border: 1px solid #e5e5e5;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .04);
            background: #fff;
        }

        .tm_notice:before {
            content: '';
            width: 80px;
            height: 100%;
            background: #85B200;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 998;
        }

        .tm_notice:after {
            content: "\f155";
            display: inline-block;
            width: 20px;
            height: 20px;
            font-size: 20px;
            line-height: 1;
            font-family: dashicons;
            position: absolute;
            top: 25px;
            left: 30px;
            color: #FFFFFF;
            z-index: 999;
        }

        .tm_notice_inner {
            padding: 10px 10px 10px 90px;
        }

        .tm_notice_hide {
            position: absolute;
            color: #777777;
            top: -1px;
            right: -1px;
            z-index: 999;
            display: none;
        }

        .tm_notice:hover .tm_notice_hide {
            display: block;
        }

        .tm_notice_hide input[type="submit"] {
            margin: 0;
            border-radius: 0;
            border: 1px solid #e5e5e5;
            outline: none;
            background: #ffffff;
            color: #777777;
            font-size: 13px;
            padding: 6px 10px;
            cursor: pointer;
        }

        .tm_notice_hide input[type="submit"]:hover {
            color: #ff6600;
        }
    </style>
    <?php
}

add_action( 'admin_notices', 'tm_lawyers_rate_notice' );
function tm_lawyers_rate_notice() {
    if ( isset( $_POST['tm_hide_rate'] ) && ( $_POST['tm_hide_rate'] == 1 ) ) {
        update_option( 'tm_hide_rate', '1' );
    }
    if ( get_option( 'tm_hide_rate', '0' ) != '1' ) {
        ?>
        <div class="tm_notice">
            <div class="tm_notice_inner">
                Welcome onboard the
                <strong><?php echo TM_LAWYERS_PARENT_THEME_NAME . ' (' . TM_LAWYERS_PARENT_THEME_VERSION . ')'; ?></strong>.<br/>
                We are on the way to the “Great Website” island. Thank you for choosing to travel with us and we hope
                you
                enjoy your journey!<br/>
                If you are satisfied with
                <strong><?php echo TM_LAWYERS_PARENT_THEME_NAME . ' (' . TM_LAWYERS_PARENT_THEME_VERSION . ')'; ?></strong>,
                please reward it a <a
                    href="http://www.awesomescreenshot.com/image/110934/c450eb8a46aaddb437bc234468168c74"
                    target="_blank">full five-star ★★★★★ rating</a>. Thank you so much, Passengers!
                <div class="tm_notice_hide">
                    <form action="" method="POST">
                        <input type="hidden" name="tm_hide_rate" value="1"/>
                        <input type="submit"
                               value="<?php esc_html_e( 'Hide this box', 'tm-lawyers' ); ?>"/>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
}