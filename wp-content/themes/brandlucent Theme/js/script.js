
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

// ------   Work page -----------

// Background change

$(window).scroll(function() {
  
  // selectors
  var $window = $(window),
      $body = $('body'),
      $panel = $('.panel');
  
  // Change 33% earlier than scroll position so colour is there when you arrive.
  var scroll = $window.scrollTop() + ($window.height() / 3);
 
  $panel.each(function () {
    var $this = $(this);
    
    // if position is within range of this panel.
    // So position of (position of top of div <= scroll position) && (position of bottom of div > scroll position).
    // Remember we set the scroll to 33% earlier in scroll var.
    if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {
          
      // Remove all classes on body with color-
      $body.removeClass(function (index, css) {
        return (css.match (/(^|\s)color-\S+/g) || []).join(' ');
      });
       
      // Add class of currently active div
      $body.addClass('color-' + $(this).data('color'));
    }
  });    
  
}).scroll();



// Slider

jQuery(document).ready(function ($) {


    setInterval(function () {
        moveRight();
    }, 3000);
  
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('div.control_prev').click(function () {
        moveLeft();
    });

    $('div.control_next').click(function () {
        moveRight();
    });

});    
