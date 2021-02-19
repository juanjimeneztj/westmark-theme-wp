<?php

while ($all_query->have_posts()) : $all_query->the_post();
        $img_url = (get_the_post_thumbnail_url()!=null)?get_the_post_thumbnail_url() : get_template_directory_uri().'/images/image0001.png';
        printf('<div class="col-12 col-md-6 col-lg-4 text-center">
                    <article id="post-%1$s" class="mb-5">
                        <a href="%2$s">
                            <figure><img src="%4$s" alt="" class="img-fluid"></figure>
                            <h4 class="text-primary my-2">%3$s</h4>
                            <button class="btn btn-secondary btn-sm text-uppercase rounded-pill px-5 py-2">Watch Now</button>
                        </a>
                    </article>
                </div>',
                get_the_ID(),
                get_the_permalink(),
                get_the_title(),
                $img_url,
        );
endwhile;