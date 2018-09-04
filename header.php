<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php wp_head(); ?>

    <?php if (!empty(get_option('sherpa_schema'))): ?>

        <?= get_option('sherpa_schema') ?>

    <?php endif; ?>
</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>

<?php if (is_front_page()) : ?>
<div class="landing-bg"><?php endif; ?>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
    <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->

    <div class="top-header">
        <div class="container">
            <div class="row ">
                <div class="v-align">
                <?php if (!is_front_page()) : ?><a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                src="<?= IMGURL; ?>logo.png"
                alt="<?php echo get_bloginfo(
                    'description'
                ); ?>" class="logo"/>
                    </a><?php endif; ?>
                <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
                <ul class="nav navbar-nav navbar-right">
                    <li class="menu-item directions"><a
                                href="<?php echo get_site_url() ?>/contact-us">Directions</a></a></li>
                    <li class="menu-item contact"><a href="tel:5756221186">Call</a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>


