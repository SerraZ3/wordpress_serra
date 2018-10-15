<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
 
<title>Página de HTML</title>
<link rel="stylesheet" href="style.css" type="text/css" />
 
</head>
<body>
<div id="corpo">
    <!-- Chama arquivo "header.php" -->
    <?php get_header(); ?>

    <div id="conteudo">
        <div id="artigos">
            <div class="artigo">
                <h2>Titulo do artigo 1</h2>
                <p>Postado por administrador em 16/01/2012</p>
                <p>Conteudo do artigo</p>
            </div>
             
            <div class="artigo">
                <h2>Titulo do artigo 2</h2>
                <p>Postado por administrador em 16/01/2012</p>
                <p>Conteudo do artigo</p>
            </div>

            <!-- Chama arquivo "sidebar.php" -->
            <?php get_sidebar(); ?>

        </div>
    </div>

<!-- Chama arquvio "footer.php" -->
<?php get_footer(); ?>

  