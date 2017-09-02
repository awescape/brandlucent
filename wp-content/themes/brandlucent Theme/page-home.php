<?php
/*
team: team
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
				echo '<div class="banner-image">';
					echo '<img src="' . get_field('banner_foreground_image') .  '">';
				echo '</div>';
		}
		echo '</section>';
	}
?> <!-- #banner-->


<!-- Message Block (customized for Home page) -->	



<section class="home-block home-block-1">

	<div class="home-block-wrapper">
		<h1 class="home-block-title">
			<?php echo get_field('home_block_1_title') ?>
		</h1>

		<p class="home-block-content">
			<?php echo get_field('home_block_1_content') ?>
		</p>

		<a href="<?php echo get_field('home_block_1_link') ?>">
			<button class="button home-block-button">
			 	<?php echo get_field('home_block_1_button') ?>
			 	<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</button>
		</a>
	</div>
	<img class="home-block-1-image-1" src="<?php echo get_field('home_block_1_image_1') ?>">';
	<img id="rotating" class="home-block-1-image-2" src="<?php echo get_field('home_block_1_image_2') ?>">
</section>


<section>
			<img class="banner-strip-image" src="<?php echo get_field('banner_strip_image'); ?>">
</section>


<section class="home-block home-block-2">

	<div class="home-block-wrapper">
		<h1 class="home-block-title home-block-2-title">
			<?php echo get_field('home_block_2_title') ?>
		</h1>

		<p class="home-block-content home-block-2-content">
			<?php echo get_field('home_block_2_content') ?>
		</p>

		<a href="<?php echo get_field('home_block_2_link') ?>">
			<button class="button home-block-button">
			 	<?php echo get_field('home_block_2_button') ?>
			 	<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</button>
		</a>
	</div>

	<img class="home-block-2-image-1" src="<?php echo get_field('home_block_2_image_1') ?>">

</section>

<!-- content block-->
<?php
			if(get_field('content_text')) {
				echo '<section class="content-block" style="background-color:' . get_field('content_background') . ';">';
					echo '<div class="content-block-wrapper">';
						echo '<h1 class="content-title">' . get_field('content_title') . '</h1>';
						echo '<p>' . get_field('content_text') . '</p>';
					echo'</div>';
					echo '<img class="content-image" src="' .  get_field('content_image') . '">';
				echo '</section>';
			}
		?> <!-- #content block-->


<!-- bigblocks-->
<?php get_template_part( 'template-parts/big-blocks'); ?>


<!-------------- #call to action---------->
		<?php get_template_part( 'template-parts/call-to-action'); ?>
<!--------------  ------------ ---------->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
