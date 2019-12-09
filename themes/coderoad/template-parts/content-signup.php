<?php
/**
 * Template part for displaying page content in sign-up.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <?php the_title( '<h1 class="sign-up-text">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<div class="sign-up-container">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

