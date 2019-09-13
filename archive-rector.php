<?php get_header(); ?>

<div class="container">
    <div class="sp-xs-4"></div>
    <h2 class="text-center"><?php _e('Ректори', 'brainworks'); ?></h2>
    <div class="sp-xs-2"></div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs('/'); ?>
            <div class="col-xs-2"></div>
            <?php get_template_part('loops/content', 'rector'); ?>
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>

