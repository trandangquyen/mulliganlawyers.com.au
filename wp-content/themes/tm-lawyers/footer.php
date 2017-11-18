<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package TM Lawyers
 */

$tm_lawyers_disable_newsletter = get_post_meta( get_the_ID(), "tm_lawyers_disable_newsletter", true );
$tm_lawyers_back_to_top        = Kirki::get_option( 'tm-lawyers', 'back_to_top' );
?>
<?php tha_content_bottom(); ?>
</div> <!-- #content -->
<?php tha_content_after(); ?>
<?php if ( ( Kirki::get_option( 'tm-lawyers', 'newsletter_enable' ) == 1 ) && ( $tm_lawyers_disable_newsletter != 'on' ) && ( is_active_sidebar( 'newsletter-form' ) ) ) { ?>
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 newsletter-left">
                    <?php dynamic_sidebar( 'newsletter-form' ); ?>
                </div>
                <div class="col-md-6 newsletter-right align-right">
                    <h3 class="text"><?php esc_html_e( 'LAW FIRM SOCIAL', 'tm-lawyers' ); ?></h3>
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'social-menu',
                        'container_class' => 'social-menu',
                        'fallback_cb'     => false
                    ) ); ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php if ( is_active_sidebar( 'footer' ) ) { ?>
    <?php tha_footer_before(); ?>
    <footer class="site-footer">
        <?php tha_footer_top(); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php dynamic_sidebar( 'footer' ); ?>
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar( 'footer2' ); ?>
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar( 'footer3' ); ?>
                </div>
                <div class="col-md-3">
                    <?php dynamic_sidebar( 'footer4' ); ?>
                </div>
            </div>
        </div>
        <?php tha_footer_bottom(); ?>
    </footer><!-- .site-footer -->
    <?php tha_footer_after(); ?>
<?php } ?>
<?php if ( Kirki::get_option( 'tm-lawyers', 'copyright_enable' ) == 1 ) { ?>
    <div class="copyright">
        <div class="container center">
            <div class="row">
                <div class="col-md-6 copyright-left">
                    <?php echo html_entity_decode( Kirki::get_option( 'tm-lawyers', 'copyright_text_left' ) ); ?>
                </div>
                <div class="col-md-6 copyright-right align-right">
                    <?php echo html_entity_decode( Kirki::get_option( 'tm-lawyers', 'copyright_text_right' ) ); ?>
                </div>
            </div>
        </div>
    </div><!-- .copyright -->
<?php } ?>
</div><!-- #page -->
<div class="popup-search">
    <div class="inner">
        <div class="content">
            <div class="box">
                <span class="popup-search-close"><i class="fa fa-times"></i></span>
                <?php get_search_form(); ?>
                <?php esc_html_e( '* Type a keyword then press Enter', 'tm-lawyers' ); ?>
            </div>
        </div>
    </div>
</div>
<?php if ( $tm_lawyers_back_to_top ) { ?>
    <a class="scrollup"><i class="fa fa-angle-up"></i></a>
<?php } ?>
<?php tha_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>
