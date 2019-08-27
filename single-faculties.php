<?php get_header(); ?>


<div class="department-wrapper">
    <div class="department-header"
        style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>');">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="container">
        <div class="sp-xs-2"></div>
        <div class="kama_breadcrumbs">
            <?php
                echo get_department_breadcrumbs(get_the_ID(), $post->post_type);
            ?>
        </div>
        <div class="sp-xs-3"></div>
        <h2><?php _e('Кафедри', 'brainworks'); ?></h2>
        <div class="sp-xs-4"></div>
        <div class="department-list">
            <?php
                foreach (get_departments_by_faculty(get_the_ID()) as $department) {
                    ?>
            <a href="<?php echo get_the_permalink($department->ID) ?>" class="department-list__item">
                <i class="fal fa-graduation-cap"></i>
                <h4><?php echo $department->post_title; ?></h4>
            </a>
            <a href="<?php echo get_the_permalink($department->ID) ?>" class="department-list__item">
                <i class="fal fa-graduation-cap"></i>
                <h4><?php echo $department->post_title; ?></h4>
            </a>
            
            <a href="<?php echo get_the_permalink($department->ID) ?>" class="department-list__item">
                <i class="fal fa-graduation-cap"></i>
                <h4><?php echo $department->post_title; ?></h4>
            </a>
            
            <a href="<?php echo get_the_permalink($department->ID) ?>" class="department-list__item">
                <i class="fal fa-graduation-cap"></i>
                <h4><?php echo $department->post_title; ?></h4>
            </a>
            <?php 
                }
            ?>
        </div>
        <div class="sp-xs-6"></div>
    </div>
    <div class="department-articles-wrapper">
        <div class="container">
            <div class="sp-xs-5"></div>
            <h2><?php _e('Останні новини факультету', 'brainworks'); ?></h2>
            <div class="sp-xs-4"></div>
            <div class="row">
                <?php
                    foreach (get_articles_by_faculty(get_the_ID()) as $article) {
                        ?>
                <div class="col-md-3">
                    <div class="department-articles__item">
                        <img src="<?php echo get_the_post_thumbnail_url($article->ID, 'medium'); ?>" alt=""
                            title="<?php echo $article->post_title; ?>" />
                        <p>
                            <?php echo $article->post_excerpt; ?>
                        </p>
                        <div class="department-articles__item__footer">
                            <span><?php echo date('d / m', strtotime($article->post_date)) ?></span>
                            <a href="<?php echo get_the_permalink($article->ID) ?>">
                                <?php _e('Читати', 'brainworks'); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="sp-xs-4"></div>
            <div class="text-right">
                <a href="/category/<?php echo get_term_slug(get_the_ID(), 'faculties'); ?>" class="department-articles-link ">
                    <?php _e('УСІ НОВИНИ', 'brainworks'); ?> 
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-right-link.png" />
                </a>
            </div>
            <div class="sp-xs-6"></div>
        </div>
    </div>
    <div class="department-videos-wrapper">
        <div class="container">
            <div class="sp-xs-6"></div>
            <h2><?php _e('Відео факультету', 'brainworks'); ?></h2>
            <div class="sp-xs-4"></div>
            <div class="department-videos__list">
                <?php foreach (get_videos_by_faculty(get_the_ID()) as $video) {
                    ?>
                <div class="department-videos__item">
                <img src="https://img.youtube.com/vi/F0IbjVq-fgs/mqdefault.jpg" />
                </div>
                <?php
                } ?>
            </div>
            <div class="sp-xs-4"></div>
            <div class="text-right">
                <a href="/blog" class="department-articles-link department-articles-link--white">
                    <?php _e('БІЛЬШЕ ВІДЕО', 'brainworks'); ?>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-right-link-white.png" />
                </a>
            </div>
            <div class="sp-xs-6"></div>
        </div>
    </div>
    <div class="container">
        <div class="department-content-wrapper">
            <h3 class="text-center"><?php _e('Контакти деканату', 'brainworks'); ?></h3>
            <div class="sp-xs-4"></div>
            <div class="department-contacts">
                <!-- <div>
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
                </div> -->
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>