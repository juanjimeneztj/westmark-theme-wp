<?php
    defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

    get_header();

    if (have_posts()) :
        while (have_posts()) : the_post();
?>
    <main class="single py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-8">
                    <article>
                        <?= the_content(); ?>
                    </article>
                </div>
                <div class="col-12 col-lg-4">
                    <aside class="sidebar">
                        <?php if ( is_active_sidebar( 'sidebar-page-widget' ) ) : ?>
                            <div id="sidebar-page-widget" class="primary-sidebar widget-area" role="complementary">
                                <?php dynamic_sidebar( 'sidebar-page-widget' ); ?>
                            </div>
                        <?php endif; ?>
                    </aside>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </main>
<?php
        endwhile;
    endif;
    wp_reset_postdata();

    get_footer();