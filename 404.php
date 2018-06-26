<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="row">
	<div class="col-12">
		<p class="pageNotFoundMessage">
			404 Page not found!
			<br>
			<img src="<?php bloginfo('template_url'); ?>/images/404.png">
		</p>
		<p class="smallMessage">Please go back to <a href="<?php bloginfo(url) ?>">home page</a>.</p>
	</div>
</div>
