<?php
/**
 * Template part for displaying refill content in page-home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LCR,_Inc.
 */

// Refill section
$refill_title				= get_field( 'refill_title' );
$refill_image				= get_field( 'refill_image' );



?>


<!-- REFILL
=============================================================================== -->
<section id="refill">
	<div class="container">	
		<div class="row">
			<div class="col-sm-12">
				<h2><?php echo $refill_title ?></h2>
			</div> <!-- end col -->
		</div> <!-- .row -->
		<hr>
		<div class="row">
			<div class="col-sm-6 animation-element slide-left">
				<img src="<?php echo $refill_image['url'] ?>">
			</div> <!-- end col -->
			<div class="col-sm-6">

				<?php $loop = new WP_Query( array( 'post_type' => 'refill_reasons', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post(); 

				$refill_reason = get_field( 'refill_reason' );

				?>

					<p class="animation-element slide-right"><?php echo $refill_reason ?></p>

				<?php endwhile; wp_reset_query(); ?>
			</div> <!-- end col -->
		</div> <!-- .row -->
		<hr>
	</div> <!-- .container -->
</section> <!-- #refill -->