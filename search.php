
<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="row">

<?php if ( have_posts() ) : ?> 
	<div class="heading">
		<p>Search results for: <?php echo get_search_query(); ?></p>	
	</div>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="col-8" id="post-<?php the_ID();?> " <?php post_class();?>>
	    	<div class="post">
		<div class="postTop clearfix">
				<div class="postImage">
				    <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a> 
				</div>
			<div class="postArticle">
			<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
			        <span class="dateAndTime"><?php the_time('F jS Y'); ?></span>
				<article><?php the_content(); ?></article>

			</div>
		</div>

		<div class="postButtons clearfix">
			<button id="button">Read More</button>
			<button id="button">Share</button>
		</div>
	</div>
		<hr>			    
	</div>

	<?php endwhile; ?>

	<div class="row">
	<div class="col-12">
	    <div class="paginationCentering">
		    <div class="pagination">
				<?php
				the_posts_pagination( array(
					'mid_size'  => 2,
					'prev_text' => __( '< Previous', 'textdomain' ),
					'next_text' => __( 'Next >', 'textdomain' ),
					 'screen_reader_text' => __( '&nbsp;' )
				) );
				 ?>
		    </div>
		</div>
	</div>
</div>


<?php else : ?>

	<div class="heading">
	<p class="align-center"><?php _e( 'Sorry. No post were found!' ); ?></p>
	</div>
	
	
<?php endif; ?>


</div>

<!--////////////////////////////////////////////////-->	