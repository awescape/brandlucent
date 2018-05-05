


<section class="portfolio-pictures">


	<?php if( get_field('picture-video_picture') ): ?>

		<div class="picture-video-wrapper">

			<img class="picture-video-picture" src="<?php echo get_field('picture-video_picture')?>" 

			<a class="picture-video-video-wrapper">
				<video class="video-background picture-video-video" onplay="setPlaySpeed()" autoplay loop id="portfolio-video" muted plays-inline>
				<source src="<?php echo get_field('picture-video_video') ;?>" type="video/mp4">
				</video>
			</a>

		</div>
	<?php endif; ?>



	<?php if( get_field('portfolio_video') ): ?>
		<div class="portfolio-video-wrapper">
			<video class="video-background portfolio-video" onplay="setPlaySpeed()" autoplay loop id="portfolio-video" muted plays-inline>
			<source src="<?php echo get_field('portfolio_video') ;?>" type="video/mp4">
			</video>
		</div>
	<?php endif; ?>

<!-- 	<button onclick="getPlaySpeed()" type="button">What is the playback speed?</button>
<button onclick="setPlaySpeed()" type="button">Set video to be play in slow motion</button><br>  -->


			
 <?php while( have_rows('portfolio_pictures_repeater') ): the_row(); ?>

	<?php if( get_sub_field('full_screen_image') ): ?>
		<img class="portfolio-full-width" src="<?php echo get_sub_field('full_screen_image')?>" >
	<?php endif; ?>

	<?php if( get_sub_field('half_screen_image_1') ): ?>
		<img class="portfolio-half-screen" src="<?php echo get_sub_field('half_screen_image_1')?>" >
	<?php endif; ?>

	<?php if( get_sub_field('half_screen_image_1') ): ?>
		<img class="portfolio-half-screen" src="<?php echo get_sub_field('half_screen_image_2')?>" >
	<?php endif; ?>

  <?php endwhile; ?>
	
</section>
