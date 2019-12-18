<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



<section class="code-image">

<?php while ( have_posts() ) : the_post(); ?>
<?php the_post_thumbnail(   'feature-post image'    ); ?>
<div class="title-content-wrapper">
<div class="title-content">
<h2 class="code-title"><?php the_title(); ?></h2>
<p class="sub-text"><?php the_content(); ?></p>
<a href="<?php echo get_permalink(get_page_by_path('sign-up'));?>">Sign Up</a>
</div>
</div>



<?php endwhile; // End of the loop. ?>
</section>



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




 <section class="tutorial">

<div class="video">
 <iframe width="560" height="315" src="<?php the_field('video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
 <div class="tutorial-info">
 <?php if(get_field('tutorial')): ?>
    <?php while(the_repeater_field('tutorial')): ?>
        <h2><?php the_sub_field('video_text'); ?></h2>
        <h3><?php the_sub_field('author'); ?></h3>
        <p><?php the_sub_field('paragraph'); ?></p>
    <?php endwhile; ?>
 <?php endif; ?>

 
<div class="social-media">
 <img  src="<?php echo home_url(); ?>/wp-content/uploads/2019/12/twitter@3x.png">
 <img  src="<?php echo home_url(); ?>/wp-content/uploads/2019/12/github-icon-github-png-image.png">
 <img  src="<?php echo home_url(); ?>/wp-content/uploads/2019/12/screen_shot_2019-12-06_at_3.08.27_pm.png">
 <img  src="<?php echo home_url(); ?>/wp-content/uploads/2019/12/Mail@3x.png">
</div>
</div>	    
    </section>




<section class="tutorials-section">

        <?php 
        $tutorials = get_posts( array(
            'posts_per_page' => '3',
            'post_type' => 'tutorial'
        ) );
       
        foreach($tutorials as $post):  setup_postdata( $post );
         

            echo '<a class="tutorial-section" href="' . get_the_permalink(). '">';
            if(has_post_thumbnail()){
            echo '<img  src="' . get_the_post_thumbnail_url() . '"/>';
            }
       
           
           ?> 
           <div class="tutorial-info">
           <h2><?php the_title();?></h2>
           <h5><?php echo get_the_date();?></h5>
           <h4><?php the_author();?></h4>
           
        </div>
           <?php echo '</a>';
          
        endforeach;
        wp_reset_postdata();
        ?>
       
</section>


<div class="testimonial-title">
        <h2>Happy learning, happy creating</h2>
        </div>
       

<div class="testimonial main-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "autoPlay": true }'>


<?php if(get_field('testimonial')): ?>
    <?php while(the_repeater_field('testimonial')): ?>
      
    <div class="testimonial-single">
    
 
        <p><?php the_sub_field('paragraph'); ?></p>
       
        <img src="<?php echo the_sub_field('profile_image'); ?>" >
        <h5><?php the_sub_field('profile-name'); ?></h5>
    </div>
   
      
    <?php endwhile; ?>
 <?php endif; ?>
    </div>
   
<div class="create-instructions">
    <?php if(get_field('create_instructions')): ?>
    <?php while(the_repeater_field('create_instructions')): ?>
        <h2><?php the_sub_field('title'); ?></h2>
        <p><?php the_sub_field('paragraph'); ?></p>

        <?php endwhile; ?>
 <?php endif; ?>
 </div>

 <div class="steps">

 <?php if(get_field('steps')): ?>
    <?php while(the_repeater_field('steps')): ?>
        <div class="step">
        <h2><?php the_sub_field('step'); ?></h2>
        <p><?php the_sub_field('paragraph'); ?></p>
    </div>
       <?php endwhile; ?>
 <?php endif; ?>
 </div>

<div class="notification-email">
 <?php if(get_field('notification-email')): ?>
    <?php while(the_repeater_field('notification-email')): ?>
        <h2><?php the_sub_field('title'); ?></h2>
        <p><?php the_sub_field('paragraph'); ?></p>
        
       <?php endwhile; ?>
 <?php endif; ?>
 
 </div>
<div class="email-input">
 <?php echo do_shortcode( '[contact-form-7 id="214" title="Email for notification"]' ); ?>
 </div>

   
   


<?php get_footer(); ?>
