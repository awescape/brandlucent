
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

$("#form-button-1").click(function(e) {
  $("html, body").animate({ scrollTop: 0 }, "fast");
  // return false;
  e.preventDefault();
});


// PI slider

// $(document).ready(function() {
//   $("#slider-range-min").slider({
//     range: "min",
//     step: 1,
//     value: 100,
//     min: 10,
//     max: 100,
//     slide: function(event, ui) {
//       $("#amount").val("$" + ui.value + "k");
//     },
//     change: function(event, ui) {
//       if (ui.value === 10) {
//         $("#amount").val("$10k");
//       } else if (ui.value === 100) {
//         $("#amount").val("$" + "100k+ ");
//       } else {
//         $("#amount").val("$" + $("#slider-range-min").slider("value") + "k");
//       }
//     }
//   });
//   $("#amount").val("$" + $("#slider-range-min").slider("value") + "k");
// });


/*! rangeslider.js - v2.1.1 | (c) 2016 @andreruffert | MIT license | https://github.com/andreruffert/rangeslider.js */
!function(a){"use strict";"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){"use strict";function b(){var a=document.createElement("input");return a.setAttribute("type","range"),"text"!==a.type}function c(a,b){var c=Array.prototype.slice.call(arguments,2);return setTimeout(function(){return a.apply(null,c)},b)}function d(a,b){return b=b||100,function(){if(!a.debouncing){var c=Array.prototype.slice.apply(arguments);a.lastReturnVal=a.apply(window,c),a.debouncing=!0}return clearTimeout(a.debounceTimeout),a.debounceTimeout=setTimeout(function(){a.debouncing=!1},b),a.lastReturnVal}}function e(a){return a&&(0===a.offsetWidth||0===a.offsetHeight||a.open===!1)}function f(a){for(var b=[],c=a.parentNode;e(c);)b.push(c),c=c.parentNode;return b}function g(a,b){function c(a){"undefined"!=typeof a.open&&(a.open=a.open?!1:!0)}var d=f(a),e=d.length,g=[],h=a[b];if(e){for(var i=0;e>i;i++)g[i]=d[i].style.cssText,d[i].style.setProperty?d[i].style.setProperty("display","block","important"):d[i].style.cssText+=";display: block !important",d[i].style.height="0",d[i].style.overflow="hidden",d[i].style.visibility="hidden",c(d[i]);h=a[b];for(var j=0;e>j;j++)d[j].style.cssText=g[j],c(d[j])}return h}function h(a,b){var c=parseFloat(a);return Number.isNaN(c)?b:c}function i(a){return a.charAt(0).toUpperCase()+a.substr(1)}function j(b,e){if(this.$window=a(window),this.$document=a(document),this.$element=a(b),this.options=a.extend({},n,e),this.polyfill=this.options.polyfill,this.orientation=this.$element[0].getAttribute("data-orientation")||this.options.orientation,this.onInit=this.options.onInit,this.onSlide=this.options.onSlide,this.onSlideEnd=this.options.onSlideEnd,this.DIMENSION=o.orientation[this.orientation].dimension,this.DIRECTION=o.orientation[this.orientation].direction,this.DIRECTION_STYLE=o.orientation[this.orientation].directionStyle,this.COORDINATE=o.orientation[this.orientation].coordinate,this.polyfill&&m)return!1;this.identifier="js-"+k+"-"+l++,this.startEvent=this.options.startEvent.join("."+this.identifier+" ")+"."+this.identifier,this.moveEvent=this.options.moveEvent.join("."+this.identifier+" ")+"."+this.identifier,this.endEvent=this.options.endEvent.join("."+this.identifier+" ")+"."+this.identifier,this.toFixed=(this.step+"").replace(".","").length-1,this.$fill=a('<div class="'+this.options.fillClass+'" />'),this.$handle=a('<div class="'+this.options.handleClass+'" />'),this.$range=a('<div class="'+this.options.rangeClass+" "+this.options[this.orientation+"Class"]+'" id="'+this.identifier+'" />').insertAfter(this.$element).prepend(this.$fill,this.$handle),this.$element.css({position:"absolute",width:"1px",height:"1px",overflow:"hidden",opacity:"0"}),this.handleDown=a.proxy(this.handleDown,this),this.handleMove=a.proxy(this.handleMove,this),this.handleEnd=a.proxy(this.handleEnd,this),this.init();var f=this;this.$window.on("resize."+this.identifier,d(function(){c(function(){f.update(!1,!1)},300)},20)),this.$document.on(this.startEvent,"#"+this.identifier+":not(."+this.options.disabledClass+")",this.handleDown),this.$element.on("change."+this.identifier,function(a,b){if(!b||b.origin!==f.identifier){var c=a.target.value,d=f.getPositionFromValue(c);f.setPosition(d)}})}Number.isNaN=Number.isNaN||function(a){return"number"==typeof a&&a!==a};var k="rangeslider",l=0,m=b(),n={polyfill:!0,orientation:"horizontal",rangeClass:"rangeslider",disabledClass:"rangeslider--disabled",horizontalClass:"rangeslider--horizontal",verticalClass:"rangeslider--vertical",fillClass:"rangeslider__fill",handleClass:"rangeslider__handle",startEvent:["mousedown","touchstart","pointerdown"],moveEvent:["mousemove","touchmove","pointermove"],endEvent:["mouseup","touchend","pointerup"]},o={orientation:{horizontal:{dimension:"width",direction:"left",directionStyle:"left",coordinate:"x"},vertical:{dimension:"height",direction:"top",directionStyle:"bottom",coordinate:"y"}}};return j.prototype.init=function(){this.update(!0,!1),this.onInit&&"function"==typeof this.onInit&&this.onInit()},j.prototype.update=function(a,b){a=a||!1,a&&(this.min=h(this.$element[0].getAttribute("min"),0),this.max=h(this.$element[0].getAttribute("max"),100),this.value=h(this.$element[0].value,Math.round(this.min+(this.max-this.min)/2)),this.step=h(this.$element[0].getAttribute("step"),1)),this.handleDimension=g(this.$handle[0],"offset"+i(this.DIMENSION)),this.rangeDimension=g(this.$range[0],"offset"+i(this.DIMENSION)),this.maxHandlePos=this.rangeDimension-this.handleDimension,this.grabPos=this.handleDimension/2,this.position=this.getPositionFromValue(this.value),this.$element[0].disabled?this.$range.addClass(this.options.disabledClass):this.$range.removeClass(this.options.disabledClass),this.setPosition(this.position,b)},j.prototype.handleDown=function(a){if(this.$document.on(this.moveEvent,this.handleMove),this.$document.on(this.endEvent,this.handleEnd),!((" "+a.target.className+" ").replace(/[\n\t]/g," ").indexOf(this.options.handleClass)>-1)){var b=this.getRelativePosition(a),c=this.$range[0].getBoundingClientRect()[this.DIRECTION],d=this.getPositionFromNode(this.$handle[0])-c,e="vertical"===this.orientation?this.maxHandlePos-(b-this.grabPos):b-this.grabPos;this.setPosition(e),b>=d&&b<d+this.handleDimension&&(this.grabPos=b-d)}},j.prototype.handleMove=function(a){a.preventDefault();var b=this.getRelativePosition(a),c="vertical"===this.orientation?this.maxHandlePos-(b-this.grabPos):b-this.grabPos;this.setPosition(c)},j.prototype.handleEnd=function(a){a.preventDefault(),this.$document.off(this.moveEvent,this.handleMove),this.$document.off(this.endEvent,this.handleEnd),this.$element.trigger("change",{origin:this.identifier}),this.onSlideEnd&&"function"==typeof this.onSlideEnd&&this.onSlideEnd(this.position,this.value)},j.prototype.cap=function(a,b,c){return b>a?b:a>c?c:a},j.prototype.setPosition=function(a,b){var c,d;void 0===b&&(b=!0),c=this.getValueFromPosition(this.cap(a,0,this.maxHandlePos)),d=this.getPositionFromValue(c),this.$fill[0].style[this.DIMENSION]=d+this.grabPos+"px",this.$handle[0].style[this.DIRECTION_STYLE]=d+"px",this.setValue(c),this.position=d,this.value=c,b&&this.onSlide&&"function"==typeof this.onSlide&&this.onSlide(d,c)},j.prototype.getPositionFromNode=function(a){for(var b=0;null!==a;)b+=a.offsetLeft,a=a.offsetParent;return b},j.prototype.getRelativePosition=function(a){var b=i(this.COORDINATE),c=this.$range[0].getBoundingClientRect()[this.DIRECTION],d=0;return"undefined"!=typeof a["page"+b]?d=a["client"+b]:"undefined"!=typeof a.originalEvent["client"+b]?d=a.originalEvent["client"+b]:a.originalEvent.touches&&a.originalEvent.touches[0]&&"undefined"!=typeof a.originalEvent.touches[0]["client"+b]?d=a.originalEvent.touches[0]["client"+b]:a.currentPoint&&"undefined"!=typeof a.currentPoint[this.COORDINATE]&&(d=a.currentPoint[this.COORDINATE]),d-c},j.prototype.getPositionFromValue=function(a){var b,c;return b=(a-this.min)/(this.max-this.min),c=Number.isNaN(b)?0:b*this.maxHandlePos},j.prototype.getValueFromPosition=function(a){var b,c;return b=a/(this.maxHandlePos||1),c=this.step*Math.round(b*(this.max-this.min)/this.step)+this.min,Number(c.toFixed(this.toFixed))},j.prototype.setValue=function(a){(a!==this.value||""===this.$element[0].value)&&this.$element.val(a).trigger("input",{origin:this.identifier})},j.prototype.destroy=function(){this.$document.off("."+this.identifier),this.$window.off("."+this.identifier),this.$element.off("."+this.identifier).removeAttr("style").removeData("plugin_"+k),this.$range&&this.$range.length&&this.$range[0].parentNode.removeChild(this.$range[0])},a.fn[k]=function(b){var c=Array.prototype.slice.call(arguments,1);return this.each(function(){var d=a(this),e=d.data("plugin_"+k);e||d.data("plugin_"+k,e=new j(this,b)),"string"==typeof b&&e[b].apply(e,c)})},"rangeslider.js is available in jQuery context e.g $(selector).rangeslider(options);"});
$(function(){
  $('input[type="range"]').rangeslider({
    polyfill:false,
    onInit:function(){
      $('.header .pull-right').text($('input[type="range"]').val()+'K');
    },
    onSlide:function(position, value){
      //console.log('onSlide');
      //console.log('position: ' + position, 'value: ' + value);
      $('.header .pull-right').text(value+'K');
    },
    onSlideEnd:function(position, value){
      //console.log('onSlideEnd');
      //console.log('position: ' + position, 'value: ' + value);
    }
  });
});





