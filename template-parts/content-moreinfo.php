<?php
/**
 * Template part for displaying moreinfo content in page-home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LCR,_Inc.
 */

// More Info section
$more_info_title		=	get_field( 'more_info_title' );
$business_address		=	get_field( 'business_address' );
$phone_number				=	get_field( 'phone_number' );
$fax_number					=	get_field( 'fax_number' );
$cell_number				=	get_field( 'cell_number' );
$email_address			=	get_field( 'email_address' );


?>


<!-- MORE INFO
=============================================================================== -->
<section id="moreinfo">
	<div class="container">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
				<h4><?php echo $more_info_title ?></h4>
				<div class="row contact-info">
					<div class="col-sm-4">
						<h4><small>Our business office:</small></h4>
						<h4><?php echo $business_address ?></h4>
					</div> <!-- .col -->
					<div class="col-sm-4">
						<h4><small>Phone: </small><?php echo $phone_number ?></h4>
						<h4><small>Fax: </small><?php echo $fax_number ?></h4>
						<h4><small>Cell: </small><?php echo $cell_number ?></h4>
					</div> <!-- .col -->
					<div class="col-sm-4">
						<h4><small>E-mail: </small></h4>
						<h4><?php echo $email_address ?></h4>
					</div> <!-- .col -->
				</div> <!-- .row -->
			</div>
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- #moreinfo -->