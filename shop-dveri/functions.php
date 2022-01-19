<?php

add_action('wp_enqueue_scripts', 'addScripts');
add_action('wp_enqueue_scripts', 'addStyles');
add_action('wp_enqueue_scripts', 'add_scripts');
add_theme_support( 'post-thumbnails', array( 'post' ) );
add_image_size('adv_thumbnail', 100, 100, true);
add_theme_support('custom-logo');
add_action('after_setup_theme', 'add_menu');

function addScripts() {
    wp_deregister_script('jquery-core');
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}

function addStyles() {
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style('style', get_stylesheet_uri());
}

function add_menu() {
	register_nav_menu('top', 'Верхнее меню сайта');
	register_nav_menu('bottom', 'Нижнее меню сайта'); 
}

function add_scripts() {
	if(is_page_template('templates/works.php') || is_single()) {
		wp_enqueue_style('baguetteBox', get_template_directory_uri() . '/assets/css/baguetteBox.min.css');
		wp_enqueue_script('baguetteBox', get_template_directory_uri() . '/assets/js/baguetteBox.min.js', null, null, true);
		
	}

	if(is_category('catalog')) {
		wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/mixitup.min.js', null, null, true);
	}

	if(is_page_template('templates/contacts.php')) {
		wp_enqueue_script('list', get_template_directory_uri() . '/assets/js/list.min.js', null, null, true);
	}
} 



/* Добавление раздела двери*/
add_action('init', 'dveri_custom_post_type');
function dveri_custom_post_type(){
	register_taxonomy( 'category_door', [ 'doors' ], [
		'label'                 => 'Категории', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категории',
			'singular_name'     => 'Категория',
			'search_items'      => 'Искать Категории',
			'all_items'         => 'Все Категории',
			'parent_item'       => 'Родит. категория',
			'parent_item_colon' => 'Родит. категория:',
			'edit_item'         => 'Ред. Категория',
			'update_item'       => 'Обновить Категории',
			'add_new_item'      => 'Добавить Категорию',
			'new_item_name'     => 'Новая Категория',
			'menu_name'         => 'Категория',
		),
		'description'           => 'Рубрики для категорий', // описание таксономии
		'public'                => true,
		'show_in_nav_menus'     => false, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => false, // равен аргументу show_ui
		'hierarchical'          => true,
		'rewrite'               => array('slug'=>'doors', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false ),
		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
	] );
	
	register_post_type('doors', array(
		'labels'             => array(
			'name'               => 'Двери', 
			'singular_name'      => 'Дверь', 
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую дверь',
			'edit_item'          => 'Редактировать дверь',
			'new_item'           => 'Новая дверь',
			'view_item'          => 'Посмотреть дверь',
			'search_items'       => 'Найти дверь',
			'not_found'          => 'Дверей не найдено',
			'not_found_in_trash' => 'В корзине дверей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Двери'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-welcome-add-page',
		'supports'           => array('title','editor')
	) );
}

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2);
function my_navigation_template($template, $class) {
	return '
		<nav class="navigation %1$s" role="navigation">
			<div class="nav-links">%3$s</div>
		</nav>
	';
} 








