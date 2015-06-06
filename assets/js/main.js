$(document).ready(function() {
	
	//Prevent Clicking on .active & disabled links
	$('.active, a[href="#"], .disabled, disabled').click(function(e) {
		e.preventDefault();
	});

	//Date pickers
	$("input.date-picker").each(function(){
		if($(this).hasClass("multi-calendars")){
			$(this).datepicker({
				numberOfMonths: 2
				});
			} else {
				$(this).datepicker({
			});
		}								 
	});$.datepicker._gotoToday = function (id) {$(id).datepicker('setDate', new Date());};

	//Time pickers
	$("input.time-picker").timepicker();
		
	//Date and time pickers
	$("input.date-time-picker").datetimepicker();
	
	//Slider
	  $(".slider").slider();
	  $(".slider-handle").draggable();
		
	//Tabs
	$(function() {
		$( ".tabs" ).tabs();
	});
		
		//UI tabs base fix
		$.fn.__tabs = $.fn.tabs;$.fn.tabs = function (a, b, c, d, e, f) {
		var base = location.href.replace(/#.*$/, '');
		$('ul>li>a[href^="#"]', this).each(function () {
		    var href = $(this).attr('href');
		    $(this).attr('href', base + href);
		});$(this).__tabs(a, b, c, d, e, f);};
	 
	//Accordion
	$(".accordion").accordion({ header: ".accordion-head", collapsible: true, active: false, heightStyle: "content" });
	$(".button > ul").accordion({ header: ".submenu-toggle", collapsible: true, active: false, heightStyle: "content" });

	//Popups
	$('.popup-button').each(function() { 
		var popupId = $(this).attr("data-popup");
		$.data(this, 'dialog', $(popupId).dialog({
		modal: false,
	   open: function(){
			$(".dialog").addClass("dialog-opened");
			$('.popup-close').fadeIn();
			$('#falseModal').fadeIn();
			jQuery('#falseModal').bind('click',function(){
				jQuery('.popup').dialog('close');
	    });
		},
		close: function(){
			$(".dialog").removeClass("dialog-opened");
	    	$('#falseModal').fadeOut();
		}
	}));  
	}).click(function() {  
		$.data(this, 'dialog').dialog('open');  
	return false;  
	});
	$('.popup-close').each(function() {  
		$(this).on("click",function(){$(this).parents('.popup').dialog("close");});  
	});
	$(window).resize(function() {
		$(".popup").dialog("option", "position", {my: "center", at: "center", of: window});
		$('.widget-overlay').show().fadeOut(800);
	});
	$("body").append('<div id="falseModal" style="display:none;"></div>');
	
	//Masks
	$(":input").inputmask();

	//Fullscreen
	$(window).on("load resize", function() {
		var newHeight = $("html").height() + "px";
		$(".fullscreen").css("height", newHeight);
	});

	//Off-Canvas Menu
	var $page = $('#page, #secondHeader'), 
	$header = $('#header'), 
	$menuSwitch = $('#secondHeader').find('.menuSwitch');
	$menuSwitch.on('touchstart click', function(e) {
		e.preventDefault();
		$page.toggleClass("pageOpen");
		$header.toggleClass("headerOpen");
		$menuSwitch.toggleClass("menuSwitch-active");
	});
	$('#page').on('touchstart click', function() {
		$page.removeClass("pageOpen");
		$header.removeClass('headerOpen');
		$menuSwitch.removeClass("menuSwitch-active");
	});

	//Fade on load
	$('.fadeIn').delay(300).animate({"opacity":1},2000);
	
	//Fade on scroll
	$(document).on('scroll', function() {
		var divs = $('.fadeOut'), st = $(this).scrollTop();
		if (window.innerWidth <= 1024) {
			return;
		}
		divs.css({
			'opacity' : (1.1 - st / 400)
		});
	});

	//Scroll to the top of the page
	$(".scrollTop").click(function() {
		$("html,body").animate({
			scrollTop : 0
		}, 1000);
		return false;
	});

	//Smooth scroll to a div on click
	$('.scrollTo').click(function() {
		if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				if (window.innerWidth > 1024) {
					$('html,body').animate({
						scrollTop : target.offset().top - $("#header").height() + "px"
					}, 1000);
					return false;
				} else {
					$('html,body').animate({
						scrollTop : target.offset().top - $("#secondHeader").height() + "px"
					}, 600);
					return false;
				}
			}
		}
	});
	
	//Background parallax
	$(document).on('load scroll resize', function() {
		var velocity = 0.5, position = $(document).scrollTop();
		if (window.innerWidth < 1024) {
			$('.parallax').each(function() {
				$(this).css({
					'background-position' : '50% center',
					'background-attachment' : 'scroll'
				});
			});
		} else {
			$('.parallax').each(function() {
				var parallax = $(this), top = parallax.offset().top, parallaxTop = Math.round((top - position) * velocity);
				$(this).css({
					'background-position' : '50% ' + parallaxTop + 'px',
					'background-attachment' : 'fixed'
				});
			});
		}
	});

});