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

        var st = $(this).scrollTop();

         /* avoid unnecessary call to jQuery function */
         if (st <= limit) {
            divs.css({ 'opacity' : (st/limit) });
        }


    });
                  
  //dropdown menu for ux toggles based on angle down        
    $('.ux_dropdown_big').click(function() {
      $('.dropdown-menu').toggle();
      return false;
    });

    //dropdown menu for ux (xs screen)
    $('#fa_ux').click(function(){
      $('.ux_dropdown_small').toggleClass('show');
    });
    $('#close_ux').click(function(){

      $('.ux_dropdown_small').removeClass('show');
    });

});