<?php get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2" style="margin-top: 1em;">
			<strong class="sidebar-label"><small>Category</small></strong>
			<span class="label label-default"><?php the_category(', '); ?></span>
			<strong class="sidebar-label"><small>Tags</small> </strong>
			<span class="text-capitalize">
				<?php the_tags('<span class="label label-default">','</span> <span class="label label-default">','</span>'); ?>
			</span>
		</div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-sm-10 longform">
				<a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
				<small>Posted by <a href="<?php the_field('column_attribution'); ?>"><?php the_field('column_author'); ?></a> on <?php the_date(); ?></small>
				<?php the_content(); ?>
			</div>
			<div class="col-sm-12">
				<?php comments_template(); ?>
			</div>
	</div>
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</div>
<script>
	var $ =jQuery.noConflict();
</script>
<?php get_footer(); ?>