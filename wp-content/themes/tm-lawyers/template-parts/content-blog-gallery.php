<?php
/**
 * @package TM Lawyers
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( get_post_gallery() ) { ?>
        <div class="entry-gallery">
            <div class="nav">
                <div class="nav-inner">
                    <span class="next"><i class="fa fa-chevron-right"></i></span>
                    <span class="prev"><i class="fa fa-chevron-left"></i></span>
                </div>
            </div>
            <div class="slider">
                <?php
                $gallery = get_post_gallery( get_the_ID(), false );
                $gids    = explode( ',', $gallery['ids'] );
                foreach ( $gids as $gid ) {
                    echo wp_get_attachment_image( $gid, 'full' );
                }
                ?>
            </div>
        </div>
        <script>
            jQuery( document ).ready( function() {
                owl = jQuery( ".slider" ).owlCarousel( {
                    autoplay: true,
                    autoplayTimeout: 3000,
                    loop: true,
                    items: 1,
                    navigation: false,
                    stopOnHover: true,
                    paginationSpeed: 1000,
                    goToFirstSpeed: 2000,
                    singleItem: true,
                    autoHeight: true,
                    transitionStyle: "fade"
                } );
                jQuery( ".prev" ).on( 'click', function() {
                    owl.trigger( 'prev.owl.carousel' );
                } );
                jQuery( ".next" ).on( 'click', function() {
                    owl.trigger( 'next.owl.carousel' );
                } );
            } );
        </script>
    <?php } elseif ( has_post_thumbnail() ) { ?>
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