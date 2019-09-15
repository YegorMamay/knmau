<?php get_header(); ?>

<div class="container">
    <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs('/'); ?>
    <h1 class="text-center"><?php _e('Сторінка ректора', 'brainworks'); ?></h1>
    <h3 class="text-center">ТИМОШЕНКО Максим Олегович</h3>
    <h6 class="text-center"><em>Ректор Національної музичної академії України імені Петра Чайковського</em></h6>
    <div class="sp-xs-2"></div>
    <p class="text-center">Професор, Доктор культурології, Заслужений діяч мистецтв України</p>
    <div class="sp-xs-4"></div>
    <a href="https://www.facebook.com/profile.php?id=100000833262945" target="_blank" style="display: inherit"  rel="nofollow noopener noreferrer" class="link text-center">Facebook</a>
    <div class="sp-xs-6"></div>
    <hr>
    <div class="sp-xs-6"></div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <?php get_template_part('loops/content', 'rector'); ?>
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
