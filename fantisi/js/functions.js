


function checkout(event){
	// if statement to check if any of the fields are not completed yet
	if(readCookie("body_type")!= null && readCookie("color_type")!= null && readCookie("insole_type")!= null && readCookie("lace_type")!= null){
		// if they have been filled out, then the user is relocated to the confirmation page
		location.href = "confirm.html";
	}else{
		// or else an alert will appear, instructing the user to fill out all sections
		alert("Please fill out all sections before checking out");
	}
	// updates the cart
	updateCart();
}

function updateCart(){
	// set up a variable for each price as if nothing is chosen yet
	var b_price = 0;
	var c_price = 0;
	var i_price = 0;
	var l_price = 0;
	
	
	
	// populate the body type part of the cart if their cookies were stored
	if(readCookie("body_type")!= null){
		document.getElementById("cart_body_type").innerHTML = readCookie("body_type");
		document.getElementById("cart_body_price").innerHTML = "$" + readCookie("body_price");
		document.getElementById("shoe_body").innerHTML = "<img src='" + readCookie("body_image") + readCookie("color_image") + "'>";
		// replace the zero in the price var so the body price will be used in the total below
		b_price = readCookie("body_price");
	};
	if(readCookie("color_type")!= null){
		document.getElementById("cart_color_type").innerHTML = readCookie("color_type");
		document.getElementById("cart_color_price").innerHTML = "$" + readCookie("color_price");
		
		c_price = readCookie("color_price");
	}
	if(readCookie("insole_type")!=null){
		document.getElementById("cart_insole_type").innerHTML = readCookie("insole_type");
		document.getElementById("cart_insole_price").innerHTML = "$" + readCookie("insole_price");
		document.getElementById("shoe_insole").innerHTML = "<img src=\""+readCookie("insole_image")+"\"/>";
		// replace the zero in the price var so the insole price will be used in the total below
		i_price = readCookie("insole_price");
	};
	// populate the lace type part of the cart if their cookies were stored
	if(readCookie("lace_type")!=null){
		document.getElementById("cart_lace_type").innerHTML = readCookie("lace_type");
		document.getElementById("cart_lace_price").innerHTML = "$" + readCookie("lace_price");
		document.getElementById("shoe_lace").innerHTML = "<img src=\""+readCookie("lace_image")+"\"/>";
		// replace the zero in the price var so the lace price will be used in the total below
		l_price = readCookie("lace_price");
	};

	// add the 4 price values together as numbers
	var total_num = parseFloat(b_price)+parseFloat(c_price)+parseFloat(i_price)+parseFloat(l_price);

	// update cart total
	document.getElementById("cart_total").innerHTML = "$" + total_num.toFixed(2);
}