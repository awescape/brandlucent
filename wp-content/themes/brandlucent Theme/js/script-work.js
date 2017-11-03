
// ------   Work page -----------


// 


// Work page parallax effect
function parallax(){


	var prlx_lyr_mobile1 = document.getElementById('prlx_lyr_mobile1');
	prlx_lyr_mobile1.style.bottom = (window.pageYOffset / 20)+'vh';

}
window.addEventListener("scroll", parallax, false);