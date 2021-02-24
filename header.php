<?php
    require_once 'core/juanjimeneztj.class.php'; 
    $juanjimeneztj = new core_gsweb();    
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/theme.css">
    
    <title><?=bloginfo('name')?></title>

    <?php wp_head() ?>
</head>
<body <?php body_class();?>>

<?php
    $juanjimeneztj->top_navbar();
?>

<?php
    if($juanjimeneztj->stock_header_active()){
        $juanjimeneztj->stock_header();
    }
?>

<header class="py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-md navbar-light px-0" role="navigation">
                    <?php $juanjimeneztj->logo() ?>
                    <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'american_founders' ); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                        wp_nav_menu([
                            'menu' => 'primary',
                            'theme_location' => 'header-menu',
                            'menu_id' => 'header-menu',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse justify-content-end',
                            'container_id' => 'navbar-collapse-1',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker()
                        ]);
                    ?>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php if(single_post_title('',false)!=null): ?>
                    <h1 class="text-white text-center pt-5 <?=(is_page())?'pb-5':''?> font-weight-light"><?=single_post_title('',false)?></h1>
                    <?php if(!is_page()): ?>
                        <p class="text-center text-white mb-5 pb-5"><small><strong><?=get_the_date()?></strong> by <span class="font-weight-ligth"><?=get_the_author()?></span></small></p>
                    <?php endif; ?>
                <?php else: ?>
                    <h1 class="text-white text-center py-5 mb-5 font-weight-light">Welcome</h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
    
<?php if ( is_active_sidebar( 'header-widget' ) ) : ?>
    <div id="header-widget" class="primary-header widget-area" role="complementary">
        <?php dynamic_sidebar( 'header-widget' ); ?>
    </div>
<?php endif; ?>