<?php

while ($all_query->have_posts()) : $all_query->the_post();
        $img_url = (get_the_post_thumbnail_url()!=null)?get_the_post_thumbnail_url() : get_template_directory_uri().'/images/image0001.png';
        printf('<div class="col-12 col-md-6 col-lg-4">
                    <article id="post-%5$s" class="my-4">
                        <div class="container-fluid px-0">
                            <div class="row mx-0 align-items-center justify-content-center">
                                <div class="col-12 px-0 mb-3 mb-sm-0">
                                    <a href="%1$s">
                                        <figure><img src="%2$s" alt="%3$s" class="img-fluid"></figure>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <h3 class="font-weight-light"><a href="%1$s">%3$s</a></h3>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>',
                get_the_permalink(),
                $img_url,
                get_the_title(),
                substr(get_the_excerpt(),0,200).'[...]',
                get_the_ID(),
        );
endwhile;