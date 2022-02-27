$(document).ready(function(){

var divs = $('.body .overlay'),
    limit = 230;


  //make navbar smaller when shrink
    $(window).scroll(function() {
      if ($(document).scrollTop() > 120) {
        $('.navbar').addClass('shrink').removeClass('bigger');
      } else {
        $('.navbar').removeClass('shrink').addClass('bigger');
      }

        var target = $(".section:first-of-type").offset().top;
    if ($(document).scrollTop() >= target) {
        $('.side-nav').addClass('fix');
    }
        else {
        $('.side-nav').removeClass('fix');
      }



        var st = $(this).scrollTop();

         /* avoid unnecessary call to jQuery function */
         if (st <= limit) {
            divs.css({ 'opacity' : (st/limit) });
        }


    });

      //dropdown menu for viewing more projects
    $('.view-more-proj').click(function() {
      $('.more-projects.dropdown-menu').toggle();
      $('.view-more-proj .description').toggleClass("semibold");
      return false;
    });



    $(".side-nav ul li a[href^='#']").on('click', function(e) {
       // prevent default anchor click behavior
       e.preventDefault();
       // store hash

       $(this).focus();
       var hash = this.hash;

       // animate
       $('html, body').animate({
           scrollTop: $(hash).offset().top
         }, 300, function(){
           // when done, add hash to url
           // (default click behaviour)
           window.location.hash = hash;
    });



});

});
