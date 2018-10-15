# Wordpress - Henrique A. Serra

Essa material está sendo criando com intuito de facilitar o aprendizado dos membros da [Associação Empresa Junior de Computação da UESC (TecnoJr)](https://www.tecnojr.com.br/) e qualquer outro estudante da área de computação que tem o desejo de aprender Wordpress

## Instalando o Wordpress

Primeiro é necessário baixar o arquivo de instalação, você pode encontrar no site 	do [Wordpress.org](https://wordpress.org/) em "Get WordPress".

**AVISO:** É necessário possuir o LAMP ou XAMPP em seu computador, pois o WordPress(WP) é feito em PHP, necessitando do APACHE, e precisa de conexão com Banco de Dado.

Após baixado, você deve colocar o arquivo .zip (ou .tar.gz) no seu diretório do localhost. Extraia o arquivo. Acesse a pasta extraida pelo navegador (localhost/"nome_pasta_wp"), ela irá te direcionar para uma pagina de instalação. Caso essa página não apareça você pode acessar pelo endereço **localhost/"nome_pasta_wp"/wp-admin/setup-config.php**.

Para continuar é preciso de algumas informações do seu Banco de Dados (BD).
	1º Database name (nome do BD): Você deve criar um BD que será usado pelo WP. Após criar deve informá-lo no campo;
	2º Username (Nome do usuário): Nome do usuário do BD;
	3º Password (Senha): Senha do usuário BD;
	4º Database Host (Endereço do BD): Como seu WP será local, pode colocar como "localhost" ou "127.0.0.1" (IP do localhost);
	5º Table Prefix (Prefixo da tabela): Essa será o nome que o WP adotara para o inicio de toda tabela que será gerada por ele. Por convensão dexa-se o ultimo caracter como "_".
**OBS.:**Essas informações deverão ser modificadas caso haja transferencia para outro banco de dados.

Preenchido os campos com as devidas informações, você será redirecionado para uma página que possuirá um código. Copie esse código. Abra o arquivo **wp-config.php**, ele se encontra no diretório principal da sua pasta WP. Se não achar o arquivo com esse nome, você deve pegar o arquivo **wp-config-sample.php** e modificar para **wp-config.php**. Copie o codigo nesse no arquivo wp-config.php e salve.

Abrirá uma página de "Welcome"(bem-vindo). Você deve informar:
1. Site Title: Titulo que o site receberá (pode ser modificado depois);
2. Username: Usuário de acesso ao painel administrativo do WP;
3. Password: Senha do acesso ao painel administrativo do WP;
3.1. Caso você coloque senha muito curta deve marcar esse radio button
4. Your email: Email para recuperação de acesso;
5. Search Engine Visibility: Caso você não deseje que os moteres de busca indiquem seu site (é possivel modificar depois).

Após preencher dados você terá concluido a instalação.


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
