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
				<div class="resources">
				<h5><?php
					$resourceMenuObject = wp_get_nav_menu_object("resources" );
					echo $resourceMenuObject->name;
				?></h5>
				<?php wp_nav_menu( array( 'theme_location' => 'resources', 'menu_id' => '4' ) ); ?>
				
                 </div>
				 <div class="about-us">
				 <h5><?php
					$resourceMenuObject = wp_get_nav_menu_object("about-us" );
					echo $resourceMenuObject->name;
				?></h5>
				<?php wp_nav_menu( array( 'theme_location' => 'about-us', 'menu_id' => '5' ) ); ?>
                </div>
				<div class="support">
				<h5><?php
					$resourceMenuObject = wp_get_nav_menu_object("support" );
					echo $resourceMenuObject->name;
				?></h5>
				<?php wp_nav_menu( array( 'theme_location' => 'support', 'menu_id' => '6' ) ); ?>
                </div>
				</nav>
				<div class="language">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path d="M8 1c4.418 0 8 2.91 8 6.5S12.418 14 8 14c-.424 0-.841-.027-1.247-.079c-1.718 1.718-3.77 2.027-5.753 2.072v-.421c1.071-.525 2-1.48 2-2.572a3.01 3.01 0 0 0-.034-.448C1.157 11.36 0 9.54 0 7.5C0 3.91 3.582 1 8 1z" fill="white"/></svg>				
				<p>English (Canada)</p>
                </div>			
				<div class="copyright"> ©CodeRoad 2019</div>
				</div><!-- .site-info -->
				
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	</body>

</html>
