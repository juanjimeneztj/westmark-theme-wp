<?php $juanjimeneztj = new core_gsweb(); ?>

        <footer class="py-5">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-8 col-sm-8 col-md-3 col-lg-2 text-center text-md-left">
                        <?php $juanjimeneztj->logo_footer() ?>
                    </div>
                    <div class="col-12 col-md-9 col-lg-10">
                        <div class="navigation-footer text-center text-md-right">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'footer-menu',
                                    'menu_id' => 'footer-menu',
                                ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr class="my-4" />
                    </div>
                </div>
                <div class="row align-items-center justify-content-center pb-4">
                    <div class="col-8 col-sm-8 col-md-3 text-center text-md-left">
                        <p>© <?php $juanjimeneztj->company_footer() ?> <?=date('Y')?></p>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="navigation-footer-secondary  text-center text-md-right">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'footer-menu-secondary',
                                    'menu_id' => 'footer-menu-secondary',
                                ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="<?=get_template_directory_uri()?>/js/bootstrap.min.js"></script>
        <script src="<?=get_template_directory_uri()?>/js/bootstrap.bundle.min.js"></script>
        <script src="<?=get_template_directory_uri()?>/vendor/fortawesome/font-awesome/js/all.js"></script>

        <?php wp_footer(); ?>

        <?php
            
            if($juanjimeneztj->top_navbar_active()){
                $juanjimeneztj->jquery();
                $juanjimeneztj->top_navbar_script();
            }
        ?>

        <script>
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
        </script>
    </body>
</html>