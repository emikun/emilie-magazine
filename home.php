<?php 
/*
	Template: Blog Home
*/
?>
<?php get_header(); ?>
<div class="container-fluid">
	<div class="col-sm-9">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-sm-6">
				<a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
				<?php the_post_thumbnail('large', array('class'=> 'img-full')	); ?>
				<p><?php the_excerpt(); ?></p>
				<p>Posted by <?php the_field('column_author'); ?> on <?php the_date(); ?></p>
				<?php the_category(	', '); ?>
				<?php the_tags(); ?>
				</div>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
