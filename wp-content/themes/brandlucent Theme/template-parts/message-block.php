		<?php
			if(get_field('message_content')) {
				echo '<section class="message-block">';
					echo '<div class="message-block-wrapper">';
						echo '<h1 class="message-title">' . get_field('message_title') . '</h1>';
						echo '<p class="message-content">' . get_field('message_content') . '</p>';
						echo '<a href="'  . get_field('message_button_link') .  '"><button class="button message-button">' . get_field('message_button') . '<i class="fa fa-long-arrow-right" aria-hidden="true"></i></button> </a>';
					echo'</div>';
					echo '<img id="rotating20" class=" spinning-image spinning-image1" src="' . get_field('message_spinning_image') .  '">';
					echo '<img id="rotating30" class="spinning-image spinning-image2" src="' . get_field('message_spinning_image') .  '">';
				echo '</section>';
			}
		?> <!-- #message block-->

	