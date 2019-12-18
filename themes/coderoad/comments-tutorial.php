<?php
/**
 * The template for displaying comments.
 *
 * @package RED_Starter_Theme
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			Comments:
        </h2>
        
        <?php comment_form( array(
		'title_reply'          => esc_html( '' ),
        'comment_notes_before' => wp_kses( '<p class="comment-notes">Want to join the discussion? Feel free to contribute!</p>', array( 'p' => array( 'class' => '' ) ) ),
        'logged_in_as'  => '',
        'comment_field' =>  '<p>Leave a comment or ask a question:<textarea placeholder="Start typing a comment or question..." id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
		'label_submit'         => esc_html( 'Send' ),
		'cancel_reply_link'    => esc_html( '[Cancel reply]' )
    ) ); ?>
    
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html( 'Comment navigation' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html( 'Older Comments' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html( 'Newer Comments' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

        
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'callback' => 'red_starter_comment_list'
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html( 'Comment navigation' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html( 'Older Comments' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html( 'Newer Comments' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation. ?>

    <?php endif; // Check for have_comments(). ?>
    
    

    <!-- TODO add comment form -->

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html( 'Comments are closed.' ); ?></p>
    <?php endif; ?>
    

</div><!-- #comments -->