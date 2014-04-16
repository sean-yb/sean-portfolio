$(document).ready(function(){
	var images = ['background_img.jpg', 'background_img02.jpg', 'background_img03.jpg'];
	$('body').css({
		'background-image': 'url(img/' + images[Math.floor(Math.random() * images.length)] + ')'
	});
});