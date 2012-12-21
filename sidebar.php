<div id="sidebar">	
	<div id="commentWrapper">
		
		<script>

			$(document).ready(function(){
				$(".search-form-input").val("");
				$(".search-form-input").attr("placeholder","enter your search, and hit enter");
				$("#form-wysija-nl-php-1-wysija-to").attr("placeholder","enter your email, and hit enter");
				$("#reggi-newsletter").click(function(){
					$("#reggi-wysija").show();
					$('#form-wysija-nl-php-1-wysija-to').focus();
				});
				$("#reggi-newsletter").focusout(function(){
					$("#reggi-wysija").hide();
				});
			});
		
		</script>


		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar') ) : else : ?>		
		<?php endif; ?>	
		
		<div id="sidebarfixed">

			<div id="sidebar-logo">
				<a href="#back-to-top" id="back-to-top">
					<img src="/wp-content/themes/author-child/images/logo_inverted.png">
				</a>
			</div>

			<span class="socialbox widget">
				<ul>
					<li id="reggi-newsletter">
						<span title="The Weekly Refresh" target="_blank"> 
							<img src="http://refreshed.is/wp-content/themes/author-child/images/newsletter-icon.png" title="The Weekly Refresh" />
							<p>The Weekly Refresh <span class="soarrow">&rarr;</span></p>
						</span>
						<div id="reggi-wysija">
							<?php

								$widgetdata=array (
									'lists_name' => array (4 => 'Main list'),
									'submit' => 'Subscribe!',
									'success' => 'Check your inbox now to confirm your subscription.',
									'lists' => array (0 => '4',),
									'widget_id' => 'wysija-nl-php-1',
								);
								$widgetNL=new WYSIJA_NL_Widget(1);
								$subscriptionForm= $widgetNL->widget($widgetdata,$widgetdata);
								echo $subscriptionForm;
							?>
						</div>
					</li>
					<li>
						<a href="http://facebook.com/holstee" title="Friend us on Facebook" target="_blank"> 
							<img src="http://refreshed.is/wp-content/themes/author-child/images/facebook-icon.png" title="Friend us on Facebook" />
							<p>Friend us on Facebook <span class="soarrow">&rarr;</span></p>
						</a>		
					</li>
					<li>
						<a href="http://twitter.com/holstee" title="Follow us on Twitter" target="_blank"> 
							<img src="http://refreshed.is/wp-content/themes/author-child/images/twitter-icon.png" title="Follow us on Twitter" />
							<p>Follow us on Twitter <span class="soarrow">&rarr;</span></p>
						</a>
					</li>
					<li>
						<a href="http://tumblr.refreshed.is" title="Join us on Tumblr" target="_blank"> 
							<img src="http://refreshed.is/wp-content/themes/author-child/images/tumblr-icon.png" title="Join us on Tumblr" />
							<p>Join us on Tumblr  <span class="soarrow">&rarr;</span></p>
						</a>
					</li>
					<li>
						<a href="http://feeds.feedburner.com/refreshedis" title="Subscribe to our Feed" target="_blank"> 
							<img src="http://refreshed.is/wp-content/themes/author-child/images/rss-icon.png" title="Subscribe to our Feed" />
							<p>Subscribe to our Feed <span class="soarrow">&rarr;</span></p>
						</a>
					</li>
				</ul>
			</span>
		</div>
	</div>
</div>