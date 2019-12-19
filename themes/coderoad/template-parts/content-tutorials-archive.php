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
			<div class="thumbnail">
				<a href="<?php the_permalink()?>">
					<?php if (has_post_thumbnail()) : ?>
						<?php the_post_thumbnail('large'); ?>
					<?php endif; ?>
				</a>
			</div>


			<?php if ('post' === get_post_type()) : ?>

			<?php endif; ?>


		</div>

		<div class="title-container">
			<?php the_title(); ?>
			<div class="paragraph-container"><?php the_excerpt(); ?>
			</div>
		</div>

		<div class="tutorial-info">

			<p><img class="tutorial-icon icon1" src="<?php echo get_template_directory_uri() ?>/assets/desktop-assets/Icons/Bookmark.png"><?php echo get_post_meta($post->ID, 'rating', true); ?></p>

			<p><img class="tutorial-icon icon2" src="<?php echo get_template_directory_uri() ?>/assets/desktop-assets/component/Stars/Group 3@3x.png"><?php echo get_post_meta($post->ID, 'rating', true); ?></p>

			<p><img class="tutorial-icon icon3" src="<?php echo get_template_directory_uri() ?>/assets/mobile-assets/Mobile Icons_Header/Icons/User@3x.png"><?php echo get_post_meta($post->ID, 'enrolled_students', true); ?>
			</p>


			<?php the_date('m / Y', '<p class="tutorial-date"> Uploaded ', '</p>') ?>




		</div>
		<div class="button-container">
			<a class="vsc-button" href="https://code.visualstudio.com/" target="_blank">Start in VS Code</a> <br>

			<a class="share-button" href="https://www.facebook.com/" target="_blank">Share Tutorial</a>
		</div>

	</div><!-- .entry-content -->
</article><!-- #post-## -->