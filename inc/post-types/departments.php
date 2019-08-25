<?php

    function bw_register_cpts_departments()
    {
        $labels = array(
            'name' => __('Кафедри', 'brainworks'),
            'singular_name' => __('Кафедра', 'brainworks'),
        );

        $args = array(
            'label' => __('Кафедри', 'brainworks'),
            'labels' => $labels,
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'delete_with_user' => false,
            'show_in_rest' => false,
            'rest_base' => 'departments',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive' => false,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'exclude_from_search' => true,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'departments', 'with_front' => true),
            'query_var' => true,
            'supports' => array('title', 'thumbnail', 'editor'),
        );

        register_post_type('departments', $args);
    }

    add_action('init', 'bw_register_cpts_departments');