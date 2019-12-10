<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



<div class="code-image">

<?php while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<p><?php the_content(); ?></p>
<?php the_post_thumbnail(   'feature-post image'    ); ?>


<?php endwhile; // End of the loop. ?>
</div>



<h2 class="why-title"><?php the_field('why_title'); ?></h2>


<div class="why-code">
<?php if(get_field('why_sections')): ?>
    <?php while(the_repeater_field('why_sections')): ?>
        <div class="why-section">
        <div class=image-why>
        <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" />
    </div>
        <h3><?php the_sub_field('title'); ?></h3>
        <p><?php the_sub_field('description'); ?></p>
    </div>
    <?php endwhile; ?>
 <?php endif; ?>
 </div>
 <div class="tutorial-video">

 <iframe width="560" height="315" src="<?php the_field('video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		
 <?php if(get_field('tutorial')): ?>
    <?php while(the_repeater_field('tutorial')): ?>
        <h2><?php the_sub_field('video_text'); ?></h2>
        <h3><?php the_sub_field('author'); ?></h3>
        <p><?php the_sub_field('paragraph'); ?></p>
    <?php endwhile; ?>
 <?php endif; ?>
</div>

<div class="social-media">
 <img  src="<?php echo home_url(); ?>/wp-content/uploads/2019/12/twitter@3x.png">
 <img  src="<?php echo home_url(); ?>/wp-content/uploads/2019/12/github-icon-github-png-image.png">
 <img  src="<?php echo home_url(); ?>/wp-content/uploads/2019/12/screen_shot_2019-12-06_at_3.08.27_pm.png">
 <img  src="<?php echo home_url(); ?>/wp-content/uploads/2019/12/Mail@3x.png">
</div>

<div class="subject">
<?php if(get_field('subject')): ?>
    <?php while(the_repeater_field('subject')): ?>
        <div class="all-sub">
        <img src="<?php echo the_sub_field('image'); ?>" >
        <div class="sub-subject">
        <h3><?php the_sub_field('title'); ?></h3>
        <p><?php the_sub_field('date'); ?></p>
        <p><?php the_sub_field('instructor'); ?></p>
       <img src="<?php echo the_sub_field('rating'); ?>" >
    </div>
    </div>
    <?php endwhile; ?>
 <?php endif; ?>




    </div>




<?php get_footer(); ?>
