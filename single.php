<?php
	get_header();
?>
	<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

					<div id='postNavi'>
						<div class='older'><?php previous_post_link('%link &raquo; ') ;?></div>
						<div class='newer'><?php next_post_link('&laquo; %link') ;?></div>
					</div>
					<?php comments_template( '', true ); ?>
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