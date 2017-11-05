

<?php
/*
 * Template Name: Services Template
 */
/*
Services: Services
*/
?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package brandlucent
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!-- banner-->	
<?php get_template_part( 'template-parts/banner'); ?>

<!-- Slider Block-->	
<section class="slider-section">
	<div class="slider-left-block">
		
		<h3><?php echo get_field('slider_big_text') ;?></h3>
		
		<img id="rotating20" class="slider-left-block-image" src="<?php echo get_field('slider_left_block_image') ;?>">

		<?php $a = 1; ?>
		<div class="slide-titles">
			<?php while( have_rows('slider_right_block') ): the_row(); ?>
				<div class="slide-title-box <?php
						if ($a == 1)
  						echo "clicked";
						?>" id="slide-title<?php echo $a; ?>">
					<!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i> -->
					<p class="slide-title slider-button"><?php echo get_sub_field('slide_title') ;?></p>
				</div>
				<?php $a++; ?>
			<?php endwhile; ?>
		</div>

	</div>
	
	<div class="slider-right-block">
		
	
	<?php $i = 1; ?>

		<?php while( have_rows('slider_right_block') ): the_row(); ?>
			<div id="slide-display<?php echo $i; ?>" class="slide-display <?php if ($i < 2) { echo 'show';} ?>">
				<?php while( have_rows('slides') ): the_row(); ?>

					<div class="slider-content-block">
						<h3 class="slider-content-title"><?php echo get_sub_field('slider_content_title') ;?></h3>
						
						<ul>
						<?php while( have_rows('slider_content') ): the_row(); ?>
							<li><p class="slider-content-items"><?php echo get_sub_field('slider_content_items') ;?></p></li>
			   			<?php endwhile; ?>
						</ul>
					</div>

			   	<?php endwhile; ?>
			   	</div>
		   	<?php $i++; ?>
		<?php endwhile; ?>
	</div>
</section>




<!-- quote-banner-->
<?php get_template_part( 'template-parts/quote-banner'); ?>

<!-- Service line Block-->

<?php if( have_rows('service_line_block') ): ?>
 
 <section class="service-line-intro">

    <?php while( have_rows('service_line_block') ): the_row(); ?>
 
    <div class="service-line-block service-page <?php echo get_sub_field('service_color') ;?>" style="background-image: url( <?php echo get_sub_field('service_background_image');?> );">
    	<div class="service-line-wrapper service-page">
	 		<h2 class="service-title-area"> <?php echo get_sub_field('service_title_area') ;?> 
	 		</h2>
	 		<h1 class="service-title <?php echo get_sub_field('service_color') ;?>"> <?php echo get_sub_field('service_title') ;?> 
	 		</h1>
	 		<p class="service-description"> <?php echo get_sub_field('service_description') ;?> 
	 		</p>


			<?php 
			if(get_sub_field('learn_more_text')) {
				echo '<a class="learn-more-text" href="'. get_sub_field('learn_more_link') .  '"><div ">' . get_sub_field('learn_more_text') . '<i class="fa fa-long-arrow-right" aria-hidden="true"></i></div></a>';
				} ?> 

		</div>
    </div>
        
    <?php endwhile; ?>
 
 </section>
 
<?php endif; ?>


<!-------------- #call to action---------->
		<?php get_template_part( 'template-parts/call-to-action'); ?>
<!--------------  ------------ ---------->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
