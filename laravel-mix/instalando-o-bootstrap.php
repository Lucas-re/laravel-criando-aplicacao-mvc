<?php
/**
 * Existem varias formas de se instalar o bootstrap e uma delas é atraves do gerenciador de dependencias, seja npm ou yarn.
 * Com o npm executamos o comando ´´´ npm install bootstrap ´´´ 
 * 
 * Para importar os estilos do bootstrap utlizamos o @import "bootstrap/scss/bootstrap" em um arquivo de scss.
 * Renomeamos o arquivo app.css dentro de resources/css para app.scss e adicionamos a importação do bootstrap.
 * 
 * Agora iriamos precisar fazer uma configuração para que o arquivo scss seja compilado para css e seja adicionado a pasta public; mas não
 * será necessario fazer essa configuração.
 * O que vamos precisar fazer é editar o arquivo webpack.mix.js adicionando o compilador para scss:
 * 
 * mix
 *   .sass('resources/css/app.css', 'public/css')
 *   .js('resources/js/app.js', 'public/js');
 * 
 * Anteriomente tinhamos o laravel-mix configurado com o post css, e agora estamos chamando um metodo chamado sass e o sass é uma outra 
 * dependencia do webpack que precisariamos instalar.
 * Então, na primeira vez que executarmos o comando do mix ele vai baixar essa dependencia para o projeto
 * Então quando executamos o comando ´´´ npm run dev ´´´ ele vai executar o laravel mix, se for a primeira vez que for executado esse comando
 * ele vai baixar o plugin de sass.
 * 
 * Ao finalizar a execução, será criado a pasta css em public com o arquivo app.css contendo o arquivo do bootstrap  
 */