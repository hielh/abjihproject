qu.player = qu.player || {};

qu.player.addToPlaylist = function(){
  jQuery('.addToPlaylist').bind('click', function(){
    
    self = jQuery(this);
    elementId = self.attr('id');
    id = elementId.substr(elementId.lastIndexOf('_')+1)
    
    jQuery.ajax({
      type: "POST",
      url: self.attr('href'),
      global: false,
      data: "id="+id,
      success: function(data){
        qu.player.refreshPlaylist();
      }
    });
    
    return false;
  });
}

qu.player.removeFromPlaylist = function(){
  
  }

qu.player.refreshPlaylist = function(){
  
}