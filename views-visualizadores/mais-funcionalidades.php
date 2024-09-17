<?php
/**
 * O blade faz, por padrão, na exebição do conteudo usando a sintaxe {{ }}, a transformação de caracteres que podem ter algum significado
 * ambiguo dentro do html ou até de javascript em uma entidade html para garantir que não haja algum problema. Exemplo: se adicionarmos um conteudo
 * para ser exibido com um caracatere especial ele irá converter para um entidade html. 
 * 
 * 'A < B' ele irá exibir A &gt; B
 * 
 * Isso é feito não só para evitar ambiguidade, mas principalmente por razões de segurança. Existe um ataque chamado Cross Site Scripting - XSS
 * que, através de um input de usuario, o site pode ser atacado incluindo scripts que serão executados; e atraves dessa limpeza que o blade faz 
 * ele nos previne desse tipo de ataque tornando o sistema mais seguro.  
 * 
 * #########################
 * 
 * Agora imagine que estamos criando um layout que vai ser manipulada por algum framework javascript no front. Alguns frameworks também 
 * utilizam da sintaxe {{ }} para parsear os seus dados.
 * Caso queiramos realmente exibir isso {{nome}} no frontend, devemos informar o blade que ele não deve fazer o parse disso adiconando o @ na 
 * frente. Exemplo:
 * 
 * @{{ nome }}
 * 
 * ############################ 
 * 
 * Caso exista um caso que seja necessario passar uma variavel do PHP para o javascript, por exemplo, podemos usar uma função do proprio laravel 
 * que pega o valor do PHP, faz o jsonEncode, e vai encapsular isso dentro de uma chamada do json parse que é JS::from. Exemplo:
 * 
 * <script>
 *      const series = {{Js::from($series)}};
 * </script>
 */