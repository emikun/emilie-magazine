<?php 
/*
  Template Name: Review
*/
 ?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<img class="review-hero" src="<?php the_field('review_hero_image'); ?>" alt="<?php the_field('review_hero_image_alt'); ?>">
<div class="container-fluid longform">
	<div class="row review-page">
		<div class="col-sm-2 review-details">
			<p class="review-rating"><?php the_field('review_rating') ?></p>
			<dl>
				<dt>Release Date</dt>
				<dd><?php the_field('review_release_date'); ?></dd>
				<dt>Platform</dt>
				<dd><?php the_field('review_platform'); ?></dd>
				<dt>Developer</dt>
				<dd><?php the_field('review_developer_name'); ?></dd>
				<dt>Publisher</dt>
				<dd><?php the_field('review_publisher_name') ?></dd>
			</dl>
		</div>
		<div class="col-sm-10 review-content">
			<h1><?php the_title(); ?></h1>
			<small>Posted by <a href="<?php the_field('review_source'); ?>"><?php the_field('review_author'); ?></a> on <?php the_date(); ?></small>
			<?php the_content(); ?>
		</div>
	</div>
	<div class="row page-links">
		<div class="col-sm-10 col-sm-offset-2">
			<div class="pull-left">
				<?php previous_post_link('<div class="pull-right">%link</div><small class="text-uppercase text-right">Prev Review</small>'); ?>
			</div>
			<div class="pull-right">
				<?php next_post_link('%link<small class="text-uppercase">Next Review</small>'); ?>
			</div>
		</div>
	</div>
</div>
<?php endwhile; endif;  ?>
<?php get_footer(); ?>