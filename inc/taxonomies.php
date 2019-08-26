<?php

    register_taxonomy("faculties", ["departments", "videos", "faculties", "post"], array(
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
