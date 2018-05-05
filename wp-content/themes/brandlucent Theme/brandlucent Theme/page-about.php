<?php
/*
about: about
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

<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!-- banner-->	
<?php get_template_part( 'template-parts/banner'); ?>

<!-- bigblocks-->
<?php get_template_part( 'template-parts/big-blocks'); ?>



	<!-- 	<?php $meta_value = get_post_meta($post->ID, 'banner', true);
		if (!empty($meta_value)) {
			echo '<p>'.$meta_value . '</p>';
		}

		?> -->

<!-- quote-banner-->
<?php get_template_part( 'template-parts/quote-banner'); ?>


 <!-- #content-block-->
<?php get_template_part( 'template-parts/content-block'); ?>

 <!-- #message-block-->
<?php get_template_part( 'template-parts/message-block'); ?>

 <!-- #team-block-->
<?php get_template_part( 'template-parts/team-block'); ?>



<!-------------- #call to action---------->
		<?php get_template_part( 'template-parts/call-to-action'); ?>
<!--------------  ------------ ---------->


		</main><!-- #main -->
	</div><!-- #primary -->


 <script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/script-about.js' ?>"></script>  


<?php

get_footer();
