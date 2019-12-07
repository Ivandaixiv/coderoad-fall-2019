<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>





<?php while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>
 <?php the_post_thumbnail(   'feature-post image'    ); ?>
<?php the_title(''); ?> 

<?php endwhile; // End of the loop. ?>



<?php the_field('why_title'); ?>

<?php if(get_field('why_sections')): ?>
    <?php while(the_repeater_field('why_sections')): ?>
        <h3><?php the_sub_field('title'); ?></h3>
        <p><?php the_sub_field('description'); ?></p>
        <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" />
    <?php endwhile; ?>
 <?php endif; ?>

 <iframe width="560" height="315" src="<?php the_field('video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		
 <?php if(get_field('tutorial')): ?>
    <?php while(the_repeater_field('tutorial')): ?>
        <h3><?php the_sub_field('author'); ?></h3>
        <p><?php the_sub_field('paragraph'); ?></p>
    <?php endwhile; ?>
 <?php endif; ?>
	

 
			





<?php get_footer(); ?>
