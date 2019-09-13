<?php 
    function bw_register_cpts_concerts()
    {
        /**
         * Post Type: concerts.
         */
        $labels = array(
            'name' => __('Концерти', 'brainworks'),
            'singular_name' => __('Концерти', 'brainworks'),
        );

        $args = array(
            'label' => __('Концерти', 'brainworks'),
            'labels' => $labels,
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'delete_with_user' => false,
            'show_in_rest' => false,
            'rest_base' => 'concerts',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'concerts', 'with_front' => true),
            'query_var' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        );

        register_post_type('concerts', $args);
    }

    add_action('init', 'bw_register_cpts_concerts');

    
    if (!function_exists('concerts_metabox')) {
        function concerts_metabox( $meta_boxes ) {
            $prefix = '';
            $meta_boxes[] = array(
                'id' => 'departments_metabox',
                'title' => esc_html__( 'Мета-дані', 'metabox-online-generator' ),
                'post_types' => array('concerts'),
                'context' => 'advanced',
                'priority' => 'default',
                'autosave' => 'false',
                'fields' => array(
                    [
                        'id' => 'date',
                        'type' => 'datetime',
                        'name' => __("Дата концерту", "brainworks")
                    ],
                    [
                        'id' => 'show_on_front',
                        'type' => 'checkbox',
                        'name' => __('Показати на головній', 'brainworks')
                    ]
                ),
            );
        
            return $meta_boxes;
        }
        add_filter( 'rwmb_meta_boxes', 'concerts_metabox' );
    }
    