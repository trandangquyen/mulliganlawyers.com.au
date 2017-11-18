<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package TM Lawyers
 */
$tm_lawyers_heading_image = Kirki::get_option( 'tm-lawyers', 'page_title_bg_image' );
$tm_lawyers_layout        = Kirki::get_option( 'tm-lawyers', 'archive_layout' );
get_header(); ?>
    <header class="big-title" style="background-image: url('<?php echo esc_url( $tm_lawyers_heading_image ); ?>')">
        <div class="container">
            <div class="title-container">
                <?php
                the_archive_title( '<h1 class="entry-title">', '</h1>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
                <?php if ( function_exists( 'tm_bread_crumb' ) ) { ?>
                    <div class="breadcrumb">
                        <div class="container">
                            <?php echo tm_bread_crumb( array( 'home_label' => Kirki::get_option( 'tm-lawyers', 'breadcrumb_home_text' ) ) ); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </header>
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
                    <main class="content">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'template-parts/content-blog', get_post_format() ); ?>
                        <?php endwhile; // end of the loop. ?>
                        <?php tm_lawyers_paging_nav(); ?>
                    </main>
                </div>
                <?php if ( $tm_lawyers_layout == 'content-sidebar' ) { ?>
                    <?php get_sidebar(); ?>
                <?php } ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>