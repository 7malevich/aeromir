<?php

add_action('init', 'register_post_product');
function register_post_product(){
    register_post_type('product', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Продукт', // основное название для типа записи
            'singular_name'      => 'Продукт', // название для одной записи этого типа
            'add_new'            => 'Добавить продукт', // для добавления новой записи
            'add_new_item'       => 'Добавление продукта', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование продукта', // для редактирования типа записи
            'new_item'           => 'Новый продукт', // текст новой записи
            'view_item'          => 'Смотреть продукт', // для просмотра записи этого типа.
            'search_items'       => 'Искать продукт', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Продукты', // название меню
        ),
        'description'         => 'Здесь публикуются продукты',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => true,
        'show_in_menu'        => true, // показывать ли в меню админки
        'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null,
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-products',
        'capability_type'	  => 'post',
        'hierarchical'        => false,
        'supports'            => array('title','editor','thumbnail','custom-fields'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array('category'),
        'has_archive'         => true,
        'rewrite' 			  => array('hierarchical' => false, 'slug' => 'product', "with_front" => false),
        'query_var'           => true,
    ) );
}

add_action('init', 'register_post_object');
function register_post_object(){
    register_post_type('object', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Объект', // основное название для типа записи
            'singular_name'      => 'Объект', // название для одной записи этого типа
            'add_new'            => 'Добавить объект', // для добавления новой записи
            'add_new_item'       => 'Добавление объекта', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование объекта', // для редактирования типа записи
            'new_item'           => 'Новый объект', // текст новой записи
            'view_item'          => 'Смотреть объект', // для просмотра записи этого типа.
            'search_items'       => 'Искать объект', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Объекты', // название меню
        ),
        'description'         => 'Здесь публикуются объекты',
        'public'              => true,
        'publicly_queryable'  => null,
        'exclude_from_search' => null,
        'show_ui'             => true,
        'show_in_menu'        => true, // показывать ли в меню админки
        'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null,
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-store',
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array('title','editor','thumbnail','custom-fields'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(''),
        'has_archive'         => true,
        'rewrite'             => array('hierarchical' => false, 'slug' => 'object', "with_front" => false),
        'query_var'           => true,
    ) );
}

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page( array(
        'page_title'  => 'Главная страница',
        'menu_slug'   => 'front-page',
        'icon_url'     => 'dashicons-admin-home',
        'position'     => 15
    ));
}

?>