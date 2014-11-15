<?php 
/*
  Template Name: Home
*/
 ?>

<?php get_header(); ?>
<div class="container-fluid">
<h2>New</h2>
<div class="row">
	<?php $args = array('posts_per_page' => 2, 'post_type' => 'feature',); ?>
	<?php $query = new WP_Query(	$args	);?>
	<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
		<div class="col-sm-6">
			<h4><?php the_title(); ?></h4>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('large', array( 'class' => 'feature-snippet-img consistency-filter' ) ); ?>
			</a>
		</div>
	<?php endwhile; endif; wp_reset_postdata(); ?>
</div><!-- end row (newest features) -->
<div class="row">
	<!-- Newest Opinion -->
	<div class="col-sm-4 col-xs-2">
		<?php $args = array('posts_per_page'=>1, 'category_name'=>'opinion', 'post_type'=>'post') ?>
		<?php $query = new WP_Query(	$args	); ?>
		<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<h4><?php the_title(); ?></h4>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('large', array( 'class' => 'feature-snippet-img consistency-filter' ) ); ?>
			</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
	<!-- Newest Culture Piece -->
	<div class="col-sm-4 col-xs-2">
		<?php $args = array('posts_per_page'=>1, 'category_name'=>'culture', 'post_type'=>'post') ?>
		<?php $query = new WP_Query(	$args	); ?>
		<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<h4><?php the_title(); ?></h4>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('large', array( 'class' => 'feature-snippet-img consistency-filter' ) ); ?>
			</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
	<!-- Newest Tech Piece -->
	<div class="col-sm-4 col-xs-2">
		<?php $args = array('posts_per_page'=>1, 'category_name'=>'tech', 'post_type'=>'post') ?>
		<?php $query = new WP_Query(	$args	); ?>
		<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<h4><?php the_title(); ?></h4>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('large', array( 'class' => 'feature-snippet-img consistency-filter' ) ); ?>
			</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</div><!--end row newest featured posts-->
<div class="row">
	<?php $args = array('posts_per_page'=>2, 'post_type'=>'review'); ?>
	<?php $query = new WP_Query(	$args	); ?>
	<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
	<div class="col-sm-6">
		<h4><?php the_title(); ?></h4>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('large', array( 'class' => 'feature-snippet-img consistency-filter' ) ); ?>
		</a>
	</div>	
	<?php endwhile; endif; wp_reset_postdata(); ?>
</div><!-- end row featured reviews -->
<h2>Trending</h2>
<div class="row">
	<div class="col-sm-4 col-xs-2">
		<?php $args = array('posts_per_page'=>1, 'category_name'=>'opinion', 'post_type'=>'post', 'offset'=>'2') ?>
		<?php $query = new WP_Query(	$args	); ?>
		<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<h4><?php the_title(); ?></h4>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('large', array( 'class' => 'feature-snippet-img consistency-filter' ) ); ?>
			</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
	<div class="col-sm-4 col-xs-2">
		<?php $args = array('posts_per_page'=>1, 'category_name'=>'culture', 'post_type'=>'post', 'offset'=>'2') ?>
		<?php $query = new WP_Query(	$args	); ?>
		<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<h4><?php the_title(); ?></h4>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('large', array( 'class' => 'feature-snippet-img consistency-filter' ) ); ?>
			</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
	<div class="col-sm-4 col-xs-2">
		<?php $args = array('posts_per_page'=>1, 'category_name'=>'tech', 'post_type'=>'post', 'offset'=>'2') ?>
		<?php $query = new WP_Query(	$args	); ?>
		<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<h4><?php the_title(); ?></h4>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('large', array( 'class' => 'feature-snippet-img consistency-filter' ) ); ?>
			</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</div><!-- end row trending posts -->
</div><!-- end container-fluid-->
<?php get_footer(); ?>
