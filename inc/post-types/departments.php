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


    if (!function_exists('departments_metabox')) {
        function departments_metabox( $meta_boxes ) {
            $prefix = '';
    
            $meta_boxes[] = array(
                'id' => 'departments_metabox',
                'title' => esc_html__( 'Мета-дані', 'metabox-online-generator' ),
                'post_types' => array('departments'),
                'context' => 'advanced',
                'priority' => 'default',
                'autosave' => 'false',
                'fields' => array(
                    array(
                        'id' => 'schedule',
                        'type' => 'wysiwyg',
                        'name' => 'Розклад'
                    ),
                    array(
                        'id' => 'disciplines',
                        'type' => 'wysiwyg',
                        'name' => 'Дисципліни'
                    ),
                    array(
                        'id' => $prefix . 'exam',
                        'type' => 'fieldset_text',
                        'name' => esc_html__( 'Предмети ЗНО', 'metabox-online-generator' ),
                        'rows' => 2,
                        'options' => array(
                            'Українська мова' => esc_html__( 'Назва предмету', 'metabox-online-generator' ),
                        ),
                        'clone' => 'true',
                    ),
                    array(
                        'id' => $prefix . 'tasks',
                        'type' => 'fieldset_text',
                        'name' => esc_html__( 'Творчі завдання', 'metabox-online-generator' ),
                        'rows' => 2,
                        'options' => array(
                            'Назва завдання' => esc_html__( 'Назва завдання', 'metabox-online-generator' ),
                        ),
                        'clone' => 'true',
                    ),
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
                    array(
                        'id' => $prefix . 'subjects_subtitle',
                        'type' => 'text',
                        'name' => esc_html__( 'Заголовок секції', 'metabox-online-generator' ),
                    ),
                    array(
                        'id' => $prefix . 'file',
                        'type' => 'file_advanced',
                        'name' => esc_html__( 'Файл для завантаження', 'metabox-online-generator' ),
                        'max_file_uploads' => 1,
                    ),
                ),
            );
        
            return $meta_boxes;
        }
        add_filter( 'rwmb_meta_boxes', 'departments_metabox' );
    }
    