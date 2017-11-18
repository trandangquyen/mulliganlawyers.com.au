<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package TM Lawyers
 */

/**
 * Adds custom classes to the array of body classes.
 * ================================================
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
function tm_lawyers_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }

    global $tm_lawyers_custom_class;
    if ( $tm_lawyers_custom_class ) {
        $classes[] = $tm_lawyers_custom_class;
    }

    if ( Kirki::get_option( 'tm-lawyers', 'box_mode' ) == 1 ) {
        $classes[] = 'boxed';
    }

    $classes[] = Kirki::get_option( 'tm-lawyers', 'header_type' );

    global $tm_lawyers_page_layout_private;
    if ( $tm_lawyers_page_layout_private != 'default' && class_exists( 'cmb2_bootstrap_205' ) ) {
        $tm_lawyers_layout = get_post_meta( get_the_ID(), "tm_lawyers_page_layout_private", true );
    } else {
        $tm_lawyers_layout = Kirki::get_option( 'tm-lawyers', 'page_layout' );
    }

    $classes[] = $tm_lawyers_layout;

    if ( defined( 'TM_CORE_VERSION' ) ) {
        $classes[] = 'core_' . str_replace( ".", "", TM_CORE_VERSION );
    }

    return $classes;
}

add_filter( 'body_class', 'tm_lawyers_body_classes' );

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
    /**
     * Filters wp_title to print a neat <title> tag based on what is being viewed.
     * ==========================================================================
     *
     * @param string $title Default title text for current view.
     * @param string $sep Optional separator.
     *
     * @return string The filtered title.
     */
    function tm_lawyers_wp_title( $title, $sep ) {
        if ( is_feed() ) {
            return $title;
        }

        global $page, $paged;

        // Add the blog name.
        $title .= get_bloginfo( 'name', 'display' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) ) {
            $title .= " $sep $site_description";
        }

        // Add a page number if necessary.
        if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
            $title .= " $sep " . sprintf( esc_html__( 'Page %s', 'tm-lawyers' ), max( $paged, $page ) );
        }

        return $title;
    }

    add_filter( 'wp_title', 'tm_lawyers_wp_title', 10, 2 );

    /**
     * Title shim for sites older than WordPress 4.1.
     *
     * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
     * @todo Remove this function when WordPress 4.3 is released.
     */
    function tm_lawyers_render_title() {
        ?>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php
    }

    add_action( 'wp_head', 'tm_lawyers_render_title' );
endif;

/***
 * Get mini cart HTML
 * ==================
 * @return string
 */
if ( class_exists( 'WooCommerce' ) ) {
    function tm_lawyers_minicart() {
        $cart_html = '';
        $qty       = WC()->cart->get_cart_contents_count();
        $total     = WC()->cart->get_cart_total();

        $cart_html .= '<span class="top-cart" rel="' . $qty . '"><i class="fa fa-shopping-cart"></i>' . $total . '</span>';

        return $cart_html;
    }

    add_filter( 'woocommerce_add_to_cart_fragments', 'tm_lawyers_header_add_to_cart_fragment' );
}

/**
 * Ensure cart contents update when products are added to the cart via AJAX
 * ========================================================================
 *
 * @param $fragments
 *
 * @return mixed
 */
if ( class_exists( 'WooCommerce' ) ) {
    function tm_lawyers_header_add_to_cart_fragment( $fragments ) {
        ob_start();
        echo tm_lawyers_minicart();
        $fragments['.mini-cart__button'] = ob_get_clean();

        return $fragments;
    }
}

/**
 * Custom Comment Form
 * ========================================================================
 */
function tm_lawyers_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div id="comment-<?php comment_ID(); ?>">
        <div class="comment-author vcard">
            <?php echo get_avatar( $comment, $size = '100' ); ?>
        </div>
        <div class="comment-content">
            <?php if ( $comment->comment_approved == '0' ) : ?>
                <em><?php esc_html_e( 'Your comment is awaiting moderation.', 'tm-lawyers' ) ?></em>
                <br/>
            <?php endif; ?>
            <div class="metadata">
                <?php printf( esc_html__( '<cite class="fn">%s</cite>', 'tm-lawyers' ), get_comment_author_link() ) ?>
                <br/>
                <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
                    <?php printf( esc_html__( '%1$s', 'tm-lawyers' ), get_comment_date(), get_comment_time() ) ?></a>
                <?php edit_comment_link( esc_html( esc_html__( '(Edit)', 'tm-lawyers' ), '  ', '' ) ) ?>
            </div>
            <?php comment_text() ?>
            <?php comment_reply_link( array_merge( $args, array(
                'depth'     => $depth,
                'max_depth' => $args['max_depth']
            ) ) ) ?>
        </div>
    </div>
    <?php
}

