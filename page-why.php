<?php
/**
 * Template name: Why page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LCR,_Inc.
 */

// Why body
$why_title				= get_field( 'why_title' );

// facts vars
$fact_standalone	= get_field( 'fact_standalone' );
$upper_image			= get_field( 'upper_image' );
$upper_fact_1			= get_field( 'upper_fact_1' );
$upper_fact_2			= get_field( 'upper_fact_2' );
$lower_image			= get_field( 'lower_image' );
$lower_fact_1			= get_field( 'lower_fact_1' );
$lower_fact_2			= get_field( 'lower_fact_2' );



get_header();
?>
			
	<?php get_template_part( 'template-parts/content', 'hero-alt' ) ?>

<!-- MAIN
		=============================================================================== -->
		<main>
			<!-- FACTS
			=============================================================================== -->
			<section id="facts">
				<div class="container">
					<div class="row header">
						<div class="col-xs-12 col-md-8 col-md-offset-2 fact-container">
							<h2><?php echo $why_title ?></h2>
						</div> <!-- .fact-container -->
					</div> <!-- .row -->

					<div class="row">
						<div class="col-md-6 animation-element slide-up">
							<img id="img1" src="<?php echo $upper_image['url']; ?>">
						</div> <!-- end col -->
						<div class="col-md-6">
							<p class="animation-element slide-up"><?php echo $upper_fact_1 ?></p>
							<p class="animation-element slide-up"><?php echo $upper_fact_2 ?></p>					
						</div> <!-- end col -->
					</div> <!-- .row -->

					<div class="row standalone">
						<div class="col-xs-12">	
							<p class="animation-element slide-up"><?php echo $fact_standalone ?></p>					
						</div> <!-- end col -->
					</div> <!-- .row -->
						
					<div class="row">
						<div class="col-md-6 animation-element slide-up" id="img2">
							<img src="<?php echo $lower_image['url']; ?>">
						</div>
						<div class="col-md-6">
							<p class="animation-element slide-up"><?php echo $lower_fact_1 ?></p>
							<p class="animation-element slide-up"><?php echo $lower_fact_2 ?></p>						
						</div> <!-- end col -->
					</div> <!-- .row -->
				</div> <!-- .container -->
			</section> <!-- #facts -->
			
	<?php get_template_part( 'template-parts/content', 'moreinfo' ); ?>

		</main>





<?php get_footer(); ?>