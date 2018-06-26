<?php get_header(); ?>
<?php get_sidebar(); ?>



	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
      
    <div class="entry">
			<div class="row">
				<div class="col-12">
					<div class="embedGame">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

	</div>

	</div>
<?php endwhile; endif; ?>

<div class="row">

	<div class="col-4 fr">

			    <?php if (is_active_sidebar('sidebar1')) : ?>
			<?php dynamic_sidebar('sidebar1'); ?>
		<?php endif; ?>
	</div>


<div class="col-8 fl">
	<div class="row">
					<div class="col-4">
							<h5>
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h5>

							<?php if (has_category()): ?>
								<div class="categories">
									<?php the_category( ' ' ); ?>	
								</div>
							<?php endif; ?>
							<br>

							<span class="postInfo"><?php the_time('F jS Y'); ?></span>
					</div>

						

					<div class="col-4">
						<?php if (has_tag()): ?>
							<div class="tags">
								<?php the_tags( '<h4>Tags:</h4>', '' ); ?>
							</div>
						<?php endif; ?> 
				
					</div>
			

					<div class="col-4">
						<h4>Share:</h4>
							<span>
								<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

									<br>

								<a href="https://twitter.com/DimitarMileskii" class="twitter-follow-button" data-show-count="false">Follow @DimitarMileskii</a>
								<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

								<h6 >⚠ ©<a href="https://cloudgames.com"> Cloud Games</a></h6>
							</span>

					</div>

	</div>


<!--/////////////Post-Nav-Links//////////////////-->

		<div class="row">
			<div class="col-6">
				<div class="heading">
					<p>
					<?php $nextPost = get_next_post(true);
						if($nextPost) { ?>
						<?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(200,200) ); } ?>
						<?php next_post_link('%link',"$nextthumbnail <br/> %title ", TRUE); ?>
					</p>
				</div>
			</div>

			<div class="col-6">
				<div class="heading">
					<p>
						 <?php $prevPost = get_previous_post(true);
							if($prevPost) {?>
		                    <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(200,200) );}?>
		                    <?php previous_post_link('%link',"$prevthumbnail <br/> %title", TRUE); ?>
					</p>
				</div>
			</div>
		
		</div>
	




<!--////////////////////////////////////////////////-->

	<span class="postInfo">
		Posted in:
		<a href="<?php $url = content_url(); ?>"><?php the_category(' '); ?></a>
	</span>

<!--////////////////////////////////////////////////-->

	<div class="row">
	<h4>Comments:</h4>
		<div class="col-12">
			<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5" data-width="100%"></div>
		</div>
	</div>
<!--////////////////////////////////////////////////-->


</div>
</div>
 

<!--////////////////////////////////////////////////-->

<?php get_footer(); ?>

<!--////////////////////////////////////////////////-->