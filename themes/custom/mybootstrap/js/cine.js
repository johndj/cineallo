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
            //$('.accueil').hide();
            /*$('.btn-user').hover(
                function() {

                    $('.accueil').slideToggle(1000);
                }

            );*/
            $(document).ready(function(){
                $("#wrap").mouseenter(function(){
                    $(".accueil").stop().slideDown();
                });
                $("#wrap").mouseleave(function(){
                    $(".accueil").slideUp();
                });
            });
            

        }
    }

})(jQuery, Drupal, drupalSettings);