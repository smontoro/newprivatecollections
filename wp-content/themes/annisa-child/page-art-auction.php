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

<?php while ( have_posts() ) : the_post();?>

	<section class="auction-intro">
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
	</section>

<?php echo do_shortcode("[gs_pinterest]"); ?>









	<?php endwhile; ?>
	<php wp_reset_query(); ?>




<?php get_footer(); ?>
