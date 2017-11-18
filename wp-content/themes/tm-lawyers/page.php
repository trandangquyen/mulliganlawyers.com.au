<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package TM Lawyers
 */

$tm_lawyers_page_layout_private = get_post_meta( get_the_ID(), "tm_lawyers_page_layout_private", true );
$tm_lawyers_header_top          = get_post_meta( get_the_ID(), "tm_lawyers_header_top", true );
$tm_lawyers_sticky_menu         = get_post_meta( get_the_ID(), "tm_lawyers_sticky_menu", true );
$tm_lawyers_custom_logo         = get_post_meta( get_the_ID(), "tm_lawyers_custom_logo", true );
$tm_lawyers_heading_image       = get_post_meta( get_the_ID(), "tm_lawyers_heading_image", true );
$tm_lawyers_bread_crumb_enable  = get_post_meta( get_the_ID(), "tm_lawyers_bread_crumb_enable", true );
$tm_lawyers_disable_comment     = get_post_meta( get_the_ID(), "tm_lawyers_disable_comment", true );
$tm_lawyers_disable_title       = get_post_meta( get_the_ID(), "tm_lawyers_disable_title", true );
$tm_lawyers_custom_class        = get_post_meta( get_the_ID(), "tm_lawyers_custom_class", true );
if ( $tm_lawyers_page_layout_private != '' && $tm_lawyers_page_layout_private != 'default' && class_exists( 'cmb2_bootstrap_205' ) ) {
    $tm_lawyers_layout = get_post_meta( get_the_ID(), "tm_lawyers_page_layout_private", true );
} else {
    $tm_lawyers_layout = Kirki::get_option( 'tm-lawyers', 'page_layout' );
}
if ( $tm_lawyers_layout == '' ) {
    $tm_lawyers_layout = 'content-sidebar';
}
if ( $tm_lawyers_heading_image ) {
    $tm_lawyers_heading_image = get_post_meta( get_the_ID(), "tm_lawyers_heading_image", true );
} else {
    $tm_lawyers_heading_image = Kirki::get_option( 'tm-lawyers', 'page_title_bg_image' );
}
get_header(); ?>
<?php if ( $tm_lawyers_disable_title != 'on' ) { ?>
    <div class="big-title" style="background-image: url('<?php echo esc_url( $tm_lawyers_heading_image ); ?>')">
        <div class="container">
            <div class="title-container">
                <?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>
                <?php if ( function_exists( 'tm_bread_crumb' ) && Kirki::get_option( 'tm-lawyers', 'breadcrumb_enable' ) == 1 ) { ?>
                    <div class="breadcrumb">
                        <div class="container">
                            <?php echo tm_bread_crumb( array( 'home_label' => Kirki::get_option( 'tm-lawyers', 'breadcrumb_home_text' ) ) ); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
<div class="main-content">
    <div class="container">
        <div class="row">
            <?php if ( $tm_lawyers_layout == 'sidebar-content' ) { ?>
                <?php get_sidebar(); ?>
            <?php } ?>
            <?php if ( $tm_lawyers_layout == 'sidebar-content' || $tm_lawyers_layout == 'content-sidebar' ) { ?>
                <?php $class = 'col-md-8'; ?>
            <?php } else { ?>
                <?php $class = 'col-md-12'; ?>
            <?php } ?>
            <div class="<?php echo esc_attr( $class ); ?>">
                <div class="content">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>">
                            <div class="entry-content">
                                <?php the_content(); ?>
                                <?php
                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tm-lawyers' ),
                                    'after'  => '</div>',
                                ) );
                                ?>
                            </div>
                            <!-- .entry-content -->
                        </article><!-- #post-## -->
                        <?php if ( comments_open() && $tm_lawyers_disable_comment != 'on' ) : comments_template(); endif; ?>
                    <?php endwhile; // end of the loop. ?>
                </div>
            </div>
            <?php if ( $tm_lawyers_layout == 'content-sidebar' ) { ?>
                <?php get_sidebar(); ?>
            <?php } ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
