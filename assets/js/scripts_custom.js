jQuery(document).ready(function($) {
	$(document).ready(function(){
		$('#main-menu').slicknav();
	});
});
jQuery(document).ready(function($) {
	$('.homeslider').bxSlider({
		  pager: false,
		  auto: true,
                  mode:  'fade',
                  
	});
	
});
jQuery(document).ready(function($) {
	$('.bxproduct').bxSlider({
	  minSlides: 1,
	  maxSlides: 4,
	  slideWidth: 275,
	  slideMargin: 20
	});
});
jQuery(document).ready(function($) {
	$('.bxslider').bxSlider({
	  pagerCustom: '#bx-pager'
	});
});

jQuery(document).ready(function($) {
      $("#header").sticky({ topSpacing: 0 });
    });

jQuery(document).ready(function($) { 
	$('#section-menu ul li a').bind('click',function(event){
		var $anchor = $(this);
		
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1000);
		/*
		if you don't want to use the easing effects:*/
		
		
		event.preventDefault();
	});
});
jQuery(document).ready(function($) {
var make_button_active = function()
{
  //Get item siblings
  var siblings =($(this).siblings());

  //Remove active class on all buttons
  siblings.each(function (index)
    {
      $(this).removeClass('active');
    }
  )
  //Add the clicked button class
  $(this).addClass('active');
}

    $("#section-menu ul li").click(make_button_active);
  }  
)

jQuery(document).ready(function($) { 
	$('.range-slider').jRange({
		from: 0,
		to: 100,
		step: 1,
		scale: [0,25,50,75,100],
		format: '%s',
		width: 300,
		showLabels: true,
		isRange : true
	});
});
