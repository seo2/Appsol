

(function($) {
    "use strict"; // Start of use strict


$('.slick').slick({
	dots: true
});
/* Demo purposes only */
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

/*loadpagina*/
$('#preloader').fadeOut('slow');
$('body').css({'overflow':'visible'});
 

   // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 55)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 69
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })


    // Initialize and Configure Scroll Reveal Animation
    window.sr = ScrollReveal();
    sr.reveal('.sr-icons', { origin: 'top', duration: 1000, delay: 500 });
    sr.reveal('.sr-button', { origin: 'bottom', duration: 1000, delay: 200 });


$('.venobox').venobox();
 
 



})(jQuery); // End of use strict
