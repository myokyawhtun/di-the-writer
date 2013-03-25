			<article id="post-<?php the_ID(); ?>" <?php post_class();?> >
				<h1>
					<?php if(is_single()) {?>
					<?php the_title();?>
					<?php } else { ?>
					<a href="<?php the_permalink();?>"><?php the_title();?></a>
					<?php }?>
				</h1>
				<div class='postMeta'>
					<?php the_time('F j, Y') ; ?>
				</div>
				<section>
					<?php
						the_content('read the rest');
					?>
					<?php wp_link_pages(); ?>
				</section>
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