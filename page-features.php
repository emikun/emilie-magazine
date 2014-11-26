<?php 
/*
	Template Name:  Features
*/
 ?>

<?php get_header(); ?>

<?php 
	$args = array(
		'post_type' => 'feature'
	);
	$query = new WP_Query(	$args	);
 ?>

<div class="container-fluid pagetop-margin">
	<div class="row">
			<?php $args = array('post_type' => 'feature',); ?>
			<?php $query = new WP_Query(	$args	);?>
			<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<div class="col-sm-6 home-div">
			<a href="<?php the_permalink(); ?>" class="home-link weird-background gradient-background-1" style="height: 300px; background-image: url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>);">
				<h4 class="home-title" style="font-size: 2em;"><?php the_title(); ?> <span style="font-size:.5em;display:block;"><?php the_field('feature_tagline'); ?></span><small class="home-credit">Posted by <?php the_field('feature_author'); ?> on <div><?php the_time('F j, Y'); ?></div></small></h4>
			</a>
			</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</div>
<?php get_footer(); ?>

