/* Author: 

*/

$(function(){
  $(".bull, .bull_help, .help").tipTip({
    defaultPosition: 'top'
  });

//find all form with class jqtransform and apply the plugin
//$("form.jqtransform").jqTransform();
});

jQuery(document).ready(function(){


  //ajouter un track a la playlist
  qu.player.userActionsOnPlaylist();

  jQuery('.toPlayNumber').hover(function(){
    val = jQuery(this).html();
    jQuery(this).html('<a href="#" class="add urlImage" title="download">Download</a>').fadeIn(slow);
  }, function(){
    jQuery(this).html(val);
  }
  );
});



$(document).ready(function(){

        Playlist = qu.player.init();
        audioPlaylist = qu.player.initPlaylist(Playlist, privateListener);
});
