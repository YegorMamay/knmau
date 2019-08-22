<?php

    function bw_register_cpts_videos()
    {
        $labels = array(
            'name' => __('Відео-новини', 'brainworks'),
            'singular_name' => __('Відео-новина', 'brainworks'),
        );

        $args = array(
            'label' => __('Відео-новини', 'brainworks'),
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
            'rewrite' => array('slug' => 'videos', 'with_front' => true),
            'query_var' => true,
            'supports' => array('title', 'editor'),
        );

        register_post_type('videos', $args);
    }

    add_action('init', 'bw_register_cpts_videos');

    function register_videos_metabox( $meta_boxes ) {
        $prefix = '';
    
        $meta_boxes[] = array(
            'id' => 'videos_metabox',
            'title' => esc_html__( 'Мета-данные', 'brainworks' ),
            'post_types' => array('videos'),
            'context' => 'advanced',
            'priority' => 'default',
            'autosave' => 'false',
            'fields' => array(
                array(
                    'id' => $prefix . 'url',
                    'name' => esc_html__( 'Посилання на YouTube', 'brainworks' ),
                    'type' => 'url',
                ),
                array(
                    'id' => 'show_on_front',
                    'name' => esc_html__('Показувати на головній', 'brainworks'),
                    'type' => 'checkbox'
                )
            ),
        );
    
        return $meta_boxes;
    }
    add_filter( 'rwmb_meta_boxes', 'register_videos_metabox' );