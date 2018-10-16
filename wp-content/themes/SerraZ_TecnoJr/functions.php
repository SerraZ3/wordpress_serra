<?php 
	// Remove a barra de admin
	add_filter('show_admin_bar', '__return_false');

	// Remove a versão do WordPress do cabeçalho
	remove_action('wp_head', 'wp_generator');

	// Remove estilos da galeria
	add_filter( 'use_default_gallery_style', '__return_false' );
	// Estilos e scripts
	function carregar_css_js () {
		// Versão do nosso tema
		$SerraZ_version = '1.0';
		
		// Style.css
		wp_enqueue_style( 'tutsup-style-description', get_stylesheet_uri(), array(), $SerraZ_version, 'all' );
		
		// Um arquivo de CSS qualquer dentro da pasta css/
		// get_template_directory_uri(); => pega o diretorio do tema
		wp_enqueue_style( 'tutsup-style', get_template_directory_uri() . '/css/main-style.css', array(), $SerraZ_version, 'all' );

		// Adiciona o materialize.css no codigo
		wp_enqueue_style( 'materialize-freamwork', get_template_directory_uri() . '/css/materialize.min.css', array(), $SerraZ_version, 'all' );


		// Adiciona o Materialize.js
		wp_enqueue_script( 'tutsup-scripts', get_template_directory_uri() . '/js/materialize.min.js', array('jquery'), $SerraZ_version, true );

		// Um arquivo de script qualquer dentro da pasta js/
		// get_template_directory_uri(); => pega o diretorio do tema
		wp_enqueue_script( 'tutsup-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), $SerraZ_version, true );

	}
	// Carrega os estilos e scripts
	add_action( 'wp_enqueue_scripts', 'carregar_css_js' );
?>