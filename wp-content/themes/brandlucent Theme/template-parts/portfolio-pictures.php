


<section class="portfolio-pictures">
			
 <?php while( have_rows('portfolio_pictures_repeater') ): the_row(); ?>
 
    <img class="portfolio-full-width" src="<?php echo get_sub_field('full_screen_image')?>">
    <img class="portfolio-half-screen" src="<?php echo get_sub_field('half_screen_image_1')?>">
    <img class="portfolio-half-screen" src="<?php echo get_sub_field('half_screen_image_2')?>">
  <?php endwhile; ?>
	
</section>
