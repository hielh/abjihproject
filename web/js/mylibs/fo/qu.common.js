var qu = qu || {};
qu.common = qu.common || {};

/*
 *  fonction a executé on ready
 *  KEEP IT ON TOP !!!
 */
qu.common.execute = function(){
  // afficher les infobulles
  //  qu.common.tooltip();
  
  qu.common.submitForm();
}


/**
 * affiche une notification
 */
qu.common.displayNotice = function(data, titleElement, typeNotice){
  
  if (data != null)
  {
    divObject = jQuery(data).closest('.show-notice');
    titleElement = divObject.children('.notice-title');
  }
  else
  {
    divObject = jQuery('.show-notice');
  }
  
  if (titleElement == null)
  {
    titleElement = '.notice-title';
  }

  if (jQuery('.show-notice').length != 0)
  {
    
    if (typeNotice == null )
    {
      if( divObject.hasClass('success'))
      {
        typeNotice = 'confirmation';
      }
      else if( divObject.hasClass('error'))
      {
        typeNotice = 'error';
      }
      else if( divObject.hasClass('question'))
      {
        typeNotice = 'question';
      }
      else if( divObject.hasClass('warning'))
      {
        typeNotice = 'warning';
      }
      else if(divObject.hasClass('information'))
      {
        typeNotice = 'information';
      }
    }

    $.Zebra_Dialog('<strong>'+jQuery(titleElement).html()+'</strong>', {
      //'title'           : 'test',
      'buttons'         : false,
      'modal'           : false,
      'position'        : ['right - 20', 'top + 80'],
      'type'            : typeNotice, // "warning", "question", "information", "confirmation", "error"
      'auto_close'      : 2000,
      'keyboard'        : true
    });
  }
    
}

/**
 * afficher les infobulles
 */
qu.common.tooltip = function()
{
  jQuery(".bull, .bull_help, .help").tipTip({
    defaultPosition: 'top'
  });
}

/**
 * affiche le player quand on scroll la page
 */
qu.common.fixedPlayer = function()
{
  var bar = $('#bottomPlayer');
  var top = bar.css('bottom');
  $(window).scroll(function() {
    if($(this).scrollTop() > 120) {
      bar.show().fadeIn('slow').stop().animate({
        'bottom' : '0px'
      }, 500);
    } else {
      bar.fadeOut('fast');
    }
  });
}

/**
 * submit form width ajax
 */
qu.common.submitForm = function()
{
  jQuery('.ajaxFormSubmit').live('submit', function(){
    var self = jQuery(this);
    var url = self.attr('action');
    var method = self.attr('method');
    qu.common.sendRequest(url, self.serialize(),self.parent('.parentAjaxFormSubmit'), method);
    return false;
  });
}

/**
 * send ajax request
 */
qu.common.sendRequest = function(url, data, responseElement, methode)
{
  methode = (methode == null)? 'GET':methode;
  responseElement = (responseElement == null)? '.responseDiv': responseElement;
  
  jQuery.ajax({
    type: methode,
    url: url,
    global: false,
    data: data,
    success: function(returnedData){
      jQuery(responseElement).html(returnedData);
    }
  });
    
  return false;
}

qu.common.refreshContainer = function(url){
  qu.common.sendRequest(url, null, '#main-content');
}

/**
 * afficher image de chargement
 */
qu.common.showLoader = function(){
  jQuery('#loading').show();
}
/**
 * hide image de chargement
 */
qu.common.hideLoader = function(){
  jQuery('#loading').hide();
}