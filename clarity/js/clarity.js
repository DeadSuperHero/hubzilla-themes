/**
 * Clarity theme specific JavaScript
 */
 var notifications_parent;
 $(document).ready(function() {

 	// CSS3 calc() fallback (for unsupported browsers)
 	$('body').append('<div id="css3-calc" style="width: 10px; width: calc(10px + 10px); display: none;"></div>');
 	if( $('#css3-calc').width() == 10) {
 		$(window).resize(function() {
 			if($(window).width() < 767) {
 				$('main').css('width', $(window).width() + $('aside').outerWidth() );
 			} else {
 				$('main').css('width', '100%' );
 			}
 		});
 	}
 	$('#css3-calc').remove(); // Remove the test element

 	if($(window).width() >= 767) {
 		$('#left_aside_wrapper').stick_in_parent({
 			offset_top: parseInt($('aside').css('padding-top')),
 			parent: 'main',
 			spacer: '#left_aside_spacer'
 		});
 	}

 	if($(window).width() >= 1200) {
 		$('#right_aside_wrapper').stick_in_parent({
 			offset_top: parseInt($('aside').css('padding-top')),
 			parent: 'main',
 			spacer: '#right_aside_spacer'
 		});
 	}


 	$('#notifications_wrapper.fs #notifications').stick_in_parent({
 		parent: '#notifications_wrapper'
 	});

 	$('#expand-aside').on('click', toggleAside);

 	$('section').on('click', function() {
 		if($('main').hasClass('region_1-on')){
 			toggleAside();
 		}
 	});

 	var left_aside_height = $('#left_aside_wrapper').height();

 	$('#left_aside_wrapper').on('click', function() {
 		if(left_aside_height != $('#left_aside_wrapper').height()) {
 			$(document.body).trigger("sticky_kit:recalc");
 			left_aside_height = $('#left_aside_wrapper').height();
 		}
 	});


 	var right_aside_height = $('#rightt_aside_wrapper').height();

 	$('#right_aside_wrapper').on('click', function() {
 		if(right_aside_height != $('#right_aside_wrapper').height()) {
 			$(document.body).trigger("sticky_kit:recalc");
 			right_aside_height = $('#right_aside_wrapper').height();
 		}
 	});

 	$('.usermenu').click(function() {
 		if($('#navbar-collapse-1, #navbar-collapse-2').hasClass('show')){
 			$('#navbar-collapse-1, #navbar-collapse-2').removeClass('show');
 		}
 	});

 	$('#menu-btn').click(function() {
 		if($('#navbar-collapse-1').hasClass('show')){
 			$('#navbar-collapse-1').removeClass('show');
 		}
 	});

 	$('#notifications-btn').click(function() {
 		if($('#navbar-collapse-2').hasClass('show')){
 			$('#navbar-collapse-2').removeClass('show');
 		}
 	});

 	notifications_parent = $('#notifications_wrapper')[0].parentElement.id;
 	$('#notifications-btn').click(function() {
 		if($('#notifications_wrapper').hasClass('fs'))
 			$('#notifications_wrapper').prependTo('#' + notifications_parent);
 		else
 			$('#notifications_wrapper').prependTo('section');

 		$('#notifications_wrapper').toggleClass('fs');
 		if($('#navbar-collapse-2').hasClass('show')){
 			$('#navbar-collapse-2').removeClass('show');
 		}
 	});

 	$("input[data-role=cat-tagsinput]").tagsinput({
 		tagClass: 'badge badge-pill badge-warning text-dark'
 	});

 	var doctitle = document.title;
 	function checkNotify() {
 		var notifyUpdateElem = document.getElementById('notify-update');
 		if(notifyUpdateElem !== null) {
 			if(notifyUpdateElem.innerHTML !== "")
 				document.title = "(" + notifyUpdateElem.innerHTML + ") " + doctitle;
 			else
 				document.title = doctitle;
 		}
 	}
 	setInterval(function () {checkNotify();}, 10 * 1000);
 });

 function makeFullScreen(full) {
 	if(typeof full=='undefined' || full == true) {
 		$('main').addClass('fullscreen');
 		$('header, nav, aside, #fullscreen-btn').attr('style','display:none !important');
 		$('#inline-btn').show();
 	}
 	else {
 		$('main').removeClass('fullscreen');
 		$('header, nav, aside, #fullscreen-btn').show();
 		$('#inline-btn').hide();
 		$(document.body).trigger("sticky_kit:recalc");
 	}
 }

 function toggleAside() {
 	$('#expand-aside-icon').toggleClass('fa-arrow-circle-right').toggleClass('fa-arrow-circle-left');
 	if($('main').hasClass('region_1-on')){
 		$('html, body').css('overflow-x', '');
 		$('main').removeClass('region_1-on')
 		$('#overlay').remove();
 		$('#left_aside_wrapper').trigger("sticky_kit:detach");
 	}
 	else {
 		$('html, body').css('overflow-x', 'hidden');
 		$('main').addClass('region_1-on')
 		$('<div id="overlay"></div>').appendTo('section');
 		$('#left_aside_wrapper').stick_in_parent({
 			offset_top: $('nav').outerHeight(true) + 10,
 			parent: '#region_1',
 			spacer: '#left_aside_spacer'
 		});
 	}
 }
