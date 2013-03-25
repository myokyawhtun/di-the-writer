			<article id="post-<?php the_ID(); ?>" <?php post_class();?> >
				<div class='postMeta'>
					<a href="<?php the_permalink();?>"><?php the_time('F j, Y') ; ?></a>
				</div>
				<section>
					<?php
						the_content('read the rest');
					?>
				</section>
				
			</article>