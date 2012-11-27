				<div id="sidebar">			
					<!-- grab sidebar widgets -->				
					<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar') ) : else : ?>		
					<?php endif; ?>	

<!-- TEST -->	
					<div id="commentWrapper">
      <div id="comment">
        <form>
        <p class="formrow"><label for="yourname">Name:</label>
          <input type="text" class="text" id="yourname" name="name" value=""></p>
        <p class="formrow"><label for="yoururl">URL:</label>
          <input type="text" class="text" id="yoururl" name="url"></p>
        <p class="formrow"><textarea rows="10" cols="35" name="body"></textarea></p>
        <p><input type="button" value="Preview comment"></p>
        </form>
      </div>
    </div>
<!-- END TEST -->	
				</div><!--sidebar-->
