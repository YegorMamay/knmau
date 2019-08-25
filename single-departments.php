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
                    <div class="row">
                        <div class="col-md-3">
                            <p><strong>14 жовтня 1985 р.</strong></p>
                        </div>
                        <div class="col-md-9">
                            <span class="big-letter">К</span>лас фортепіано у Київській консерваторії від дня її
                            заснування був фундаментальним
                            професійним та творчим
                            базисом вищої музичної освіти України. Столітня історія розвитку фортепіанного мистецтва
                            у
                            стінах Національної музичної академії України імені П. І. Чайковського демонструє
                            сучасність
                            художньо-творчого
                            світогляду, концептуальність в осмисленні шляхів розвитку виконавства й педагогіки.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p><strong>14 жовтня 1985 р.</strong></p>
                        </div>
                        <div class="col-md-9">
                            Клас фортепіано у Київській консерваторії від дня її
                            заснування був фундаментальним
                            професійним та творчим
                            базисом вищої музичної освіти України. Столітня історія розвитку фортепіанного мистецтва
                            у
                            стінах Національної музичної академії України імені П. І. Чайковського демонструє
                            сучасність
                            художньо-творчого
                            світогляду, концептуальність в осмисленні шляхів розвитку виконавства й педагогіки.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p><strong>14 жовтня 1985 р.</strong></p>
                        </div>
                        <div class="col-md-9">
                            Клас фортепіано у Київській консерваторії від дня її
                            заснування був фундаментальним
                            професійним та творчим
                            базисом вищої музичної освіти України. Столітня історія розвитку фортепіанного мистецтва
                            у
                            стінах Національної музичної академії України імені П. І. Чайковського демонструє
                            сучасність
                            художньо-творчого
                            світогляду, концептуальність в осмисленні шляхів розвитку виконавства й педагогіки.
                        </div>
                    </div>
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
                    <h3 class="text-center">Творчі завдання на вступному випробуванні:</h3>
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