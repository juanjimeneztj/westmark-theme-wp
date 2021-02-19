<?php
$args = array(
    'status' => 'approve'
);

if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments-area">
 
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                $nComments = (get_comments_number()<10)?'0'.get_comments_number():get_comments_number();
                printf( _nx( '01 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'american_founders' ),
                    $nComments, '' );
            ?>
        </h2>
 
        <div class="comment-list my-4">
            <?php
                wp_list_comments( array(
                    'short_ping'  => true,
                    'avatar_size' => 74,
                    'callback' => 'gsweb_better_comments'
                ) );
            ?>
        </div>
 
        <?php
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'american_founders' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&amp;larr; Older Comments', 'american_founders' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &amp;rarr;', 'american_founders' ) ); ?></div>
        </nav>
        <?php endif; ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.' , 'american_founders' ); ?></p>
        <?php endif; ?>
 
    <?php endif; ?>
 
</div>