<?php 
    function bw_register_cpts_faculties()
    {
        $labels = array(
            'name' => __('Факультети', 'brainworks'),
            'singular_name' => __('Факультет', 'brainworks'),
        );

        $args = array(
            'label' => __("Факультет", 'brainworks'),
            'labels' => $labels,
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'delete_with_user' => false,
            'show_in_rest' => false,
            'rest_base' => 'faculties',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive' => false,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'exclude_from_search' => true,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'faculties', 'with_front' => true),
            'query_var' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
        );

        register_post_type('faculties', $args);
    }

    add_action('init', 'bw_register_cpts_faculties');
