<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brandlucent
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<ul class="footer-wrapper">
			<div>
				<p class="h1-small">3 Place Ville Marie, Suite 400<p>	
				<p class="h1-small">Montreal, QC H3B 2E3<p>
			</div>
			<div>
				<p class="h1-small">info@brandlucent.ca<p>
				<p class="h1-small">+1 514 549 0122<p>
			</div>
			<div>
				<p class="h1-small">© 2017 Brandlucent Inc.<p>
				<p class="h1-small">© 2017 Agence Brandlucent Inc.<p>
			</div>
			<div id="backToTop" class="up-arrow">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</div>
		</ul>


	<!--------------------------------------- 
		Wordpress Default Footer - NOT NEEDED 
		---------------------------------------->
		<!-- <div class="site-info">


		
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'brandlucent' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'brandlucent' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'brandlucent' ), 'brandlucent', '<a href="https://automattic.com/">Underscores.me</a>' );
			?>
		</div> --><!-- .site-info -->

<!--------------------------------------- 
		 NOT NEEDED 
		---------------------------------------->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
	<!-- Javascript link -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<!-- 			<script type="text/javascript" src="wp-content/themes/brandlucent theme/js/script.js"></script> -->

      
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/script.js' ?>"></script> 

</body>
</html>
