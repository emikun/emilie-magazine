<form class="navbar-form navbar-right" role="search" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <div class="form-group">
    	<input type="text" id="search" class="form-control empty" placeholder="&#xF002;" value="<?php the_search_query(); ?>" name="s">
    </div>
</form>