
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

$.global = new Object();

$.global.item = 1;
$.global.total = 0;

$(document).ready(function() 
	{
	
	var WindowWidth = $(window).width();
	var SlideCount = $('#slides li').length;
	var SlidesWidth = SlideCount * WindowWidth;
	
   $.global.item = 0;
    $.global.total = SlideCount; 
    
	$('.slide').css('width',WindowWidth+'px');
	$('#slides').css('width',SlidesWidth+'px');

   $("#slides li:nth-child(1)").addClass('alive');
    
  $('#left').click(function() { Slide('back'); }); 
  $('#right').click(function() { Slide('forward'); }); 
        
  });

function Slide(direction)
	{
   
    if (direction == 'back') { var $target = $.global.item - 1; }
    if (direction == 'forward') { var $target = $.global.item + 1; }  
    
    if ($target == -1) { DoIt($.global.total-1); } 
    else if ($target == $.global.total) { DoIt(0); }  
    else { DoIt($target); }
    
    
	}

function DoIt(target)
  {
   
    var $windowwidth = $(window).width();
	var $margin = $windowwidth * target; 
    var $actualtarget = target+1;
    
    $("#slides li:nth-child("+$actualtarget+")").addClass('alive');
    
    $('#slides').css('transform','translate3d(-'+$margin+'px,0px,0px)');	
    
    $.global.item = target; 
    
  $('#count').html($.global.item+1);
    
  }
