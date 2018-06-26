
<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="row">
	<div class="col-12">
		<div class="heading">
			<p>Category: <?php single_tag_title(); ?></p>	
		</div>
	</div>
</div>

<div class="row">

<div class="col-4 fr">

    <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar1' ); ?>
    <?php else : ?>
        
    <?php endif; ?>
</div>


<?php if ( have_posts() ) : ?> 

<?php while ( have_posts() ) : the_post(); ?>

	<div class="col-8 fl" id="post-<?php the_ID();?> " <?php post_class();?>>
	    <div class="post">
			<div class="postTop clearfix">

				<div class="postImage">
				    <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a> 
				</div>

				<div class="postArticle">

					<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

					 	<?php if (has_category()): ?>
							<div class="categories">
								<?php the_category( ' ' ); ?>	
							</div>
					    <?php endif; ?>
					      
						<article><?php the_content('',	TRUE); ?></article>
						<span class="postInfo">	
							<?php the_time('F jS Y'); ?>
							 	<span>•</span>
							<?php echo getPostViews(get_the_ID());?>
						</span>

				</div>
			</div>
	    </div>
		<hr>			    
	</div>

		<?php endwhile; ?>
	
	

	</div>


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

<!--////////////////////////////////////////////////-->	


<!--////////////////////////////////////////////////-->	