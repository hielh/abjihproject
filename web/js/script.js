jQuery(document).ready(function(){

  

  $.ajaxSetup({
    start: function(data){
      alert(1);
    },
    complete: function(data){
      qu.common.hideLoader();
      qu.common.displayNotice(data.responseText);
      
    }
  });

//action sur la playlist
  qu.common.execute();
  qu.player.execute();

});

