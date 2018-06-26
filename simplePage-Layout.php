<?php  
/*
Template Name:Simple Page Layout
*/

?>


<?php get_header(); ?>

<?php get_sidebar(); ?>


<div class="row">

<div class="col-4 fr">

		    <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
		        <?php dynamic_sidebar( 'sidebar1' ); ?>
		    <?php else : ?>
		       
		    <?php endif; ?>
		</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<div class="col-8 fl" id="post-<?php the_ID();?> " <?php post_class();?>>
	    	<div class="post">
	    	<?php the_content(); ?>
		
	</div>
		<hr>			    
	</div>

		<?php endwhile; ?>
	
	

	</div>


<?php else : ?>

	<div class="heading">
	<p class="align-center"><?php _e( 'Sorry. No post were found!' ); ?></p>
	</div>
	
	
<?php endif; ?>


	


<?php get_footer(); ?>


<!--////////////////////////////////////////////////-->	
	
		


