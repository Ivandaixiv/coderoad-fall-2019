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

    <section class="illustration-container"></section>
    
    
    <section class="tutorial-response-container">
    
        <div class="tutorial-h2">
            <h2>Tutorials/ Creating</h2>
            <!-- <div class="tutorial-accent"></div> -->
        </div>
        <div class="question-answer">
            <h4>Where an I see my progress?</h4>
            <p>You can view the progress of your Tutorials
               in the My Tutorials page under the section
               My Progess.
            </p>
        </div>
    </section>
</div>
<?php get_footer(); ?>
