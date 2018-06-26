<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<meta <?php bloginfo('charset');?>>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('|','true','right');?><?php bloginfo('name');?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

	<?php wp_head()?>
</head>
<body <?php body_class(); ?>>
	<div id="fb-root"></div>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>../js/main.js"></script>

<!--////////////////////////////////////////////////-->

	<div id="container">
<!--////////////////////////////////////////////////-->


			<?php wp_footer(); ?>

	

<!--////////////////////////////////////////////////-->

<div class="row">
	<div class="topBar box-shadow4">
	<div class="col-1">

				<button id="hamburgerButton" onclick="openSlideNav()">
			       <div></div>
		           <div></div>
			       <div></div>
		        </button>

		</div>
	<div class="col-11"></div>
	</div>
</div>

<!--////////////////////////////////////////////////-->
<div class="row">
	<div class="col-12" style="margin-bottom:10px;">
		
	</div>
</div>



<!--///////////////Category-Menu/////////////////////-->

<?php

	if ( is_home() ||  is_singular('post') || cat_is_ancestor_of(33, $cat) || is_category(33)) { ?>

<div class="row">
	<div class="col-12 gamePageMenu">
		
		<?php 
		    $args = array(
		    	'theme_location'=>'posts'
		    	);

		     ?>
		        <?php wp_nav_menu( $args); ?>
		        <hr>
	</div>
</div>


<?php

}  elseif ( is_singular('games') || is_category() || is_tag()) { ?>

<div class="row">
	<div class="col-12 gamePageMenu">
		
		<?php 
		    $args = array(
		    	'theme_location'=>'games'
		    	);

		     ?>
		        <?php wp_nav_menu( $args); ?>
		         <hr>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<h3>	
				<a href="">
				 	<?php $categories = get_the_category();
		   		  foreach($categories as $category) { 
		   		  	echo $category->name . ' '; 
		   		  	} 
				  	?>
				</a>
		</h3>
		<h5><a href="<?php $url = content_url(); ?>"><?php wp_title(' '); ?></a></h5>
	</div>
</div>

<?php

} elseif ( is_page_template( 'gamePage-Layout.php' ) || is_page_template( 'snippetPage-Layout.php' )  ) { ?>

<div class="row">
	<div class="col-12 gamePageMenu">
		
		<?php 
		    $args = array(
		    	'theme_location'=>'games'
		    	);

		     ?>
		        <?php wp_nav_menu( $args); ?>
		         <hr>
	</div>
</div>


<?php

}

else { ?>

<h5><a href="<?php $url = content_url(); ?>"><?php wp_title(' '); ?></a></h5>

<?php

}

?>

<!--////////////////////////////////////////////////////-->

