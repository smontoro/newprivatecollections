<body>

<?php
/**
 * The template for displaying the homepage
 *
 * @package Anissa
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post();
		$event_info_section = get_field('event_info_section');
		$when_subtitle= get_field('when_subtitle');
		$date= get_field('date');
		$event_date= get_field('event_date');
		$tours= get_field('tours');
		$tour_hours= get_field('tour_hours');
		$post_party= get_field('post_party');
		$post_party_hours= get_field('post_party_hours');
		$tickets_subtitle= get_field('tickets_subtitle');
		$masterpiece= get_field('masterpiece');
		$masterpiece_price= get_field('masterpiece_price');
		$premier= get_field('premier');
		$premier_price= get_field('premier_price');
		$partner_info_section= get_field('partner_info_section');
		$sponsors_year= get_field('sponsors_year');
		$sponsor_logo= get_field('sponsor_logo');
		$cultural_partners_year= get_field('cultural_partners_year');
		$cultural_partners_logo= get_field('cultural_partners_logo');
		$size= "full";
	?>


	<section class="intro">
		<h1><?php echo the_title(); ?></h1>
		<p><?php echo the_content(); ?></p>
		<a class="learn-more-button" href="http://localhost:8888/newprivatecollections/about/">Learn More</a>
	</section>

	<section class="slider">
		<?php echo do_shortcode("[metaslider id=28]"); ?>	
	</section>

	<section class="event-info">
		<h1><?php echo $event_info_section; ?></h1>
			<div class="when">
				<h2><?php echo $when_subtitle; ?></h2>
				<h3><?php echo $date; ?></h3>
				<p><?php echo $event_date; ?></p>
				<h3><?php echo $tours; ?></h3>
				<p><?php echo $tour_hours; ?><p>
				<h3><?php echo $post_party; ?></h3>
				<p><?php echo $post_party_hours; ?></p>
			</div>

			<div class="tickets">
				<h2><?php echo $tickets_subtitle; ?></h2>
				<h3><?php echo $masterpiece; ?></h3>
				<p><?php echo $masterpiece_price; ?></p>
				<h3><?php echo $premier; ?></h3>
				<p><?php echo $premier_price; ?></p> 
				<a class="ticket-button" href="http://localhost:8888/newprivatecollections/tickets/">Purchase Tickets</a>
			</div>
	</section>

	<section class="partners">
		<h1><?php echo $partner_info_section; ?></h1>
			<div class="sponsors">
				<h2><?php echo $sponsors_year; ?></h2>
				<figure><?php echo wp_get_attachment_image ($sponsor_logo, $size); ?></figure>
			</div>

			<div class="cultural-partners">
				<h2><?php echo $cultural_partners_year; ?></h2>
				<figure><?php echo wp_get_attachment_image ($cultural_partners_logo, $size); ?></figure>
			</div>
	</section>






<?php endwhile; ?>
	<php wp_reset_query(); ?>


</body>

<?php get_footer();