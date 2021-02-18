<?php

while ($all_query->have_posts()) : $all_query->the_post();
        printf('<div class="col-12 col-md-6 col-lg-4">
                    <article id="post-%1$s" class="my-3 px-3 px-md-0">
                        <h4 class="font-weight-light text-primary"><a href="%2$s">%3$s</a></h4>
                        <p><small>%4$s</small></p>
                        <a href="%2$s">Read More <i class="ml-1 fas fa-arrow-right"></i></a>
                    </article>
                </div>',
                get_the_ID(),
                get_the_permalink(),
                get_the_title(),
                get_the_excerpt(),
        );
endwhile;