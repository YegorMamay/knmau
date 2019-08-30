<?php 
    get_header();
?>

<div class="department-wrapper">
    <div class="department-header"
        style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>');">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="container">
        <div class="sp-xs-2"></div>
        <div class="kama_breadcrumbs">
            <?php
                echo get_department_breadcrumbs(get_the_ID());
            ?>
        </div>
        <div class="sp-xs-5"></div>
        <div class="tabs">
            <div class="controls">
                <button type="button" class="active"><?php _e('Історія кафедри', 'brainworks'); ?></button>
                <button type="button"><?php _e('Дисципліни', 'brainworks'); ?></button>
            </div>
            <div class="content">
                <div>
                    <?php echo do_shortcode($post->post_content); ?>
                </div>
                <div>
                    ANother content
                </div>
            </div>
        </div>
    </div>
    <div class="department-slider-wrapper">
        <div class="container">
            <h2><?php _e('Науково-педагогічний склад кафедри', 'brainworks'); ?></h2>
            <?php echo do_shortcode('[bw-teachers-slider department='.get_the_ID().']'); ?>
        </div>
    </div>
    <div class="container">
        <div class="department-content-wrapper">
            <h3 class="text-center"><?php _e('Необхідні для вступу сертифікати ЗНО', 'brainworks') ?></h3>
            <div class="sp-xs-3"></div>
            <div class="divider"></div>
            <div class="sp-xs-6"></div>
            <div class="row">
                <div class="col-md-2"></div>    
                <div class="col-md-8">
                    <div class="department-subjects">
                        <?php foreach ((get_post_meta(get_the_ID(), 'exam', true)) as $subject):
                            echo '<p>'. array_shift($subject) .'</p>';
                        endforeach;?>
                    </div>
                    <div class="sp-xs-5"></div>
                    <h3 class="text-center"><?php _e('Творчі завдання на вступному випробуванні:', 'brainworks'); ?></h3>
                    <div class="sp-xs-2"></div>
                    <div class="text-center">
                        <?php $file = get_post_meta(get_the_ID(), 'file', true); if ($file): ?>
                        <a href="<?php echo wp_get_attachment_url($file); ?>" class="btn btn-secondary btn-sm" download>
                            <?php _e("Програми творчих випробувань", "brainworks"); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="sp-xs-4"></div>
                    <div class="department-subjects">
                        <?php foreach ((get_post_meta(get_the_ID(), 'tasks', true)) as $subject):
                            echo '<p>'. array_shift($subject) .'</p>';
                        endforeach;?>
                    </div>
                </div>
            </div>
            <div class="sp-xs-3"></div>
            <h3 class="text-center"><?php _e('Контакти деканату', 'brainworks'); ?></h3>
            <div class="sp-xs-4"></div>
            <div class="department-contacts">
                <div>
                    <strong><?php _e('АДРЕСА', 'brainworks'); ?></strong>
                    <?php foreach ((get_post_meta(get_the_ID(), 'address', true)) as $subject):
                        echo '<span>'. array_shift($subject) .'</span>';
                    endforeach;?>
                </div>
                <div>
                    <strong><?php _e('ТЕЛЕФОН, ФАКС', 'brainworks'); ?></strong>
                    <?php foreach ((get_post_meta(get_the_ID(), 'phones', true)) as $subject):
                        $v = array_shift($subject);
                        echo '<a href="tel:'. get_phone_number($v) .'">'. $v .'</span>';
                    endforeach;?>
                </div>
                <div>
                    <strong><?php _e('СОЦМЕРЕЖІ', 'brainworks'); ?></strong>
                    <ul>
                        <?php foreach ((get_post_meta(get_the_ID(), 'socials', true)) as $subject):
                            $v = array_shift($subject);
                            echo '<li><a href="'.$v.'" target="_blank">'.get_social_icon($v).'</a></li>';
                        endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>