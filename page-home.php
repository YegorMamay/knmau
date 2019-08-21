<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>
<?php layerslider(1) ?>

<?php get_template_part('loops/content', 'home'); ?>

<?php get_footer(); ?>
