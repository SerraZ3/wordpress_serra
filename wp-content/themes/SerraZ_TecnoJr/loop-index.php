<!-- Loop que irá mostrar os posts -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Container do artigo -->    
<div class="artigo-container">
    
    <!-- Título do poster -->
    <h3>
        <!-- the_permalink(); busca o link do posto que está sendo mostrado -->
        <!-- the_title(); mostra o titulo respectivo ao poster -->
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>
    
    <!-- the_category(); mostra a categoria do poster -->
    <p><?php the_category(); ?></p>
    
    <!-- the_author(); mostra o autor do poster -->
    <p><?php the_author(); ?></p>
    
    <!-- the_date(); mostra a data em que foi postado -->
    <p><?php the_date(); ?></p>
    
    <!-- Se existe apenas um poste mostrar conteúdo ou aqui for a página do post -->
    <?php if ( is_single() || is_page() ): ?>

    <!-- the_content(); mostra o conteúdo do poster -->
    <?php the_content(); ?>
    
    <!-- Se não... -->
    <?php else: ?>
        <!-- Resumo do post -->
        <?php the_excerpt(); ?>
    <?php endif; ?>

</div>

<!-- Finaliza o loop -->
<?php endwhile; ?>

<!-- Finaliza o if -->
<?php endif; ?>