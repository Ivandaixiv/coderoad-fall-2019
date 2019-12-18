<?php
/**
 * The template for displaying success page for contact.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'success-contact' ); ?>
				<?php $image = get_sub_field('contact-success'); ?>
        
        <img src="<?php echo $image['url']; ?>" />

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
