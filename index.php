<?php 
/*
  Template Name: Blog Index
*/
 ?>
<?php get_header(); ?>

<div class="container-fluid pagetop-margin">
	<div class="col-sm-12">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="row article-single">
				<div class="col-sm-4" class="placehold-thing" style="height:200px;background-image: url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>);background-size:cover;">
				</div>
				<div class="col-sm-8">
					<span class="label label-primary category-label"><?php the_category(', '); ?></span>
					<a href="<?php the_permalink(); ?>" style="color:#2E2F43;"><h3><?php the_title(); ?></h3></a>
					<span class="text-capitalize"><?php the_tags('<span class="label label-default">','</span> <span class="label label-default">','</span>'); ?></span>
					<p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Read More</a></p>
				</div>
			</div>
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
<!-- 	<div class="col-sm-2">
		<h5>Filters</h5>
	</div> -->
</div>
<?php get_footer(); ?>