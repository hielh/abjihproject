var qu = qu || {};
qu.common = qu.common || {};

// afficher les notification
qu.common.displayNotice = function(titleElement, textElement, imageElement){
  
    if (titleElement === null)
    {
	titleElement = '.notice-title';
    }
    if (textElement === null)
    {
	textElement = '.notice-text';
    }
    if (imageElement === null)
    {
	imageElement = '.notice-image';
    }
    
    if ($('.show-notice').length >0)
    {
	if( jQuery('.show-notice').hasClass('success'))
	{
	    imageElement = '/images/success.png';
	}
	else if( jQuery('.show-notice').hasClass('error'))
	{
	    imageElement = '/images/error.png';
	}
	$.gritter.add({
	    title: jQuery(titleElement).html(),
	    text: jQuery(textElement).html(),
	    image: imageElement,
	    sticky: false,
	    time: 8000
	});
    }
    
}