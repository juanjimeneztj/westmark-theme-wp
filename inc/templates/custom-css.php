<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://juanjimeneztj.github.io/cdn/css/bootstrap/5.0.0/bootstrap.min.css" rel="stylesheet" />
    <style>
        #wpcontent{
            padding-left: 0!important;
        }
        #wpcontent .notice{
            position: absolute;
            top: 0;
            right: 0;
            z-index: 8888;
            background: var(--bs-success);
            color:#fff;
            width: 100%;
            max-width: 300px;
            padding: 15px;
            border-radius: 7px;
            box-shadow: 0 0 20px rgb(0 0 0 / 50%);
        }
        #wpcontent .notice > p > strong{
            font-size: 18px!important;
        }
        #wpcontent .notice .notice-dismiss::before{
            color:#fff!important;
        }
    </style>
</head>

<body>
    <?php settings_errors() ?>
    <section class="py-3">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col">
                    <h1 class="fw-bolder px-4 mt-4 mb-0">Theme Settings:</h1>
                </div>
            </div>
            <div class="row px-4 py-5">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item mb-0" role="presentation">
                            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="false">General</button>
                        </li>
                        <li class="nav-item mb-0" role="presentation">
                            <button class="nav-link" id="topBar-tab" data-bs-toggle="tab" data-bs-target="#topBar" type="button" role="tab" aria-controls="topBar" aria-selected="true">Top Bar</button>
                        </li>
                        <li class="nav-item mb-0" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">another</button>
                        </li>
                        <li class="nav-item mb-0" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">another</button>
                        </li>
                    </ul>
                    <div class="tab-content p-4" id="myTabContent">
                        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                            <form method="post" action="options.php" name="frmGeneral">
                                <?php settings_fields( 'gsweb-settings-group' ) ?>
                                <?php do_settings_sections( 'gsweb' ) ?>
                                <?php submit_button( 'Save Changes' , 'btn btn-success' ) ?>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="topBar" role="tabpanel" aria-labelledby="topBar-tab">
                            <form method="post" action="options.php" name="frmTop">
                                <?php settings_fields( 'gsweb-settings-group-topbar' ) ?>
                                <?php do_settings_sections( 'gswebtopbar' ) ?>
                                <?php submit_button( 'Save Changes' , 'btn btn-success' ) ?>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, officia! At, culpa quos quae eveniet aliquid voluptatem. Veniam delectus, molestias, optio in itaque atque fugiat repellendus voluptates commodi rem tenetur.</p>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, officia! At, culpa quos quae eveniet aliquid voluptatem. Veniam delectus, molestias, optio in itaque atque fugiat repellendus voluptates commodi rem tenetur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://juanjimeneztj.github.io/cdn/js/bootstrap/5.0.0-beta3/bootstrap.min.js"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script>
        let $document = $(document);

        $document.ready(()=>{
            $('#wpcontent').find('input[type=submit]').removeClass('button');
        });
    </script>
</body>

</html>