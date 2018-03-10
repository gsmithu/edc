<?php if ( post_password_required() ) {
	return;
} ?>
<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
    <div class="comments_line"></div>
    <h3 class="comments-title">
        <?php
            printf( _nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title'),
                number_format_i18n( get_comments_number() ), get_the_title() );
            ?>
    </h3>
    <ul class="comment-list">
        <?php 
            wp_list_comments( array(
                'short_ping'  => true,
                'avatar_size' => 50,
            ) );
            ?>
    </ul>
    <?php endif; ?>
    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
    <p class="no-comments">
        <?php _e( 'Comments are closed.' ); ?>
    </p>
    <?php endif; ?>
    
    <div class="comments_line"></div>
    <?php
       $args = array(
            'fields' => apply_filters(
                'comment_form_default_fields', array(
                    'author' =>'<p class="comment-form-author">' . '<input id="author" placeholder="Name" name="author" type="text" value="' .
                        esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
                        ( $req ? '*' : '' )  .
                        '</p>'
                        ,
                    'email'  => '<p class="comment-form-email">' . '<input id="email" placeholder="Email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                        '" size="30"' . $aria_req . ' />'  .
                        ( $req ? '*' : '' ) 
                         .
                        '</p>',
                    'url'    => '<p class="comment-form-url">' .
                     '<input id="url" name="url" placeholder="http://your-site-name.com" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
                    '<label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
                       '</p>'
                )
            ),
            'comment_field' => '<p class="comment-form-comment">' .
                '<textarea id="comment" name="comment" placeholder="Your comment..." cols="45" rows="8" aria-required="true"></textarea>' .
                '</p>',
            'comment_notes_after' => '',
            'title_reply' => '<div><h3>Leave a comment</h3></div>'
        );
    
        comment_form( $args );
    ?>
</div>
