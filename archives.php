			<article id="post-<?php the_ID(); ?>" <?php post_class();?> >
				<div class='postMeta'>
					<a href="<?php the_permalink();?>"><?php the_time('F j, Y') ; ?></a>
				</div>
				<h3>
					<?php if(is_single()) {?>
					<?php the_title();?>
					<?php } else { ?>
					<a href="<?php the_permalink();?>"><?php the_title();?></a>
					<?php }?>
				</h3>
				
			</article>