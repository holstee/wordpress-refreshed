<div id="sidebar">	
	<div id="commentWrapper">

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
							<img src="/wp-content/themes/author-child/images/weekly.png" title="The Weekly Refresh" />
							<p><span id="clicker">The Weekly Refresh</span> <span class="soarrow">&rarr;</span></p>
						</span>
						<div id="reggi-wysija">
							<div class="widget_wysija_cont">
								<div id="msg-form-wysija-nl-php-1" class="wysija-msg ajax"></div>
								<form id="form-wysija-nl-php-1" method="post" action="#wysija" class="widget_wysija form-valid-sub" _lpchecked="1">
									<p><input type="text" id="form-wysija-nl-php-1-wysija-to" class="wysija-email validate[required,custom[email]]" name="wysija[user][email]" placeholder="enter your email, and hit enter"><span class="wysija-p-firstname abs-req"><label for="form-wysija-nl-php-1-abs-firstname">First name</label><input type="text" id="form-wysija-nl-php-1-abs-firstname" class="validated[abs][req]" name="wysija[user][abs][firstname]"></span><span class="wysija-p-lastname abs-req"><label for="form-wysija-nl-php-1-abs-lastname">Last name</label><input type="text" id="form-wysija-nl-php-1-abs-lastname" class="validated[abs][req]" name="wysija[user][abs][lastname]"></span><span class="wysija-p-email abs-req"><label for="form-wysija-nl-php-1-abs-email">Email</label><input type="text" id="form-wysija-nl-php-1-abs-email" class="validated[abs][email]" name="wysija[user][abs][email]"></span><input type="submit" class="wysija-submit wysija-submit-field" name="submit" value="Subscribe!"></p>
									<input type="hidden" name="formid" value="form-wysija-nl-php-1">
									<input type="hidden" name="action" value="save">
									<input type="hidden" name="wysija[user_list][list_ids]" value="1">
									<input type="hidden" name="message_success" value="Check your inbox now to confirm your subscription.">
									<input type="hidden" name="controller" value="subscribers"><input type="hidden" value="1" name="wysija-page"></form>
							</div>
						</div>
					</li>
					<style>
						.social-buttons{
							height:56px !important;
						}
						.social-buttons a{
							display:inline-block;
							margin-right:15px;
							width:37px;
							height:36px;
						}
					</style>
					
					<li>
						<a href="/blogs-we-love/" title="Blogs We Love" target="_blank"> 
							<img src="/wp-content/themes/author-child/images/blogroll.png" title="Subscribe to our Feed" />
							<p>Blogs We Love <span class="soarrow">&rarr;</span></p>
						</a>
					</li>
					<li>
						<a href="mailto: refreshedstory@holstee.com " title="I have a story idea for Refreshed!" target="_blank"> 
							<img src="/wp-content/themes/author-child/images/submit.png" title="Subscribe to our Feed" />
							<p> Submit A Story <span class="soarrow">&rarr;</span></p>
						</a>
					</li>

					<li class="social-buttons">
						<a href="http://facebook.com/holstee" title="Friend us on Facebook" target="_blank"> 
							<img src="/wp-content/themes/author-child/images/facebook.png" title="Friend us on Facebook" />
							<!--<p>Friend us on Facebook <span class="soarrow">&rarr;</span></p>-->
						</a>
						<a href="http://twitter.com/holstee" title="Follow us on Twitter" target="_blank"> 
							<img src="/wp-content/themes/author-child/images/twitter.png" title="Follow us on Twitter" />
							<!--<p>Follow us on Twitter <span class="soarrow">&rarr;</span></p>-->
						</a>
						<a href="http://tumblr.refreshed.is" title="Join us on Tumblr" target="_blank"> 
							<img src="/wp-content/themes/author-child/images/tumblr.png" title="Join us on Tumblr" />
							<!--<p>Join us on Tumblr  <span class="soarrow">&rarr;</span></p>-->
						</a>
						<a href="http://feeds.feedburner.com/refreshedis" title="Subscribe to our Feed" target="_blank"> 
							<img src="/wp-content/themes/author-child/images/rss.png" title="Subscribe to our Feed" />
							<!--<p>Subscribe to our Feed <span class="soarrow">&rarr;</span></p>-->
						</a>
						<p> &nbsp; </p>
					</li>

				</ul>
			</span>
		</div>
	</div>
</div>