<?php get_header(); ?>
<?php get_sidebar(); ?>


<div class="row">

	<div class="col-4 fr">

			    <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
			        <?php dynamic_sidebar( 'sidebar1' ); ?>
			    <?php else : ?>
			       
			    <?php endif; ?>
	</div>

	<div class="col-8 fl">
	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	   
		    <div class="entry">
				<div class="postText">
				<a href="<?php the_post_thumbnail_url( 'full' );   ?>">
					<?php the_post_thumbnail('banner-image'); ?>
					</a>
					<div class="row">

						<div class="col-6">	
								<a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
							
					
							<span class="postInfo"><?php the_time('F jS Y'); ?></span>
							<?php if (has_category()): ?>
									<div class="categories">
										<?php the_category( ' ' ); ?>	
									</div>
							<?php endif; ?>

						</div>

						<div class="col-6">

						<h4>Share:</h4>
						<br>
							<span>
								<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

									<br>

								<a href="https://twitter.com/DimitarMileskii" class="twitter-follow-button" data-show-count="false">Follow @DimitarMileskii</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
							</span>

						</div>

					</div>

						<textarea id="textArea" class="snippetTextArea" style="width: 100%; height: 150px;" >
					
							<?php the_content(); ?>
						</textarea>

						<button id="copyButton" class="">Copy</button>

				</div>
				<hr>
		    </div>
	    		<?php endwhile; endif; ?>
		</div>
<!--/////////////Tags//////////////////-->
<div class="row">
	<div class="col-12">

		<?php if (has_tag()): ?>
			<div class="tags">
				<?php the_tags( 'Tags:', '' ); ?>
			</div>
		<?php endif; ?>

		<span class="postInfo">
			Posted in:
			<a href="<?php $url = content_url(); ?>"><?php the_category(' '); ?></a>
		</span>

	</div>
</div><!--/////////////End-of-Tags//////////////////-->

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
	
	</div><!--/////////////End-Of-Post-Nav-Links//////////////////-->
 

<!--///////////////Comments///////////////////-->
<div class="row">
<h4>Comments:</h4>
	<div class="col-12">
		<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="2" data-width="100%"></div>
	</div>

</div><!--///////////////End-Of-Comments////////////-->


	</div>


</div>



<?php get_footer(); ?>

<!--////////////////////////////////////////////////-->

			
<script type="text/javascript">
	
	var input  = document.getElementById("textArea");
    var button = document.getElementById("copyButton");

    button.addEventListener("click", function (event) {
        event.preventDefault();
        input.select();
        document.execCommand("copy");
    });
</script>

