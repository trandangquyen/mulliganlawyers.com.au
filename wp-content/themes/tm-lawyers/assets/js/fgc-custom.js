(function($){
	//define functions
	
	function goToAnchorLink(clickder, target){
		$(clickder).click(function() {
		    $('html, body').animate({
		        scrollTop: $(target).offset().top
		    }, 1000);
		});
	}
	// call functions
	$(document).ready(function($){
		var obj = {
		  "#will-section": ".fgcwill-section",
		  "#financial-section": ".fgc-attorney-section",
		  "#medical-section": ".fgc-attorney-section",
		  "#estate-section": ".fgc-estate-section",
		  "#probate-section": ".fgc-probate-content",
		  "#contested-section": ".fgc-disputes-content",
		  "#trustee-section": ".fgc-court-content",
		  "#aboutus-section": "#fgc-about-us",
		  "#disputes-section": "#fgc-disputes-content",
		  "#faqs-section": "#fgc-faqs-content",
		  "#children-section": "#fgc-children-content",
		};
		$.each( obj, function( key, value ) {
		  goToAnchorLink(key,value);
		});

	});

})(jQuery);