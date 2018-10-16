# Intrudução ao Wordpress

Essa material está sendo criando com intuito de facilitar o aprendizado dos membros da [Associação Empresa Junior de Computação da UESC (TecnoJr)](https://www.tecnojr.com.br/) e qualquer outro estudante da área de computação que tenha o desejo de aprender Wordpress

**Desenvolvido por:**
[Henrique A. Serra](https://github.com/SerraZ3/) :smile: :metal:

## Sumário

1. [Introdução](#introdução)
2. [Instalando o Wordpress](#instalando-o-wordpress)
3. [Criando Tema](#criando-um-tema)

**Conhecimentos prévios recomendados:** HTML, CSS e PHP.

## Introdução

### O que é o WordPress?

WordPress é uma ferramenta para criação de sites. Ele possibilita a criação de blogs, e-commerces, dentre diversos outros tipos de sites de forma dinâmica, ou seja, pode ser alterado por um painel administrativo.

Sistema de Gestão de Conteúdo, essa é a característa do WP. Esse tipo de sistema possibilita o usuário publicar, editar, modificar, organizar e deletar conteúdos.

### Como começar?

O WordPress possui um site, [WordPress.com](https://wordpress.com/), que oferece serviços gratuito de criação e hospedagem de blogs, uma ótima opção para quem não deseja investir em hospedagem ou dominio e que tem um pequeno site. Entretanto, seu dominio fica restrito a, por exemplo, *seublog.wordpress.com*. 

Você receberá acesso para postar e modificar seu site, porém, a costomização é muito limitada pois você apenas pode usar os layout fornecidos no site, não podendo realizar customizão própria. Além disso, não poderá instalar plugins, utilizar publicidade (programa de afiliados) ou um sistema de métricas, como o [Google Analytics](https://analytics.google.com/analytics/web/provision/?authuser=0#provision/SignUp/). Você não terá acesso [FTP](#1-ftp) do servidor e terá que exibir obrigatoriamente no rodapé "Aloje seu blog com WordPress.com". Existe algumas funcionalidades *Premium*.

Para aqueles que desejam ter maior liberdade existe também o [WordPress.org](https://wordpress.org/). Ele ofere os códigos do WordPress além de possuir diversos tema, plugins, dentre outras coisas que ajudam a estilizar e melhorar seu site. Para usar ele basta baixar o arquivo no site e instalá-lo no seu servidor. Você precisará de um dominio.


|             | Wordpress.com | WordPress.org |
|------------|-----------------------|------------------------| 
|   Vantagens  | 1. Atualização automática da versão vigente do WordPress; <br> 2. Backup automático do conteúdo (sem perigo de perder seus posts); <br> 3. Seu blog ficará alojado em centenas de servidores, por isso é pouco provável que fique fora do ar devido ao tráfego intenso; <br> 4. Possiblidade de escolher dentre vários temas, estilos e categorias, gratuitamente;|  1. Liberdade de criar seu próprio tema e alterar o código; <br> 2. Pode adicionar qualquer funcionalidade, seja plugin, widget ou tema; <br>3. Liberdade para usar seu próprio dominio <br> 4. Conexão [FTP](#1-ftp) com seu servidor. | 
| Desvantagens | 1. Não é possível adicionar temas personalizados ou personalizar o tema escolhido, ficando “preso” apenas aos temas fornecidos pelo WordPress.com; <br> 2. Não existe a opção de personalizar os links permanentes do blog. O que impossibilita torná-los mais amigáveis; <br> 3. Não é possível carregar plugins; <br> 4. Não é possível adicionar banners de publicidade, Google AdSense ou nenhum código JavaScript |  1. Gasto com hospedagem e domínio|

### Padrões de condificação Wordpress

Como toda ferramenta tem seu peculiaridade, o WordPress possui as suas. Para que haja uma maior organização existe os Padrões de Codificação. Caso um dia você deseja publicar o seu tema ou plugin no WordPress.org é necessário seguir seu padrão. Para saber mais sobre padrões de codificação do WordPress acesse [todoespacoonline.com](https://www.todoespacoonline.com/w/2014/05/padroes-de-codificacao-wordpress/).

### Codex

O WordPress.org fonece o [Codex](https://codex.wordpress.org/) onde pode-se encontrar diversas explicações sobre as funcionalidades do WordPress, além de que ensina como usar o WordPress.

### Funções do WordPress

O WordPress fornece algumas ferramentas para ajudar no desenvolvimento do tema ou plugin. Existem ao [Tamplate Tags](https://codex.wordpress.org/Template_Tags) e os [Conditional Tags](https://codex.wordpress.org/Conditional_Tags). Iremos abordar apenas alguns, acesso o link para saber mais sobre ambos.

## Instalando o Wordpress

Primeiro é necessário baixar o arquivo de instalação, você pode encontrar no site 	do [Wordpress.org](https://wordpress.org/) em "Get WordPress".

**AVISO:** É necessário o LAMP ou XAMPP em seu computador, pois o WordPress(WP) é feito em PHP e necessita do APACHE, além disso, precisa de conexão com Banco de Dado.

Após baixado, você deve colocar o arquivo .zip (ou .tar.gz) no seu diretório do localhost. Extraia o arquivo. Acesse a pasta extraida pelo navegador (localhost/"nome_pasta_wp"), ela irá te direcionar para uma pagina de instalação. Caso essa página não apareça você pode acessar pelo endereço **localhost/"nome_pasta_wp"/wp-admin/setup-config.php**.

Para continuar é preciso de algumas informações do seu Banco de Dados (BD).
1. Database name (nome do BD): Você deve criar um BD que será usado pelo WP. Após criar deve informá-lo no campo;
2. Username (Nome do usuário): Nome do usuário do BD;
3. Password (Senha): Senha do usuário BD;
4. Database Host (Endereço do BD): Como seu WP será local, pode colocar como "localhost" ou "127.0.0.1" (IP do localhost);
5. Table Prefix (Prefixo da tabela): Essa será o nome que o WP adotara para o inicio de toda tabela que será gerada por ele. Por convensão dexa-se o ultimo caracter como "_".
**OBS.:**Essas informações deverão ser modificadas caso haja transferencia para outro banco de dados.

Preenchido os campos com as devidas informações, você será redirecionado para uma página que possuirá um código. Copie esse código. Abra o arquivo **wp-config.php**, ele se encontra no diretório principal da sua pasta WP. Se não achar o arquivo com esse nome, você deve pegar o arquivo **wp-config-sample.php** e modificar para **wp-config.php**. Copie o codigo nesse no arquivo **wp-config.php** e salve.

Abrirá uma página de "Welcome"(bem-vindo). Você deve informar:
1. Site Title: Titulo que o site receberá (pode ser modificado depois);
2. Username: Usuário de acesso ao painel administrativo do WP;
3. Password: Senha do acesso ao painel administrativo do WP;<br>
3.1. Caso você coloque senha muito curta deve marcar esse radio button
4. Your email: Email para recuperação de acesso;
5. Search Engine Visibility: Caso você não deseje que os moteres de busca indiquem seu site (é possivel modificar depois).

Após preencher dados você terá concluido a instalação. :thumbsup:


## Criando um tema

Crie uma pasta em **"/wp-content/themes/"**. Essa pasta devera ter o nome do seu tema. O wordpress consegue identificar pastas e arquivos em locais ou com nomes específicos. A depender do local ou do nome ele realizará uma função preestabelecida. Nesse arquivo está a constituição básica de um tema.

### Constituição básica de um Tema:

* **index.php:** código que mostra a página inicial;
* **header.php:** cabeçalho de todoas as páginas do seu tema;
* **footer.php:** onde fica o código do rodapé;
* **css/main-style.css:** Pasta fica o codigo principal do CSS
* **sidebar.php:** onde fica o código da lateral da página;
* **single.php:** código que mostra o artigo na sua própria página;
* **single-{post-type}.php:** código que mostra o artigo na sua própria página, porem em algum post diferente (video, galeria, etc);
* **page.php:** código que mostra o conteúdo de uma página estática;
* **archive.php:** o código nesta parte vai mostrar os artigos que estão no arquivo, nas categorias, tags, etc;
* **functions.php:** local onde ficam algumas funções que adicionam mais capacidades aos temas;
* **404.php:** mostrará um texto para avisar que o conteúdo não foi encontrado;
* **style.css:** ficheiro onde fica as informações do tema e pode conter todo o conteudo CSS do tema (Opcional);
* **comments.php:** Arquivo que possui o modelo do comentário;
* **front-page.php:** Arquivo de modelo da página inicial;
* **home.php:** O arquivo de modelo da página inicial, que é a front page por padrão. Se você utilizar uma página estática para a página inicial, este arquivo irá manter os últimos posts do blog;
* **category.php:** Arquivo de modelo para categorias;
* **tag.php:** Arquivo de modelo para tags;
* **taxonomy.php:** Usado quando um termo personalizado é utilizado;
* **author.php:**  Arquivo de modelo para exibir posts de autores;
* **date.php:** Usado quando acessamos artigos por datas;
* **attachment.php:** Arquivo de modelo para anexos;
* **image.php:** Usado quando uma imagem única é acessada. Sobrescreve attachment.php;

Para um tema funciona basta ter apenas os arquivos **style.css** e **index.php**. Entretanto seu tema não será robusto.

### style.css

Nesse arquivo ficará todas as configurações visuais do seu Tema. Além disso, possuirá as informações que o WP mostrará sobre seu Tema.

Crie um arquivo e nomei como **style.css** e depois abra-o.

#### Informações do seu Tema:

* Theme Name (\*): Nome do Tema.
* Theme URI: Página onde o publico pode conseguir mais informações sobreo Tema.
* Author (\*): Nome do Autor do Tema.
* Author URI: Link individual ou organizacional do Autor.
* Description (\*): Pequena descrição sobre o Tema.
* Version (\*): Versão do Tema. A cada atualização deve modificar.
* License (\*): Nome da licença.
* License URI (\*): Link que leva para a lincença.
* Text Domain (\*): Usado para traduzir seu tema para outras linhagens
* Tags: Palavras que representem caracteristicas do seu tema. Essas palavras ajudam na pesquisa. As palavras devem ser separadas de por virgula. Nesse formato "azul, blue, claro, calmo,..."
* Domain Path: ??. Defaults to /languages.
* Template: Serve para referenciar o Tema pai. Usado para quando você cria um Tema baseado em outro Tema. 

(\*) = Informações esseciais para o Tema.


#### Estilizando seu Tema:

O arquivo style.css funciona exatamente como qualquer outro arquivo .css. Você pode modificar qualquer atributo de qualquer tag, class ou id sem problema algum.

### index.php

Essa será a página principal, a primeira a ser vista quando acessarem seu site. Ela pode ser personalizada da forma que desejar, como se fosse estivesse fazendo um site normal. Entretanto, existe algumas funções do WordPress que servem para ajudar e tornar o processo mais eficiente.

#### Estrutura básica do index.php
```html
<!-- Chama arquivo header.php com o cabeçalho do site -->
<?php get_header(); ?>

<div>
    <div>
        <!-- Aqui fica o conteúdo do site -->

		<!-- Loop que irá mostrar os posts -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<!-- Container do artigo -->	
		<div class="artigo-container">
			
			<!-- Título do poster -->
			<h1>
				<!-- the_permalink(); busca o link do posto que está sendo mostrado -->
				<!-- the_title(); mostra o titulo respectivo ao poster -->
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h1>
			
			<!-- the_category(); mostra a categoria do poster -->
			<?php the_category(); ?>
			
			<!-- the_author(); mostra o autor do poster -->
			<?php the_author(); ?>
			
			<!-- the_date(); mostra a data em que foi postado -->
			<?php the_date(); ?>
			
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
    </div>
    <!-- Chama arquivo sidebar.php -->
    <?php get_sidebar(); ?>
</div>

<!-- Chama arquvio "footer.php" -->
<?php get_footer(); ?>
```

**NOTA:** Se você possui um template diferenciado para o header ou footer você pode criar um arquivo header-nomedesejado.php. Suponhamos que o arquivo seja header-modelo.php devemos chamá-lo dessa formar:

```php
<?php get_header('modelo'); ?>
```



### header.php

Esse arquivo será responsável pelo header de todas as páginas. Nele conterá algumas informaçoes essenciais para o ser WP.

Algumas tags são necessárias para o perfeito funcionamento do site.

```html
<!-- Pega o titulo do site -->
<title><?php wp_title(''); ?></title>

<!-- Necessário para layout responsivo -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Busca o charset padrão fornecido pelo WordPress -->
<meta charset="<?php bloginfo('charset'); ?>">

<!--  -->

```

## Template Tags mais utilizados:

* get_header(); ==> Chamar o arquivo header.php para a página
* get_sidebar(); ==> Chamar o arquivo sidebar.php para a página
* get_footer(); ==> Chamar o arquivo footer.php para a página
* bloginfo(); ==> Retorna informações do site a depender do parametro;


## Apêndice

#### 1. FTP

> FTP é a sigla para File Transfer Protocol, um termo que, traduzido para o português, significa Protocolo de Transferência de Arquivos. <br>
> Ele é basicamente um tipo de conexão que permite a troca de arquivos entre dois computadores conectados à internet. Com ela, você pode enviar qualquer coisa para uma outra máquina ou armazená-los em um servidor FTP, ficando ela sempre disponível para o usuário acessar.  

