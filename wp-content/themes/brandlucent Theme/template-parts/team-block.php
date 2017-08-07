


<?php
 		// echo '<section class="team-block">' ;
			// echo '<div class="team-block-1" style="background-image: url(' . get_field('left_block_image') . ');">'; 
			// echo '</div>';	 

			?>


			<section class="team-block">
				<div class="team-block-1" style="background-image: url('<?php 
				echo get_field('left_block_image') ;?>');">
				</div>
				


<!-- 			echo '<div class="team-block-2" style="background-image: url(' . get_field('right_block_image') . ');">';
	
				echo '<h4>' . get_field('right_block_title') . '</h4>';
				echo '<a href="'  . get_field('right_block_text_link') .  '"><p>' . get_field('right_block_text') . '<i class="fa fa-long-arrow-right" aria-hidden="true"></i></p></a>';
			echo '</div> test'; -->

			<div class="team-block 2">
				<h4>
					<?php echo get_field('right_block_text_link') ;?> 
				</h4>

				<a href="<?php echo get_field('right_block_text') ;?>">
					<p>
					<?php echo get_field('right_block_text') ;?>
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
					</p>

				</a>

				<!-- 

				TODO - remove a link PHP with regular code above 

				-->

			<?php echo '<a href="'  . get_field('right_block_text_link') .  '"><p>' . get_field('right_block_text') . '<i class="fa fa-long-arrow-right" aria-hidden="true"></i></p></a>'; ?> 

				<video class="video-background" autoplay loop id="video-background" muted plays-inline>
				<source src="http://localhost:8080/brandlucent/wp-content/uploads/2017/07/TEAM-vid.mp4" type="video/mp4">
				</video>
			</div>

			</section>


<?php

		if(get_field('team_member_1_name')) {
			echo '<div class="team-block-3">';
				echo '<div class="team-member" style="background-image: url(' . get_field('team_member_1_photo') . ');">';
						echo '<h4>' . get_field('team_member_1_name') . '</h4>';
						echo '<h5>' . get_field('team_member_1_title') . '</h5>';
					echo '</div>';
				echo '<div class="team-member" style="background-image: url(' . get_field('team_member_2_photo') . ');">';
						echo '<h4>' . get_field('team_member_2_name') . '</h4>';
						echo '<h5>' . get_field('team_member_2_title') . '</h5>';
					echo '</div>';
				echo '<div class="team-member" style="background-image: url(' . get_field('team_member_3_photo') . ');">';
						echo '<h4>' . get_field('team_member_3_name') . '</h4>';
						echo '<h5>' . get_field('team_member_3_title') . '</h5>';
				echo '</div>';
			echo '</div>';	
		echo '</section>'; 
	}
?> <!-- # Team block-->