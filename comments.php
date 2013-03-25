	<div id='comments'>
		<h3>
			<?php comments_number( 'No Responses', 'One Response', '% Responses' ); ?>
		</h3>
		<div class='pagination'>
			<?php
    			paginate_comments_links() ;
   			?>
		</div>
		<ul>
			<?php wp_list_comments('callback=mytheme_comment'); ?>
		</ul>
		
	</div>
	<div id='comments-form'>
		<?php comment_form(); ?>
	</div>
	<div class='clear'><!-- --></div>
	