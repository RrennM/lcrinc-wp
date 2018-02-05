<?php
/**
 * Template part for displaying main hero contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LCR,_Inc.
 */

// Hero section
$hero_title					= get_field( 'hero_title' );
$hero_motto					= get_field( 'hero_motto' );

?>

<!-- HEADER
	=============================================================================== -->
	<header class="site-header" role="banner">

		<!-- NAV
		=============================================================================== -->
		<div class="navbar-wrapper">
			<div class="navbar navbar-inverse" id="navbar" role="navigation">
				<div class="container">
					<div class=" navbar-header col-sm-3">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button> <!-- navbar-toggle -->
						</h1><a class="navbar-brand" href="#">LCR, inc</a></h1>
					</div> <!-- .navbar-header -->

					<!-- if the menu (WP admin area) is not set, then the "menu-class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/Supportrt/topic/wp_nav_menu-men_class-usage_bug?replies=4 -->

					<?php
						wp_nav_menu( array(

							'theme_location'		=> 'menu-1',
							'container'					=> 'nav',
							'container_class'		=> 'navbar-collapse collapse',
							'menu_class'				=> 'nav navbar-nav navbar-right',
							'menu_id' 					=> 'nav-links'

						));
					?>

				</div> <!-- .container -->
			</div> <!-- .navbar -->	
	  </div> <!-- .container -->
	</header> <!-- .site-header -->

<!-- HERO
=============================================================================== -->
<section id="hero" data-type="background" data-speed="3">
	<div id="header-wrap">
		<h1 id="hero-title"><?php echo $hero_title ?></h1>
		<p id="hero-motto"><?php echo $hero_motto ?></p>
	</div> <!-- #header-wrap -->
</section>
