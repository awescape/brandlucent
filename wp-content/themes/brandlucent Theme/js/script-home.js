

// Home Parallax effect
function parallax(){

	var prlx_lyr_banner = document.getElementById('prlx_lyr_banner');
	prlx_lyr_banner.style.top = -30+(window.pageYOffset / 20)+'vh';

	var prlx_lyr_1 = document.getElementById('prlx_lyr_1');
	prlx_lyr_1.style.top = -110+(window.pageYOffset / 10)+'vh';

	var prlx_lyr_2 = document.getElementById('prlx_lyr_2');
	prlx_lyr_2.style.top = -240+(window.pageYOffset / 10)+'vh';

	var prlx_lyr_3 = document.getElementById('prlx_lyr_3');
	prlx_lyr_3.style.top = -110+(window.pageYOffset / 20)+'vh';


}
window.addEventListener("scroll", parallax, false);