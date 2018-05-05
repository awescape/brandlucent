<?php if(get_field('block_1_title')) { ?>
 		<section class="big-blocks">
			<div class="block-1" style="background-image: url( <?php echo get_field('block_1_background_image');?> ); color: <?php echo get_field('block_1_title_color') ;?> ; background-color: <?php echo get_field('block_1_background_color') ;?> ;">
				<<?php echo get_field('block_1_header_type') ;?> class="hideme"> <?php echo get_field('block_1_title') ;?> </ <?php echo get_field('block_1_header_type') ;?>>
			</div>
		<?php	} ?>

<?php
if(get_field('block_2_content')) {
			echo '<div class="block-2 down-animation">';
				echo '<p class="hideme">' . get_field('block_2_content') . '</p>';
				echo '<div class="hideme"><a href="'  . get_field('block_2_button_link') .  '"><button class="button big-blocks-button">' . get_field('block_2_button') . '</button> </a></div>';
			echo'</div>';
		}

if(get_field('subtitle_1')) {
			echo '<div class="block-3 down-animation">';
				echo '<div>';
					echo '<h4 class="hideme">' . get_field('subtitle_1') . '</h4>';
					echo '<h2 class="hideme">' . get_field('subtitle_1_content') . '</h2>';
				echo'</div>';
				echo '<div>';
					echo '<h4 class="hideme">' . get_field('subtitle_2') . '</h4>';
					echo '<h2 class="hideme">' . get_field('subtitle_2_content') . '</h2>';
				echo'</div>';
				echo '<div>';
					echo '<h4 class="hideme">' . get_field('subtitle_3') . '</h4>';
					echo '<h2 class="hideme">' . get_field('subtitle_3_content') . '</h2>';
				echo'</div>';
				echo '<div>';
					echo '<h4 class="hideme">' . get_field('subtitle_4') . '</h4>';
					echo '<h2 class="hideme">' . get_field('subtitle_4_content') . '</h2>';
				echo'</div>';
			echo'</div>';
		echo '</section>'; 
	}
?> <!-- #big blocks-->