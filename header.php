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
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <i class="fa fa-bars"></i>
	      </button>
	      <a class="navbar-brand" href="<?php bloginfo('url'); ?>" id="Logo"><img src="<?php echo get_template_directory_uri(); ?>/img/glitch-logo-01.svg" alt=""></a>
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
	      <form class="navbar-form navbar-right" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control empty" placeholder="&#xF002;">
	        </div>
	      </form>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
<!-- </header>
<?php dynamic_sidebar('recent_features'); ?>
<?php dynamic_sidebar('recent_reviews'); ?>
<?php dynamic_sidebar('recent_columns'); ?>
<?php dynamic_sidebar('recent_videos'); ?> -->