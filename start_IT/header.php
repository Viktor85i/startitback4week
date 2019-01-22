<?php $copyright=get_fields('options'); ?>
<?php $logo=!empty($copyright['start_it_logo'])?$copyright['start_it_logo']:'';?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Carrby - Agency Template">
        <meta name="author" content="">

        <!-- Page Title -->
        <title><?php bloginfo('name') ?></title>

    <?php wp_head(); ?>
    </head>

    <body>
        
        <!-- Start Header -->
        <header id="header" class="header">
            <div class="navigation">
                <div class="container">
                    <nav id="flexmenu">
                        <?php if (is_array($copyright)) { ?>
                        <div class="logo">
                            <img src="<?= $logo; ?>" alt="">
                        </div>
                        <?php } ?>
                        <div class="nav-inner">
                            <div id="mobile-toggle" class="mobile-btn"></div>
                            <?php $args=[
                                    'theme_location'=>'primary',
                                    'container'=>false,
                                    'menu_class'=>'main-menu',
                            ]; ?>
                            <?php wp_nav_menu($args); ?>
                    </nav>
                </div>
            </div>
        </header>