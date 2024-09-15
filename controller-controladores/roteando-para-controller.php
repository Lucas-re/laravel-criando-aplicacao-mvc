<?php
/**
 * Vamos criar uma rota para listar as series a partir de um controller:
 * 
 * No diretório app/http/controllers Criamos a Classe SeriesController.php com o metodo listarSeries() que será responsavel por exibir as series
 * quando for acessado a rota.
 * 
 * No arquivo web.php, dentro do diretório routes, criamos a rota, passando como um array, onde o primeiro item deste array é a classe e o segundo
 * item é o nome do metodo que será executado.
 * 
 * Route::get('/series', [SeriesController::class, 'listarSeries']); 
 */