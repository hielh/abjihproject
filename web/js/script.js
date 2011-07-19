jQuery(document).ready(function(){


  // afficher les infobulles
  qu.common.tooltip();

  //action sur la playlist
  qu.player.userActionsOnPlaylist();

  $.ajaxSetup({
    start: function(){
      console.log( "Request complete." );
    },
    complete: function(data){
      qu.common.displayNotice(data.responseText);
    }
  });


});

