onload=init;

function init(){
	document.getElementById("track_form").onsubmit = function(){
		return validate();
	}
}

function validate(){
	var ok_to_submit = true;
		
	if(document.getElementById("key-select").value==""){
		window.alert("You MUST select a key");
		ok_to_submit = false;
	}
	if(document.getElementById("tone-select").value==""){
		window.alert("You MUST select a tone");
		ok_to_submit = false;
	}
	if(document.getElementById("tempo-select").value==""){
		window.alert("You MUST select a tempo");
		ok_to_submit = false;
	}
	return ok_to_submit;
}