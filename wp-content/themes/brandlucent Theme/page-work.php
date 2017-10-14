<?php
/*
services: services
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
		<main id="main" class="site-main portfolio-work" role="main">

<!-------------- #portfolio-block---------->
		<?php get_template_part('template-parts/portfolio-block'); ?>


<!-------------- #slider---------->
	<?php get_template_part('template-parts/full-screen-slider'); ?>


<!-------------- #call to action---------->
		<?php get_template_part( 'template-parts/call-to-action'); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

	<script src="../wp-content/themes/brandlucent theme/js/script-work.js"></script>
	
<?php

get_footer();
