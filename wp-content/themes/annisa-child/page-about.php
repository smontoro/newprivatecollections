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
	$about_enterprise_title= get_field('about_enterprise_title');
	$about_enterprise= get_field('about_enterprise');
?>



	<aide>
		<?php get_sidebar(); ?>
	</aside>


	<section class="about-content">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo the_content(); ?></p>
	</section>

	<section class="about-enterprise">
			<h1><?php echo $about_enterprise_title; ?></h1>
			<p><?php echo $about_enterprise; ?></p>

			<iframe width="560" height="315" src="https://www.youtube.com/embed/hZAdjOz0LSs" frameborder="0" allowfullscreen></iframe>
	</section>

	<?php endwhile; ?>
	<php wp_reset_query(); ?>




<?php get_footer(); ?>
