jQuery(function(){
	
	var isMobile = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/iPhone|iPad|iPod/i) || navigator.userAgent.match(/Opera Mini/i) || navigator.userAgent.match(/IEMobile/i) ? true : false;

	$(document).ready( function() {
		if(isMobile) {
			$('body').addClass('mobile');
		}
		
		$('.menu-mobile').on('touch click', function() {
			$('nav').toggleClass('active');
		});
		
		//Fix bug adaptative facebook
		var fbw = $('.fb-page').parent('div').width();
		fbw > 500 ? fbw=500 : fbw; fbw < 180 ? fbw=180 : fbw;
		$('.fb-page').attr('data-width', fbw).css('width', fbw);
				
		// ****** Animations *******
		if($("#owl-banner").length > 0) {
			//Fix height of div banner on load page
			$('#owl-banner').height($(this).find('.item img').height());
			
			$("#owl-banner").owlCarousel({
				autoplay: true,
				//autoplayHoverPause: true,
				dots: true,
				nav: false,
				loop: true,
				responsiveRefreshRate: 100,
				items: 1,
				onInitialized: function() {
					$('#owl-banner').css({'height':'','max-height':'','overflow':''});
					//Lazy img bg in slide
					$('.owl-item .lazy-bg').each(function() {
						$(this).css('background-image', 'url("'+$(this).attr('data-url')+'")').removeClass('lazy-bg');
					});
				}
			});
		}
		if($("#owl-comments").length > 0)
		$("#owl-comments").owlCarousel({
			autoplay: false,
			dots: true,
			nav: true,
			loop: false,
			navText: ['Ã¯Ââ€œ', 'Ã¯Ââ€'],
			margin: 20,
			responsiveRefreshRate: 100,
			responsive:{
				0:{	items: 1 },
				767:{ items: 2 },
				979:{ items: 3 }
			}
		});
		
		
	});
	
	
	
	function goTop(){
		//Animation button go top
		$('.go-top').on('click touch', function() {
			$('body,html').animate({scrollTop:0},600);
		});
	}
		
	$(window).load( function() {	
	
		goTop();
	
		//Ative animations
		if( window.innerWidth <= 700 || isMobile )
			$('.animate').removeClass('animate');
		else
			ativeAnimation();
	});
	
	$( window ).resize(function() {
		//Fix bug adaptative facebook
		fbw = $('.fb-page').parent('div').width();
		fbw > 500 ? fbw=500 : fbw; fbw < 180 ? fbw=180 : fbw;
		$('.fb-page,.fb-page span').attr('data-width', fbw).css('width', fbw);
		
		//Adjust height of div google maps
		$(".google-map").css("height", window.innerHeight-220);
	});
	
	if( window.innerWidth >= 700 || !isMobile ) {
		$(window).scroll( function() {
			if(window.innerWidth > 500){
				if($(window).scrollTop() > (window.innerHeight * 0.6) ) $('.buttom-top').addClass('active');
				else $('.buttom-top').removeClass('active');
			}
			
			//Ative animations
			ativeAnimation();
		});
	}
	
	function ativeAnimation () {
		//Ative animations
		var delay = 0;
		$('.animate').each( function() {
			var e = $(this);				
			if($(e).is('.top')) {
				if( ($(window).scrollTop() + $(window).height()*0.97) >= ($(e).offset().top + $(e).height()*0.50) ) {
					$(e).css('transition-delay',delay+'s').removeClass('animate');
					setTimeout( function() {
						$(e).css('transition-delay','0s').css('animation-delay','0s');
					}, delay+100);
					delay += 0.3;
				}
			}
			else {
				if( ($(window).scrollTop() + $(window).height()*0.97) >= $(e).offset().top ) {
					$(e).css('transition-delay',delay+'s').removeClass('animate');
					setTimeout( function() {
						$(e).css('transition-delay','0s').css('animation-delay','0s');
					}, delay+100);
					delay += 0.3;
				}
			}		
		});
	}

});


	
	
	