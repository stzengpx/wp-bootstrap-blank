<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="container-fluid">
            <div class="row-fluid">

                <div class="col-sm-12 col-md-12">
                    <a href = "<?php echo home_url(); ?>" class="navbar-brand navbar-brand-sinqa">
                        <img src="#" alt="">    
                    </a>
                    <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>

                    <div class = "collapse navbar-collapse navHeaderCollapse">
                        <?php
                          wp_nav_menu(array(
                          'menu' => 'primary',
                          'theme_location' => 'primary',
                          'depth' => 2,
                          'menu_class' => 'nav navbar-nav',
                          'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                          'walker' => new wp_bootstrap_navwalker())
                          );
                        ?>

                    </div>
                </div>
            </div>
        </div>