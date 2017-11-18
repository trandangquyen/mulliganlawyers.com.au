<?php
/*
Template Name: News Archive
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
if ( $tm_lawyers_page_layout_private != 'default' && class_exists( 'cmb2_bootstrap_205' ) ) {
    $tm_lawyers_layout = get_post_meta( get_the_ID(), "tm_lawyers_page_layout_private", true );
} else {
    $tm_lawyers_layout = Kirki::get_option( 'tm-lawyers', 'page_layout' );
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
                    <?php
                    // the query
                    global $wp_query;
                    $paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args      = array(
                        'post_type' => 'post',
                        'paged'     => $paged
                    );
                    $the_query = new WP_Query( $args );
                    // Put default query object in a temp variable
                    $tmp_query = $wp_query;
                    // Now wipe it out completely
                    $wp_query = null;
                    // Re-populate the global with our custom query
                    $wp_query           = $the_query;
                    $tm_lawyers_blognum = 0 + ( $paged - 1 ) * get_option( 'posts_per_page' );
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                        <?php /* Start the Loop */ ?>
                        <?php while ( $the_query->have_posts() ) :
                            $the_query->the_post();
                            get_template_part( 'template-parts/content-blog', get_post_format() );
                        endwhile; ?>
                        <?php tm_lawyers_paging_nav(); ?>
                    <?php else : ?>
                        <?php get_template_part( 'content', 'none' ); ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ( $tm_lawyers_layout == 'content-sidebar' ) { ?>
                <?php get_sidebar(); ?>
            <?php } ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
