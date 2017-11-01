<?php
			if(get_field('content_text')) {
				echo '<section id="content-block" class="content-block" style="background-color:' . get_field('content_background') . ';">';
					echo '<div class="content-block-wrapper">';
						echo '<h1 class="content-title ">' . get_field('content_title') . '</h1>';
						echo '<p class="">' . get_field('content_text') . '</p>';
					echo'</div>';
					echo '<img id="content_block_image" class="content-image moveme" src="' .  get_field('content_image') . '">';
				echo '</section>';
			}
		?> <!-- #content block-->