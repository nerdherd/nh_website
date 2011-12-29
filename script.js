// JavaScript Document
$(document).ready(function(){
	$(".toast").slideDown(500);
	$(".toast").css('zIndex', 500);
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
	$('.l_tile').animate({backgroundPosition: 80+'%'},8000,'linear');
	$('.l_tile').animate({backgroundPosition: 30+'%'},4000,'linear');
	$("li").click(function(){
		$("li").children("ul.sub").css({display:"none"});
		$(this).children("ul.sub").css({display:"block"});
	});	
	$(".x").mousedown(function(){
		$(".x").css("display","none");
		$(".toast").slideUp(500);
	});
});
