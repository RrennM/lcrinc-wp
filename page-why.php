<?php
/**
 * Template name: Why page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LCR,_Inc.
 */


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
							<h2>Why is it so important to refill and reuse your printer cartridges?</h2>
						</div> <!-- .fact-container -->
					</div> <!-- .row -->

					<div class="row">
						<div class="col-md-6 animation-element slide-up">
							<img id="img1" src="assets/img/cart-recycle.jpg">
						</div> <!-- end col -->
						<div class="col-md-6">
							<p class="animation-element slide-up">Of the 400 mil+ cartridges thrown out every year, only around 30% are recycled.</p>
							<p class="animation-element slide-up">This means about 8-10 cartridges are thrown away <strong><em>every second</em></strong>.</p>					
						</div> <!-- end col -->
					</div> <!-- .row -->

					<div class="row standalone">
						<div class="col-xs-12">	
							<p class="animation-element slide-up">Research shows, it could take up to 1,000 years for a printer cartridge to fully decompose</p>					
						</div> <!-- end col -->
					</div> <!-- .row -->
						
					<div class="row">
						<div class="col-md-6 animation-element slide-up" id="img2">
							<img src="assets/img/oil-barrels.jpg">
						</div>
						<div class="col-md-6">
							<p class="animation-element slide-up">If we were to recycle all cartridges, we could save up to 12 million gallongs of oil per year.</p>
							<p class="animation-element slide-up">Depending on the cartridge, some can be refilled and reused <br/><strong>up to 15 times!</p>						
						</div> <!-- end col -->
					</div> <!-- .row -->
				</div> <!-- .container -->
			</section> <!-- #facts -->
			
	<?php get_template_part( 'template-parts/content', 'moreinfo' ); ?>

		</main>





<?php get_footer(); ?>