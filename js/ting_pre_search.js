/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

(function($) {
  

  Drupal.behaviors.tingGetAjaxSearchResult = {		
    attach: function(context, settings) {
      Drupal.TingSearchOverlay();
      $.ajax({
        type: "POST",
        url: Drupal.settings.basePath + "ting/search/ajax",
        dataType: "json",
        data: {
          "keys" : settings.ting_search_keys
        },
        success: function (data) {
          if (data != null) {
            
            $("#ting-ajax-search").html(data);
            
          }
        }
      });				
      
    }
  }

})(jQuery);


