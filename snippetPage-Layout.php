<?php  
/*
Template Name:Articles Page Layout
*/

?>

<?php get_header(); ?>

<?php get_sidebar(); ?>


	<div class="heading">
		<p>
			◎ From puzzle collections to action role playing game, there are games for all internet users now. 
				<br>
				<br>
			◎ Adding browser games to your website gives visitors a reason to spend more time on your site and come back the next day.
				<br>
				<br>
			◎ Just paste the code into your web page.

				
		<h6 align="right">⚠ ©<a href="https://cloudgames.com"> Cloud Games</a></h6>
		</p>
	</div>
	<br>
	
	<h5><?php the_title(); ?></h5>


<div class="row">

<div class="col-4 fr">
    <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar1' ); ?>
    <?php else : ?>
        
    <?php endif; ?>
</div>

<?php
if ( get_query_var('paged') ) $paged = get_query_var('paged');  
if ( get_query_var('page') ) $paged = get_query_var('page');
 
$query = new WP_Query( array( 'post_type' => 'snippets', 'paged' => $paged ) );
 
if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>	



		<div class="col-8 fl" id="post-<?php the_ID();?> " <?php post_class();?>>
	    	<div class="post">
		<div class="postTop clearfix">
				<div class="postImage">
				    <a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a> 
				</div>
			<div class="postArticle">

				<a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>

				
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


	<?php endwhile; wp_reset_postdata(); ?>
	
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
	
<?php endif; ?>

</div>
