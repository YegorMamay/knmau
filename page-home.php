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

<div class="main-video-news dark-bg">
<div class="sp-xs-6"></div>

<div class="sp-xs-6"></div>
</div>

<div class="concerts">
    <div class="sp-xs-6"></div>



    <div class="sp-xs-6"></div>
</div>

<div class="sp-xs-6"></div>

<div class="faculties">

  <h3 class="text-center"><?php _e('Факультети', 'brainworks') ?></h3>

    <div class="sp-xs-3"></div>
    <div class="divider"></div>
    <div class="sp-xs-6"></div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="#" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/piano-fac.svg">
    	           <p>Фортепіанний факультет</p>
    	       </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="#" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/vocal-conductor-fac.svg">
    	           <p>Вокальний та диригентський факультет</p>
    	       </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="#" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/orchestra-fac.svg">
    	           <p>Оркестровий факультет</p>
    	       </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="#" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/folk-instruments-fac.svg">
    	           <p>Факультет народних інструментів</p>
    	       </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="#" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/composer-fac.svg">
    	           <p>Факультет історико-теоретичний, композиторський та іноземних студентів</p>
    	       </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="#" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/interdepartmental-fac.svg">
    	           <p>Оголошення</p>
    	       </a>
            </div>
        </div>
    </div>

    <div class="sp-xs-6"></div>
</div>

<div class="more-about dark-bg">
    <div class="sp-xs-6"></div>

    <h2 class="text-center"><?php _e('Більше про НМАУіЧ', 'brainworks') ?></h2>

    <div class="sp-xs-3"></div>
    <div class="divider"></div>
    <div class="sp-xs-6"></div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="#">
                    <img src="https://knmau.brainworks.pro/wp-content/uploads/temp-img-16x10-735x459.jpg" alt="">
                    <p>Гуртожиток</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="#">
                    <img src="https://knmau.brainworks.pro/wp-content/uploads/temp-img-16x10-735x459.jpg" alt="">
                    <p>Студентське життя</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="#">
                    <img src="https://knmau.brainworks.pro/wp-content/uploads/temp-img-16x10-735x459.jpg" alt="">
                    <p>Віртуальний тур</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="#">
                    <img src="https://knmau.brainworks.pro/wp-content/uploads/temp-img-16x10-735x459.jpg" alt="">
                    <p>Фотогалерея</p>
                </a>
            </div>
        </div>
    </div>

  <div class="sp-xs-8"></div>
</div>

<div class="other-content">
    <div class="sp-xs-10"></div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <a href="#" class="other-content-item">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/reward.svg">
    	           <p>Оголошення</p>
    	        </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <a href="#" class="other-content-item">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/reward.svg">
    	           <p>Оголошення</p>
    	        </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <a href="#" class="other-content-item">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/library.svg">
    	           <p>Оголошення</p>
    	        </a>
            </div>
        </div>
    </div>

    <div class="sp-xs-6"></div>
</div>

<?php get_template_part('loops/content', 'home'); ?>

<?php get_footer(); ?>
