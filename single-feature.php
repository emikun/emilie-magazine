<?php 
/*
  Template Name: Feature
*/
 ?>

<?php get_header('feature'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="feature-hero">
	<div class="container-fluid longform">
		<div class="feature-page">
			<div class="col-sm-12 feature-lead">
				<h1><?php the_title(); ?></h1>
				<p class="lead"><?php the_field('feature_tagline'); ?></p>
				<small>Posted by <a href="<?php the_field('feature_source'); ?>"><?php the_field('feature_author'); ?></a> on <?php the_date(); ?></small>
				<a href="#Part1" class="read-more">Read On</a>
			</div>
		</div>
	</div>
</div>

<div id="Part1" class="feature-part-1 longform"><div class="container-fluid"><?php the_field('part_1'); ?></div></div>
<div id="Part2" class="feature-part-2 longform"><div class="container-fluid"><?php the_field('part_2'); ?></div></div>
<div id="Part3" class="feature-part-3 longform"><div class="container-fluid"><?php the_field('part_3'); ?></div></div>
<div id="Part4" class="feature-part-4 longform"><div class="container-fluid"><?php the_field('part_4'); ?></div></div>
<div id="Part5" class="feature-part-5 longform"><div class="container-fluid"><?php the_field('part_5'); ?></div></div>

<?php endwhile; endif;  ?>

<?php get_footer(); ?>