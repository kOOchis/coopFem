    $('.menu li > .sub-menu').hide();
    $('.menu li > .sub-menu').parent().hover(function() {
        var submenu = $(this).children('.sub-menu');
        if ( $(submenu).is(':hidden') ) {
          $(submenu).slideDown(400);
        } else {
          $(submenu).slideUp(400);
        }
    });
  

    function menuResponsive() {
      event.preventDefault();
      console.log("click");
      /*$(".menu-navigation-header-container").fadeIn();*/

      $(".menu-navigation-header-container").toggle("slideDown");
    }



$('#menu-navigation-header>li>a').each(function() {
  var changeText;
  var text = (  $( this ).text() );
/*  console.log(text);*/


    $('#menu-item-10 a:first').replaceWith('<a href="http://localhost/wp-coopFem/">Coopération Féminine <i class="fa fa-chevron-down" aria-hidden="true"></i></a>');
    $('#menu-item-223 a:first').replaceWith('<a href="http://localhost/wp-coopFem/category/activites/">Activités <i class="fa fa-chevron-down" aria-hidden="true"></i></a>');
    $('#menu-item-240 a:first').replaceWith('<a href="http://localhost/wp-coopFem/nos-clubs/">Clubs <i class="fa fa-chevron-down" aria-hidden="true"></i></a>');
    $('#menu-item-256 a:first').replaceWith('<a href="http://localhost/wp-coopFem/nos-clubs/">Revue <i class="fa fa-chevron-down" aria-hidden="true"></i></a>');

    $('#menu-item-10 a:first').click(function(event){
    event.preventDefault();
});
    $('#menu-item-223 a:first').click(function(event){
    event.preventDefault();
});
    $('#menu-item-240 a:first').click(function(event){
    event.preventDefault();
});
    $('#menu-item-256 a:first').click(function(event){
    event.preventDefault();
});


});
