var ab_keycode;
$(document).ready(function() {
	

	
	$(".fancyvideo").fancybox({padding:'0px', 'closeBtn':true});
/**/
	$(window).keydown(function(event){
		ab_keycode = event.keyCode;
	});
	
	showdest();

});

function showdest(){
	menupos = window.pageYOffset;
	header = parseInt($("header").height());
	//var hw = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
	if((menupos) >  (header / 3) ){
		$(".of_destitem").addClass("on");
	}
}
$(window).scroll(function(){
	showdest()
});	
//		DEFAULT FUNCTIONS
function abScrollTo(id, speed, margin){
	$('html, body').stop().animate({
	scrollTop: $("#"+id).offset().top -margin
	}, speed);
}

function abFormatphone(id){
	var res = $("#"+id).val();
	//console.log(ab_keycode);
	if( ( (ab_keycode >= 96 && ab_keycode <= 105) || (ab_keycode >= 48 && ab_keycode <= 57) || (ab_keycode >= 33 && ab_keycode <= 40) || ab_keycode == 144 || ab_keycode == 16 || ab_keycode == 20 || ab_keycode == 9 || ab_keycode == 18 || ab_keycode == 27 || (ab_keycode >= 112 && ab_keycode <= 123) || ab_keycode == 8 || ab_keycode == 46 ) && (res.length < 16)  ){
		if (res.length > 1){
			if(ab_keycode == 8 || ab_keycode == 46){
				$("#"+id).val(res);
				//console.log(res);
			}else{
				var res = res.replace("(", ""); 
				var res = res.replace(")", ""); 
				var res = res.replace(" ", ""); 
				var res = res.replace(/ /gi, ""); 
				var res = res.replace(/-/gi, ""); 
				var ddd = res.substring(0,2); 
				var num1 = res.substring(2,7); 
				if (res.length > 7){
					var num2 = " "+res.substr(7,20); 
				}else{
					var num2 = "";
				}
				$("#"+id).val("("+ddd+") "+num1+""+num2);
				//console.log("("+ddd+") "+num1);
			}
		}else{
			$("#"+id).val(res);
			//console.log(res);
		}
	}else{
		var res = res.substring(0,(res.length -1)); 
		$("#"+id).val(res);
	}
}

function abFormatData(id){
	var res = $("#"+id).val();
	if (res.length > 1){
		if(ab_keycode == 8 || ab_keycode == 46){
			$("#"+id).val(res);
			//console.log(res);
		}else{
			var res = res.replace("/", ""); 
			var res = res.replace("/", ""); 
			var res = res.replace("/", ""); 
			var res = res.replace("/", ""); 
			var res = res.replace("/", ""); 
			var res = res.replace("-", ""); 
			var res = res.replace("-", ""); 
			var res = res.replace("-", ""); 
			var res = res.replace("-", ""); 
			var res = res.replace("-", ""); 
			var res = res.replace(".", ""); 
			var res = res.replace(".", ""); 
			var res = res.replace(".", ""); 
			var res = res.replace(".", ""); 
			var res = res.replace(".", ""); 
			var res = res.replace(" ", ""); 
			var res = res.replace(" ", ""); 
			var res = res.replace(" ", ""); 
			var res = res.replace(" ", ""); 
			var res = res.replace(" ", ""); 
			var res = res.replace(/ /gi, ""); 
			var res = res.replace(/-/gi, ""); 
			var ddd = res.substring(0,2); 
			var num0 = res.substring(2,4); 
			var num1 = res.substring(4,8); 
			if (res.length > 4){
				var num2 = ddd+"/"+num0+"/"+num1; 
			}else if(res.length > 2){
				var num2 = ddd+"/"+num0; 
			}else{
				var num2 = ddd;
			}
			$("#"+id).val(num2);
			//console.log("("+ddd+") "+num1);
		}
	}else{
		$("#"+id).val(res);
		//console.log(res);
	}
}

function openbar(){
	if( $("#of_fixedbar").hasClass("on") ){
		$("#of_fixedbar").removeClass("on");
	}else{
		$("#of_fixedbar").addClass("on");
	}	
}
function insertform(id){
	val = $("#"+id).val();
	if(val != ''){
		$(".onfocus."+id).addClass('on');
	}else{
		$(".onfocus."+id).removeClass('on');
	}
}
function lostfocus(){
	$(".onfocus").removeClass('on');
}