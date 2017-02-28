(function($,Drupal, drupalSettings){

    //plier cacher

    Drupal.behaviors.collapsableBlock = {
        attach: function(context, settings){
            $('.panel-heading', context).click(function(){
                $(this).parent().find('.collapse').slideToggle('fast');
            });
        }
    }

//initialisation de match height

    /*	Drupal.behaviors.collapsableBlock = {
     attach: function(context, settings){
     $('.views-col').matchHeight();
     }
     }*/
})(jQuery, Drupal, drupalSettings);