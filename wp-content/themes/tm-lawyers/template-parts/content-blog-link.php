<?php
/**
 * @package TM Lawyers
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-excerpt">
        <?php the_content(); ?>
    </div>
    <!-- .entry-content -->
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
</article><!-- #post-## -->