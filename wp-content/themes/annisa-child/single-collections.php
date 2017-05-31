<body>
<?php
/**
 * The template for displaying collections.
 *
 * @package 
 */

get_header(); ?>

<section class="collections">

<?php if ( have_posts()): ?>

			<?php while ( have_posts() ) : the_post();
		$collection_title_1 = get_field('collection_title_1');
		$collection_location_1 = get_field('collection_location_1');
		$collection_genre_1 = get_field('collection_genre_1');
		$collection_description_1 = get_field('collection_description_1');
		$collection_title_2 = get_field('collection_title_2');
		$collection_location_2 = get_field('collection_location_2');
		$collection_genre_2 = get_field('collection_genre_2');
		$collection_description_2= get_field('collection_description_2');
		$collection_title_3 = get_field('collection_title_3');
		$collection_location_3 = get_field('collection_location_3');
		$collection_genre_3 = get_field('collection_genre_3');
		$collection_description_3 = get_field('collection_description_3');
		$collection_title_4 = get_field('collection_title_4');
		$collection_location_4 = get_field('collection_location_4');
		$collection_genre_4 = get_field('collection_genre_4');
		$collection_description_4 = get_field('collection_description_4');
		$collection_title_5 = get_field('collection_title_5');
		$collection_location_5 = get_field('collection_location_5');
		$collection_genre_5 = get_field('collection_genre_5');
		$collection_description_5 = get_field('collection_description_5');
		$collection_title_6 = get_field('collection_title_6');
		$collection_location_6 = get_field('collection_location_6');
		$collection_genre_6 = get_field('collection_genre_6');
		$collection_description_6 = get_field('collection_description_6');
		$collection_title_7 = get_field('collection_title_7');
		$collection_location_7 = get_field('collection_location_7');
		$collection_genre_7 = get_field('collection_genre_7');
		$collection_description_7 = get_field('collection_description_7');
		$collection_title_8 = get_field('collection_title_8');
		$collection_location_8 = get_field('collection_location_8');
		$collection_genre_8 = get_field('collection_genre_8');
		$collection_description_8 = get_field('collection_description_8');
		$collection_title_9 = get_field('collection_title_9');
		$collection_location_9 = get_field('collection_location_9');
		$collection_genre_9 = get_field('collection_genre_9');
		$collection_description_9 = get_field('collection_description_9');
		$collection_title_10 = get_field('collection_title_10');
		$collection_location_10 = get_field('collection_location_10');
		$collection_genre_10 = get_field('collection_genre_10');
		$collection_description_10 = get_field('collection_description_10');
		$collection_title_11 = get_field('collection_title_11');
		$collection_location_11 = get_field('collection_location_11');
		$collection_genre_11 = get_field('collection_genre_11');
		$collection_description_11 = get_field('collection_description_11');
	?>


<div>
		

		<section class="collections-intro">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo the_content(); ?></p>		
		</section>

		<section class="collection">
			<h4><?php echo $collection_title_1; ?></h4>
			<h6><?php echo $collection_location_1; ?></h6>
			<h5><?php echo $collection_genre_1; ?></h5>
			<p><?php echo $collection_description_1; ?></p>
		</section>

		<section class="collection">
			<h4><?php echo $collection_title_2; ?></h4>
			<h6><?php echo $collection_location_2; ?></h6>
			<h5><?php echo $collection_genre_2; ?></h5>
			<p><?php echo $collection_description_2; ?></p>
	
		</section>

		<section class="collection">
			<h4><?php echo $collection_title_3; ?></h4>
			<h6><?php echo $collection_location_3; ?></h6>
			<h5><?php echo $collection_genre_3; ?></h5>
			<p><?php echo $collection_description_3; ?></p>
		</section>

		<section class="collection">
			<h4><?php echo $collection_title_4; ?></h4>
			<h6><?php echo $collection_location_4; ?></h6>
			<h5><?php echo $collection_genre_4; ?></h5>
			<p><?php echo $collection_description_4; ?></p>
		</section>

		<section class="collection">
			<h4><?php echo $collection_title_5; ?></h4>
			<h6><?php echo $collection_location_5; ?></h6>
			<h5><?php echo $collection_genre_5; ?></h5>
			<p><?php echo $collection_description_5; ?></p>
		</section>

		<section class="collection">
			<h4><?php echo $collection_title_6; ?></h4>
			<h6><?php echo $collection_location_6; ?></h6>
			<h5><?php echo $collection_genre_6; ?></h5>
			<p><?php echo $collection_description_6; ?></p>
		</section>

		<section class="collection">
			<h4><?php echo $collection_title_7; ?></h4>
			<h6><?php echo $collection_location_7; ?></h6>
			<h5><?php echo $collection_genre_7; ?></h5>
			<p><?php echo $collection_description_7; ?></p>
		</section>

		<section class="collection">
			<h4><?php echo $collection_title_8; ?></h4>
			<h6><?php echo $collection_location_8; ?></h6>
			<h5><?php echo $collection_genre_8; ?></h5>
			<p><?php echo $collection_description_8; ?></p>
		</section>

		<section class="collection">
			<h4><?php echo $collection_title_9; ?></h4>
			<h6><?php echo $collection_location_9; ?></h6>
			<h5><?php echo $collection_genre_9; ?></h5>
			<p><?php echo $collection_description_9; ?></p>
		</section>

		<section class="collection">
			<h4><?php echo $collection_title_10; ?></h4>
			<h6><?php echo $collection_location_10; ?></h6>
			<h5><?php echo $collection_genre_10; ?></h5>
			<p><?php echo $collection_description_10; ?></p>
		</section>

		<section class="collection-last">
			<h4><?php echo $collection_title_11; ?></h4>
			<h6><?php echo $collection_location_11; ?></h6>
			<h5><?php echo $collection_genre_11; ?></h5>
			<p><?php echo $collection_description_11; ?></p>
		</section>

</section>

<?php endwhile; ?>

<?php endif; ?>
	<php wp_reset_query(); ?>

	
</body>

<?php get_footer();
