jQuery(document).ready(function(){

    $.ajaxSetup({
	beforeSend: function(){
	    qu.common.showLoader();
	},
	complete: function(data){
	    qu.common.hideLoader();
	    qu.common.configureAndDisplayNotice(data.responseText);
	}
    });

    //action sur la playlist
    qu.common.execute();
    qu.player.execute();

});


$(function () {
  // IE6 doesn't handle the fade effect very well - so we'll stick with
  // the default non JavaScript version if that is the user's browser.
  if ($.browser.msie && $.browser.version < 7) return;
  
  $('#nav ul li')
  
    // remove the 'highlight' class from the li therefore stripping 
    // the :hover rule
    
    .removeClass('high')
    // within the context of the li element, find the a elements
    .find('a')
    
    // create our new span.hover and loop through anchor:
    .append('<span class="hover" />').each(function () {
      
      // cache a copy of the span, at the same time changing the opacity
      // to zero in preparation of the page being loaded
      var $span = $('> span.hover', this).css('opacity', 0).css('position', 'absolute').css('top', 0);
      
      // when the user hovers in and out of the anchor
      $(this).hover(function () {
        // on hover
        
        // stop any animations currently running, and fade to opacity: 1
        $span.stop().fadeTo(500, 1);
      }, function () {
        // off hover
        
        // again, stop any animations currently running, and fade out
        $span.stop().fadeTo(500, 0);
      });
    });
});