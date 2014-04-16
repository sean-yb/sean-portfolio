$(document).ready(function(){
	$('.bignav').hover(function(){
		$('.textHold',this).stop(true,true).animate({top:'-225px'},1000);
		$('.textHold h6',this).stop(true,true).animate({fontSize:'3em'},1000);
	},function(){
        $('.textHold',this).stop(true,true).animate({top:'0px'},1000);
		$('.textHold h6',this).stop(true,true).animate({fontSize:'1em'},1000);
    });
});