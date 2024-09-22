<?php
/**
 * Agora vamos ver como podemos utilizar uma ferramenta que o laravel nos fornece para criar a estrutura do banco de dados.
 * Dentro do diretório database temos as pastas: factories, migrations, seeders. Seeders são criadores de dados que podemos utilizar
 * para ja inserir no banco de dados quando uma aplicação for inicializada, por exemplo, um usuario padrão com permissões ja definidas.
 * 
 * Já factories, são formas de você criar esses dados falsos, por exemplo, se queremos criar varios usuarios, podemos utilizar uma factorie
 * e por lá conseguimos criar um usuarios falsos com uma linha de código só.
 * 
 * Migrations é basicamente um versionamento do banco de dados. Nelas temos a criação de tabelas, e podemos desfazer uma migration, ou seja uma 
 * migration é um ponto de alteração no seu banco de dados; e toda migration pode ser desfeita e refeita de forma muito simples.
 * 
 * Para criarmos migrations executamos no terminal ´´´ php artisan make:migration <nome_da_migration> ´´´  Com isso o laravel cria uma nova classe
 * Dentro do arquivo de migration temos um exemplo de como funciona: 
 * Essa nova tabela vai ter um id sendo esse id já configurado como primary key autoincrement, podemos adionar mais campos a ser criado definido
 * o tamanho de de caracteres, se ele é unico, se ele pode ser nullo ou não... o timestamps basicamente criar os campos de: inserido e atualizado 
 * em determinado momento, ou seja, quando vamos criar um novo dado no banco de dados, esse campo de 'criado' em determinado momento vai ser 
 * preenchido com o momento atual; e quando o dado for atualizado, um campo de 'atualização' vai ser modificado também.
 * 
 * Para executarmos uma migration executamos o comando ´´´ php artisan migrate ´´´  com isso vamos ter todas as migrações, as que ja existiam e as
 * que foram criadas sendo executadas.  
 */