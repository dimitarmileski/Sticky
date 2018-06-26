
<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="row">
	<div class="col-8 ">
	<h2>Send Us Email </h2>
			<div class="form">
			<div class="formElements">
					<form action="MAILTO:dime.mileski@hotmail.com" method="post" enctype="text/plain">
					

						<legend>Email Form</legend><br>
							
								<input type="text" name="name" placeholder="Your Name" id="inputText"><br>
						
								<input type="text" name="lastname" placeholder="Last Name" id="inputText"><br>
							
								<input type="text" name="email" placeholder="Your Email" id="inputText"><br>

								<textarea name="textarea" id="textarea" placeholder=" Write Message" maxlength="300"></textarea><br>

								<input type="submit" name="submit" value="Send" id="button">
								<input type="reset"  value="Reset" id="button">

					
					</form>
					</div>
		   </div>
	</div>


	<div class="col-4">
		
	</div>

</div>

<!--////////////////////////////////////////////////-->		
		<hr>
<!--////////////////////////////////////////////////-->	
		<div class="row">
	<div class="col-12">
		<div class="contact">

			<h2>Social Media</h2>
			
					<a href="http://www.facebook.com" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>../images/facebook.png">
					</a>
					<a href="http://www.instagram.com" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>../images/instagram.png">
					</a>

					<a href="http://www.twitter.com" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>../images/twitter.png">
					</a>
					<a href="http://www.youtube.com" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>../images/youtube.png">
					</a>

					<a href="https://plus.google.com/" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>../images/google_plus.png">
					</a>
					<a href="#" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>../images/rss.png">
					</a>



			<a href="https://twitter.com/DimitarMileskii" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @DimitarMileskii</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

			<a class="twitter-timeline" data-theme="light" data-link-color="#16cce9" href="https://twitter.com/DimitarMileskii">Tweets by DimitarMileskii</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

		</div>

	</div>

</div>