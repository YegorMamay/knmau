<?php get_header(); ?>
<div class="container">

<?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(' » '); ?>

<h1 class="text-center"><?php echo single_cat_title(); ?></h1>

<div class="sp-xs-2 sp-sm-2 sp-md-2 sp-lg-2 sp-xl-2"></div>
<hr>
<div class="sp-xs-2 sp-sm-2 sp-md-2 sp-lg-2 sp-xl-2"></div>

<?php get_template_part('loops/content-2', get_post_format()); ?>

</div>
<?php get_footer(); ?>
