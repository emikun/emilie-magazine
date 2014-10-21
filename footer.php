<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<h6>Find</h6>
				<?php 
					$defaults = array(
						'container' => false,
						'theme_location' => 'footer-find-menu',
						'menu_class' => 'footer-menu',
						'menu_id' => 'FooterFindMenu'
					);
					wp_nav_menu(	$defaults	);
			 	?>	
			</div>
			<div class="col-sm-3">
				<h6>Company</h6>
				<?php 
					$defaults = array(
						'container' => false,
						'theme_location' => 'footer-company-menu',
						'menu_class' => 'footer-menu',
						'menu_id' => 'FooterCompanyMenu'
					);
					wp_nav_menu(	$defaults	);
			 	?>	
			</div>
			<div class="col-sm-3">
				<h6>Partners</h6>
			</div>
			<div class="col-sm-3">
				<h6>Social Media</h6>
				<!--Twitter--><a href="<?php the_field('twitter_link', 20); ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a>
				<!--Facebook--><a href="<?php the_field('facebook_link', 20); ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a>
				<!--Pinterest--><a href="<?php the_field('pinterest_link', 20); ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pinterest fa-stack-1x fa-inverse"></i></span></a>
				<!--Instagram--><a href="<?php the_field('instagram_link', 20); ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a>
				<!--Google Plus--><a href="<?php the_field('google_plus_link', 20); ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x fa-inverse"></i></span></a>
			</div>
		</div>
		<small>&copy; <?php echo date('Y'); echo ' '; echo bloginfo('name'); ?></small>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>