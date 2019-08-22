<?php
/**
 * Template Name: Page Without Title
 **/
?>

<?php get_header(); ?>

<div class="container">

<?php if (have_posts()): while (have_posts()): the_post(); ?>

        if (function_exists('kama_breadcrumbs')) {
            kama_breadcrumbs(' » ');
        }

        the_content();
        wp_link_pages();

<?php endwhile;
else: ?>
    <?php get_template_part('loops/content', 'none'); ?>
<?php endif; ?>

</div>
<?php get_footer(); ?>
