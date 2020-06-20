	
$(document).ready(function(){
	$('#LeadNewsBox').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
	});


	// Scroll to Top

	$('.scrolltotop').hide();

	$(window).scroll(function(){
		if( $(this).scrollTop() > 500 ){
			$('.scrolltotop').fadeIn();
		}else{
			$('.scrolltotop').fadeOut();
		}
	});

    $('.scrolltotop').click(function(){
    	$("html, body").animate({scrollTop : 0}, "slow");
    	return false;
    });

});

