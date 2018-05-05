
<?php
	// echo '<section class="banner-section">';

	// if(get_field('banner_title')) {
	// 	echo '<div class="banner ' . get_field('banner_image_size') . '" style="background-image: url('. get_field('banner_background_image') . '); color:' 
	// 	. get_field('text_color') .';">';
	// 		echo '<h2 class="page-name">' . get_field('page_name') . '</h2>';
	// 		echo '<div class="banner-content '. get_field('banner_image_size') .'    ">';
	// 			echo '<h1 class="banner-title">' . get_field('banner_title') . '</h1>';
	// 			echo '<div class="banner-line ' . get_field('title_underline_color') .  '"> </div>';
	// 			echo '<h2>' . get_field('banner_text') . '</h2>';	
	// 		echo '</div>';	
	// 		if(get_field('banner_foreground_image')) {
	// 				echo '<img id="banner_fg_image" class="banner-image movedown" src="' . get_field('banner_foreground_image') .  '">';
	// 		}
	// 	echo '</div>';
	// }
?> 

<!-- Removing php -->

<section class="banner-section">

	<?php  if(get_field('banner_title')) { ?>
		<div class="banner <?php echo get_field('banner_image_size') ?>" style="background-image: url(<?php echo get_field('banner_background_image') ?>); color: <?php echo get_field('text_color') ?>;">
			<h2 class="page-name"> 
				<?php echo get_field('page_name') ?>		
			</h2>
			<div class="banner-content <?php echo get_field('banner_image_size') ?>">
				<h1 class="banner-title"> <?php echo get_field('banner_title') ?>
				</h1>
				<div class="banner-line <?php echo get_field('title_underline_color') ?> "> 
				</div>
				<h2> 
					<?php echo get_field('banner_text') ?>
				</h2>	
			</div>	

			<?php 
			$image = get_field('banner_foreground_image');
			if( !empty($image) ): ?>
				<img id="banner_fg_image" 
					class="banner-image movedown" 
					src="<?php echo $image['url']; ?>" 
					alt="<?php echo $image['alt']; ?>" 
					description="<?php echo $image['description']; ?>"
				>
			<?php endif; 
			?>

		</div>
	<?php } ?>

<!-- Removing php -->


	<?php if(get_field('banner_right_image')) { ?>

		<section class="banner banner-right <?php echo get_field('banner_image_size') ?>" style="background-image: url(<?php  echo get_field('banner_right_image') ?>);">
		</section>
	<?php } ?>


	
<!-- For team page only -->

			<?php 
			$image2 = get_field('team-banner-photo');
			if( !empty($image2) ): ?>
				<img
					class="banner-background-block" 
					src="<?php echo $image2['url']; ?>" 
					alt="<?php echo $image2['alt']; ?>" 
					description="<?php echo $image2['description']; ?>"
				/>
			<?php endif; 
			?>


	<?php echo '</section>'; ?>

<!-- #banner-->

	