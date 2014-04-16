/**
* 
* @author Sean Gracy
* @version 1.0
*/

window.onload = init;

function init(){
	document.getElementById("body_btn_1").onclick = function(event){
		shoeCanvasBtn(event);
	}
	document.getElementById("body_btn_2").onclick = function(event){
		shoeDressBtn(event);
	}
	document.getElementById("body_btn_3").onclick = function(event){
		shoeRunningBtn(event);
	}
	document.getElementById("body_btn_4").onclick = function(event){
		shoeTennisBtn(event);
	}

	document.getElementById("insole_btn_1").onclick = function(event){
		insolePaddingBtn(event);
	}
	document.getElementById("insole_btn_2").onclick = function(event){
		insoleGelBtn(event);
	}
	document.getElementById("insole_btn_3").onclick = function(event){
		insoleFoamBtn(event);
	}
	
	document.getElementById("lace_btn_1").onclick = function(event){
		laceBlackBtn(event);
	}
	document.getElementById("lace_btn_2").onclick = function(event){
		laceBlueBtn(event);
	}
	document.getElementById("lace_btn_3").onclick = function(event){
		laceGreenBtn(event);
	}
	document.getElementById("lace_btn_4").onclick = function(event){
		laceRedBtn(event);
	}
	document.getElementById("lace_btn_5").onclick = function(event){
		laceWhiteBtn(event);
	}
	document.getElementById("lace_btn_6").onclick = function(event){
		laceYellowBtn(event);
	}
	
	document.getElementById("detail_btn_1").onclick = function(event){
		colorBlackBtn(event);
	}
	document.getElementById("detail_btn_2").onclick = function(event){
		colorBlueBtn(event);
	}
	document.getElementById("detail_btn_3").onclick = function(event){
		colorGreenBtn(event);
	}
	document.getElementById("detail_btn_4").onclick = function(event){
		colorRedBtn(event);
	}
	document.getElementById("detail_btn_5").onclick = function(event){
		colorWhiteBtn(event);
	}
	document.getElementById("detail_btn_6").onclick = function(event){
		colorYellowBtn(event);
	}
	
	document.getElementById("checkoutbtn").onclick = function(event){
		checkout(event);
	}
	updateCart();
}