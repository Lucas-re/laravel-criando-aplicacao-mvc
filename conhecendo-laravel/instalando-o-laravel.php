<?php

/**
 * Instalação via composer:
 * 
 * Executamos o comando ´´´ composer create-project laravel/laravel <nome_do_projeto>´´´ via terminal para iniciar um projeto
 * em laravel
 * 
 * Após a intalação temos a seguinte estrutura de diretórios:
 * 
 * Vendor - é onde ficam os pacotes que serão instalados e os que ja foram instalados pelo laravel
 * Storage - onde é armazenado imagens que talvez queremos manipular, coisas que os usuarios fizeram upload
 * Routes - Temos as configurações das rotas 
 * Resources - Temos os recursos que estão relacionados ao frontend 
 * Public - A pasta publica que vai ser acessivel pelo servidor web 
 * Lang - Detalhes sobre tradução, caso queira ter o sistema em varios idiomas 
 * Database - Configuração do banco de dados 
 * Config - São as configurações de diversas coisas como, desde como o framework em si funciona até em qual banco de dados ele vai se conectar e etc
 * Bootstrap - É basicamente oque o laravel precisa para iniciar 
 * App - É onde de fato fica a aplicação. Onde será escrito os códigos.
 * 
 * Dentro da pasta App temos:
 * Console - 
 * Exceptions - Criar Exceções
 * Http - Coisas relacionadas A http como por exemplos os Controllers 
 * Models - Classes que tenham relação com a camada de model 
 * Providers - Coisas mais especificas do framework 
 */