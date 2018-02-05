<?php
/**
 * Template name: Home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LCR,_Inc.
 */

get_header();
?>

	<?php get_template_part( 'template-parts/content', 'hero-main' ); ?>

	<?php get_template_part( 'template-parts/content', 'contactstripe' ); ?>

	<!-- MAIN
	=============================================================================== -->
	<main>
		
		<?php get_template_part( 'template-parts/content', 'refill' ); ?>

		<?php get_template_part( 'template-parts/content', 'bio' ); ?>

		<?php get_template_part( 'template-parts/content', 'moreinfo' ); ?>

	</main>

<?php get_footer(); ?>