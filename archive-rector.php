<?php get_header(); ?>

<div class="container">
    <div class="sp-xs-3"></div>
    <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs('/'); ?>
    <h2 class="text-center"><?php _e('Ректор', 'brainworks'); ?></h2>
    <div class="sp-xs-6"></div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="col-xs-2"></div>
            <?php get_template_part('loops/content', 'rector'); ?>
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>