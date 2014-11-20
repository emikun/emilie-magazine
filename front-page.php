<?php 
/*
  Template Name: Home
*/
 ?>

<?php get_header(); ?>
<div class="container-fluid">
<div class="row">
	<div class="col-sm-8 home-div">
		<small class="home-labels">Featured</small>
		<?php $args = array('posts_per_page' => 1, 'post_type' => 'feature',); ?>
		<?php $query = new WP_Query(	$args	);?>
		<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="home-link weird-background gradient-background-1" style="height: 300px; background-image: url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>);">
					<h4 class="home-title" style="font-size: 2em;"><?php the_title(); ?> – <?php the_field('feature_tagline'); ?></h4>
				</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
	<div class="col-sm-4 home-div">
		<small class="home-labels">Emerging Stories</small>
		<?php $args = array('posts_per_page' => 2, 'post_type' => 'post', 'category_name' => 'emerging'); ?>
		<?php $query = new WP_Query(	$args	);?>
			<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<div class="col-sm-12 emerging-well">
				<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>	
				<small class="emerging-comments"><i class="fa fa-comment"></i> Comment</small>	
			</div>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</div><!-- end row (newest features) -->
<div class="row">
	<div class="col-sm-4 col-xs-6 home-div">
		<small class="home-labels">Opinion</small>
		<?php $args = array('posts_per_page'=>1, 'category_name'=>'opinion', 'post_type'=>'post', 'offset'=>'1') ?>
		<?php $query = new WP_Query(	$args	); ?>
		<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<a href="<?php the_permalink(); ?>" class="home-link weird-background gradient-background-1" style="height: 200px; background-image: url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>);">
			<h4 class="home-title"><?php the_title(); ?></h4>
			</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
	<div class="col-sm-4 col-xs-6 home-div">
		<small class="home-labels">Mobile News</small>
		<?php $args = array('posts_per_page'=>1, 'category_name'=>'mobile', 'post_type'=>'post') ?>
		<?php $query = new WP_Query(	$args	); ?>
		<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<a href="<?php the_permalink(); ?>" class="home-link weird-background gradient-background-2" style="height: 200px; background-image: url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>);">
				<h4 class="home-title"><?php the_title(); ?></h4>
			</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
	<div class="col-sm-4 col-xs-12 home-div">
		<small class="home-labels">Sci-Fi</small>
		<?php $args = array('posts_per_page'=>1, 'category_name'=>'sci-fi', 'post_type'=>'post') ?>
		<?php $query = new WP_Query(	$args	); ?>
		<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<a href="<?php the_permalink(); ?>" class="home-link weird-background gradient-background-3" style="height: 200px; background-image: url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>);">
				<h4 class="home-title"><?php the_title(); ?></h4>
			</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</div><!-- end row trending posts -->
<div class="row">
	<div class="col-xs-12" style="padding-bottom: 0;">
		<small class="home-labels">Reviews</small>
	</div>
	<?php $args = array('posts_per_page'=>2, 'post_type'=>'review'); ?>
	<?php $query = new WP_Query(	$args	); ?>
	<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
	<div class="col-sm-6 home-div">
			<a href="<?php the_permalink(); ?>" class="home-link weird-background gradient-background-5" style="height: 300px; background-image: url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>);">
			<h4 class="home-title"><?php the_title(); ?></h4>
		</a>
	</div>	
	<?php endwhile; endif; wp_reset_postdata(); ?>
</div><!-- end row featured reviews -->
<div class="row">
	<!-- Newest Opinion -->
	<div class="col-sm-4 col-xs-6 home-div">
		<small class="home-labels">Trending Opinion</small>
		<?php $args = array('posts_per_page'=>1, 'category_name'=>'opinion', 'post_type'=>'post') ?>
		<?php $query = new WP_Query(	$args	); ?>
		<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<a href="<?php the_permalink(); ?>" class="home-link weird-background gradient-background-2" style="height: 200px; background-image: url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>);">
				<h4 class="home-title"><?php the_title(); ?></h4>
			</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
	<!-- Newest Culture Piece -->
	<div class="col-sm-4 col-xs-6 home-div">
		<small class="home-labels">Trending Culture</small>
		<?php $args = array('posts_per_page'=>1, 'category_name'=>'culture', 'post_type'=>'post') ?>
		<?php $query = new WP_Query(	$args	); ?>
		<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<a href="<?php the_permalink(); ?>" class="home-link weird-background gradient-background-3" style="height: 200px; background-image: url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>);">
				<h4 class="home-title"><?php the_title(); ?></h4>
			</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
	<!-- Newest Tech Piece -->
	<div class="col-sm-4 col-xs-12 home-div">
		<small class="home-labels">Trending Tech</small>
		<?php $args = array('posts_per_page'=>1, 'category_name'=>'tech', 'post_type'=>'post') ?>
		<?php $query = new WP_Query(	$args	); ?>
		<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<a href="<?php the_permalink(); ?>" class="home-link weird-background gradient-background-4" style="height: 200px; background-image: url(<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>);">
				<h4 class="home-title"><?php the_title(); ?></h4>
			</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</div><!--end row newest featured posts-->
</div><!-- end container-fluid-->
<script>
	$(document).ready(function(){
		var $ =jQuery.noConflict();
		$('.col-sm-6 img .col-sm-4 img .home-title').matchHeight();
		$('.home-link').hover(function(){
			$(this).removeClass('gradient-background-1 gradient-background-2 gradient-background-3 gradient-background-4 gradient-background-5', 'slow');
			$(this).addClass('slow-transition');
		});
	});
</script>
<?php get_footer(); ?>
