				<div id="sidebar">			
					<!-- grab sidebar widgets -->				
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar') ) : else : ?>		
					<?php endif; ?>	

<!-- TEST -->	
					<div id="comments">
  <ol>
    <li>Here be the comments from visitors...</li>
    <li>etc...</li>
  </ol>
</div>

<div id="commentWrapper">
  <div id="comment">
    <form>
      <!-- take their response -->
    </form>
  </div>
</div>	
<!-- END TEST -->	
				</div><!--sidebar-->
