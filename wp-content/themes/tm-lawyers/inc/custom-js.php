<?php function tm_lawyers_js_custom_code() { ?>
    <?php if ( Kirki::get_option( 'tm-lawyers', 'custom_js_enable' ) == 1 ): ?>
        <?php echo html_entity_decode( Kirki::get_option( 'tm-lawyers', 'custom_js' ) ); ?>
    <?php endif ?>
    <?php if ( Kirki::get_option( 'tm-lawyers', 'nav_sticky_enable' ) == 1 && has_nav_menu( 'primary' ) ): ?>
        <script>
            jQuery( document ).ready( function( $ ) {
                var offset = jQuery( '#site-navigation' ).offset();
                var hh = jQuery( '#site-navigation' ).outerHeight();
                jQuery( "#site-navigation" ).headroom(
                    {
                        offset: offset.top,
                        onTop: function() {
                            jQuery( '#content' ).css( 'margin-top', 0 );
                        },
                        onNotTop: function() {
                            jQuery( '#content' ).css( 'margin-top', hh );
                        },
                    }
                );
            } );
        </script>
    <?php endif ?>
    <?php if ( Kirki::get_option( 'tm-lawyers', 'header_type' ) == 'header01' ) { ?>
        <script>
            jQuery( document ).ready( function() {
                theme_fit();
            } );
            jQuery( window ).resize( function() {
                theme_fit();
            } );
            function theme_fit() {
                var headerheight = jQuery( ".site-header" ).height();
                var navheight = jQuery( ".col-nav" ).height();
                jQuery( ".site-header-left" ).height( headerheight );
                jQuery( ".site-header-right" ).height( headerheight );
                jQuery( ".col-search" ).height( navheight );
            }
        </script>
    <?php } ?>
    <?php if ( Kirki::get_option( 'tm-lawyers', 'header_type' ) == 'header02' ) { ?>
        <script>
            jQuery( document ).ready( function() {
                theme_fit();
            } );
            jQuery( window ).resize( function() {
                theme_fit();
            } );
            function theme_fit() {
                var headerheight = jQuery( ".site-header" ).height();
                var navheight = jQuery( ".col-nav" ).height();
                jQuery( ".site-header-info" ).height( headerheight );
                jQuery( ".site-header-right" ).height( headerheight );
                jQuery( ".col-search" ).height( navheight );
            }
        </script>
    <?php } ?>
    <?php if ( Kirki::get_option( 'tm-lawyers', 'header_type' ) == 'header03' ) { ?>
        <script>
            jQuery( document ).ready( function() {
                theme_fit();
            } );
            jQuery( window ).resize( function() {
                theme_fit();
            } );
            function theme_fit() {
                var navheight = jQuery( ".col-nav" ).height();
                jQuery( ".col-search" ).height( navheight );
            }
        </script>
    <?php } ?>
    <?php if ( Kirki::get_option( 'tm-lawyers', 'header_type' ) == 'header04' ) { ?>
        <script>
            jQuery( document ).ready( function() {
                theme_fit();
            } );
            jQuery( window ).resize( function() {
                theme_fit();
            } );
            function theme_fit() {
                var headerheight = jQuery( ".site-header" ).height();
                var navheight = jQuery( ".col-nav" ).height();
                jQuery( ".site-header-info" ).height( headerheight );
                jQuery( ".site-header-right" ).height( headerheight );
                jQuery( ".col-search" ).height( navheight );
            }
        </script>
    <?php } ?>
    <?php if ( Kirki::get_option( 'tm-lawyers', 'back_to_top' ) ) { ?>
        <script>
            jQuery( document ).ready( function( $ ) {
                var $window = $( window );
                // Scroll up
                var $scrollup = $( '.scrollup' );

                $window.scroll( function() {
                    if ( $window.scrollTop() > 100 ) {
                        $scrollup.addClass( 'show' );
                    } else {
                        $scrollup.removeClass( 'show' );
                    }
                } );

                $scrollup.on( 'click', function( evt ) {
                    $( "html, body" ).animate( {scrollTop: 0}, 600 );
                    evt.preventDefault();
                } );
            } );
        </script>
    <?php } ?>
<?php }

add_action( 'wp_footer', 'tm_lawyers_js_custom_code' );
