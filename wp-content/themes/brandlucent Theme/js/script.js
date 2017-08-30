
/////////////////////////////

 // Brnadlucent Custom JS //

/////////////////////////////



 // Menu //

$(document).ready(function(){
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');

		$('#masthead').toggleClass('appear');
		// $('#toggle-menu-menu').toggleClass('disappear');	

		$('#toggle-menu').toggleClass('fixed');
	});
});


// Rotating objects //

$(window).scroll(function() {
var theta = $(window).scrollTop() / 10 % Math.PI;
$('#leftgear').css({ transform: 'rotate(' + theta + 'rad)' });
$('#rightgear').css({ transform: 'rotate(-' + theta + 'rad)' });
});


 // slider //

$(document).ready(function(){
	$('#slide-title1').click(function(){
		$('#slide-display1').addClass('show');
		$('#slide-display2').removeClass('show');
		$('#slide-display3').removeClass('show');
	});

	$('#slide-title2').click(function(){
		$('#slide-display2').addClass('show');
		$('#slide-display1').removeClass('show');
		$('#slide-display3').removeClass('show');

	});

	$('#slide-title3').click(function(){
		$('#slide-display3').addClass('show');
		$('#slide-display1').removeClass('show');
		$('#slide-display2').removeClass('show');
	});
});

