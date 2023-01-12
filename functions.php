<?php 
// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

function custom_post_type_piso_laminado_durafloor() {
	register_post_type('piso-laminado-durafloor', array(
		'label' => 'Piso Laminado Durafloor',
		'description' => 'Piso Laminado Durafloor',
		'public' => true, 
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'piso-laminado-durafloor', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),
    'menu_icon' => 'dashicons-tag',

		'labels' => array (
			'name' => 'Piso Laminado Durafloor',
			'singular_name' => 'Piso Laminado Durafloor',
			'menu_name' => 'Piso Laminado Durafloor',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Piso Laminado Durafloor',
			'edit' => 'Editar',
			'edit_item' => 'Editar Piso Laminado Durafloor',
			'new_item' => 'Novo Piso Laminado Durafloor',
			'view' => 'Ver Piso Laminado',
			'view_item' => 'Ver Papel de parede',
			'search_items' => 'Procurar Piso Laminado Durafloor',
			'not_found' => 'Nenhum Piso Laminado Durafloor Encontrado',
			'not_found_in_trash' => 'Nenhum Piso Laminado Durafloor Encontrado no Lixo',
		)
	));
}
add_action('init','custom_post_type_piso_laminado_durafloor');

function custom_post_type_piso_laminado_eucafloor() {
	register_post_type('piso-laminado-eucafloor', array(
		'label' => 'Piso Laminado Eucafloor',
		'description' => 'Piso Laminado Eucafloor',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'piso-laminado-eucafloor', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),
    'menu_icon' => 'dashicons-tag',

		'labels' => array (
			'name' => 'Piso Laminado Eucafloor',
			'singular_name' => 'Piso Laminado Eucafloor',
			'menu_name' => 'Piso Laminado Eucafloor',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Piso Laminado Eucafloor',
			'edit' => 'Editar',
			'edit_item' => 'Editar Piso Laminado Eucafloor',
			'new_item' => 'Novo Piso Laminado Eucafloor',
			'view' => 'Ver Piso Laminado',
			'view_item' => 'Ver Papel de parede',
			'search_items' => 'Procurar Piso Laminado Eucafloor',
			'not_found' => 'Nenhum Piso Laminado Eucafloor Encontrado',
			'not_found_in_trash' => 'Nenhum Piso Laminado Eucafloor Encontrado no Lixo',
		)
	));
}
add_action('init','custom_post_type_piso_laminado_eucafloor');








?>
