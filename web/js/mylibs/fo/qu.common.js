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

  $.gritter.add({
    title: jQuery(titleElement).html(),
    text: jQuery(textElement).html(),
    image: jQuery(imageElement).html(),
    sticky: false,
    time: 8000
  });
}