/**
 * Extra Info
 * =============
 */
function tm_lawyers_extra_info() {
    global $wp_version, $woocommerce;
    $child_theme        = wp_get_theme();
    $child_theme_in_use = false;
    if ( TM_LAWYERS_PARENT_THEME_NAME != $child_theme->name ) {
        $child_theme_in_use = true;
    }
    $vc_version = "Not activated";
    if ( defined( 'WPB_VC_VERSION' ) ) {
        $vc_version = "v" . WPB_VC_VERSION;
    }
    $tm_core_version = "Not activated";
    if ( defined( 'TM_CORE_VERSION' ) ) {
        $tm_core_version = "v" . TM_CORE_VERSION;
    }
    ?>
    <!--
    * WordPress: v<?php echo esc_html( $wp_version ) . "\n"; ?>
    * ThemMove Core: <?php echo esc_html( $tm_core_version ); ?><?php echo "\n"; ?>
    <?php if ( class_exists( 'WooCommerce' ) ) : ?>* WooCommerce: v<?php echo esc_html( $woocommerce->version ) . "\n"; ?><?php else : ?>* WooCommerce: Not Installed <?php echo "\n"; ?><?php endif; ?>
    * Visual Composer: <?php echo esc_html( $vc_version ); ?><?php echo "\n"; ?>
    * Theme: <?php echo esc_html( TM_LAWYERS_PARENT_THEME_NAME ); ?> v<?php echo esc_html( TM_LAWYERS_PARENT_THEME_VERSION ); ?> by <?php echo esc_html( TM_LAWYERS_PARENT_THEME_AUTHOR ) . "\n"; ?>
    * Child Theme: <?php if ( $child_theme_in_use == true ) { ?>Activated<?php } else { ?>Not activated<?php } ?><?php echo "\n"; ?>
    -->
<?php }

add_action( 'wp_head', 'tm_lawyers_extra_info', 9999 );

/**
 * TM Lawyers Posts Widget
 * =============
 */
class TM_Lawyers_PostsWidget extends WP_Widget {

    function TM_Lawyers_PostsWidget() {
        parent::__construct( false, 'TM Lawyers Posts Widget' );
    }

