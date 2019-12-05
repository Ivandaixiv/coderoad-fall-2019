<?php

/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="site-content">

    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header><!-- .entry-header -->

    <section class="faq-h2-container">
        <h2 class="faqh2">FAQ</h2>
    </section>
    <div class="image-container"></div>
    <section class="tutorial-response1-container">

        <!-- <section class="illustration-container"></section> -->

        <div class="tutorial-res1-h2">

            <h2 class="h2-element">Tutorials/ Creating</h2>
            <!-- <div class="tutorial-accent"></div> -->
        </div>
        <div class="question-answer">
            <h4 class="h4-heading">Where an I see my progress?</h4>
            <p>You can view the progress of your Tutorials
                in the My Tutorials page under the section
                My Progess.
            </p>
        </div>
    </section>
</div>
<?php get_footer(); ?>