jQuery(document).ready(function(){

  //action sur la playlist
  qu.common.execute();
  qu.player.execute();

  $.ajaxSetup({
    complete: function(data){
      qu.common.displayNotice(data.responseText);
    }
  });


});

