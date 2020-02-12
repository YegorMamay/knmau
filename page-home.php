<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>

<?php layerslider(1) ?>
<div class="sp-xs-6"></div>

<div class="main-news container">
    <h2><?php _e('Main News of UNTАM', 'brainworks') ?></h2>
    <div class="sp-xs-3"></div>

    <?php echo do_shortcode('[bw-advert category=32]'); ?>

    <div class="sp-xs-6"></div>
</div>

<div class="main-video-news dark-bg">
    <div class="container">
        <?php $video = get_video(NULL, true); if ($video):
                $url = get_post_meta($video->ID, 'url', true);
                $id = get_param_from_url($url, 'v'); ?>
        <div class="sp-xs-6"></div>
        <div class="row video-block">
            <div class="col-md-6 col-sm-12">
                <a href="<?php echo $url; ?>" target="_blank" class="video-block__thumbnail">
                    <img src="https://img.youtube.com/vi/<?php echo $id; ?>/mqdefault.jpg"
                        alt="<?php _e("Дивитися відео", "brainworks"); ?>" title="<?php echo $video->post_title; ?>"
                        width="100%" class="video-image__inner" />
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/play-video.png" alt="Play" />
                    <div class="overlay"></div>
                </a>
                <div class="sp-xs-2"></div>
            </div>
            <div class="col-md-6 col-sm-12 video-block__content">
                <h3><?php echo $video->post_title; ?></h3>
                <p><?php echo $video->post_content; ?></p>
                <div class="sp-xs-2"></div>
                <div class="text-right">
                    <a href="<?php echo $url ?>" target="_blank">
                        <?php _e('Watch', 'brainworks'); ?>
                    </a>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="sp-xs-6"></div>
    </div>
</div>

<?php echo do_shortcode('[bw-concerts]'); ?>

<div class="sp-xs-6"></div>

<div class="faculties">

    <h3 class="text-center"><?php _e('Faculties', 'brainworks') ?></h3>

    <div class="sp-xs-3"></div>
    <div class="divider"></div>
    <div class="sp-xs-6"></div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="<?php echo get_permalink(pll_get_post(173)) ?>" class="shadow-hover">
                    <img src="/wp-content/themes/knmau/assets/img/svg-icons/piano-fac.svg"
                        alt="<?php _e('Piano faculty', 'brainworks') ?>">
                    <p><?php _e('Piano faculty', 'brainworks') ?></p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="<?php echo get_permalink(pll_get_post(4389)) ?>" class="shadow-hover">
                    <img src="/wp-content/themes/knmau/assets/img/svg-icons/vocal-conductor-fac.svg"
                        alt="<?php _e('Vocal and conducting faculty', 'brainworks') ?>">
                    <p><?php _e('Vocal and conducting faculty', 'brainworks') ?></p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="<?php echo get_permalink(pll_get_post(4390)) ?>" class="shadow-hover">
                    <img src="/wp-content/themes/knmau/assets/img/svg-icons/orchestra-fac.svg"
                        alt="<?php _e('Orchestral faculty', 'brainworks') ?>">
                    <p><?php _e('Orchestral faculty', 'brainworks') ?></p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="<?php echo get_permalink(pll_get_post(4391)) ?>" class="shadow-hover">
                    <img src="/wp-content/themes/knmau/assets/img/svg-icons/folk-instruments-fac.svg"
                        alt="<?php _e('Folk instrument faculty', 'brainworks') ?>">
                    <p><?php _e('Folk instrument faculty', 'brainworks') ?></p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="<?php echo get_permalink(pll_get_post(4392)) ?>"
                    class="shadow-hover">
                    <img src="/wp-content/themes/knmau/assets/img/svg-icons/composer-fac.svg"
                        alt="<?php _e('Faculty of history and theory of music and composition, and foreign students', 'brainworks') ?>">
                    <p><?php _e('Faculty of history and theory of music and composition, and foreign students', 'brainworks') ?>
                    </p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a href="<?php echo get_permalink(pll_get_post(4743)) ?>" class="shadow-hover">
                    <img src="/wp-content/themes/knmau/assets/img/svg-icons/interdepartmental-fac.svg"
                        alt="<?php _e('Department for work with foreign students', 'brainworks') ?>">
                    <p><?php _e('Department for work with foreign students', 'brainworks') ?></p>
                </a>
            </div>
        </div>
    </div>

    <div class="sp-xs-6"></div>
</div>

<div class="more-about dark-bg">
    <div class="sp-xs-6"></div>

    <h2 class="text-center"><?php _e('More about UNTАM', 'brainworks') ?></h2>

    <div class="sp-xs-3"></div>
    <div class="divider"></div>
    <div class="sp-xs-6"></div>

    <div class="container">
        <?php $home_additional = get_posts([
                'post_type' => 'home_additional',
                'numberposts' => 4,
                'posts_per_page' => 4,
                'order' => 'ASC'
            ]);
        ?>
        <div class="row">
            <?php foreach ($home_additional as $ha): ?>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="<?php echo get_post_meta($ha->ID, 'url', true) ?>">
                    <img src="<?php echo get_the_post_thumbnail_url($ha->ID) ?>" alt="<?php _e('Гуртожиток', 'brainworks') ?>">
                    <p><?php echo $ha->post_title; ?></p>
                </a>
                <div class="sp-xs-5"></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="sp-xs-3"></div>
</div>

<div class="other-content">
    <div class="sp-xs-10"></div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <a href="<?php echo get_post_type_archive_link('advert'); ?>" class="other-content-item">
                    <img src="/wp-content/themes/knmau/assets/img/svg-icons/announce.svg">
                    <p><?php _e('Advertisement', 'brainworks') ?></p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <a href="<?php echo get_permalink(pll_get_post(803)) ?>" class="other-content-item">
                    <img src="/wp-content/themes/knmau/assets/img/svg-icons/reward.svg">
                    <p><?php _e('National status ', 'brainworks') ?></p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <a href="<?php echo get_permalink(pll_get_post(3852)) ?>" class="other-content-item">
                    <img src="/wp-content/themes/knmau/assets/img/svg-icons/library.svg">
                    <div class="sp-xs-1"></div>
                    <p><?php _e('History of UNTАM', 'brainworks') ?></p>
                </a>
            </div>
        </div>
    </div>

    <div class="sp-xs-6"></div>
</div>

<?php get_template_part('loops/content', 'home'); ?>

<?php get_footer(); ?>
