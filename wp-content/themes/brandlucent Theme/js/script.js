
/////////////////////////////

 // Brnadlucent Custom JS //

/////////////////////////////


$(document).ready(function(){
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');

		$('#masthead').toggleClass('appear');
		$('#toggle-menu-menu').toggleClass('disappear');
		$('#toggle-menu-close').toggleClass('appear');
		
	});
});