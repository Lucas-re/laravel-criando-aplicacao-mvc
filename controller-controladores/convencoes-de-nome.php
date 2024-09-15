<?php
/**
 * Vamos conhecer um metodo mais rapido de se criar uma classe com laravel e um detalhe sobre os nomes que vamos utilizar 
 * nos metodos dos controllers
 * 
 * Com o comando ´´´ php artisan make:controller <nome_da_classe> ´´´ o artisan cria a classe, ja adiconando no namespace correto.
 * 
 * A classe após ser criada irá extender a classe Controller, que com isso acaba ganhando algumas funcionalidades do laravel
 * 
 * # Nome de metodos
 * O metodo listarSeries() da classe SeriesController deve seguir um padrão na nomeclatura dos metodos dos controllers.
 * Na documentação do laravel, na parte de resources controllers, temos a exemplificação dos nomes a serem usados de acordo com o resource da action
 * exemplo: na url /series devemos usar o nome da action(ou metod) como index; ja na url /series/criar utilizariamos o metodo com o nome create.
 * 
 * OBS: caso você ja saiba que irá trabalhar com todos os metodos 'basicos' de um recurso, você pode criar um controller passando a flag --resource,
 * exemplo: ´´´ php artisan make:controller <nome_da_classe> --resource ´´´ 
 */