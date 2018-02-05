<?php
/**
 * Template part for displaying Bio content in page-home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LCR,_Inc.
 */

// Bio section
$bio_title					= get_field( 'bio_title' );
$bio_image					= get_field( 'bio_image' );
$bio_body						= get_field( 'bio_body' );


?>


<!-- BIO
=============================================================================== -->
<section id="bio">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 lead">
				<h2><?php echo $bio_title ?></h2>
			</div> <!-- .lead -->
			<div class="col-xs-12 col-sm-6">
				<img src="<?php echo $bio_image['url'] ?>">
			</div>
			<div class="container col-xs-12 col-sm-6">
				<div class="col-xs-12">
					<p><?php echo $bio_body?></p>
				</div>	<!-- .bio-container -->
			</div>
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- #bio -->