<?php
if( ! function_exists( 'gsweb_better_comments' ) ):
function gsweb_better_comments($comment, $args, $depth) {
    ?>
    <div id="comments-content-<?=comment_ID()?>">
        <div class="container px-0">
            <div class="row justify-content-center">
                <div class="col-2 col-lg-1">
                    <img src="<?=get_avatar_url($comment,$size='52',$default='https://secure.gravatar.com/avatar/c68d860ff9079f73eef8653d413ae796?s=74&d=mm&r=g' );?>" alt="User" class="img-fluid rounded">
                </div>
                <div class="col-10 col-lg-11">
                    <div class="comment-block">
                        <div class="comment-arrow"></div>
                        <?php if ($comment->comment_approved == '0') : ?>
                            <em><?php esc_html_e('Your comment is awaiting moderation.','5balloons_theme') ?></em>
                            <br />
                        <?php endif; ?>
                        <div class="comment-by mb-5">
                            <p class="float-right"><span> <a href="#"><i class="fa fa-reply"></i> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a></span></p>
                            <p class="p-0 m-0 text-capitalize"><strong><?php echo get_comment_author() ?></strong></p>
                            <p><small class="date"><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , '5balloons_theme'), '<strong>'.get_comment_date().'</strong>',  get_comment_time()) ?></small></p>
                            <p><?php comment_text() ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
        }
endif;