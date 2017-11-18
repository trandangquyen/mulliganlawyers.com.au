<?php
/**
 * @package TM Lawyers
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) { ?>
        <div class="entry-thumb">
            <?php the_post_thumbnail( 'tm-lawyers-post-thumb' ); ?>
        </div>
    <?php } ?>
    <header class="entry-header">
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    </header>
    <!-- .entry-header -->
    <?php if ( 'post' == get_post_type() ) : ?>
        <div class="entry-meta">
			<span class="author vcard">
				<i class="fa fa-user"></i>
                <?php echo get_the_author(); ?>
			</span>
            <span class="calendar">
				<i class="fa fa-calendar-o"></i>
                <?php the_time( 'F j, Y' ); ?>
			</span>
            <span class="comment">
				<i class="fa fa-comment-o"></i>
                <?php comments_number( '0', '1', '%' ); ?>
			</span>
        </div><!-- .entry-meta -->
    <?php endif; ?>
    <div class="entry-excerpt">
        <?php echo get_the_excerpt(); ?>
    </div>
    <!-- .entry-content -->
    <div class="entry-more">
        <a href="<?php echo get_permalink() ?>">
            <?php echo esc_html__( 'Continue Reading', 'tm-lawyers' ) ?>
        </a>
    </div>
</article><!-- #post-## -->