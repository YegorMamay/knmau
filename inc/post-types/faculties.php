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

    if (!function_exists('faculties_metabox')) {
        function faculties_metabox( $meta_boxes ) {
            $prefix = '';
            $meta_boxes[] = array(
                'id' => 'departments_metabox',
                'title' => esc_html__( 'Мета-дані', 'metabox-online-generator' ),
                'post_types' => array('faculties'),
                'context' => 'advanced',
                'priority' => 'default',
                'autosave' => 'false',
                'fields' => array(
                    array(
                        'id' => $prefix . 'address',
                        'type' => 'fieldset_text',
                        'name' => esc_html__( 'Адреса', 'metabox-online-generator' ),
                        'rows' => 2,
                        'options' => array(
                            'м. Київ' => esc_html__( 'Адреса', 'metabox-online-generator' ),
                        ),
                        'clone' => 'true',
                    ),
                    array(
                        'id' => $prefix . 'phones',
                        'type' => 'fieldset_text',
                        'name' => esc_html__( 'Номера телефонів', 'metabox-online-generator' ),
                        'rows' => 2,
                        'options' => array(
                            '+38 (098) 222-333-11' => esc_html__( 'Номер', 'metabox-online-generator' ),
                        ),
                        'clone' => 'true',
                    ),
                    array(
                        'id' => $prefix . 'socials',
                        'type' => 'fieldset_text',
                        'name' => esc_html__( 'Соціальні мережі', 'metabox-online-generator' ),
                        'rows' => 2,
                        'options' => array(
                            'https://facebook.com/' => esc_html__( 'Соц. мережа', 'metabox-online-generator' ),
                        ),
                        'clone' => 'true',
                    ),
                ),
            );
        
            return $meta_boxes;
        }
        add_filter( 'rwmb_meta_boxes', 'faculties_metabox' );
    }
    