			<article id="post-<?php the_ID(); ?>" <?php post_class();?> >
				<h2>
					<?php if(is_single()) {?>
					<?php the_title();?>
					<?php } else { ?>
					<a href="<?php the_permalink();?>"><?php the_title();?></a>
					<?php }?>
				</h2>
				<div class='postMeta'>
					<?php the_time('F j, Y') ; ?>
				</div>
				<div class='postInfo'>
					<div class='postComments'>
						<?php
  							comments_popup_link( '0', '1', '%', 'comments-link', 'Off');
						?>
					</div>
					<div class='postCategories'>
						posted under: <?php the_category(', ') ?>
					</div>
				</div>
			</article>