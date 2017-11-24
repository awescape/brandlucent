
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



// About page door




// Videos/

var vid = document.getElementById("portfolio-video");

// function getPlaySpeed() { 
//     alert(vid.playbackRate);
// } 

function setPlaySpeed() { 
    vid.playbackRate = 0.7;
} 


// Appear on scroll
$(document).ready(function() {



    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        // $('.hideme').each( function(i){

        $('.hideme').each( function(i) {      
           
            // var top_of_object = $(this).offset().top + $(this).outerHeight();
            // var bottom_of_window = $(window).scrollTop() + $(window).height();

            var top_of_object = $(this).offset().top;
            var bottom_of_window = $(window).scrollTop() + $(window).height() - $(window).height()/3;           

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > top_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                $(this).addClass('animated fadeInUp');        
            }
            
        }); 



        $('.movedown').each( function(i) {      
            // var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var top_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();       

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > top_of_object ){
                
                // $(this).animate({'opacity':'1'},500);
                $(this).addClass('slideInDown');        
            }
   
        });

        // Banner image movement

        // $('#banner_fg_image').each( function(i) {      
        //   var top_of_object = $(this).offset().top + $(this).outerHeight();
        //   var bottom_of_window = $(window).scrollTop() + $(window).height();  

        //   function parallax(){
        //     var banner_image = document.getElementById('banner_fg_image');
        //     banner_image.style.top = (bottom_of_window - top_of_object) +'px';
        //   }

        //   window.addEventListener("scroll", parallax, false);    
        // }); 


        
        // $('#banner_fg_image').each( function(i) {      
        //   var top_of_object = $(this).offset().top + $(this).outerHeight();
        //   var bottom_of_window = $(window).scrollTop() + $(window).height();  

        //   function parallax(){
        //     var banner_image = document.getElementById('banner_fg_image');
        //     banner_image.style.top = (bottom_of_window - top_of_object) +'px';
        //   }

        //   window.addEventListener("scroll", parallax, false);    
        // }); 

        // Content block image movement

        $('#content_block_image').each( function(i) {      
          var top_of_object = $(this).offset().top + $(this).outerHeight();
          var bottom_of_window = $(window).scrollTop() + $(window).height();  

          function parallax(){
            var content_image = document.getElementById('content_block_image');
            content_image.style.top = -60 + (window.pageYOffset / 30)+'vh';

          }

          window.addEventListener("scroll", parallax, false);


          if( bottom_of_window > top_of_object ){
              $('#content-block').addClass('overflow');        
          }
          else{
              $('#content-block').removeClass('overflow');        
          }    
        });    
    });






// Team popup //

$(document).ready(function(){

    // member 1
    $('#member-1').click(function(){
      $('#team-page-cover').toggleClass('opacity-on');
      $('#team-popup-1').toggleClass('open');
      $('#mobile-1-pic').toggleClass('team-mobile-pic');
      $('#mobile-1-clicked').toggleClass('team-mobile-pic');
      $('#down-arrow-1').toggleClass('clicked');
    });

    $('#close-1').click(function(){
      $('#team-popup-1').removeClass('open')
      $('#team-page-cover').removeClass('opacity-on');
    });

  // member 2
  $('#member-2').click(function(){
    $('#team-page-cover').toggleClass('opacity-on');
    $('#team-popup-2').toggleClass('open');
    $('#mobile-2-pic').toggleClass('team-mobile-pic');
    $('#mobile-2-clicked').toggleClass('team-mobile-pic');
  });

  $('#close-2').click(function(){
    $('#team-popup-2').removeClass('open')
    $('#team-page-cover').removeClass('opacity-on');
  });

  // member 3
  $('#member-3').click(function(){
    $('#team-page-cover').toggleClass('opacity-on');
    $('#team-popup-3').toggleClass('open');
    $('#mobile-3-pic').toggleClass('team-mobile-pic');
    $('#mobile-3-clicked').toggleClass('team-mobile-pic');
  });

  $('#close-3').click(function(){
    $('#team-popup-3').removeClass('open')
    $('#team-page-cover').removeClass('opacity-on');
  });

});


// Project Inquiry popup //

$(document).ready(function(){
  $('#form-button-1').click(function(){
    $('#form-page-1').addClass('hidden');
    $('#form-page-2').addClass('show');
    $('#back-button-1').removeClass('hidden');
    $('#form-close-1').addClass('hidden');
  });
});


$(document).ready(function(){
  $('#back-button-1').click(function(){
    $('#form-page-1').removeClass('hidden');
    $('#form-page-2').removeClass('show');
    $('#back-button-1').addClass('hidden');
    $('#form-close-1').removeClass('hidden');
  });
});

$(document).ready(function(){
  $('#project-inquiry-launch').click(function(){
    $('#project-inquiry').addClass('show');
  });
  $('#form-close').click(function(){
    $('#project-inquiry').removeClass('show')
  });
});


// Rotating objects //

// $(window).scroll(function() {
// var theta = $(window).scrollTop() / 10 % Math.PI;
// $('#leftgear').css({ transform: 'rotate(' + theta + 'rad)' });
// $('#rightgear').css({ transform: 'rotate(-' + theta + 'rad)' });
// });


 // slider //

$(document).ready(function(){
	$('#slide-title1').click(function(){
		$('#slide-display1').addClass('show');
		$('#slide-display2').removeClass('show');
		$('#slide-display3').removeClass('show');
    $('#slide-title1').addClass('clicked');
    $('#slide-title2').removeClass('clicked');
    $('#slide-title3').removeClass('clicked')
	});

	$('#slide-title2').click(function(){
		$('#slide-display2').addClass('show');
		$('#slide-display1').removeClass('show');
		$('#slide-display3').removeClass('show');
    $('#slide-title2').addClass('clicked');
    $('#slide-title1').removeClass('clicked');
    $('#slide-title3').removeClass('clicked')
	});

	$('#slide-title3').click(function(){
		$('#slide-display3').addClass('show');
		$('#slide-display1').removeClass('show');
		$('#slide-display2').removeClass('show');
    $('#slide-title3').addClass('clicked');
    $('#slide-title1').removeClass('clicked');
    $('#slide-title2').removeClass('clicked')
	});
});



// Slider


// j = 0;
// $(document).ready(function(){
//     $(window).resize(function(){
//         $("span").text(j += 1);
//         $(window).slide_setup()
//         $(window).DoIt(target)
//     });
// });





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

  });

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



// Scroll to the top

$("#backToTop").click(function(e) {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  // return false;
  e.preventDefault();
});


