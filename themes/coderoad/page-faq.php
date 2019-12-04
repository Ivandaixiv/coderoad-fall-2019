<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

<div class="site-content">
    
    <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->
    
    <section class="faq-h2-container">
        <h2 class="faqh2">FAQ</h2>
    </section>

    <div class="search-container">
        <form action=""></form>
    </div>
    
    <section class="tutorial-container">
        <div class="tutorial-h2">
            <h2 >Tutorials/ Creating</h2>
            <div class="tutorial-accent"></div>
          
        </div>
        <div class="link-container">
            <a href="">Where an I see my progress?</a>
            <a href="">How do I create a tutorial?</a>
            <a href="">Can I edit my posted tutorial?</a>
        </div>
    </section>

    <section class="profile-container">
        <div class="profile-h2">
            <h2>Profile/ Account</h2>
        </div>
        <div class="link-container">
            <a href="">How do I change my profile picture?</a>
            <a href="">How do I change my password?</a>
        </div>

    </section>
    



	<!-- <div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?> -->
	</div><!-- .entry-content -->
</div>
<?php get_footer(); ?>
