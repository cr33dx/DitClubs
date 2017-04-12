window.onload = function(){
			document.getElementById("trans").onclick=function fun(){			
			$('.content').addClass('animated bounce');
			$("#trans2").fadeIn("slow","swing"); 
			$("#trans2").animate({top: '5%'}, "slow");            
			$(this).hide(); 			
									  }
}