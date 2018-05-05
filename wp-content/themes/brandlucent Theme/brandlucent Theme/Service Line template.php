

<?php
/*
Brand identity Package: Brand identity Package
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
<?php get_template_part( 'template-parts/banner-full-screen'); ?>

<!-- bigblocks-->
<?php get_template_part( 'template-parts/portfolio'); ?>

<!-- quote-banner-->
<?php get_template_part( 'template-parts/quote-banner'); ?>

<!-- service-line-intro-->
<?php get_template_part( 'template-parts/service-line-intro'); ?>


<!-------------- #call to action---------->
		<?php get_template_part( 'template-parts/call-to-action'); ?>
<!--------------  ------------ ---------->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