    function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $cat   = $instance['cat'];
        $num   = $instance['num'];
        echo wp_kses( $args['before_widget'], array(
            'aside' => array( 'id' => array(), 'class' => array() ),
            'div'   => array( 'id' => array(), 'class' => array() )
        ) );
        if ( $cat == 'c1' ) {
            if ( ! empty( $title ) ) {
                echo wp_kses( $args['before_title'] . $title . $args['after_title'], array(
                    'h3' => array( 'class' => array() )
                ) );
            } else {
                echo wp_kses( $args['before_title'] . '&nbsp;' . $args['after_title'], array(
                    'h3' => array( 'class' => array() )
                ) );
            }
            $tmrp_args = array(
                'post_type'           => 'post',
                'ignore_sticky_posts' => 1,
                'posts_per_page'      => $num
            );
        } elseif ( $cat == 'c3' ) {
            if ( ! empty( $title ) ) {
                echo wp_kses( $args['before_title'] . $title . $args['after_title'], array(
                    'h3' => array( 'class' => array() )
                ) );
            } else {
                echo wp_kses( $args['before_title'] . '&nbsp;' . $args['after_title'], array(
                    'h3' => array( 'class' => array() )
                ) );
            }
            $sticky    = get_option( 'sticky_posts' );
            $tmrp_args = array(
                'post_type'      => 'post',
                'post__in'       => $sticky,
                'posts_per_page' => $num
            );
        } else {
            echo wp_kses( $args['before_title'] . '<a href="' . esc_url( get_catery_link( $cat ) ) . '" title="' . esc_attr( get_cat_name( $cat ) ) . '">' . get_cat_name( $cat ) . '</a>' . $args['after_title'], array(
                'h3' => array( 'class' => array() ),
                'a'  => array( 'href' => array(), 'title' => array() )
            ) );
            $tmrp_args = array(
                'post_type'           => 'post',
                'cat'                 => $cat,
                'ignore_sticky_posts' => 1,
                'posts_per_page'      => $num
            );
        }
        $tmrp_query = new WP_Query( $tmrp_args );
        if ( $tmrp_query->have_posts() ) {
            while ( $tmrp_query->have_posts() ) {
                $tmrp_query->the_post();
                ?>
                <div class="postswidget-list">
                    <div class="postswidget-thumb">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail( array( 80, 80 ) );
                        } ?>
                    </div>
                    <div class="postswidget-info">
						<span class="title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</span>
                        <span class="time"><i class="fa fa-calendar-o"></i> <?php the_time( 'F j, Y' ); ?></span>
                        <span class="count">
							<span class="comment">
								<i class="fa fa-comment-o"></i> <?php comments_number( '0', '1', '%' ); ?>
							</span>
						</span>
                    </div>
                </div>
                <?php
            }
        }
        wp_reset_postdata();
        echo wp_kses( $args['after_widget'], array(
            'aside' => array()
        ) );
    }

    function update( $new_instance, $old_instance ) {
        $instance          = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['cat']   = ( ! empty( $new_instance['cat'] ) ) ? strip_tags( $new_instance['cat'] ) : '';
        $instance['num']   = ( ! empty( $new_instance['num'] ) ) ? strip_tags( $new_instance['num'] ) : '';

        return $instance;
    }

    function form( $instance ) {
        if ( isset( $instance['title'] ) ) {
            $title = $instance['title'];
        } else {
            $title = esc_html__( 'New title', 'tm-lawyers' );
        }
        if ( isset( $instance['cat'] ) ) {
            $cat = $instance['cat'];
        } else {
            $cat = 'c1';
        }
        if ( isset( $instance['num'] ) ) {
            $num = $instance['num'];
        } else {
            $num = 5;
        }
        ?>
        <p>
            <label
                for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'tm-lawyers' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text"
                   value="<?php echo esc_attr( $title ); ?>"/>
        </p>
        <p>
            <label
                for="<?php echo esc_attr( $this->get_field_id( 'cat' ) ); ?>"><?php esc_html_e( 'Category:', 'tm-lawyers' ); ?></label>
            <select name="<?php echo esc_attr( $this->get_field_name( 'cat' ) ); ?>">
                <option value="c1" <?php
                if ( $cat == 'c1' ) {
                    echo 'selected';
                }
                ?>>Recent
                </option>
                <option value="c3" <?php
                if ( $cat == 'c3' ) {
                    echo 'selected';
                }
                ?>>Sticky
                </option>
                <?php
                $categories = get_categories( 'hide_empty=0' );
                if ( $categories ) {
                    foreach ( $categories as $category ) {
                        $sl = '';
                        if ( $category->term_id == $cat ) {
                            $sl = 'selected';
                        }
                        echo '<option value="' . esc_attr( $category->term_id ) . '" ' . $sl . '>' . esc_html__( 'Category: ', 'tm-lawyers' ) . $category->name . '</option>';
                    }
                }
                ?>
            </select>
        </p>
        <p>
            <label
                for="<?php echo esc_attr( $this->get_field_id( 'num' ) ); ?>"><?php esc_html_e( 'Number:', 'tm-lawyers' ); ?></label>
            <select name="<?php echo esc_attr( $this->get_field_name( 'num' ) ); ?>">
                <?php
                for ( $i = 1; $i <= 40; $i ++ ) {
                    $sl = '';
                    if ( $i == $num ) {
                        $sl = 'selected';
                    }
                    echo '<option value="' . esc_attr( $i ) . '" ' . $sl . '>' . $i . '</option>';
                }
                ?>
            </select>
        </p>
        <?php
    }
}

function tm_lawyers_postswidget_init() {
    register_widget( 'TM_Lawyers_PostsWidget' );
}

add_action( 'widgets_init', 'tm_lawyers_postswidget_init' );