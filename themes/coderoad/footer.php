<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				<nav id="site-navigation toggled" class="footer-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'support', 'menu_id' => '6' ) ); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'about-us', 'menu_id' => '5' ) ); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'resources', 'menu_id' => '4' ) ); ?>

				</nav>
						
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
