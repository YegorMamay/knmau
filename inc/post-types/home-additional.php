<?php 
    function bw_register_cpts_home_additional()
    {
        $labels = array(
            'name' => __('Додатки до головної', 'brainworks'),
            'singular_name' => __('Додаток до головної', 'brainworks'),
        );

        $args = array(
            'label' => __('Додатки до головної', 'brainworks'),
            'labels' => $labels,
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'delete_with_user' => false,
            'show_in_rest' => false,
            'rest_base' => 'videos',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive' => false,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'exclude_from_search' => true,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'home_additional', 'with_front' => true),
            'query_var' => true,
            'supports' => array('title', 'thumbnail'),
        );

        register_post_type('home_additional', $args);
    }

    add_action('init', 'bw_register_cpts_home_additional');

    function register_home_additional_metabox( $meta_boxes ) {
        $prefix = '';

        $meta_boxes[] = array(
            'id' => 'home_additional_metabox',
            'title' => esc_html__( 'Мета-дані', 'brainworks' ),
            'post_types' => array('home_additional'),
            'context' => 'advanced',
            'priority' => 'default',
            'autosave' => 'false',
            'fields' => array(
                array(
                    'id' => 'url',
                    'name' => 'Посилання',
                    'type' => 'url'
                )
            ),
        );

        return $meta_boxes;
    }
    add_filter( 'rwmb_meta_boxes', 'register_home_additional_metabox' );