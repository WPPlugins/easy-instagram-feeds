$(document).ready(function(){
	
	'user strict';
	
	// Header Sticky

	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		if (scroll >= 0) {
		$(".topbar3").addClass("sticky");
		$(".topbar3").addClass("sticky-scroll");
		} else {
		$(".topbar3").removeClass("sticky");
		$(".topbar3").removeClass("sticky-scroll");
		}


		
		
	});
	
	// Menu
	
	$('.nav-toggle').on('click', function(){
		if($('.menu').hasClass('menu-active')){
			$('.menu').removeClass('menu-active');
			$('.nav-toggle').removeClass('nav-active');
			$('.menu').slideUp();
		}else{
			$('.menu').addClass('menu-active');
			$('.nav-toggle').addClass('nav-active');
			$('.menu').slideDown();
		}
		
		
	});
	
	// Popup Video
	
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
	  disableOn: 700,
	  type: 'iframe',
	  mainClass: 'mfp-fade',
	  removalDelay: 160,
	  preloader: false,

	  fixedContentPos: false
	});
	
	/*$('.testimonial-slider2').slick({
			slidesToShow: 2,
			slidesToScroll: 1,	  
			dots: false,
			arrows: false,
			focusOnSelect: false,
			autoplay: true,
			autoplaySpeed: 2000,
			responsive: [
				{
					breakpoint: 980,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		
	});*/

	/*$("#owl-testimonial").owlCarousel({
		loop:true,
		margin:10,
		responsiveClass:true,
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
		autoplay:true,
		items: 2,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:4,
				nav:true,
				loop:false
			}
		}

	});

*/
	$('#owl-testimonial').owlCarousel({
		items:2,
		nav:true,
		dots:false,
		autoPlay: true, //Set AutoPlay to 3 seconds
		responsive: {
			200: {
				items: 1,
				navigation: true,
				nav: true,
				slideBy:1 // <!-- HERE
			},
			300: {
				items: 1,
				navigation: true,
				nav: true,
				slideBy:1 // <!-- HERE
			},
			767: {
				items: 1,
				navigation: true,
				nav: true,
				slideBy: 1 // <!-- HERE
			},
			1199: {
				items: 2,
				navigation: true,
				nav: true,
				slideBy: 1 // <!-- HERE
			}

		}
	})


	$('#owl-example1').owlCarousel({
		items:3,
		nav:true,
		dots:false,
		autoPlay: true, //Set AutoPlay to 3 seconds
		responsive: {
			200: {
				items: 1,
				navigation: true,
				nav: true,
				slideBy:1 // <!-- HERE
			},
			300: {
				items: 1,
				navigation: true,
				nav: true,
				slideBy:1 // <!-- HERE
			},
			767: {
				items: 2,
				navigation: true,
				nav: true,
				slideBy: 1 // <!-- HERE
			},
			1199: {
				items: 3,
				navigation: true,
				nav: true,
				slideBy: 1 // <!-- HERE
			}

		}
	});
	$('#owl-example2').owlCarousel({
		items:3,
		nav:true,
		navText: [
			"<i class='fa fa-angle-left'></i>",
			"<i class='fa fa-angle-right'></i>"
		],
		dots:false,
		autoPlay: true, //Set AutoPlay to 3 seconds
		responsive: {
			200: {
				items: 1,
				navigation: true,
				nav: true,
				slideBy:1 // <!-- HERE
			},
			300: {
				items: 1,
				navigation: true,
				nav: true,
				slideBy:1 // <!-- HERE
			},
			767: {
				items: 2,
				navigation: true,
				nav: true,
				slideBy: 1 // <!-- HERE
			},
			1199: {
				items: 3,
				navigation: true,
				nav: true,
				slideBy: 1 // <!-- HERE
			}

		}
	});
	$('#owl-example3').owlCarousel({
		items:3,
		nav:true,
		navText: [
			"<i class='fa fa-angle-left'></i>",
			"<i class='fa fa-angle-right'></i>"
		],
		dots:false,
		autoPlay: true, //Set AutoPlay to 3 seconds
		responsive: {
			200: {
				items: 1,
				navigation: true,
				nav: true,
				slideBy:1 // <!-- HERE
			},
			300: {
				items: 1,
				navigation: true,
				nav: true,
				slideBy:1 // <!-- HERE
			},
			767: {
				items: 2,
				navigation: true,
				nav: true,
				slideBy: 1 // <!-- HERE
			},
			1199: {
				items: 3,
				navigation: true,
				nav: true,
				slideBy: 1 // <!-- HERE
			}

		}
	});
	$('#owl-example4').owlCarousel({
		items:3,
		nav:true,
		navText: [
			"<i class='fa fa-angle-left'></i>",
			"<i class='fa fa-angle-right'></i>"
		],
		dots:false,
		autoPlay: true, //Set AutoPlay to 3 seconds
		responsive: {
			200: {
				items: 1,
				navigation: true,
				nav: true,
				slideBy:1 // <!-- HERE
			},
			300: {
				items: 1,
				navigation: true,
				nav: true,
				slideBy:1 // <!-- HERE
			},
			767: {
				items: 2,
				navigation: true,
				nav: true,
				slideBy: 1 // <!-- HERE
			},
			1199: {
				items: 3,
				navigation: true,
				nav: true,
				slideBy: 1 // <!-- HERE
			}

		}
	});


	$(".owl-portfolio").owlCarousel({

		items:3,
		nav:true,
		dots:false,
		autoPlay: true


	})

	$(".owl-partner").owlCarousel({

		items:5,
		margin:10,
		nav:true,
		dots:false,
		autoPlay: true,
		responsive: {
			300: {
				items: 1,
				navigation: true,
				nav: true,
				slideBy:1 // <!-- HERE
			},
			320: {
				items: 2,
				navigation: true,
				nav: true,
				slideBy:1 // <!-- HERE
			},
			767: {
				items: 3,
				navigation: true,
				nav: true,
				slideBy: 1 // <!-- HERE
			},
			1199: {
				items: 5,
				navigation: true,
				nav: true,
				slideBy: 1 // <!-- HERE
			}

		}


	})


	/*$('.portfolio-slider').slick({
			slidesToShow: 3,
			slidesToScroll: 1,	  
			dots: false,
			arrows: true,
			focusOnSelect: false,
			autoplay: true,
			autoplaySpeed: 2000,
			speed: 500,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
	});*/
	
	
	// Button Effect
	
	var ink, d, x, y;
	$(".btn-effect-1").on('click' , function(e){
		if($(this).find(".ink").length === 0){
			$(this).prepend("<span class='ink'></span>");
		}
			 
		ink = $(this).find(".ink");
		ink.removeClass("animate");
		 
		if(!ink.height() && !ink.width()){
			d = Math.max($(this).outerWidth(), $(this).outerHeight());
			ink.css({height: d, width: d});
		}
		 
		x = e.pageX - $(this).offset().left - ink.width()/2;
		y = e.pageY - $(this).offset().top - ink.height()/2;
		 
		ink.css({top: y+'px', left: x+'px'}).addClass("animate");
	});
	
	
	// #Anchor Handle
	
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});


	
});
