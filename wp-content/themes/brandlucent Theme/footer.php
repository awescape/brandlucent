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
			<div class="footer-item">
				<p class="h1-small">7240 Waverly St, Suite 110G,<p>	
				<p class="h1-small">Montreal, QC H2R 2Y8<p>
					<p><span><br><i class="fa fa-facebook" aria-hidden="true"></i></span><span><i class="fa fa-linkedin" aria-hidden="true"></i></span></p>
			</div>
			<div class="footer-item">
				<p class="h1-small">info@brandlucent.ca<p>
				<p class="h1-small">+1 514 549 0122<p>
				<div class="email-wrapper">
					<form>
						<input id="your-email" type="email" placeholder="Your email">
						
						<div class="subscribe-button">
							<input id="subscribe" type="submit" value="Subscribe"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</div>
					</form>
				</div>
			</div>
			<div class="footer-item">
				<p class="h1-small">© 2017 Brandlucent Inc.<p>
				<p class="h1-small">© 2017 Agence Brandlucent Inc.<p>
			</div>
			<div id="backToTop" class="up-arrow footer-item">
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
