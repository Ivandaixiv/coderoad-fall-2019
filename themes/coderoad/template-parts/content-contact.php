<?php
/**
 * Template part for displaying page content in contact.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="contact-main-container">
	<header class="entry-header-contact">
        <?php the_title( '<h1 class="contact-title">', '</h1>' ); ?>
        <div class="contact-title-container">
        <h2 class="contact-question"><?php echo 'Question?'; ?></h2>
        <div class="contact-rectangle"></div>
        </div>
	</header><!-- .entry-header -->
	<div class="container-contact">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
        ?>
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
            