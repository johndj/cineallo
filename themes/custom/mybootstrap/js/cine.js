(function($,Drupal, drupalSettings){

    //plier cacher
    Drupal.behaviors.collapsableBlock = {
        attach: function(context, settings){

            $('.panel-heading', context).click(function(){
                $(this).parent().find('.collapse').slideToggle('fast');
            });
        }
    }

})(jQuery, Drupal, drupalSettings);