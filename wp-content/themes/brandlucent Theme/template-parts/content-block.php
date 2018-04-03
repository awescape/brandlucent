<?php
			if(get_field('content_text')) {
				echo '<section id="content-block" class="content-block" style="background-color:' . get_field('content_background') . ';">';
					echo '<div class="content-block-wrapper">';
						echo '<h1 class="content-title hideme ">' . get_field('content_title') . '</h1>';
						echo '<p class="hideme">' . get_field('content_text') . '</p>';
					echo'</div>'; ?>

					<?php 
						$image = get_field('content_image');
						if( !empty($image) ): ?>
							<img id="content_block_image" 
								class="content-image" 
								src="<?php echo $image['url']; ?>" 
								alt="<?php echo $image['alt']; ?>" 
								description="<?php echo $image['description']; ?>"
							/>
						<?php endif; 
						?>


				<?php	echo '</section>';
			}
		?> <!-- #content block-->

