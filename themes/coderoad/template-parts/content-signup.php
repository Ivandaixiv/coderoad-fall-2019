<?php
/**
 * Template part for displaying page content in sign-up.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="register-container">
		<div class="register-content">
    <?php the_title( '<h1 class="sign-up-text">', '</h1>' ); ?>
	<div class="register-rectangle"></div>
	<div class="register-rectangle-two"></div>
	</div>
	<div class="sign-up-main-container">
	<div class="sign-up-container">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
			</div>
</article><!-- #post-## -->

