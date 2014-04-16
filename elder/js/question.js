$(document).ready(function() {
	$("span.item").hover(function() {
		$(this).append('<div class="hoverbox"><p>Here are diagrams of the pentatonic scale for the selected key. Try going up and down these scales by starting on the "root" note as labeled. When you are comfortable playing along these scales on each string and along each fret, turn on the track player and make a sweet guitar solo!</p></div>');
	}, function(){
    	$("div.hoverbox").remove();
	});
	
	$("span.item2").hover(function() {
		$(this).append('<div class="hoverbox2"><p>Here are diagrams of the compatible chords for the selected key. Practice playing these chords and getting used to the position of these chords along the guitar neck until it is comfortable. Once you learn these chords, try to incorporate them with the song track, or even try to write your own song!</p></div>');
	}, function(){
    	$("div.hoverbox2").remove();
	});
});