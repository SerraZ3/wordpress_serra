<!-- Chama arquivo "header.php" -->
<?php get_header(); ?>

<div id="conteudo">
    <div id="artigos">

        <!-- get_template_part(); = Pela o template a parte do index e chama -->
        <!-- Está pegando o codigo do loop -->
        <?php get_template_part('loop', 'index'); ?>

    </div>
        <div class="artigo">
            

        </div>
         
        <div class="artigo">
            <h2>Titulo do artigo 2</h2>
            <p>Postado por administrador em 16/01/2012</p>
            <p>Conteudo do artigo</p>
        </div>


    </div>
    <!-- Chama arquivo "sidebar.php" -->
    <?php get_sidebar(); ?>
</div>

<!-- Chama arquvio "footer.php" -->
<?php get_footer(); ?>

  