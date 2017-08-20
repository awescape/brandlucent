
<?php if( get_field('page_name') ): ?>

	<section class="banner-full-screen"  style="background-image: url('<?php echo get_field('full_screen_banner_background_image') ;?>');">
			
		<h2 class="page-name">
			<?php echo get_field('page_name') ;?> 
		</h2>

		<h3 class="full-screen-banner-title">
			<?php echo get_field('full_screen_banner_title') ;?>
		</h3>

		<p class="full-screen-banner-text">
			<?php echo get_field('full_screen_banner_text') ;?>
		</p>
	
	</section>
<?php endif; ?>