<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation toggled" role="navigation">
					<span class="hamburger-menu" aria-hidden="true">
						<a href="#" id="hamburger-icon" class="hamburger-icon">
							<img src="<?php echo get_template_directory_uri();?>/assets/desktop-assets/Icons/hamburger.png" alt="Menu Button" class="burger-button">
							<img src="<?php echo get_template_directory_uri();?>/assets/desktop-assets/logo/svg/Logo.svg" alt="Menu Button" class="logo-button"></a>
					</span>
					<div class=drop-menu>
						<h2>
							<?php $menu = wp_get_nav_menu_object('menu');
								echo $menu->name;
							?>
							<div class='menu-blue-bar'></div>
						</h2>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>		
					</div>
					<?php echo get_search_form();?>	
					<ul class="desktop-navigation">
						<li><a href="<?php echo site_url();?>/contact"><p>Contact</p></a></li>
						<li><a href="<?php echo site_url();?>/faq"><p>FAQ</p></a></li>
					</ul>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
