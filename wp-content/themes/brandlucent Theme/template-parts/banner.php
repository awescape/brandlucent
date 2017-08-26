
<?php
	echo '<section class="banner-section">';

	if(get_field('banner_title')) {
		echo '<div class="banner ' . get_field('banner_image_size') . '" style="background-image: url('. get_field('banner_background_image') . '); color:' 
		. get_field('text_color') .';">';
			echo '<h2 class="page-name">' . get_field('page_name') . '</h2>';
			echo '<div class="banner-content '. get_field('banner_image_size') .'    ">';
				echo '<h1 class="banner-title">' . get_field('banner_title') . '</h1>';
				echo '<div class="banner-line ' . get_field('title_underline_color') .  '"> </div>';
				echo '<h2>' . get_field('banner_text') . '</h2>';	
			echo '</div>';	
			if(get_field('banner_foreground_image')) {
				echo '<div class="banner-image">';
					echo '<img src="' . get_field('banner_foreground_image') .  '">';
				echo '</div>';
			}
		echo '</div>';
	}
?> 


	<?php if(get_field('banner_right_image')) { ?>

		<section class="banner <?php echo get_field('banner_image_size') ?>" style="background-image: url(<?php  echo get_field('banner_right_image') ?>);">
		</section>
	<?php } ?>

	<?php echo '</section>'; ?>

<!-- #banner-->

	