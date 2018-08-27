
// preloader
$(window).load(function(){
    $('.preloader').fadeOut(1000); // set duration in brackets    
});

/* HTML document is loaded. DOM is ready. 
-------------------------------------------*/
$(function(){

  // ------- WOW ANIMATED ------ //
  wow = new WOW(
  {
    mobile: false
  });
  wow.init();

  // ------- JQUERY PARALLAX ---- //
  function initParallax() {
    $('#home').parallax("100%", 0.1);
    $('#gallery').parallax("100%", 0.3);
    $('#menu').parallax("100%", 0.2);
    $('#team').parallax("100%", 0.3);
    $('#contact').parallax("100%", 0.1);

  }

  initParallax();

  // HIDE MOBILE MENU AFTER CLIKING ON A LINK
  $('.navbar-collapse a').click(function(){



        $(".navbar-collapse").collapse('hide');



   });

  // NIVO LIGHTBOX
  $('#gallery a').nivoLightbox({
        effect: 'fadeScale',
    });





 $(function() {
      // Select link by id and add click event
      $('.mylinkhome').click(function() {

        // Animate Scroll to #bottom
        $('html,body').animate({
          scrollTop: $("#home").offset().top }, // Tell it to scroll to the top #bottom
          1000 // How long scroll will take in milliseconds
        );

        // Prevent default behavior of link
        return false;
      });
    });


   $(function() {
      // Select link by id and add click event
      $('.mylinkgallery').click(function() {

        // Animate Scroll to #bottom
        $('html,body').animate({
          scrollTop: $("#gallery").offset().top }, // Tell it to scroll to the top #bottom
          1000 // How long scroll will take in milliseconds
        );

        // Prevent default behavior of link
        return false;
      });
    });



   $(function() {
      // Select link by id and add click event
      $('.mylinkmenu').click(function() {

        // Animate Scroll to #bottom
        $('html,body').animate({
          scrollTop: $("#menu").offset().top }, // Tell it to scroll to the top #bottom
          1000 // How long scroll will take in milliseconds
        );

        // Prevent default behavior of link
        return false;
      });
    });


   $(function() {
      // Select link by id and add click event
      $('.mylinkcheefs').click(function() {

        // Animate Scroll to #bottom
        $('html,body').animate({
          scrollTop: $("#team").offset().top }, // Tell it to scroll to the top #bottom
          1000 // How long scroll will take in milliseconds
        );

        // Prevent default behavior of link
        return false;
      });
    });



$(function() {
      // Select link by id and add click event
      $('.mylinkcontato').click(function() {

        // Animate Scroll to #bottom
        $('html,body').animate({
          scrollTop: $("#contact").offset().top }, // Tell it to scroll to the top #bottom
          1500 // How long scroll will take in milliseconds
        );

        // Prevent default behavior of link
        return false;
      });
    });





});

