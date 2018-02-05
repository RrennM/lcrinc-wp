<?php
/**
 * Template name: About page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LCR,_Inc.
 */

// About Variables
$about_title		= get_field( 'about_title' );
$about_image		= get_field( 'about_image' );
$about_body			= get_field( 'about_body' );
$flag_image			= get_field( 'flag_image' );
$proud_caption	= get_field( 'proud_caption' );

// Fun Facts section
$fun_title			= get_field( 'fun_title' );
$fun_button			= get_field( 'fun_button' );


get_header();
?>
			
	<?php get_template_part( 'template-parts/content', 'hero-alt' ) ?>

	<main>

		<!-- ABOUT
		=============================================================================== -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 lead">
						<h2><?php echo $about_title ?></h2>
					</div> <!-- .lead -->
					<img src="<?php echo $about_image['url'] ?>">
					<div class="col-xs-12">
						<p><?php echo $about_body ?></p>
						<hr>
						<div id="flag">
							<img src="<?php echo $flag_image['url'] ?>">
							<p><?php echo $proud_caption ?></p>
						</div> <!-- #flag -->
					</div>	<!-- end col -->
				</div> <!-- .row -->
			</div> <!-- .container -->
			</section> <!-- #bio -->

			
			<!-- FUN FACTS
			=============================================================================== -->
			<section id="funfacts">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-sm-offset-3 fact-container">
							<h3><?php echo $fun_title ?></h3>
							<a class="btn btn-success btn-lg" href="why.html"><?php echo $fun_button ?></a>
						</div> <!-- .fact-container -->
					</div> <!-- .row -->
				</div> <!-- .container -->
			</section> <!-- #facts -->
			
	<?php get_template_part( 'template-parts/content', 'moreinfo' ) ?>

		</main>


<?php get_footer(); ?>