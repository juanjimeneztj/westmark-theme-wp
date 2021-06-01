<?php
    require_once 'core/juanjimeneztj.class.php'; 
    $juanjimeneztj = new core_gsweb();    
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' );?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <!-- Stylesheets -->
        <link href="https://juanjimeneztj.github.io/cdn/css/bootstrap/5.0.0/bootstrap.min.css" rel="stylesheet" />
        <link href="https://juanjimeneztj.github.io/cdn/css/theme/westmark.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
        <link href="<?=get_template_directory_uri()?>/assets/main.css" rel="stylesheet" />

        <!-- Scripts Libraries -->
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
        <script src="<?=get_template_directory_uri()?>/js/ligthslider.js"></script>

        <title><?=bloginfo('name')?></title>
        <?php wp_head() ?>
    </head>
    <body <?php body_class();?>>
        <div class="alert bg-primary alert-dismissible fade show rounded-0 gsweb-top-alert py-5 mb-0 wow animate__animated animate__fadeIn" role="alert">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col">
                        <h3 class="text-white text-center fw-bolder">Lorem ipsum dolor sit amet consectetur adipisicing elit Id doloribus nemo maxime </h3>
                    </div>
                </div>
            </div>
            <button type="button" class="gsweb-btn-close border-0 text-white fs-4 position-absolute" data-bs-dismiss="alert" aria-label="Close">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <header class="py-2 wow animate__animated animate__fadeIn">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col">
                        <a href="index.html">
                            <img src="<?=get_template_directory_uri()?>/assets/images/logo.png" class="logo" alt="Westmark Trading">
                        </a>
                    </div>
                    <div class="col text-end">
                        <div id="gsweb-mobile-menu" class="d-inline-block d-lg-none mr-0 fs-3 rounded">
                            <i class="fas fa-ellipsis-v"></i>
                        </div>
                        <nav id="gsweb-desktop-menu" class="d-none d-lg-block">
                            <button type="button" class="gsweb-menu-close border-0 text-white fs-4 position-absolute">
                                <i class="fas fa-times"></i>
                            </button>
                            <img src="<?=get_template_directory_uri()?>/assets/images/logo.png" class="logo-mobile" alt="Westmark Trading">
                            <!-- <ul>
                                <li><a href="news.html">News</a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul> -->
                            <?php
                                wp_nav_menu([
                                    'menu' => 'primary',
                                    'theme_location' => 'header-menu',
                                    'menu_id' => 'header-menu'                                    
                                ]);
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>