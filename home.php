<?php get_header(); ?>
<div class="container">

<?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(' » '); ?>

<h1 class="page-name"><?php single_post_title(); ?></h1>

<?php get_template_part('loops/content-2', get_post_format()); ?>

</div>
<?php get_footer(); ?>
