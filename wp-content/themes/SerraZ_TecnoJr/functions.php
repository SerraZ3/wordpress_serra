<?php 
	// Remove a barra de admin
	add_filter('show_admin_bar', '__return_false');

	// Remove a versão do WordPress do cabeçalho
	remove_action('wp_head', 'wp_generator');

	// Remove estilos da galeria
	add_filter( 'use_default_gallery_style', '__return_false' );
?>