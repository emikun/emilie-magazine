<?php 
/*
	Template Name: Forum
*/
 ?>

<?php get_header(); ?>
<div class="container-fluid pagetop-margin">
	<div class="row body-content">
		<p><a href="<?php get_site_url(); ?>">Glitch</a> &raquo; <a href="<?php get_site_url(); ?>/shop"><strong>Forum</strong></a></p>	
		<small class="text-uppercase">General</small>
		<div class="col-lg-12">
			<div class="col-xs-1">
				
			</div>
			<div class="col-xs-10 col-xs-offset-1">
				<a href="">Forum Thread</a>
			</div>
		</div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>