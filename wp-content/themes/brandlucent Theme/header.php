<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brandlucent
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Google fonts link -->
<!-- 	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Playfair+Display:400,400i|Raleway|Varela+Round" rel="stylesheet"> -->
<!-- To-Do: minimize the fonts loaded-->

<!-- <link rel="stylesheet"
  href="../wp-content/themes/brandlucent Theme/animate.css">
 -->

<!-- FontAwesome -->
	<!-- <script src="https://use.fontawesome.com/9eac949f36.js"></script> -->


<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>

<div id="wptime-plugin-preloader"></div>
	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'brandlucent' ); ?></a>



	<header id="masthead" class="site-header" role="banner">
	<div id="menu-open" class="menu-open">	
		<p class="logo">

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="menu-activated" src="<?php echo get_template_directory_uri() . '../../../../wp-content/uploads/2017/07/FinalLogoIconOnly.png' ?>">
			</a>

		</p>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'brandlucent' ); ?>
			</button>

			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</div>
	</header><!-- #masthead -->

			<div class="menu-closed">	
				<p class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						
						<img class="menu-deactivated" src="<?php echo get_template_directory_uri() . '../../../../wp-content/uploads/2017/06/FinalLogoLongVersion.png' ?>">
					</a>
				</p>
				<div class="toggle-menu" id="toggle-menu">
					<h6 id="toggle-menu-menu" class="toggle-menu-menu">menu</h6>
<!-- 					<h6 id="toggle-menu-close" class="toggle-menu-close">close</h6> -->
						<div id="nav-icon3">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</div>
				</div>
			</div>

	<div id="content" class="site-content">
