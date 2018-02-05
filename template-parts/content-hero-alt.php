<?php
/**
 * Template part for displaying alternate hero content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LCR,_Inc.
 */

?>

		<!-- HEADER
		=============================================================================== -->
		<header class="site-header alt-page" role="banner">

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
							</h1><a class="navbar-brand" href="http://localhost/lcrinc/">LCR, inc</a></h1>
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
		<section class="alt-page-default" id="hero" data-type="background" data-speed="3">			
		</section>

