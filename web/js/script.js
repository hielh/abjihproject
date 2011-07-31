jQuery(document).ready(function(){

    $.ajaxSetup({
	beforeSend: function(){
	    qu.common.showLoader();
	},
	complete: function(){
	    qu.common.hideLoader();
	}
    });

    //action sur la playlist
    qu.common.execute();
    qu.player.execute();

});

