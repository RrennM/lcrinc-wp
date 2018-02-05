<?php
/**
 * Template name: Contact page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LCR,_Inc.
 */

$contact_title			= get_field( 'contact_title' );
$contact_body				= get_field( 'contact_body' );

// More Info section
$business_address		=	get_field( 'business_address' );
$phone_number				=	get_field( 'phone_number' );
$fax_number					=	get_field( 'fax_number' );
$cell_number				=	get_field( 'cell_number' );
$email_address			=	get_field( 'email_address' );

// JIC section
$jic_title			= get_field( 'jic_title' );
$jic_body				= get_field( 'jic_body' );

get_header();
?>
			
	<?php get_template_part( 'template-parts/content', 'hero-alt' ) ?>

		<main>
			<!-- CONTACT
			=============================================================================== -->
			<section id="contact">
				<div class="container">
					<div class="row">
						<h2><?php echo $contact_title ?></h2>
						<p><?php echo $contact_body ?></p>
					</div> <!-- .row -->
					<hr>
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
					<hr>
					<div class="row helpful">
						<h3><?php echo $jic_title ?></h3>
						<p><?php echo $jic_body ?></p>

						<?php  
						$loop = new WP_Query( array( 'post_type' => 'jic', 'orderby' => 'post_id', 'order' => 'ASC' ) );

						while( $loop->have_posts() ) : $loop->the_post();

							$jic_link	= get_field( 'jic_link' );

						?>


							<div class="helpful-link">
								<h4><a href="<?php echo $jic_link ?>"><?php the_title() ?></a></h4>
								<p><?php the_content() ?></p>
							</div>

						<?php endwhile; wp_reset_query(); ?>


					</div> <!-- .row -->
					<hr>
				</div> <!-- .container -->
			</section> <!-- #contact -->
		</main>


<?php get_footer(); ?>