<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package TM Lawyers
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( '404 Error Page', 'tm-lawyers' ); ?></h1>
            </header>
            <!-- .page-header -->

            <div class="page-content">
                <p><?php esc_html_e( "Sorry, we couldn't find the page you're looking for.", 'tm-lawyers' ); ?></p>
                <?php get_search_form(); ?>
            </div>
            <!-- .page-content -->
        </section>
        <!-- .error-404 -->

    </main>
    <!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
