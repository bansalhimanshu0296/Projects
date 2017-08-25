
$Behavior.unity_theme = function() {
	var window_height = $(window).height(),
		is_mobile = $Core.is_mobile();

	if ($('#page_core_sample').length) {
		$('#block_listing').height(window_height - 40);
		$('#main_content, #column').show();
		parent.$('#frame_holder_cover').fadeOut();

		return;
	}

	$('#main_content').css('min-height', window_height + 10).show();

	if (is_mobile && !$('#mobile_menu').length) {
		$('body').prepend('<div id="mobile_menu"><ul><li><a href="#" class="m_menu"><span></span></a></li><li><a href="' + getParam('sJsHome') + '" class="m_logo no_ajax">' + getParam('sSiteName') + '</a></li><li><a href="#" class="m_column"><span></span></a></li></ul></div>');
		if ($('#column_content').length) {
			var total_length = 0;
			total_length += $('.js_block_group_1').html().length;
			total_length += $('.js_block_group_3').html().length;
			if (!total_length) {
				$('.m_column').hide();
			} else {
				$('.m_column').show();
			}
		}
	}

	var width_push = '300px';
	$('.m_menu').click(function() {
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');

			$('#mobile_menu').animate({
				left: '-=' + width_push + ''
			}, 'fast');

			$('#menu span.phrase').fadeOut();
			$('#menu').removeClass('built').animate({
				left: '-=' + width_push + ''
			}, 'fast', function() {

			});

			return false;
		}

		$(this).addClass('active');
		$('#mobile_menu').animate({
			left: '+=' + width_push + ''
		}, 'fast');
		$('#menu span.phrase').show();
		$('#menu').addClass('built').height((window_height - 40)).show().width('' + width_push + '').css('left', '-' + width_push + '').animate({
			left: '+=' + width_push + ''
		}, 'fast');

		return false;
	});

	$('.m_column').click(function() {
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
			$('#main_content .holder:first').show();
			$('#column').hide();

			return false;
		}

		$(this).addClass('active');
		$('#main_content .holder:first').hide();
		$('#column').show();

		return false;
	});

	if (!$('#end_of_column').length) {
		$('#copyright').after('<div id="end_of_column"></div>');
	}

	if (!$('#page_core_index_visitor').length && !is_mobile && !$('.design_block_mode').length) {
		$('#menu, #panel').css({
			height: window_height
		}).show();

		$('#menu').mouseenter(function() {
			if ($(this).hasClass('built')) {
				return;
			}
			$(this).addClass('built');
			$(this).animate({
				width: '+=180px'
			}, 'fast', function() {
				$(this).find('span.phrase').show();
			});
		});
	}

	$('#main_content, #menu .links li a').click(function() {
		if (is_mobile) {
			if ($('.m_menu').hasClass('active')) {
				$('.m_menu').removeClass('active');

				$('#mobile_menu').animate({
					left: '-=' + width_push + ''
				}, 'fast');

				$('#menu span.phrase').fadeOut();
				$('#menu').removeClass('built').animate({
					left: '-=' + width_push + ''
				}, 'fast', function() {

				});
			}

			return;
		}

		if ($('#menu').hasClass('built')) {
			if ($('#menu').width() < 225) {
				return;
			}

			$('#menu').find('span.phrase').hide();
			$('#menu').animate({
				width: '-=180px'
			}, 'fast', function() {
				$('#menu').removeClass('built');
			});
		}
	});

	if ($('.item_image_content').length) {
		$('.item_image_content').attr('style', '');
	}

	if ($('#js_video_view_content').length && !$('#video_view').length) {
		$('#breadcrumb_holder').remove();
		var video_object = $('#js_video_view_content').clone();

		$('#js_video_view_content').remove();

		$('body').prepend('<div id="video_view"></div>');
		video_object.prependTo('#video_view');
		video_object.show();
	}

	if ($('.moderation_holder').length && !$('.moderation_holder').hasClass('built')) {
		$('.moderation_holder').addClass('built').css({
			position: 'fixed',
			bottom: '0px',
			left: ($('.moderation_holder').offset().left - 10) + 'px',
			width: $('.moderation_holder').width()
		});
	}

	$Core.actionBar();

	if ($('.page_section_menu').length && $(window).width() < 1300) {
		$('.page_section_menu ul li a').each(function() {
			var this_content = $(this).html().split(' ');

			$(this).parent().attr('title', $(this).html());
			$(this).addClass('js_hover_title').html('<span class="sub_icon">' + this_content[0].substr(0, 1) + '</span>');
		});
		$Behavior.globalToolTip();
	}

	if ($('.page_section_menu').length && !is_mobile) {
		 var site_content = ($('#site_content').offset().left - 20);
		 $('.page_section_menu').css({
			 position: 'fixed',
			 height: window_height,
			 top: '0px',
			 left: '0px',
			 width: site_content + 'px'
		 });
	}

	if ($('.profile_panel').length && !$('.profile_panel').hasClass('built') && $(window).width() >= 1200) {
		$('#site_content').css('min-height', window_height + 10);
		var profile_panel = $('.profile_panel').offset();
		$('.profile_panel').addClass('built').css({
			position: 'fixed',
			top: profile_panel.top,
			left: profile_panel.left
		});
	}

	if ($('#breadcrumb_holder').length && !$('.is_pages_profile').length && !$('.is_user_profile').length && !is_mobile && !$('#page_core_index_member').length) {
		$('#breadcrumb_holder').css({
			position: 'fixed',
			left: $('#breadcrumb_holder').offset().left,
			top: '0px',
			width: $('#breadcrumb_holder').innerWidth(),
			'z-index': '1000'
		});

		$('#content').css({
			'padding-top': $('#breadcrumb_holder').innerHeight()
		});

		if ($('#section_menu').length) {
			$('#section_menu').css({
				position: 'fixed',
				top: ($('#section_menu').offset().top - $(window).scrollTop()),
				left: $('#section_menu').offset().left
			});
		}
		
		$('#breadcrumb_top').next().css('padding-top', $('#breadcrumb_content').height() * 0.65);
	}

	if ($('.header_bar_menu').length && !$('.is_pages_profile').length && !is_mobile) {
		var site_content = ($('#site_content').offset().left - 20);
		$('.header_bar_menu').css({
			position: 'fixed',
			height: window_height,
			top: '0px',
			left: '0px',
			width: site_content + 'px'
		});
	}

	if ($('.table_extra').length || $('#page_core_index_visitor').length || is_mobile) {

	} else {
		var content_offset = $('#content').offset(),
			column_padding = ($(window).width() - (content_offset.left + $('#content').width() + $('#column').width())) - ($('.is_guest').length ? 40 : 60),
			column_height = $('#column').height();

		$('#column').css({
			'padding-right': column_padding + 'px',
			// left: content_offset.left + $('#content').width() + 20,
			'min-height': window_height
		}).show();


		$('#content').css('min-height', (column_height < window_height ? window_height : column_height));
		if ($('#page_core_index_member').length) {
			$('#page_core_index_member .js_block_group_2').css('min-height', $('#content').innerHeight());
		}
		if ($('#page_pages_view').length) {
			$('#page_pages_view .js_block_group_2').css('min-height', $('#content').innerHeight());
		}

		if (!$('.is_user_profile').length
			&& !$('#js_video_view_content').length
			&& !$('#page_event_view').length
			&& !$('.is_pages_profile').length) {

			if (column_height < window_height) {
				$('#column').css('position', 'fixed');
			}
		}
	}
	
	// For the pages, fixes some issues with the theme
	if($('.profile_header_cover').length) {
		$('.profile_header').children(':nth-child(2)').height($('.profile_header').height());
	}
	else {
		$('.profile_header').height('195px');
		$('.profile_header').children(':first').height($('.profile_header').height());
	}
	
	if($('#mobile_menu').length) {
		$('.profile_header').height($('.profile_header').height()+30);
		$('.profile_header').children(':first').height($('.profile_header').height());
		$('.profile_header').children(':first').css('margin-top', 5);
	}
	
	if ($('#page_pages_view').length) {
		if($('.item_view_content').length) {
			$('.js_block_group_2').html($('.item_view_content').html());
			$('.item_view_content').remove();
		}	
	}
	
	if($('#guest_panel').length) {
		$('#js_video_view_content').css('margin-top', $('#guest_panel').height());
	}
	// END
	
	// Fix for the advanced filters when checking with mobile
	if(is_mobile && $('#js_user_browse_advanced').length) {
		if($(window).width() <= 700) {
			$('#js_user_browse_advanced').css('height', $(window).height() - ($(window).height()/3) + 35);
			$('#browse_custom_fields_popup_holder').css('height', $(window).height() - ($(window).height()/2.5) + 10 );	
			$('#browse_custom_fields_popup_holder div').removeClass('go_left');
		}
				
		$('#js_user_browse_advanced').css('width', $(window).width()-45);
		$('#js_user_browse_advanced').css('left', 16);
		$('#js_user_browse_advanced').css('top', '0');
		$('#js_user_browse_advanced').css('position', 'absolute');
		$('#js_user_browse_advanced').css('margin-left', -20);
		$('#js_user_browse_advanced').css('margin-top', 0);
		$('#js_user_browse_advanced').css('padding', 5);
		$('#js_user_browse_advanced .user_browse_content').css('padding', 10);
		
	}
	// END
	
	// Fix for the images in landscape orientation bigger than mobile device max width
	if(is_mobile && $('.activity_feed_content_image').length) {
		$.each($('.activity_feed_content_image a img'), function(iIndex, sObject) {
			if($(sObject).attr('width') > $(window).width()) {
				aspectRatio = $(sObject).attr('width') / $(sObject).attr('height');
				newSize = $(window).width() * 0.83;
				$(sObject).attr('width', newSize);
				$(sObject).attr('height', newSize/aspectRatio);
			}
		});
	}
	// END
	
	// Reposition
	if(is_mobile) {
		if($('.cover_photo_change').attr('data-resized') != 'true')
		{
			$('.cover_photo_change').attr('data-resized', 'true')
			$('.cover_photo_change .table_clear_button').css('padding-top', $('.cover_photo_change').height());
			$('.cover_photo_change').height($('.cover_photo_change').height()*2);
			$('.cover_photo_change').css('text-align', 'center');
		}
	}
	
	// Reposition profile
	if($('#js_photo_cover_position').length && $('.profile_panel_banner').length) {
		aspectRatio = $('#js_photo_cover_position').width() / $('#js_photo_cover_position').height();
		newSize = $('.profile_panel_banner').width();
		$('#js_photo_cover_position').width(newSize);
		$('#js_photo_cover_position').height(newSize/aspectRatio);
	}
	if($('.cover_photo_change').length && $('.profile_panel_banner').length) {
		$('.cover_photo_change').width($('.profile_panel_banner').width() * 0.97);
	}
	
	// Reposition pages	
	if($('#js_photo_cover_position').length && $('.profile_header_cover').length) {
		$('#js_photo_cover_position').css('width', $('.profile_header').width());
		// Menu scroller
		$('#pages_menu_left').css('top', $('.profile_header_cover').height()-5);
		$('#pages_menu_right').css('top', $('.profile_header_cover').height()-5);
		
		if(is_mobile) {
			$('.profile_header_cover').css('margin-top', $('#mobile_menu').height());
		}
	}
	
	if($('.cover_photo_change').length && $('.profile_header_cover').length) {
		$('.cover_photo_change').width($('.profile_header_cover').width() * 0.97);
		$('.cover_photo_change .table_clear_button').css('right', '3%');
	}
	// END REPOSITION

	if ($('#welcome').length && !$('#welcome').hasClass('built') && $(window).width() >= 1300) {
		$('#welcome').addClass('built').css({
			position: 'fixed',
			top: $('#welcome').offset().top,
			left: $('#welcome').offset().left,
			'z-index': '1000'
		})
	}

	if (!$('#js_video_view_content').length && !is_mobile) {
		var lastScrollTop = 0,
			set_to_fixed = 0;
		$(window).scroll(function() {
			var st = $(this).scrollTop();
			if (st > lastScrollTop){
				if ($Core.isInView($('#end_of_column')) && $('#column').css('position') == 'absolute') {
					$('#column').css({
						top: 'auto',
						bottom: '0px',
						position: 'fixed'
					});
					set_to_fixed = $(this).scrollTop();
				}

				if ($('.pages_main_menu').length) {
					if (st > ($('.profile_header').height() - $('.pages_main_menu').innerHeight())) {
						$('.pages_main_menu').css({
							position: 'fixed',
							top: '0px',
							height: $('.pages_main_menu').innerHeight(),
							'z-index': '900'
						});
					}
				}

			} else {
				if (st < set_to_fixed) {
					set_to_fixed = 0;
					$('#column').css({
						top: '0px',
						bottom: 'auto',
						position: 'absolute'
					});
				}

				if ($('.pages_main_menu').length && $('.pages_main_menu').css('position') == 'fixed') {
					if (st < ($('.profile_header').height() - $('.pages_main_menu').height())) {
						$('.pages_main_menu').css({
							position: 'absolute',
							top: 'auto'
						});
					}
				}
			}
			lastScrollTop = st;
		});
	}

	if ($('.profile_panel_banner').length && $('.profile_panel_banner').data('url')) {
		var image = new Image(),
			src = $('.profile_panel_banner').data('url');
		image.onload = function() {
			$('.profile_panel_banner').css('background-image', 'url(' + src + ')');
		};
		image.src = src;
	}

	if ($('.is_pages_profile .profile_header').length && $('.is_pages_profile .profile_header').data('url')) {
		var image = new Image(),
			src = $('.is_pages_profile .profile_header').data('url');
		image.onload = function() {
			$('.is_pages_profile .profile_header').css('background-image', 'url(' + src + ')');
		};
		image.src = src;
	}

	$('#column_content').css('min-height', ($(window).height() - $('footer').innerHeight() - 40));

	$('.activity_feed_form_share').mouseenter(function() {
		if ($(this).hasClass('active')) {
			return;
		}

		$(this).addClass('active');
		$('.activity_feed_form_attach li.share').addClass('active');
		$('.activity_feed_form_attach li:not(.share)').css('display', 'inline-block');
	});

	if ($(window).width() <= 1300 && $('.header_bar_search_holder .txt_input').length) {
		$('.header_bar_search_holder .txt_input').val('');
		$('.header_bar_search_holder').prepend('<span class="tmp_search_icon"></span>');
	}

	var is_bar_open = false;
	var current_width = $('div.header_bar_menu').width();
	$('.header_bar_search_holder .txt_input, .tmp_search_icon').click(function() {
		if (is_bar_open) {
			return false;
		}

		is_bar_open = true;
		$('.header_bar_menu').addClass('focus');
		$('.header_filter_holder').show();
		$('.header_bar_search_holder .txt_input').focus();

		if ($(window).width() <= 1300) {
			$('.tmp_search_icon').hide();
			$('.tmp_close_search').remove();
			$('.header_filter_holder').append('<a href="#" class="tmp_close_search">Close Search</a>');
			$('div.header_bar_menu').css('z-index', '1001').css('box-shadow', '0 0 50px 0 rgba(0, 0, 0, 0.4)').animate({
				width: '30%'
			}, 'fast', function() {

				is_bar_open = false;
				$('.tmp_close_search').click(function() {

					$('.header_bar_menu').removeClass('focus');
					$('div.header_bar_menu').css('box-shadow', 'none').animate({
						width: current_width + 'px'
					}, 'fast', function() {
						$('.tmp_search_icon').show();
					});
					$('.header_filter_holder').hide();
					$('.header_bar_holder').animate({
						width: '50px'
					}, 'fast');

					return false;
				});
			});
			$('.header_bar_holder').animate({
				width: '200px'
			}, 'fast');
		}

		return false;
	});

	$('.header_bar_search_holder .txt_input').blur(function() {
		if ($(window).width() <= 1300) {
			return false;
		}

		$('.header_bar_menu').removeClass('focus');
		is_bar_open = false;

		return false;
	});

	if ($('.profile_panel_banner h1').length && !is_mobile) {
		$('.profile_panel_banner h1').css({
			position: 'fixed',
			top: '0px',
			left: $('.profile_panel_banner h1').offset().left,
			width: $('.profile_panel_banner').width(),
			'z-index': '100'
		});
	}

	$Core.guest_panel_drop();

	if(is_mobile && $('.pages_main_menu').length) {
		// Vars for scrolling!
		var windowWidth = $(window).width();
		var maxRange = $('.pages_main_menu .holder').width() * -1;
		
		// Fix the menu size when mobile and make the menu scrollable
		$('.pages_main_menu').css('overflow', 'hidden');
		$('.pages_main_menu .holder').css('width', 900);
		
		// Fix the right arrow
		$('#pages_menu_right').css('left', windowWidth - 35)
		
		// note: all of the conditions are same
		// Current status
		var val = parseInt($('.pages_main_menu').css('margin-left'));
		// Is the menu moved?
		if( val >= 0 ) { 
			// No, or it is at the leftmost section
			// Then, show the right arrow only
			$('#pages_menu_right').show();
			$('#pages_menu_left').hide(); 
		}
		else if( val < 0 && val > maxRange) { 
			// Yes, but not is not at the leftmost or rightmost section
			// Then, show both arrows
			$('#pages_menu_right, #pages_menu_left').show(); 
		}
		else if( val <= maxRange) { 
			// It's at the rightmost section of the menu
			$('#pages_menu_left').show();
			$('#pages_menu_right').hide();
		}
		
		// Click on right button
		$('#pages_menu_right').click(function() {
			// move the menu to the right and wait 300 milisecs to animate
			$('.pages_main_menu .holder').animate({
				marginLeft: "-=" + (windowWidth-100) + "px" }, 300, function() {
					// Same conditions as above
					var val = parseInt($('.pages_main_menu .holder').css('margin-left'));
					if( val >= 0 ) { 
						$('#pages_menu_right').show();
						$('#pages_menu_left').hide(); 
					}
					else if( val < 0 && val > maxRange) { 
						$('#pages_menu_right, #pages_menu_left').show(); 
					}
					else if( val <= maxRange) { 
						$('#pages_menu_left').show();
						$('#pages_menu_right').hide();
					}
				}
			);
		});
		
		// Click on left button
		$('#pages_menu_left').click(function() {
			// move the menu to the left and wait 300 milisecs to animate
			$('.pages_main_menu .holder').animate({ 
				marginLeft: "+=" + (windowWidth-100) + "px" }, 300, function() {
					// Same conditions as above
					var val = parseInt($('.pages_main_menu .holder').css('margin-left'));
					if( val >= 0 ) { 
						$('#pages_menu_right').show();
						$('#pages_menu_left').hide(); 
					}
					else if( val < 0 && val > maxRange) { 
						$('#pages_menu_right, #pages_menu_left').show();
					}
					else if( val <= maxRange) { 
						$('#pages_menu_left').show();
						$('#pages_menu_right').hide();
					}
				}
			);
		});
	}
};
