<?php get_header(); ?>
<div class="container-fluid">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-sm-12">
				<a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
				<p>Posted by <a href="<?php the_field('column_attribution'); ?>"><?php the_field('column_author'); ?></a> on <?php the_date(); ?></p>
				<?php the_category(	', '); ?>
				<p><?php the_content(); ?></p>
				<p class="text-capitalize"><?php the_tags(''); ?></p>
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
<?php get_footer(); ?>