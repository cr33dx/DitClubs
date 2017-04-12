$(document).ready(function(){
	/* scrollspy */
	$('body').scrollspy({
		target: '.sidenav'
	});

	/* smooth scroll with nicescroll in sidenav */
	$('.sidenav').niceScroll({
		cursorcolor: '#333',
		cursorwidth: '4',
		cursorborder: '1px solid #333',
		cursoropacitymax: 0,               
		spacebarenabled: false,       
		scrollspeed: 150,
		autohidemode: true,
		horizrailenabled: false,
		cursorborderradius: 4,
		zindex: 1060
	});

	/* animation of page scrolling */
	$('.sidenav .navbar-nav li:not(.dropdown) a, .scroll-down, .btn-totop').on('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
		    scrollTop: $($anchor.attr('href')).offset().top
		}, 1500, 'easeInOutExpo');
		event.preventDefault();
	});

	$(".sidenav").getNiceScroll().resize();

	/* masonry layout */
	var $container = $('.container-masonry');
	// initialize
	$container.masonry();

	/* popup image with magnific popup */
	$('.image-popup').magnificPopup({
		removalDelay: 300,
		mainClass: 'mfp-with-zoom',
		type: 'image',
		image: { titleSrc: 'title' },
		zoom: {
		    enabled: true, 
		    duration: 300, 
		    easing: 'ease-in-out',
		    opener: function(openerElement) {
		      return openerElement.is('img') ? openerElement : openerElement.find('img');
		    }
		}
	});
	

	/* button scroll top */
	var $scroll = $(window).scrollTop();
	if($(window).scrollTop() > 300){
		$('.btn-totop').removeClass('btn-totop-hide');
	}else{
		$('.btn-totop').addClass('btn-totop-hide');
	}

	$(window).scroll(function(){
		if($(window).scrollTop() > 300){
		console.log('hae');
		  $('.btn-totop').removeClass('btn-totop-hide');
		}else{
		  $('.btn-totop').addClass('btn-totop-hide');
		}
	});


})