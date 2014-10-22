<?php 
/*
	Template Name:  Reviews
*/
 ?>

<?php get_header(); ?>

<?php 
	$args = array(
		'post_type' => 'review'
	);
	$query = new WP_Query(	$args	);
 ?>

<div class="container-fluid">
	<h1><?php the_title(); ?></h1>
	<div class="row">
		<div class="col-md-2 filter-reviews">
			<h4>Filter Reviews</h4>
		</div>
		<div class="col-md-10">
			<div class="row">
				<?php if (	$query->have_posts()	) : while (	$query->have_posts()	) : $query->the_post(); ?>
				<div class="col-md-4 review-snippet">
					<h4 class="snippet-title"><?php the_title(); ?></h4>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
					<p><?php echo strip_tags( get_the_excerpt()	); ?></p>
					<a class="read-more-review" href="<?php the_permalink(); ?>">Read more <i class="fa fa-arrow-right"></i></a>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
