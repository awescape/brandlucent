<?php
/*
thank you: thank you
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



 <section class="pi-section">


 <div id="project-inquiry" class="project-inquiry">

	<div class="form-header">

		<p class="logo logo-form">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php if ( is_front_page() && is_home() ) : ?>
					<img class="menu-activated" src="wp-content/uploads/2017/10/Brandlucent-Logo-White.png">

			</a>
				<?php else : ?>
					<img class="menu-activated" src="../wp-content/uploads/2017/10/Brandlucent-Logo-White.png">
			</a>
				<?php endif; ?>
		</p>

	<h2 id="form-close-1" class="form-close ">inquiry 
		<span id="form-close" class="xclose">
			<a href="<?php echo get_field('close_link') ;?>">X
			</a>
		</span>
	</h2>
	
	<h2 id="back-button-1" class="form-close hidden">back 
	</h2>
		
	</div>

	<div class="form-grid"></div>

	<div id="form-page-3" class="form-page form-page-3">
		<div class="form-title-wrapper">
			<h1>Fantastic!</h1>

			<p class="form-text">Thank you for your interest in working with Brandlucent. We will be in touch shortly.</p>
			<p class="form-text">While you are waiting to hear from us, here are a few things you might find interesting</p>

			<div class="underline-link-wrapper">
				<a class="underline-link" href="<?php echo get_template_directory_uri() . '../../../../about/' ?>"><h2>Learn about our vision and values</h2></a>

				<a class="underline-link" href="<?php echo get_template_directory_uri() . '../../../../team/' ?>"><h2>Meet the Brandlucent team</h2></a>

				<a class="underline-link" href="<?php echo get_template_directory_uri() . '../../../../' ?>"><h2>Return to homepage</h2></a>
			</div>


		</div>












	</div>

</section>	


 <script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/script-pi.js' ?>"></script>  
 



		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
