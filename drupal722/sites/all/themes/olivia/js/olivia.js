(function ($) {
  Drupal.behaviors.olivia = {
    attach: function (context, settings) {
      // make proper tab active in node page
			var path = window.location.pathname;
      $('#menu-bar .dropdown a').addClass("off");
      $('#menu-bar .dropdown a[href="' + path + '"]').removeClass("off").addClass("on");
			
			// click on bigger image effect			
			$("a.fancybox").fancybox({
				'titleShow'     : false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});
			
			// front page slider
			$('#slider').nivoSlider({
				effect : 'fade',
				slices : 15,
				animSpeed : 500,
				pauseTime : 3000,
				startSlide : 0, //Set starting Slide (0 index)
				directionNav : true, //Next & Prev
				directionNavHide : true, //Only show on hover
				controlNav : true, //1,2,3...
				controlNavThumbs : false, //Use thumbnails for Control Nav
				controlNavThumbsSearch : '.jpg', //Replace this with...
				controlNavThumbsReplace : '_thumb.jpg', //...this in thumb Image src
				keyboardNav : true, //Use left & right arrows
				pauseOnHover : true, //Stop animation while hovering
				manualAdvance : false, //Force manual transitions
				captionOpacity : 0.8, //Universal caption opacity
				beforeChange : function() {
				},
				afterChange : function() {
				},
				slideshowEnd : function() {
				} //Triggers after all slides have been shown
			});
			
			// put alt into href
			$("#slider a").each(function(i){
				var alt = $('img', this).attr('alt');
				alt && $(this).attr('href', alt); 
			});
			
			// change label of alt field
			$('label[for*="-alt"]').text('Link URL').nextAll('.description').text('Links image to URL.');
    }
  };
})(jQuery);
