<?php if (have_posts()): ?>
<div class="js-ajax-posts">
    <?php while (have_posts()): the_post(); ?>
    <div class="container-fluid notice-container">
        <div class="row">
            <article id="post_<?php the_ID() ?>">
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <div class="notice-date">
                        <?php
                                    $date_from = get_post_meta(get_the_ID(), 'date_from', true);
                                    $date_to = get_post_meta(get_the_ID(), 'date_to', true);
                                    $month = parse_date($date_to, 'F');
                                    $year = parse_date($date_to, 'Y');
                                    $day_from = parse_date($date_from, 'd');
                                    $day_to = parse_date($date_to, 'd');
                                ?>
                        <span class="days">
                            <?php echo $day_from; ?> - <?php echo $day_to; ?>
                        </span>
                        <span class="month"><?php echo $month; ?></span>
                        <span class="year"><?php echo $year; ?></span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <header>
                        <p><?php the_excerpt(); ?></p>
                    </header>
                </div>
            </article>
        </div>
    </div>
    <?php endwhile; ?>
</div>
<hr>
<div class="sp-xs-2 sp-sm-2 sp-md-2 sp-lg-2 sp-xl-2"></div>
<?php if (get_theme_mod('bw_load_more_enable') && function_exists('bw_load_more')) { ?>
<div class="text-center"><?php bw_load_more(); ?></div>
<?php } else {
        if (function_exists('bw_pagination')) {
            bw_pagination();
        } else {
            if (is_paged()) { ?>
<ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Previous', 'brainworks')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Next', 'brainworks') . ' <i class="fa fa-arrow-right"></i>') ?></li>
</ul>
<?php }
        }
    } ?>

<?php else : ?>
<?php get_template_part('loops/content', 'none'); ?>
<?php endif; ?>