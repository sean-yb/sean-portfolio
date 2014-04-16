/**
* jQuery Page Scrolling
* @author Sean Gracy
* @version 1.0
*/

$(document).ready(function(){
	
	$('a').click(function(){
		if($(window).width() > 768) {
			$('html, body').animate({
				scrollTop: $( $(this).attr('href') ).offset().top - 100
			}, 700);
			return false;
		}else{
			$('html, body').animate({
				scrollTop: $( $(this).attr('href') ).offset().top - 75
			}, 700);
			return false;
		}
	});
	
	$(window).scroll(function() {
		if($(window).width() >960){
			if($(this).scrollTop()<300){
				$('.fixedheader').fadeOut();
			}
			else{
				$('.fixedheader').fadeIn();
			}
		}else if($(window).width() >768){
			if($(this).scrollTop()<200){
				$('.fixedheader').fadeOut();
			}
			else{
				$('.fixedheader').fadeIn();
			}
		}else{
			if($(this).scrollTop()<200){
				$('.fixedheader').fadeOut();
			}
			else{
				$('.fixedheader').fadeIn();
			}
		}
	});
});