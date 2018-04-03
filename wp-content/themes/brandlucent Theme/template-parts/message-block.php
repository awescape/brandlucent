		<?php
			if(get_field('message_content')) {
				echo '<section class="message-block">';
					echo '<div class="message-block-wrapper">';
						echo '<h1 class="message-title hideme">' . get_field('message_title') . '</h1>';
						echo '<p class="message-content hideme">' . get_field('message_content') . '</p>';
						echo '<a href="'  . get_field('message_button_link') .  '"><button class="button message-button hideme">' . get_field('message_button') . '<i class="fa fa-long-arrow-right" aria-hidden="true"></i></button> </a>';
					echo'</div>';
		?>
					<?php 
						$image = get_field('message_spinning_image');
						if( !empty($image) ): ?>
							<img id="rotating20" 
								class="spinning-image spinning-image1" 
								src="<?php echo $image['url']; ?>" 
								alt="<?php echo $image['alt']; ?>" 
								description="<?php echo $image['description']; ?>"
							/>
						<?php endif; 
					?>

					<?php 
						$image = get_field('message_spinning_image');
						if( !empty($image) ): ?>
							<img id="rotating30" 
								class="spinning-image spinning-image2" 
								src="<?php echo $image['url']; ?>" 
								alt="<?php echo $image['alt']; ?>" 
								description="<?php echo $image['description']; ?>"
							/>
						<?php endif; 
					?>

		<?php
				echo '</section>';
			}
		?> <!-- #message block-->

	