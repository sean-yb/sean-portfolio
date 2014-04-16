onload=init;

function init(){
	document.getElementById("myform2").onsubmit = function(){
		return validate2();
	}
}

function validate2(){	
	var ok_to_submit = true;
	
	document.getElementById("city-message").innerHTML = "";
	document.getElementById("state-message").innerHTML = "";
	document.getElementById("manager-message").innerHTML = "";
	document.getElementById("assist-message").innerHTML = "";
	document.getElementById("phone-message").innerHTML = "";
	
	if(document.getElementById("city-input").value==""){
		document.getElementById("city-message").innerHTML = "You MUST enter a city.";
		ok_to_submit = false;
	}
	if(document.getElementById("state-input").value==""){
		document.getElementById("state-message").innerHTML = "You MUST enter a state.";
		ok_to_submit = false;
	}
	if(document.getElementById("manager-input").value==""){
		document.getElementById("manager-message").innerHTML = "You MUST enter a manager.";
		ok_to_submit = false;
	}
	if(document.getElementById("assist-input").value==""){
		document.getElementById("assist-message").innerHTML = "You MUST enter an assistant manager.";
		ok_to_submit = false;
	}
	if(document.getElementById("phone-input").value==""){
		document.getElementById("phone-message").innerHTML = "You MUST enter a phone number.";
		ok_to_submit = false;
	}
	return ok_to_submit;
}