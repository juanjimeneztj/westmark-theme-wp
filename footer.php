<?php $juanjimeneztj = new core_gsweb(); ?>

        <footer class="py-5">
            <div class="container">
                <div class="row align-items-center justify-items-center">
                    <div class="col-8 col-sm-8 col-md-3 col-lg-2">
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
                <div class="row pb-4">
                    <div class="col-8 col-sm-8 col-md-3">
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

        <?php wp_footer(); ?>

        <?php
            
            if($juanjimeneztj->top_navbar_active()){
                $juanjimeneztj->jquery();
                $juanjimeneztj->top_navbar_script();
            }
        ?>
    </body>
</html>