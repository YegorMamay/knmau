<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>

<?php layerslider(1) ?>
<div class="sp-xs-6"></div>

<div class="main-news container">
    <h2><?php _e('Головні новини НМАУ', 'brainworks') ?></h2>
    <div class="sp-xs-3"></div>

    <?php echo do_shortcode('[bw-advert category=32]'); ?>

    <div class="sp-xs-6"></div>
</div>

<div class="main-video-news dark-bg">
<div class="sp-xs-6"></div>

<div class="sp-xs-6"></div>
</div>

<!--<div class="concerts">
    <div class="sp-xs-6"></div>



    <div class="sp-xs-6"></div>
</div>-->

<div class="sp-xs-6"></div>

<div class="faculties">

  <h3 class="text-center"><?php _e('Факультети', 'brainworks') ?></h3>

    <div class="sp-xs-3"></div>
    <div class="divider"></div>
    <div class="sp-xs-6"></div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="/faculties/fortepiannij-fakultet/" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/piano-fac.svg" alt="<?php _e('Фортепіанний факультет', 'brainworks') ?>">
    	           <p><?php _e('Фортепіанний факультет', 'brainworks') ?></p>
    	       </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="/faculties/vokalnij-ta-dirigentskij-fakultet/" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/vocal-conductor-fac.svg" alt="<?php _e('Вокальний та диригентський факультет', 'brainworks') ?>">
    	           <p><?php _e('Вокальний та диригентський факультет', 'brainworks') ?></p>
    	       </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="/faculties/orkestrovij-fakultet/" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/orchestra-fac.svg" alt="<?php _e('Оркестровий факультет', 'brainworks') ?>">
    	           <p><?php _e('Оркестровий факультет', 'brainworks') ?></p>
    	       </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="/faculties/fakultet-narodnih-instrumentiv/" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/folk-instruments-fac.svg" alt="<?php _e('Факультет народних інструментів', 'brainworks') ?>">
    	           <p><?php _e('Факультет народних інструментів', 'brainworks') ?></p>
    	       </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="faculties/fakultet-istoriko-teoretichnij-kompozitorskij-ta-inozemnih-studentiv/" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/composer-fac.svg" alt="<?php _e('Факультет історико-теоретичний, композиторський та іноземних студентів', 'brainworks') ?>">
    	           <p><?php _e('Факультет історико-теоретичний, композиторський та іноземних студентів', 'brainworks') ?></p>
    	       </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="/faculties/mizhfakultetski-kafedri/" class="shadow-hover">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/interdepartmental-fac.svg" alt="<?php _e('Міжфакультетські кафедри', 'brainworks') ?>">
    	           <p><?php _e('Міжфакультетські кафедри', 'brainworks') ?></p>
    	       </a>
            </div>
        </div>
    </div>

    <div class="sp-xs-6"></div>
</div>

<div class="more-about dark-bg">
    <div class="sp-xs-6"></div>

    <h2 class="text-center"><?php _e('Більше про НМАУ', 'brainworks') ?></h2>

    <div class="sp-xs-3"></div>
    <div class="divider"></div>
    <div class="sp-xs-6"></div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="/erazmus/">
                    <img src="/wp-content/uploads/gurt.jpg" alt="<?php _e('Гуртожиток', 'brainworks') ?>">
                    <p><?php _e('Еразмус+', 'brainworks') ?></p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="/studentske-zhittya/">
                    <img src="/wp-content/uploads/student-life.jpg" alt="<?php _e('Студентське життя', 'brainworks') ?>">
                    <p><?php _e('Студентська рада', 'brainworks') ?></p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="/virtualnij-tur/">
                    <img src="/wp-content/uploads/virtual-tour.jpg" alt="<?php _e('Віртуальний тур', 'brainworks') ?>">
                    <p><?php _e('Віртуальний тур', 'brainworks') ?></p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="/galereya/">
                    <img src="/wp-content/uploads/gallery.jpg" alt="<?php _e('Фотогалерея', 'brainworks') ?>">
                    <p><?php _e('Фотогалерея', 'brainworks') ?></p>
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
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/announce.svg">
    	           <p>Оголошення</p>
    	        </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <a href="#" class="other-content-item">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/reward.svg">
    	           <p>Нагороди НМАУіЧ</p>
    	        </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <a href="#" class="other-content-item">
    	           <img src="/wp-content/themes/knmau/assets/img/svg-icons/library.svg">
    	           <p>Віртуальна бібліотека</p>
    	        </a>
            </div>
        </div>
    </div>

    <div class="sp-xs-6"></div>
</div>

<?php get_template_part('loops/content', 'home'); ?>

<?php get_footer(); ?>
