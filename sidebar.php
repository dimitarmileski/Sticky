
<div id="slideNav" class="slideNav">
		<div class="logo">
			<a href="javascript:void(0)" onclick="closeSlideNav()" class="closeButton">&#10005;</a>
			<a href="<?php bloginfo(url); ?>"><?php the_custom_logo(); ?></a>
		</div>

<div class="searchBar">
	<form action="<?php echo home_url(); ?>"  method="get">

	<input type="text" name="s" placeholder="Search for...">
	<input type="hidden" value="submit">

	</form>
</div>
		
		<div class="menu">
		    <div id="menuList">
		    <?php 
		    $args = array(
		    	'theme_location'=>'primary'
		    	);

		     ?>
		        <?php wp_nav_menu( $args); ?>
			</div>
		</div>

<!--////////////////////////////////////////////////-->
		<footer>
			<p>Copyright &copy; Sticky Dimitar Mileski 2018</p>
			 <?php 
		    $args = array(
		    	'theme_location'=>'footer'
		    	);

		     ?>
		        <?php wp_nav_menu( $args); ?>
		</footer>
</div>