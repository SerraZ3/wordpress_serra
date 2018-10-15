<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
	<head>
		<title>Página de HTML</title>
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title(''); ?></title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
	</head>
	<body>
	<div id="corpo">
	    <div id="header">
	        <h1>Titulo do Site</h1>
	        <h2>Descrição do site</h2>
	         
	        <ul id="nav">
	            <li><a href="#">Página 1</a></li>
	            <li><a href="#">Página 2</a></li>
	            <li><a href="#">Página 3</a></li>
	            <li><a href="#">Página 4</a></li>
	        </ul>
	    </div>