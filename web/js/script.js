/* Author: 

*/

$(function(){
    $("a, .bull, .bull_help, .help").tipTip({
	defaultPosition: 'top'
    });

//find all form with class jqtransform and apply the plugin
//$("form.jqtransform").jqTransform();
});

jQuery(document).ready(function(){

    //  $("#player").jPlayer( {
    //    ready: function () {
    //      $(this).jPlayer("setMedia", {
    //        mp3: "http://www.jplayer.org/audio/mp3/Miaow-07-Bubble.mp3" // Defines the mp3 url
    //      }).jPlayer("play");
    //    },
    //    swfPath: "/home/abjih/Bureau/test/js/libs/",
    //    solution: 'flash',
    //    supplied: "mp3"
    //
    ////    cssSelectorAncestor: '.player-controls',
    ////    cssSelector: {
    ////      play: '.jp-play',
    ////      pause: '.jp-pause',
    ////      stop: '.jp-stop',
    ////      seekBar: '.jp-seek-bar',
    ////      playBar: '.jp-play-bar',
    ////      mute: '.jp-mute',
    ////      unmute: '.jp-unmute',
    ////      volumeBar: '.jp-volume-bar',
    ////      volumeBarValue: '.jp-volume-bar-value',
    ////      currentTime: '.jp-current-time',
    ////      duration: '.jp-duration'
    ////    }
    //  });

    $("#player").jPlayer({
	ready: function () {
	    $(this).jPlayer("setMedia", {
		mp3: "http://www.jplayer.org/audio/mp3/Miaow-07-Bubble.mp3"
	    }).jPlayer("load");
	},
	ended: function (event) {
	    $(this).jPlayer("play");
	},
	swfPath: "file:///home/abjih/Bureau/test/js/libs/",
	solution: "flash",
	supplied: "mp3"
    });


    jQuery('.toPlayNumber').hover(function(){
	val = jQuery(this).html();
	jQuery(this).html('<a href="#" class="add urlImage" title="download">Download</a>').fadeIn(slow);
    }, function(){
	jQuery(this).html(val);
    }
    );
});
