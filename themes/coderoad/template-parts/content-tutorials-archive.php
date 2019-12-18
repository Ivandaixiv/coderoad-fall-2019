<?php

/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">




	</header><!-- .entry-header -->

	<div class="entry-content tutorial-index">
		<div class="thumbandpost">
			<?php if (has_post_thumbnail()) : ?>
				<?php the_post_thumbnail('large'); ?>
			<?php endif; ?>


			<?php if ('post' === get_post_type()) : ?>

			<?php endif; ?>


		</div>

		<div class="title-container">
			<?php the_title(); ?>
			<div class="paragraph-container"><?php the_excerpt(); ?>
			</div>
		</div>

		<div class="tutorial-info">
			<p><img class="tutorial-icon" src="<?php echo get_template_directory_uri() ?>/assets/desktop-assets/component/Stars/Group 3@3x.png"><?php echo get_post_meta($post->ID, 'rating', true); ?></p>

			<p><img class="tutorial-icon" src="<?php echo get_template_directory_uri() ?>/assets/mobile-assets/Mobile Icons_Header/Icons/User@3x.png"><?php echo get_post_meta($post->ID, 'enrolled_students', true); ?>
			</p>

			<?php the_date('m / Y', '<p class="tutorial-date"> Uploaded ', '</p>') ?>

			<section class="button-container">
				<a class="vsc-button" href="http://localhost:3000/coderoad/vs-code/">Start in VS Code</a>

				<a class="share-button" href="http://localhost:3000/coderoad/my-tutorials/">Share Tutorial</a>
			</section>


		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->