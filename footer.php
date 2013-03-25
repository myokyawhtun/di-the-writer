		<footer>
			<div id='footerSidebar'>
				<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
				<div id='twitterWidget' class='widget'>
					<h3>Footer Widget [Left]</h3>
					<p>
						Add Footer widget from Widgets in Theme Options. This is for left side.
					</p>
				</div>
				<?php endif; // end sidebar widget area ?>
				<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>
				<div id='aboutWme' class='widget'>
					<h3>Foote Widget [Right]</h3>
					<p>Add Footer widget from Widgets in Theme Options. This is for Right side.
					</p>
					</section>
				</div>
				<?php endif; // end sidebar widget area ?>
			</div>
			&copy; Copyright <?php bloginfo('title');?>
			
			<div class='clear'><!-- --></div>
			<div id='credits'>
				Di the Writer Wordpress Theme by <a href="http://www.myokyawhtun.com" title="Myo Kyaw Htun">Myo Kyaw Htun</a>
				<div id='searchWrap'>
					<?php get_search_form(); ?>
				</div>
				<div class='clear'><!-- --></div>
			</div>

		</footer>
	</div>

			<?php
		wp_footer();
	?>
	<script>
		$(document).ready(function(){
			$('.nivoGallery').nivoSlider({
				effect: 'fade',
				directionNav: false
			});
		});
	</script>
</body>
</html>