<?php

    function bw_register_cpts_teachers()
    {
        $labels = array(
            'name' => __('Преподаватели', 'brainworks'),
            'singular_name' => __('Преподаватель', 'brainworks'),
        );

        $args = array(
            'label' => __('Преподаватели', 'brainworks'),
            'labels' => $labels,
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'delete_with_user' => false,
            'show_in_rest' => false,
            'rest_base' => 'teachers',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive' => false,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'exclude_from_search' => true,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'teachers', 'with_front' => true),
            'query_var' => true,
            'supports' => array('title', 'thumbnail'),
        );

        register_post_type('teachers', $args);
    }

    add_action('init', 'bw_register_cpts_teachers');

    function register_teachers_metabox( $meta_boxes ) {
        $prefix = '';
    
        $meta_boxes[] = array(
            'id' => 'teachers_metabox',
            'title' => esc_html__( 'Дані про викладача (Кафедра)', 'brainworks' ),
            'post_types' => array('teachers'),
            'context' => 'advanced',
            'priority' => 'default',
            'autosave' => 'false',
            'fields' => array(
                array(
                    'id' => $prefix . 'info',
                    'name' => esc_html__( 'Регалії', 'brainworks' ),
                    'type' => 'textarea',
                ),
                array(
                    'id' => $prefix . 'priority',
                    'type' => 'number',
                    'name' => esc_html__( 'Пріорітет', 'brainworks' ),
                ),
            ),
        );

        $meta_boxes[] = array(
            'id' => 'teachers_metabox_f',
            'title' => esc_html__( 'Дані про викладача (Факультет)', 'brainworks' ),
            'post_types' => array('teachers'),
            'context' => 'advanced',
            'priority' => 'default',
            'autosave' => 'false',
            'fields' => array(
                array(
                    'id' => $prefix . 'position_f',
                    'name' => esc_html__( 'Посада', 'brainworks' ),
                    'type' => 'textarea',
                ),
                array(
                    'id' => $prefix . 'info_f',
                    'name' => esc_html__( 'Відзнаки', 'brainworks' ),
                    'type' => 'textarea',
                ),
                array(
                    'id' => $prefix . 'priority_f',
                    'type' => 'number',
                    'name' => esc_html__( 'Пріорітет', 'brainworks' ),
                ),
            ),
        );
        

        return $meta_boxes;
    }
    add_filter( 'rwmb_meta_boxes', 'register_teachers_metabox' );