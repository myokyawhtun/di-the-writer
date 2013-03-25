<?php
	get_header();
?>
	<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
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
					<figure>
						<a href="<?php echo wp_get_attachment_url($post->ID); ?>" id="see-large-picture-lightbox" title="Click to see large photo"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a>
						<figcaption>
							
					<?php
						the_excerpt('read the rest');
					?>
						</figcaption>
					</figure>
				</section>
			</article>
				<?php endwhile; ?>
	<?php
		endif;
	?>
<?php
	get_footer();
?>