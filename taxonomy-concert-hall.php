<?php get_header(); ?>
<div class="container">
    <div>
        <?php layer_slider(2); ?>
    </div>
    <div class="sp-xs-5"></div>
    <div class="concert-hall-toggler">
        <?php 
        $terms = get_terms([
            'taxonomy' => 'concert-hall',
            'hide_empty' => false
        ]);
        foreach ($terms as $term):
            if (get_queried_object()->term_id != $term->term_id):
        ?>
        <a href="<?php echo get_term_link($term->term_id) ?>">
            <?php echo $term->name; ?>
        </a>
        <?php
        else:
            ?>
        <span>
            <?php echo $term->name; ?>
        </span>
        <?php
        endif;
        endforeach;
    ?>
    </div>
    <div class="sp-xs-6"></div>
    <?php get_template_part('loops/content-concert', get_post_format()); ?>
</div>
<?php get_footer(); ?>