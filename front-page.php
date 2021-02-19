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
                    'template'       => 'template-post-0001',
                ]); ?>
            </div>
        </div>
        <div class="row">
            <?php $juanjimeneztj->recent_posts_home([
                'posts_per_page' => 3,
                'template'       => 'template-post-0002',
                'offset'         => 1,
            ]); ?>
        </div>
    </div>
</section>

<section id="block-0001">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="#" class="d-flex align-items-center justify-content-center flex-column py-5 px-4 px-md-0">
                    <h1 class="font-weight-bold text-primary">Your ad here</h1>
                    <p><small class="text-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit.</small></p>
                    <button class="btn btn-secondary btn-sm text-uppercase rounded-pill px-5 py-2">Get Started</button>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="vlog-home" class="my-5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-9 col-lg-7">
                <h1 class="text-center text-primary mb-4"><strong>Vlog</strong></h1>
                <h6 class="text-center font-weight-light mb-5">If the path is beautiful, let us not ask where it leads. my religion is very simple. my religion is kindness. each of us has within our power the ability.</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-10 px-1 pl-md-0">
                <div class="box">
                    <div class="container-fluid">
                        <div class="row">
                            <?php $juanjimeneztj->recent_posts_home([
                                'posts_per_page' => 6,
                                'template'       => 'template-post-0005',
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2">
                <a href="#">
                    <img src="<?=get_template_directory_uri()?>/images/block0002.png" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>

<section id="podcast-home" class="my-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h5 class="text-primary">Podcasts</h5>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php $juanjimeneztj->recent_posts_home([
                    'posts_per_page' => 1,
                    'template'       => 'template-post-0003',
                ]); ?>
            </div>
        </div>
        <div class="row">
            <?php $juanjimeneztj->recent_posts_home([
                'posts_per_page' => 3,
                'template'       => 'template-post-0004',
                'offset'         => 1,
            ]); ?>
        </div>
    </div>
</section>


<?php get_footer();