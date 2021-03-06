			<article id="post-<?php the_ID(); ?>" <?php post_class();?> >
				<h1>
					<?php if(is_single()) {?>
					<?php the_title();?>
					<?php } else { ?>
					<a href="<?php the_permalink();?>"><?php the_title();?></a>
					<?php }?>
				</h1>
				<div class='postMeta'>
					<a href="<?php the_permalink();?>"><?php the_time('F j, Y') ; ?></a>
				</div>
				
					<?php
						$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
						if($images){
							echo "<div class='nivoGallery'>";
							foreach( $images as $img){
								echo "<img src='". $img->guid . "' alt='" . $img->post_title . "'/>";
							}
							echo "</div>";
						}
					?>
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