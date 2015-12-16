$(document).ready(function(){

$(window).scroll(function() {
  if ($(document).scrollTop() > 115) {
    $('.navbar').addClass('shrink').removeClass('bigger');
  } else {
    $('.navbar').removeClass('shrink').addClass('bigger');
  }
});
    


$('.icon-menu').click(function(){
					$('.dropdown').toggle();
    console.log('hi');
					
				});
                


				$('.close').click(function(){
					$('.dropdown').hide();
				});
                
          
  $('.fa_ux_dropdown').click(function() {
    $('.dropdown-menu').toggle();
      return false;
  });
                
                 $('.fa_ux_dropdown_small').click(function() {
    $('.dropdown_ux').toggle();
  });

			});