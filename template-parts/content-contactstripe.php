<?php
/**
 * Template part for displaying contact stripe content in page-home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LCR,_Inc.
 */

// Contact Stripe
$contact_stripe_text		=	get_field( 'contact_stripe_text' );
$contact_stripe_button	=	get_field( 'contact_stripe_button' );

?>


<!-- CONTACT STRIPE
=============================================================================== -->
<section id="contact-stripe">
	<div class="container">
		<div class="row">
			<p><?php echo $contact_stripe_text ?><a class="btn btn-lg btn-primary" href="contact.html"><?php echo $contact_stripe_button ?></a></p>
		</div> <!-- .row -->
	</div> <!-- .container -->
</section> <!-- #contact -->
