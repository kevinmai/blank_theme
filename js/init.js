// Add Javascript functionality to this file

(function($,document,window){
	
	// Changing navigation to fixed position when it
	// moves off screen.
	$(window).scroll(function() {
		stickMenu();
    });
	
	var containerWidth = $("#content");
	var switch_info = document.querySelector("#switch-info > div");
	var banner_outer = document.querySelector("#banner-outer").clientHeight;
	
	function stickMenu(){
		var $nav = $("#contact-form"),
			nav = document.querySelector("#contact-form");
			wrapper = containerWidth.width(),
			scrollTop = $(document).scrollTop();
    
		if(scrollTop >= $("#banner-outer").offset().top + banner_outer){
			$nav.addClass("nav-fixed");
			switch_info.style.left = -270 + "px";
			nav.style.position = "fixed";
		} else{
			$nav.removeClass('nav-fixed');
			switch_info.style.left = 0 + "px";
			nav.style.position = "relative";
		}
    }
	
	(function(){
		// Variables for the mobile navigation
		var mobile_menu = {
			nav_button_mobile 	: document.querySelector("#nav-button-mobile"),
			off_canvas_menu 	: document.querySelector("#off-canvas-menu"),
			on 					: false,
			email_button 		: document.querySelector("#email-button-mobile"),
			contact_form_mobile : document.querySelector("#contact-form-mobile"),
			close_off_canvas	: document.querySelector("#close-off-canvas"),
			form_popup 			: false
		}
		
		// Handlers for the click event
		function mobile_menu_on(callback){
			mobile_menu.off_canvas_menu.style.left = 0 + "%";
			mobile_menu.on = true;
			if(callback){
				callback();
			}
		}
		
		function mobile_menu_off(callback){
			mobile_menu.off_canvas_menu.style.left = -100 + "%";
			mobile_menu.on = false;
			if(callback){
				callback();
			}
		}
		
		function form_popup_on(callback){
			mobile_menu.form_popup = true;
			mobile_menu.contact_form_mobile.style.opacity = 1;
			mobile_menu.contact_form_mobile.style.zIndex = 5;
			mobile_menu.contact_form_mobile.style.display = "block";
			if(callback){
				callback();
			}
		}
		function form_popup_off(callback){
			mobile_menu.form_popup = false;
			mobile_menu.contact_form_mobile.style.opacity = 0;
			mobile_menu.contact_form_mobile.style.zIndex = -1;
			mobile_menu.contact_form_mobile.style.display = "none";
			if(callback){
				callback();
			}
		}
		
		// Event listeners for the email button & menu button
		mobile_menu.nav_button_mobile.addEventListener("click",function(){
			if(mobile_menu.on == false){
				mobile_menu_on(form_popup_off);
			}else if(mobile_menu.on == true){
				mobile_menu_off(form_popup_off);
			}
		},false);
		
		mobile_menu.close_off_canvas.addEventListener("click",function(){
			if(mobile_menu.on == true){
				mobile_menu_off(form_popup_off);
			}
		},false);
		
		mobile_menu.email_button.addEventListener("click",function(){
			if(mobile_menu.form_popup == false){
				form_popup_on(mobile_menu_off);
			}else if(mobile_menu.form_popup == true){
				form_popup_off(mobile_menu_off);
			}
		},false);
		
		// Toggle sub-menu on mobile menu
		$(document).ready(function(){
			var mobile_arrow_1 = $(".mobile-arrow-1");
			$(mobile_arrow_1).click(function(){
				$(".sub-menu").hide();
				$(this).parent().find(".sub-menu").slideDown();
					
			});
		});
		
		/* Rotating Banners */
		$(document).ready(function($){
			var w,mHeight,tests = $("#sliding-main-wrapper");
			w = tests.outerWidth();
			mHeight = 0;
			tests.find(".marque").each(function(index){
				$("#banner_indicators").find(".indicator:eq(0)").addClass("active"); // Make the first pager active initially
				if(index == 0){
					$(this).addClass("active"); // Make the first slide active initially
				}
				
				if($(this).height() > mHeight){ // Just finding the max hieght of the slides
					mHeight = $(this).height();
				}
				
				var l = index * w; // Find the left position of each slide
				$(this).css("left",l);
				tests.find("#sliding_banner").height(mHeight);// Make the height of the slider equal to max height of the slides
			});
			
			$(".indicator").on("click",function(e){ // Clicking action for pagination
				e.preventDefault();
				next = $(this).index(".indicator");
				clearInterval(t_int);// Clicking stops the autoplay
				moveIt(next);
			});
			
			function moveIt(next){ // The main sliding function
				var c = parseInt($(".marque.active").removeClass("active").css("left")); // Current position
				var n = parseInt($(".marque").eq(next).addClass("active").css("left")); // New Position
				$(".marque").each(function(){ // shift each slide
					if(n > c){
						$(this).animate({"left" : "-=" + (n - c) + "px"});
					}else{
						$(this).animate({"left" : "+=" + Math.abs(n - c) + "px"});
					}
				});
				$(".indicator.active").removeClass("active");
				$("#banner_indicators").find(".indicator").eq(next).addClass("active");
			}
			
			var t_int = setInterval(function(){ // For autoplay
				var i = $(".marque.active").index(".marque");
				if(i == $(".marque").length - 1){
					next = 0;
				}else{
					next = i + 1;
				}
				
				moveIt(next);
			},6000);
		});
		
		/* Rotating testimonials */
		$(document).ready(function($){
			var w,mHeight,tests = $("#testimonials");
			w = tests.outerWidth();
			mHeight = 130;
			tests.find(".testimonial").each(function(index){
				$("#t_pagers").find(".pagers:eq(0)").addClass("active"); // Make the first pager active initially
				if(index == 0){
					$(this).addClass("active"); // Make the first slide active initially
				}
				
				if($(this).height() > mHeight){ // Just finding the max hieght of the slides
					mHeight = $(this).height();
				}
				
				var l = index * w; // Find the left position of each slide
				$(this).css("left",l);
				tests.find("#test_container").height(mHeight);// Make the height of the slider equal to max height of the slides
			});
			
			$(".pagers").on("click",function(e){ // Clicking action for pagination
				e.preventDefault();
				next = $(this).index(".pagers");
				clearInterval(t_int);// Clicking stops the autoplay
				moveIt(next);
			});
			
			function moveIt(next){ // The main sliding function
				var c = parseInt($(".testimonial.active").removeClass("active").css("left")); // Current position
				var n = parseInt($(".testimonial").eq(next).addClass("active").css("left")); // New Position
				$(".testimonial").each(function(){ // shift each slide
					if(n > c){
						$(this).animate({"left" : "-=" + (n - c) + "px"});
					}else{
						$(this).animate({"left" : "+=" + Math.abs(n - c) + "px"});
					}
				});
				$(".pagers.active").removeClass("active");
				$("#t_pagers").find(".pagers").eq(next).addClass("active");
			}
			
			var t_int = setInterval(function(){ // For autoplay
				var i = $(".testimonial.active").index(".testimonial");
				if(i == $(".testimonial").length - 1){
					next = 0;
				}else{
					next = i + 1;
				}
				
				moveIt(next);
			},3000);
		});
	})();
	
})(jQuery,document,window);

