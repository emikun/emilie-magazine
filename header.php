<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo bloginfo('name'); ?> | <?php the_title(); ?></title>
	<script src="//use.typekit.net/dlz3otf.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<?php wp_head(); ?><!--This must remain at the end of the head.-->
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".inner-page-nav">

<header>
	<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid hover-menu">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <i class="fa fa-bars"></i>
	      </button>
	      <a class="navbar-brand visible-lg" href="<?php bloginfo('url'); ?>" id="Logo"><img src="<?php echo get_template_directory_uri(); ?>/img/glitch-logo-01.svg" alt=""></a>
	      <a class="navbar-brand visible-md" href="<?php bloginfo('url'); ?>" id="Logo"><img src="<?php echo get_template_directory_uri(); ?>/img/glitch-logo-02.svg" alt=""></a>
	      <a class="navbar-brand visible-sm" href="<?php bloginfo('url'); ?>" id="Logo"><img src="<?php echo get_template_directory_uri(); ?>/img/glitch-logo-03.svg" alt=""></a>
	      <a class="navbar-brand visible-xs" href="<?php bloginfo('url'); ?>" id="Logo"><img src="<?php echo get_template_directory_uri(); ?>/img/glitch-logo-04.svg" alt=""></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	    	<?php 
				$defaults = array(
					'container' => false,
					'theme_location' => 'primary-menu',
					'menu_class' => 'nav navbar-nav',
					'menu_id' => 'PrimaryMenu'
				);
				wp_nav_menu(	$defaults	);
			 ?>	
		<?php get_search_form(); ?>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid header-hover-menu hidden hidden-sm" id="RecentFeatures">
		<div class="row">
			<?php $args = array(
				'posts_per_page' => 4,
		    	'offset' => 0,
		    	'category' => 0,
		    	'orderby' => 'post_date',
		    	'order' => 'DESC',
		    	'include' => '',
		    	'exclude' => '',
		    	'meta_key' => '',
		    	'meta_value' => '',
				'post_type' => 'feature',
				'post_status' => 'publish',
	    		'suppress_filters' => true 
			);
			$query = new WP_Query(	$args	);?>
			<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<div class="col-sm-3">
				<a href="<?php the_permalink(); ?>" class="header-hover-link">
					<?php the_post_thumbnail('large', array( 'class' => 'feature-snippet-img consistency-filter' ) ); ?>
					<h4 class="header-hover-title"><?php the_title(); ?></h4>
				</a>
			</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
<div class="container-fluid header-hover-menu hidden hidden-sm" id="RecentReviews">
		<div class="row">
			<?php $args = array(
				'posts_per_page' => 4,
		    	'offset' => 0,
		    	'category' => 0,
		    	'orderby' => 'post_date',
		    	'order' => 'DESC',
		    	'include' => '',
		    	'exclude' => '',
		    	'meta_key' => '',
		    	'meta_value' => '',
				'post_type' => 'review',
				'post_status' => 'publish',
	    		'suppress_filters' => true 
			);$query = new WP_Query(	$args	);?>
			<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<div class="col-sm-3">
				<a href="<?php the_permalink(); ?>" class="header-hover-link">
					<?php the_post_thumbnail('large', array( 'class' => 'feature-snippet-img consistency-filter' ) ); ?>
					<h4 class="header-hover-title">Review: <?php the_title(); ?></h4>
				</a>
			</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
<div class="container-fluid header-hover-menu hidden hidden-sm" id="RecentColumns">
		<div class="row">
			<?php $args = array(
				'posts_per_page' => 4,
		    	'offset' => 0,
		    	'category' => 0,
		    	'orderby' => 'post_date',
		    	'order' => 'DESC',
		    	'include' => '',
		    	'exclude' => '',
		    	'meta_key' => '',
		    	'meta_value' => '',
				'post_type' => 'post',
				'post_status' => 'publish',
	    		'suppress_filters' => true 
			);$query = new WP_Query(	$args	);?>
			<?php if ($query->have_posts()	) : while ($query->have_posts()	) : $query->the_post(); ?>
			<div class="col-sm-3">
				<a href="<?php the_permalink(); ?>" class="header-hover-link">
					<?php the_post_thumbnail('large', array( 'class' => 'feature-snippet-img consistency-filter' ) ); ?>
					<h4 class="header-hover-title"><?php the_title(); ?></h4>
				</a>
			</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</header>

<script>
	var $ =jQuery.noConflict();
	$(document).ready(function(){
		$('.menu-item-62').mouseover(function(){
			// $('#RecentFeatures').removeClass('hidden');
		});
	});
</script>

