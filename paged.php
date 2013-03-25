<?php
	get_header();
?>
	<div id='content'>
	<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<section>
						<h3><a href="#">Oops!</a></h3>
						
						<p>
							Sorry No Content here!
						</p>
					<section>
				</article><!-- #post-0 -->

			<?php endif; ?>
			<div id='postNavi'>
				<div class='older'><?php next_posts_link('Older Entries &raquo;');?></div>
				<div class='newer'><?php previous_posts_link('&laquo; Newer Entries');?></div>
			</div>
	</div>
	<?php
		get_sidebar();
	?>
<?php
	get_footer();
?>