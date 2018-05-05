<?php
/**
 * 
 * Template Name: Home Page
 *
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
	if(get_field('banner_title')) {
		echo '<section class="banner about-banner" style="background-image: url(' . get_field('banner_background_image') . '); color:' . get_field('text_color') .';">';
			echo '<h2 class="page-name">' . get_field('page_name') . '</h2>';
			echo '<div class="banner-content">';
				echo '<h1 class="banner-title">' . get_field('banner_title') . '</h1>';
				echo '<div class="banner-line"> </div>';
				echo '<h2>' . get_field('banner_text') . '</h2>';	
			echo '</div>';	
			if(get_field('banner_foreground_image')) {
					echo '<img id="banner_fg_image" class="banner-image movedown" src="' . get_field('banner_foreground_image') .  '">';
		}
		echo '</section>';
	}
?> <!-- #banner-->


<!-- Message Block (customized for Home page) -->	



<section class="home-block home-block-1">

	<div class="home-block-wrapper home-block-wrapper-1">
		<h1 class="home-block-title hideme">
			<?php echo get_field('home_block_1_title') ?>
		</h1>

		<p class="home-block-content hideme">
			<?php echo get_field('home_block_1_content') ?>
		</p>

		<a class="hideme" href="<?php echo get_field('home_block_1_button_link') ?>">
			<button class="button home-block-button">
			 	<?php echo get_field('home_block_1_button') ?>
			 	<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</button>
		</a>
	</div>
	<div class="home-block-image home-block-1-images">
	<img id="prlx_lyr_1" class="home-block-1-image home-block-1-image-1" src="<?php echo get_field('home_block_1_image_1') ?>">';
	<img id="rotating" class="home-block-1-image home-block-1-image-2" src="<?php echo get_field('home_block_1_image_2') ?>">
	</div>
</section>


<section>
			<img class="banner-strip-image" src="<?php echo get_field('banner_strip_image'); ?>">
</section>


<section class="home-block home-block-2">

	<div class="home-block-wrapper home-block-wrapper-2">
		<h1 class="home-block-title home-block-2-title hideme">
			<?php echo get_field('home_block_2_title') ?>
		</h1>

		<p class="home-block-content home-block-2-content hideme">
			<?php echo get_field('home_block_2_content') ?>
		</p>

		<a href="<?php echo get_field('home_block_2_button_link') ?>">
			<button class="button home-block-button hideme">
			 	<?php echo get_field('home_block_2_button') ?>
			 	<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</button>
		</a>
	</div>


	<div class="home-block-image">
		<img id="home_triangle" class="home-block-2-image-1" src="<?php echo get_field('home_block_2_image_1') ?>">
	</div>

</section>


<section class="home-block home-block-3">

	<div class="home-block-wrapper home-block-wrapper-3">
		<h1 class="home-block-title home-block-3-title hideme">
			<?php echo get_field('home_block_3_title') ?>
		</h1>

		<p class="home-block-content home-block-3-content hideme">
			<?php echo get_field('home_block_3_content') ?>
		</p>

		<a href="<?php echo get_field('home_block_3_button_link') ?>">
			<button class="button home-block-button hideme">
			 	<?php echo get_field('home_block_3_button') ?>
			 	<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</button>
		</a>
	</div>

	<div class="home-block-image home-block-3-image">
		<img id="prlx_lyr_2" class="home-block-3-image-1" src="<?php echo get_field('home_block_3_image_1') ?>">
		<img id="prlx_lyr_mob" class="home-block-3-image-1 home-block-3-image-1-mob hideme" src="<?php echo get_field('home_block_3_image_1') ?>">
		
		<img id="prlx_lyr_3" class="home-block-3-image-2" src="<?php echo get_field('home_block_3_image_2') ?>">
	</div>


</section>


<section class="home-block home-block-4">

	<div class="home-block-wrapper home-block-wrapper-4">
		<h1 class="home-block-title home-block-4-title hideme">
			<?php echo get_field('home_block_4_title') ?>
		</h1>

		<p class="home-block-content home-block-4-content hideme">
			<?php echo get_field('home_block_4_content') ?>
		</p>


	</div>

	<div class="home-block-image home-block-4-image">
		<img id="rotating20" class="home-block-4-image-1" src="<?php echo get_field('home_block_4_image_1') ?>">

	</div>


</section>


<!-------------- #call to action---------->
		<?php get_template_part( 'template-parts/call-to-action'); ?>
<!--------------  ------------ ---------->


		</main><!-- #main -->
	</div><!-- #primary -->


<!-- <script src="../wp-content/themes/brandlucent theme/js/script-home.js"></script>  -->

 <script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/script-home.js' ?>"></script>  

<?php

get_footer();
