/**
* Button Slider
* @author Sean Gracy
* @version 1.0
*/

$(document).ready(function(){
	$("#body-nav").click(function(){
		$("#body-buttons").slideDown("fast");
		$("#insole-buttons").slideUp("fast");
		$("#detail-buttons").slideUp("fast");
		$("#lace-buttons").slideUp("fast");
	});
	$("#insole-nav").click(function(){
		$("#body-buttons").slideUp("fast");
		$("#insole-buttons").slideDown("fast");
		$("#detail-buttons").slideUp("fast");
		$("#lace-buttons").slideUp("fast");
	});
	$("#detail-nav").click(function(){
		$("#body-buttons").slideUp("fast");
		$("#insole-buttons").slideUp("fast");
		$("#detail-buttons").slideDown("fast");
		$("#lace-buttons").slideUp("fast");
	});
	$("#lace-nav").click(function(){
		$("#body-buttons").slideUp("fast");
		$("#insole-buttons").slideUp("fast");
		$("#detail-buttons").slideUp("fast");
		$("#lace-buttons").slideDown("fast");
	});
});