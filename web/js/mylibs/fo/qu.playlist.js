qu.player = qu.player || {};

qu.player.init = function(){
  var Playlist = function(playlist, options) {
    var self = this;

    this.playlist = playlist; // Array of Objects: The playlist
    this.options = options; // Object: The jPlayer constructor options for this playlist

    this.current = 0;

    this.cssId = {
      jPlayer: "jp-player",
      interface: "player-controls",
      playlist: "jp_playlist"
    };
    this.cssSelector = {};

    $.each(this.cssId, function(entity, id) {
      self.cssSelector[entity] = "#" + id;
    });

    if(!this.options.cssSelectorAncestor) {
      this.options.cssSelectorAncestor = this.cssSelector.interface;
    }

    $(this.cssSelector.jPlayer).jPlayer(this.options);

    $(this.cssSelector.interface + " .jp-previous").click(function() {
      self.playlistPrev();
      $(this).blur();
      return false;
    });

    $(this.cssSelector.interface + " .jp-next").click(function() {
      self.playlistNext();
      $(this).blur();
      return false;
    });
  };

  Playlist.prototype = {
    setPlaylist: function(privateListener){
      this.playlist = privateListener;
    },
    getPlaylist: function(){
    //console.log(this.playlist)
    },
    getCurrentTrack: function(){
      currentTrack = this.playlist[this.current];
      return currentTrack;
    },
    displayPlaylist: function() {
      var self = this;
      // this.cssSelector.playlist == #jp_playlist
      $(this.cssSelector.playlist + " ul").empty();
      for (i=0; i < this.playlist.length; i++) {
        // fixbug
        if (this.playlist[i].mp3){
          href =  this.playlist[i].mp3;
        }
        else if (this.playlist[i].oga){
          href =  this.playlist[i].oga;
        }
        else {
          href= "#";
        }
        var listItem = (i === this.playlist.length-1) ? "<li class='jp-playlist-last'>" : "<li>";
        listItem += "<a href='"+href+"' id='" + this.cssId.playlist + "_item_" + i +"' tabindex='1'>"+ this.playlist[i].name +"</a>";

        // Create links to free media
        if(this.playlist[i].free) {
          var first = true;
          listItem += "<div class='jp-free-media'>(";
          $.each(this.playlist[i], function(property,value) {
            if($.jPlayer.prototype.format[property]) { // Check property is a media format.
              if(first) {
                first = false;
              } else {
                listItem += " | ";
              }
              listItem += "<a id='" + self.cssId.playlist + "_item_" + i + "_" + property + "' href='" + value + "' tabindex='1'>" + property + "</a>";
            }
          });
          listItem += ")</span>";
        }

        listItem += "</li>";

        // Associate playlist items with their media
        $(this.cssSelector.playlist + " ul").append(listItem);
        $(this.cssSelector.playlist + "_item_" + i).data("index", i).click(function() {
          var index = $(this).data("index");
          if(self.current !== index) {
            self.playlistChange(index);
          } else {
            $(self.cssSelector.jPlayer).jPlayer("play");
          }
          $(this).blur();
          return false;
        });

        // Disable free media links to force access via right click
        if(this.playlist[i].free) {
          $.each(this.playlist[i], function(property,value) {
            if($.jPlayer.prototype.format[property]) { // Check property is a media format.
              $(self.cssSelector.playlist + "_item_" + i + "_" + property).data("index", i).click(function() {
                var index = $(this).data("index");
                $(self.cssSelector.playlist + "_item_" + index).click();
                $(this).blur();
                return false;
              });
            }
          });
        }
      }
    },
    playlistInit: function(autoplay) {
      if(autoplay) {
        this.playlistChange(this.current);
      } else {
        this.playlistConfig(this.current);
      }
    },
    playlistConfig: function(index) {
      $(this.cssSelector.playlist + "_item_" + this.current).removeClass("jp-playlist-current").parent().removeClass("jp-playlist-current");
      $(this.cssSelector.playlist + "_item_" + index).addClass("jp-playlist-current").parent().addClass("jp-playlist-current");
      this.current = index;
      $(this.cssSelector.jPlayer).jPlayer("setMedia", this.playlist[this.current]);
    },
    playlistChange: function(index) {
      this.playlistConfig(index);
      $(this.cssSelector.jPlayer).jPlayer("play");
    },
    playlistNext: function() {
      var index = (this.current + 1 < this.playlist.length) ? this.current + 1 : 0;
      this.playlistChange(index);
    },
    playlistPrev: function() {
      var index = (this.current - 1 >= 0) ? this.current - 1 : this.playlist.length - 1;
      this.playlistChange(index);
    }
  };
    
  return Playlist;
}

qu.player.initPlaylist = function(Playlist, privateListener){
  
  var audioPlaylist = new Playlist(privateListener , {
    ready: function() {
      audioPlaylist.displayPlaylist(privateListener);
      audioPlaylist.playlistInit(false); // Parameter is a boolean for autoplay.
      jQuery('.info-player-text').html(privateListener[0].name);
    },
    ended: function() {
      audioPlaylist.playlistNext();
    },
    play: function() {
      $(this).jPlayer("pauseOthers");
      currTrack = audioPlaylist.getCurrentTrack();
      jQuery('.info-player-text').html(currTrack.name);
    },
    swfPath: "/swf",
    solution: "flash",
    supplied: "mp3"
  });
  return audioPlaylist;
}

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
        eval(""+data+"");
      //audioPlaylist.setPlaylist(privateListener);
      //audioPlaylist.displayPlaylist();
      }
    });
    
    return false;
  });
}

qu.player.userActionsOnPlaylist = function(){
  
  Playlist = qu.player.init();
  audioPlaylist = qu.player.initPlaylist(Playlist, privateListener);
  qu.player.addToPlaylist();
  qu.player.showPlaylist();
}

/**
 * afficher la list des track 
 */
qu.player.showPlaylist = function(){
    jQuery('.show-playlist').live('hover', function(){
	jQuery('.jp-playlist-parent').show('slow');
	return false;
    });
    jQuery('.jp-playlist-parent').hover(function(){}, function(){
	jQuery(this).hide('slow');
    });
    return false;
}