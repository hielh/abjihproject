jQuery(document).ready(function(){

    $.ajaxSetup({
	beforeSend: function(){
	    qu.common.showLoader();
	},
	complete: function(data){
	    qu.common.hideLoader();
	    qu.common.configureAndDisplayNotice(data.responseText);
	}
    });

    //action sur la playlist
    qu.common.execute();
    qu.player.execute();

});

