<?php
/*
contact: contact
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

<?php
	echo '<section class="banner-section">';

	if(get_field('banner_title')) {
		echo '<div class="banner ' . get_field('banner_image_size') . '" style="background-image: url('. get_field('banner_background_image') . '); color:' 
		. get_field('text_color') .';">';
			echo '<h2 class="page-name">' . get_field('page_name') . '</h2>';
			echo '<div class="banner-content '. get_field('banner_image_size') .'    ">';
				echo '<h1 class="banner-title">' . get_field('banner_title') . '</h1>';
				echo '<div class="banner-line ' . get_field('title_underline_color') .  '"> </div>';
				echo '<h2>' . get_field('banner_text') .  '</h2>';	
				echo '<br><a class="underline-link" href="https://www.google.ca/maps/place/Brandlucent+Inc./@45.5333791,-73.6235229,17z/data=!3m1!4b1!4m5!3m4!1s0x4cc91911f8c811d3:0x72227e09f67b6f5e!8m2!3d45.5333754!4d-73.6213342"><h2>Open in Google maps<i class="fa fa-long-arrow-right" aria-hidden="true"></i></h2></a>';
			echo '</div>';	
			if(get_field('banner_foreground_image')) {
					echo '<img id="banner_fg_image" class="banner-image movedown" src="' . get_field('banner_foreground_image') .  '">';
			}
		echo '</div>';
	}
?> 






	<?php if(get_field('banner_right_image')) { ?>

		<section class="banner banner-right <?php echo get_field('banner_image_size') ?>" style="background-image: url(<?php  echo get_field('banner_right_image') ?>);">
		</section>
	<?php } ?>


	
<!-- For team page only -->
<!-- 		<section class="banner-background-block" style="background-image: url(<?php  echo get_field('banner_background_image') ?>);">
		</section> -->

		<img class="banner-background-block" src="<?php  echo get_field('team-banner-photo') ?>">





	<?php echo '</section>'; ?>

<!-- #banner-->

	



<!-- quote-banner-->
<?php get_template_part( 'template-parts/quote-banner'); ?>



<!-------------- #call to action---------->
		<?php get_template_part( 'template-parts/call-to-action'); ?>
<!--------------  ------------ ---------->


		</main><!-- #main -->
	</div><!-- #primary -->



	 <script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/script-contact.js' ?>"></script>  

<?php

get_footer();
