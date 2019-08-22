<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">

<?php wp_body_open(); ?>
<div class="wrapper">
    <div class="pre-header">
       <div class="container">
        <div class="inner-wrap">

        <?php if (function_exists('pll_the_languages')) { ?>
            <ul class="lang">
                <?php pll_the_languages(array(
                    'show_flags' => 0,
                    'show_names' => 1,
                    'hide_if_empty' => 0,
                    'display_names_as' => 'name'
                )); ?>
            </ul>
        <?php } ?>

        <?php echo do_shortcode('[bw-social]'); ?>
        </div>
      </div>
    </div>

    <header class="page-header">
        <div class="logo">
	        <?php get_default_logo_link([
                'name'    => 'logo.png',
                'options' => [
                    'class'  => 'logo-img',
                    'width'  => 562,
                    'height' => 119,
                    ],
                ])
            ?>
        </div>
    </header>

    <?php if (has_nav_menu('main-nav')) { ?>
        <nav class="nav js-menu">
            <button type="button" tabindex="0" class="menu-item-close menu-close js-menu-close"></button>
            <?php wp_nav_menu(array(
                'theme_location' => 'main-nav',
                'container' => false,
                'menu_class' => 'menu-container',
                'menu_id' => '',
                'fallback_cb' => 'wp_page_menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 3
            )); ?>
        </nav>
    <?php } ?>

    <div class="js-container">

        <div class="nav-mobile-header">
            <button class="hamburger js-hamburger" type="button" tabindex="0">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
            <div class="logo"><img src="/wp-content/uploads/logo.png" alt="НМАУ" class="logo-img-mob"></div>
        </div>
