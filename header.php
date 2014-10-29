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
<body <?php body_class(); ?>>

<header>
	<div class="container-fluid">
		<!-- <a href="" class="navigation-toggle"><i class="fa fa-bars fa-2x"></i><span class="sr-only">Menu</span></a> -->
		<h1 class="logo" ><a href="<?php bloginfo('url'); ?>" id="Logo"><img src="<?php echo get_template_directory_uri(); ?>/img/glitch-logo-01.svg" alt=""></a></h1>
		<?php dynamic_sidebar( 'site_controls' ); ?>
		<nav>
			<?php 
				$defaults = array(
					'container' => false,
					'theme_location' => 'primary-menu',
					'menu_class' => 'primary-navigation',
					'menu_id' => 'PrimaryMenu'
				);
				wp_nav_menu(	$defaults	);
			 ?>			
		</nav>
	</div>
</header>
