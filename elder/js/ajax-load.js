$(document).ready(function() {
    $("footer").delay(500).slideDown(800);
	$("#main").delay(1300).slideDown(1500);
    $('.navbtn').click(function(){
    	$("#dropnav").slideUp("slow");
		var toLoad = $(this).attr('href')+' #content';
		$('#content').slideUp(1200,loadContent);
		$('#load').remove();
		$('footer').append('<img id="load" src="img/ajax-loader.gif" style="display:none; margin:25px auto 50px;">').show(1000);
		$('#load').slideDown(1000);
		window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-5);
		function loadContent() {
			$('#content').load(toLoad,'', showNewContent())
		}
		function showNewContent() {
			$('#content').delay(1000).slideDown(1200,hideLoader());
		}
		function hideLoader() {
			$('#load').slideUp(500);
			var images = ['background_img.jpg', 'background_img02.jpg', 'background_img03.jpg'];
			$('body').css({
				'background-image': 'url(img/' + images[Math.floor(Math.random() * images.length)] + ')'
			});
		}
		return false;
    });
	
	var hash = window.location.hash.substr(1);
    var href = $('.navbtn').each(function(){
    	var href = $(this).attr('href');
        if(hash==href.substr(0,href.length-5)){
            var toLoad = hash+'.html #content';
            $('#content').load(toLoad)
        }
    });
});

