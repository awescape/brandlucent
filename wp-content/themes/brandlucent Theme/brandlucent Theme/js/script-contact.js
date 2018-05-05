

// contact parallax effect
function parallax(){

	var banner_contact = document.getElementById('banner_fg_image');
	banner_contact.style.top = -60 + (window.pageYOffset / 5 )+'vh';

}
window.addEventListener("scroll", parallax, false);



