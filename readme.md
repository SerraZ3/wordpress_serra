# Wordpress - Henrique A. Serra

Essa material está sendo criando com intuito de facilitar o aprendizado dos membros da [Associação Empresa Junior de Computação da UESC (TecnoJr)](https://www.tecnojr.com.br/) e qualquer outro estudante da área de computação que tem o desejo de aprender Wordpress

## Instalando o Wordpress

Primeiro é necessário baixar o arquivo de instalação, você pode encontrar no site 	do [Wordpress.org](https://wordpress.org/) em "Get WordPress".

**AVISO:** É necessário possuir o LAMP ou XAMPP em seu computador, pois o WordPress(WP) é feito em PHP, necessitando do APACHE, e precisa de conexão com Banco de Dado.

Após baixado, você deve colocar o arquivo .zip (ou .tar.gz) no seu diretório do localhost. Extraia o arquivo. Acesse a pasta extraida pelo navegador (localhost/"nome_pasta_wp"), ela irá te direcionar para uma pagina de instalação. Caso essa página não apareça você pode acessar pelo endereço **http://localhost/"nome_pasta_wp"/wp-admin/setup-config.php**.



## Criando um tema

1º Crie uma pasta em wordpress/wp-content/themes/


Constituição básica de um Tema:

* header.php: local onde fica o código do cabeçalho
* sidebar.php: local onde fica o código da lateral
* footer.php: local onde fica o código do rodapé
* index.php: código que mostra os artigos na página inicial
* single.php: código que mostra o artigo na sua própria página
* page.php: código que mostra o conteúdo de uma página estática
* archive.php: igual ao index.php, o código nesta parte vai mostrar os artigos que estão no arquivo, nas categorias, tags, etc
* functions.php: local onde ficam algumas funções que adicionam mais capacidades aos temas
* 404.php: igual ao index.php, em vez de mostrar um artigo deverá de mostrar um texto a avisar que o conteúdo não foi encontrado
* style.css: ficheiro onde fica o stylesheet do tema
