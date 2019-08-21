</div><!-- .page-wrapper end-->

<footer class="footer js-footer">
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
           <div class="sp-xs-4"></div>
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; ?>

    <div class="copyright">
       <div class="container">
       <div class="flex-wrap">
        <div class="copy">
            &copy; <?php echo date('Y'); ?> <?php _e('Національна музична академія України імені П.І. Чайковського', 'brainworks') ?>
        </div>
        <div class="developer">
            <?php _e('Developed by', 'brainworks') ?>
            <a href="https://brainworks.pro/" target="_blank">BRAIN WORKS</a>
        </div>
        </div>
        </div>
    </div>
</footer>

</div><!-- .wrapper end-->

<?php scroll_top(); ?>

<?php if (is_customize_preview()) { ?>
    <button class="btn btn-secondary btn-sm customizer-edit" data-control='{ "name":"bw_scroll_top_display" }'>
        <?php esc_html_e('Edit Scroll Top', 'brainworks'); ?>
    </button>
    <button class="btn btn-secondary btn-sm customizer-edit" data-control='{ "name":"bw_analytics_google_placed" }'>
        <?php esc_html_e('Edit Analytics Tracking Code', 'brainworks'); ?>
    </button>
    <button class="btn btn-secondary btn-sm customizer-edit" data-control='{ "name":"bw_login_logo" }'>
        <?php esc_html_e('Edit Login Logo', 'brainworks'); ?>
    </button>
<?php } ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>
</html>
