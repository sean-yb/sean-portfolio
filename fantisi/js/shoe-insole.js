function insolePaddingBtn(event){
	event.preventDefault();
	
	createCookie("insole_type","Padding",0);
	createCookie("insole_price",0.00,0);
	createCookie("insole_image","img/insole-padding.png",0);
	
	updateCart();
};

function insoleGelBtn(event){
	event.preventDefault();
	
	createCookie("insole_type","Gel",0);
	createCookie("insole_price",1.99,0);
	createCookie("insole_image","img/insole-gel.png",0);
	
	updateCart();
};

function insoleFoamBtn(event){
	event.preventDefault();
	
	createCookie("insole_type","Foam",0);
	createCookie("insole_price",4.99,0);
	createCookie("insole_image","img/insole-memory-foam.png",0);
	
	updateCart();
};
