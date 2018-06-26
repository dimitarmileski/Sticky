
<?php get_header(); ?>

<?php get_sidebar(); ?>




<div class="row">



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<div class="col-3" id="post-<?php the_ID();?> " <?php post_class();?>>
	    <div class="gameCard box-shadow1">
			<div class="gameCardImage">
			  <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a> 
				  
			</div>



			<div class="gameCardLeft">
					<button class="primer">
						<img src="<?php bloginfo('template_url'); ?>../images/more.png">
						<div class="moreContentBla">
							<span>Share:</span><br>
								<a href="http://www.facebook.com" target="_blank">Facebook</a>
								<a href="https://twitter.com/" target="_blank">Twitter</a>
								<a href="https://www.instagram.com/" target="_blank">Instagram</a>
								<a href="https://plus.google.com/" target="_blank">Google +</a>
						</div>

					</button>
			</div>

			<div class="gameCardRight">
				<a href="<?php the_permalink();?>">
					<button id="">
						<img src="<?php bloginfo('template_url'); ?>../images/play.png">
					</button>
				</a>
			</div>
		</div>			    
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
					'prev_text' => __( '⮜ Previous', 'textdomain' ),
					'next_text' => __( 'Next ⮞', 'textdomain' ),
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

<br>

	<div class="heading">
		<h3>Reviews</h1>
	</div>
	

<?php get_footer(); ?>


<!--////////////////////////////////////////////////-->	
	
		


