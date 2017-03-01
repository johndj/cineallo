(function($,Drupal, drupalSettings){

    //plier cacher

    Drupal.behaviors.collapsableBlock2 = {
        attach: function(context, settings){
            $('li.expanded.dropdown').hover(
                function() {
                    $(this).find('ul.menu.dropdown-menu').stop(true, true).slideDown('');
                },
                function() {
                    $(this).find('ul.menu.dropdown-menu').stop(true, true).slideUp('');
                }
        );
            $('.navbar-right li.expanded.dropdown a.dropdown-toggle').text('Mon CineAllo');
        }
    }
//initialisation de match height

    /*	Drupal.behaviors.collapsableBlock = {
     attach: function(context, settings){
     $('.views-col').matchHeight();
     }
     }*/
})(jQuery, Drupal, drupalSettings);