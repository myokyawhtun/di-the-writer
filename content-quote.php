			<article id="post-<?php the_ID(); ?>" <?php post_class();?> >
				
				<div class='postMeta'>
					<a href="<?php the_permalink();?>"><?php the_time('F j, Y') ; ?></a>
				</div>
				<section>
					<blockquote>
					<?php
						the_content('read the rest');
					?>
					<?php wp_link_pages(); ?>
					</blockquote>
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