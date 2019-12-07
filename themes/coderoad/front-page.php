<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>





<?php while ( have_posts() ) : the_post(); ?>
<?php the_title(''); ?> 
<?php the_content(); ?>
 <?php the_post_thumbnail(   'feature-post image'    ); ?>


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
	

 <img class="social-media" src="<?php echo home_url(); ?>/wp-content/uploads/2019/12/twitter@3x.png">
 <img class="social-media" src="<?php echo home_url(); ?>/wp-content/uploads/2019/12/github-icon-github-png-image.png">
 <img class="social-media" src="<?php echo home_url(); ?>/wp-content/uploads/2019/12/screen_shot_2019-12-06_at_3.08.27_pm.png">
 <img class="social-media" src="<?php echo home_url(); ?>/wp-content/uploads/2019/12/Mail@3x.png">





<?php get_footer(); ?>
