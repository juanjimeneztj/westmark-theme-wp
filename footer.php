<?php $juanjimeneztj = new core_gsweb(); ?>

<footer class="pt-5 pb-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-3 col-xl-2">
                        <img src="<?=get_template_directory_uri()?>/assets/images/footer_logo.png" alt="Westmark Logo" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-6 col-xl">
                        <h5 class="fw-bolder pb-2">About us</h5>
                        <p>Westmark Associates is an internet marketing firm specializing in the financial niche since 2005. Services include, but not limited to, Affiliate Marketing, Joint Ventures, Launch Partner support, Infusionsoft Sales Campaigns (certified partners), Digital Marketing, Westmark Media for both Advertisers and Publishers and more to come.</p>
                        <p><i class="fas fa-map-marker-alt"></i> Located in Jacksonville Florida, USA</p>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3">
                        <h5 class="fw-bolder">Contact us</h5>
                        <a href="#" class="text-success d-block mb-1"><i class="far fa-envelope"></i> info@westmarkassociates.com</a>
                        <a href="#" class="text-success d-block mb-1"><i class="fab fa-facebook-square"></i> Facebook</a>
                        <a href="#" class="text-success d-block mb-1"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="#" class="text-success d-block mb-1"><i class="fab fa-youtube"></i> Youtube</a>
                    </div>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
        <script src="https://juanjimeneztj.github.io/cdn/js/bootstrap/5.0.0-beta3/bootstrap.min.js" ></script>
        <script src="https://juanjimeneztj.github.io/cdn/js/fontawesome/5.15.3/all.min.js" ></script>
        <script src="https://juanjimeneztj.github.io/cdn/js/validate-default-forms.min.js" ></script>
        <script src="<?=get_template_directory_uri()?>/assets/main.js"></script>
        <script src="<?=get_template_directory_uri()?>/assets/js/wow.min.js"></script>
        <script>
            new WOW(
                {
                    boxClass:     'wow',      // default
                    animateClass: 'animate__animated', // default
                    offset:       0,          // default
                    mobile:       true,       // default
                    live:         true        // default
                }
            ).init();


            $document = $(document);
            $document.ready(function(){
                let $ele = $('#header-menu');
                let $code = $ele.parent().html();
                $ele.parent().attr('id','gsweb-remove');
                let $parentContainer = $('#gsweb-remove');
                $ele.parent().parent().append($code);
                $parentContainer.remove();
            });
        </script>
    </body>
</html>