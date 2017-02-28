(function($,Drupal, drupalSettings){

    //plier cacher

    Drupal.behaviors.collapsableBlock = {
        attach: function(context, settings){
            $('li.expanded.dropdown').hover(
                function() {
                    $('ul.menu.dropdown-menu').stop(true, true).slideDown('');
                },
                function() {
                    $('ul.menu.dropdown-menu').stop(true, true).slideUp('');
                }
        );
        }
    }

//initialisation de match height

    /*	Drupal.behaviors.collapsableBlock = {
     attach: function(context, settings){
     $('.views-col').matchHeight();
     }
     }*/
})(jQuery, Drupal, drupalSettings);