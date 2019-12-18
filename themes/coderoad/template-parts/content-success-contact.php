<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="success-main-container">
    <div class="success-title-container">    
        <h1>Contact Us</h1>
    </div>
        
		<div class="success-text-container">
        <h2>Thank you for your question!</h2>
        <h3>Keep an eye on your inbox for our reply.</h3>
        <div class="testest"><?php echo '<img class="success-illustration" src="https://raw.githubusercontent.com/redacademy/coderoad-fall-2019/master/themes/coderoad/assets/desktop-assets/illustrations/Illustration%201%403x.png?token=AL2TWV3EVML2CCVE2DRTU6K6ALRFW">'?></div>
        <div class="success-img-container">
        <?php if(get_field('contact_success')): ?>
    <?php while(the_repeater_field('contact_success')): ?>	
	<?php $image = get_sub_field('image'); ?>
	<img class="success-images" src="<?php echo $image['url']; ?>" />
	<?php endwhile; ?>
    <?php endif; ?>
</div>
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


        

<?php get_footer(); ?>
