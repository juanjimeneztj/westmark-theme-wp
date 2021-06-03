<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Stylesheets -->
        <link href="https://juanjimeneztj.github.io/cdn/css/bootstrap/5.0.0/bootstrap.min.css" rel="stylesheet" />
        <link href="https://juanjimeneztj.github.io/cdn/css/theme/westmark.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
        <link href="<?=get_template_directory_uri()?>/assets/main.css" rel="stylesheet" />

        <!-- Scripts Libraries -->
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>

        <title>Westmark</title>

        <?php wp_head() ?>
    </head>
    <body>
        <?php if(get_option('gsweb_settings_bgtopnavbar_text')): ?>
            <div class="alert bg-primary alert-dismissible fade show rounded-0 gsweb-top-alert py-5 mb-0 wow animate__animated animate__fadeIn" role="alert" <?=(get_option('gsweb_settings_bgtopnavbar'))?'style="background-image: url('.get_option('gsweb_settings_bgtopnavbar').')"':''?>>
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col">
                            <h3 class="text-white text-center fw-bolder"><?=get_option('gsweb_settings_bgtopnavbar_text')?> <?=(get_option('gsweb_settings_bgtopnavbar_link_text'))?'<a class="text-white" href="'.((get_option('gsweb_settings_bgtopnavbar_link_url'))?get_option('gsweb_settings_bgtopnavbar_link_url'):'#').'" target="_blank">'.get_option('gsweb_settings_bgtopnavbar_link_text').'</a>':''?></h3>
                        </div>
                    </div>
                </div>
                <button type="button" class="gsweb-btn-close border-0 text-white fs-4 position-absolute" data-bs-dismiss="alert" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        <?php endif ?>
        <header class="py-2 wow animate__animated animate__fadeIn">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col">
                        <a href="index.html">
                            <img src="<?=get_template_directory_uri()?>/assets/images/logo.png" class="logo" alt="Westmark Trading">
                        </a>
                    </div>
                </div>
            </div>
        </header>