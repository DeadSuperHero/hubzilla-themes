
$(document).ready(function() {

$('#expand-aside').click(function() {
	$('#expand-aside-icon').toggleClass('icon-circle-arrow-right').toggleClass('icon-circle-arrow-left');
	$('main').toggleClass('region_1-on');
});

if($('aside').length && $('aside').html().length == 0) {
	$('#expand-aside').hide();
}

$('#expand-tabs').click(function() {
	if(!$('#tabs-collapse-1').hasClass('in')){
		$('html, body').animate({ scrollTop: 0 }, 'slow');
	}
	$('#expand-tabs-icon').toggleClass('icon-circle-arrow-down').toggleClass('icon-circle-arrow-up');
});

if($('#tabs-collapse-1').length == 0) {
	$('#expand-tabs').hide();
}

});


$(document).ready(function(){
	var doctitle = document.title;
	function checkNotify() {
		var notifyUpdateElem = document.getElementById('notify-update');
		if(notifyUpdateElem !== null) {
	        if(notifyUpdateElem.innerHTML != "")
    		    document.title = "("+notifyUpdateElem.innerHTML+") " + doctitle;
	        else
    		    document.title = doctitle;
		}
	};
	setInterval(function () {checkNotify();}, 10 * 1000);
});

function makeFullScreen(full) {
	if(typeof full=='undefined' || full == true) {
		$('main').css({'transition': 'none'}).addClass('fullscreen');
		$('#fullscreen-btn, header, nav, aside').css({'display': 'none'});
		$('#inline-btn').show();

	}
	else {
		$('main').removeClass('fullscreen');
		$('#fullscreen-btn, header, nav, aside').css({'display': ''});
		$('#inline-btn').hide();
		$('main').css({'transition': ''});
	}
}
