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
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
				<?php if (	$query->have_posts()	) : while (	$query->have_posts()	) : $query->the_post(); ?>
				<div class="col-sm-4 review-snippet">
					<h4 class="snippet-title"><?php the_title(); ?></h4>
					<a href="<?php the_permalink(); ?>" class="review-link">
						<?php the_post_thumbnail('large', array( 'class' => 'review-snippet-img' ) ); ?>
						<p class="review-snippet-rating"><?php the_field('review_rating') ?></p>
					</a>
					<p class="review-snippet-content"><?php echo strip_tags( get_the_excerpt()	); ?></p>
					<!-- <a class="read-more-review" href="<?php the_permalink(); ?>">Read more <i class="fa fa-arrow-right"></i></a> -->
 				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>
<script>
	var $ =jQuery.noConflict();
	$(function() {
    	$('.review-snippet-content').matchHeight();
    	$('.snippet-title').matchHeight();
    	$('.review-snippet a img').matchHeight();
	});
</script>

<?php get_footer(); ?>
