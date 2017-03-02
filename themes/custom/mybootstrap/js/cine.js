(function($,Drupal, drupalSettings){

    //plier cacher
    Drupal.behaviors.collapsableBlock = {
        attach: function(context, settings){

            $('.panel-heading', context).click(function(){
                $(this).parent().find('.collapse').slideToggle('fast');
            });
        }
    }

    Drupal.behaviors.collapsableBlock3 = {
        attach: function(context, settings){
            $('.accueil').hide();
            $('.btn-user').click(
                function() {

                    $('.accueil').slideToggle(1000);
                }

            );

        }
    }

})(jQuery, Drupal, drupalSettings);