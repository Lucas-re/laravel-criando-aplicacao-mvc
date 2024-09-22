<?php 
/**
 * Agora vamos fazer com que o formulario salve os dados no banco de dados.
 * Primeiro precisamos definir para qual url os dados do formulario vai ser enviado: action="/series/salvar" 
 * 
 * Agora vamos criar a rota: em routes no arquivo web.php
 * Route::post('/series/salvar', [SeriesController::class, 'store']);
 * 
 * No arquivo SeriesController criamos o metodo store recebendo a requisição do nosso formulario.
 * Com a requisição, acessamos o nome da serie da seguinte forma: $nomeSerie = $request->input('nome');
 * 
 * Agora precisamos inserir isso no banco de dados. Existem algumas formas de fazer e, primeiro, vamos ver a maneira não tão interessante.
 * No laravel existe uma classe cheia de metodos estaticos chamada Facade. Ela não é necessariamente uma implementação do Design patterns Facade,
 * mas é como ela é chamada. E essa facade se chama DB.
 * 
 * Nela temos alguns metodos estaticos referente as operações de banco de dados que podemos fazer, e uma delas é o insert.
 * Nela podemos informar uma query sql a ser executada no banco de dados 
 * 
 * Ao tentar enviar o formulario possivelmente gerou o erro 419. Existe uma falha de segura que podemos ter em formularios que o laravel nos obriga 
 * a tratar que é Cross Site Request Forgery, é basicamente a possibilidade de outras pessoas forjar uma requisição de um outro site para o nosso.
 * É um ataque, relativamente, simples; e basicamente o que precisamos fazer para corrigir, é enviar uma informarção para o servidor para que ele
 * saiba que as informações são desse formulario e não de outro lugar. Com isso, basta adicionar no formulario a assinatura:
 * 
 * @csrf
 * 
 * Com essa diretiva do blade ele ja cuida de todos os detalhes. 
 */