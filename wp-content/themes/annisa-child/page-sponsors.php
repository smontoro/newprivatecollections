<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package anissa
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post();
	$contact = get_field('contact');
?>


	<section class="intro-sponsors">
		<div class="intro-sponsors-left">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo the_content(); ?></p>
		</div>

		<div class="intro-sponsors-right">
			<p><?php echo $contact; ?></p>
		</div>
	</section>



	<?php endwhile; ?>
	<php wp_reset_query(); ?>


<?php get_footer(); ?>
