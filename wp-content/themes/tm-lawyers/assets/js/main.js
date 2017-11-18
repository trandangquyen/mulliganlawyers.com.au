/*--------------------------------------------------------------
 Custom js
 --------------------------------------------------------------*/
jQuery( document ).ready( function( $ ) {
	'use strict';

	jQuery( '#open-left' ).on( 'click', function() {
		jQuery( '.mobile-menu-wrap' ).toggleClass( 'open' );
	} );

	jQuery( document ).on( 'click', function( e ) {
		if ( (
			     jQuery( e.target ).closest( jQuery( '.mobile-menu-inner' ) ).length == 0
		     ) && (
			     jQuery( e.target ).closest( '#open-left' ).length == 0
		     ) ) {
			jQuery( '.mobile-menu-wrap' ).removeClass( 'open' );
		}
	} );

	// mini-cart
	var $mini_cart = $( '.mini-cart' );
	$mini_cart.on( 'click', function( e ) {
		$( this ).addClass( 'open' );
	} );

	$( document ).on( 'click', function( e ) {
		if ( $( e.target ).closest( $mini_cart ).length == 0 ) {
			$mini_cart.removeClass( 'open' );
		}
	} );

	// search in desktop
	$( '.search-btn' ).on( 'click', function() {
		$( '.popup-search' ).show();
		$( '.popup-search .search-field' ).focus();
		$( 'body' ).addClass( 'body-noscroll' );
	} );

	$( '.popup-search-close' ).on( 'click', function() {
		$( '.popup-search' ).hide();
		$( 'body' ).removeClass( 'body-noscroll' );
	} );

	// counterup
	$( '.counter' ).counterUp( {
		delay: 10,
		time: 1000
	} );

	// fitvids
	$( ".container" ).fitVids();

	// gallery
	jQuery( ".gallery-size-full" ).owlCarousel( {
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

	// accordion
	jQuery( '.thememove-accordion' ).each( function() {
		jQuery( this ).insightAccordion();
	} );

	// video
	jQuery( '.thememove-video' ).lightGallery();
} );

// Accordion
(
	function( $ ) {
		$.fn.insightAccordion = function() {
			var thisAcc = this;
			thisAcc.find( '.title' ).on( 'click', function() {
				thisAcc.find( '.item' ).removeClass( 'active' );
				$( this ).parent().addClass( 'active' );
			} );
		};
	}( jQuery )
);