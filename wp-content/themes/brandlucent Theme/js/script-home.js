

// Home Parallax effect
// function parallax(){

// 	var prlx_lyr_banner = document.getElementById('prlx_lyr_banner');
// 	prlx_lyr_banner.style.top = -30+(window.pageYOffset / 20)+'vh';

// 	var prlx_lyr_1 = document.getElementById('prlx_lyr_1');
// 	prlx_lyr_1.style.top = -110+(window.pageYOffset / 10)+'vh';

// 	var prlx_lyr_2 = document.getElementById('prlx_lyr_2');
// 	prlx_lyr_2.style.top = -250+(window.pageYOffset / 9)+'vh';
// 	prlx_lyr_2.style.left = -240+(window.pageYOffset / 9)+'vh';

// 	var prlx_lyr_3 = document.getElementById('prlx_lyr_3');
// 	prlx_lyr_3.style.top = -110+(window.pageYOffset / 20)+'vh';


// }
// window.addEventListener("scroll", parallax, false);

// Home Parallax effect
function parallax(){

  // var prlx_lyr_banner = document.getElementById('banner_fg_image');
  // prlx_lyr_banner.style.top = (window.pageYOffset / 20)+'vh';

  var prlx_lyr_1 = document.getElementById('prlx_lyr_1');
  prlx_lyr_1.style.top = -110+(window.pageYOffset / 10)+'vh';

  var prlx_lyr_2 = document.getElementById('prlx_lyr_2');
  prlx_lyr_2.style.top = -250+(window.pageYOffset / 9)+'vh';
  prlx_lyr_2.style.left = -120+(window.pageYOffset / 18)+'vh';

  // var prlx_lyr_3 = document.getElementById('prlx_lyr_3');
  // prlx_lyr_3.style.top = -110+(window.pageYOffset / 20)+'vh';

  var home_triangle = document.getElementById('home_triangle');
  home_triangle.style.top = -100+(window.pageYOffset / 20)+'vh';

}
window.addEventListener("scroll", parallax, false);

