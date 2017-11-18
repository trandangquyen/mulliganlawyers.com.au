<?php
/**
 * @package TM Lawyers
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) { ?>
        <div class="post-thumb">
            <?php the_post_thumbnail( 'tm-lawyers-post-thumb' ); ?>
        </div>
    <?php } ?>
    <header class="entry-header">
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    </header>
    <!-- .entry-header -->
    <?php if ( 'post' == get_post_type() ) : ?>
        <div class="entry-meta">
			<span class="author vcard"><i
                    class="fa fa-user"></i> <?php echo esc_html( esc_html__( 'Posted by ', 'tm-lawyers' ) . get_the_author() ); ?></span>
            <span class="categories-links"><i
                    class="fa fa-folder"></i> <?php echo esc_html__( 'In ', 'tm-lawyers' ) . get_the_category_list( esc_html__( ', ', 'tm-lawyers' ) ) ?> </span>
            <span class="comments-counts"><i
                    class="fa fa-comment"></i><?php comments_number( '0', '1', '%' ); ?> <?php comments_number( 'comment', 'Comment', 'Comments' ); ?></span>
        </div><!-- .entry-meta -->
    <?php endif; ?>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <!-- .entry-content -->
    <div class="entry-footer">
        <div class="row middle">
            <div class="col-sm-12">
                <a class="read-more"
                   href="<?php echo get_permalink() ?>"><span><?php echo esc_html__( 'Continue Reading', 'tm-lawyers' ) ?></span></a>
            </div>
        </div>
    </div>

</article><!-- #post-## -->