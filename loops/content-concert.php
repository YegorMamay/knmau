<?php if (have_posts()): ?>
<div class="js-ajax-posts">
    <?php while (have_posts()): the_post(); ?>
    <div class="container-fluid">
        <div class="row">
            <article id="post_<?php the_ID() ?>" class="concert-item">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <section>
                        <?php the_post_thumbnail('large'); ?>
                    </section>
                </div>
                <div class="col-md-1 col-xs-12"></div>
                <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 col-xl-7">
                    <header>
                        <span class="date">
                            <?php
                                $date = get_post_meta(get_the_ID(), 'date', true);
                                echo parse_date($date);
                            ?>
                        </span>
                        <h3><?php the_title(); ?></h3>
                        <div class="sp-xs-1 sp-sm-1 sp-md-1 sp-lg-1 sp-xl-1"></div>
                        <p><?php the_content(); ?></p>
                    </header>
                </div>
            </article>
        </div>
    </div>
    <?php endwhile; ?>
</div>

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