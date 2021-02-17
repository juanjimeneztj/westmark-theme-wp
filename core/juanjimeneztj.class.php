<?php

class core_gsweb{

    public static function logo(){
        if(get_custom_logo()!=null){
            echo '<div class="logo-header">'.get_custom_logo().'</div>';
        }else{
            echo '<div class="logo-header"><a href="'.get_site_url().'"><img src="'.get_template_directory_uri().'/images/logo.png" /></a></div>';
        }
    }

    public static function vendorBS($type=null){
        if( $type !=  null ){
            if($type == 'css'){
                if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/juanjimeneztj/vendor/twbs/bootstrap/dist/css/bootstrap.min.css')){
                    echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">';
                }else{
                    echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';
                }
            }else if($type == 'js'){
                if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/juanjimeneztj/vendor/twbs/bootstrap/dist/js/bootstrap.min.js')){
                    echo '<script src="'.get_template_directory_uri().'/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>';
                }else{
                    echo '<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>';
                }
            }else{
                echo 'Error sintaxis vendorBS function';
            }
        }else{
            if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/juanjimeneztj/vendor/twbs/bootstrap/dist/css/bootstrap.min.css')){
                echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">';
            }else{
                echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';
            }
        }
    }

    public static function vendorFAW($type=null){
        if( $type !=  null ){
            if($type == 'css'){
                if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/juanjimeneztj/vendor/fortawesome/font-awesome/css/all.min.css')){
                    echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/vendor/fortawesome/font-awesome/css/all.min.css">';
                }else{
                    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">';
                }
            }else if($type == 'js'){
                if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/juanjimeneztj/vendor/fortawesome/font-awesome/js/all.min.js')){
                    echo '<script src="'.get_template_directory_uri().'/vendor/fortawesome/font-awesome/js/all.min.js"></script>';
                }else{
                    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>';
                }
            }else{
                echo 'Error sintaxis vendorFAW function';
            }
        }else{
            if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/juanjimeneztj/vendor/fortawesome/font-awesome/css/all.min.css')){
                echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/vendor/fortawesome/font-awesome/css/all.min.css">';
            }else{
                echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">';
            }
        }
    }

    public static function top_navbar(){
        // Get values ​​to implement top navbar
        $gsweb_juanjimeneztj_navbar_text = get_theme_mod('gsweb_juanjimeneztj_top_navbar_text_title');
        $gsweb_juanjimeneztj_navbar_text_color = get_theme_mod('gsweb_juanjimeneztj_top_navbar_text_color');
        $gsweb_juanjimeneztj_navbar_text_button = get_theme_mod('gsweb_juanjimeneztj_top_navbar_text_btn');
        $gsweb_juanjimeneztj_navbar_text_button_url = get_theme_mod('gsweb_juanjimeneztj_top_navbar_text_url');
        $gsweb_juanjimeneztj_navbar_bg_color = get_theme_mod('gsweb_juanjimeneztj_top_navbar_text_nav_color');

        if($gsweb_juanjimeneztj_navbar_text){
            if($gsweb_juanjimeneztj_navbar_text_button){
                printf('<div class="gsweb-hellobar-rogueinvesting" style="background-color: %5$s;"><div class="close-gsweb-hellorbar-rogueinvesting"><i class="fa fa-times" aria-hidden="true" style="color: %4$s ;"></i></div><p style="color: %4$s ;">%1$s - <a href="%2$s" target="_blank" style="color: %4$s ;">%3$s</a></p></div>',$gsweb_juanjimeneztj_navbar_text,$gsweb_juanjimeneztj_navbar_text_button_url ,$gsweb_juanjimeneztj_navbar_text_button,$gsweb_juanjimeneztj_navbar_text_color,$gsweb_juanjimeneztj_navbar_bg_color);
            }else{
                printf('<div class="gsweb-hellobar-rogueinvesting" style="background-color: %3$s;"><div class="close-gsweb-hellorbar-rogueinvesting"><i class="fa fa-times" aria-hidden="true" style="color: %2$s;"></i></div><p style="color: %2$s;">%1$s</p></div>',$gsweb_juanjimeneztj_navbar_text,$gsweb_juanjimeneztj_navbar_text_color,$gsweb_juanjimeneztj_navbar_bg_color);
            }
        }else{
            return 0;
        }
    }

    public static function jquery(){
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>';
    }

    public static function top_navbar_active(){
        $gsweb_juanjimeneztj_navbar_text = get_theme_mod('gsweb_juanjimeneztj_top_navbar_text_title');
        if($gsweb_juanjimeneztj_navbar_text){
            return true;
        }else{
            return false;
        }
    }

    public static function top_navbar_script(){
        $topnavbar = self::top_navbar_active();
        if($topnavbar){
            echo '<script>
                $(document).ready(function(){ 
                    if($(".gsweb-hellobar-rogueinvesting").length > 0){
                        $("body").addClass("gsweb-hellobar-rogueinvesting-active"); 
                        $(".close-gsweb-hellorbar-rogueinvesting").click(function(){ 
                            $("body").removeClass("gsweb-hellobar-rogueinvesting-active"); 
                            $(".gsweb-hellobar-rogueinvesting").css("top","-80px"); 
                        }); 
                    }
                });
            </script>';
        }
    }

    public static function logo_footer(){
        $logo_footer = get_theme_mod('gsweb_juanjimeneztj_footer_logo');
        if($logo_footer){
            echo '<div class="logo-footer"><a href="'.get_site_url().'"><img src="'.$logo_footer.'" /></a></div>';
        }else{
            if(get_custom_logo()!=null){
                echo '<div class="logo-footer">'.get_custom_logo().'</div>';
            }else{
                echo '<div class="logo-footer"><a href="'.get_site_url().'"><img src="'.get_template_directory_uri().'/images/logo.png" /></a></div>';
            }
        }
    }

    public static function company_footer(){
        $company_footer = get_theme_mod('gsweb_juanjimeneztj_footer_company');
        if($company_footer){
            echo $company_footer;
        }else{
            echo 'SITE_NAME.com';
        }
    }
    
    public static function footer_disclaimer(){
        $disclaimer_footer = get_theme_mod('gsweb_juanjimeneztj_footer_disclaimer');
        if($disclaimer_footer){
            echo $disclaimer_footer;
        }else{
            echo '<p>HIGH RISK WARNING</p><p class="text-justify">Trading foreign exchange, stocks, options, or futures on margin carries a high level of risk, and may not be suitable for all investors. Before deciding to trade, you should carefully consider your objectives, financial situation, needs and level of experience. SITE_NAME provides general advice that does not take into account your objectives, financial situation or needs. The content of this website must not be construed as personal advice. The possibility exists that you could sustain a loss in excess of your deposited funds and therefore, you should not speculate with capital that you cannot afford to lose. You should be aware of all the risks associated with trading on margin.You should seek advice from an independent financial advisor. Past performance is not necessarily indicative of future success.</p><p>101 Marketside Ave. Suite 404 PMB 318 Ponte Vedra, FL 32081  |  (321) 325-1551</p>';
        }
    }

    public static function stock_header_active(){
        $s_header = get_theme_mod('gsweb_juanjimeneztj_stock_header');
        if($s_header){
            return true;
        }else{
            return false;
        }
    }

    public static function stock_header(){
        $s_header = get_theme_mod('gsweb_juanjimeneztj_stock_header');
        $s_header_symbols = get_theme_mod('gsweb_juanjimeneztj_stock_header_symbols');
        if($s_header){
            if($s_header_symbols){
                echo '
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                        {
                            "symbols": [
                                '.$s_header_symbols.'
                            ],
                            "showSymbolLogo": true,
                            "colorTheme": "light",
                            "isTransparent": false,
                            "displayMode": "adaptive",
                            "locale": "en"  
                        }
                    </script>
                </div>
                ';
            }else{
                echo '
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                        {
                            "symbols": [
                                {
                                    "proName": "FOREXCOM:SPXUSD",
                                    "title": "S&P 500"
                                  },
                                  {
                                    "proName": "FOREXCOM:NSXUSD",
                                    "title": "Nasdaq 100"
                                  },
                                  {
                                    "proName": "FX_IDC:EURUSD",
                                    "title": "EUR/USD"
                                  },
                                  {
                                    "proName": "BITSTAMP:BTCUSD",
                                    "title": "BTC/USD"
                                  },
                                  {
                                    "proName": "BITSTAMP:ETHUSD",
                                    "title": "ETH/USD"
                                  },
                                  {
                                    "description": "IWM",
                                    "proName": "AMEX:IWM"
                                  },
                                  {
                                    "description": "TLT",
                                    "proName": "NASDAQ:TLT"
                                  },
                                  {
                                    "description": "USO",
                                    "proName": "AMEX:USO"
                                  },
                                  {
                                    "description": "GLD",
                                    "proName": "AMEX:GLD"
                                  },
                                  {
                                    "description": "SLV",
                                    "proName": "AMEX:SLV"
                                  }
                            ],
                            "showSymbolLogo": true,
                            "colorTheme": "light",
                            "isTransparent": false,
                            "displayMode": "adaptive",
                            "locale": "en"  
                        }
                    </script>
                </div>
                ';
            }
        }else{
            echo '
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                        {
                            "symbols": [
                                {
                                    "proName": "FOREXCOM:SPXUSD",
                                    "title": "S&P 500"
                                  },
                                  {
                                    "proName": "FOREXCOM:NSXUSD",
                                    "title": "Nasdaq 100"
                                  },
                                  {
                                    "proName": "FX_IDC:EURUSD",
                                    "title": "EUR/USD"
                                  },
                                  {
                                    "proName": "BITSTAMP:BTCUSD",
                                    "title": "BTC/USD"
                                  },
                                  {
                                    "proName": "BITSTAMP:ETHUSD",
                                    "title": "ETH/USD"
                                  },
                                  {
                                    "description": "IWM",
                                    "proName": "AMEX:IWM"
                                  },
                                  {
                                    "description": "TLT",
                                    "proName": "NASDAQ:TLT"
                                  },
                                  {
                                    "description": "USO",
                                    "proName": "AMEX:USO"
                                  },
                                  {
                                    "description": "GLD",
                                    "proName": "AMEX:GLD"
                                  },
                                  {
                                    "description": "SLV",
                                    "proName": "AMEX:SLV"
                                  }
                            ],
                            "showSymbolLogo": true,
                            "colorTheme": "light",
                            "isTransparent": false,
                            "displayMode": "adaptive",
                            "locale": "en"  
                        }
                    </script>
                </div>
                ';
        }
    }

    public function carousel($params=null){
        $categoriesArray = (isset($params['categories'])?$params['categories']:false);
        $controls = (isset($params['controls'])?$params['controls']:false);
        $indicators = (isset($params['indicators'])?$params['indicators']:false);
        $categories = '';

        if(is_array($categoriesArray) && !empty($categoriesArray) && $categoriesArray!=false){
            foreach($categoriesArray as $category){
                $categories.=$category.',';
            }
        }else{
            $categories = '';
        }

        $actP = 0;
        $carouselCode = '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"><ol class="carousel-indicators">';
        $carouselItemsCode = "";
        $carouselArticlesCode = "";

        $args = array (
            'posts_per_page'         => '5',
            'order'                  => 'DESC',
            'category_name'          => $categories,
        );
        
        $query = new WP_Query( $args );

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                if($actP === 0){
                    $carouselItemsCode="<li data-target='#carouselGSWEB' data-slide-to='$actP' class='active'></li>";
                    $carouselArticlesCode = "<div class='carousel-item active'>
                        <img class='d-block w-100' src='".get_the_post_thumbnail_url()."' alt='slide'>
                        <div class='description-Item'>
                            <h1 class='oswald text-uppercase'>".get_the_title()."</h1>
                            <p>".get_the_excerpt()."</p>
                            <p class='post-details'>".get_the_author()." | ".get_the_date()."</p>
                            <p class='post-btn'><a class='btn btn-default' href='".get_permalink()."'>Read Article</a></p>
                        </div>
                    </div>";
                    $actP++;
                }else{
                    $carouselItemsCode.="<li data-target='#carouselGSWEB' data-slide-to='$actP'></li>";
                    $carouselArticlesCode.= "<div class='carousel-item'>
                        <img class='d-block w-100' src='".get_the_post_thumbnail_url()."' alt='slide'>
                        <div class='description-Item'>
                            <h1 class='oswald text-uppercase'>".get_the_title()."</h1>
                            <p>".get_the_excerpt()."</p>
                            <p class='post-details'>".get_the_author()." | ".get_the_date()."</p>
                            <p class='post-btn'><a class='btn btn-default' href='".get_permalink()."'>Read Article</a></p>
                        </div>
                    </div>";
                    $actP++;
                }
            endwhile;
        endif;
        wp_reset_postdata();

        if($indicators==true && $controls==true){
            printf('<div id="carouselGSWEB" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        %1$s
                    </ol>
                    <div class="carousel-inner">
                        %2$s
                    </div>
                    <a class="carousel-control-prev" href="#carouselGSWEB" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselGSWEB" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>',
                $carouselItemsCode,
                $carouselArticlesCode
            );
        }else if($indicators==true && $controls==false){
            printf('<div id="carouselGSWEB" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        %1$s
                    </ol>
                    <div class="carousel-inner">
                        %2$s
                    </div>
                </div>',
                $carouselItemsCode,
                $carouselArticlesCode
            );
        }else if($indicators==false && $controls==true){
            printf('<div id="carouselGSWEB" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        %1$s
                    </div>
                    <a class="carousel-control-prev" href="#carouselGSWEB" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselGSWEB" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>',
                $carouselArticlesCode
            );
        }else{
            printf('<div id="carouselGSWEB" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        %1$s
                    </div>
                </div>',
                $carouselArticlesCode
            );
        }
    }

    public function recent_posts_home($params=null){
        $categoriesArray = (isset($params['categories'])?$params['categories']:false);
        $posts_per_page = (isset($params['posts_per_page'])?$params['posts_per_page']:8);
        $categories = '';

        if(is_array($categoriesArray) && !empty($categoriesArray) && $categoriesArray!=false){
            foreach($categoriesArray as $category){
                $categories.=$category.',';
            }
        }else{
            $categories = '';
        }

        $args = array (
            'posts_per_page'         => $posts_per_page,
            'order'                  => 'DESC',
            'category_name'          => $categories,
        );
            
        $all_query = new WP_Query( $args );

        if ($all_query->have_posts()) :
            while ($all_query->have_posts()) : $all_query->the_post();
                printf('<article id="post-%1$s" %2$s>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-lx-4">
                                    <a href="%3$s">
                                        <img src="%4$s" class="img-fluid" alt="Responsive image">
                                    </a>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-lx-8">
                                    <h3 class="oswald text-uppercase"><a class="oswald text-uppercase" href="%3$s">%5$s</a></h3>
                                    <div class="entry-content">
                                        %6$s
                                    </div>
                                </div>
                            </div>
                        </article>',
                        get_the_ID(),
                        get_post_class(),
                        get_the_permalink(),
                        get_the_post_thumbnail_url(),
                        get_the_title(),
                        get_the_excerpt()
                    );
            endwhile;
        endif;
        wp_reset_postdata();
    }

    public static function stock_home_widget_tv(){
        echo '
            <!-- TradingView Widget BEGIN -->
            <style>
                #tradingview_bb79d{
                    height: 374px!important;
                }
            </style>
            <div class="tradingview-widget-container border-green-top pb-4">
            <div id="tradingview_bb79d"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
            new TradingView.widget(
            {
            "autosize": true,
            "symbol": "AMEX:SPY",
            "interval": "D",
            "timezone": "Etc/UTC",
            "theme": "light",
            "style": "1",
            "locale": "en",
            "toolbar_bg": "#f1f3f6",
            "enable_publishing": false,
            "allow_symbol_change": true,
            "container_id": "tradingview_bb79d"
            }
            );
            </script>
            </div>
            <!-- TradingView Widget END -->
        ';
    }
    public static function stock_home_widget_market(){
        echo '<div id="stock_home_widget_market">
        <!-- TradingView Widget BEGIN -->
            <style>
                #gsweb-tradingview-widget-container > iframe{
                    height: 260px!important;
                }
            </style>
            <div id="gsweb-tradingview-widget-container" class="tradingview-widget-container border-green-top pb-2">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
            {
            "colorTheme": "light",
            "dateRange": "3M",
            "showChart": true,
            "locale": "en",
            "width": "100%",
            "height": "100%",
            "largeChartUrl": "",
            "isTransparent": false,
            "showSymbolLogo": true,
            "plotLineColorGrowing": "rgba(33, 150, 243, 1)",
            "plotLineColorFalling": "rgba(33, 150, 243, 1)",
            "gridLineColor": "rgba(240, 243, 250, 1)",
            "scaleFontColor": "rgba(120, 123, 134, 1)",
            "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
            "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
            "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
            "tabs": [
                {
                "title": "Indices",
                "symbols": [
                    {
                    "s": "FOREXCOM:SPXUSD",
                    "d": "S&P 500"
                    },
                    {
                    "s": "FOREXCOM:NSXUSD",
                    "d": "Nasdaq 100"
                    },
                    {
                    "s": "FOREXCOM:DJI",
                    "d": "Dow 30"
                    },
                    {
                    "s": "INDEX:NKY",
                    "d": "Nikkei 225"
                    },
                    {
                    "s": "INDEX:DEU30",
                    "d": "DAX Index"
                    },
                    {
                    "s": "FOREXCOM:UKXGBP",
                    "d": "FTSE 100"
                    }
                ],
                "originalTitle": "Indices"
                },
                {
                "title": "Commodities",
                "symbols": [
                    {
                    "s": "CME_MINI:ES1!",
                    "d": "S&P 500"
                    },
                    {
                    "s": "CME:6E1!",
                    "d": "Euro"
                    },
                    {
                    "s": "COMEX:GC1!",
                    "d": "Gold"
                    },
                    {
                    "s": "NYMEX:CL1!",
                    "d": "Crude Oil"
                    },
                    {
                    "s": "NYMEX:NG1!",
                    "d": "Natural Gas"
                    },
                    {
                    "s": "CBOT:ZC1!",
                    "d": "Corn"
                    }
                ],
                "originalTitle": "Commodities"
                },
                {
                "title": "Bonds",
                "symbols": [
                    {
                    "s": "CME:GE1!",
                    "d": "Eurodollar"
                    },
                    {
                    "s": "CBOT:ZB1!",
                    "d": "T-Bond"
                    },
                    {
                    "s": "CBOT:UB1!",
                    "d": "Ultra T-Bond"
                    },
                    {
                    "s": "EUREX:FGBL1!",
                    "d": "Euro Bund"
                    },
                    {
                    "s": "EUREX:FBTP1!",
                    "d": "Euro BTP"
                    },
                    {
                    "s": "EUREX:FGBM1!",
                    "d": "Euro BOBL"
                    }
                ],
                "originalTitle": "Bonds"
                },
                {
                "title": "Forex",
                "symbols": [
                    {
                    "s": "FX:EURUSD"
                    },
                    {
                    "s": "FX:GBPUSD"
                    },
                    {
                    "s": "FX:USDJPY"
                    },
                    {
                    "s": "FX:USDCHF"
                    },
                    {
                    "s": "FX:AUDUSD"
                    },
                    {
                    "s": "FX:USDCAD"
                    }
                ],
                "originalTitle": "Forex"
                }
            ]
            }
            </script>
            </div>
            <!-- TradingView Widget END -->
        </div>';
    }

    public static function aside_post_home($params=null){
        $categoriesArray = (isset($params['categories'])?$params['categories']:false);
        $title = (isset($params['title'])?$params['title']:null);
        $posts_per_page = (isset($params['posts_per_page'])?$params['posts_per_page']:1);
        $categories = '';

        if(is_array($categoriesArray) && !empty($categoriesArray) && $categoriesArray!=false){
            foreach($categoriesArray as $category){
                $categories.=$category.',';
            }
        }else{
            $categories = '';
        }

        if($title!=null){
            echo '<h1 class="text-uppercase oswald">'.$title.'</h1>';
        }
        echo '
        <div class="last-category-posts">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">';
        $args = array (
            'posts_per_page'         => $posts_per_page,
            'order'                  => 'DESC',
            'category_name'          => $categories,
        );
        
        $category_query = new WP_Query( $args );

        if ($category_query->have_posts()) :
            while ($category_query->have_posts()) : $category_query->the_post();
                printf('<article id="post-%1$s" %2$s>
                    <h3 class="oswald text-uppercase"><a class="oswald text-uppercase" href="%3$s">%4$s</a></h3>
                    <p><small>%5$s</small></p>
                    <div class="entry-content">
                        %6$s
                    </div>
                    <a href="%3$s" class="btn-link text-uppercase oswald">Read More</a>
                </article>',
                get_the_ID(),
                get_post_class(),
                get_the_permalink(),
                get_the_title(),
                get_the_date(),
                get_the_excerpt()
            );
            endwhile;
        endif;
        wp_reset_postdata();

        echo '
                    </div>
                </div>
            </div>
        </div>
        ';
    }
}
$juanjimeneztj = new core_gsweb();