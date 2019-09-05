<?php 
    function bw_register_cpts_advert()
    {
        /**
         * Post Type: advert.
         */
        $labels = array(
            'name' => __('Оголошення', 'brainworks'),
            'singular_name' => __('Оголошення', 'brainworks'),
        );

        $args = array(
            'label' => __('Оголошення', 'brainworks'),
            'labels' => $labels,
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'delete_with_user' => false,
            'show_in_rest' => false,
            'rest_base' => 'advert',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'advert', 'with_front' => true),
            'query_var' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        );

        register_post_type('advert', $args);
    }

    add_action('init', 'bw_register_cpts_advert');


