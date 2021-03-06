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
				<h6>Glitch News</h6>
				<form>
					<input type="email" placeholder="Email">
					<input type="submit" value="Sign up">
				</form>
				<small class="disclaimer"><a href="#">Glitch News is our weekly email of all the week's gaming news. Learn more.</a></small>
			</div>
			<div class="col-sm-3 social-media-footer">
				<h6>Social Media</h6>
				<!--Twitter--><a href="<?php the_field('twitter_link', 20); ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a>
				<!--Facebook--><a href="<?php the_field('facebook_link', 20); ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a>
				<!--Google Plus--><a href="<?php the_field('google_plus_link', 20); ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x fa-inverse"></i></span></a>
				<!-- YouTube --><a href="<?php the_field('youtube_link', 20); ?>"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-youtube fa-stack-1x fa-inverse"></i></span></a>
				<!-- RSS --><a href=""><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-rss fa-stack-1x fa-inverse"></i></span></a>

			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<small>&copy; <?php echo date('Y'); echo ' '; echo bloginfo('name'); ?></small>
				<small class="disclaimer">Hi, this is a school project by <a href="emilie.io" target="_blank">Emilie Thaler</a>. I've tried my best to attribute all content to the respective owner and original source, but if there is something here of yours and you'd rather it not be there, please let me know by emailing me at <a href="mailto:emiliethaler@gmail.com">emiliethaler@gmail.com</a> and I will promptly remove it!</small>
			</div>
		</div>
	</div>
</footer>
<script>
	$(document).ready(function(){
		var $ =jQuery.noConflict();
		$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);e=e.length?e:$("[name="+this.hash.slice(1)+"]");if(e.length){$("html,body").animate({scrollTop:e.offset().top},1e3);return false}}})})
	});
</script>

<?php wp_footer(); ?>
</body>
</html>