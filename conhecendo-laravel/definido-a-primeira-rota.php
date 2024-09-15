<?php

/**
 * Como executar o projeto laravel? 
 * 
 * Dentro do diretório que foi criado do projeto laravel, executamos o comando ´´´ php artisan serve ´´´ para levantar um servidor web com laravel
 * caso queira especificar o host e a porta a ser usada np servidor laravel, podemos passar: --host=0.0.0.0 --port=8000
 * o comando ´´´ php artisan ´´´ nos trás diversas opções e ferramentas a serem executadas
 * 
 * Acessando no diretório routes o arquivo web.php temos as configurações de rotas.
 * A definição de uma rota com Laravel é bem simples: utilizamos a Classe Route e em seguida o verbo http que esperamos receber essa requisição,
 * passando a url que vai ser recebida e, com uma função anonima, o que vai ser executado
 * 
 *  Route::get('/', function () {
 *     return view('welcome');
 *  });
 */
