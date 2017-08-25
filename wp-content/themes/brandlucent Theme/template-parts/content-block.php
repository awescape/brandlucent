<?php
			if(get_field('content_text')) {
				echo '<section class="content-block" style="background-color:' . get_field('content_background') . ';">';
					echo '<div class="content-block-wrapper">';
						echo '<h1 class="content-title">' . get_field('content_title') . '</h1>';
						echo '<p>' . get_field('content_text') . '</p>';
					echo'</div>';
					echo '<img class="content-image" src="' .  get_field('content_image') . '">';
				echo '</section>';
			}
		?> <!-- #content block-->