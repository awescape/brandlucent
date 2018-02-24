<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package brandlucent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<!-- blog banner -->
	<section class="blog-banner"  style="background-image: url('<?php echo get_field('blog_banner_background_image') ;?>');">
			
		<h3 class="blog-banner-title">
			<?php echo get_field('blog_banner_title') ;?>
		</h3>

		<p class="blog-banner-text">
			<?php echo get_field('blog_banner_text') ;?>
		</p>
	
	</section>

<!-- blog content -->
	<section class="blog-content">

		<h2>Blog paragraph title</h2>

		<p>Blog content blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah</p>
		
		<h2>Blog paragraph title</h2>

		<p>Blog content blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah</p>

		<h2>Blog paragraph title</h2>

		<p>Blog content blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah</p>
		
		<h2>Blog paragraph title</h2>

		<p>Blog content blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah</p>

		<p>blog author</p>
		<p>post date</p>
	
	</section>

	<section class="social-media">
			<p>facebook</p>
			<p>twitter</p>
			<p>linkedin</p>
	</section>

<!-- other-blogs section -->
	<section class="other-blogs">
		<h1>You might also like...</h1>

	    <div class="other-blogs-wrapper">
		    <?php while( have_rows('other_blog_block') ): the_row(); ?>
		    	<a  href="<?php echo get_sub_field('other_blog_link') ;?>">
				    <div class="other-blog" style="background-image: url( <?php echo get_sub_field('other_blog_background_image');?> );">
			 			<h2 class="other-blog-title hideme"> <?php echo get_sub_field('other_blog_title') ;?> 
			 			</h2>
				    </div>
				</a>
		    <?php endwhile; ?>
	    </div>
	</section>


	<!-------------- #call to action---------->
		<?php get_template_part( 'template-parts/call-to-action'); ?>
<!--------------  ------------ ---------->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
