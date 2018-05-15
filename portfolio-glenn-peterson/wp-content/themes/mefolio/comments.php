<?php

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="clearfix">
	<?php
	if ( have_comments() ) : ?>
		<h5>
			<?php
				$comments_number = get_comments_number();
				printf(
					esc_html(_nx(
						'%1$s comment',
						'%1$s comments',
						$comments_number,
						'comments title',
						'mefolio'
					)),
					number_format_i18n( $comments_number )
				);
			?>
		</h5>
	  	<ul class="unstyled comments-list">
		<?php 
			wp_list_comments(array(
				'callback'	=> 'mefolio_list_comment'
			));
		?>
		</ul>
		<div class="text-center">
			<div class="float-left">
				<?php previous_comments_link() ?>
			</div>
			<div class="float-right">
				<?php next_comments_link() ?>
			</div>
		</div>
	<?php 
	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php echo esc_html__( 'Comments are closed.', 'mefolio' ); ?></p>
	<?php
	endif;
	?>
</div>
	<?php
	comment_form();
