<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content tutorial-content">
        <?php the_title();?>
        <?php the_excerpt(); ?>
        <div class="tutorial-info">
            <p><img class="tutorial-icon" src="<?php echo get_template_directory_uri()?>/assets/desktop-assets/component/Stars/Group 3@3x.png"><?php echo get_post_meta($post->ID, 'rating', true); ?></p>
            <p><img class="tutorial-icon" src="<?php echo get_template_directory_uri()?>/assets/mobile-assets/Mobile Icons_Header/Icons/User@3x.png"><?php echo get_post_meta($post->ID, 'enrolled_students', true); ?></p>    
            <?php the_date( 'm / Y', '<p class="tutorial-date"> Uploaded ', '</p>')?>   
        </div> 
    </div><!-- .entry-content -->
</article><!-- #post-## -->
