<?php 
/*
  Template Name: Review
*/
 ?>

<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<img src="<?php the_field('review_hero_image'); ?>" alt="<?php the_field('review_hero_image_alt'); ?>">
	</div>
	<div class="row review-content">
		<div class="col-sm-2 review-details"></div>
		<div class="col-sm-10 review-content">
			<h1><?php the_title(); ?></h1>
			<small><a href="<?php the_field('review_source'); ?>"><?php the_field('review_author'); ?></a>, <?php the_date(); ?></small>
		</div>
	</div>
</div>

<?php get_footer(); ?>