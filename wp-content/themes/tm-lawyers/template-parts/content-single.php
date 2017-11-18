<?php
/**
 * Template part for displaying single posts.
 *
 * @package TM Lawyers
 */

?>

<?php if ( has_post_thumbnail() ) { ?>
    <div class="entry-thumb">
        <?php the_post_thumbnail( 'tm-lawyers-post-thumb' ); ?>
    </div>
<?php } ?>
<header class="entry-header">
    <?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
</header>
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
<div class="entry-footer">
    <div class="row middle">
        <div class="col-sm-12">
            <i class="fa fa-folder-open"></i> <?php echo get_the_category_list( ', ' ) ?>
            <?php the_tags( '<i class="fa fa-tags"></i> ', ', ' ); ?>
        </div>
    </div>
</div>