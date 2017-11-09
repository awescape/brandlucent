
// ------   Work page -----------


// 


// Work page parallax effect
function parallax(){


	var prlx_lyr_mobile1 = document.getElementById('prlx_lyr_mobile1');
	prlx_lyr_mobile1.style.bottom = (window.pageYOffset / 20)+'vh';


	var prlx_lyr_mobile3 = document.getElementById('prlx_lyr_mobile3');
	prlx_lyr_mobile3.style.bottom = -93 + (window.pageYOffset / 20)+'vh';


	var prlx_lyr_mobile5 = document.getElementById('prlx_lyr_mobile5');
	prlx_lyr_mobile5.style.bottom = -177 + (window.pageYOffset / 20)+'vh';
}
window.addEventListener("scroll", parallax, false);





