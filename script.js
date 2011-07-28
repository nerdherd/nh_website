// JavaScript Document
$(document).ready(function(){
	if($(".content").height()<$(window).height()-199){
		$(".full").css("height",$(window).height()-22);
		$(".footer").css("visibility","visible");
	}else{		
		$(".full").css("height",$(".content").height()+149);
		$(".footer").css("visibility","visible");
	}
	$(document).mousemove(function(){
		if($(".content").height()<$(window).height()-199){
			$(".full").css("height",$(window).height()-22);
			$(".footer").css("visibility","visible");
		}else{		
			$(".full").css("height",$(".content").height()+149);
			$(".footer").css("visibility","visible");
		}
	});
	$("#legal").mouseenter(function(){
		$(".p_footer").animate({height:200,'marginTop':-180},350,function(){$(".full").mouseenter(function(){
			$(".p_footer").animate({height:20, 'marginTop':0},250,function(){$(".p_footer").stop(true);});		
			});
		});
	});
	var lspeed = 10000*.8;
	var rspeed = 5000*.8;
	$('.l_tile').animate({backgroundPosition: 100+'%'},lspeed,'linear');
	$('.l_tile').animate({backgroundPosition: 50+'%'},rspeed,'linear');

	$("li").click(function(){
		$("li").children("ul.sub").css({display:"none"});
		$(this).children("ul.sub").css({display:"block"});
	});	
	$(".toast").slideDown(500);
	$(".toast").css('zIndex', 500);
	$(".x").mousedown(function(){
		$(".toast").slideUp(500);
	});
});
