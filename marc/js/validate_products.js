onload=init;

function init(){
	document.getElementById("myform").onsubmit = function(){
		return validate();
	}
}

function validate(){
	var ok_to_submit = true;
	
	document.getElementById("name-message").innerHTML = "";
	document.getElementById("price-message").innerHTML = "";

	
	if(document.getElementById("name-input").value==""){
		document.getElementById("name-message").innerHTML = "You MUST enter a name.";
		ok_to_submit = false;
	}
	if(document.getElementById("price-input").value==""){
		document.getElementById("price-message").innerHTML = "You MUST enter a price.";
		ok_to_submit = false;
	}
	if(isNaN(document.getElementById("price-input").value)){
		document.getElementById("price-message").innerHTML = "This value MUST be a number.";
		ok_to_submit = false;
	}
	return ok_to_submit;
}