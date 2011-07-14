
qu.common.displayNotice = function(title, text, image){
  
  if (title === null)
  {
      title = '.notice-title';
  }
  if (text === null)
  {
      text = '.notice-text';
  }
  if (image === null)
  {
      image = '.notice-image';
  }

  $.gritter.add({
    title: jQuery(title).html(),
    text: jQuery(text).html(),
    image: jQuery(image).html(),
    sticky: false,
    time: 8000
  //    before_open: function(){
  //      alert('I am a sticky called before it opens');
  //    },
  //    after_open: function(e){
  //      alert("I am a sticky called after it opens: \nI am passed the jQuery object for the created Gritter element...\n" + e);
  //    },
  //    before_close: function(e, manual_close){
  //      alert("I am a sticky called before it closes: I am passed the jQuery object for the Gritter element... \n" + e);
  //    },
  //    after_close: function(){
  //      alert('I am a sticky called after it closes');
  //    }
  });
}