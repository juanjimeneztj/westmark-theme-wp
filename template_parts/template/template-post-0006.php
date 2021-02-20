<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="news-slider" class="owl-carousel">
<?php

while ($all_query->have_posts()) : $all_query->the_post();
    $img_url = (get_the_post_thumbnail_url() != null) ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/images/image0001.png';
    printf('<div class="post-slide" id="gsweb-post-%1$s">
                <div class="post-img">
                    <img src="%2$s" alt="">
                    <a href="%4$s" class="over-layer"><i class="fa fa-link"></i></a>
                </div>
                <div class="post-content">
                    <h3 class="post-title">
                        <a href="%4$s">%3$s</a>
                    </h3>
                    <p class="post-description">%5$s</p>
                    <span class="post-date"><i class="fa fa-clock-o"></i>%6$s</span>
                    <a href="%4$s" class="read-more">read more</a>
                </div>
            </div>',
            get_the_ID(),
            $img_url,
            get_the_title(),
            get_the_permalink(),
            substr(get_the_excerpt(), 0, 200) . '[...]',
            get_the_date(),
        );
endwhile;

?>
</div>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $("#news-slider").owlCarousel({
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [980, 2],
            itemsMobile: [600, 1],
            navigation: true,
            navigationText: ["", ""],
            pagination: true,
            autoPlay: true
        });
    });
</script>