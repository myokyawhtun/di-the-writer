<?php
	get_header();
?>
	<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class();?> >
				<h1>
					
					<?php the_title();?>
					
				</h1>
				
				<section>
					<?php
						the_content('read the rest');
					?>
					<?php wp_link_pages(); ?>
				</section>
				
			</article>
				<?php endwhile; ?>
			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<section>
						<h1>Oops!</h1>
						
						<p>
							Sorry No Content here!
						</p>
					<section>
				</article><!-- #post-0 -->

			<?php endif; ?>
<?php
	get_footer();
?>