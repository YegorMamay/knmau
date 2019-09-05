<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs('/'); ?>
            <?php get_template_part('loops/content', 'advert'); ?>
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>

