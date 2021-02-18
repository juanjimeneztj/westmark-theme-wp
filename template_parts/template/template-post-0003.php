<?php

while ($all_query->have_posts()) : $all_query->the_post();
        $img_url = (get_the_post_thumbnail_url()!=null)?get_the_post_thumbnail_url() : get_template_directory_uri().'/images/image0001.png';
        printf('<article id="post-%5$s" class="my-4">
                    <div class="container-fluid px-0">
                        <div class="row mx-0 align-items-center justify-content-center">
                            <div class="col-12 col-sm-6 px-0 pr-sm-3 pr-lg-5 mb-3 mb-sm-0">
                                <a href="%1$s">
                                    <img src="%2$s" alt="%3$s" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-12 col-sm-6">
                                <h3 class="font-weight-light"><a href="%1$s">%3$s</a></h3>

                                <p>%4$s</p>

                                <a href="%1$s" class="btn btn-secondary btn-sm text-uppercase rounded-pill px-5 py-2">Listen Now</a>
                            </div>
                        </div>
                    </div>
                </article>',
                get_the_permalink(),
                $img_url,
                get_the_title(),
                get_the_excerpt(),
                get_the_ID(),
        );
endwhile;