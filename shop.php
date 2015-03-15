<?php 
/*
	Template Name: Shop
*/
 ?>

<?php get_header(); ?>
<div class="container-fluid pagetop-margin">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="row body-content">
				<p><a href="<?php get_site_url(); ?>">Glitch</a> &raquo; <a href="<?php get_site_url(); ?>/shop"><strong>Shop</strong></a></p>
				<div class="col-md-3 col-xs-6">
					<div class="store-item"></div>
					<p>Men's Tee – <em>$26</em></p>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="store-item"></div>
					<p>Men's Tee – <em>$26</em></p>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="store-item"></div>
					<p>Men's Tee – <em>$26</em></p>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="store-item"></div>
					<p>Men's Tee – <em>$26</em></p>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="store-item"></div>
					<p>Men's Tee – <em>$26</em></p>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="store-item"></div>
					<p>Men's Tee – <em>$26</em></p>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="store-item"></div>
					<p>Men's Tee – <em>$26</em></p>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="store-item"></div>
					<p>Men's Tee – <em>$26</em></p>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="store-item"></div>
					<p>Men's Tee – <em>$26</em></p>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="store-item"></div>
					<p>Men's Tee – <em>$26</em></p>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="store-item"></div>
					<p>Men's Tee – <em>$26</em></p>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="store-item"></div>
					<p>Men's Tee – <em>$26</em></p>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="store-item"></div>
					<p>Men's Tee – <em>$26</em></p>
				</div>
				<div class="col-md-3 col-xs-6">
					<div class="store-item"></div>
					<p>Men's Tee – <em>$26</em></p>
				</div>
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>