
<?php
	if(get_field('banner_title')) {
		echo '<section class="banner about-banner" style="background-image: url(' . get_field('banner_background_image') . '); color:' . get_field('text_color') .';">';
			echo '<h2 class="page-name">' . get_field('page_name') . '</h2>';
			echo '<div class="banner-content">';
				echo '<h1 class="banner-title">' . get_field('banner_title') . '</h1>';
				echo '<div class="banner-line"> </div>';
				echo '<h2>' . get_field('banner_text') . '</h2>';	
			echo '</div>';	
			if(get_field('banner_foreground_image')) {
				echo '<div class="banner-image">';
					echo '<img src="' . get_field('banner_foreground_image') .  '">';
				echo '</div>';
		}
		echo '</section>';
	}
?> <!-- #banner-->
	