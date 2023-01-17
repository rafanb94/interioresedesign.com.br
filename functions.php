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

add_action('init', 'custom_post_type_piso_laminado_durafloor');
add_action('init','custom_post_type_piso_laminado_eucafloor');
add_action('init','custom_post_type_cortinas');
add_action('init','custom_post_type_persianas');

function custom_post_type_piso_laminado_durafloor() {
	register_post_type('pl-durafloor', array(
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

		'labels' => array (
			'name' => 'Piso Laminado Durafloor',
			'singular_name' => 'Piso Laminado Durafloor',
			'menu_name' => 'Piso Laminado Durafloor',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Piso Laminado Durafloor',
			'edit' => 'Editar',
			'edit_item' => 'Editar Piso Laminado Durafloor',
			'new_item' => 'Novo Nome do Piso Laminado Durafloor',
			'view' => 'Ver Piso Laminado Durafloor',
			'view_item' => 'Ver Piso Laminado Durafloor',
			'search_items' => 'Procurar Piso Laminado Durafloor',
			'not_found' => 'Nenhum Piso Laminado Durafloor Encontrado',
			'not_found_in_trash' => 'Nenhum Piso Laminado Durafloor Encontrado no Lixo',
		)
	));
}
function custom_post_type_piso_laminado_eucafloor() {
	register_post_type('pl-eucafloor', array(
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
function custom_post_type_cortinas() {
	register_post_type('cortinas', array(
		'label' => 'Cortinas',
		'description' => 'Cortinas',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'cortinas', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),
    'menu_icon' => 'dashicons-tag',

		'labels' => array (
			'name' => 'Cortinas',
			'singular_name' => 'Cortinas',
			'menu_name' => 'Cortinas',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Cortina',
			'edit' => 'Editar',
			'edit_item' => 'Editar Cortinas',
			'new_item' => 'Nova Cortina',
			'view' => 'Ver Cortinas',
			'view_item' => 'Ver Cortinas',
			'search_items' => 'Procurar Cortinas',
			'not_found' => 'Nenhuma Cortina',
			'not_found_in_trash' => 'Nenhuma Cortina encontrada',
		)
	));
}
function custom_post_type_persianas() {
	register_post_type('persianas', array(
		'label' => 'Persianas',
		'description' => 'Persianas',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'persianas', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),
    'menu_icon' => 'dashicons-tag',

		'labels' => array (
			'name' => 'Persianas',
			'singular_name' => 'Persianas',
			'menu_name' => 'Persianas',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Persiana',
			'edit' => 'Editar',
			'edit_item' => 'Editar Persianas',
			'new_item' => 'Nova Persiana',
			'view' => 'Ver Persianas',
			'view_item' => 'Ver Persianas',
			'search_items' => 'Procurar Persianas',
			'not_found' => 'Nenhuma Persiana',
			'not_found_in_trash' => 'Nenhuma Persiana encontrada',
		)
	));
}







?>
