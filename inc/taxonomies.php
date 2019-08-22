<?php

    register_taxonomy("faculties", ["teachers", "departments"], array(
        'public'            =>  true,
        'hierarchical'      =>  true,
        'show_in_nav_menus' =>  true,
        'has_archive'       =>  true,
        'query_var' => false,
        "label" => __('Факультети', 'brainworks'), 
        "singular_label" => __('Факультет', 'brainworks'), 
        "rewrite" => array( 'slug' => 'faculties', 'with_front'=> true, 'hierarchical' => true)
    ));
