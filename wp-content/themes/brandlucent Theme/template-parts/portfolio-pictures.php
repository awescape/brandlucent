


<section class="portfolio-pictures">


	<?php if( get_field('picture-video_picture') ): ?>

		<div class="picture-video-wrapper">

			<?php $image = get_field('picture-video_picture');
			if( !empty($image) ): ?>
				<img class="picture-video-picture" 
					src="<?php echo $image['url']; ?>" 
					alt="<?php echo $image['alt']; ?>" 
					description="<?php echo $image['description']; ?>"
				/>
			<?php endif; ?>

			<a class="picture-video-video-wrapper">	
				<?php $video = get_field('picture-video_video'); ?>
				<video class="video-background picture-video-video" onplay="setPlaySpeed()" autoplay loop id="portfolio-video" muted plays-inline>
				<source src="<?php echo $video['url']; ?>" 
					alt="<?php echo $video['alt']; ?>" 
					description="<?php echo $video['description']; ?>"
					type="video/mp4">
				</video>
			</a>

		</div>
	<?php endif; ?>



	<?php if( get_field('portfolio_video') ): ?>
		<div class="portfolio-video-wrapper">

			<?php $video = get_field('portfolio_video'); ?>
			<video class="video-background portfolio-video" onplay="setPlaySpeed()" autoplay loop id="portfolio-video" muted plays-inline>
			<source src="<?php echo $video['url']; ?>" 
				alt="<?php echo $video['alt']; ?>" 
				description="<?php echo $video['description']; ?>"
				type="video/mp4">
			</video>

		</div>
	<?php endif; ?>

<!-- 	<button onclick="getPlaySpeed()" type="button">What is the playback speed?</button>
<button onclick="setPlaySpeed()" type="button">Set video to be play in slow motion</button><br>  -->


			
 <?php while( have_rows('portfolio_pictures_repeater') ): the_row(); ?>

	<?php if( get_sub_field('full_screen_image') ): ?>
		<?php $image = get_sub_field('full_screen_image');
			if( !empty($image) ): ?>
				<img  
					class="portfolio-full-width" 
					src="<?php echo $image['url']; ?>" 
					alt="<?php echo $image['alt']; ?>" 
					description="<?php echo $image['description']; ?>"
				/>
			<?php endif; 
		?>
	<?php endif; ?>

	<?php if( get_sub_field('half_screen_image_1') ): ?>
		<?php $image = get_sub_field('half_screen_image_1');
			if( !empty($image) ): ?>
				<img  
					class="portfolio-half-screen" 
					src="<?php echo $image['url']; ?>" 
					alt="<?php echo $image['alt']; ?>" 
					description="<?php echo $image['description']; ?>"
				/>
			<?php endif; 
		?>
	<?php endif; ?>

	<?php if( get_sub_field('half_screen_image_1') ): ?>
		<?php $image = get_sub_field('half_screen_image_2');
			if( !empty($image) ): ?>
				<img  
					class="portfolio-half-screen" 
					src="<?php echo $image['url']; ?>" 
					alt="<?php echo $image['alt']; ?>" 
					description="<?php echo $image['description']; ?>"
				/>
			<?php endif; 
		?>

	<?php endif; ?>

  <?php endwhile; ?>
	
</section>
