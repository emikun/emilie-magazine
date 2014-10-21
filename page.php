<?php 
/*
	Template Name: Page
*/
 ?>

<?php get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<h1>Index</h1>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>