<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();

$juanjimeneztj = new core_gsweb();

?>

<section id="widgets-home">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4">
                <div class="card shadow py-3 px-4 px-md-0 mb-3">
                    <div class="card-body">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-3 px-0 px-md-4 px-lg-3 mb-2 mb-lg-0">
                                <div class="gsweb-item-icon bg-secondary rounded d-flex align-items-center justify-content-center py-3">
                                    <i class="fas fa-pencil-alt"></i>
                                </div>
                            </div>
                            <div class="col-12 col-md-9 px-0 pl-lg-0">
                                <h6><strong>Lorem</strong></h6>
                                <p class="m-0">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <div class="card shadow-sm py-3 px-4 px-md-0 mb-3">
                    <div class="card-body">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-3 px-0 px-md-4 px-lg-3 mb-2 mb-lg-0">
                                <div class="gsweb-item-icon bg-secondary rounded d-flex align-items-center justify-content-center py-3">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                            </div>
                            <div class="col-12 col-md-9 px-0 pl-lg-0">
                                <h6><strong>Lorem</strong></h6>
                                <p class="m-0">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <div class="card shadow py-3 px-4 px-md-0 mb-3">
                    <div class="card-body">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-lg-3 px-0 px-md-4 px-lg-3 mb-2 mb-lg-0">
                                <div class="gsweb-item-icon bg-secondary rounded d-flex align-items-center justify-content-center py-3">
                                    <i class="fas fa-rocket"></i>
                                </div>
                            </div>
                            <div class="col-12 col-md-9 px-0 pl-lg-0">
                                <h6><strong>Lorem</strong></h6>
                                <p class="m-0">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog-home" class="my-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h5 class="text-primary">Blog name</h5>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php $juanjimeneztj->recent_posts_home([
                    'posts_per_page' => 1,
                ]); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer();