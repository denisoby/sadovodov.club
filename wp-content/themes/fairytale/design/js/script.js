/*
 * AIT WordPress Theme
 *
 * Copyright (c) 2012, Affinity Information Technology, s.r.o. (http://ait-themes.club)
 */
(function($) {

	$(function(){
		var isTouch = navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad|android)/);

		if(!isResponsive(497)){
			customizeMenu();

			rollUpMenu();

			fixAndroidDesktopMenu();
		}

		prettySociableInit();

		sliderPrepareFix();

		sliderAlternativeFix();

		iconMenu();

		widgetsSize();

		notificationClose();

		initMisc();

		hoverZoomInit();

		applyColorbox();

		applyFancyboxVideo();

		responsiveMenu();

		wpcfFix();
	});

	function wpcfFix(){
		$('span.wpcf7-form-control-wrap').hover(function(){
			$(this).children('span.wpcf7-not-valid-tip').fadeOut('fast');
		});
	}

	function isResponsive(width){
		result = false;
		if($(window).width() <= width){
			result = true;
		}
		return result;
	}

	function isUserAgent(type){
		return navigator.userAgent.toLowerCase().indexOf(type.toLowerCase()) > -1;
	}

	function responsiveMenu(){
		if(isResponsive(497)){
			$('.menubut').toggle(function(){
				$('.mainmenu').show();
			},function(){
				$('.mainmenu').hide();
			});
		}
	}

	function customizeMenu(){
		$(".mainmenu > ul > li").each(function(){
			if($(this).has('ul').length){
				$(this).addClass("parent");
			}
		});
	}

	function fixAndroidDesktopMenu(){
		if(isUserAgent('android')){
			$('.mainmenu li a').on('click', function(e){
				e.preventDefault();
				e.stopPropagation();

				if($(this).parent().hasClass('parent')){
					// open submenu normally
					if($(this).hasClass('clicked-once') == false){
						$('.mainmenu li a').removeClass('clicked-once');
						$('.mainmenu li').trigger('mouseout');

						$(this).parent().trigger('mouseover');
						$(this).addClass('clicked-once');
					} else {
						// clicked 2nd time
						window.location.href = $(this).attr('href');
					}
				} else {
					// single link .. navigate to link
					window.location.href = $(this).attr('href');
				}
				return false;
			});
		}
	}

	function rollUpMenu(){
		var time = parseInt($('#mainmenu-dropdown-duration').text());
		var easing = $('#mainmenu-dropdown-easing').text();

		$(".mainmenu ul li").hover(function(){
			var submenu = $(this).children('ul');
			var $submenuItems = submenu.children('li');
			var size = $(this).children('ul').children('li').size();

			var liHeight, marT, marB, paddT, paddB, borderT, borderB;

			$submenuItems.each(function(){
				var $sub = $('.sub-menu').children('li');

				if($sub.length){

					liHeight = parseInt($sub.height(), 10);

					marT = parseInt($sub.css('marginTop'), 10);
					marB = parseInt($sub.css('marginBottom'), 10);

					paddT = parseInt($sub.css('paddingTop'), 10);
					paddB = parseInt($sub.css('paddingBottom'), 10);

					borderT = parseInt($sub.css('border-top-width'), 10);
					borderB = parseInt($sub.css('border-bottom-width'), 10);

					outerH = parseInt($sub.outerHeight(), 10);
				}
			});

			if($submenuItems.length)
				var submenuHeight = ((liHeight*size)+(marT*size)+(marB*size)+(paddT*size)+(paddB*size)+(borderB*size));


			submenu.css("display","block");
			submenu.height("1px");

			submenu.stop('true','true').animate({
				height: submenuHeight
			}, time, easing);
		}, function(){
			$(this).children('ul').css("display","none");
			$(this).children('ul').css('height','1px');
		});

	}

	function prettySociableInit(){
		var homeUrl = $("body").data("themeurl");

		$.prettySociable({websites: {
			facebook : {
				'active': true,
				'encode':true, // If sharing is not working, try to turn to false
				'title': 'Facebook',
				'url': 'http://www.facebook.com/share.php?u=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/facebook.png',
				'sizes':{'width':70,'height':70}
			},
			twitter : {
				'active': true,
				'encode':true, // If sharing is not working, try to turn to false
				'title': 'Twitter',
				'url': 'http://twitter.com/home?status=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/twitter.png',
				'sizes':{'width':70,'height':70}
			},
			delicious : {
				'active': true,
				'encode':true, // If sharing is not working, try to turn to false
				'title': 'Delicious',
				'url': 'http://del.icio.us/post?url=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/delicious.png',
				'sizes':{'width':70,'height':70}
			},
			digg : {
				'active': true,
				'encode':true, // If sharing is not working, try to turn to false
				'title': 'Digg',
				'url': 'http://digg.com/submit?phase=2&url=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/digg.png',
				'sizes':{'width':70,'height':70}
			},
			linkedin : {
				'active': true,
				'encode':true, // If sharing is not working, try to turn to false
				'title': 'LinkedIn',
				'url': 'http://www.linkedin.com/shareArticle?mini=true&ro=true&url=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/linkedin.png',
				'sizes':{'width':70,'height':70}
			},
			reddit : {
				'active': true,
				'encode':true, // If sharing is not working, try to turn to false
				'title': 'Reddit',
				'url': 'http://reddit.com/submit?url=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/reddit.png',
				'sizes':{'width':70,'height':70}
			},
			stumbleupon : {
				'active': true,
				'encode':false, // If sharing is not working, try to turn to false
				'title': 'StumbleUpon',
				'url': 'http://stumbleupon.com/submit?url=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/stumbleupon.png',
				'sizes':{'width':70,'height':70}
			},
			tumblr : {
				'active': true,
				'encode':true, // If sharing is not working, try to turn to false
				'title': 'tumblr',
				'url': 'http://www.tumblr.com/share?v=3&u=',
				'icon': homeUrl+'/design/img/prettySociable/large_icons/tumblr.png',
				'sizes':{'width':70,'height':70}
			}
		}});
	}

	function sliderPrepareFix(){
		if(isResponsive(497)){
			$('.rev_slider_wrapper').addClass('reloadMe');
		}
	}

	function sliderAlternativeFix() {
		if(isResponsive(497)){
			if(typeof $('.slider-alternative').children('img').attr('src') != "undefined") {
				$('.slider-alternative').show();
			} else {
				addNewStyle('.rev_slider_wrapper {display:block !important;}')
				$('.slider-alternative').hide();
			}
		} else {
			addNewStyle('.rev_slider_wrapper {display:block !important;}')
			$('.slider-alternative').hide();

			if($('.rev_slider_wrapper').hasClass('reloadMe')){
				$('.rev_slider_wrapper').removeClass('reloadMe');
				location.reload();
			}
		}
	}

	function addNewStyle(newStyle) {
	    var styleElement = document.getElementById('styles_js');
	    if (!styleElement) {
	        styleElement = document.createElement('style');
	        styleElement.type = 'text/css';
	        styleElement.id = 'styles_js';
	        document.getElementsByTagName('head')[0].appendChild(styleElement);
	    }
	    styleElement.appendChild(document.createTextNode(newStyle));
	}

	function iconMenu() {
		$('#sti-menu').iconmenu();
		$('#sti-menu li').last().css('border-width','0');
	}

	function widgetsSize() {
		var i = 0;
		$('.footer-sidebar > div.box').each( function() {
			$('.footer-sidebar > div.box').eq(i).addClass('col-' + (i+1));
		i++;
		});
	}

	function applyColorbox(){
		// Apply fancybox on all images
		$("a[href$='gif']").colorbox({rel: 'group', maxHeight:"95%"});
		$("a[href$='jpg']").colorbox({rel: 'group', maxHeight:"95%"});
		$("a[href$='png']").colorbox({rel: 'group', maxHeight:"95%"});

		$(".csss").css('display','block');
	}

	function applyFancyboxVideo(){
		// AIT-Portfolio videos
		$(".ait-portfolio a.video-type").click(function() {

			var address = this.href
			if(address.indexOf("youtube") != -1){
				// Youtube Video
				$.fancybox({
					'padding'		: 0,
					'autoScale'		: false,
					'transitionIn'	: 'elastic',
					'transitionOut'	: 'elastic',
					'title'			: this.title,
					'width'			: 680,
					'height'		: 495,
					'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
					'type'			: 'swf',
					'swf'			: {
						'wmode'		: 'transparent',
						'allowfullscreen'	: 'true'
					}
				});
			} else if (address.indexOf("vimeo") != -1){
				// Vimeo Video
				// parse vimeo ID
				var regExp = /http:\/\/(www\.)?vimeo.com\/(\d+)($|\/)/;
				var match = this.href.match(regExp);

				if (match){
				    $.fancybox({
						'padding'		: 0,
						'autoScale'		: false,
						'transitionIn'	: 'elastic',
						'transitionOut'	: 'elastic',
						'title'			: this.title,
						'width'			: 680,
						'height'		: 495,
						'href'			: "http://player.vimeo.com/video/"+match[2]+"?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff",
						'type'			: 'iframe'
					});
				} else {
				    alert("not a vimeo url");
				}
			}
			return false;
		});

		// Images shortcode
		$("a.sc-image-link.video-type").click(function() {

			var address = this.href
			if(address.indexOf("youtube") != -1){
				// Youtube Video
				$.fancybox({
					'padding'		: 0,
					'autoScale'		: false,
					'transitionIn'	: 'elastic',
					'transitionOut'	: 'elastic',
					'title'			: this.title,
					'width'			: 680,
					'height'		: 495,
					'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
					'type'			: 'swf',
					'swf'			: {
						'wmode'		: 'transparent',
						'allowfullscreen'	: 'true'
					}
				});
			} else if (address.indexOf("vimeo") != -1){
				// Vimeo Video
				// parse vimeo ID
				var regExp = /http:\/\/(www\.)?vimeo.com\/(\d+)($|\/)/;
				var match = this.href.match(regExp);

				if (match){
				    $.fancybox({
						'padding'		: 0,
						'autoScale'		: false,
						'transitionIn'	: 'elastic',
						'transitionOut'	: 'elastic',
						'title'			: this.title,
						'width'			: 680,
						'height'		: 495,
						'href'			: "http://player.vimeo.com/video/"+match[2]+"?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff",
						'type'			: 'iframe'
					});
				} else {
				    alert("not a vimeo url");
				}
			}
			return false;
		});
	}

	function initMisc() {
	  	$('#container input, #container textarea').each(function(index) {
			var id = $(this).attr('id');
			var name = $(this).attr('name');
			try{
				if (name.length != 0) {
					$(this).attr('id', name);
				}
			}catch(e){

			}
		});

		$('#container label').inFieldLabels();

	  	$('.rule span').click(function() {
		  	$.scrollTo(0, 1000, {axis:'y'});
		  	return false;
	 	});
	}

	function notificationClose() {
		$('.sc-notification').children('a.close').click( function(event) {
			event.preventDefault();
			$(this).parent().fadeOut('slow');
		});
	}

	function hoverZoomInit(){
		$('#content .gallery-item a, #content .ait-portfolio a, #content a.sc-image-link').hoverZoom({overlayColor:'#333333', overlayOpacity: 0.8, zoom:0});
	}

}(jQuery));