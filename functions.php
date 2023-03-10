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

add_action('init', 'custom_post_types');


function custom_post_types() {
	register_post_type('pisos-laminados', array(
		'label' => 'Pisos Laminados',
		'description' => 'Pisos Laminados',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'taxonomies' => array( 'category' ),
		'rewrite' => array('slug' => 'pisos-laminados', 'with_front' => true),
		'show_in_rest' => true,
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),
		'menu_icon' => 'dashicons-category',

		'labels' => array (
			'name' => 'Piso Laminados',
			'singular_name' => 'Piso Laminado',
			'menu_name' => 'Pisos Laminados',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Pisos Laminados',
			'edit' => 'Editar',
			'edit_item' => 'Editar Pisos Laminados',
			'new_item' => 'Novo Nome do Pisos Laminados',
			'view' => 'Ver Pisos Laminados',
			'view_item' => 'Ver Piso Laminado',
			'search_items' => 'Procurar Piso Laminado',
			'not_found' => 'Nenhum Piso Laminado Encontrado',
			'not_found_in_trash' => 'Nenhum Piso Laminado Encontrado no Lixo',
		)
	));
	register_post_type('pisos-vinilicos', array(
		'label' => 'Pisos Vinilicos',
		'description' => 'Pisos Vinilicos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'taxonomies' => array( 'category' ),
		'rewrite' => array('slug' => 'pisos-vinilicos', 'with_front' => true),
		'query_var' => true,
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),
		'menu_icon' => 'dashicons-category',

		'labels' => array (
			'name' => 'Pisos Vinilicos',
			'singular_name' => 'Piso Vinilico',
			'menu_name' => 'Pisos Vinilicos',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Piso Vinilico',
			'edit' => 'Editar',
			'edit_item' => 'Editar Piso Vinilico',
			'new_item' => 'Novo Nome do Piso Vinilico',
			'view' => 'Ver Pisos Vinilicos',
			'view_item' => 'Ver Piso Vinilico',
			'search_items' => 'Procurar Piso Vinilico',
			'not_found' => 'Nenhum Piso Vinilico Encontrado',
			'not_found_in_trash' => 'Nenhum Piso Vinilico Encontrado no Lixo',
		)
	));
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
    'menu_icon' => 'dashicons-category',

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
    'menu_icon' => 'dashicons-category',

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
	register_post_type('box-de-vidro', array(
		'label' => 'Box de Vidro',
		'description' => 'Box de Vidro',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'box-de-vidro', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),
    'menu_icon' => 'dashicons-category',

		'labels' => array (
			'name' => 'Box de Vidro',
			'singular_name' => 'Box de Vidro',
			'menu_name' => 'Box de Vidro',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Box de Vidro',
			'edit' => 'Editar',
			'edit_item' => 'Editar Box de Vidro',
			'new_item' => 'Nova Box de Vidro',
			'view' => 'Ver Box de Vidro',
			'view_item' => 'Ver Box de Vidro',
			'search_items' => 'Procurar Box de Vidro',
			'not_found' => 'Nenhuma Box de Vidro',
			'not_found_in_trash' => 'Nenhuma Box de Vidro encontrada',
		)
	));
}

function setPostViews($postID) {
  $countKey = 'post_views_count';
  $count = get_post_meta($postID, $countKey, true);
  if($count==''){
      $count = 0;
      delete_post_meta($postID, $countKey);
      add_post_meta($postID, $countKey, '0');
  }else{
      $count++;
      update_post_meta($postID, $countKey, $count);
  }
}


?>
