<?php
defined('ABSPATH') or die('No script kiddies please!');

get_header();

$juanjimeneztj = new core_gsweb();

if (have_posts()) :
    while (have_posts()) : the_post();
?>

        <main class="single py-5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col">
                        <article>
                            <!-- <figure class="text-center"><img src="<?= get_the_post_thumbnail_url() ?>" class="img-fluid" alt="Responsive image"></figure> -->
                            <?= the_content(); ?>
                        </article>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </main>
<?php

    endwhile;
endif;

wp_reset_postdata();

?>

<section id="comments">
    <div class="container">
        <div class="row">
            <div class="col">
                <hr class="bg-info border-0 ml-0" style="height: 2px;width:60px" />
                <?php
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form method="post" id="commentform" name="formComment" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" class="py-5 needs-validation" novalidate>
                    <hr class="bg-info border-0 ml-0" style="height: 2px;width:60px" />
                    <h2 class="font-weight-bolder text-primary mb-4">Leave a comment</h2>
                    <?php if ($user_ID) : ?>
                        <p class="font-weight-light">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out »</a></p>
                    <?php else : ?>

                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control mx-auto" name="author" id="author" placeholder="Name *" pattern="[A-Za-z\s ]+" title="Invalid name" value="<?php echo $comment_author; ?>" tabindex="1" required />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please enter your name.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" class="form-control mx-auto" name="email" id="email" value="<?php echo $comment_author_email; ?>" placeholder="Email *" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address" tabindex="2" required />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control mx-auto" name="url" id="url" value="<?php echo $comment_author_url; ?>" placeholder="URL (Optional)" pattern="https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)" title="Invalid name" tabindex="3" />
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>

                    <textarea class="form-control" rows="10" name="comment" id="comment" placeholder="Your comment *" tabindex="4" required></textarea>
                    <div class="invalid-feedback">
                        Please enter a message in the textarea.
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>

                    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

                    <button type="submit" name="submit" class="btn btn-secondary text-uppercase rounded px-5 py-2 my-4" id="submit" tabindex="5">Post Comment</button>

                    <?php do_action('comment_form', $post->ID); ?>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="recent-posts">
    <div class="container">
        <div class="row">
            <div class="col">
                <hr class="bg-info border-0 ml-0" style="height: 2px;width:60px" />
                <h2 class="font-weight-bolder text-info">You might also like</h2>
            </div>
        </div>
        <div class="row">
            <?php $juanjimeneztj->recent_posts_home([
                'posts_per_page' => 6,
                'template'       => 'template-post-0006',
            ]); ?>
        </div>
    </div>
</section>

<?php

get_footer();
