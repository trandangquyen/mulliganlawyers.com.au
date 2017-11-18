<?php
extract( shortcode_atts( array(
    'enable_share' => ''
), $atts ) );

global $wp_query;
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args  = array(
    'post_type' => 'post',
    'paged'     => $paged
);
query_posts( $args );
?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'blog' ); ?>
    <?php endwhile; ?>
    <?php tm_lawyers_paging_nav(); ?>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'tm-lawyers' ); ?></p>
<?php endif; ?>
<?php wp_reset_query(); ?>
