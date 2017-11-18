<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package TM Lawyers
 */
$tm_lawyers_layout        = Kirki::get_option( 'tm-lawyers', 'post_layout' );
$tm_lawyers_heading_image = Kirki::get_option( 'tm-lawyers', 'page_title_bg_image' );
get_header(); ?>
<div class="big-title" style="background-image: url('<?php echo esc_url( $tm_lawyers_heading_image ); ?>')">
    <div class="container">
        <div class="title-container">
            <h1 class="entry-title" itemprop="headline"><?php echo esc_html__( 'Blog', 'tm-lawyers' ) ?></h1>
        </div>
    </div>
</div>
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
            <main class="content" role="main">
                <?php if ( have_posts() ) : ?>
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php
                        /* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
                        get_template_part( 'template-parts/content', 'index' );
                        ?>
                    <?php endwhile; ?>
                    <?php tm_lawyers_paging_nav(); ?>
                <?php else : ?>
                    <?php get_template_part( 'content', 'none' ); ?>
                <?php endif; ?>
            </main>
        </div>
        <?php if ( $tm_lawyers_layout == 'content-sidebar' ) { ?>
            <?php get_sidebar(); ?>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>
