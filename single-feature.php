<?php 
/*
  Template Name: Feature
*/
 ?>

<?php get_header('feature'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<img class="review-hero" src="<?php the_field('review_hero_image'); ?>" alt="<?php the_field('review_hero_image_alt'); ?>">
<div class="feature-hero">
	<div class="container-fluid longform">
		<div class="row feature-page">
			<div class="col-sm-12 feature-lead">
				<h1><?php the_title(); ?></h1>
				<p class="lead"><?php the_field('feature_tagline'); ?></p>
				<small>Posted by <a href="<?php the_field('feature_source'); ?>"><?php the_field('feature_author'); ?></a> on <?php the_date(); ?></small>
			</div>
		</div>
	</div>
</div>
<?php the_field('part_1'); ?>
<?php the_field('part_2'); ?>
<?php the_field('part_3'); ?>
<?php the_field('part_4'); ?>
<?php the_field('part_5'); ?>

<?php endwhile; endif;  ?>
<script>
	jQuery(document).ready(function($) {
		$(window).resize(function() {
	   	 	$('feature-hero').height($(window).height());
		}).resize();
	});
</script>
<?php get_footer(); ?>