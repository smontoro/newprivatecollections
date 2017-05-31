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
	$donate_title= get_field('donate_title');
	$donate_info= get_field('donate_info');
	$ticket_html= get_field('ticket_html');
	?>


	<section class="tickets-intro">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo the_content(); ?></p>
	</section>

	<section class="tickets-html">
			<?php echo $ticket_html; ?>
	</section>


	<section class="donate">

		<div class="donate-left">
			<h1><?php echo $donate_title; ?></h1>
			<p><?php echo $donate_info; ?></p>
			<a class="donate-button" href="http://enterpriseforyouth.org/donate/">Donate</a>
		</div>

		<iframe class="donate-video" width="560" height="315" src="https://www.youtube.com/embed/T4HLfy3NYBo?list=PLXqgINAqvUtznpotMpBFXVq9GP3ZGG3-S" frameborder="0" allowfullscreen></iframe>

	</section>




	<?php endwhile; ?>
	<php wp_reset_query(); ?>




<?php get_footer(); ?>
