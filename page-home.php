<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>

<?php layerslider(1) ?>
<div class="sp-xs-6"></div>

<div class="main-news container">
    <h2><?php _e('Головні новини НМАУіЧ', 'brainworks') ?></h2>
    <div class="sp-xs-3"></div>

    <?php echo do_shortcode('[bw-advert category=32]'); ?>

    <div class="sp-xs-6"></div>
</div>

<div class="main-video-news">

</div>

<div class="concerts">

</div>

<div class="faculties">

  <h3 class="text-center"><?php _e('Факультети', 'brainworks') ?></h3>

    <div class="sp-xs-3"></div>
    <div class="divider"></div>
    <div class="sp-xs-6"></div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="#" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/piano-fac.svg" alt="<?php _e('Фортепіанний факультет', 'brainworks') ?>">
    	           <p>Фортепіанний факультет</p>
    	       </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="#" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/piano-fac.svg" alt="<?php _e('Фортепіанний факультет', 'brainworks') ?>">
    	           <p>Фортепіанний факультет</p>
    	       </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="#" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/piano-fac.svg" alt="<?php _e('Фортепіанний факультет', 'brainworks') ?>">
    	           <p>Фортепіанний факультет</p>
    	       </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="#" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/piano-fac.svg" alt="<?php _e('Фортепіанний факультет', 'brainworks') ?>">
    	           <p>Фортепіанний факультет</p>
    	       </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="#" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/piano-fac.svg" alt="<?php _e('Фортепіанний факультет', 'brainworks') ?>">
    	           <p>Фортепіанний факультет</p>
    	       </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="#" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/piano-fac.svg" alt="<?php _e('Фортепіанний факультет', 'brainworks') ?>">
    	           <p>Фортепіанний факультет</p>
    	       </a>
            </div>
        </div>
    </div>

    <div class="sp-xs-6"></div>
</div>

<div class="more-about">
    <div class="sp-xs-6"></div>

    <h2 class="text-center"><?php _e('Більше про НМАУіЧ', 'brainworks') ?></h2>

    <div class="sp-xs-3"></div>
    <div class="divider"></div>
    <div class="sp-xs-3"></div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">

            </div>
        </div>
    </div>

  <div class="sp-xs-6"></div>
</div>

<?php get_template_part('loops/content', 'home'); ?>

<?php get_footer(); ?>
