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
  qu.player.addToPlaylist();
  
  
//  $("#player").jPlayer( {
//    ready: function () {
//      $(this).jPlayer("setMedia", {
//        mp3: "/uploads/listen/Miaow-07-Bubble.mp3" // Defines the mp3 url
//      }).jPlayer("load");
//    },
//    swfPath: "/swf",
//    solution: "flash",
//    supplied: "mp3",
//    cssSelectorAncestor: '.player-controls',
//    cssSelector: {
//      play: '.jp-play',
//      pause: '.jp-pause',
//      stop: '.jp-stop',
//      seekBar: '.jp-seek-bar',
//      playBar: '.jp-play-bar',
//      mute: '.jp-mute',
//      unmute: '.jp-unmute',
//      volumeBar: '.jp-volume-bar',
//      volumeBarValue: '.jp-volume-bar-value',
//      currentTime: '.jp-current-time',
//      duration: '.jp-duration'
//    }
//  });

  jQuery('.toPlayNumber').hover(function(){
    val = jQuery(this).html();
    jQuery(this).html('<a href="#" class="add urlImage" title="download">Download</a>').fadeIn(slow);
  }, function(){
    jQuery(this).html(val);
  }
  );
});



$(document).ready(function(){

        var Playlist = function(instance, playlist, options) {
		var self = this;

		this.instance = instance; // String: To associate specific HTML with this playlist
		this.playlist = playlist; // Array of Objects: The playlist
		this.options = options; // Object: The jPlayer constructor options for this playlist

		this.current = 0;

		this.cssId = {
			jPlayer: "player",
			interface: "player-controls",
			playlist: "jp_playlist"
		};
		this.cssSelector = {};

		$.each(this.cssId, function(entity, id) {
			self.cssSelector[entity] = "#" + id + self.instance;
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
		displayPlaylist: function() {
			var self = this;
			$(this.cssSelector.playlist + " ul").empty();
			for (i=0; i < this.playlist.length; i++) {
              // fixbug
              if (this.playlist[i].mp3){
                href =  this.playlist[i].mp3;
                format = "mp3";
                lecteur = 'flash';
              }
              else if (this.playlist[i].oga){
                href =  this.playlist[i].oga;
                format = "oga";
                lecteur = 'html';
              }
              else {
                href= "#";
                format = "";
              }
				var listItem = (i === this.playlist.length-1) ? "<li class='jp-playlist-last'>" : "<li>";
				listItem += "<a href='"+href+"' id='" + this.cssId.playlist + this.instance + "_item_" + i +"' tabindex='1'>"+ this.playlist[i].name +"</a>";

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
							listItem += "<a id='" + self.cssId.playlist + self.instance + "_item_" + i + "_" + property + "' href='" + value + "' tabindex='1'>" + property + "</a>";
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

	var audioPlaylist = new Playlist("", privateListener , {
		ready: function() {
			audioPlaylist.displayPlaylist();
			audioPlaylist.playlistInit(false); // Parameter is a boolean for autoplay.
		},
		ended: function() {
			audioPlaylist.playlistNext();
		},
		play: function() {
			$(this).jPlayer("pauseOthers");
		},
		swfPath: "/swf",
        solution: "flash",
		supplied: "mp3, oga"
	});
});