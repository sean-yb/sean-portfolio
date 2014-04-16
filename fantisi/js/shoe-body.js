function shoeCanvasBtn(event){
	event.preventDefault();
	
	createCookie("body_type","Canvas",0);
	createCookie("body_price",29.99,0);
	createCookie("body_image","img/shoe-canvas-",0);
	if(readCookie("color_type")==null){
		createCookie("color_type","White",0);
		createCookie("color_price",0,0);
		createCookie("color_image","white.png",0);
	}
	
	updateCart();
};

function shoeDressBtn(event){
	event.preventDefault();
	
	createCookie("body_type","Dress",0);
	createCookie("body_price",69.99,0);
	createCookie("body_image","img/shoe-dress-",0);
	if(readCookie("color_type")==null){
		createCookie("color_type","White",0);
		createCookie("color_price",0,0);
		createCookie("color_image","white.png",0);
	}
	updateCart();
};

function shoeRunningBtn(event){
	event.preventDefault();
	
	createCookie("body_type","Running",0);
	createCookie("body_price",59.99,0);
	createCookie("body_image","img/shoe-running-",0);
	if(readCookie("color_type")==null){
		createCookie("color_type","White",0);
		createCookie("color_price",0,0);
		createCookie("color_image","white.png",0);
	}
	
	updateCart();
};

function shoeTennisBtn(event){
	event.preventDefault();
	
	createCookie("body_type","Tennis",0);
	createCookie("body_price",39.99,0);
	createCookie("body_image","img/shoe-tennis-",0);
	if(readCookie("color_type")==null){
		createCookie("color_type","White",0);
		createCookie("color_price",0,0);
		createCookie("color_image","white.png",0);
	}
	
	updateCart();
};