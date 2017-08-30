<!-- <div class="get-in-touch">
			<h1>Get in touch<span class="arrow"><img src=""></span></h1>
		</div> -->

<?php
	if(get_field('call_to_action_text')) {
		echo '<section class="call-to-action ' . get_field('cta_color') . '">';
			echo '<a href="'  . get_field('call_to_action_link') .  '"><h1>' . get_field('call_to_action_text') . '<i class="' . get_field('cta_arrow') . '" aria-hidden="true"></i></h1></a>';
		echo '</section>'; 
}
?> 