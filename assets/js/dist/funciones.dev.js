"use strict";

//link activo
jQuery(function ($) {
  $(function () {
    // this will get the full URL at the address bar
    var url = window.location.href; // passes on every "a" tag

    $("section").hide();
    $("section").fadeIn("slow");
    $(".navbar-nav .nav-link").each(function () {
      // checks if its the same on the address bar
      if (url == this.href) {
        $(this).closest("li").addClass("active"); //for making parent of submenu active

        $(this).closest("li").parent().parent().addClass("active");
      }
    });
  });
}); //flecha para volver arriba

jQuery(document).ready(function () {
  var offset = 220;
  var duration = 500;
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > offset) {
      jQuery('.back-to-top').fadeIn(duration);
    } else {
      jQuery('.back-to-top').fadeOut(duration);
    }
  });
  jQuery('.back-to-top').click(function (event) {
    event.preventDefault();
    jQuery('html, body').animate({
      scrollTop: 0
    }, duration);
    return false;
  }); //navegacion entre poemas
  // $('#listaPoemas li a').click(function(){
  //     let poema = $(this).attr('href');
  //     $("html").animate(
  //         {
  //           scrollTop: $("#"+poema).offset().top
  //         },
  //         500 //speed
  //       );
  // })

  $("#listaPoemas").on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();
    console.log('click');
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top - 180
    }, 800);
  });
});