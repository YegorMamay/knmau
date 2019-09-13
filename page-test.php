<?php 
    /**
     * Template Name: Test page
     */

     get_header();
     $terms = get_terms([
        'taxonomy' => 'concert-hall',
        'hide_empty' => false
    ]);
?>
<div class="container">

    <div class="concerts-wrapper">
        <div class="concerts-tabs">
            <div class="concert-hall-toggler js-toggler">
                <?php foreach ($terms as $term): ?>
                    <span data-toggle="_<?php echo $term->term_id; ?>"><?php echo $term->name; ?></span>
                <?php endforeach; ?>
            </div>
        </div>

            <?php
                foreach ($terms as $term) { ?>
            <div class="row" data-toggle-target="_<?php echo $term->term_id; ?>">
                <?php foreach (get_concerts_by_term($term, true) as $post): ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <h4><?php echo $post->post_title; ?></h4>
                </div>
                <?php endforeach; ?>
            </div>
            <?php 
                }
            ?>
    </div>

    <?php get_footer(); ?>