<?php

    register_taxonomy("faculties", ["departments", "videos", "faculties", "post", "teachers"], array(
        'public'            =>  true,
        'hierarchical'      =>  true,
        'show_in_nav_menus' =>  true,
        'has_archive'       =>  true,
        'query_var' => false,
        "label" => __('Факультети', 'brainworks'), 
        "singular_label" => __('Факультет', 'brainworks'), 
        "rewrite" => array( 'slug' => 'faculties', 'with_front'=> true, 'hierarchical' => true)
    ));
    
    register_taxonomy("departments", ["teachers", "departments"], array(
        'public'            =>  true,
        'hierarchical'      =>  true,
        'show_in_nav_menus' =>  true,
        'has_archive'       =>  true,
        'query_var' => false,
        "label" => __('Кафедри', 'brainworks'), 
        "singular_label" => __('Кафедри', 'brainworks'), 
        "rewrite" => array( 'slug' => 'departments', 'with_front'=> true, 'hierarchical' => true)
    ));
    
    register_taxonomy("concert-hall", ["concerts"], array(
        'public'            =>  true,
        'hierarchical'      =>  true,
        'show_in_nav_menus' =>  true,
        'has_archive'       =>  true,
        'query_var' => false,
        "label" => __('Зала', 'brainworks'), 
        "singular_label" => __('Зала', 'brainworks'), 
        "rewrite" => array( 'slug' => 'concert-hall', 'with_front'=> true, 'hierarchical' => true)
    ));
