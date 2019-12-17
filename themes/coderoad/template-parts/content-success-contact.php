<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="success-text-container">
        <h2>Thank you for your question!</h2>
        <h2>Keep an eye on your inbox for our reply.</h2>

        </div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

 <?php if(get_field('contact_success')): ?>
    <?php while(the_repeater_field('contact_success')): ?>	
	<?php $image = get_sub_field('image'); ?>
	<img class="success-images" src="<?php echo $image['url']; ?>" />
	<?php endwhile; ?>
 <?php endif; ?>


<?php get_footer(); ?>
