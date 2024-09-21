<?php
/**
 * Vimos até aqui que o Laravel traz facilidades para o backend e frontend por ele ser um framework fullstack, como por exemplo o blade, 
 * mas o laravel consegue nos ajudar além disso, não só gerando html através do blade mas também com ferramentas especificas de frontend.
 * 
 * O laravel mix é basicamente um pacote javascript, ou seja, embora o laravel seja um framework php ele nos fornece um componente javascript 
 * para facilitar na escrita de um arquivo de configuração do webpack. Exemplo: para utilizarmos um plugin chamado postCss, ao inves de ter que 
 * montar a configuração do webpack, apenas indicamos onde esta o conteudo que queremos fazer o processamento e para onde esse conteudo vai
 * em apenas uma linha
 * 
 * Vamos instalar o mix e o bootstrap e depois, com o bootstrap instalado vamos configurar o webpack utilizando o mix; e pra isso precisamos ter 
 * o npm instalado. Acesse o site do nodeJs, instale o node que ele ja vem com o npm 
 * 
 * E para instalar o laravel mix é só executar o comando ´´´ npm install ´´´ 
 * OBS: caso esse comando não crie o arquivo webpack.mix.js execute o comando ´´´ npm install laravel-mix´´´  e depois crie o arquivo webpack.mix.js
 * com o comando touch webpack.mix.js e dentro dele adicione a seguinte estrutura
 * 
 * let mix = require('laravel-mix');
 * mix.js('src/app.js', 'dist').setPublicPath('dist');
 */