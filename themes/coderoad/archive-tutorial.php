<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area archive-tutorial">
	<main id="main" class="site-main" role="main">
		<h2>Tutorials</h2>
		<p class="tutorial-archive-title">
			Find what to learn next<span class="contact-rectangle archive-rectangle"></span>
		</p>
		<section class="list-headings">

			<h3 class="tutorial-name">Tutorial Name</h3>
			<div class="list-group">
				<h3 class="wishlist">Wishlist</h3>
				<h3 class="rating">Rating</h3>
				<h3 class="enrolled">Enrolled</h3>
			</div>
			
		</section>
		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

				<?php
						get_template_part('template-parts/content-tutorials-archive');
						?>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>