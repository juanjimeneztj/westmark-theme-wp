<?php
    /*
    Template Name: FULLWIDTH PAGE AF
    Template Post Type: page
    */
    defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

    get_header();

    if (have_posts()) :
        while (have_posts()) : the_post();
?>
    <main class="single py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col">
                    <article>
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

    get_footer();