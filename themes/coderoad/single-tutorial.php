<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area archive-single">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
						
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<div class="single-header-info">
						<?php the_title( '<h2 class="tutorial-archive-title">', '<span class="single-rectangle"></span></h2>' ); ?>
						<img class="bookmark-icon" src="<?php echo get_template_directory_uri()?>/assets/mobile-assets/Mobile Icons_Header/Icons/Bookmark@3x.png"/>
					</div>
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
					
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content() ?>
					<div class="tutorial-info">
						<p><img class="tutorial-icon" src="<?php echo get_template_directory_uri()?>/assets/desktop-assets/component/Stars/Group 3@3x.png"><?php echo get_post_meta($post->ID, 'rating', true); ?></p>
						<p class="tutorial-text"><?php echo get_post_meta($post->ID, 'enrolled_students', true);?> Students enrolled</p>
						<p><img class="tutorial-icon" src="<?php echo get_template_directory_uri()?>/assets/mobile-assets/Mobile Icons_Header/Icons/User@3x.png"><?php the_author(); ?></p>    
						<?php the_date( 'm / Y', '<p class="tutorial-date"> Uploaded ', '</p>')?>
						<p><img class="tutorial-icon" src="<?php echo get_template_directory_uri()?>/assets/mobile-assets/Mobile Icons_Header/Icons/Language@3x.png"><?php echo get_post_meta($post->ID, 'supported_languages', true); ?></p>
					</div> 
					<div class="tutorial-required">
						<h2 class="tutorial-text">
							<?php while ( have_rows('custom_texts') ) : the_row(); ?>
								<?php the_sub_field('message'); ?>
							<?php endwhile; ?>
						</h2>
						<div class="tutorial-tags-list">
							<?php
							$post_tags = get_the_tags();
							foreach( $post_tags as $tag) :
							?>
							
							<p><img class="tutorial-single-icons" src="<?php echo get_template_directory_uri();?>/assets/mobile-assets/Mobile Icons_Header/Icons/Check@3x.png"/><?php echo $tag->name?></p>
							
							<?php
							endforeach;
							?>
						</div>
						<h2>Requirements:</h2>
						<?php while ( have_rows('requirements') ) : the_row(); ?>
							<div class="tutorial-requirements-list">
								<?php
									$image = get_sub_field('requirements_image');
								?>
								<img class='tutorial-single-icons' src="<?php echo $image['url']?>"/>
								<p>
									<?php the_sub_field('requirements_information'); ?>
								<p>
							</div>
    					<?php endwhile; ?></p>
					</div>
					<?php comments_template('/comments-tutorial.php');?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
