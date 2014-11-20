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
		<div class="col-sm-3 review-sidebar">
			 <div class="review-details">
			 	<h5 class="review-sidebar-title"><!-- Review Details --></h5>
				<dl>
					<dd class="review-rating" value="<?php the_field('review_rating') ?>"><?php the_field('review_rating') ?></dd>
					<dt><small>Glitch Score</small></dt>
					<dd><?php the_field('review_release_date'); ?></dd>
					<dt><small>Release Date</small></dt>
					<dd><?php the_field('review_platform'); ?></dd>
					<dt><small>Platform</small></dt>
					<dd><?php the_field('review_developer_name'); ?></dd>
					<dt><small>Developer</small></dt>
					<dd><?php the_field('review_publisher_name'); ?></dd>
					<dt><small>Publisher</small></dt>
				</dl>
			</div>
			<div class="review-game-cover">
				<h5 class="review-sidebar-title"><i class="fa fa-shopping-cart"></i> Purchase</h5>
				<img class="image-cover" src="<?php the_field('review_game_cover');?>" alt="<?php the_title(); ?> Cover">
			</div>
		</div>
		<div class="col-sm-9 review-content">
			<h1><a href="<?php bloginfo('url'); ?>/review" class="heading-copy">Review:</a> <?php the_title(); ?></h1>
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
<script>
	$(document).ready(function(){
		$('dd[value|="8"], dd[value|="8.5"], dd[value|="9"], dd[value|="9.5"], dd[value|="10"]').css('background-color','#8EC94B');
		$('dd[value|="1"], dd[value|="1.5"], p[value|="2"], dd[value|="2.5"], dd[value|="3"], dd[value|="3.5"], dd[value|="4"], dd[value|="4.5"]').css('background-color','red');
	})
</script>
<?php get_footer(); ?>