<?php 
/*
	Template Name: Home
*/
 ?>

<?php get_header(); ?>

<h1>Index</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<p><?php the_content(); ?></p>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>