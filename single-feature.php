<?php 
/*
  Template Name: Feature
*/
 ?>

<?php get_header('feature'); ?>
<div class="single-container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="feature-hero">
	<div class="container-fluid longform feature-page">
			<div  id="Intro" class="col-sm-12 feature-lead">
				<h1><?php the_title(); ?></h1>
				<p class="lead"><?php the_field('feature_tagline'); ?></p>
				<small>Posted by <a href="<?php the_field('feature_source'); ?>"><?php the_field('feature_author'); ?></a> on <?php the_date(); ?></small>
				<a href="#Part1" class="read-more">Read On</a>
				<ul id="scene">
				  <li class="layer" data-depth="0.00"><img src="<?php the_field('parallax_layer_1'); ?>"></li>
				  <li class="layer" data-depth="0.20"><img src="<?php the_field('parallax_layer_2'); ?>"></li>
				  <li class="layer" data-depth="0.40"><img src="<?php the_field('parallax_layer_3'); ?>"></li>
				  <li class="layer" data-depth="0.60"><img src="<?php the_field('parallax_layer_4'); ?>"></li>
				</ul>
			</div>
	</div>
</div><!-- end feature-hero-->
<div id="Part1" class="feature-section feature-part-1 longform"><div class="container-fluid"><?php the_field('part_1'); ?><a href="#Part2" class="block-link-center"><i class="fa fa-chevron-circle-down"></i></a></div></div>
<div id="Part2" class="feature-section feature-part-2 longform"><div class="container-fluid"><?php the_field('part_2'); ?><a href="#Part3" class="block-link-center"><i class="fa fa-chevron-circle-down"></i></a></div></div>
<div id="Part3" class="feature-section feature-part-3 longform"><div class="container-fluid feature-interview"><?php the_field('part_3'); ?><a href="#Part4" class="block-link-center"><i class="fa fa-chevron-circle-down"></i></a></div></div>
<div id="Part4" class="feature-section feature-part-4 longform"><div class="container-fluid"><?php the_field('part_4'); ?><a href="#Part5" class="block-link-center"><i class="fa fa-chevron-circle-down"></i></a></div></div>
<div id="Part5" class="feature-section feature-part-5 longform"><div class="container-fluid"><?php the_field('part_5'); ?><a href="#Intro" class="block-link-center"><i class="fa fa-chevron-circle-up"></i></a></div></div>

<?php endwhile; endif;  ?>
<nav class="nav nav-pills nav-stacked inner-page-nav" data-spy="affix">
	<ul>
		<li><a href="#Part1"><i class="fa fa-fw fa-circle" sr-only="Part 1"></i></a></li>
		<li><a href="#Part2"><i class="fa fa-fw fa-circle" sr-only="Part 2"></i></a></li>
		<li><a href="#Part3"><i class="fa fa-fw fa-circle" sr-only="Part 3"></i></a></li>
		<li><a href="#Part4"><i class="fa fa-fw fa-circle" sr-only="Part 4"></i></a></li>
		<li><a href="#Part5"><i class="fa fa-fw fa-circle" sr-only="Part 5"></i></a></li>
	</ul>
</nav>
<script>
	var $ =jQuery.noConflict();
	$('body').scrollspy({ target: '.inner-page-nav' });
	var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);
</script>
</div>
<?php get_footer(); ?>