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
				<div class="col-sm-4 col-xs-6 review-snippet">
					<a href="<?php the_permalink(); ?>" class="review-link">
						<?php the_post_thumbnail('large', array( 'class' => 'review-snippet-img' ) ); ?>
						<p class="review-snippet-rating" value="<?php the_field('review_rating') ?>"><?php the_field('review_rating') ?></p>
						<h4 class="snippet-title"><?php the_title(); ?></h4>

					</a>
					<p class="review-snippet-content hidden-xs"><?php echo strip_tags( get_the_excerpt()	); ?></p>
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
<script>
	$(document).ready(function(){
		$('p[value|="8"], p[value|="8.5"], p[value|="9"], p[value|="9.5"], p[value|="10"]').css('background-color','#B4FF5F');
		$('p[value|="1"], p[value|="1.5"], p[value|="2"], p[value|="2.5"], p[value|="3"], p[value|="3.5"], p[value|="4"], p[value|="4.5"]').css('background-color','red');

	})
</script>
<?php get_footer(); ?>
