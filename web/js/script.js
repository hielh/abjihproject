jQuery(document).ready(function(){


  // afficher les infobulles
  qu.common.tooltip();

  //affiche le player quand on scroll la page
  //qu.common.fixedPlayer();
  
  //action sur la playlist
  qu.player.userActionsOnPlaylist();

  $.ajaxSetup({
    start: function(){
    //console.log( "Request start." );
    },
    complete: function(data){
      qu.common.displayNotice(data.responseText);
    }
  });


});

