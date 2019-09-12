<?php 
    function bw_register_cpts_rector()
    {
        /**
         * Post Type: rector.
         */
        $labels = array(
            'name' => __('Ректор', 'brainworks'),
            'singular_name' => __('Ректор', 'brainworks'),
        );

        $args = array(
            'label' => __('Ректор', 'brainworks'),
            'labels' => $labels,
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'delete_with_user' => false,
            'show_in_rest' => false,
            'rest_base' => 'rector',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'rector', 'with_front' => true),
            'query_var' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        );

        register_post_type('rector', $args);
    }

    add_action('init', 'bw_register_cpts_rector');


